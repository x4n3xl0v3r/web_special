<?php

class RequestSurveyLoader
{
    /**
     * Параметр strict говорит о том, как поступать, если в URL переданы невалидные значения
     *   strict=false: невалидные параметры не будут заполнены, экземпляр Survey будет возвращен
     *   strict=true : при первом же появлении невалидного параметра будет возвращен null
     */
    public static function loadSurvey(string $reqString, bool $strict=false): ?Survey
    {
        $args = RequestSurveyLoader::toMap($reqString);
        if (array_key_exists('email', $args))
        {
            $surveyInstance = new Survey($args['email']);
            if ($surveyInstance->mergeWithArray($args))
                return $surveyInstance;
            else
                return null;
        }
        else
        {
            return null;
        }
    }

    /**
     * Превращает QUERY_STRING в ассоциативный массив
     */
    private static function toMap(string $reqString): ?array
    {
        $retMap = array();
        $strings = explode("&", $reqString);
        foreach ($strings as $value)
        {
            for ($delimiterPos = 0; $delimiterPos < strlen($value); $delimiterPos++)  # я честно не знаю почему strpos не работает...
                if ($value[$delimiterPos] === '=')
                    break;
                
            $key = substr($value, 0, $delimiterPos);
            $arg = substr($value, $delimiterPos + 1);
            $retMap[$key] = $arg;
        }
        
        return $retMap;
    }
}