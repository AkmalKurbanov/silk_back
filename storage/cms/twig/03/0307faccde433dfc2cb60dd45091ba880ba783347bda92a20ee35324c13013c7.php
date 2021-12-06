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

/* C:\work\OpenServer\domains\silk-road.loc/themes/silk-road/partials/site/about.htm */
class __TwigTemplate_1a8ac2a8dad1fdde486c76780c5e2f0b71e46e97f0f9f4a7c4633a9920d6b600 extends \Twig\Template
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
        echo "<div class=\"about-info\">
  <div class=\"container\">
    <div class=\"about-info__wrap\">
      <div class=\"about-info__item\">
        ";
        // line 5
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "div"        ;
        $context['__cms_component_params']['class'] = "about-info__title"        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "about/item1.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "        ";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "div"        ;
        $context['__cms_component_params']['class'] = "about-info__desc"        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "about/item1.1.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "      </div>
      <div class=\"about-info__item\">
        ";
        // line 9
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "div"        ;
        $context['__cms_component_params']['class'] = "about-info__title"        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "about/item2.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "        ";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "div"        ;
        $context['__cms_component_params']['class'] = "about-info__desc"        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "about/item2.1.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "      </div>
      <div class=\"about-info__item\">
        ";
        // line 13
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "div"        ;
        $context['__cms_component_params']['class'] = "about-info__title"        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "about/item3.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 14
        echo "        ";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "div"        ;
        $context['__cms_component_params']['class'] = "about-info__desc"        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "about/item3.1.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 15
        echo "      </div>
      <div class=\"about-info__item\">
        ";
        // line 17
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "div"        ;
        $context['__cms_component_params']['class'] = "about-info__title"        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "about/item4.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 18
        echo "        ";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "div"        ;
        $context['__cms_component_params']['class'] = "about-info__desc"        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "about/item4.1.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 19
        echo "      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/partials/site/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 19,  116 => 18,  108 => 17,  104 => 15,  95 => 14,  87 => 13,  83 => 11,  74 => 10,  66 => 9,  62 => 7,  53 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"about-info\">
  <div class=\"container\">
    <div class=\"about-info__wrap\">
      <div class=\"about-info__item\">
        {% component 'contenteditor' fixture=\"div\" class=\"about-info__title\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"about/item1.htm\" %}
        {% component 'contenteditor' fixture=\"div\" class=\"about-info__desc\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"about/item1.1.htm\" %}
      </div>
      <div class=\"about-info__item\">
        {% component 'contenteditor' fixture=\"div\" class=\"about-info__title\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"about/item2.htm\" %}
        {% component 'contenteditor' fixture=\"div\" class=\"about-info__desc\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"about/item2.1.htm\" %}
      </div>
      <div class=\"about-info__item\">
        {% component 'contenteditor' fixture=\"div\" class=\"about-info__title\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"about/item3.htm\" %}
        {% component 'contenteditor' fixture=\"div\" class=\"about-info__desc\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"about/item3.1.htm\" %}
      </div>
      <div class=\"about-info__item\">
        {% component 'contenteditor' fixture=\"div\" class=\"about-info__title\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"about/item4.htm\" %}
        {% component 'contenteditor' fixture=\"div\" class=\"about-info__desc\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"about/item4.1.htm\" %}
      </div>
    </div>
  </div>
</div>", "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/partials/site/about.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 5);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                [],
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
