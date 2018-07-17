<?php

/* layouts/base.twig */
class __TwigTemplate_6a7ce92c06e1c544306a6a68a4c8ea68b7e7536c0ff10d2c80825114eeae7d02 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!-- copyright (c) CELEBRO Studio | https://celebro.ru -->
";
        // line 3
        ob_start();
        // line 4
        echo "<html class=\"no-js\" itemscope=\"itemscope\" itemtype=\"http://schema.org/";
        if ( !(($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["uri"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[1] ?? null) : null)) {
            echo "WebPage";
        } else {
            echo "ItemPage";
        }
        echo "\" lang=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["_page"] ?? null), "lang", array());
        echo "\">
<head>
    <meta charset=\"UTF-8\">
    <meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\">
    <meta content=\"width=device-width,initial-scale=1\" name=\"viewport\">

    ";
        // line 10
        echo $this->extensions['AssetExtension']->assetCSS($context, array(0 => "/static/css/main.min.css"));
        // line 14
        echo "

    ";
        // line 53
        echo "
    <base href=\"";
        // line 54
        echo twig_get_attribute($this->env, $this->source, ($context["_page"] ?? null), "pathname", array());
        echo "\"/>

    <title itemprop=\"name\">";
        // line 56
        echo twig_get_attribute($this->env, $this->source, ($context["_meta"] ?? null), "title", array());
        echo "</title>

    ";
        // line 58
        if (($context["_csrf_token"] ?? null)) {
            // line 59
            echo "    <meta content=\"";
            echo ($context["_csrf_param"] ?? null);
            echo "\" name=\"csrf-param\">
    <meta content=\"";
            // line 60
            echo ($context["_csrf_token"] ?? null);
            echo "\" name=\"csrf-token\">
    ";
        }
        // line 62
        echo "
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"/favicon/apple-touch-icon.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/favicon/favicon-32x32.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/favicon/favicon-16x16.png\">
    <link rel=\"manifest\" href=\"/favicon/manifest.json\">
    <link rel=\"mask-icon\" href=\"/favicon/safari-pinned-tab.svg\" color=\"#004225\">
    <link rel=\"shortcut icon\" href=\"/favicon/favicon.ico\">
    <meta name=\"msapplication-config\" content=\"/favicon/browserconfig.xml\">
    <meta name=\"theme-color\" content=\"#004225\">

    <meta name=\"referrer\" content=\"unsafe-url\">

    <meta name=\"title\" content=\"";
        // line 74
        echo twig_get_attribute($this->env, $this->source, ($context["_meta"] ?? null), "title", array());
        echo "\">
    <meta name=\"robots\" content=\"";
        // line 75
        echo twig_get_attribute($this->env, $this->source, ($context["_meta"] ?? null), "robots", array());
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 76
        echo twig_get_attribute($this->env, $this->source, ($context["_meta"] ?? null), "keywords", array());
        echo "\">
    <meta itemprop=\"description\" name=\"description\" content=\"";
        // line 77
        echo twig_get_attribute($this->env, $this->source, ($context["_meta"] ?? null), "description", array());
        echo "\">

    <meta name=\"cms\" content=\"celebro.cms\">
    <meta name=\"author\" content=\"https://celebro.ru/\">

    <meta itemprop=\"inLanguage\" content=\"";
        // line 82
        echo twig_get_attribute($this->env, $this->source, ($context["_page"] ?? null), "lang", array());
        echo "\">

    <meta name=\"SKYPE_TOOLBAR\" content=\"SKYPE_TOOLBAR_PARSER_COMPATIBLE\">
    <meta name=\"format-detection\" content=\"telephone=no\">

    <meta content=\"true\" name=\"HandheldFriendly\">
    <meta content=\"320\" name=\"MobileOptimized\">

    ";
        // line 91
        echo "
    ";
        // line 104
        echo "
    ";
        // line 106
        echo "    ";
        // line 107
        echo "    ";
        // line 108
        echo "
    <!--[if IEMobile]>
        <meta http-equiv=\"cleartype\" content=\"on\">
        <meta http-equiv=\"imagetoolbar\" content=\"false\">
    <![endif]-->
</head>

<body class=\"page-";
        // line 115
        echo twig_get_attribute($this->env, $this->source, ($context["_page"] ?? null), "system", array());
        echo "\">

\t";
        // line 117
        if (        $this->hasBlock("header", $context, $blocks)) {
            // line 118
            echo "\t    ";
            $this->displayBlock('header', $context, $blocks);
            // line 119
            echo "\t";
        }
        // line 120
        echo "
\t";
        // line 121
        if (        $this->hasBlock("sidebar", $context, $blocks)) {
            // line 122
            echo "        ";
            $this->displayBlock('sidebar', $context, $blocks);
            // line 123
            echo "\t";
        }
        // line 124
        echo "
\t<div class=\"layout-wrapper\">

\t    <div class=\"layout-wrapper__container\">

\t\t\t";
        // line 129
        if (        $this->hasBlock("breadcrumbs", $context, $blocks)) {
            // line 130
            echo "\t\t\t    ";
            $this->displayBlock('breadcrumbs', $context, $blocks);
            // line 131
            echo "\t\t\t";
        }
        // line 132
        echo "
\t\t\t";
        // line 133
        if (        $this->hasBlock("content", $context, $blocks)) {
            // line 134
            echo "\t\t\t<main id=\"content\" class=\"content\" itemprop=\"mainContentOfPage\">

                ";
            // line 136
            echo $this->extensions['UrlExtension']->Create("admin:index", "item", 100);
            echo "

                ";
            // line 168
            echo "
\t\t\t    ";
            // line 169
            $this->displayBlock('content', $context, $blocks);
            // line 170
            echo "
\t        </main>
\t\t\t";
        }
        // line 173
        echo "
\t    </div>

\t\t";
        // line 176
        if (        $this->hasBlock("footer", $context, $blocks)) {
            // line 177
            echo "\t\t    ";
            $this->displayBlock('footer', $context, $blocks);
            // line 178
            echo "\t\t";
        }
        // line 179
        echo "\t</div>

    ";
        // line 192
        echo "
    ";
        // line 205
        echo "
</body>
</html>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 118
    public function block_header($context, array $blocks = array())
    {
    }

    // line 122
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 130
    public function block_breadcrumbs($context, array $blocks = array())
    {
    }

    // line 169
    public function block_content($context, array $blocks = array())
    {
    }

    // line 177
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layouts/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 177,  251 => 169,  246 => 130,  241 => 122,  236 => 118,  228 => 205,  225 => 192,  221 => 179,  218 => 178,  215 => 177,  213 => 176,  208 => 173,  203 => 170,  201 => 169,  198 => 168,  193 => 136,  189 => 134,  187 => 133,  184 => 132,  181 => 131,  178 => 130,  176 => 129,  169 => 124,  166 => 123,  163 => 122,  161 => 121,  158 => 120,  155 => 119,  152 => 118,  150 => 117,  145 => 115,  136 => 108,  134 => 107,  132 => 106,  129 => 104,  126 => 91,  115 => 82,  107 => 77,  103 => 76,  99 => 75,  95 => 74,  81 => 62,  76 => 60,  71 => 59,  69 => 58,  64 => 56,  59 => 54,  56 => 53,  52 => 14,  50 => 10,  34 => 4,  32 => 3,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!-- copyright (c) CELEBRO Studio | https://celebro.ru -->
{% spaceless %}
<html class=\"no-js\" itemscope=\"itemscope\" itemtype=\"http://schema.org/{% if not uri[1] %}WebPage{% else %}ItemPage{% endif %}\" lang=\"{{ _page.lang }}\">
<head>
    <meta charset=\"UTF-8\">
    <meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\">
    <meta content=\"width=device-width,initial-scale=1\" name=\"viewport\">

    {{
        assetCSS([
            '/static/css/main.min.css'
        ])
    }}

    {#
    {{ compress({
        media : 'all',
        source : [
            { 'file' : '/css/vendors.min.css' },
            { 'file' : '/css/main.min.css' }
        ]
    }) }}
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link rel=\"preconnect\" href=\"https://www.youtube.com\">
    <link rel=\"preconnect\" href=\"https://i.ytimg.com\">
    <link rel=\"preconnect\" href=\"https://i9.ytimg.com\">
    <link rel=\"preconnect\" href=\"https://s.ytimg.com\">

    {{ compress({
        media : 'all',
        source : [
            { 'file' : '/css/vendors.min.css' },
            { 'file' : '/css/main.min.css' }
        ]
    }) }}

    {{
        asset.js([
            '/css/vendors.min.js',
            '/css/libs.min.js',
            '/css/app.min.js'
        ], async, defer)
    }}

    Asset::getInstance()->addCss(\"/css/slick.css\");
    Asset::getInstance()->addCss(\"/css/stylesheet.css\");
    Asset::getInstance()->addCss(\"/css/coach_animate.css\");
    Asset::getInstance()->addCss(\"/css/jquery.fancybox.css\");
    Asset::getInstance()->addCss(\"/css/default_main.css\");
    Asset::getInstance()->addCss(\"/css/banner-shar.css\");
    #}

    <base href=\"{{ _page.pathname }}\"/>

    <title itemprop=\"name\">{{ _meta.title }}</title>

    {% if _csrf_token %}
    <meta content=\"{{ _csrf_param }}\" name=\"csrf-param\">
    <meta content=\"{{ _csrf_token }}\" name=\"csrf-token\">
    {% endif %}

    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"/favicon/apple-touch-icon.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/favicon/favicon-32x32.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/favicon/favicon-16x16.png\">
    <link rel=\"manifest\" href=\"/favicon/manifest.json\">
    <link rel=\"mask-icon\" href=\"/favicon/safari-pinned-tab.svg\" color=\"#004225\">
    <link rel=\"shortcut icon\" href=\"/favicon/favicon.ico\">
    <meta name=\"msapplication-config\" content=\"/favicon/browserconfig.xml\">
    <meta name=\"theme-color\" content=\"#004225\">

    <meta name=\"referrer\" content=\"unsafe-url\">

    <meta name=\"title\" content=\"{{ _meta.title }}\">
    <meta name=\"robots\" content=\"{{ _meta.robots }}\">
    <meta name=\"keywords\" content=\"{{ _meta.keywords }}\">
    <meta itemprop=\"description\" name=\"description\" content=\"{{ _meta.description }}\">

    <meta name=\"cms\" content=\"celebro.cms\">
    <meta name=\"author\" content=\"https://celebro.ru/\">

    <meta itemprop=\"inLanguage\" content=\"{{ _page.lang }}\">

    <meta name=\"SKYPE_TOOLBAR\" content=\"SKYPE_TOOLBAR_PARSER_COMPATIBLE\">
    <meta name=\"format-detection\" content=\"telephone=no\">

    <meta content=\"true\" name=\"HandheldFriendly\">
    <meta content=\"320\" name=\"MobileOptimized\">

    {# <meta name=\"application-name\" content=\"{{ constant('COMPANY_NAME') }}\"> #}

    {#
    <meta property=\"og:site_name\" content=\"{{ constant('COMPANY_NAME') }}\">
    <meta property=\"og:type\" content=\"article\">
    <meta property=\"og:title\" content=\"{{ _og.title }}\">
    <meta property=\"og:description\" content=\"{{ _og.description }}\">
    <meta property=\"og:url\" content=\"{{ _og.url }}\">

    <meta name=\"twitter:site\" content=\"@celebro_web\">
    <meta name=\"twitter:card\" content=\"summary\">
    <meta name=\"twitter:title\" content=\"{{ _meta.title }}\">
    <meta name=\"twitter:description\" content=\"{{ _meta.description }}\">
    #}

    {# <link rel=\"home\" href=\"/\"> #}
    {# <link rel=\"search\" href=\"/search\" title=\"{{ constant('COMPANY_NAME') }}\" type=\"application/opensearchdescription+xml\"> #}
    {# <link rel=\"canonical\" href=\"{{ _page.canonical }}\"> #}

    <!--[if IEMobile]>
        <meta http-equiv=\"cleartype\" content=\"on\">
        <meta http-equiv=\"imagetoolbar\" content=\"false\">
    <![endif]-->
</head>

<body class=\"page-{{ _page.system }}\">

\t{% if block(\"header\") is defined %}
\t    {% block header %}{% endblock %}
\t{% endif %}

\t{% if block(\"sidebar\") is defined %}
        {% block sidebar %}{% endblock %}
\t{% endif %}

\t<div class=\"layout-wrapper\">

\t    <div class=\"layout-wrapper__container\">

\t\t\t{% if block(\"breadcrumbs\") is defined %}
\t\t\t    {% block breadcrumbs %}{% endblock %}
\t\t\t{% endif %}

\t\t\t{% if block(\"content\") is defined %}
\t\t\t<main id=\"content\" class=\"content\" itemprop=\"mainContentOfPage\">

                {{ url('admin:index', 'item', 100) }}

                {#
                {{ render(url('/url/to/my/page')) }}

                {{ form_label(form.name) }}

                {{ form_label(form.name, 'Your Name', {'label_attr': {'class': 'foo'}}) }}

                {{ form_label(form.name, null, {
                    'label': 'Your name',
                    'label_attr': {'class': 'foo'}
                }) }}

                {{ form_start(form, {'method': 'GET'}) }}
                {{ form_end(form, {'render_rest': false}) }}

                {{ form_start(form) }}
                    {{ form_errors(form) }}

                    {{ form_row(form.name) }}
                    {{ form_row(form.dueDate) }}

                    {{ form_row(form.submit, { 'label': 'Submit me' }) }}
                {{ form_end(form) }}

                {{ form_start(form) }}
                    {{ form_widget(form) }}

                    <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'Save' | trans }}\" />
                {{ form_end(form) }}
                #}

\t\t\t    {% block content %}{% endblock %}

\t        </main>
\t\t\t{% endif %}

\t    </div>

\t\t{% if block(\"footer\") is defined %}
\t\t    {% block footer %}{% endblock %}
\t\t{% endif %}
\t</div>

    {#
    {{
        assetJS([
            '/static/js/vendors.min.js',
            '/static/js/libs.min.js',
            '/static/js/app.min.js'
        ], [
            'async'
        ])
    }}
    #}

    {#
\t{{ compress({
\t    async  : true,
\t    defer  : false,
\t    inline : false,
\t    source : [
\t        { 'file' : '/static/js/vendors.min.js' },
            { 'file' : '/static/js/libs.min.js' },
\t        { 'file' : '/static/js/app.min.js' }
\t    ]
\t}) }}
    #}

</body>
</html>
{% endspaceless %}", "layouts/base.twig", "/Users/lnked/web/celebro.cms.dev/protected/themes/base/twig/layouts/base.twig");
    }
}
