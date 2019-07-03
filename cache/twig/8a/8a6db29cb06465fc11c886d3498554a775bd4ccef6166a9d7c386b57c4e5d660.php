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

/* item.html.twig */
class __TwigTemplate_081bff0a1edfb4240ca098bfaa0d4325f620506ed09ffe37a35d2c8d86851b26 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "442986356")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

    {% set base_url = page.parent.url %}
        {% set feed_url = base_url %}
            {% if base_url == '/' %}
                {% set base_url = '' %}
                {% endif %}

                {% if base_url == base_url_relative %}
                    {% set feed_url = base_url~'/'~page.parent.slug %}
                {% endif  %}

                {% block content %}
                    {% block masterslider %}{% endblock %}

                    <div class=\"above-sidebar-wrapper\"><section id=\"content-section-1\"><div class=\"gdlr-color-wrapper  gdlr-show-all no-skin\" style=\"padding-top: 0px; padding-bottom: 30px; \"><div class=\"container\"><div class=\"gdlr-master-slider-item gdlr-slider-item gdlr-item\">
                            </div><div class=\"clear\"></div></div></div><div class=\"clear\"></div></section></div>       
                    <div class=\"with-sidebar-wrapper gdlr-right-sidebar\">
                        <div class=\"with-sidebar-container container\">

                            <div class=\"with-sidebar-left eight columns\">
                                <div class=\"with-sidebar-content twelve columns\">
                                    <div id=\"content-section-2\">
                                        <div class=\"section-container container\">
                                            <div class=\"blog-item-wrapper gdlr-blog-full-type\">
                                                <div class=\"blog-item-holder\">
                                                    <div class=\"main section\" id=\"main\">
                                                        <div class=\"widget Blog\" id=\"Blog1\">
                                                            <div class=\"widget Blog\">
                                                                <div class=\"date-outer\">
                                                                    <div class=\"date-posts\">
                                                                        {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"clear\"></div>
                                                        </div>
                                                    </div>
                                                    <div class=\"clear\"></div>
                                                </div>
                                            </div>
                                            <div class=\"clear\"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"clear\"></div>
                            </div>

                            <div class=\"gdlr-sidebar gdlr-right-sidebar four1 columns\">
                                <div class=\"gdlr-item-start-content sidebar-right-item\">
                                    <div class=\"section\" id=\"swid\">
                                        {% include 'partials/sidebar.html.twig' %}
                                    </div>
                                </div>
                            </div>
                            <div class=\"clear\"></div>
                        </div>
                    </div>
                {% endblock %}
{% endembed %}
", "item.html.twig", "/var/www/html/grav/user/themes/soraarticle/templates/item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_081bff0a1edfb4240ca098bfaa0d4325f620506ed09ffe37a35d2c8d86851b26___442986356 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'masterslider' => [$this, 'block_masterslider'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["base_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "url", []);
        // line 4
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 5
        if ((($context["base_url"] ?? null) == "/")) {
            // line 6
            $context["base_url"] = "";
        }
        // line 9
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 10
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "slug", []));
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        // line 14
        echo "                    ";
        $this->displayBlock('masterslider', $context, $blocks);
        // line 15
        echo "
                    <div class=\"above-sidebar-wrapper\"><section id=\"content-section-1\"><div class=\"gdlr-color-wrapper  gdlr-show-all no-skin\" style=\"padding-top: 0px; padding-bottom: 30px; \"><div class=\"container\"><div class=\"gdlr-master-slider-item gdlr-slider-item gdlr-item\">
                            </div><div class=\"clear\"></div></div></div><div class=\"clear\"></div></section></div>       
                    <div class=\"with-sidebar-wrapper gdlr-right-sidebar\">
                        <div class=\"with-sidebar-container container\">

                            <div class=\"with-sidebar-left eight columns\">
                                <div class=\"with-sidebar-content twelve columns\">
                                    <div id=\"content-section-2\">
                                        <div class=\"section-container container\">
                                            <div class=\"blog-item-wrapper gdlr-blog-full-type\">
                                                <div class=\"blog-item-holder\">
                                                    <div class=\"main section\" id=\"main\">
                                                        <div class=\"widget Blog\" id=\"Blog1\">
                                                            <div class=\"widget Blog\">
                                                                <div class=\"date-outer\">
                                                                    <div class=\"date-posts\">
                                                                        ";
        // line 32
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 32)->display(twig_array_merge($context, ["truncate" => false, "big_header" => true]));
        // line 33
        echo "                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"clear\"></div>
                                                        </div>
                                                    </div>
                                                    <div class=\"clear\"></div>
                                                </div>
                                            </div>
                                            <div class=\"clear\"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"clear\"></div>
                            </div>

                            <div class=\"gdlr-sidebar gdlr-right-sidebar four1 columns\">
                                <div class=\"gdlr-item-start-content sidebar-right-item\">
                                    <div class=\"section\" id=\"swid\">
                                        ";
        // line 52
        $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 52)->display($context);
        // line 53
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"clear\"></div>
                        </div>
                    </div>
                ";
    }

    // line 14
    public function block_masterslider($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 14,  208 => 53,  206 => 52,  185 => 33,  183 => 32,  164 => 15,  161 => 14,  158 => 13,  153 => 1,  150 => 10,  148 => 9,  145 => 6,  143 => 5,  141 => 4,  139 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

    {% set base_url = page.parent.url %}
        {% set feed_url = base_url %}
            {% if base_url == '/' %}
                {% set base_url = '' %}
                {% endif %}

                {% if base_url == base_url_relative %}
                    {% set feed_url = base_url~'/'~page.parent.slug %}
                {% endif  %}

                {% block content %}
                    {% block masterslider %}{% endblock %}

                    <div class=\"above-sidebar-wrapper\"><section id=\"content-section-1\"><div class=\"gdlr-color-wrapper  gdlr-show-all no-skin\" style=\"padding-top: 0px; padding-bottom: 30px; \"><div class=\"container\"><div class=\"gdlr-master-slider-item gdlr-slider-item gdlr-item\">
                            </div><div class=\"clear\"></div></div></div><div class=\"clear\"></div></section></div>       
                    <div class=\"with-sidebar-wrapper gdlr-right-sidebar\">
                        <div class=\"with-sidebar-container container\">

                            <div class=\"with-sidebar-left eight columns\">
                                <div class=\"with-sidebar-content twelve columns\">
                                    <div id=\"content-section-2\">
                                        <div class=\"section-container container\">
                                            <div class=\"blog-item-wrapper gdlr-blog-full-type\">
                                                <div class=\"blog-item-holder\">
                                                    <div class=\"main section\" id=\"main\">
                                                        <div class=\"widget Blog\" id=\"Blog1\">
                                                            <div class=\"widget Blog\">
                                                                <div class=\"date-outer\">
                                                                    <div class=\"date-posts\">
                                                                        {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"clear\"></div>
                                                        </div>
                                                    </div>
                                                    <div class=\"clear\"></div>
                                                </div>
                                            </div>
                                            <div class=\"clear\"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"clear\"></div>
                            </div>

                            <div class=\"gdlr-sidebar gdlr-right-sidebar four1 columns\">
                                <div class=\"gdlr-item-start-content sidebar-right-item\">
                                    <div class=\"section\" id=\"swid\">
                                        {% include 'partials/sidebar.html.twig' %}
                                    </div>
                                </div>
                            </div>
                            <div class=\"clear\"></div>
                        </div>
                    </div>
                {% endblock %}
{% endembed %}
", "item.html.twig", "/var/www/html/grav/user/themes/soraarticle/templates/item.html.twig");
    }
}
