<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_c8cf4228ef5edb0aab3388a58e9e49fe0ea0c0044abbf1c7da4109c2ca934423 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"blog-post-banner\">
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-3 offset-md-2\">
        <a href=\"/blog\" class=\"btn btn-reverse btn-block margin__top--small\">Back to blog</a>
        </div>
        <div class=\"col-md-2 text-center\">
        <img src=\"";
        // line 8
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/blog-icon-white.svg");
        echo "\" alt=\"\">
        </div>
        <div class=\"col-md-3\">
        <a href=\"/\" class=\"btn btn-reverse btn-block margin__top--small\">Homepage</a>
        </div>
    </div>
    </div>
</div>

";
        // line 17
        $context["header_image"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image", array()), true);
        // line 18
        $context["header_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_file", array());
        // line 19
        echo "
<div class=\"blog-content-wrapper container margin__top--large margin__bottom--large text-center\">
    <div class=\"row\">
        <div class=\"col-md-10 offset-md-1\">
            <time class=\"dt-published\" datetime=\"";
        // line 23
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "c");
        echo "\">
                <span>";
        // line 24
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d");
        echo "</span>
                <em>";
        // line 25
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "M");
        echo "</em>
            </time>

            <h1>";
        // line 28
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>            

        ";
        // line 30
        if (($context["header_image"] ?? null)) {
            // line 31
            echo "            ";
            if (($context["header_image_file"] ?? null)) {
                // line 32
                echo "                ";
                $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), ($context["header_image_file"] ?? null), array(), "array");
                // line 33
                echo "            ";
            } else {
                // line 34
                echo "                ";
                $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
                // line 35
                echo "            ";
            }
            // line 36
            echo "            ";
            echo $this->getAttribute(($context["header_image_media"] ?? null), "html", array());
            echo "
        ";
        }
        // line 38
        echo "            
            ";
        // line 39
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 39,  92 => 38,  86 => 36,  83 => 35,  80 => 34,  77 => 33,  74 => 32,  71 => 31,  69 => 30,  64 => 28,  58 => 25,  54 => 24,  50 => 23,  44 => 19,  42 => 18,  40 => 17,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"blog-post-banner\">
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-3 offset-md-2\">
        <a href=\"/blog\" class=\"btn btn-reverse btn-block margin__top--small\">Back to blog</a>
        </div>
        <div class=\"col-md-2 text-center\">
        <img src=\"{{ url('theme://images/blog-icon-white.svg') }}\" alt=\"\">
        </div>
        <div class=\"col-md-3\">
        <a href=\"/\" class=\"btn btn-reverse btn-block margin__top--small\">Homepage</a>
        </div>
    </div>
    </div>
</div>

{% set header_image = page.header.header_image|defined(true) %}
{% set header_image_file = page.header.header_image_file %}

<div class=\"blog-content-wrapper container margin__top--large margin__bottom--large text-center\">
    <div class=\"row\">
        <div class=\"col-md-10 offset-md-1\">
            <time class=\"dt-published\" datetime=\"{{ page.date|date(\"c\") }}\">
                <span>{{ page.date|date(\"d\") }}</span>
                <em>{{ page.date|date(\"M\") }}</em>
            </time>

            <h1>{{ page.title }}</h1>            

        {% if header_image %}
            {% if header_image_file %}
                {% set header_image_media = page.media.images[header_image_file] %}
            {% else %}
                {% set header_image_media = page.media.images|first %}
            {% endif %}
            {{ header_image_media.html }}
        {% endif %}
            
            {{ page.content }}
        </div>
    </div>
</div>
", "partials/blog_item.html.twig", "/Users/steveforbes/Sites/ninas-wellness/grav-admin/user/themes/nina/templates/partials/blog_item.html.twig");
    }
}
