<?php

namespace App\Module\Survey;

/**
 * Класс реализует сериализацию, сохранение на диск, считывание 
 * с диска объектов Survey.
 */
class SurveyFileStorage
{
    const OS_DELIMITER_WIN = '\\';
    const OS_DELIMITER_UNIX = '/';
    const PARAM_FIRSTNAME = 'First Name';
    const PARAM_LASTNAME  = 'Last Name';
    const PARAM_EMAIL = 'Email';
    const PARAM_AGE   = 'Age';

    private string $dataFilesLocation;   // Директория, где хранятся данные пользователей. По умолчанию 'data'
    private string $dataFormatDelimiter; // Разделитель внутри файла. по умолчанию ':'
    private string $pathDelimiter;       // Разделитель FS путей. Автовыбор в зависимости от системы
    private string $pathExt;             // Расширение файла
    private static array $dataKeys;      // Таблица для трансляции параметров из URL в параметры файла и наоборот 

    public function __construct()
    {
        $this->dataFilesLocation = '';
        $this->dataFormatDelimiter = ':';
        $this->pathExt = 'usrdat';

        switch (strtolower(PHP_OS_FAMILY))
        {
            case 'windows':
                $this->pathDelimiter = self::OS_DELIMITER_WIN;
                break;
            default:
                $this->pathDelimiter = self::OS_DELIMITER_UNIX;
        }

        self::$dataKeys = [
            Survey::SURVEY_FIRST_NAME=>self::PARAM_FIRSTNAME,
            Survey::SURVEY_LAST_NAME =>self::PARAM_LASTNAME,
            Survey::SURVEY_EMAIL     =>self::PARAM_EMAIL,
            Survey::SURVEY_AGE       =>self::PARAM_AGE,
        ];
    }
    #region getters,setters
    public function setFilesLocation(string $path): ?bool
    {
        if ($this->repair($path))
        {
            $this->dataFilesLocation = $path;
            return true;
        }
        return false;
    }

    public function getFilesLocation(): ?string
    {
        return $this->dataFilesLocation;
    }

    /** 
     * Поскольку в файловом пути могут использоваться не все символы,
     * отводим на расширение файла только буквы и цифры.
     */
    public function setFileExtension(string $ext): ?bool
    {
        if (ctype_alnum($ext))
        {
            $this->pathExt = $ext;
            return true;
        }
        return false;
    }

    public function getFileExtension(): ?string
    {
        return $this->pathExt;
    }
    #endregion

    /**
     * Внимание! Функция изменяет состояние переданного объекта
     * (выполняет Survey::_merge() для $inst с другим экземпляром Survey, считанным из файла).
     * Если это поведение нежелательно, используй overwriteSurveyImmutable
     */ 
    public function overwriteSurveyMutable(Survey $inst): ?bool
    {
        $email = $inst->getEmail();
        $filename = $this->createFileName($email);
        
        if ($email === '')
            return false;

        if (file_exists($filename))
        {
            $existsSurvey = $this->readSurvey($email);
            if (!is_null($existsSurvey))
                $inst->mergeWithSurvey($existsSurvey);
            unlink($filename);
        }

        if ($this->writeSurvey($inst))
            return true;

        return false;
    }

    public function overwriteSurveyImmutable(Survey $inst): ?bool
    {
        $newInstance = clone $inst;
        return $this->overwriteSurveyMutable($newInstance);
    }

    /**
     * Запись объекта Survey в файл
     * При возникновении ошибок возвращает false, иначе - true
     */
    public function writeSurvey(Survey $inst): ?bool
    {
        if ($hFile = ($this->openFile($inst->getEmail(), 'wt')))
        {
            $data = $inst->dump();
            $opstate = true;
            foreach ($data as $key=>$value)
            {
                $opstate &= fwrite($hFile, self::$dataKeys[$key] . $this->dataFormatDelimiter . ' ' . $value . "\n");
                if ($opstate === false)
                    break;
            }
            fclose($hFile);
            return $opstate;
        }
        return false;
    }

    /**
     * Чтение объекта Survey из файла.
     * При возникновении ошибок возвращает null, иначе - считанный Survey.
     * strict отвечает за игнорирование невалидных параметров при чтении.
     *   strict=false: невалидные параметры будут отброшены, а Survey возвращен
     *   strict=true : при хоть 1 невалидном параметре будет возвращен null
     */
    public function readSurvey(string $_email, bool $strict=true): ?Survey
    {
        $resolvedName = $this->createFileName($_email);
        $userData = array();
        if (file_exists($resolvedName)) 
        {
            if ($hFile = $this->openFile($_email))
            {
                while ($line = fgets($hFile))  
                {
                    $line = trim($line); 
                    for ($delimiterPos = 0; $delimiterPos < strlen($line); $delimiterPos++)  // я честно не знаю почему strpos не работает... (x2)
                        if ($line[$delimiterPos] === $this->dataFormatDelimiter)
                            break;
                        
                    // Разделяем ключ и значение по делимитеру
                    if (($delimiterPos === false) & (strlen($line) !== 0))                  // файл поврежден, не работаем с ним
                    {
                        fclose($hFile);
                        return null;  
                    }
               
                    $parameterName = substr($line, 0, $delimiterPos); 
                    $translatedKey = array_search($parameterName, self::$dataKeys);
                    if ($translatedKey !== false)
                        $userData[$translatedKey] = substr($line, $delimiterPos + 2);
                }
            } 
            else 
            {
                return null;  // Ошибка открытия файла
            }
            
            fclose($hFile);
        }
        
        $surveyInstance = new Survey($_email);
        $mergeState = $surveyInstance->mergeWithArray($userData);
        if ($strict)
        {
            if ($mergeState)
                return $surveyInstance;
            else
                return null;  // Попался как минимум 1 невалидный параметр. Возможно, файл поврежден или изменен извне
        }
        else
            return $surveyInstance;
    }
    
    /* * * * * * * * * * * * * * * */

    private function createFileName(string $fileKey): ?string
    {
        return $this->dataFilesLocation . $this->pathDelimiter . $fileKey . '.' . $this->pathExt;
    }

    /**
     * Проверяет наличие заданной для сохранения директории и,
     * в случае отсутствия, пытается её создать.
     * (!) Может возвращать ошибку, если прав для создания директории
     *     недостаточно (E_WARNING)
     */
    private function repair(string $_tryPath): ?bool
    {
        $successed = true;
        if (!file_exists($_tryPath))
            $successed = mkdir($_tryPath);
        
        return $successed; 
    }

    private function openFile(string $fileKey, string $openMode='rt')
    {
        if ($this->repair($this->dataFilesLocation))
            return fopen($this->createFileName($fileKey), $openMode);
        return false;
    }
}