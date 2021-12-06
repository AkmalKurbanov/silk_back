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

/* C:\work\OpenServer\domains\silk-road.loc/themes/silk-road/pages/home.htm */
class __TwigTemplate_599440eb8e8ebc76e238f73a2b9f6059360eff89ef0763b739054a77300efe96 extends \Twig\Template
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
        echo "<div class=\"hero\">
  <div class=\"hero__bg\">
    ";
        // line 3
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "hero/img.htm"        ;
        $context['__cms_component_params']['fixture'] = ""        ;
        $context['__cms_component_params']['tools'] = "image,remove"        ;
        $context['__cms_component_params']['class'] = "hero-bg"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "  </div>
  <div class=\"container\">
    <div class=\"hero__text-block\">
      ";
        // line 7
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "h2"        ;
        $context['__cms_component_params']['class'] = "hero__title"        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "hero/title.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "      <div class=\"hero__desc\">
        ";
        // line 9
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "hero/desc1.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "        <a class=\"btn btn--sm order-js fedex-js\" href=\"#illinois-form\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Заполнить форму"]);
        echo " </a>
        ";
        // line 11
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "hero/desc2.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 12
        echo "      </div>
    </div>
    <a class=\"btn btn--sm order-js\" href=\"#calculator\">";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Рассчитать стоимость онлайн"]);
        echo " </a>
    <div class=\"schedule\">
      <div class=\"schedule__item\">
        <div class=\"schedule__inside-block\"><i class=\"icon-check\"> </i>
          ";
        // line 18
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['file'] = "hero/status/day.htm"        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 19
        echo "        </div>
        <div class=\"schedule__date\">
          ";
        // line 21
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "div"        ;
        $context['__cms_component_params']['file'] = "hero/status/date.htm"        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['class'] = "schedule__date"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 22
        echo "        </div>
      </div>
      <div class=\"schedule__item\">
        <div class=\"schedule__location\">
          <i class=\"icon-marker\"></i>
          ";
        // line 27
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['file'] = "hero/status/location.htm"        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 28
        echo "        </div>
      </div>
      <div class=\"schedule__item schedule__item--next\">
        <div class=\"schedule__inside-block\"><i class=\"icon-calendar\"> </i>
          <p>";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["СЛЕДУЮЩАЯ ПОСЫЛКА"]);
        echo "</p>
        </div>
        <div class=\"schedule__date\">
          ";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "sunday", "d.m.Y"), "html", null, true);
        echo "
        </div>
      </div>
      <div class=\"schedule__item schedule__item--collection\">
        <div class=\"schedule__inside-block\"><i class=\"icon-product\"> </i>
          <p>";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["СБОР ПОСЫЛОК"]);
        echo "</p>
        </div>
        <p class=\"schedule__date\">
          ДО 
          ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "wednesday", "d.m.Y"), "html", null, true);
        echo "
        </p>
      </div>
    </div>
  </div>



</div>
<div class=\"advantages\">
  <div class=\"container\">
    <div class=\"advantages__wrap\">
      <div class=\"advantages__item advantages__item--desc\">
        <h3 class=\"advantages__subtitle\">";
        // line 57
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Почему доверяют нашей компании?"]);
        echo "</h3>
        <h2 class=\"advantages__title\">Silk Road Shipping</h2>
        ";
        // line 59
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['class'] = "advantages__desc"        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "advantages/desc.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 60
        echo "      </div>

      ";
        // line 62
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["advantages"] ?? null), "records", [], "any", false, false, true, 62);
        // line 63
        echo "      ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["advantages"] ?? null), "displayColumn", [], "any", false, false, true, 63);
        // line 64
        echo "      ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["advantages"] ?? null), "noRecordsMessage", [], "any", false, false, true, 64);
        // line 65
        echo "      ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["advantages"] ?? null), "detailsPage", [], "any", false, false, true, 65);
        // line 66
        echo "      ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["advantages"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 66);
        // line 67
        echo "      ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["advantages"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 67);
        // line 68
        echo "

      ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 71
            echo "
      <div class=\"advantages__item\">
        <div class=\"advantages__icon\"><img
            src=\"";
            // line 74
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "advantage_img", [], "any", false, false, true, 74), "path", [], "any", false, false, true, 74), 74, $this->source), 40, false, ["mode" => "crop", "quality" => "80", "extension" => "webp"]]);
            echo "\"
            alt=\"\"></div>
        <h2 class=\"advantages__title\">";
            // line 76
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "</h2>
        <p class=\"advantages__desc\">";
            // line 77
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "desc", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "</p>
      </div>

      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 81
            echo "      <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 81, $this->source), "html", null, true);
            echo "</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "


      <div class=\"advantages__item advantages__item--calc\">
        <div class=\"advantages__icon\"><i class=\"icon-calculator\"></i></div>
        <h2 class=\"advantages__title\">";
        // line 88
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Рассчитайте стоимость перевозки прямо сейчас!"]);
        echo "</h2><a
          class=\"btn btn--sm order-js\" href=\"#calculator\">";
        // line 89
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Рассчитать стоимость"]);
        echo "</a>
      </div>
    </div>
  </div>
</div>
";
        // line 94
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/calc"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 95
        echo "<div class=\"services\">
  <div class=\"container\">
    <h3 class=\"subtitle\">";
        // line 97
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Услуги"]);
        echo "</h3>
    <h2 class=\"title\">";
        // line 98
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Международная доставка посылок"]);
        echo "</h2>
    <p class=\"description\">";
        // line 99
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Быстрая и надежная доставка ваших посылок и документов."]);
        echo "</p>
    <div class=\"services__wrap\">

      ";
        // line 102
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "records", [], "any", false, false, true, 102);
        // line 103
        echo "      ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "displayColumn", [], "any", false, false, true, 103);
        // line 104
        echo "      ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "noRecordsMessage", [], "any", false, false, true, 104);
        // line 105
        echo "      ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "detailsPage", [], "any", false, false, true, 105);
        // line 106
        echo "      ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 106);
        // line 107
        echo "      ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 107);
        // line 108
        echo "

      ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 111
            echo "
      <div class=\"services__item\">
        <a class=\"services__item-img\"
          href=\"";
            // line 114
            echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 114, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 114)]);
            echo "\"
          style=\"background-image:
          url('";
            // line 116
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "service_img", [], "any", false, false, true, 116), "path", [], "any", false, false, true, 116), 116, $this->source), 350, false, ["mode" => "crop", "quality" => "80", "extension" => "webp"]]);
            echo "');\">
        </a>
        <div class=\"services__item-desc\">
          <a class=\"services__title\"
            href=\"";
            // line 120
            echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 120, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 120)]);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
            echo "</a>
          <p class=\"p16\">";
            // line 121
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "desc", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
            echo "</p>
        </div>
      </div>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 125
            echo "      <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 125, $this->source), "html", null, true);
            echo "</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "


    </div>
  </div>
</div>
<div class=\"about\">
  <div class=\"container\">
    <div class=\"about__wrap\">
      <div class=\"about__col\">
        ";
        // line 137
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "about/about-img.htm"        ;
        $context['__cms_component_params']['fixture'] = ""        ;
        $context['__cms_component_params']['tools'] = "image,remove"        ;
        $context['__cms_component_params']['class'] = "about-img"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 138
        echo "      </div>
      <div class=\"about__col\">
        <h3 class=\"subtitle\">";
        // line 140
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Коротко о нас"]);
        echo "</h3>
        <h2 class=\"title\">Silk Road Shipping</h2>
        <div class=\"description\">
          ";
        // line 143
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['class'] = ""        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "about/about-short.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 144
        echo "        </div><a class=\"more\" href=\"#\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Подробнее"]);
        echo " <i class=\"icon-arrow\"></i></a>
      </div>
    </div>
  </div>
  ";
        // line 148
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 149
        echo "  <div class=\"container\">
    <div class=\"about__wrap about__wrap--reverse\">
      <div class=\"about__col\">
        <div class=\"about__img about__img--info\">
          <img src=\"";
        // line 153
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/advantages.webp");
        echo "\" alt=\"\">
          <div class=\"about__img-inside-info\">
            <h3 class=\"subtitle subtitle--about\">";
        // line 155
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["шоппинг"]);
        echo "</h3>
            <h2 class=\"title title--about\">";
        // line 156
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Заказывайте товар с нами"]);
        echo "</h2>
            <div class=\"description\">
              <p> <i class=\"icon-shopping\"> </i>";
        // line 158
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Шоппинг в интернет магазинах США"]);
        echo "</p>
              <p>";
        // line 159
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Заказывайте быструю <br> доставку с любых интернет <br> магазинов США"]);
        echo "</p>
            </div>
          </div>
        </div>
      </div>
      <div class=\"about__col\">
        <h3 class=\"subtitle\">";
        // line 165
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Преимущество"]);
        echo "</h3>
        <h2 class=\"title\">";
        // line 166
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Почему клиенты выбирают нас"]);
        echo "</h2>
        <div class=\"description\">
          ";
        // line 168
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['class'] = ""        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "advantages/desc2.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 169
        echo "        </div>
      </div>
    </div>
    <!-- <div class=\"about__advantages\">
      <div class=\"about__advantages-item\">
        <div class=\"about__advantages-wrap\">
          <div class=\"advantages-top\"> <i class=\"icon-boing\"></i>Авиаперевозки
          </div>
          <div class=\"advantages-bottom\">
            <p>Максимально быстро и надежно</p>
          </div>
        </div>
      </div>
    </div> -->
  </div>
</div>
<div class=\"etaps\" id=\"etaps\">
  <div class=\"container\">
    <h3 class=\"subtitle\">";
        // line 187
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["ЭТАПЫ ЗАКАЗА"]);
        echo "</h3>
    <h2 class=\"title\">";
        // line 188
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Как это работает"]);
        echo "</h2>
    <div class=\"etaps__wrap\">
      <div class=\"etaps__item p14\">
        ";
        // line 191
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "div"        ;
        $context['__cms_component_params']['class'] = "etaps__advantages-wrap"        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "steps/step1.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 192
        echo "      </div>
      <div class=\"etaps__item p14\">
        <div class=\"etaps__advantages-wrap\">
          ";
        // line 195
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "div"        ;
        $context['__cms_component_params']['class'] = "etaps__advantages-wrap"        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "steps/step2.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 196
        echo "        </div>
      </div>
      <div class=\"etaps__item p14\">
        ";
        // line 199
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "div"        ;
        $context['__cms_component_params']['class'] = "etaps__advantages-wrap"        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "steps/step3.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 200
        echo "      </div>
      <div class=\"etaps__item p14\">
        ";
        // line 202
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "div"        ;
        $context['__cms_component_params']['class'] = "etaps__advantages-wrap"        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "steps/step4.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 203
        echo "      </div>
    </div>
    <div class=\"etaps__animation\">
      <div class=\"etaps-plane\"><img src=\"";
        // line 206
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/steps-plane.svg");
        echo "\" alt=\"\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 82.21 89.6\" style=\"display: none;\">
          <defs>
            <style>
              .cls-1 {
                fill: #fcb408;
              }

              .cls-2 {
                fill: #f4f6fd;
              }
            </style>
          </defs>
          <g id=\"Слой_2\" data-name=\"Слой 2\">
            <g id=\"Слой_1-2\" data-name=\"Слой 1\">
              <path class=\"cls-1\"
                d=\"M76.1,39.6a38,38,0,0,0-11.5-1.8H59.8L55,28.5a3.81,3.81,0,0,0-.3-7.6H51l-.8-1.5a4.21,4.21,0,0,0,2-1,4.2,4.2,0,0,0,1.2-2.6A3.71,3.71,0,0,0,49.7,12l-3.3-.1L40.7.9a1.45,1.45,0,0,0-1-.7L35.3,0a1.22,1.22,0,0,0-1.2,1.4L39,38.2c-10.2.4-20.2,1-27.4,1.4L8,30.9a1.23,1.23,0,0,0-1.1-.7l-5.1-.1A1.16,1.16,0,0,0,.6,31.3L0,56.9a1.16,1.16,0,0,0,1.2,1.2l5.1.1a1.23,1.23,0,0,0,1.1-.7l4-8.6c7.1.8,17.1,1.8,27.3,2.6l-.7,4-1,5.6-4.8,27a1.21,1.21,0,0,0,1.2,1.4l4.3.1a1.38,1.38,0,0,0,1.1-.6L45,78.2l3.3.1a3.75,3.75,0,0,0,2.8-6.4,4.53,4.53,0,0,0-1.9-1.1l.8-1.5,3.6.1a3.71,3.71,0,0,0,3.8-3.7,3.87,3.87,0,0,0-3.2-3.8l5.2-9.1c1.7.1,3.3.1,4.8.1a39.88,39.88,0,0,0,11.6-1.3c5.2-1.5,6.4-4.1,6.4-6C82.3,44,81.2,41.4,76.1,39.6ZM54.6,23.4a1.35,1.35,0,0,1,1.3,1.4,1.29,1.29,0,0,1-1.4,1.3h-.8l-1.4-2.8Zm-5-9.1a1.34,1.34,0,0,1,1.3,1.4A1.29,1.29,0,0,1,49.5,17H49l-1.4-2.8ZM36.7,2.4h2.2L57,37.8c-4.9,0-10.3.2-15.6.3ZM2.9,32.5l3.1.1,3,7.2c-2.8.2-5,.3-6.3.4ZM5.6,55.8l-3.1-.1L2.6,48c1.3.2,3.5.4,6.3.7ZM49.7,74.7A1.29,1.29,0,0,1,48.3,76h-2l1.5-2.7h.5A1.37,1.37,0,0,1,49.7,74.7ZM55,65.8a1.34,1.34,0,0,1-1.4,1.3H51.3l1.5-2.7h.8A1.43,1.43,0,0,1,55,65.8ZM37.1,87.3l-2.2-.1,4.6-26,1-5.8.7-3.7c5.3.4,10.7.8,15.6,1Zm38-37.8a38.6,38.6,0,0,1-10.9,1.2c-20.7-.5-55-4.3-61.6-5.1l.1-2.9c6.6-.5,41.1-2.8,61.7-2.4a40.39,40.39,0,0,1,10.8,1.6c2.1.7,4.6,2,4.5,3.9C79.8,47.8,77.3,48.9,75.1,49.5Z\">
              </path>
              <path class=\"cls-2\" d=\"M51,15.7A1.29,1.29,0,0,1,49.6,17h-.5l-1.4-2.8h2A1.51,1.51,0,0,1,51,15.7Z\">
              </path>
              <path class=\"cls-2\" d=\"M55.9,24.8a1.29,1.29,0,0,1-1.4,1.3h-.8l-1.4-2.8h2.3A1.51,1.51,0,0,1,55.9,24.8Z\">
              </path>
              <path class=\"cls-2\" d=\"M49.7,74.7A1.29,1.29,0,0,1,48.3,76h-2l1.5-2.7h.5A1.37,1.37,0,0,1,49.7,74.7Z\">
              </path>
              <path class=\"cls-2\" d=\"M55,65.8a1.34,1.34,0,0,1-1.4,1.3H51.3l1.5-2.7h.8A1.43,1.43,0,0,1,55,65.8Z\">
              </path>
              <path class=\"cls-2\" d=\"M56.7,52.8,37.1,87.3l-2.2-.1,4.6-26,1-5.8.7-3.7C46.5,52.2,51.8,52.6,56.7,52.8Z\">
              </path>
              <path class=\"cls-2\" d=\"M8.9,48.7,5.6,55.8l-3.1-.1L2.6,48C3.9,48.2,6.1,48.4,8.9,48.7Z\">
              </path>
              <path class=\"cls-2\" d=\"M9.1,39.8c-2.8.2-5,.3-6.3.4L3,32.5l3.1.1Z\"></path>
              <path class=\"cls-2\" d=\"M57,37.8c-4.9,0-10.3.2-15.6.3L36.7,2.4h2.2Z\"></path>
              <path class=\"cls-2\"
                d=\"M79.8,45.8c-.1,1.9-2.6,3.1-4.7,3.7a38.6,38.6,0,0,1-10.9,1.2c-20.7-.5-55-4.3-61.6-5.1l.1-2.9c6.6-.5,41.1-2.8,61.7-2.4a40.39,40.39,0,0,1,10.8,1.6C77.4,42.6,79.9,43.9,79.8,45.8Z\">
              </path>
              <path class=\"cls-1 smoke5\"
                d=\"M27.6,87l-14.5-.3a1.2,1.2,0,0,0-1.2,1.1,1.18,1.18,0,0,0,1.2,1.3l14.5.3a1.16,1.16,0,0,0,1.2-1.2A1.29,1.29,0,0,0,27.6,87Z\">
              </path>
              <path class=\"cls-1 smoke6\"
                d=\"M27.8,79.8l-9.1-.2a1.2,1.2,0,0,0-1.2,1.1A1.18,1.18,0,0,0,18.7,82l9.1.2a1.2,1.2,0,0,0,0-2.4Z\">
              </path>
              <path class=\"cls-1 smoke4\"
                d=\"M29.8,72.6l-6.4-.1a1.2,1.2,0,0,0-1.2,1.1,1.18,1.18,0,0,0,1.2,1.3l6.4.1A1.16,1.16,0,0,0,31,73.8,1.22,1.22,0,0,0,29.8,72.6Z\">
              </path>
              <path class=\"cls-1 smoke2\"
                d=\"M14.5,2.5,29,2.8a1.16,1.16,0,0,0,1.2-1.2A1.16,1.16,0,0,0,29,.4L14.6.1a1.16,1.16,0,0,0-1.2,1.2A1.13,1.13,0,0,0,14.5,2.5Z\">
              </path>
              <path class=\"cls-1 smoke3\"
                d=\"M30.1,8.9a1.16,1.16,0,0,0-1.2-1.2l-9.1-.2a1.2,1.2,0,0,0-1.2,1.1,1.18,1.18,0,0,0,1.2,1.3l9.1.2A1.29,1.29,0,0,0,30.1,8.9Z\">
              </path>
              <path class=\"cls-1 smoke1\"
                d=\"M23,16a1.16,1.16,0,0,0,1.2,1.2l6.4.1a1.2,1.2,0,0,0,0-2.4l-6.4-.1A1.22,1.22,0,0,0,23,16Z\">
              </path>
            </g>
          </g>
        </svg>
      </div>
      <div class=\"etaps__animation-wrap\">
        <div class=\"etaps__animation-step\">
          <div class=\"etaps__dash\"><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i></div>
          <div class=\"point\"></div>
        </div>
        <div class=\"etaps__animation-step\">
          <div class=\"etaps__dash\"><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i></div>
          <div class=\"point\"></div>
        </div>
        <div class=\"etaps__animation-step\">
          <div class=\"etaps__dash\"><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i></div>
          <div class=\"point\"></div>
        </div>
        <div class=\"etaps__animation-step\">
          <div class=\"etaps__dash\"><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i></div>
          <div class=\"point point--fade-out\"></div><a class=\"btn btn--sm try order-js\" href=\"#calculator\"><i
              class=\"icon-check\"></i>ПОПРОБОВАТЬ </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"add-info add-info--with-arrow\" style=\"background-image: url(";
        // line 285
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/add-info.webp");
        echo ")\">
  <div class=\"container\">
    <div class=\"add-info__wrap\">
      <div class=\"add-info__col\">
        <h3 class=\"subtitle subtitle--light\">Silk Road shipping</h3>
        <h2 class=\"title title--light\">";
        // line 290
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Если в вашем регионе нет представителя"]);
        echo "</h2>
        <div class=\"description description--light\">
          ";
        // line 292
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['class'] = ""        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "illinois/desc.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 293
        echo "        </div>
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 183.05 69.85\">
          <defs>
            <style>
              .add-info.cls-3,
              .add-info.cls-4 {
                fill: none;
                stroke: #0dd78f;
                stroke-width: 2px;
              }

              .add-info.cls-4 {
                stroke-dasharray: 48 8;
              }
            </style>
          </defs>
          <g id=\"Слой_2\" data-name=\"Слой 2\">
            <g id=\"Слой_1-2\" data-name=\"Слой 1\">
              <path class=\"cls-3 draw-arrow tail\" d=\"M177,69.46l4.67-11L170.1,54.35\"></path>
              <path class=\"cls-4 draw-arrow\" d=\"M.08,38.13C41.73,34.73,39.8-.29,79.79,1s60.47,75.15,101.08,58.28\">
              </path>
            </g>
          </g>
        </svg>
      </div>
      <div class=\"add-info__col\">
        <div class=\"add-info__address\">
          <p>Contact Name: Ваше Имя и Фамилия (латиницей) </p>
          <p>Address Line 1: 1304 Derby Lane</p>
          <p>City: Mundelein</p>
          <p>State: IL (Illinois)</p>
          <p>ZIP-code: 60060</p>
          <p>Phone: (847) 271 - 1988</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"reviews\">
  <div class=\"container\">
    <div class=\"reviews__wrap\">
      <div class=\"reviews__col\">
        <h3 class=\"subtitle\">";
        // line 335
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Отзывы"]);
        echo "</h3>
        <h2 class=\"title\">";
        // line 336
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Отзывы клиентов"]);
        echo "</h2>
        <div class=\"description\">
          <p>";
        // line 338
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["В данном разделе собраны реальные отзывы от клиентов и партнеров <br> компании Silk Road
            Shipping."]);
        // line 339
        echo "
          </p>
        </div>
      </div>
      <div class=\"reviews__col\">
        <p>";
        // line 344
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Вы так же можете"]);
        echo "
          ";
        // line 345
        if (($context["user"] ?? null)) {
            // line 346
            echo "          <a href=\"#\" class=\"review-btn\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["оставить свой отзыв"]);
            echo " </a>
          ";
        } else {
            // line 348
            echo "          <a href=\"#\" class=\"review-registration-btn\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["оставить свой отзыв"]);
            echo " </a>
          ";
        }
        // line 350
        echo "
        </p>
      </div>
    </div>
    <div class=\"reviews__slider\">
      <div class=\"swiper-container reviews-js\">

        <div class=\"swiper-wrapper\">



          ";
        // line 361
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "records", [], "any", false, false, true, 361);
        // line 362
        echo "          ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "displayColumn", [], "any", false, false, true, 362);
        // line 363
        echo "          ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "noRecordsMessage", [], "any", false, false, true, 363);
        // line 364
        echo "          ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "detailsPage", [], "any", false, false, true, 364);
        // line 365
        echo "          ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 365);
        // line 366
        echo "          ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 366);
        // line 367
        echo "
          ";
        // line 368
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 369
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "pub", [], "any", false, false, true, 369) == false)) {
                // line 370
                echo "
          ";
            } else {
                // line 372
                echo "          <div class=\"swiper-slide\">
            <div class=\"reviews__top\">
              <div class=\"reviews__user\">
                <div class=\"reviews__icon\"><i class=\"icon-profile\"></i></div>
                <div class=\"reviews__name\"><span>";
                // line 376
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 376), 376, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "surname", [], "any", false, false, true, 376), 376, $this->source), "html", null, true);
                echo "</span></div>
              </div>
              <div class=\"reviews__info\">
                <div class=\"reviews__date\">";
                // line 379
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "created_at", [], "any", false, false, true, 379), 379, $this->source), "d.m.Y"), "html", null, true);
                echo "</div>
              </div>
            </div>
            <div class=\"reviews__text\">
              <p>";
                // line 383
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "message", [], "any", false, false, true, 383), 383, $this->source), "html", null, true);
                echo "</p>
            </div>
          </div>
          ";
            }
            // line 387
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 389
        echo "
        </div>
        <div class=\"swiper-pagination\"> </div>
      </div>
    </div>
  </div>
</div>

";
        // line 397
        if (($context["user"] ?? null)) {
            // line 398
            echo "<div id=\"reviewForm\" class=\"popup review-success\">
  <div class=\"popup__window\">
    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"142\" height=\"142\" viewBox=\"0 0 142 142\" fill=\"none\">
      <path
        d=\"M71 112C93.6437 112 112 93.6437 112 71C112 48.3563 93.6437 30 71 30C48.3563 30 30 48.3563 30 71C30 93.6437 48.3563 112 71 112Z\"
        fill=\"#0DC332\" />
      <path
        d=\"M133.5 71C133.5 105.518 105.518 133.5 71 133.5C36.4822 133.5 8.5 105.518 8.5 71C8.5 36.4822 36.4822 8.5 71 8.5C105.518 8.5 133.5 36.4822 133.5 71Z\"
        stroke=\"#D1D1D1\" />
      <path d=\"M92 56L66.1538 85L50 72.1111\" stroke=\"white\" stroke-width=\"6\" stroke-miterlimit=\"10\"
        stroke-linecap=\"round\" stroke-linejoin=\"round\" />
    </svg>
    <h2>";
            // line 410
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Спасибо"]);
            echo "!</h2>
    <p>";
            // line 411
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ваш отзыв отправлен"]);
            echo "!</p>
  </div>
</div>

<div class=\"popup review-popup\">
  <div class=\"popup__window\">
    <svg class=\"close\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fal\" data-icon=\"times\" role=\"img\"
      xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 320 512\" class=\"svg-inline--fa fa-times fa-w-10 fa-2x\">
      <path fill=\"currentColor\"
        d=\"M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z\"
        class=\"\"></path>
    </svg>
    ";
            // line 423
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("review"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 424
            echo "  </div>
</div>
";
        } else {
            // line 427
            echo "
<div class=\"popup review-registration\">
  <div class=\"popup__window\">
    <svg class=\"close\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fal\" data-icon=\"times\" role=\"img\"
      xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 320 512\" class=\"svg-inline--fa fa-times fa-w-10 fa-2x\">
      <path fill=\"currentColor\"
        d=\"M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z\"
        class=\"\"></path>
    </svg>
    <p>";
            // line 436
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Чтобы оставить отзыв, Вам необходимо зарегистрироваться или быть авторизованным"]);
            echo "!</p>
    <a href=\"";
            // line 437
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("registration");
            echo "\" class=\"btn\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Зарегистрироваться"]);
            echo "</a>
  </div>
</div>

";
        }
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  871 => 437,  867 => 436,  856 => 427,  851 => 424,  847 => 423,  832 => 411,  828 => 410,  814 => 398,  812 => 397,  802 => 389,  795 => 387,  788 => 383,  781 => 379,  773 => 376,  767 => 372,  763 => 370,  760 => 369,  756 => 368,  753 => 367,  750 => 366,  747 => 365,  744 => 364,  741 => 363,  738 => 362,  736 => 361,  723 => 350,  717 => 348,  711 => 346,  709 => 345,  705 => 344,  698 => 339,  695 => 338,  690 => 336,  686 => 335,  642 => 293,  634 => 292,  629 => 290,  621 => 285,  539 => 206,  534 => 203,  526 => 202,  522 => 200,  514 => 199,  509 => 196,  501 => 195,  496 => 192,  488 => 191,  482 => 188,  478 => 187,  458 => 169,  450 => 168,  445 => 166,  441 => 165,  432 => 159,  428 => 158,  423 => 156,  419 => 155,  414 => 153,  408 => 149,  404 => 148,  396 => 144,  388 => 143,  382 => 140,  378 => 138,  370 => 137,  358 => 127,  349 => 125,  340 => 121,  334 => 120,  327 => 116,  322 => 114,  317 => 111,  312 => 110,  308 => 108,  305 => 107,  302 => 106,  299 => 105,  296 => 104,  293 => 103,  291 => 102,  285 => 99,  281 => 98,  277 => 97,  273 => 95,  269 => 94,  261 => 89,  257 => 88,  250 => 83,  241 => 81,  232 => 77,  228 => 76,  223 => 74,  218 => 71,  213 => 70,  209 => 68,  206 => 67,  203 => 66,  200 => 65,  197 => 64,  194 => 63,  192 => 62,  188 => 60,  180 => 59,  175 => 57,  159 => 44,  152 => 40,  144 => 35,  138 => 32,  132 => 28,  124 => 27,  117 => 22,  109 => 21,  105 => 19,  97 => 18,  90 => 14,  86 => 12,  79 => 11,  74 => 10,  67 => 9,  64 => 8,  56 => 7,  51 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"hero\">
  <div class=\"hero__bg\">
    {% component 'contenteditor' file=\"hero/img.htm\" fixture=\"\" tools=\"image,remove\" class=\"hero-bg\" %}
  </div>
  <div class=\"container\">
    <div class=\"hero__text-block\">
      {% component 'contenteditor' fixture=\"h2\" class=\"hero__title\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"hero/title.htm\" %}
      <div class=\"hero__desc\">
        {% component 'contenteditor' fixture=\"p\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"hero/desc1.htm\" %}
        <a class=\"btn btn--sm order-js fedex-js\" href=\"#illinois-form\">{{'Заполнить форму'|_}} </a>
        {% component 'contenteditor' fixture=\"p\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"hero/desc2.htm\" %}
      </div>
    </div>
    <a class=\"btn btn--sm order-js\" href=\"#calculator\">{{'Рассчитать стоимость онлайн'|_}} </a>
    <div class=\"schedule\">
      <div class=\"schedule__item\">
        <div class=\"schedule__inside-block\"><i class=\"icon-check\"> </i>
          {% component 'contenteditor' fixture=\"p\" file=\"hero/status/day.htm\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" class=\"\"  %}
        </div>
        <div class=\"schedule__date\">
          {% component 'contenteditor' fixture=\"div\" file=\"hero/status/date.htm\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" class=\"schedule__date\"  %}
        </div>
      </div>
      <div class=\"schedule__item\">
        <div class=\"schedule__location\">
          <i class=\"icon-marker\"></i>
          {% component 'contenteditor' fixture=\"p\" file=\"hero/status/location.htm\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" class=\"\"  %}
        </div>
      </div>
      <div class=\"schedule__item schedule__item--next\">
        <div class=\"schedule__inside-block\"><i class=\"icon-calendar\"> </i>
          <p>{{'СЛЕДУЮЩАЯ ПОСЫЛКА'|_}}</p>
        </div>
        <div class=\"schedule__date\">
          {{ \"sunday\"|date('d.m.Y') }}
        </div>
      </div>
      <div class=\"schedule__item schedule__item--collection\">
        <div class=\"schedule__inside-block\"><i class=\"icon-product\"> </i>
          <p>{{'СБОР ПОСЫЛОК'|_}}</p>
        </div>
        <p class=\"schedule__date\">
          ДО 
          {{ \"wednesday\"|date('d.m.Y') }}
        </p>
      </div>
    </div>
  </div>



</div>
<div class=\"advantages\">
  <div class=\"container\">
    <div class=\"advantages__wrap\">
      <div class=\"advantages__item advantages__item--desc\">
        <h3 class=\"advantages__subtitle\">{{'Почему доверяют нашей компании?'|_}}</h3>
        <h2 class=\"advantages__title\">Silk Road Shipping</h2>
        {% component 'contenteditor' fixture=\"p\" class=\"advantages__desc\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"advantages/desc.htm\" %}
      </div>

      {% set records = advantages.records %}
      {% set displayColumn = advantages.displayColumn %}
      {% set noRecordsMessage = advantages.noRecordsMessage %}
      {% set detailsPage = advantages.detailsPage %}
      {% set detailsKeyColumn = advantages.detailsKeyColumn %}
      {% set detailsUrlParameter = advantages.detailsUrlParameter %}


      {% for record in records %}

      <div class=\"advantages__item\">
        <div class=\"advantages__icon\"><img
            src=\"{{record.advantage_img.path | resize(40, false, { mode: 'crop', quality: '80', extension: 'webp' })}}\"
            alt=\"\"></div>
        <h2 class=\"advantages__title\">{{record.title}}</h2>
        <p class=\"advantages__desc\">{{record.desc}}</p>
      </div>

      {% else %}
      <li class=\"no-data\">{{ noRecordsMessage }}</li>
      {% endfor %}



      <div class=\"advantages__item advantages__item--calc\">
        <div class=\"advantages__icon\"><i class=\"icon-calculator\"></i></div>
        <h2 class=\"advantages__title\">{{'Рассчитайте стоимость перевозки прямо сейчас!'|_}}</h2><a
          class=\"btn btn--sm order-js\" href=\"#calculator\">{{'Рассчитать стоимость'|_}}</a>
      </div>
    </div>
  </div>
</div>
{% partial 'site/calc' %}
<div class=\"services\">
  <div class=\"container\">
    <h3 class=\"subtitle\">{{'Услуги'|_}}</h3>
    <h2 class=\"title\">{{'Международная доставка посылок'|_}}</h2>
    <p class=\"description\">{{'Быстрая и надежная доставка ваших посылок и документов.'|_}}</p>
    <div class=\"services__wrap\">

      {% set records = services.records %}
      {% set displayColumn = services.displayColumn %}
      {% set noRecordsMessage = services.noRecordsMessage %}
      {% set detailsPage = services.detailsPage %}
      {% set detailsKeyColumn = services.detailsKeyColumn %}
      {% set detailsUrlParameter = services.detailsUrlParameter %}


      {% for record in records %}

      <div class=\"services__item\">
        <a class=\"services__item-img\"
          href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\"
          style=\"background-image:
          url('{{record.service_img.path | resize(350, false, { mode: 'crop', quality: '80', extension: 'webp' })}}');\">
        </a>
        <div class=\"services__item-desc\">
          <a class=\"services__title\"
            href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">{{record.title}}</a>
          <p class=\"p16\">{{record.desc}}</p>
        </div>
      </div>
      {% else %}
      <li class=\"no-data\">{{ noRecordsMessage }}</li>
      {% endfor %}



    </div>
  </div>
</div>
<div class=\"about\">
  <div class=\"container\">
    <div class=\"about__wrap\">
      <div class=\"about__col\">
        {% component 'contenteditor' file=\"about/about-img.htm\" fixture=\"\" tools=\"image,remove\" class=\"about-img\" %}
      </div>
      <div class=\"about__col\">
        <h3 class=\"subtitle\">{{'Коротко о нас'|_}}</h3>
        <h2 class=\"title\">Silk Road Shipping</h2>
        <div class=\"description\">
          {% component 'contenteditor' fixture=\"p\" class=\"\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"about/about-short.htm\" %}
        </div><a class=\"more\" href=\"#\">{{'Подробнее'|_}} <i class=\"icon-arrow\"></i></a>
      </div>
    </div>
  </div>
  {% partial 'site/about' %}
  <div class=\"container\">
    <div class=\"about__wrap about__wrap--reverse\">
      <div class=\"about__col\">
        <div class=\"about__img about__img--info\">
          <img src=\"{{'assets/img/advantages.webp' | theme}}\" alt=\"\">
          <div class=\"about__img-inside-info\">
            <h3 class=\"subtitle subtitle--about\">{{'шоппинг'|_}}</h3>
            <h2 class=\"title title--about\">{{'Заказывайте товар с нами'|_}}</h2>
            <div class=\"description\">
              <p> <i class=\"icon-shopping\"> </i>{{'Шоппинг в интернет магазинах США'|_}}</p>
              <p>{{'Заказывайте быструю <br> доставку с любых интернет <br> магазинов США'|_}}</p>
            </div>
          </div>
        </div>
      </div>
      <div class=\"about__col\">
        <h3 class=\"subtitle\">{{'Преимущество'|_}}</h3>
        <h2 class=\"title\">{{'Почему клиенты выбирают нас'|_}}</h2>
        <div class=\"description\">
          {% component 'contenteditor' fixture=\"p\" class=\"\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"advantages/desc2.htm\" %}
        </div>
      </div>
    </div>
    <!-- <div class=\"about__advantages\">
      <div class=\"about__advantages-item\">
        <div class=\"about__advantages-wrap\">
          <div class=\"advantages-top\"> <i class=\"icon-boing\"></i>Авиаперевозки
          </div>
          <div class=\"advantages-bottom\">
            <p>Максимально быстро и надежно</p>
          </div>
        </div>
      </div>
    </div> -->
  </div>
</div>
<div class=\"etaps\" id=\"etaps\">
  <div class=\"container\">
    <h3 class=\"subtitle\">{{'ЭТАПЫ ЗАКАЗА'|_}}</h3>
    <h2 class=\"title\">{{'Как это работает'|_}}</h2>
    <div class=\"etaps__wrap\">
      <div class=\"etaps__item p14\">
        {% component 'contenteditor' fixture=\"div\" class=\"etaps__advantages-wrap\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"steps/step1.htm\" %}
      </div>
      <div class=\"etaps__item p14\">
        <div class=\"etaps__advantages-wrap\">
          {% component 'contenteditor' fixture=\"div\" class=\"etaps__advantages-wrap\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"steps/step2.htm\" %}
        </div>
      </div>
      <div class=\"etaps__item p14\">
        {% component 'contenteditor' fixture=\"div\" class=\"etaps__advantages-wrap\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"steps/step3.htm\" %}
      </div>
      <div class=\"etaps__item p14\">
        {% component 'contenteditor' fixture=\"div\" class=\"etaps__advantages-wrap\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"steps/step4.htm\" %}
      </div>
    </div>
    <div class=\"etaps__animation\">
      <div class=\"etaps-plane\"><img src=\"{{'assets/icons/steps-plane.svg'| theme}}\" alt=\"\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 82.21 89.6\" style=\"display: none;\">
          <defs>
            <style>
              .cls-1 {
                fill: #fcb408;
              }

              .cls-2 {
                fill: #f4f6fd;
              }
            </style>
          </defs>
          <g id=\"Слой_2\" data-name=\"Слой 2\">
            <g id=\"Слой_1-2\" data-name=\"Слой 1\">
              <path class=\"cls-1\"
                d=\"M76.1,39.6a38,38,0,0,0-11.5-1.8H59.8L55,28.5a3.81,3.81,0,0,0-.3-7.6H51l-.8-1.5a4.21,4.21,0,0,0,2-1,4.2,4.2,0,0,0,1.2-2.6A3.71,3.71,0,0,0,49.7,12l-3.3-.1L40.7.9a1.45,1.45,0,0,0-1-.7L35.3,0a1.22,1.22,0,0,0-1.2,1.4L39,38.2c-10.2.4-20.2,1-27.4,1.4L8,30.9a1.23,1.23,0,0,0-1.1-.7l-5.1-.1A1.16,1.16,0,0,0,.6,31.3L0,56.9a1.16,1.16,0,0,0,1.2,1.2l5.1.1a1.23,1.23,0,0,0,1.1-.7l4-8.6c7.1.8,17.1,1.8,27.3,2.6l-.7,4-1,5.6-4.8,27a1.21,1.21,0,0,0,1.2,1.4l4.3.1a1.38,1.38,0,0,0,1.1-.6L45,78.2l3.3.1a3.75,3.75,0,0,0,2.8-6.4,4.53,4.53,0,0,0-1.9-1.1l.8-1.5,3.6.1a3.71,3.71,0,0,0,3.8-3.7,3.87,3.87,0,0,0-3.2-3.8l5.2-9.1c1.7.1,3.3.1,4.8.1a39.88,39.88,0,0,0,11.6-1.3c5.2-1.5,6.4-4.1,6.4-6C82.3,44,81.2,41.4,76.1,39.6ZM54.6,23.4a1.35,1.35,0,0,1,1.3,1.4,1.29,1.29,0,0,1-1.4,1.3h-.8l-1.4-2.8Zm-5-9.1a1.34,1.34,0,0,1,1.3,1.4A1.29,1.29,0,0,1,49.5,17H49l-1.4-2.8ZM36.7,2.4h2.2L57,37.8c-4.9,0-10.3.2-15.6.3ZM2.9,32.5l3.1.1,3,7.2c-2.8.2-5,.3-6.3.4ZM5.6,55.8l-3.1-.1L2.6,48c1.3.2,3.5.4,6.3.7ZM49.7,74.7A1.29,1.29,0,0,1,48.3,76h-2l1.5-2.7h.5A1.37,1.37,0,0,1,49.7,74.7ZM55,65.8a1.34,1.34,0,0,1-1.4,1.3H51.3l1.5-2.7h.8A1.43,1.43,0,0,1,55,65.8ZM37.1,87.3l-2.2-.1,4.6-26,1-5.8.7-3.7c5.3.4,10.7.8,15.6,1Zm38-37.8a38.6,38.6,0,0,1-10.9,1.2c-20.7-.5-55-4.3-61.6-5.1l.1-2.9c6.6-.5,41.1-2.8,61.7-2.4a40.39,40.39,0,0,1,10.8,1.6c2.1.7,4.6,2,4.5,3.9C79.8,47.8,77.3,48.9,75.1,49.5Z\">
              </path>
              <path class=\"cls-2\" d=\"M51,15.7A1.29,1.29,0,0,1,49.6,17h-.5l-1.4-2.8h2A1.51,1.51,0,0,1,51,15.7Z\">
              </path>
              <path class=\"cls-2\" d=\"M55.9,24.8a1.29,1.29,0,0,1-1.4,1.3h-.8l-1.4-2.8h2.3A1.51,1.51,0,0,1,55.9,24.8Z\">
              </path>
              <path class=\"cls-2\" d=\"M49.7,74.7A1.29,1.29,0,0,1,48.3,76h-2l1.5-2.7h.5A1.37,1.37,0,0,1,49.7,74.7Z\">
              </path>
              <path class=\"cls-2\" d=\"M55,65.8a1.34,1.34,0,0,1-1.4,1.3H51.3l1.5-2.7h.8A1.43,1.43,0,0,1,55,65.8Z\">
              </path>
              <path class=\"cls-2\" d=\"M56.7,52.8,37.1,87.3l-2.2-.1,4.6-26,1-5.8.7-3.7C46.5,52.2,51.8,52.6,56.7,52.8Z\">
              </path>
              <path class=\"cls-2\" d=\"M8.9,48.7,5.6,55.8l-3.1-.1L2.6,48C3.9,48.2,6.1,48.4,8.9,48.7Z\">
              </path>
              <path class=\"cls-2\" d=\"M9.1,39.8c-2.8.2-5,.3-6.3.4L3,32.5l3.1.1Z\"></path>
              <path class=\"cls-2\" d=\"M57,37.8c-4.9,0-10.3.2-15.6.3L36.7,2.4h2.2Z\"></path>
              <path class=\"cls-2\"
                d=\"M79.8,45.8c-.1,1.9-2.6,3.1-4.7,3.7a38.6,38.6,0,0,1-10.9,1.2c-20.7-.5-55-4.3-61.6-5.1l.1-2.9c6.6-.5,41.1-2.8,61.7-2.4a40.39,40.39,0,0,1,10.8,1.6C77.4,42.6,79.9,43.9,79.8,45.8Z\">
              </path>
              <path class=\"cls-1 smoke5\"
                d=\"M27.6,87l-14.5-.3a1.2,1.2,0,0,0-1.2,1.1,1.18,1.18,0,0,0,1.2,1.3l14.5.3a1.16,1.16,0,0,0,1.2-1.2A1.29,1.29,0,0,0,27.6,87Z\">
              </path>
              <path class=\"cls-1 smoke6\"
                d=\"M27.8,79.8l-9.1-.2a1.2,1.2,0,0,0-1.2,1.1A1.18,1.18,0,0,0,18.7,82l9.1.2a1.2,1.2,0,0,0,0-2.4Z\">
              </path>
              <path class=\"cls-1 smoke4\"
                d=\"M29.8,72.6l-6.4-.1a1.2,1.2,0,0,0-1.2,1.1,1.18,1.18,0,0,0,1.2,1.3l6.4.1A1.16,1.16,0,0,0,31,73.8,1.22,1.22,0,0,0,29.8,72.6Z\">
              </path>
              <path class=\"cls-1 smoke2\"
                d=\"M14.5,2.5,29,2.8a1.16,1.16,0,0,0,1.2-1.2A1.16,1.16,0,0,0,29,.4L14.6.1a1.16,1.16,0,0,0-1.2,1.2A1.13,1.13,0,0,0,14.5,2.5Z\">
              </path>
              <path class=\"cls-1 smoke3\"
                d=\"M30.1,8.9a1.16,1.16,0,0,0-1.2-1.2l-9.1-.2a1.2,1.2,0,0,0-1.2,1.1,1.18,1.18,0,0,0,1.2,1.3l9.1.2A1.29,1.29,0,0,0,30.1,8.9Z\">
              </path>
              <path class=\"cls-1 smoke1\"
                d=\"M23,16a1.16,1.16,0,0,0,1.2,1.2l6.4.1a1.2,1.2,0,0,0,0-2.4l-6.4-.1A1.22,1.22,0,0,0,23,16Z\">
              </path>
            </g>
          </g>
        </svg>
      </div>
      <div class=\"etaps__animation-wrap\">
        <div class=\"etaps__animation-step\">
          <div class=\"etaps__dash\"><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i></div>
          <div class=\"point\"></div>
        </div>
        <div class=\"etaps__animation-step\">
          <div class=\"etaps__dash\"><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i></div>
          <div class=\"point\"></div>
        </div>
        <div class=\"etaps__animation-step\">
          <div class=\"etaps__dash\"><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i></div>
          <div class=\"point\"></div>
        </div>
        <div class=\"etaps__animation-step\">
          <div class=\"etaps__dash\"><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i><i> </i></div>
          <div class=\"point point--fade-out\"></div><a class=\"btn btn--sm try order-js\" href=\"#calculator\"><i
              class=\"icon-check\"></i>ПОПРОБОВАТЬ </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"add-info add-info--with-arrow\" style=\"background-image: url({{'assets/img/add-info.webp'| theme}})\">
  <div class=\"container\">
    <div class=\"add-info__wrap\">
      <div class=\"add-info__col\">
        <h3 class=\"subtitle subtitle--light\">Silk Road shipping</h3>
        <h2 class=\"title title--light\">{{'Если в вашем регионе нет представителя'|_}}</h2>
        <div class=\"description description--light\">
          {% component 'contenteditor' fixture=\"p\" class=\"\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"illinois/desc.htm\" %}
        </div>
        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 183.05 69.85\">
          <defs>
            <style>
              .add-info.cls-3,
              .add-info.cls-4 {
                fill: none;
                stroke: #0dd78f;
                stroke-width: 2px;
              }

              .add-info.cls-4 {
                stroke-dasharray: 48 8;
              }
            </style>
          </defs>
          <g id=\"Слой_2\" data-name=\"Слой 2\">
            <g id=\"Слой_1-2\" data-name=\"Слой 1\">
              <path class=\"cls-3 draw-arrow tail\" d=\"M177,69.46l4.67-11L170.1,54.35\"></path>
              <path class=\"cls-4 draw-arrow\" d=\"M.08,38.13C41.73,34.73,39.8-.29,79.79,1s60.47,75.15,101.08,58.28\">
              </path>
            </g>
          </g>
        </svg>
      </div>
      <div class=\"add-info__col\">
        <div class=\"add-info__address\">
          <p>Contact Name: Ваше Имя и Фамилия (латиницей) </p>
          <p>Address Line 1: 1304 Derby Lane</p>
          <p>City: Mundelein</p>
          <p>State: IL (Illinois)</p>
          <p>ZIP-code: 60060</p>
          <p>Phone: (847) 271 - 1988</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"reviews\">
  <div class=\"container\">
    <div class=\"reviews__wrap\">
      <div class=\"reviews__col\">
        <h3 class=\"subtitle\">{{'Отзывы'|_}}</h3>
        <h2 class=\"title\">{{'Отзывы клиентов'|_}}</h2>
        <div class=\"description\">
          <p>{{'В данном разделе собраны реальные отзывы от клиентов и партнеров <br> компании Silk Road
            Shipping.'|_}}
          </p>
        </div>
      </div>
      <div class=\"reviews__col\">
        <p>{{'Вы так же можете'|_}}
          {% if user %}
          <a href=\"#\" class=\"review-btn\">{{'оставить свой отзыв'|_}} </a>
          {% else %}
          <a href=\"#\" class=\"review-registration-btn\">{{'оставить свой отзыв'|_}} </a>
          {% endif %}

        </p>
      </div>
    </div>
    <div class=\"reviews__slider\">
      <div class=\"swiper-container reviews-js\">

        <div class=\"swiper-wrapper\">



          {% set records = reviews.records %}
          {% set displayColumn = reviews.displayColumn %}
          {% set noRecordsMessage = reviews.noRecordsMessage %}
          {% set detailsPage = reviews.detailsPage %}
          {% set detailsKeyColumn = reviews.detailsKeyColumn %}
          {% set detailsUrlParameter = reviews.detailsUrlParameter %}

          {% for record in records %}
          {% if record.pub == false %}

          {% else %}
          <div class=\"swiper-slide\">
            <div class=\"reviews__top\">
              <div class=\"reviews__user\">
                <div class=\"reviews__icon\"><i class=\"icon-profile\"></i></div>
                <div class=\"reviews__name\"><span>{{record.name}} {{record.surname}}</span></div>
              </div>
              <div class=\"reviews__info\">
                <div class=\"reviews__date\">{{record.created_at |date(\"d.m.Y\")}}</div>
              </div>
            </div>
            <div class=\"reviews__text\">
              <p>{{record.message}}</p>
            </div>
          </div>
          {% endif %}

          {% endfor %}

        </div>
        <div class=\"swiper-pagination\"> </div>
      </div>
    </div>
  </div>
</div>

{% if user %}
<div id=\"reviewForm\" class=\"popup review-success\">
  <div class=\"popup__window\">
    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"142\" height=\"142\" viewBox=\"0 0 142 142\" fill=\"none\">
      <path
        d=\"M71 112C93.6437 112 112 93.6437 112 71C112 48.3563 93.6437 30 71 30C48.3563 30 30 48.3563 30 71C30 93.6437 48.3563 112 71 112Z\"
        fill=\"#0DC332\" />
      <path
        d=\"M133.5 71C133.5 105.518 105.518 133.5 71 133.5C36.4822 133.5 8.5 105.518 8.5 71C8.5 36.4822 36.4822 8.5 71 8.5C105.518 8.5 133.5 36.4822 133.5 71Z\"
        stroke=\"#D1D1D1\" />
      <path d=\"M92 56L66.1538 85L50 72.1111\" stroke=\"white\" stroke-width=\"6\" stroke-miterlimit=\"10\"
        stroke-linecap=\"round\" stroke-linejoin=\"round\" />
    </svg>
    <h2>{{'Спасибо'|_}}!</h2>
    <p>{{'Ваш отзыв отправлен'|_}}!</p>
  </div>
</div>

<div class=\"popup review-popup\">
  <div class=\"popup__window\">
    <svg class=\"close\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fal\" data-icon=\"times\" role=\"img\"
      xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 320 512\" class=\"svg-inline--fa fa-times fa-w-10 fa-2x\">
      <path fill=\"currentColor\"
        d=\"M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z\"
        class=\"\"></path>
    </svg>
    {% component 'review' %}
  </div>
</div>
{% else %}

<div class=\"popup review-registration\">
  <div class=\"popup__window\">
    <svg class=\"close\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fal\" data-icon=\"times\" role=\"img\"
      xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 320 512\" class=\"svg-inline--fa fa-times fa-w-10 fa-2x\">
      <path fill=\"currentColor\"
        d=\"M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z\"
        class=\"\"></path>
    </svg>
    <p>{{'Чтобы оставить отзыв, Вам необходимо зарегистрироваться или быть авторизованным'|_}}!</p>
    <a href=\"{{'registration'|page}}\" class=\"btn\">{{'Зарегистрироваться'|_}}</a>
  </div>
</div>

{% endif %}", "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 3, "set" => 62, "for" => 70, "partial" => 94, "if" => 345);
        static $filters = array("_" => 10, "escape" => 35, "date" => 35, "resize" => 74, "page" => 114, "theme" => 153);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'set', 'for', 'partial', 'if'],
                ['_', 'escape', 'date', 'resize', 'page', 'theme'],
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
