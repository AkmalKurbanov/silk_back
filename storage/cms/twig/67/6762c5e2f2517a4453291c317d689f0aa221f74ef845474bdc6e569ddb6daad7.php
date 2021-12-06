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

/* C:\work\OpenServer\domains\silk-road.loc/plugins/samuell/contenteditor/components/contenteditor/default.htm */
class __TwigTemplate_d5a688fcd375c6213cab607328230d0755c9fe13939992bed26b8f7beae113bb extends \Twig\Template
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
        echo "<";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, true, 1)) {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        } else {
            echo "div";
        }
        // line 2
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, true, 2)) {
            echo "data-fixture data-ce-tag=\"p\"";
        } else {
            echo "data-editable";
        }
        // line 3
        echo "    data-component=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 3, $this->source), "html", null, true);
        echo "::onSave\"
    data-file=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "file", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "\"
    data-tools=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tools", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\"
    ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "class", [], "any", false, false, true, 6)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "class", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 7
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "content", [], "any", false, false, true, 7), 7, $this->source);
        echo "
</";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, true, 8)) {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        } else {
            echo "div";
        }
        echo ">

";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "renderCount", [], "any", false, false, true, 10) == 1)) {
            // line 11
            echo "    ";
            echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'            );
            // line 12
            echo "    <script type=\"text/javascript\">
    /* CONTENT EDITOR SCRIPT START */
    ContentTools.StylePalette.add([
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "palettes", [], "any", false, false, true, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
                // line 16
                echo "            new ContentTools.Style('";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["style"], "name", [], "any", false, false, true, 16)) ? (twig_get_attribute($this->env, $this->source, $context["style"], "name", [], "any", false, false, true, 16)) : (twig_get_attribute($this->env, $this->source, $context["style"], "class", [], "any", false, false, true, 16))), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["style"], "class", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "', ";
                echo json_encode($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["style"], "allowed_tags", [], "any", false, false, true, 16), 16, $this->source));
                echo "),
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    ]);
    editor.toolbox().tools([
                                [
                                ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "buttons", [], "any", false, false, true, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 22
                echo "                                    '";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 22, $this->source), "html", null, true);
                echo "',
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                                ],
                                [
                                    'undo',
                                    'redo',
                                    'remove'
                                ]
                            ]);
    /* CONTENT EDITOR SCRIPT END */
    </script>
    ";
            // line 11
            echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true            );
            // line 34
            echo "    ";
            echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'            );
            // line 35
            echo "        <link rel=\"stylesheet\" href=\"/contenteditor/styles\">
    ";
            // line 34
            echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true            );
        }
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\silk-road.loc/plugins/samuell/contenteditor/components/contenteditor/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 34,  148 => 35,  145 => 34,  143 => 11,  132 => 24,  123 => 22,  119 => 21,  114 => 18,  101 => 16,  97 => 15,  92 => 12,  89 => 11,  87 => 10,  78 => 8,  74 => 7,  66 => 6,  62 => 5,  58 => 4,  53 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<{% if __SELF__.fixture %}{{ __SELF__.fixture }}{% else %}div{% endif %}
    {% if __SELF__.fixture %}data-fixture data-ce-tag=\"p\"{% else %}data-editable{% endif %}
    data-component=\"{{ __SELF__ }}::onSave\"
    data-file=\"{{ __SELF__.file }}\"
    data-tools=\"{{ __SELF__.tools }}\"
    {% if __SELF__.class %}class=\"{{ __SELF__.class }}\"{% endif %}>
    {{ __SELF__.content|raw }}
</{% if __SELF__.fixture %}{{ __SELF__.fixture }}{% else %}div{% endif %}>

{% if __SELF__.renderCount == 1 %}
    {% put scripts %}
    <script type=\"text/javascript\">
    /* CONTENT EDITOR SCRIPT START */
    ContentTools.StylePalette.add([
        {% for style in __SELF__.palettes %}
            new ContentTools.Style('{{ style.name ? style.name : style.class }}', '{{ style.class }}', {{ style.allowed_tags|json_encode()|raw }}),
        {% endfor %}
    ]);
    editor.toolbox().tools([
                                [
                                {% for value in __SELF__.buttons %}
                                    '{{ value }}',
                                {% endfor %}
                                ],
                                [
                                    'undo',
                                    'redo',
                                    'remove'
                                ]
                            ]);
    /* CONTENT EDITOR SCRIPT END */
    </script>
    {% endput %}
    {% put styles  %}
        <link rel=\"stylesheet\" href=\"/contenteditor/styles\">
    {% endput %}
{% endif %}
", "C:\\work\\OpenServer\\domains\\silk-road.loc/plugins/samuell/contenteditor/components/contenteditor/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "put" => 11, "for" => 15);
        static $filters = array("escape" => 1, "raw" => 7, "json_encode" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'put', 'for'],
                ['escape', 'raw', 'json_encode'],
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
