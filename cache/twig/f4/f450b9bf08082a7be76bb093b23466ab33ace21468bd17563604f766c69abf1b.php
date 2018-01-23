<?php

/* blog.html.twig */
class __TwigTemplate_566c67c9d2ef46573d4d4ad6f9153c73b06883c1f2d7da1b93ce024056ad7d76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 5
        $context["dateformat"] = (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "page", array()), "dateformat", array())) ? ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "page", array()), "dateformat", array())) : ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "dateformat", array()), "short", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "dateformat", array()), "short", array())) : ("F d, Y"))));
        // line 6
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, $this->getAttribute(($context["page"] ?? null), "header", array()));
        echo "
<section class=\"margin__bottom--large\" id=\"blog\" style=\"margin-top: 150px;\">
\t<div class=\"container\">
\t\t<div class=\"row margin__bottom--large\">
\t\t\t<div class=\"col-md-2\">
\t\t\t\t<img class=\"margin__bottom--medium\" src=\"";
        // line 11
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/blog-icon.svg");
        echo "\" alt=\"\">
\t\t\t</div>
\t\t\t<div class=\"col-md-9\">
\t\t\t\t<h1>My Blog</h1>
\t\t\t\t<p class=\"body-text--intro\">
\t\t\t\t\t";
        // line 16
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t
\t\t<div class=\"row\">
\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 23
            echo "\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"blog-home\">
\t\t\t\t\t<div class=\"blog-home__image match-height\" style=\"background-image: url('";
            // line 25
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image", array());
            echo "');\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"blog-home__content match-height\">
\t\t\t\t\t\t<p class=\"blog-home__date\">";
            // line 28
            echo twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), ($context["dateformat"] ?? null));
            echo "</p>
\t\t\t\t\t\t<div class=\"blog-home__content-inner\">
\t\t\t\t\t\t\t<a href=\"";
            // line 30
            echo $this->getAttribute($context["post"], "url", array());
            echo "\"><h4>";
            echo $this->getAttribute($context["post"], "title", array());
            echo "</h4></a>
\t\t\t\t\t\t\t<p>";
            // line 31
            echo $this->getAttribute($context["post"], "summary", array());
            echo "</p>
\t\t\t\t\t\t\t<a href=\"";
            // line 32
            echo $this->getAttribute($context["post"], "url", array());
            echo "\" class=\"btn btn-default\">Read more</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t</div>
\t</div>
</section>
\t\t\t
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 38,  89 => 32,  85 => 31,  79 => 30,  74 => 28,  68 => 25,  64 => 23,  60 => 22,  51 => 16,  43 => 11,  35 => 6,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
\t
{% block content %}
{% set collection = page.collection() %}
{% set dateformat = admin.page.dateformat ?: config.system.pages.dateformat.short ?: \"F d, Y\" %}
{{dump(page.header)}}
<section class=\"margin__bottom--large\" id=\"blog\" style=\"margin-top: 150px;\">
\t<div class=\"container\">
\t\t<div class=\"row margin__bottom--large\">
\t\t\t<div class=\"col-md-2\">
\t\t\t\t<img class=\"margin__bottom--medium\" src=\"{{ url('theme://images/blog-icon.svg') }}\" alt=\"\">
\t\t\t</div>
\t\t\t<div class=\"col-md-9\">
\t\t\t\t<h1>My Blog</h1>
\t\t\t\t<p class=\"body-text--intro\">
\t\t\t\t\t{{ page.content }}
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t
\t\t<div class=\"row\">
\t\t{% for post in collection %}
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"blog-home\">
\t\t\t\t\t<div class=\"blog-home__image match-height\" style=\"background-image: url('{{ page.header.header_image }}');\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"blog-home__content match-height\">
\t\t\t\t\t\t<p class=\"blog-home__date\">{{ post.date|date(dateformat) }}</p>
\t\t\t\t\t\t<div class=\"blog-home__content-inner\">
\t\t\t\t\t\t\t<a href=\"{{ post.url }}\"><h4>{{ post.title }}</h4></a>
\t\t\t\t\t\t\t<p>{{ post.summary }}</p>
\t\t\t\t\t\t\t<a href=\"{{ post.url }}\" class=\"btn btn-default\">Read more</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t\t</div>
\t</div>
</section>
\t\t\t
{% endblock %}



", "blog.html.twig", "/Users/steveforbes/Sites/ninas-wellness/grav-admin/user/themes/nina/templates/blog.html.twig");
    }
}
