<?php

header('Content-Type: text/plain');

require_once('src/Survey.php');
require_once('src/SurveyFileStorage.php');
require_once('src/RequestSurveyLoader.php');
require_once('src/SurveyPrinter.php');

/* * * * * * * * * * * * * * * * * * * * */
# При невалидном вводе сразу выводим ошибку (если false то поведение зависит от настроек Survey)
$strictURLValidation = true;

/* * * * * * * * * * * * * * * * * * * * */

$fileStorage = new SurveyFileStorage();
$fileStorage->setFilesLocation('data');
$currSurvey = RequestSurveyLoader::loadSurvey($_SERVER['QUERY_STRING'], $strictURLValidation);

if (!is_null($currSurvey))
{
    $fileStorage->overwriteSurveyMutable($currSurvey);

    echo "Актуальная информация о анкете:\n";
    SurveyPrinter::printSurvey($currSurvey);
}
else
{
    echo "invalid input\n";
}
