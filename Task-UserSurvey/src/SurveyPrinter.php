<?php
/**
 * Реализует печать объекта Survey
 */
class SurveyPrinter
{
    public static function printSurvey(Survey $inst): void
    {
        // Сортируем ключи чтобы гарантировать что параметры всегда будут выводится в одном порядке
        $data = $inst->dump();
        $keys = array_keys($data);
        sort($keys);
        foreach ($keys as $currKey)
            echo $currKey . ': ' . ($data[$currKey] == '' ? '<empty>' : $data[$currKey]) . "\n";
    }
}