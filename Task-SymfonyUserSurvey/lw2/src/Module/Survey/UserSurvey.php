<?php

namespace App\Module\Survey;
require_once 'common.inc.php';

class UserSurvey
{
    private string $filesLocation;
    private bool $strictUrlValidation;
    private SurveyFileStorage $fileStorage;
    private RequestSurveyLoader $requestLoader;
    private SurveyPrinter $surveyPrinter;
    private Survey $lastSurvey;

    public function __construct(string $_filesLocation, bool $_strictUrlValid=true)
    {
        $this->filesLocation = $_filesLocation;
        $this->strictUrlValidation = $_strictUrlValid;

        $this->fileStorage = new SurveyFileStorage();
        $this->fileStorage->setFilesLocation('data');

        $this->requestLoader = new RequestSurveyLoader($_strictUrlValid);
        $this->surveyPrinter = new SurveyPrinter();
    }

    public function saveSurvey(): ?Survey
    {
        $currSurvey = $this->requestLoader->loadSurvey($_SERVER['QUERY_STRING']);
        if (!is_null($currSurvey))
            $this->fileStorage->overwriteSurveyMutable($currSurvey);

        $this->lastSurvey = $currSurvey;
        return $currSurvey;
    }

    public function getSurveyInfoString(?Survey $instance): string
    {
        if ($instance)
            return $this->surveyPrinter::formatSurvey($instance);
        else
            return '<invalid_element>';
    }

    public function getLastSurvey(): ?Survey
    {
        return $this->lastSurvey;
    }

    public function getSurveyInfoArray(?Survey $instance): array
    {
        if ($instance)
            return $instance->dump();
        else
            return [];
    }
}