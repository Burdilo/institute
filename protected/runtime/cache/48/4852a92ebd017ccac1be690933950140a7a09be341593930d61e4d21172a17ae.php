<?php

/* components/sidebar.twig */
class __TwigTemplate_4a54820122bf88812d6bb8c77484677a34d6b7d734df9f7b37b96b7660446b62 extends Twig_Template
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
        echo "<div class=\"sidebar\" itemscope=\"itemscope\" itemtype=\"http://schema.org/WPSideBar\">
    <a id=\"navigation-sandwich\" class=\"navigation-sandwich\" href=\"#\"></a>

    <h1 class=\"sidebar__logo\" itemprop=\"name\"><a href=\"/\" rel=\"home\" itemprop=\"url\" accesskey=\"1\" data-title=\"CELEBRO.CMS\">CELEBRO.CMS</a></h1>

    <a href=\"/cart\" class=\"cart-holder js-cart-holder\">
        <span class=\"cart-holder__count watch-cart-count\">";
        // line 8
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_session"] ?? null), "cart", array()), "count", array());
        echo "</span>
        <span class=\"cart-holder__total\">на <span class=\"cart-holder__total__value watch-cart-money\">";
        // line 9
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_session"] ?? null), "cart", array()), "amount", array());
        echo "</span> р.</span>
        <span class=\"cart-holder__empty\">корзина пуста</span>
    </a>";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["_sitemenu"] ?? null), "main", array())) {
            // line 14
            echo "<nav class=\"navigation\" tabindex=\"-1\" aria-label=\"Основное меню\">
        <ul class=\"navigation__list\">";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["_sitemenu"] ?? null), "main", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 17
                echo "<li class=\"navigation__item\" itemscope=\"itemscope\" itemtype=\"http://schema.org/SiteNavigationElement\"";
                if (twig_get_attribute($this->env, $this->source, $context["page"], "current", array())) {
                    echo " aria-current=\"page\"";
                }
                echo ">

                <a href=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["page"], "link", array());
                echo "\" class=\"navigation__item__link";
                if (twig_get_attribute($this->env, $this->source, $context["page"], "current", array())) {
                    echo " is-current";
                }
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["page"], "target", array())) {
                    echo " target=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["page"], "target", array());
                    echo "\"";
                }
                echo " title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["page"], "name", array());
                echo "\" itemprop=\"url\" accesskey=\"";
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", array());
                echo "\">
                    ";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["page"], "current", array())) {
                    // line 21
                    echo "                        <span class=\"visually-hidden\">Текущий пункт:</span>
                    ";
                }
                // line 23
                echo "                    <span itemprop=\"name\">";
                echo twig_get_attribute($this->env, $this->source, $context["page"], "name", array());
                echo "</span>
                </a>";
                // line 26
                if (twig_get_attribute($this->env, $this->source, $context["page"], "tree", array())) {
                    // line 27
                    echo "<ul class=\"navigation__submenu\" aria-haspopup=\"true\">";
                    // line 28
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["page"], "tree", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                        // line 29
                        echo "<li class=\"navigation__item\" itemscope=\"itemscope\" itemtype=\"http://schema.org/SiteNavigationElement\"";
                        if (twig_get_attribute($this->env, $this->source, $context["submenu"], "current", array())) {
                            echo " aria-current=\"page\"";
                        }
                        echo ">
                            <a href=\"";
                        // line 30
                        echo twig_get_attribute($this->env, $this->source, $context["submenu"], "link", array());
                        echo "\" class=\"navigation__item__link ";
                        if (twig_get_attribute($this->env, $this->source, $context["submenu"], "current", array())) {
                            echo " is-current";
                        }
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["submenu"], "name", array());
                        echo "\" itemprop=\"url\">
                                <span itemprop=\"name\">";
                        // line 31
                        echo twig_get_attribute($this->env, $this->source, $context["submenu"], "name", array());
                        echo "</span>
                            </a>";
                        // line 34
                        if (twig_get_attribute($this->env, $this->source, $context["submenu"], "tree", array())) {
                            // line 35
                            echo "<ul aria-haspopup=\"true\">
                                ";
                            // line 36
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["submenu"], "tree", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["last"]) {
                                // line 37
                                echo "                                    <li class=\"navigation__item\" itemscope=\"itemscope\" itemtype=\"http://schema.org/SiteNavigationElement\"";
                                if (twig_get_attribute($this->env, $this->source, $context["last"], "current", array())) {
                                    echo " aria-current=\"page\"";
                                }
                                echo ">
                                        <a href=\"";
                                // line 38
                                echo twig_get_attribute($this->env, $this->source, $context["last"], "link", array());
                                echo "\" class=\"navigation__item__link ";
                                if (twig_get_attribute($this->env, $this->source, $context["last"], "current", array())) {
                                    echo " is-current";
                                }
                                echo "\" title=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["last"], "name", array());
                                echo "\" itemprop=\"url\">
                                            <span itemprop=\"name\">";
                                // line 39
                                echo twig_get_attribute($this->env, $this->source, $context["last"], "name", array());
                                echo "</span>
                                        </a>
                                    </li>";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['last'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 43
                            echo "</ul>";
                        }
                        // line 45
                        echo "</li>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    echo "</ul>";
                }
                // line 49
                echo "</li>";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "</ul>
    </nav>";
        }
        // line 55
        echo "</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "components/sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 55,  191 => 51,  177 => 49,  174 => 47,  168 => 45,  165 => 43,  156 => 39,  146 => 38,  139 => 37,  135 => 36,  132 => 35,  130 => 34,  126 => 31,  116 => 30,  109 => 29,  105 => 28,  103 => 27,  101 => 26,  96 => 23,  92 => 21,  90 => 20,  72 => 19,  64 => 17,  47 => 16,  44 => 14,  42 => 13,  37 => 9,  33 => 8,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}
<div class=\"sidebar\" itemscope=\"itemscope\" itemtype=\"http://schema.org/WPSideBar\">
    <a id=\"navigation-sandwich\" class=\"navigation-sandwich\" href=\"#\"></a>

    <h1 class=\"sidebar__logo\" itemprop=\"name\"><a href=\"/\" rel=\"home\" itemprop=\"url\" accesskey=\"1\" data-title=\"CELEBRO.CMS\">CELEBRO.CMS</a></h1>

    <a href=\"/cart\" class=\"cart-holder js-cart-holder\">
        <span class=\"cart-holder__count watch-cart-count\">{{ _session.cart.count }}</span>
        <span class=\"cart-holder__total\">на <span class=\"cart-holder__total__value watch-cart-money\">{{ _session.cart.amount }}</span> р.</span>
        <span class=\"cart-holder__empty\">корзина пуста</span>
    </a>

    {%- if _sitemenu.main -%}
    <nav class=\"navigation\" tabindex=\"-1\" aria-label=\"Основное меню\">
        <ul class=\"navigation__list\">
        {%- for page in _sitemenu.main -%}
            <li class=\"navigation__item\" itemscope=\"itemscope\" itemtype=\"http://schema.org/SiteNavigationElement\"{% if page.current %} aria-current=\"page\"{% endif %}>

                <a href=\"{{ page.link }}\" class=\"navigation__item__link{% if page.current %} is-current{% endif %}\"{% if page.target %} target=\"{{ page.target }}\"{% endif %} title=\"{{ page.name }}\" itemprop=\"url\" accesskey=\"{{ loop.index }}\">
                    {% if page.current %}
                        <span class=\"visually-hidden\">Текущий пункт:</span>
                    {% endif %}
                    <span itemprop=\"name\">{{ page.name }}</span>
                </a>

                {%- if page.tree -%}
                    <ul class=\"navigation__submenu\" aria-haspopup=\"true\">
                    {%- for submenu in page.tree -%}
                        <li class=\"navigation__item\" itemscope=\"itemscope\" itemtype=\"http://schema.org/SiteNavigationElement\"{% if submenu.current %} aria-current=\"page\"{% endif %}>
                            <a href=\"{{ submenu.link }}\" class=\"navigation__item__link {% if submenu.current %} is-current{% endif %}\" title=\"{{ submenu.name }}\" itemprop=\"url\">
                                <span itemprop=\"name\">{{ submenu.name }}</span>
                            </a>

                            {%- if submenu.tree -%}
                                <ul aria-haspopup=\"true\">
                                {% for last in submenu.tree %}
                                    <li class=\"navigation__item\" itemscope=\"itemscope\" itemtype=\"http://schema.org/SiteNavigationElement\"{% if last.current %} aria-current=\"page\"{% endif %}>
                                        <a href=\"{{ last.link }}\" class=\"navigation__item__link {% if last.current %} is-current{% endif %}\" title=\"{{ last.name }}\" itemprop=\"url\">
                                            <span itemprop=\"name\">{{ last.name }}</span>
                                        </a>
                                    </li>
                                {%- endfor -%}
                                </ul>
                            {%- endif -%}
                        </li>
                    {%- endfor -%}
                </ul>
                {%- endif -%}
            </li>
        {%- endfor -%}
        </ul>
    </nav>
    {%- endif -%}

</div>
{% endspaceless %}", "components/sidebar.twig", "/Users/lnked/web/celebro.cms.dev/protected/themes/base/twig/components/sidebar.twig");
    }
}
