<?php

/* base.twig */
class __TwigTemplate_1e6336b76745c874894b7c68fa71d2a725d3cc51654784ab1381b5aa064991cf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/base.twig", "base.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        ob_start();
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "\t\t";
        $this->loadTemplate("components/header.twig", "base.twig", 6)->display(array());
        // line 7
        echo "\t";
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        echo "\t\t";
        $this->loadTemplate("components/sidebar.twig", "base.twig", 10)->display(array_merge($context, ($context["_sitemenu"] ?? null)));
        // line 11
        echo "\t";
    }

    // line 13
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 14
        echo "\t\t";
        $this->loadTemplate("components/breadcrumbs.twig", "base.twig", 14)->display(array_merge($context, ($context["_breadcrumbs"] ?? null)));
        // line 15
        echo "\t";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "
\t    ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["_page"] ?? null), "name", array())) {
            // line 20
            echo "\t        <h2>";
            echo twig_get_attribute($this->env, $this->source, ($context["_page"] ?? null), "name", array());
            echo "</h2>
\t    ";
        }
        // line 22
        echo "
\t    ";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["_page"] ?? null), "content", array());
        echo "

\t";
    }

    // line 27
    public function block_footer($context, array $blocks = array())
    {
        // line 28
        echo "\t    ";
        $this->loadTemplate("components/footer.twig", "base.twig", 28)->display(array());
        // line 29
        echo "\t";
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  97 => 28,  94 => 27,  87 => 23,  84 => 22,  78 => 20,  76 => 19,  73 => 18,  70 => 17,  66 => 15,  63 => 14,  60 => 13,  56 => 11,  53 => 10,  50 => 9,  46 => 7,  43 => 6,  40 => 5,  36 => 1,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts/base.twig\" %}

{% spaceless %}

\t{% block header %}
\t\t{% include 'components/header.twig' only %}
\t{% endblock %}

\t{% block sidebar %}
\t\t{% include 'components/sidebar.twig' with _sitemenu %}
\t{% endblock %}

\t{% block breadcrumbs %}
\t\t{% include 'components/breadcrumbs.twig' with _breadcrumbs %}
\t{% endblock %}

\t{% block content %}

\t    {% if _page.name %}
\t        <h2>{{ _page.name }}</h2>
\t    {% endif %}

\t    {{ _page.content|raw }}

\t{% endblock %}

\t{% block footer %}
\t    {% include 'components/footer.twig' only %}
\t{% endblock %}

{% endspaceless %}
", "base.twig", "/Users/lnked/web/celebro.cms.dev/protected/themes/base/twig/base.twig");
    }
}
