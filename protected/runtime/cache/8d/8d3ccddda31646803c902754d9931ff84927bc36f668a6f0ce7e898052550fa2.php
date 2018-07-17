<?php

/* components/breadcrumbs.twig */
class __TwigTemplate_5f9610a482ff63c18b3a76b648af09f9ef0064ef733428141d8ebce32aa45bba extends Twig_Template
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
        echo "
";
        // line 3
        if (((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["uri"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[1] ?? null) : null) && ($context["_breadcrumbs"] ?? null))) {
            // line 4
            echo "
<nav class=\"breadcrumbs clearfix\">

    <ol class=\"breadcrumbs__list\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">

    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["_breadcrumbs"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "        <li class=\"breadcrumbs__item\" rel=\"nofollow\" itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
            ";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    // line 12
                    echo "
                <span class=\"breadcrumbs__item__link current\" itemprop=\"item\">
                    <span itemprop=\"name\">";
                    // line 14
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "name", array());
                    echo "</span>
                </span>

            ";
                } else {
                    // line 18
                    echo "
                <a href=\"";
                    // line 19
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "link", array());
                    echo "\" class=\"breadcrumbs__item__link\" itemprop=\"url item\">
                    <span itemprop=\"name\">";
                    // line 20
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "name", array());
                    echo "</span>
                </a>

            ";
                }
                // line 24
                echo "            <meta itemprop=\"position\" content=\"";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", array());
                echo "\">
        </li>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
    </ol>

</nav>

";
        }
        // line 33
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "components/breadcrumbs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 33,  102 => 27,  84 => 24,  77 => 20,  73 => 19,  70 => 18,  63 => 14,  59 => 12,  57 => 11,  54 => 10,  37 => 9,  30 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}

{% if uri[1] and _breadcrumbs %}

<nav class=\"breadcrumbs clearfix\">

    <ol class=\"breadcrumbs__list\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">

    {% for item in _breadcrumbs %}
        <li class=\"breadcrumbs__item\" rel=\"nofollow\" itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
            {% if loop.last %}

                <span class=\"breadcrumbs__item__link current\" itemprop=\"item\">
                    <span itemprop=\"name\">{{ item.name }}</span>
                </span>

            {% else %}

                <a href=\"{{ item.link }}\" class=\"breadcrumbs__item__link\" itemprop=\"url item\">
                    <span itemprop=\"name\">{{ item.name }}</span>
                </a>

            {% endif %}
            <meta itemprop=\"position\" content=\"{{ loop.index }}\">
        </li>
    {% endfor %}

    </ol>

</nav>

{% endif %}

{% endspaceless %}", "components/breadcrumbs.twig", "/Users/lnked/web/celebro.cms.dev/protected/themes/base/twig/components/breadcrumbs.twig");
    }
}
