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

/* C:\work\OpenServer\domains\silk-road.loc/plugins/rainlab/user/components/account/register.htm */
class __TwigTemplate_c9494e57992ec974db6b7e30cd5ebc9cb0fc8744ae6fb7d8bc28f5844beab5d8 extends \Twig\Template
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
        if (($context["canRegister"] ?? null)) {
            // line 2
            echo "<h2 class=\"title title--light\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Регистрация"]);
            echo "</h2>

";
            // line 4
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onRegister"]);
            echo "

<div class=\"input input--light\">
  <label for=\"registerName\">";
            // line 7
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Имя"]);
            echo "</label>
  <input name=\"name\" type=\"text\" class=\"form-control\" id=\"registerName\" placeholder=\"";
            // line 8
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Введите имя"]);
            echo "\" />
</div>

<div class=\"input input--light\">
  <label for=\"registerSurName\">";
            // line 12
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Фамилия"]);
            echo "</label>
  <input name=\"surname\" type=\"text\" class=\"form-control\" id=\"registerSurName\" placeholder=\"";
            // line 13
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Введите фамилию"]);
            echo "\" />
</div>

<div class=\"input input--light\">
  <label for=\"registerPhone\">";
            // line 17
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Телефон"]);
            echo "</label>
  <input name=\"phone\" type=\"text\" class=\"form-control\" id=\"registerPhone\" placeholder=\"";
            // line 18
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Введите телефон"]);
            echo "\" />
</div>

<div class=\"input input--light\">
  <label for=\"registerAddress\">";
            // line 22
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Адрес"]);
            echo "</label>
  <input name=\"address\" type=\"text\" class=\"form-control\" id=\"registerAddress\" placeholder=\"";
            // line 23
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Введите адрес"]);
            echo "\" />
</div>

<div class=\"input input--light\">
  <label for=\"registerEmail\">Email</label>
  ";
            // line 28
            if ((($context["activeLocale"] ?? null) == "ru")) {
                // line 29
                echo "   <input name=\"email\" type=\"email\" class=\"form-control\" id=\"registerEmail\" placeholder=\"";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Введите email"]);
                echo "\"
     oninvalid=\"this.setCustomValidity('Пожалуйста, введите действующий адрес электронной почты')\" />
  ";
            } else {
                // line 32
                echo "  <input name=\"email\" type=\"email\" class=\"form-control\" id=\"registerEmail\" placeholder=\"";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Введите email"]);
                echo "\"
  oninvalid=\"this.setCustomValidity('Please Enter valid email')\" />
  ";
            }
            // line 35
            echo "</div>

";
            // line 37
            if ((($context["loginAttribute"] ?? null) == "username")) {
                // line 38
                echo "<div class=\"input input--light\">
  <label for=\"registerUsername\">";
                // line 39
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Login"]);
                echo "</label>
  <input name=\"username\" type=\"text\" class=\"form-control\" id=\"registerUsername\" placeholder=\"";
                // line 40
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Введите login"]);
                echo "\" />
</div>
";
            }
            // line 43
            echo "
<div class=\"input input--light\">
  <label for=\"registerPassword\">";
            // line 45
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Пароль"]);
            echo "</label>
  <input name=\"password\" type=\"password\" class=\"form-control\" id=\"registerPassword\"
    placeholder=\"••••••••••••••••••\" />
  <div class=\"eye\">
    <svg class=\"open\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\" style=\"display: none;\">
      <path
        d=\"M569.354 231.631C512.97 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-102.556 0-192.091-54.701-240-136 44.157-74.933 123.677-127.27 216.162-135.007C273.958 131.078 280 144.83 280 160c0 30.928-25.072 56-56 56s-56-25.072-56-56l.001-.042C157.794 179.043 152 200.844 152 224c0 75.111 60.889 136 136 136s136-60.889 136-136c0-31.031-10.4-59.629-27.895-82.515C451.704 164.638 498.009 205.106 528 256c-47.908 81.299-137.444 136-240 136z\">
      </path>
    </svg>
    <svg class=\"close\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"#000000\" data-name=\"Layer 1\" viewBox=\"0 0 90 90\" x=\"0px\"
      y=\"0px\">
      <path
        d=\"M44.71,49c-16,0-30.52-5.77-36.87-14.71a1.5,1.5,0,1,1,2.45-1.74C16.09,40.73,29.6,46,44.71,46S73.44,40.7,79.2,32.46a1.5,1.5,0,1,1,2.46,1.72C75.36,43.19,60.85,49,44.71,49Z\">
      </path>
      <path
        d=\"M18.69,58.5a1.5,1.5,0,0,1-.76-.21,1.49,1.49,0,0,1-.52-2l7.08-12a1.5,1.5,0,0,1,2.58,1.53L20,57.77A1.5,1.5,0,0,1,18.69,58.5Z\">
      </path>
      <path
        d=\"M2.62,48.59a1.48,1.48,0,0,1-1.08-.46,1.49,1.49,0,0,1,0-2.12l10-9.64a1.5,1.5,0,0,1,2.08,2.16l-10,9.64A1.5,1.5,0,0,1,2.62,48.59Z\">
      </path>
      <path d=\"M44.78,66.56a1.5,1.5,0,0,1-1.5-1.5V47.51a1.5,1.5,0,1,1,3,0V65.06A1.5,1.5,0,0,1,44.78,66.56Z\">
      </path>
      <path
        d=\"M70.8,58.5a1.5,1.5,0,0,1-1.3-.73l-7.08-12A1.5,1.5,0,0,1,65,44.29l7.08,12a1.49,1.49,0,0,1-.52,2A1.5,1.5,0,0,1,70.8,58.5Z\">
      </path>
      <path
        d=\"M86.87,48.59a1.5,1.5,0,0,1-1-.42l-10-9.64a1.51,1.51,0,0,1,0-2.12,1.49,1.49,0,0,1,2.12,0l10,9.64a1.49,1.49,0,0,1,0,2.12A1.48,1.48,0,0,1,86.87,48.59Z\">
      </path>
    </svg>
  </div>
</div>

<button type=\"submit\" class=\"btn btn-default\">";
            // line 77
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Зарегистрироваться"]);
            echo "</button>
<p class=\"log-in__additional\">Уже есть аккаунт?<a href=\"";
            // line 78
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
            echo "\">Авторизоваться</a></p>

";
            // line 80
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "
";
        } else {
            // line 82
            echo "<!-- Registration is disabled. -->
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\silk-road.loc/plugins/rainlab/user/components/account/register.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 82,  181 => 80,  176 => 78,  172 => 77,  137 => 45,  133 => 43,  127 => 40,  123 => 39,  120 => 38,  118 => 37,  114 => 35,  107 => 32,  100 => 29,  98 => 28,  90 => 23,  86 => 22,  79 => 18,  75 => 17,  68 => 13,  64 => 12,  57 => 8,  53 => 7,  47 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if canRegister %}
<h2 class=\"title title--light\">{{'Регистрация'|_}}</h2>

{{ form_ajax('onRegister') }}

<div class=\"input input--light\">
  <label for=\"registerName\">{{'Имя'|_}}</label>
  <input name=\"name\" type=\"text\" class=\"form-control\" id=\"registerName\" placeholder=\"{{'Введите имя'|_}}\" />
</div>

<div class=\"input input--light\">
  <label for=\"registerSurName\">{{'Фамилия'|_}}</label>
  <input name=\"surname\" type=\"text\" class=\"form-control\" id=\"registerSurName\" placeholder=\"{{'Введите фамилию'|_}}\" />
</div>

<div class=\"input input--light\">
  <label for=\"registerPhone\">{{'Телефон'|_}}</label>
  <input name=\"phone\" type=\"text\" class=\"form-control\" id=\"registerPhone\" placeholder=\"{{'Введите телефон'|_}}\" />
</div>

<div class=\"input input--light\">
  <label for=\"registerAddress\">{{'Адрес'|_}}</label>
  <input name=\"address\" type=\"text\" class=\"form-control\" id=\"registerAddress\" placeholder=\"{{'Введите адрес'|_}}\" />
</div>

<div class=\"input input--light\">
  <label for=\"registerEmail\">Email</label>
  {% if activeLocale == 'ru' %}
   <input name=\"email\" type=\"email\" class=\"form-control\" id=\"registerEmail\" placeholder=\"{{'Введите email'|_}}\"
     oninvalid=\"this.setCustomValidity('Пожалуйста, введите действующий адрес электронной почты')\" />
  {% else %}
  <input name=\"email\" type=\"email\" class=\"form-control\" id=\"registerEmail\" placeholder=\"{{'Введите email'|_}}\"
  oninvalid=\"this.setCustomValidity('Please Enter valid email')\" />
  {% endif %}
</div>

{% if loginAttribute == \"username\" %}
<div class=\"input input--light\">
  <label for=\"registerUsername\">{{'Login'|_}}</label>
  <input name=\"username\" type=\"text\" class=\"form-control\" id=\"registerUsername\" placeholder=\"{{'Введите login'|_}}\" />
</div>
{% endif %}

<div class=\"input input--light\">
  <label for=\"registerPassword\">{{'Пароль'|_}}</label>
  <input name=\"password\" type=\"password\" class=\"form-control\" id=\"registerPassword\"
    placeholder=\"••••••••••••••••••\" />
  <div class=\"eye\">
    <svg class=\"open\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\" style=\"display: none;\">
      <path
        d=\"M569.354 231.631C512.97 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-102.556 0-192.091-54.701-240-136 44.157-74.933 123.677-127.27 216.162-135.007C273.958 131.078 280 144.83 280 160c0 30.928-25.072 56-56 56s-56-25.072-56-56l.001-.042C157.794 179.043 152 200.844 152 224c0 75.111 60.889 136 136 136s136-60.889 136-136c0-31.031-10.4-59.629-27.895-82.515C451.704 164.638 498.009 205.106 528 256c-47.908 81.299-137.444 136-240 136z\">
      </path>
    </svg>
    <svg class=\"close\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"#000000\" data-name=\"Layer 1\" viewBox=\"0 0 90 90\" x=\"0px\"
      y=\"0px\">
      <path
        d=\"M44.71,49c-16,0-30.52-5.77-36.87-14.71a1.5,1.5,0,1,1,2.45-1.74C16.09,40.73,29.6,46,44.71,46S73.44,40.7,79.2,32.46a1.5,1.5,0,1,1,2.46,1.72C75.36,43.19,60.85,49,44.71,49Z\">
      </path>
      <path
        d=\"M18.69,58.5a1.5,1.5,0,0,1-.76-.21,1.49,1.49,0,0,1-.52-2l7.08-12a1.5,1.5,0,0,1,2.58,1.53L20,57.77A1.5,1.5,0,0,1,18.69,58.5Z\">
      </path>
      <path
        d=\"M2.62,48.59a1.48,1.48,0,0,1-1.08-.46,1.49,1.49,0,0,1,0-2.12l10-9.64a1.5,1.5,0,0,1,2.08,2.16l-10,9.64A1.5,1.5,0,0,1,2.62,48.59Z\">
      </path>
      <path d=\"M44.78,66.56a1.5,1.5,0,0,1-1.5-1.5V47.51a1.5,1.5,0,1,1,3,0V65.06A1.5,1.5,0,0,1,44.78,66.56Z\">
      </path>
      <path
        d=\"M70.8,58.5a1.5,1.5,0,0,1-1.3-.73l-7.08-12A1.5,1.5,0,0,1,65,44.29l7.08,12a1.49,1.49,0,0,1-.52,2A1.5,1.5,0,0,1,70.8,58.5Z\">
      </path>
      <path
        d=\"M86.87,48.59a1.5,1.5,0,0,1-1-.42l-10-9.64a1.51,1.51,0,0,1,0-2.12,1.49,1.49,0,0,1,2.12,0l10,9.64a1.49,1.49,0,0,1,0,2.12A1.48,1.48,0,0,1,86.87,48.59Z\">
      </path>
    </svg>
  </div>
</div>

<button type=\"submit\" class=\"btn btn-default\">{{'Зарегистрироваться'|_}}</button>
<p class=\"log-in__additional\">Уже есть аккаунт?<a href=\"{{ 'login'|page }}\">Авторизоваться</a></p>

{{ form_close() }}
{% else %}
<!-- Registration is disabled. -->
{% endif %}", "C:\\work\\OpenServer\\domains\\silk-road.loc/plugins/rainlab/user/components/account/register.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("_" => 2, "page" => 78);
        static $functions = array("form_ajax" => 4, "form_close" => 80);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['_', 'page'],
                ['form_ajax', 'form_close']
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
