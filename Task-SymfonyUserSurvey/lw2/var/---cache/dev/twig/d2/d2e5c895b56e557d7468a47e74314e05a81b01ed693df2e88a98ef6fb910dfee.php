<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* survey_process.html.twig */
class __TwigTemplate_0928f4344bb01cd62f88a8f8983d8ed8eebdfdbda519ba42678dbaa492a9c537 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "survey_process.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "survey_process.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>SURVEY INFO</title>
    </head>
    <body>
        ";
        // line 7
        if ((isset($context["survey_parsed"]) || array_key_exists("survey_parsed", $context) ? $context["survey_parsed"] : (function () { throw new RuntimeError('Variable "survey_parsed" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "            <div>Survey updated successfully</div>
        ";
        } else {
            // line 10
            echo "            <div>Invalid arguments passed, lookup from database</div>
        ";
        }
        // line 12
        echo "
        <div>----</div>

        ";
        // line 15
        if ( !twig_test_empty((isset($context["survey_parameters"]) || array_key_exists("survey_parameters", $context) ? $context["survey_parameters"] : (function () { throw new RuntimeError('Variable "survey_parameters" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["survey_parameters"]) || array_key_exists("survey_parameters", $context) ? $context["survey_parameters"] : (function () { throw new RuntimeError('Variable "survey_parameters" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 17
                echo "                <div>";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        ";
        } else {
            // line 20
            echo "            <div>EMPTY</div>
        ";
        }
        // line 22
        echo "
        <div>----</div>
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "survey_process.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 22,  87 => 20,  84 => 19,  73 => 17,  68 => 16,  66 => 15,  61 => 12,  57 => 10,  53 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <title>SURVEY INFO</title>
    </head>
    <body>
        {% if survey_parsed %}
            <div>Survey updated successfully</div>
        {% else %}
            <div>Invalid arguments passed, lookup from database</div>
        {% endif %}

        <div>----</div>

        {% if survey_parameters is not empty %}
            {% for key, value in survey_parameters %}
                <div>{{ key }} : {{ value }}</div>
            {% endfor %}
        {% else %}
            <div>EMPTY</div>
        {%  endif %}

        <div>----</div>
    </body>
</html>", "survey_process.html.twig", "C:\\Users\\karma\\Desktop\\progs NODELETE\\web_special\\web_special\\Task-SymfonyUserSurvey\\lw2\\templates\\survey_process.html.twig");
    }
}
