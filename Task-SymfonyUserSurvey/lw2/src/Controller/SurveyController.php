<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Psr\Container\ContainerInterface;
use App\Module\Survey\UserSurvey;

require_once dirname(__DIR__) . '../Module/Survey/UserSurvey.php';


class SurveyController extends AbstractController
{
    public function processSurvey()
    {
        $instance = new UserSurvey('data', true);
        $survey = $instance->saveSurvey();
        $surveyParameters = $instance->getSurveyInfoArray($survey);
        // var_dump($surveyParameters);
        $response = new Response();
        $a = $this->render(
            "survey.html.twig",
            [
                'survey_parameters'=>$surveyParameters,
            ],
            $response
        );
        return $response;
    }
}