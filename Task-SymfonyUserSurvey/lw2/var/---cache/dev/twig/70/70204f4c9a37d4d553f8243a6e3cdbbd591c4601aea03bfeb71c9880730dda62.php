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
class __TwigTemplate_e4c4acf442639a03ed84d47b4d461a04123401581d9f468fc53eccb30b2708ee extends Template
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
        if ( !twig_test_empty((isset($context["survey_parameters"]) || array_key_exists("survey_parameters", $context) ? $context["survey_parameters"] : (function () { throw new RuntimeError('Variable "survey_parameters" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["survey_parameters"]) || array_key_exists("survey_parameters", $context) ? $context["survey_parameters"] : (function () { throw new RuntimeError('Variable "survey_parameters" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 9
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
            // line 11
            echo "        ";
        }
        // line 12
        echo "    </body>
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
        return array (  72 => 12,  69 => 11,  58 => 9,  53 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <title>SURVEY INFO</title>
    </head>
    <body>
        {% if survey_parameters is not empty %}
            {% for key, value in survey_parameters %}
                <div>{{ key }} : {{ value }}</div>
            {% endfor %}
        {%  endif %}
    </body>
</html>", "survey_process.html.twig", "C:\\Users\\karma\\php_projects\\lw2\\templates\\survey_process.html.twig");
    }
}
