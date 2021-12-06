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

/* C:\work\OpenServer\domains\silk-road.loc/themes/silk-road/partials/site/calc.htm */
class __TwigTemplate_ece51aa33dea2162ca5aec4812df18c678b7be8b60cb2db0cc20d73ccb6af2b2 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 1), "url", [], "any", false, false, true, 1) == "/")) {
            // line 2
            echo "<div class=\"calculator\" id=\"calculator\">
  ";
        } else {
            // line 4
            echo "  <div class=\"calculator\" id=\"calculator\" style=\"display: none;\">
    ";
        }
        // line 6
        echo "    <div class=\"container\">
      <div class=\"calculator__wrap\">
        <div class=\"calculator__col\">
          <h3 class=\"subtitle\">";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Калькулятор"]);
        echo "</h3>
          <h2 class=\"title\">";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Рассчитайте стоимость превозки"]);
        echo "</h2>
          ";
        // line 11
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['class'] = "description"        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "calculate/desc.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 12
        echo "          <div class=\"calculator__tab-block tab\">
            <ul class=\"tabs\">
              <li><a class=\"route-tab-btn\" href=\"#\">";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["МАРШРУТ"]);
        echo "</a></li>
              <li><a class=\"about-cargo-tab-btn\" href=\"#\">";
        // line 15
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["О ГРУЗЕ"]);
        echo "</a></li>
              <li><a class=\"rate-tab-btn\" href=\"#\">";
        // line 16
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["ИТОГ"]);
        echo "</a></li>
              <li><a class=\"contacts-tab-btn\" href=\"#\">";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Контакты"]);
        echo "</a></li>
            </ul>
            <div class=\"tab_content\">
              <div id=\"contacts\">
                <div class=\"tabs_item route-tab\">
                  <div class=\"input\">
                    <label for=\"from\">";
        // line 23
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Откуда"]);
        echo "</label>
                    <input type=\"text\" id=\"from\" value=\"Chicago, IL\" style=\"pointer-events: none;\">
                    <div class=\"input__icon\"><i class=\"icon-marker2\"></i></div>
                  </div>
                  <div class=\"input input--select\">
                    <div class=\"input__icon\"><i class=\"icon-marker2\"></i></div>
                    <label for=\"package\">";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Куда"]);
        echo "</label>
                    <input class=\"select-type\" type=\"hidden\" value=\"";
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ваш контейнер"]);
        echo "\" name=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Упаковка"]);
        echo "\"
                      id=\"package\">
                    <div class=\"select\">
                      <div class=\"select__checked\">";
        // line 33
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Выбирите пункт"]);
        echo "</div>
                      <ul class=\"select__dropdown\">

                        ";
        // line 36
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["city"] ?? null), "records", [], "any", false, false, true, 36);
        // line 37
        echo "                        ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["city"] ?? null), "displayColumn", [], "any", false, false, true, 37);
        // line 38
        echo "                        ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["city"] ?? null), "noRecordsMessage", [], "any", false, false, true, 38);
        // line 39
        echo "                        ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["city"] ?? null), "detailsPage", [], "any", false, false, true, 39);
        // line 40
        echo "                        ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["city"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 40);
        // line 41
        echo "                        ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["city"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 41);
        // line 42
        echo "
                        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 44
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "pub", [], "any", false, false, true, 44) == false)) {
                // line 45
                echo "
                        ";
            } else {
                // line 47
                echo "                        <li data-value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "city", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                echo "\" data-price=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "city_price", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "city", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                echo "</li>
                        ";
            }
            // line 49
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
                      </ul>
                    </div>
                  </div>
                  <a class=\"btn btn-step\" href=\"#\">";
        // line 55
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Следующий шаг"]);
        echo "</a>
                </div>
                <div class=\"tabs_item about-cargo-tab\">
                  <div class=\"calculator__description\">
                    ";
        // line 59
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['class'] = ""        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "calculate/about_cargo1.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 60
        echo "                  </div>

                  <div class=\"input input--raw input--raw1\">
                    <label for=\"weight\">";
        // line 63
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Вес груза"]);
        echo "</label>
                    <input type=\"number\" id=\"weight\" placeholder=\"15\" name=\"";
        // line 64
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Вес груза"]);
        echo "\">
                  </div>
                  <div class=\"input input--raw input--raw2\">
                    <label for=\"price\">";
        // line 67
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Цена"]);
        echo "</label>
                    ";
        // line 68
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["formula"] ?? null), "records", [], "any", false, false, true, 68);
        // line 69
        echo "                    ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["formula"] ?? null), "displayColumn", [], "any", false, false, true, 69);
        // line 70
        echo "                    ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["formula"] ?? null), "noRecordsMessage", [], "any", false, false, true, 70);
        // line 71
        echo "                    ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["formula"] ?? null), "detailsPage", [], "any", false, false, true, 71);
        // line 72
        echo "                    ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["formula"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 72);
        // line 73
        echo "                    ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["formula"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 73);
        // line 74
        echo "
                    ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 76
            echo "
                    <input type=\"text\" id=\"mainPrice\" value=\"\$";
            // line 77
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "main_price", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "/";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["кг"]);
            echo "\" name=\"";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Цена"]);
            echo "\"
                      data-mainprice=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "main_price", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "\" style=\"pointer-events: none;\">


                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "

                  </div>
                  <br>

                  <div class=\"input input--raw input--raw3\">
                    <label for=\"length\">";
        // line 88
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Обьем груза"]);
        echo "</label>
                    <input type=\"number\" id=\"length\" placeholder=\"";
        // line 89
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Длина дюйм"]);
        echo "\" name=\"Количество\">
                  </div>
                  <div class=\"input input--raw input--raw4\">
                    <input type=\"number\" id=\"width\" placeholder=\"";
        // line 92
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ширина дюйм"]);
        echo "\" name=\"Количество\">
                  </div>
                  <div class=\"input input--raw input--raw5\">
                    <input type=\"number\" id=\"height\" placeholder=\"";
        // line 95
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Высота дюйм"]);
        echo "\" name=\"Количество\">
                  </div>
                  <input type=\"hidden\" id=\"divider\" value=\"366\">
                  <br>
                  <div class=\"additional-info\">
                    ";
        // line 100
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['class'] = ""        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "calculate/formula.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 101
        echo "                  </div>

                  ";
        // line 103
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['class'] = ""        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "calculate/about_cargo2.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 104
        echo "                  <br>
                  <br>
                  <div class=\"input input--textarea\">
                    <label for=\"cargo-information\">";
        // line 107
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Информация о грузе"]);
        echo "</label>
                    <textarea name=\"Информация о грузе\" placeholder=\"Сообщение\" id=\"cargo-information\"></textarea>
                  </div><a class=\"btn btn-step\" href=\"#\">";
        // line 109
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Следующий шаг"]);
        echo "</a>
                </div>
                <div class=\"tabs_item rate-tab\">
                  <div class=\"calculator__description\">
                    ";
        // line 113
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['class'] = ""        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "calculate/desc2.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 114
        echo "                  </div>

                  <div class=\"calculator__total\">
                    <div class=\"calculator__detailed-info\">
                      <div class=\"detailed-info-block\">
                        <ul>
                          <li>
                            <span>";
        // line 121
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Вес груза"]);
        echo "</span>
                            <div><span class=\"detailed-info-block__weight\"></span> <span>";
        // line 122
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["кг"]);
        echo "</span></div>


                          </li>
                          <li>
                            <span>";
        // line 127
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Цена за кг"]);
        echo "</span>
                            <span
                              class=\"detailed-info-block__price\">\$";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "main_price", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "/";
        echo "кг";
        echo "</span>

                          </li>
                          <li>
                            <span>";
        // line 133
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Город"]);
        echo "</span>
                            <span class=\"detailed-info-block__city\"></span>

                          </li>
                          <li>
                            <span>";
        // line 138
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Предполагаемая итоговая сумма"]);
        echo "</span>
                            <span class=\"detailed-info-block__total\"></span>

                          </li>
                        </ul>
                      </div>
                    </div>
                    <a class=\"btn\" href=\"#\">107,97 \$ </a>
                  </div>
                </div>
                <div class=\"tabs_item contacts-tab\">
                  <div class=\"calculator__description\">
                    <p>";
        // line 150
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Мы свяжемся с Вами в ближайшее время!"]);
        echo "</p>
                  </div>

                  ";
        // line 153
        if ((($context["activeLocale"] ?? null) == "ru")) {
            // line 154
            echo "                  <form data-request=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["CalculatorFormRu"] ?? null), 154, $this->source), "html", null, true);
            echo "::onFormSubmit\">

                    ";
            // line 156
            echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
            echo "
                    <div id=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["CalculatorFormRu"] ?? null), 157, $this->source), "html", null, true);
            echo "_forms_flash\"></div>

                    ";
            // line 159
            if (($context["user"] ?? null)) {
                // line 160
                echo "                    <div class=\"input\">
                      <label for=\"name\">Ф.И.О</label>
                      <input type=\"text\" id=\"name\" name=\"Ф.И.О\" placeholder=\"Иванов Иван\"
                        value=\"";
                // line 163
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "surname", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
                echo "\">
                    </div>
                    <div class=\"input\">
                      <label for=\"phone\">Номер телефона</label>
                      <input type=\"text\" id=\"phone\" name=\"Телефон\" placeholder=\"+1 847 2711988\" value=\"";
                // line 167
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
                echo "\">
                    </div>
                    <div class=\"input\">
                      <label for=\"email\">Email</label>
                      <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"ivanov@gmail.com\" value=\"";
                // line 171
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
                echo "\">
                    </div>
                    ";
            } else {
                // line 174
                echo "
                    <div class=\"input\">
                      <label for=\"name\">Ф.И.О</label>
                      <input type=\"text\" id=\"name\" name=\"Ф.И.О\" placeholder=\"Иванов Иван\">
                    </div>
                    <div class=\"input\">
                      <label for=\"phone\">Номер телефона</label>
                      <input type=\"text\" id=\"phone\" name=\"Телефон\" placeholder=\"+1 847 2711988 \">
                    </div>
                    <div class=\"input\">
                      <label for=\"email\">Email</label>
                      <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"ivanov@gmail.com\">
                    </div>

                    ";
            }
            // line 189
            echo "
                    ";
            // line 190
            if (($context["user"] ?? null)) {
                // line 191
                echo "                    <button class=\"btn\" type=\"submit\">Отправить</button>
                    ";
            } else {
                // line 193
                echo "                    <button class=\"btn btn-step\" type=\"submit\">Отправить</button>
                    ";
            }
            // line 195
            echo "                  </form>
                  ";
        } else {
            // line 197
            echo "
                  <form data-request=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["CalculatorFormEn"] ?? null), 198, $this->source), "html", null, true);
            echo "::onFormSubmit\">

                    ";
            // line 200
            echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
            echo "

                    <div id=\"";
            // line 202
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["CalculatorFormEn"] ?? null), 202, $this->source), "html", null, true);
            echo "_forms_flash\"></div>

                    ";
            // line 204
            if (($context["user"] ?? null)) {
                // line 205
                echo "                    <div class=\"input\">
                      <label for=\"name\">Full name</label>
                      <input type=\"text\" id=\"name\" name=\"Full_name\" placeholder=\"Ivanov Ivan\"
                        value=\"";
                // line 208
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 208), 208, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "surname", [], "any", false, false, true, 208), 208, $this->source), "html", null, true);
                echo "\">
                    </div>
                    <div class=\"input\">
                      <label for=\"phone\">Phone</label>
                      <input type=\"text\" id=\"phone\" name=\"Phone\" placeholder=\"+1 847 2711988\" value=\"";
                // line 212
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, true, 212), 212, $this->source), "html", null, true);
                echo "\">
                    </div>
                    <div class=\"input\">
                      <label for=\"email\">Email</label>
                      <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"ivanov@gmail.com\" value=\"";
                // line 216
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, true, 216), 216, $this->source), "html", null, true);
                echo "\">
                    </div>
                    ";
            } else {
                // line 219
                echo "                    <div class=\"input\">
                      <label for=\"name\">Full name</label>
                      <input type=\"text\" id=\"name\" name=\"Full_name\" placeholder=\"Ivanov Ivan\">
                    </div>
                    <div class=\"input\">
                      <label for=\"phone\">Phone</label>
                      <input type=\"text\" id=\"phone\" name=\"Phone\" placeholder=\"+1 847 2711988 \">
                    </div>
                    <div class=\"input\">
                      <label for=\"email\">Email</label>
                      <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"ivanov@gmail.com\">
                    </div>
                    ";
            }
            // line 232
            echo "

                    ";
            // line 234
            if (($context["user"] ?? null)) {
                // line 235
                echo "                    <button class=\"btn\" type=\"submit\">Send</button>
                    ";
            } else {
                // line 237
                echo "                    <button class=\"btn btn-step\" type=\"submit\">Send</button>
                    ";
            }
            // line 239
            echo "                  </form>
                  ";
        }
        // line 241
        echo "                </div>
              </div>
            </div>
            <br>
         <div class=\"calculator__info\">
           <div class=\"calculator__info-item\">
             <div class=\"calculator__info-icon\">
               <i class=\"icon-calendar\"></i>
             </div>
             <div class=\"calculator__info-desc\">
               <span>";
        // line 251
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["время доставки"]);
        echo "</span>
               <p>7-9 ";
        // line 252
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["дней"]);
        echo "</p>
             </div>
           </div>
           <div class=\"calculator__info-item\">
             <div class=\"calculator__info-icon\">
               <i class=\"icon-product\"></i>
               <span>";
        // line 258
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["СБОР"]);
        echo "</span>
             </div>
             <div class=\"calculator__info-desc\">
               <span>";
        // line 261
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["до каждой среды"]);
        echo "</span>
               <p>
                 ";
        // line 263
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "wednesday", "d.m.y"), "html", null, true);
        echo "
                </p>
             </div>
           </div>
            <div class=\"calculator__info-item\">
              <div class=\"calculator__info-icon\">
                <i class=\"icon-boing\"></i>
                <span>";
        // line 270
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["ВЫЛЕТЫ"]);
        echo "</span>
              </div>
              <div class=\"calculator__info-desc\">
                <span>";
        // line 273
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["каждое воскресенье"]);
        echo "</span>
                <p>
                  ";
        // line 275
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "sunday", "d.m.y"), "html", null, true);
        echo "
                </p>
              </div>
            </div>
            <div class=\"calculator__info-additional\">
              <div class=\"calculator__info-additional-item\">
                <p>";
        // line 281
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["ЦЕНЫ НА ЭЛЕКТРОНИКУ и КОММЕРЧЕСКИЙ ГРУЗ"]);
        echo "</p>
              </div>
              <div class=\"calculator__info-additional-item\">
                <p>";
        // line 284
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["отличаются и не показаны на калькуляторе"]);
        echo ".</p>
              </div>
              <div class=\"calculator__info-additional-item\">
                <p>";
        // line 287
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Позвоните чтобы получить детальную информацию"]);
        echo ".</p>
              </div>
            </div>
         </div>
          </div>
        </div>
        <div class=\"calculator__col\">
          <div class=\"calculator__tab-img1 tab-img\">
            <img src=\"";
        // line 295
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tab1.svg");
        echo "\" alt=\"\">
            <div class=\"calculator-plane\"><img src=\"";
        // line 296
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/steps-plane.svg");
        echo "\" alt=\"\"></div>
          </div>
          <div class=\"calculator__tab-img2 tab-img\">
            <img src=\"";
        // line 299
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tab2.svg");
        echo "\" alt=\"\">
          </div>
          <div class=\"calculator__tab-img3 tab-img\">
            <img src=\"";
        // line 302
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tab3.svg");
        echo "\" alt=\"\">
          </div>
          <div class=\"calculator__tab-img4 tab-img\">
            <img src=\"";
        // line 305
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tab4.svg");
        echo "\" alt=\"\">
          </div>
        </div>
      </div>

      <div class=\"for-customer\" id=\"illinois-form\">
        <h2 class=\"title\">Клиентам за пределами штата Иллинойс<a class=\"for-customer__trigger\" href=\"\"><i
              class=\"icon-angle\"></i></a></h2>
        <div class=\"for-customer__fade-block\">
          <div class=\"for-customer__wrap\">
            <div class=\"for-customer__col\">
              ";
        // line 316
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['fixture'] = "h3"        ;
        $context['__cms_component_params']['class'] = "subtitle"        ;
        $context['__cms_component_params']['tools'] = "bold,italic,align-left,align-center,align-right,undo,redo,line-break"        ;
        $context['__cms_component_params']['file'] = "Illinois/Illinois.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 317
        echo "              <img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/for-customers.svg");
        echo "\" alt=\"\">
            </div>
            <div class=\"for-customer__col\">
              <h3 class=\"subtitle\">";
        // line 320
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Для этого нам требуется инфо от отправителя:"]);
        echo "</h3>


              ";
        // line 323
        if ((($context["activeLocale"] ?? null) == "ru")) {
            // line 324
            echo "              <form data-request=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["IllinoisFormRu"] ?? null), 324, $this->source), "html", null, true);
            echo "::onFormSubmit\">

                ";
            // line 326
            echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
            echo "

                <div id=\"";
            // line 328
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["IllinoisFormRu"] ?? null), 328, $this->source), "html", null, true);
            echo "_forms_flash\"></div>

                ";
            // line 330
            if (($context["user"] ?? null)) {
                // line 331
                echo "                <div class=\"input\">
                  <label for=\"name\">Ф.И.О</label>
                  <input name=\"Ф.И.О\" type=\"text\" id=\"name\" placeholder=\"";
                // line 333
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Иванов Иван Иванович"]);
                echo "\"
                    value=\"";
                // line 334
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 334), 334, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "surname", [], "any", false, false, true, 334), 334, $this->source), "html", null, true);
                echo "\">
                </div>
                <div class=\"input\">
                  <label for=\"address\">Адрес</label>
                  <input name=\"Адрес\" type=\"text\" id=\"address\"
                    placeholder=\"";
                // line 339
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["New York, 10007, Соединенные Штаты Америки"]);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "address", [], "any", false, false, true, 339), 339, $this->source), "html", null, true);
                echo "\">
                </div>
                <div class=\"input\">
                  <label for=\"phone\">Телефон</label>
                  <input name=\"Телефон\" type=\"text\" id=\"phone\" placeholder=\"+ 1 630 9 8 10 1 630\"
                    value=\"";
                // line 344
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, true, 344), 344, $this->source), "html", null, true);
                echo "\">
                </div>
                <div class=\"input\">
                  <label for=\"weight\">Вес груза</label>
                  <input name=\"Вес_груза\" type=\"text\" id=\"weight\" placeholder=\"";
                // line 348
                echo "15 кг";
                echo "\">
                </div>
                <div class=\"input\">
                  <label for=\"email\">Email</label>
                  <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"ivanov@gmail.com\" value=\"";
                // line 352
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, true, 352), 352, $this->source), "html", null, true);
                echo "\">
                </div>
                ";
            } else {
                // line 355
                echo "                <div class=\"input\">
                  <label for=\"name\">Ф.И.О</label>
                  <input name=\"Ф.И.О\" type=\"text\" id=\"name\" placeholder=\"";
                // line 357
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Иванов Иван Иванович"]);
                echo "\">
                </div>
                <div class=\"input\">
                  <label for=\"address\">Адрес</label>
                  <input name=\"Адрес\" type=\"text\" id=\"address\"
                    placeholder=\"";
                // line 362
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["New York, 10007, Соединенные Штаты Америки"]);
                echo "\">
                </div>
                <div class=\"input\">
                  <label for=\"phone\">Телефон</label>
                  <input name=\"Телефон\" type=\"text\" id=\"phone\" placeholder=\"+ 1 630 9 8 10 1 630\">
                </div>
                <div class=\"input\">
                  <label for=\"weight\">Вес груза</label>
                  <input name=\"Вес_груза\" type=\"text\" id=\"weight\" placeholder=\"";
                // line 370
                echo "15 кг";
                echo "\">
                </div>
                <div class=\"input\">
                  <label for=\"email\">Email</label>
                  <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"ivanov@gmail.com\">
                </div>
                ";
            }
            // line 377
            echo "
                <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default\">";
            // line 378
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Отправить"]);
            echo "</button>

              </form>
              ";
        } else {
            // line 382
            echo "
              <form data-request=\"";
            // line 383
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["IllinoisFormEn"] ?? null), 383, $this->source), "html", null, true);
            echo "::onFormSubmit\">

                ";
            // line 385
            echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
            echo "

                <div id=\"";
            // line 387
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["IllinoisFormEn"] ?? null), 387, $this->source), "html", null, true);
            echo "_forms_flash\"></div>

                ";
            // line 389
            if (($context["user"] ?? null)) {
                // line 390
                echo "                <div class=\"input\">
                  <label for=\"name\">Full name</label>
                  <input name=\"Full_name\" type=\"text\" id=\"name\" placeholder=\"";
                // line 392
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Иванов Иван Иванович"]);
                echo "\"
                    value=\"";
                // line 393
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 393), 393, $this->source), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "surname", [], "any", false, false, true, 393), 393, $this->source), "html", null, true);
                echo "\">
                </div>
                <div class=\"input\">
                  <label for=\"address\">Address</label>
                  <input name=\"Address\" type=\"text\" id=\"address\"
                    placeholder=\"";
                // line 398
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["New York, 10007, Соединенные Штаты Америки"]);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "address", [], "any", false, false, true, 398), 398, $this->source), "html", null, true);
                echo "\">
                </div>
                <div class=\"input\">
                  <label for=\"phone\">Phone</label>
                  <input name=\"Phone\" type=\"text\" id=\"phone\" placeholder=\"+ 1 630 9 8 10 1 630\" value=\"";
                // line 402
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, true, 402), 402, $this->source), "html", null, true);
                echo "\">
                </div>
                <div class=\"input\">
                  <label for=\"weight\">Cargo weight</label>
                  <input name=\"Cargo_weight\" type=\"text\" id=\"weight\" placeholder=\"";
                // line 406
                echo "15 кг";
                echo "\">
                </div>
                <div class=\"input\">
                  <label for=\"email\">Email</label>
                  <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"ivanov@gmail.com\" value=\"";
                // line 410
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, true, 410), 410, $this->source), "html", null, true);
                echo "\">
                </div>
                ";
            } else {
                // line 413
                echo "                <div class=\"input\">
                  <label for=\"name\">Full name</label>
                  <input name=\"Full_name\" type=\"text\" id=\"name\" placeholder=\"";
                // line 415
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Иванов Иван Иванович"]);
                echo "\">
                </div>
                <div class=\"input\">
                  <label for=\"address\">Address</label>
                  <input name=\"Address\" type=\"text\" id=\"address\"
                    placeholder=\"";
                // line 420
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["New York, 10007, Соединенные Штаты Америки"]);
                echo "\">
                </div>
                <div class=\"input\">
                  <label for=\"phone\">Phone</label>
                  <input name=\"Phone\" type=\"text\" id=\"phone\" placeholder=\"+ 1 630 9 8 10 1 630\">
                </div>
                <div class=\"input\">
                  <label for=\"weight\">Cargo weight</label>
                  <input name=\"Cargo_weight\" type=\"text\" id=\"weight\" placeholder=\"";
                // line 428
                echo "15 кг";
                echo "\">
                </div>
                <div class=\"input\">
                  <label for=\"email\">Email</label>
                  <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"ivanov@gmail.com\">
                </div>
                ";
            }
            // line 435
            echo "                <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Отправить"]);
            echo "</button>

              </form>

              ";
        }
        // line 440
        echo "



            </div>
          </div>
        </div>
      </div>

    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/partials/site/calc.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  929 => 440,  920 => 435,  910 => 428,  899 => 420,  891 => 415,  887 => 413,  881 => 410,  874 => 406,  867 => 402,  858 => 398,  848 => 393,  844 => 392,  840 => 390,  838 => 389,  833 => 387,  828 => 385,  823 => 383,  820 => 382,  813 => 378,  810 => 377,  800 => 370,  789 => 362,  781 => 357,  777 => 355,  771 => 352,  764 => 348,  757 => 344,  747 => 339,  737 => 334,  733 => 333,  729 => 331,  727 => 330,  722 => 328,  717 => 326,  711 => 324,  709 => 323,  703 => 320,  696 => 317,  688 => 316,  674 => 305,  668 => 302,  662 => 299,  656 => 296,  652 => 295,  641 => 287,  635 => 284,  629 => 281,  620 => 275,  615 => 273,  609 => 270,  599 => 263,  594 => 261,  588 => 258,  579 => 252,  575 => 251,  563 => 241,  559 => 239,  555 => 237,  551 => 235,  549 => 234,  545 => 232,  530 => 219,  524 => 216,  517 => 212,  508 => 208,  503 => 205,  501 => 204,  496 => 202,  491 => 200,  486 => 198,  483 => 197,  479 => 195,  475 => 193,  471 => 191,  469 => 190,  466 => 189,  449 => 174,  443 => 171,  436 => 167,  427 => 163,  422 => 160,  420 => 159,  415 => 157,  411 => 156,  405 => 154,  403 => 153,  397 => 150,  382 => 138,  374 => 133,  358 => 129,  353 => 127,  345 => 122,  341 => 121,  332 => 114,  324 => 113,  317 => 109,  312 => 107,  307 => 104,  299 => 103,  295 => 101,  287 => 100,  279 => 95,  273 => 92,  267 => 89,  263 => 88,  255 => 82,  245 => 78,  237 => 77,  234 => 76,  230 => 75,  227 => 74,  224 => 73,  221 => 72,  218 => 71,  215 => 70,  212 => 69,  210 => 68,  206 => 67,  200 => 64,  196 => 63,  191 => 60,  183 => 59,  176 => 55,  170 => 51,  163 => 49,  153 => 47,  149 => 45,  146 => 44,  142 => 43,  139 => 42,  136 => 41,  133 => 40,  130 => 39,  127 => 38,  124 => 37,  122 => 36,  116 => 33,  108 => 30,  104 => 29,  95 => 23,  86 => 17,  82 => 16,  78 => 15,  74 => 14,  70 => 12,  62 => 11,  58 => 10,  54 => 9,  49 => 6,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if this.page.url == \"/\" %}
<div class=\"calculator\" id=\"calculator\">
  {% else %}
  <div class=\"calculator\" id=\"calculator\" style=\"display: none;\">
    {% endif %}
    <div class=\"container\">
      <div class=\"calculator__wrap\">
        <div class=\"calculator__col\">
          <h3 class=\"subtitle\">{{'Калькулятор'|_}}</h3>
          <h2 class=\"title\">{{'Рассчитайте стоимость превозки'|_}}</h2>
          {% component 'contenteditor' fixture=\"p\" class=\"description\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"calculate/desc.htm\" %}
          <div class=\"calculator__tab-block tab\">
            <ul class=\"tabs\">
              <li><a class=\"route-tab-btn\" href=\"#\">{{'МАРШРУТ'|_}}</a></li>
              <li><a class=\"about-cargo-tab-btn\" href=\"#\">{{'О ГРУЗЕ'|_}}</a></li>
              <li><a class=\"rate-tab-btn\" href=\"#\">{{'ИТОГ'|_}}</a></li>
              <li><a class=\"contacts-tab-btn\" href=\"#\">{{'Контакты'|_}}</a></li>
            </ul>
            <div class=\"tab_content\">
              <div id=\"contacts\">
                <div class=\"tabs_item route-tab\">
                  <div class=\"input\">
                    <label for=\"from\">{{'Откуда'|_}}</label>
                    <input type=\"text\" id=\"from\" value=\"Chicago, IL\" style=\"pointer-events: none;\">
                    <div class=\"input__icon\"><i class=\"icon-marker2\"></i></div>
                  </div>
                  <div class=\"input input--select\">
                    <div class=\"input__icon\"><i class=\"icon-marker2\"></i></div>
                    <label for=\"package\">{{'Куда'|_}}</label>
                    <input class=\"select-type\" type=\"hidden\" value=\"{{'Ваш контейнер'|_}}\" name=\"{{'Упаковка'|_}}\"
                      id=\"package\">
                    <div class=\"select\">
                      <div class=\"select__checked\">{{'Выбирите пункт'|_}}</div>
                      <ul class=\"select__dropdown\">

                        {% set records = city.records %}
                        {% set displayColumn = city.displayColumn %}
                        {% set noRecordsMessage = city.noRecordsMessage %}
                        {% set detailsPage = city.detailsPage %}
                        {% set detailsKeyColumn = city.detailsKeyColumn %}
                        {% set detailsUrlParameter = city.detailsUrlParameter %}

                        {% for record in records %}
                        {% if record.pub == false %}

                        {% else %}
                        <li data-value=\"{{record.city}}\" data-price=\"{{record.city_price}}\">{{record.city}}</li>
                        {% endif %}

                        {% endfor %}

                      </ul>
                    </div>
                  </div>
                  <a class=\"btn btn-step\" href=\"#\">{{'Следующий шаг'|_}}</a>
                </div>
                <div class=\"tabs_item about-cargo-tab\">
                  <div class=\"calculator__description\">
                    {% component 'contenteditor' fixture=\"p\" class=\"\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"calculate/about_cargo1.htm\" %}
                  </div>

                  <div class=\"input input--raw input--raw1\">
                    <label for=\"weight\">{{'Вес груза'|_}}</label>
                    <input type=\"number\" id=\"weight\" placeholder=\"15\" name=\"{{'Вес груза'|_}}\">
                  </div>
                  <div class=\"input input--raw input--raw2\">
                    <label for=\"price\">{{'Цена'|_}}</label>
                    {% set records = formula.records %}
                    {% set displayColumn = formula.displayColumn %}
                    {% set noRecordsMessage = formula.noRecordsMessage %}
                    {% set detailsPage = formula.detailsPage %}
                    {% set detailsKeyColumn = formula.detailsKeyColumn %}
                    {% set detailsUrlParameter = formula.detailsUrlParameter %}

                    {% for record in records %}

                    <input type=\"text\" id=\"mainPrice\" value=\"\${{record.main_price}}/{{'кг'|_}}\" name=\"{{'Цена'|_}}\"
                      data-mainprice=\"{{record.main_price}}\" style=\"pointer-events: none;\">


                    {% endfor %}


                  </div>
                  <br>

                  <div class=\"input input--raw input--raw3\">
                    <label for=\"length\">{{'Обьем груза'|_}}</label>
                    <input type=\"number\" id=\"length\" placeholder=\"{{'Длина дюйм'|_}}\" name=\"Количество\">
                  </div>
                  <div class=\"input input--raw input--raw4\">
                    <input type=\"number\" id=\"width\" placeholder=\"{{'Ширина дюйм'|_}}\" name=\"Количество\">
                  </div>
                  <div class=\"input input--raw input--raw5\">
                    <input type=\"number\" id=\"height\" placeholder=\"{{'Высота дюйм'|_}}\" name=\"Количество\">
                  </div>
                  <input type=\"hidden\" id=\"divider\" value=\"366\">
                  <br>
                  <div class=\"additional-info\">
                    {% component 'contenteditor' fixture=\"p\" class=\"\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"calculate/formula.htm\" %}
                  </div>

                  {% component 'contenteditor' fixture=\"p\" class=\"\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"calculate/about_cargo2.htm\" %}
                  <br>
                  <br>
                  <div class=\"input input--textarea\">
                    <label for=\"cargo-information\">{{'Информация о грузе'|_}}</label>
                    <textarea name=\"Информация о грузе\" placeholder=\"Сообщение\" id=\"cargo-information\"></textarea>
                  </div><a class=\"btn btn-step\" href=\"#\">{{'Следующий шаг'|_}}</a>
                </div>
                <div class=\"tabs_item rate-tab\">
                  <div class=\"calculator__description\">
                    {% component 'contenteditor' fixture=\"p\" class=\"\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"calculate/desc2.htm\" %}
                  </div>

                  <div class=\"calculator__total\">
                    <div class=\"calculator__detailed-info\">
                      <div class=\"detailed-info-block\">
                        <ul>
                          <li>
                            <span>{{'Вес груза'|_}}</span>
                            <div><span class=\"detailed-info-block__weight\"></span> <span>{{'кг'|_}}</span></div>


                          </li>
                          <li>
                            <span>{{'Цена за кг'|_}}</span>
                            <span
                              class=\"detailed-info-block__price\">\${% for record in records %}{{record.main_price}}{% endfor %}/{{'кг'}}</span>

                          </li>
                          <li>
                            <span>{{'Город'|_}}</span>
                            <span class=\"detailed-info-block__city\"></span>

                          </li>
                          <li>
                            <span>{{'Предполагаемая итоговая сумма'|_}}</span>
                            <span class=\"detailed-info-block__total\"></span>

                          </li>
                        </ul>
                      </div>
                    </div>
                    <a class=\"btn\" href=\"#\">107,97 \$ </a>
                  </div>
                </div>
                <div class=\"tabs_item contacts-tab\">
                  <div class=\"calculator__description\">
                    <p>{{'Мы свяжемся с Вами в ближайшее время!'|_}}</p>
                  </div>

                  {% if activeLocale == 'ru' %}
                  <form data-request=\"{{ CalculatorFormRu }}::onFormSubmit\">

                    {{ form_token() }}
                    <div id=\"{{ CalculatorFormRu }}_forms_flash\"></div>

                    {% if user %}
                    <div class=\"input\">
                      <label for=\"name\">Ф.И.О</label>
                      <input type=\"text\" id=\"name\" name=\"Ф.И.О\" placeholder=\"Иванов Иван\"
                        value=\"{{user.name}} {{user.surname}}\">
                    </div>
                    <div class=\"input\">
                      <label for=\"phone\">Номер телефона</label>
                      <input type=\"text\" id=\"phone\" name=\"Телефон\" placeholder=\"+1 847 2711988\" value=\"{{user.phone}}\">
                    </div>
                    <div class=\"input\">
                      <label for=\"email\">Email</label>
                      <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"ivanov@gmail.com\" value=\"{{user.email}}\">
                    </div>
                    {% else %}

                    <div class=\"input\">
                      <label for=\"name\">Ф.И.О</label>
                      <input type=\"text\" id=\"name\" name=\"Ф.И.О\" placeholder=\"Иванов Иван\">
                    </div>
                    <div class=\"input\">
                      <label for=\"phone\">Номер телефона</label>
                      <input type=\"text\" id=\"phone\" name=\"Телефон\" placeholder=\"+1 847 2711988 \">
                    </div>
                    <div class=\"input\">
                      <label for=\"email\">Email</label>
                      <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"ivanov@gmail.com\">
                    </div>

                    {% endif %}

                    {% if user %}
                    <button class=\"btn\" type=\"submit\">Отправить</button>
                    {% else %}
                    <button class=\"btn btn-step\" type=\"submit\">Отправить</button>
                    {% endif %}
                  </form>
                  {% else %}

                  <form data-request=\"{{ CalculatorFormEn }}::onFormSubmit\">

                    {{ form_token() }}

                    <div id=\"{{ CalculatorFormEn }}_forms_flash\"></div>

                    {% if user %}
                    <div class=\"input\">
                      <label for=\"name\">Full name</label>
                      <input type=\"text\" id=\"name\" name=\"Full_name\" placeholder=\"Ivanov Ivan\"
                        value=\"{{user.name}} {{user.surname}}\">
                    </div>
                    <div class=\"input\">
                      <label for=\"phone\">Phone</label>
                      <input type=\"text\" id=\"phone\" name=\"Phone\" placeholder=\"+1 847 2711988\" value=\"{{user.phone}}\">
                    </div>
                    <div class=\"input\">
                      <label for=\"email\">Email</label>
                      <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"ivanov@gmail.com\" value=\"{{user.email}}\">
                    </div>
                    {% else %}
                    <div class=\"input\">
                      <label for=\"name\">Full name</label>
                      <input type=\"text\" id=\"name\" name=\"Full_name\" placeholder=\"Ivanov Ivan\">
                    </div>
                    <div class=\"input\">
                      <label for=\"phone\">Phone</label>
                      <input type=\"text\" id=\"phone\" name=\"Phone\" placeholder=\"+1 847 2711988 \">
                    </div>
                    <div class=\"input\">
                      <label for=\"email\">Email</label>
                      <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"ivanov@gmail.com\">
                    </div>
                    {% endif %}


                    {% if user %}
                    <button class=\"btn\" type=\"submit\">Send</button>
                    {% else %}
                    <button class=\"btn btn-step\" type=\"submit\">Send</button>
                    {% endif %}
                  </form>
                  {% endif %}
                </div>
              </div>
            </div>
            <br>
         <div class=\"calculator__info\">
           <div class=\"calculator__info-item\">
             <div class=\"calculator__info-icon\">
               <i class=\"icon-calendar\"></i>
             </div>
             <div class=\"calculator__info-desc\">
               <span>{{'время доставки'|_}}</span>
               <p>7-9 {{'дней'|_}}</p>
             </div>
           </div>
           <div class=\"calculator__info-item\">
             <div class=\"calculator__info-icon\">
               <i class=\"icon-product\"></i>
               <span>{{'СБОР'|_}}</span>
             </div>
             <div class=\"calculator__info-desc\">
               <span>{{'до каждой среды'|_}}</span>
               <p>
                 {{ \"wednesday\"|date('d.m.y') }}
                </p>
             </div>
           </div>
            <div class=\"calculator__info-item\">
              <div class=\"calculator__info-icon\">
                <i class=\"icon-boing\"></i>
                <span>{{'ВЫЛЕТЫ'|_}}</span>
              </div>
              <div class=\"calculator__info-desc\">
                <span>{{'каждое воскресенье'|_}}</span>
                <p>
                  {{ \"sunday\"|date('d.m.y') }}
                </p>
              </div>
            </div>
            <div class=\"calculator__info-additional\">
              <div class=\"calculator__info-additional-item\">
                <p>{{'ЦЕНЫ НА ЭЛЕКТРОНИКУ и КОММЕРЧЕСКИЙ ГРУЗ'|_}}</p>
              </div>
              <div class=\"calculator__info-additional-item\">
                <p>{{'отличаются и не показаны на калькуляторе'|_}}.</p>
              </div>
              <div class=\"calculator__info-additional-item\">
                <p>{{'Позвоните чтобы получить детальную информацию'|_}}.</p>
              </div>
            </div>
         </div>
          </div>
        </div>
        <div class=\"calculator__col\">
          <div class=\"calculator__tab-img1 tab-img\">
            <img src=\"{{'assets/img/tab1.svg'| theme}}\" alt=\"\">
            <div class=\"calculator-plane\"><img src=\"{{'assets/icons/steps-plane.svg'| theme}}\" alt=\"\"></div>
          </div>
          <div class=\"calculator__tab-img2 tab-img\">
            <img src=\"{{'assets/img/tab2.svg'| theme}}\" alt=\"\">
          </div>
          <div class=\"calculator__tab-img3 tab-img\">
            <img src=\"{{'assets/img/tab3.svg'| theme}}\" alt=\"\">
          </div>
          <div class=\"calculator__tab-img4 tab-img\">
            <img src=\"{{'assets/img/tab4.svg'| theme}}\" alt=\"\">
          </div>
        </div>
      </div>

      <div class=\"for-customer\" id=\"illinois-form\">
        <h2 class=\"title\">Клиентам за пределами штата Иллинойс<a class=\"for-customer__trigger\" href=\"\"><i
              class=\"icon-angle\"></i></a></h2>
        <div class=\"for-customer__fade-block\">
          <div class=\"for-customer__wrap\">
            <div class=\"for-customer__col\">
              {% component 'contenteditor' fixture=\"h3\" class=\"subtitle\" tools=\"bold,italic,align-left,align-center,align-right,undo,redo,line-break\" file=\"Illinois/Illinois.htm\" %}
              <img src=\"{{'assets/img/for-customers.svg'| theme}}\" alt=\"\">
            </div>
            <div class=\"for-customer__col\">
              <h3 class=\"subtitle\">{{'Для этого нам требуется инфо от отправителя:'|_}}</h3>


              {% if activeLocale == 'ru' %}
              <form data-request=\"{{ IllinoisFormRu }}::onFormSubmit\">

                {{ form_token() }}

                <div id=\"{{ IllinoisFormRu }}_forms_flash\"></div>

                {% if user %}
                <div class=\"input\">
                  <label for=\"name\">Ф.И.О</label>
                  <input name=\"Ф.И.О\" type=\"text\" id=\"name\" placeholder=\"{{'Иванов Иван Иванович'|_}}\"
                    value=\"{{user.name}} {{user.surname}}\">
                </div>
                <div class=\"input\">
                  <label for=\"address\">Адрес</label>
                  <input name=\"Адрес\" type=\"text\" id=\"address\"
                    placeholder=\"{{'New York, 10007, Соединенные Штаты Америки'|_}}\" value=\"{{user.address}}\">
                </div>
                <div class=\"input\">
                  <label for=\"phone\">Телефон</label>
                  <input name=\"Телефон\" type=\"text\" id=\"phone\" placeholder=\"+ 1 630 9 8 10 1 630\"
                    value=\"{{user.phone}}\">
                </div>
                <div class=\"input\">
                  <label for=\"weight\">Вес груза</label>
                  <input name=\"Вес_груза\" type=\"text\" id=\"weight\" placeholder=\"{{'15 кг'}}\">
                </div>
                <div class=\"input\">
                  <label for=\"email\">Email</label>
                  <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"ivanov@gmail.com\" value=\"{{user.email}}\">
                </div>
                {% else %}
                <div class=\"input\">
                  <label for=\"name\">Ф.И.О</label>
                  <input name=\"Ф.И.О\" type=\"text\" id=\"name\" placeholder=\"{{'Иванов Иван Иванович'|_}}\">
                </div>
                <div class=\"input\">
                  <label for=\"address\">Адрес</label>
                  <input name=\"Адрес\" type=\"text\" id=\"address\"
                    placeholder=\"{{'New York, 10007, Соединенные Штаты Америки'|_}}\">
                </div>
                <div class=\"input\">
                  <label for=\"phone\">Телефон</label>
                  <input name=\"Телефон\" type=\"text\" id=\"phone\" placeholder=\"+ 1 630 9 8 10 1 630\">
                </div>
                <div class=\"input\">
                  <label for=\"weight\">Вес груза</label>
                  <input name=\"Вес_груза\" type=\"text\" id=\"weight\" placeholder=\"{{'15 кг'}}\">
                </div>
                <div class=\"input\">
                  <label for=\"email\">Email</label>
                  <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"ivanov@gmail.com\">
                </div>
                {% endif %}

                <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default\">{{'Отправить'|_}}</button>

              </form>
              {% else %}

              <form data-request=\"{{ IllinoisFormEn }}::onFormSubmit\">

                {{ form_token() }}

                <div id=\"{{ IllinoisFormEn }}_forms_flash\"></div>

                {% if user %}
                <div class=\"input\">
                  <label for=\"name\">Full name</label>
                  <input name=\"Full_name\" type=\"text\" id=\"name\" placeholder=\"{{'Иванов Иван Иванович'|_}}\"
                    value=\"{{user.name}} {{user.surname}}\">
                </div>
                <div class=\"input\">
                  <label for=\"address\">Address</label>
                  <input name=\"Address\" type=\"text\" id=\"address\"
                    placeholder=\"{{'New York, 10007, Соединенные Штаты Америки'|_}}\" value=\"{{user.address}}\">
                </div>
                <div class=\"input\">
                  <label for=\"phone\">Phone</label>
                  <input name=\"Phone\" type=\"text\" id=\"phone\" placeholder=\"+ 1 630 9 8 10 1 630\" value=\"{{user.phone}}\">
                </div>
                <div class=\"input\">
                  <label for=\"weight\">Cargo weight</label>
                  <input name=\"Cargo_weight\" type=\"text\" id=\"weight\" placeholder=\"{{'15 кг'}}\">
                </div>
                <div class=\"input\">
                  <label for=\"email\">Email</label>
                  <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"ivanov@gmail.com\" value=\"{{user.email}}\">
                </div>
                {% else %}
                <div class=\"input\">
                  <label for=\"name\">Full name</label>
                  <input name=\"Full_name\" type=\"text\" id=\"name\" placeholder=\"{{'Иванов Иван Иванович'|_}}\">
                </div>
                <div class=\"input\">
                  <label for=\"address\">Address</label>
                  <input name=\"Address\" type=\"text\" id=\"address\"
                    placeholder=\"{{'New York, 10007, Соединенные Штаты Америки'|_}}\">
                </div>
                <div class=\"input\">
                  <label for=\"phone\">Phone</label>
                  <input name=\"Phone\" type=\"text\" id=\"phone\" placeholder=\"+ 1 630 9 8 10 1 630\">
                </div>
                <div class=\"input\">
                  <label for=\"weight\">Cargo weight</label>
                  <input name=\"Cargo_weight\" type=\"text\" id=\"weight\" placeholder=\"{{'15 кг'}}\">
                </div>
                <div class=\"input\">
                  <label for=\"email\">Email</label>
                  <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"ivanov@gmail.com\">
                </div>
                {% endif %}
                <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-default\">{{'Отправить'|_}}</button>

              </form>

              {% endif %}




            </div>
          </div>
        </div>
      </div>

    </div>
  </div>", "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/partials/site/calc.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "component" => 11, "set" => 36, "for" => 43);
        static $filters = array("_" => 9, "escape" => 47, "date" => 263, "theme" => 295);
        static $functions = array("form_token" => 156);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'component', 'set', 'for'],
                ['_', 'escape', 'date', 'theme'],
                ['form_token']
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
