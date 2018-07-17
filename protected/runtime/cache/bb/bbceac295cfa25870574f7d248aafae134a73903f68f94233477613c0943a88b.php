<?php

/* @6e0afe2a1f93144e76aeb7cae580d80b/search.twig */
class __TwigTemplate_f81d33bcf59677b305d336287444371d0befe10cbb90d638c65ba26a469133bb extends Twig_Template
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
        $context["action"] = "/search";
        // line 4
        echo "
";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, ($context["_page"] ?? null), "lang", array()) && (twig_get_attribute($this->env, $this->source, ($context["_page"] ?? null), "lang", array()) != "ru"))) {
            // line 6
            echo "    ";
            $context["action"] = (("/" . twig_get_attribute($this->env, $this->source, ($context["_page"] ?? null), "lang", array())) . "/search");
        }
        // line 8
        echo "
<form action=\"";
        // line 9
        echo ($context["action"] ?? null);
        echo "\" class=\"search\" enctype=\"text/plain\">
    <input name=\"q\" class=\"search__input\" value=\"";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "q", array());
        echo "\" id=\"search-input\" aria-label=\"Поиск по сайту\" autofocus>

    <button type=\"submit\" id=\"search-button\" class=\"button\"";
        // line 12
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "q", array()))) {
            echo " disabled";
        }
        echo ">
        ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, ($context["_page"] ?? null), "lang", array()) != "ru")) {
            // line 14
            echo "            Найти
        ";
        } else {
            // line 16
            echo "            Search
        ";
        }
        // line 18
        echo "    </button>
</form>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "@6e0afe2a1f93144e76aeb7cae580d80b/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  63 => 16,  59 => 14,  57 => 13,  51 => 12,  46 => 10,  42 => 9,  39 => 8,  35 => 6,  33 => 5,  30 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}

{% set action = '/search' %}

{% if _page.lang and _page.lang != 'ru' %}
    {% set action = '/' ~ _page.lang ~ '/search' %}
{% endif %}

<form action=\"{{ action }}\" class=\"search\" enctype=\"text/plain\">
    <input name=\"q\" class=\"search__input\" value=\"{{ _get.q }}\" id=\"search-input\" aria-label=\"Поиск по сайту\" autofocus>

    <button type=\"submit\" id=\"search-button\" class=\"button\"{% if _get.q is empty %} disabled{% endif %}>
        {% if _page.lang != 'ru' %}
            Найти
        {% else %}
            Search
        {% endif %}
    </button>
</form>

{#
<div class=\"search-result\">

    {% if search_error == 1 %}
        <div class=\"search-result__text\">Строка поиска должа содержать более 3-х символов</div>
    {% elseif search_error == 2 %}
        <div class=\"search-result__text\">Вы ввели недопустимые символы для поиска по сайту</div>
    {% elseif _get.q is not empty %}
        <div class=\"search-result__text\">Вы искали: <b>{{ search_word }}</b><br>Найдено: <b>{{ search_result_count ~ ' ' ~ declofnum(search_result_count, [ 'страница', 'страницы', 'страниц' ]) }}</b></div>

        {% if search_result %}

            <div class=\"search-result__title\">Результаты:</div>

            {% set page = (_get.page ? _get.page : 0) %}

            <ul class=\"search-result__list\">
                {% for item in search_result %}

                    {% set index = loop.index + page * 10 %}

                    <li class=\"search-result__item clearfix\">
                        <div class=\"search-result__item__index\">{{ index }}.</div>

                        <div class=\"search-result__item__content\">
                            <a href=\"{{ item.link }}?highlight={{ _get.q }}\" class=\"search-result__item__title\">
                                {% if item.page_title %}
                                    {{ item.page_title }}
                                {% else %}
                                    Нет заголовка
                                {% endif %}
                            </a>

                            <div class=\"search-result__item__text\">{{ item.content_index }}</div>
                            <div class=\"search-result__item__link\">{{ item.link }}</div>
                        </div>
                    </li>

                {% endfor %}
                </ul>

                {% if pager %}
                    {% include 'components/pager.twig' with { 'pager' : pager } %}
                {% endif %}

        {% endif %}
    {% endif %}
</div>

<script>
    var input = document.getElementById('search-input');
    var button = document.getElementById('search-button');

    input.oninput = input.oncut = input.onpaste = function() {
        var value = input.value.replace(/ /g, '');

        if (value !== '') {
            button.classList.remove('disabled');
            button.removeAttribute('disabled');
        } else {
            button.classList.add('disabled');
            button.setAttribute('disabled', '');
        }
    };
</script>
#}
{% endspaceless %}", "@6e0afe2a1f93144e76aeb7cae580d80b/search.twig", "/Users/lnked/web/celebro.cms.dev/protected/themes/base/twig/core/search.twig");
    }
}
