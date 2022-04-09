<?php
/**
 * Survey реализует хранение данных об анкете 
 * Если у класса требуется сменить поле $email, то тогда следует создать новый объект Survey с новым $email и скопировать в него остальные данные.
 * $surveyValidationLevel определяет, какие исключения будут выбрасывать сеттеры (и связанные с ними методы), полезно дял отладки
 * (!) + Поля first_name и last_name имеют ограничение по длине
 *     + Поле email обязательно к заполнению и должно 
 *       быть синтаксически верным email-адресом
 */
class Survey
{
    public const SURVEY_EMAIL = 'email';
    public const SURVEY_AGE = 'age';
    public const SURVEY_FIRST_NAME = 'first_name';
    public const SURVEY_LAST_NAME = 'last_name';

    private array $data;
    private static array $validators;
    private static int   $surveyValidationLevel; // 0 - без валидации; 1 - только невалидные параметры; >1 -невалидные и отброшенные параметры
    
    /* * * * * * * * * * * * * * * * * * */

    public function __construct(string $_email) 
    {
        self::$surveyValidationLevel = 0;
        $this->data = [];
        $this->data[self::SURVEY_EMAIL] = $_email;
        $this->data[self::SURVEY_AGE] = '';  // Храним всё в виде строк для упрощения реализации merge
        $this->data[self::SURVEY_FIRST_NAME] = '';
        $this->data[self::SURVEY_LAST_NAME] = '';

        self::$validators = [
            self::SURVEY_EMAIL     =>function($x) { return filter_var($x, FILTER_VALIDATE_MAIL); },
            self::SURVEY_AGE       =>function($x) { $y = intval($x); return ($y > 0) & ($y < 120); },
            self::SURVEY_FIRST_NAME=>function($x) { return strlen($x) < 512; },
            self::SURVEY_LAST_NAME =>function($x) { return strlen($x) < 512; },
        ];
    }
    #region getters,setters
    public function setParameter(string $_paramName, string $value): ?bool
    {
        return $this->_set($_paramName, $value);
    }

    public function getParameter(string $_paramName): ?string
    {
        return $this->data[$_paramName];
    }
    
    public function getEmail(): ?string
    {
        return $this->data[self::SURVEY_EMAIL];
    }
    
    public function getAge(): ?int
    {
        return intval($this->data[self::SURVEY_AGE]);
    }
 
    public function setAge(int $_age): ?bool
    {
        return $this->_set(self::SURVEY_AGE, $_age);
    }
    
    public function getFirstName(): ?string
    {
        return $this->data[self::SURVEY_FIRST_NAME];
    }
    
    public function setFirstName(string $_name): ?bool
    {
        return $this->_set(self::SURVEY_FIRST_NAME, $_name);
    }
    
    public function getLastName(): ?string
    {
        return $this->data[self::SURVEY_LAST_NAME];
    }
    
    public function setLastName(string $_sname): ?bool
    {
        return $this->_set(self::SURVEY_LAST_NAME, $_sname);
    }
    #endregion 

    public function dump(): ?array
    {
        return (new ArrayObject($this->data))->getArrayCopy();
    }

    #region merge
    /**
     * Реализует "накопительное" присвоение параметров от другого
     * экземпляра Survey к текущему
     */
    public function mergeWithSurvey(Survey $other): ?bool
    {
        $otherData = $other->dump();
        return $this->_merge($otherData);
    } 

    public function mergeWithArray(array $otherData): ?bool
    {
        return $this->_merge($otherData);
    }

    /* * * * * * * * * * * * * * * * * * */

    private function _merge(array $otherData): ?bool
    {
        $arrKeys = array_keys($this->data);
        $opstate = true;
        foreach ($arrKeys as $key)
        {
            if (($this->data[$key] === '') & (array_key_exists($key, $otherData)))
                $opstate &= $this->_set($key, $otherData[$key]);
        }
        return $opstate;
    }
    #endregion

    /**
     * Устанавливает значение параметра по ключу, предварительно прогнав его
     * через ассоциированный с к ключом валидатор и в конце возвращает BOOL
     * в зависимости от того, был ли установлен параметр
     * @throws Exception
     */
    private function _set(string $key, string $value): ?bool
    {
        if (array_key_exists($key, $this->data))
        {
            if (self::$validators[$key]($value))
            {
                $this->data[$key] = strval($value);
                return true;
            }

            if (self::$surveyValidationLevel > 0)
                throw new Exception('Survey::_set(): paramer not valid; key=<' . $key . '> value=<' . $value . ">\n");
        }

        if (self::$surveyValidationLevel > 1)
            throw new Exception('Survey::_set(): bad key; key=<' . $key . '> value=<' . $value . ">\n");
        
        return false;
    }
}