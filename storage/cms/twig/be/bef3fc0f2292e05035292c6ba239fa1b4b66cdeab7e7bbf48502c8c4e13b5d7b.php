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

/* C:\work\OpenServer\domains\silk-road.loc/themes/silk-road/partials/site/breadcrumbs.htm */
class __TwigTemplate_2a9d7f75d73641bd4c74e3bd9b55dadf6f9e9b2137bb0e376c12440684b7ac69 extends \Twig\Template
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
        echo "<div class=\"breadcrumbs\">
  <div class=\"container\">
    <ul>
      <li> <a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Главная"]);
        echo " </a></li>
      <li>";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</li>
    </ul>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/partials/site/breadcrumbs.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"breadcrumbs\">
  <div class=\"container\">
    <ul>
      <li> <a href=\"{{ 'home'|page }}\">{{'Главная'|_}} </a></li>
      <li>{{this.page.title}}</li>
    </ul>
  </div>
</div>", "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/partials/site/breadcrumbs.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 4, "_" => 4, "escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page', '_', 'escape'],
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
