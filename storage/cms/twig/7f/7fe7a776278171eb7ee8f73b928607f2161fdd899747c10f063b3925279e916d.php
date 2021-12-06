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

/* C:\work\OpenServer\domains\silk-road.loc/themes/silk-road/pages/services.htm */
class __TwigTemplate_cc57acbf48b377f5e345cc221a68e55ec8a5c67ba41de59a7444c39bbf425b5c extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/breadcrumbs"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "<div class=\"services services--inside\">
  <div class=\"container\">
    <h6>НАШи услуги</h6>
    <div class=\"services__wrap-item\">
      ";
        // line 6
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "records", [], "any", false, false, true, 6);
        // line 7
        echo "      ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "displayColumn", [], "any", false, false, true, 7);
        // line 8
        echo "      ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "noRecordsMessage", [], "any", false, false, true, 8);
        // line 9
        echo "      ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "detailsPage", [], "any", false, false, true, 9);
        // line 10
        echo "      ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 10);
        // line 11
        echo "      ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 11);
        // line 12
        echo "
      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 14
            echo "
      <div class=\"services__service\"
        style=\"background-image: url('";
            // line 16
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "service_img", [], "any", false, false, true, 16), "path", [], "any", false, false, true, 16), 16, $this->source), 1140, false, ["mode" => "crop", "quality" => "80", "extension" => "webp"]]);
            echo "')\">
        <a href=\"";
            // line 17
            echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 17, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 17)]);
            echo "\">
          <span>";
            // line 18
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</span>
        </a>
      </div>

      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "      <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 23, $this->source), "html", null, true);
            echo "</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/pages/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  96 => 23,  86 => 18,  82 => 17,  78 => 16,  74 => 14,  69 => 13,  66 => 12,  63 => 11,  60 => 10,  57 => 9,  54 => 8,  51 => 7,  49 => 6,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'site/breadcrumbs' %}
<div class=\"services services--inside\">
  <div class=\"container\">
    <h6>НАШи услуги</h6>
    <div class=\"services__wrap-item\">
      {% set records = services.records %}
      {% set displayColumn = services.displayColumn %}
      {% set noRecordsMessage = services.noRecordsMessage %}
      {% set detailsPage = services.detailsPage %}
      {% set detailsKeyColumn = services.detailsKeyColumn %}
      {% set detailsUrlParameter = services.detailsUrlParameter %}

      {% for record in records %}

      <div class=\"services__service\"
        style=\"background-image: url('{{record.service_img.path | resize(1140, false, { mode: 'crop', quality: '80', extension: 'webp' })}}')\">
        <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
          <span>{{record.title}}</span>
        </a>
      </div>

      {% else %}
      <li class=\"no-data\">{{ noRecordsMessage }}</li>
      {% endfor %}

    </div>
  </div>
</div>", "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/pages/services.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 1, "set" => 6, "for" => 13);
        static $filters = array("resize" => 16, "page" => 17, "escape" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'set', 'for'],
                ['resize', 'page', 'escape'],
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
