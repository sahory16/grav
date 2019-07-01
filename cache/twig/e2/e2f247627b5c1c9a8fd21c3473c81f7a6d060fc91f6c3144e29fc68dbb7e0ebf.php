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

/* social.html.twig */
class __TwigTemplate_dc2a58d75f78673af5eabeb1d03e63d27067e72078766f706f72e4af944c90dd extends \Twig\Template
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
        echo "<div class=\"widget HTML\">
    <h2 class=\"title\">";
        // line 2
        echo $this->getAttribute(($context["module"] ?? null), "title", []);
        echo "</h2>
    <div class=\"widget-content\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "social", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "            <a class=\"social-shortcode\" href=\"";
            echo $this->getAttribute($context["item"], "url", []);
            echo "\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? null), "media", []), "images", []), $this->getAttribute($context["item"], "icon", []), [], "array");
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "        ";
        echo $this->getAttribute(($context["module"] ?? null), "content", []);
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "social.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  42 => 5,  38 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widget HTML\">
    <h2 class=\"title\">{{ module.title }}</h2>
    <div class=\"widget-content\">
        {% for item in module.header.social %}
            <a class=\"social-shortcode\" href=\"{{ item.url }}\">{{ module.media.images[item.icon] }}</a>
        {% endfor %}
        {{ module.content }}
    </div>
</div>", "social.html.twig", "/var/www/html/grav/user/themes/soraarticle/templates/social.html.twig");
    }
}
