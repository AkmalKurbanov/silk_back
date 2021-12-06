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

/* C:\work\OpenServer\domains\silk-road.loc/themes/silk-road/partials/site/shop.htm */
class __TwigTemplate_88f25709a08b26b01f46c0501fa5ee403ddab10d46b8305758ea34b6f34c9684 extends \Twig\Template
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
        echo "<div class=\"online-store\">
  <div class=\"container\">
    <h2 class=\"title\">";
        // line 3
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Популярные Интернет Магазины США"]);
        echo "</h2>
    <div class=\"description\">
      <p>";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Заказы у ваших дверей в кратчайший срок"]);
        echo "</p>
    </div>
    <div class=\"online-store__wrap\">

      ";
        // line 9
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["store"] ?? null), "records", [], "any", false, false, true, 9);
        // line 10
        echo "      ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["store"] ?? null), "displayColumn", [], "any", false, false, true, 10);
        // line 11
        echo "      ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["store"] ?? null), "noRecordsMessage", [], "any", false, false, true, 11);
        // line 12
        echo "      ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["store"] ?? null), "detailsPage", [], "any", false, false, true, 12);
        // line 13
        echo "      ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["store"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 13);
        // line 14
        echo "      ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["store"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 14);
        // line 15
        echo "
      ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 17
            echo "      <div class=\"online-store__item\">
        <p><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</a> - ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "desc", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</p>
      </div>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "      <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 21, $this->source), "html", null, true);
            echo "</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "


    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/partials/site/shop.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 23,  95 => 21,  83 => 18,  80 => 17,  75 => 16,  72 => 15,  69 => 14,  66 => 13,  63 => 12,  60 => 11,  57 => 10,  55 => 9,  48 => 5,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"online-store\">
  <div class=\"container\">
    <h2 class=\"title\">{{'Популярные Интернет Магазины США'|_}}</h2>
    <div class=\"description\">
      <p>{{'Заказы у ваших дверей в кратчайший срок'|_}}</p>
    </div>
    <div class=\"online-store__wrap\">

      {% set records = store.records %}
      {% set displayColumn = store.displayColumn %}
      {% set noRecordsMessage = store.noRecordsMessage %}
      {% set detailsPage = store.detailsPage %}
      {% set detailsKeyColumn = store.detailsKeyColumn %}
      {% set detailsUrlParameter = store.detailsUrlParameter %}

      {% for record in records %}
      <div class=\"online-store__item\">
        <p><a href=\"{{record.name}}\">{{record.name}}</a> - {{record.desc}}</p>
      </div>
      {% else %}
      <li class=\"no-data\">{{ noRecordsMessage }}</li>
      {% endfor %}



    </div>
  </div>
</div>", "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/partials/site/shop.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 9, "for" => 16);
        static $filters = array("_" => 3, "escape" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['_', 'escape'],
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
