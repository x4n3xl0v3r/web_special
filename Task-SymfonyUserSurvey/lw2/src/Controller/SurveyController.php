<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Module\Survey\UserSurvey;

require_once dirname(__DIR__) . '../Module/Survey/UserSurvey.php';

class SurveyController extends AbstractController
{
    public function processSurvey()
    {
        $userSurveyInstance = new UserSurvey('data', true);
        $survey = $userSurveyInstance->saveSurvey();
        $surveyParsed = false;
        $surveyParameters = [];
        if ($survey)
        {
            $surveyParameters = $userSurveyInstance->getSurveyInfoArray($survey);
            $surveyParsed = true;
        }
        else
        {
            $surveyFromFile = $userSurveyInstance->getSurveyFromFile();
            $surveyParameters = $userSurveyInstance->getSurveyInfoArray($surveyFromFile);
        }

        return $this->render(
            "survey_process.html.twig",
            [
                'survey_parameters'=>$surveyParameters,
                'survey_parsed'=>$surveyParsed,
            ]
        );
    }

    public function saveSurvey()
    {
        $userSurveyInstance = new UserSurvey('data', true);
        $survey = $userSurveyInstance->saveSurvey();
        return $this->render("survey_save.html.twig", ['state'=>is_null($survey)]);
    }

    public function printSurvey()
    {
        $userSurveyInstance = new UserSurvey('data', true);
        $survey = $userSurveyInstance->getSurveyFromFile();
        $surveyParameters = $userSurveyInstance->getSurveyInfoArray($survey);
        return $this->render(
            "survey_print.html.twig",
            [
                'survey_parameters'=>$surveyParameters,
            ]
        );
    }
}