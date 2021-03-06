<?php

/* partials/base.html.twig */
class __TwigTemplate_babf3fe85e12834a3acf0ec4eefdf9e7bcfa38a6df17a2bb6818934d45297267 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 41
        echo "</head>
<body id=\"top\" class=\"";
        // line 42
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">
  ";
        // line 43
        $this->displayBlock('header', $context, $blocks);
        // line 63
        echo "

    <div>


        ";
        // line 68
        $this->displayBlock('showcase', $context, $blocks);
        // line 69
        echo "
        ";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "
        ";
        // line 76
        $this->displayBlock('footer', $context, $blocks);
        // line 121
        echo "    </div>

    
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

    ";
        // line 127
        $this->displayBlock('bottom', $context, $blocks);
        // line 140
        echo "</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 11
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Pacifico|Source+Sans+Pro:300,400,600,700\" rel=\"stylesheet\">
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "  
        
        ";
        // line 18
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/nina.css"), "method");
        // line 19
        echo "
        ";
        // line 20
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 10))) {
            // line 21
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 22
            echo "        ";
        }
        // line 23
        echo "        ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 9))) {
            // line 24
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 25
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 26
            echo "        ";
        }
        // line 27
        echo "    ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/antimatter.js"), "method");
        // line 34
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/slidebars.min.js"), "method");
        // line 35
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.matchHeight-min.js"), "method");
        // line 36
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/match-height.js"), "method");
        // line 37
        echo "    ";
    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        // line 44
        echo "  <div class=\"top-bar\" >
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <a class=\"logo\" href=\"";
        // line 48
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\"><img src=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.svg");
        echo "\" alt=\"Nina's Wellness Logo\"></a>
          </div>
          <div class=\"col-md-9\">
            ";
        // line 51
        $this->displayBlock('header_extra', $context, $blocks);
        // line 52
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 53
            echo "            ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 53)->display($context);
            // line 54
            echo "            ";
        }
        // line 55
        echo "            ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 58
        echo "          </div>
        </div>
      </div>
    </div>
    ";
    }

    // line 51
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 55
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 56
        echo "            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 56)->display($context);
        // line 57
        echo "            ";
    }

    // line 68
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        // line 71
        echo "        ";
        // line 72
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "        ";
        // line 74
        echo "        ";
    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
    }

    // line 76
    public function block_footer($context, array $blocks = array())
    {
        // line 77
        echo "        <section class=\"mailing-list\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-8 offset-md-2 text-center\">
              <img class=\"margin__bottom--medium\" src=\"/images/logo-2.svg\" width=\"200\" alt=\"\">
              <h2>Join the mailing list</h2>
              <p>Like what I do? Subscribe to my mailing list by entering your email below and receive news and advice on pre &amp; post natal nutrition and fitness!</p>
              <div class=\"row\">
                <div class=\"col-md-8 offset-md-2\">
                  <form>
                    <div class=\"form-group\">
                      <input type=\"email\" class=\"form-control\">
                    </div>
                    <button class=\"btn btn-primary margin__top--small\">Join mailing list</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer class=\"site-footer\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-8 offset-md-2 text-center\">
              <ul class=\"list-inline margin__top--large\">
                <li class=\"list-inline-item\"><a href=\"\"><img src=\"";
        // line 104
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/facebook-icon.svg");
        echo "\" width=\"50\" alt=\"\"></a></li>
                <li class=\"list-inline-item\"><a href=\"\"><img src=\"";
        // line 105
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/instagram-link-icon.svg");
        echo "\" width=\"50\" alt=\"\"></a></li>
                <li class=\"list-inline-item\"><a href=\"\"><img src=\"";
        // line 106
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/twitter-icon.svg");
        echo "\" width=\"50\" alt=\"\"></a></li>
              </ul>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-md-6\">
              &copy; Copyright 2017 Nina's Wellness.
            </div>
            <div class=\"col-md-6 text-right\">
              Website design by <a href=\"http://www.kokolas.com\">Ben Kokólas Design</a>
            </div>
          </div>
        </div>
      </footer>
        ";
    }

    // line 127
    public function block_bottom($context, array $blocks = array())
    {
        // line 128
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 128,  332 => 127,  313 => 106,  309 => 105,  305 => 104,  276 => 77,  273 => 76,  268 => 72,  264 => 74,  262 => 73,  259 => 72,  257 => 71,  254 => 70,  249 => 68,  245 => 57,  242 => 56,  239 => 55,  234 => 51,  226 => 58,  223 => 55,  220 => 54,  217 => 53,  214 => 52,  212 => 51,  204 => 48,  198 => 44,  195 => 43,  191 => 37,  188 => 36,  185 => 35,  182 => 34,  179 => 33,  176 => 32,  173 => 31,  170 => 30,  166 => 27,  163 => 26,  160 => 25,  157 => 24,  154 => 23,  151 => 22,  148 => 21,  146 => 20,  143 => 19,  141 => 18,  137 => 16,  134 => 15,  126 => 38,  124 => 30,  118 => 28,  116 => 15,  109 => 11,  105 => 10,  102 => 9,  100 => 8,  92 => 7,  89 => 6,  86 => 5,  80 => 140,  78 => 127,  70 => 121,  68 => 76,  65 => 75,  63 => 70,  60 => 69,  58 => 68,  51 => 63,  49 => 43,  45 => 42,  42 => 41,  40 => 5,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Pacifico|Source+Sans+Pro:300,400,600,700\" rel=\"stylesheet\">
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    {% block stylesheets %}
  
        
        {% do assets.addCss('theme://css-compiled/nina.css') %}

        {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}
            {% do assets.addCss('theme://css/nucleus-ie10.css') %}
        {% endif %}
        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.addCss('theme://css/nucleus-ie9.css') %}
            {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}
        {% endif %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 101) %}
        {% do assets.addJs('theme://js/modernizr.custom.71422.js', 100) %}
        {% do assets.addJs('theme://js/antimatter.js') %}
        {% do assets.addJs('theme://js/slidebars.min.js') %}
        {% do assets.addJs('theme://js/jquery.matchHeight-min.js') %}
        {% do assets.addJs('theme://js/match-height.js') %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
  {% block header %}
  <div class=\"top-bar\" >
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <a class=\"logo\" href=\"{{ base_url == '' ? '/' : base_url }}\"><img src=\"{{ url('theme://images/logo.svg') }}\" alt=\"Nina's Wellness Logo\"></a>
          </div>
          <div class=\"col-md-9\">
            {% block header_extra %}{% endblock %}
            {% if config.plugins.langswitcher.enabled %}
            {% include 'partials/langswitcher.html.twig' %}
            {% endif %}
            {% block header_navigation %}
            {% include 'partials/navigation.html.twig' %}
            {% endblock %}
          </div>
        </div>
      </div>
    </div>
    {% endblock %}


    <div>


        {% block showcase %}{% endblock %}

        {% block body %}
        {# <section id=\"body\" class=\"{{ class }}\"> #}
            {% block content %}{% endblock %}
        {# </section> #}
        {% endblock %}

        {% block footer %}
        <section class=\"mailing-list\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-8 offset-md-2 text-center\">
              <img class=\"margin__bottom--medium\" src=\"/images/logo-2.svg\" width=\"200\" alt=\"\">
              <h2>Join the mailing list</h2>
              <p>Like what I do? Subscribe to my mailing list by entering your email below and receive news and advice on pre &amp; post natal nutrition and fitness!</p>
              <div class=\"row\">
                <div class=\"col-md-8 offset-md-2\">
                  <form>
                    <div class=\"form-group\">
                      <input type=\"email\" class=\"form-control\">
                    </div>
                    <button class=\"btn btn-primary margin__top--small\">Join mailing list</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer class=\"site-footer\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-8 offset-md-2 text-center\">
              <ul class=\"list-inline margin__top--large\">
                <li class=\"list-inline-item\"><a href=\"\"><img src=\"{{ url('theme://images/facebook-icon.svg') }}\" width=\"50\" alt=\"\"></a></li>
                <li class=\"list-inline-item\"><a href=\"\"><img src=\"{{ url('theme://images/instagram-link-icon.svg') }}\" width=\"50\" alt=\"\"></a></li>
                <li class=\"list-inline-item\"><a href=\"\"><img src=\"{{ url('theme://images/twitter-icon.svg') }}\" width=\"50\" alt=\"\"></a></li>
              </ul>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-md-6\">
              &copy; Copyright 2017 Nina's Wellness.
            </div>
            <div class=\"col-md-6 text-right\">
              Website design by <a href=\"http://www.kokolas.com\">Ben Kokólas Design</a>
            </div>
          </div>
        </div>
      </footer>
        {% endblock %}
    </div>

    
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

    {% block bottom %}
        {{ assets.js('bottom') }}
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
    {% endblock %}
</body>
</html>
", "partials/base.html.twig", "/Users/steveforbes/Sites/ninas-wellness/grav-admin/user/themes/nina/templates/partials/base.html.twig");
    }
}
