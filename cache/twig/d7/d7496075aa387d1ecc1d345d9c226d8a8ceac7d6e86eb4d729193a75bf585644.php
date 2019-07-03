<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_f8df79632008d72deff527d5e1013abecd7b30a35a82f889a6b2b3b401669298 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'navigation' => [$this, 'block_navigation'],
            'body' => [$this, 'block_body'],
            'masterslider' => [$this, 'block_masterslider'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\" class='";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 7)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 8))) {
        } else {
            echo "v2";
        }
        echo " ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 7))) {
            echo "ie ie7 ltie8 ltie9";
        }
        echo " ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 8))) {
            echo "ie ie8 ltie9";
        }
        echo "'>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-143170319-1\"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-143170319-1');
    </script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5D4SJQJ');</script>
<!-- End Google Tag Manager -->

    ";
        // line 22
        $this->displayBlock('head', $context, $blocks);
        // line 58
        echo "</head>
<body id=\"top\" class=\"page page-template-default ";
        // line 59
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-5D4SJQJ\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div class=\"body-wrapper  float-menu gdlr-pattern-background\">
        ";
        // line 66
        $this->displayBlock('header', $context, $blocks);
        // line 93
        echo "
        ";
        // line 94
        $this->displayBlock('navigation', $context, $blocks);
        // line 97
        echo "
        ";
        // line 98
        $this->displayBlock('body', $context, $blocks);
        // line 110
        echo "
            ";
        // line 111
        $this->displayBlock('footer', $context, $blocks);
        // line 114
        echo "        </div>
        ";
        // line 115
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo " 
    </body>
    </html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 22
    public function block_head($context, array $blocks = [])
    {
        // line 23
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 24
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</title>
        ";
        // line 25
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 25)->display($context);
        // line 26
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 27
        echo ($context["theme_url"] ?? null);
        echo "/images/favicon.png\" />
        <link href='https://fonts.googleapis.com/css?family=Merriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext&amp;ver=3.9.1' id='Merriweather-google-font-css' media='all' rel='stylesheet' type='text/css'/>
        <link href='https://fonts.googleapis.com/css?family=Arvo%3Aregular%2Citalic%2C700%2C700italic&amp;subset=latin&amp;ver=3.9.1' id='Arvo-google-font-css' media='all' rel='stylesheet' type='text/css'/>
        <link href='//maxcdn.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css' rel='stylesheet'/>
        <meta name=\"google-translate-customization\" content=\"";
        // line 31
        echo $this->getAttribute(($context["site"] ?? null), "google_translate_token", []);
        echo "\">
        ";
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 40
        echo "
        ";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "
        ";
        // line 48
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 49
            echo "            <script src=\"//html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
        ";
        }
        // line 51
        echo "
        ";
        // line 52
        $this->displayBlock('assets', $context, $blocks);
        // line 56
        echo "
    ";
    }

    // line 32
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 33
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/widget_css_2_bundle.css"], "method");
        // line 34
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/style.css"], "method");
        // line 35
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/lightbox.css"], "method");
        // line 36
        echo "            ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 7)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 8))) {
            // line 37
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/ie.css"], "method");
            // line 38
            echo "            ";
        }
        // line 39
        echo "        ";
    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        // line 42
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 43
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/jquery-migrate-1.2.1.min.js"], "method");
        // line 44
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/lightbox.min.js"], "method");
        // line 45
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/script.js"], "method");
        // line 46
        echo "        ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 52
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 53
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
            ";
        // line 54
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 66
    public function block_header($context, array $blocks = [])
    {
        // line 67
        echo "            <header class='gdlr-header-wrapper'>
                <div class='gdlr-logo-container container'>
                    <div class='gdlr-logo-wrapper'>
                        <div class='gdlr-logo'>
                            <div class='header section' id='header'><div class='widget Header' id='Header1'>
                                <div id='header-inner'>
                                    <a href='";
        // line 73
        echo ($context["base_url_absolute"] ?? null);
        echo "' style='display: block'>
                                        <img id='Header1_headerimg' src='";
        // line 74
        echo ($context["theme_url"] ?? null);
        echo "/images/logo.png' style='display: block' alt='";
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "' />
                                    </a>
                                </div>
                            </div></div>
                            <div class='gdlr-responsive-navigation dl-menuwrapper' id='gdlr-responsive-navigation'><button class='dl-trigger'>Open Menu</button><ul class='dl-menu gdlr-main-mobile-menu' id='menu-main-menu'>
                                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "mainmenu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 80
            echo "                                    ";
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->containsFilter($this->getAttribute($context["item"], "url", []), "page:")) {
                // line 81
                echo "                    \t\t\t\t\t<li class='menu-item menu-item-type-post_type'><a href='";
                echo ($context["base_url_absolute"] ?? null);
                echo "/";
                echo twig_replace_filter($this->getAttribute($context["item"], "url", []), ["page:" => ""]);
                echo "'>";
                echo $this->getAttribute($context["item"], "text", []);
                echo "</a></li>
                    \t\t\t\t";
            } else {
                // line 83
                echo "                   \t\t\t\t\t\t<li class='menu-item menu-item-type-post_type'><a href='";
                echo $this->getAttribute($context["item"], "url", []);
                echo "'>";
                echo $this->getAttribute($context["item"], "text", []);
                echo "</a>/li>
                \t\t\t\t\t";
            }
            // line 85
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                            </ul></div>
                        </div>
                    </div>
                </div>
                <div class='clear'></div>
            </header>
        ";
    }

    // line 94
    public function block_navigation($context, array $blocks = [])
    {
        // line 95
        echo "            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 95)->display($context);
        // line 96
        echo "        ";
    }

    // line 98
    public function block_body($context, array $blocks = [])
    {
        // line 99
        echo "            <div class='content-wrapper'>
                <div class='gdlr-content'>

                    ";
        // line 102
        $this->displayBlock('masterslider', $context, $blocks);
        // line 105
        echo "
                    ";
        // line 106
        $this->displayBlock('content', $context, $blocks);
        // line 107
        echo "                    </div>
                </div>
            ";
    }

    // line 102
    public function block_masterslider($context, array $blocks = [])
    {
        // line 103
        echo "                        ";
        $this->loadTemplate("partials/masterslider.html.twig", "partials/base.html.twig", 103)->display($context);
        // line 104
        echo "                    ";
    }

    // line 106
    public function block_content($context, array $blocks = [])
    {
    }

    // line 111
    public function block_footer($context, array $blocks = [])
    {
        // line 112
        echo "                ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 112)->display($context);
        // line 113
        echo "            ";
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
        return array (  361 => 113,  358 => 112,  355 => 111,  350 => 106,  346 => 104,  343 => 103,  340 => 102,  334 => 107,  332 => 106,  329 => 105,  327 => 102,  322 => 99,  319 => 98,  315 => 96,  312 => 95,  309 => 94,  299 => 86,  293 => 85,  285 => 83,  275 => 81,  272 => 80,  268 => 79,  258 => 74,  254 => 73,  246 => 67,  243 => 66,  236 => 54,  231 => 53,  228 => 52,  219 => 46,  216 => 45,  213 => 44,  210 => 43,  207 => 42,  204 => 41,  200 => 39,  197 => 38,  194 => 37,  191 => 36,  188 => 35,  185 => 34,  182 => 33,  179 => 32,  174 => 56,  172 => 52,  169 => 51,  165 => 49,  163 => 48,  160 => 47,  158 => 41,  155 => 40,  153 => 32,  149 => 31,  142 => 27,  139 => 26,  137 => 25,  129 => 24,  126 => 23,  123 => 22,  114 => 115,  111 => 114,  109 => 111,  106 => 110,  104 => 98,  101 => 97,  99 => 94,  96 => 93,  94 => 66,  84 => 59,  81 => 58,  79 => 22,  43 => 2,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\" class='{% if browser.getBrowser == 'msie' and browser.getVersion == 7 and browser.getVersion == 8 %}{% else %}v2{% endif %} {% if browser.getBrowser == 'msie' and browser.getVersion == 7 %}ie ie7 ltie8 ltie9{% endif %} {% if browser.getBrowser == 'msie' and browser.getVersion == 8 %}ie ie8 ltie9{% endif %}'>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-143170319-1\"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-143170319-1');
    </script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5D4SJQJ');</script>
<!-- End Google Tag Manager -->

    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\" />
        <link href='https://fonts.googleapis.com/css?family=Merriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext&amp;ver=3.9.1' id='Merriweather-google-font-css' media='all' rel='stylesheet' type='text/css'/>
        <link href='https://fonts.googleapis.com/css?family=Arvo%3Aregular%2Citalic%2C700%2C700italic&amp;subset=latin&amp;ver=3.9.1' id='Arvo-google-font-css' media='all' rel='stylesheet' type='text/css'/>
        <link href='//maxcdn.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css' rel='stylesheet'/>
        <meta name=\"google-translate-customization\" content=\"{{ site.google_translate_token }}\">
        {% block stylesheets %}
            {% do assets.addCss('theme://css/widget_css_2_bundle.css') %}
            {% do assets.addCss('theme://css/style.css') %}
            {% do assets.addCss('theme://css/lightbox.css') %}
            {% if browser.getBrowser == 'msie' and browser.getVersion >= 7 and browser.getVersion <= 8 %}
                {% do assets.addCss('theme://css/ie.css') %}
            {% endif %}
        {% endblock %}

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
            {% do assets.add('theme://js/jquery-migrate-1.2.1.min.js') %}
            {% do assets.add('theme://js/lightbox.min.js') %}
            {% do assets.add('theme://js/script.js') %}
        {% endblock %}

        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            <script src=\"//html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
        {% endif %}

        {% block assets deferred %}
            {{ assets.css()|raw }}
            {{ assets.js()|raw }}
        {% endblock %}

    {% endblock head %}
</head>
<body id=\"top\" class=\"page page-template-default {{ page.header.body_classes }}\">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-5D4SJQJ\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div class=\"body-wrapper  float-menu gdlr-pattern-background\">
        {% block header %}
            <header class='gdlr-header-wrapper'>
                <div class='gdlr-logo-container container'>
                    <div class='gdlr-logo-wrapper'>
                        <div class='gdlr-logo'>
                            <div class='header section' id='header'><div class='widget Header' id='Header1'>
                                <div id='header-inner'>
                                    <a href='{{ base_url_absolute }}' style='display: block'>
                                        <img id='Header1_headerimg' src='{{ theme_url }}/images/logo.png' style='display: block' alt='{{ site.title }}' />
                                    </a>
                                </div>
                            </div></div>
                            <div class='gdlr-responsive-navigation dl-menuwrapper' id='gdlr-responsive-navigation'><button class='dl-trigger'>Open Menu</button><ul class='dl-menu gdlr-main-mobile-menu' id='menu-main-menu'>
                                {% for item in site.mainmenu %}
                                    {% if item.url | contains('page:') %}
                    \t\t\t\t\t<li class='menu-item menu-item-type-post_type'><a href='{{ base_url_absolute }}/{{ item.url|replace({\"page:\":''}) }}'>{{ item.text }}</a></li>
                    \t\t\t\t{% else %}
                   \t\t\t\t\t\t<li class='menu-item menu-item-type-post_type'><a href='{{ item.url }}'>{{ item.text }}</a>/li>
                \t\t\t\t\t{% endif %}
                                {% endfor %}
                            </ul></div>
                        </div>
                    </div>
                </div>
                <div class='clear'></div>
            </header>
        {% endblock %}

        {% block navigation %}
            {% include 'partials/navigation.html.twig' %}
        {% endblock %}

        {% block body %}
            <div class='content-wrapper'>
                <div class='gdlr-content'>

                    {% block masterslider %}
                        {% include 'partials/masterslider.html.twig' %}
                    {% endblock %}

                    {% block content %}{% endblock %}
                    </div>
                </div>
            {% endblock %}

            {% block footer %}
                {% include 'partials/footer.html.twig' %}
            {% endblock %}
        </div>
        {{ assets.js('bottom')|raw }} 
    </body>
    </html>
", "partials/base.html.twig", "/var/www/html/grav/user/themes/soraarticle/templates/partials/base.html.twig");
    }
}
