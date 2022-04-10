<?php

namespace App\Module\Survey;

/**
 * Реализует печать объекта Survey
 */
class SurveyPrinter
{
    public static function formatSurvey(Survey $inst): string
    {
        // Сортируем ключи чтобы гарантировать что параметры всегда будут выводится в одном порядке
        $data = $inst->dump();
        $keys = array_keys($data);
        sort($keys);
        $returnString = "";
        foreach ($keys as $currKey)
            $returnString = $returnString . ($currKey . ': ' . ($data[$currKey] == '' ? '<empty>' : $data[$currKey]) . "\n");
        return $returnString;
    }
}