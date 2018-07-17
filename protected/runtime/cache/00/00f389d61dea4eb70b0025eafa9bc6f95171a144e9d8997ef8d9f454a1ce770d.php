<?php

/* components/header.twig */
class __TwigTemplate_2f70ffbb7656674cf4fb8264cb2bb2c6b0ae4f27254ed3a968b8b7a1a4cbb434 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        echo "<button type=\"button\" class=\"sandwich j-sandwich-menu\" aria-label=\"Меню\">
\t<span class=\"sandwich__layer\"></span>
</button>

<header class=\"layout-header\" itemscope=\"itemscope\" itemtype=\"http://schema.org/WPHeader\">
\t<div class=\"layout-header__wrapper\">

\t\t<a href=\"./index.html\" class=\"layout-header__logo logo\" rel=\"home\" itemprop=\"url\" accesskey=\"1\" data-instant>
\t\t\t<span itemprop=\"name\"></span>
\t\t</a>

\t</div>
</header>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "components/header.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}
<button type=\"button\" class=\"sandwich j-sandwich-menu\" aria-label=\"Меню\">
\t<span class=\"sandwich__layer\"></span>
</button>

<header class=\"layout-header\" itemscope=\"itemscope\" itemtype=\"http://schema.org/WPHeader\">
\t<div class=\"layout-header__wrapper\">

\t\t<a href=\"./index.html\" class=\"layout-header__logo logo\" rel=\"home\" itemprop=\"url\" accesskey=\"1\" data-instant>
\t\t\t<span itemprop=\"name\"></span>
\t\t</a>

\t</div>
</header>
{% endspaceless %}
", "components/header.twig", "/Users/lnked/web/celebro.cms.dev/protected/themes/base/twig/components/header.twig");
    }
}
