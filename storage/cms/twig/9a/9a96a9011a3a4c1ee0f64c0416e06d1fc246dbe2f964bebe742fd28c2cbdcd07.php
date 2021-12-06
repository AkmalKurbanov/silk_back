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

/* C:\work\OpenServer\domains\silk-road.loc/plugins/silkroad/reviews/components/review/default.htm */
class __TwigTemplate_28d8f7ed7183593e9b2a3b35d8674ddfd956b0a67da551d2e6d44cdc86c896ac extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "  <form data-request=\"onReview\">
    <input type=\"hidden\" name=\"name\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"surname\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "surname", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"address\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "address", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"email\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\">
    <textarea name=\"message\" placeholder=\"";
        // line 6
        echo "Оставьте свой отзыв";
        echo "\"></textarea>
    <button type=\"submit\">
      <span class=\"btn\">";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Отправить"]);
        echo "</span>
    </button>
  </form>
";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\silk-road.loc/plugins/silkroad/reviews/components/review/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  58 => 6,  54 => 5,  50 => 4,  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <form data-request=\"onReview\">
    <input type=\"hidden\" name=\"name\" value=\"{{user.name}}\">
    <input type=\"hidden\" name=\"surname\" value=\"{{user.surname}}\">
    <input type=\"hidden\" name=\"address\" value=\"{{user.address}}\">
    <input type=\"hidden\" name=\"email\" value=\"{{user.email}}\">
    <textarea name=\"message\" placeholder=\"{{'Оставьте свой отзыв'}}\"></textarea>
    <button type=\"submit\">
      <span class=\"btn\">{{'Отправить'|_}}</span>
    </button>
  </form>
", "C:\\work\\OpenServer\\domains\\silk-road.loc/plugins/silkroad/reviews/components/review/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2, "_" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', '_'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
