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
        // line 39
        echo "</head>
<body id=\"top\" class=\"";
        // line 40
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">
  ";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 61
        echo "

    <div>


        ";
        // line 66
        $this->displayBlock('showcase', $context, $blocks);
        // line 67
        echo "
        ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "
        ";
        // line 74
        $this->displayBlock('footer', $context, $blocks);
        // line 119
        echo "    </div>

    ";
        // line 121
        $this->displayBlock('bottom', $context, $blocks);
        // line 134
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

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/nina.css"), "method");
        // line 17
        echo "
        ";
        // line 18
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 10))) {
            // line 19
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 20
            echo "        ";
        }
        // line 21
        echo "        ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 9))) {
            // line 22
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 23
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 24
            echo "        ";
        }
        // line 25
        echo "    ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/antimatter.js"), "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/slidebars.min.js"), "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.matchHeight-min.js"), "method");
        // line 34
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/match-height.js"), "method");
        // line 35
        echo "    ";
    }

    // line 41
    public function block_header($context, array $blocks = array())
    {
        // line 42
        echo "  <div class=\"top-bar\" >
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <a class=\"logo\" href=\"";
        // line 46
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\"><img src=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.svg");
        echo "\" alt=\"Nina's Wellness Logo\"></a>
          </div>
          <div class=\"col-md-9\">
            ";
        // line 49
        $this->displayBlock('header_extra', $context, $blocks);
        // line 50
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 51
            echo "            ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 51)->display($context);
            // line 52
            echo "            ";
        }
        // line 53
        echo "            ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 56
        echo "          </div>
        </div>
      </div>
    </div>
    ";
    }

    // line 49
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 53
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 54
        echo "            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 54)->display($context);
        // line 55
        echo "            ";
    }

    // line 66
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        // line 69
        echo "        <!-- <section id=\"body\" class=\"";
        echo ($context["class"] ?? null);
        echo "\"> -->
            ";
        // line 70
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "        <!-- </section> -->
        ";
    }

    // line 70
    public function block_content($context, array $blocks = array())
    {
    }

    // line 74
    public function block_footer($context, array $blocks = array())
    {
        // line 75
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
        // line 102
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/facebook-icon.svg");
        echo "\" width=\"50\" alt=\"\"></a></li>
                <li class=\"list-inline-item\"><a href=\"\"><img src=\"";
        // line 103
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/instagram-link-icon.svg");
        echo "\" width=\"50\" alt=\"\"></a></li>
                <li class=\"list-inline-item\"><a href=\"\"><img src=\"";
        // line 104
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

    // line 121
    public function block_bottom($context, array $blocks = array())
    {
        // line 122
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
        return array (  329 => 122,  326 => 121,  307 => 104,  303 => 103,  299 => 102,  270 => 75,  267 => 74,  262 => 70,  257 => 71,  255 => 70,  250 => 69,  247 => 68,  242 => 66,  238 => 55,  235 => 54,  232 => 53,  227 => 49,  219 => 56,  216 => 53,  213 => 52,  210 => 51,  207 => 50,  205 => 49,  197 => 46,  191 => 42,  188 => 41,  184 => 35,  181 => 34,  178 => 33,  175 => 32,  172 => 31,  169 => 30,  166 => 29,  163 => 28,  159 => 25,  156 => 24,  153 => 23,  150 => 22,  147 => 21,  144 => 20,  141 => 19,  139 => 18,  136 => 17,  133 => 16,  130 => 15,  122 => 36,  120 => 28,  114 => 26,  112 => 15,  105 => 11,  101 => 10,  98 => 9,  96 => 8,  88 => 7,  85 => 6,  82 => 5,  76 => 134,  74 => 121,  70 => 119,  68 => 74,  65 => 73,  63 => 68,  60 => 67,  58 => 66,  51 => 61,  49 => 41,  45 => 40,  42 => 39,  40 => 5,  35 => 3,  32 => 2,  30 => 1,);
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
        <!-- <section id=\"body\" class=\"{{ class }}\"> -->
            {% block content %}{% endblock %}
        <!-- </section> -->
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
