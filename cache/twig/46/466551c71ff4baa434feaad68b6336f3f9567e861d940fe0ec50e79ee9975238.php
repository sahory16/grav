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

/* gallery.html.twig */
class __TwigTemplate_f45c3c90249cc9e80bc994def42f447dcfe0a4a4b848a38fc57977ec61bb2707 extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "gallery", [])) {
            // line 5
            echo "        <div class=\"gdlr-instagram-item-head gdlr-nav-container\">
            <i class=\"icon-angle-left gdlr-flex-prev\"></i>
            <a href=\"";
            // line 7
            echo ($context["base_url_absolute"] ?? null);
            echo "\" target=\"_blank\">
                <i class=\"icon-instagram\"></i>
            </a>
            <i class=\"icon-angle-right gdlr-flex-next\"></i>
        </div>
        <div class=\"gdlr-instagram-item-wrapper\">
            <div class=\"flexslider\" data-type=\"carousel\" data-nav-container=\"gdlr-instagram-item-wrapper\">
                <div class=\"flex-viewport\" >
                    <ul class=\"slides\">
                        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "gallery", []));
            foreach ($context['_seq'] as $context["_key"] => $context["images"]) {
                // line 17
                echo "                            <li>
                                <a href=\"";
                // line 18
                if ($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "image_as_link", [])) {
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? null), "media", []), "images", []), $this->getAttribute($context["images"], "image", []), [], "array"), "url", []);
                } else {
                    echo $this->getAttribute($context["images"], "url", []);
                }
                echo "\" target=\"_blank\" data-lightbox=\"gallery\" data-title=\"images.image\">
                                    ";
                // line 19
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? null), "media", []), "images", []), $this->getAttribute($context["images"], "image", []), [], "array");
                echo "
                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['images'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                    </ul>
                </div>
            </div>
        </div>
    ";
        }
        // line 28
        echo "    ";
        echo $this->getAttribute(($context["module"] ?? null), "content", []);
        echo "
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 28,  81 => 23,  71 => 19,  63 => 18,  60 => 17,  56 => 16,  44 => 7,  40 => 5,  38 => 4,  33 => 2,  30 => 1,);
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
     {% if module.header.gallery %}
        <div class=\"gdlr-instagram-item-head gdlr-nav-container\">
            <i class=\"icon-angle-left gdlr-flex-prev\"></i>
            <a href=\"{{ base_url_absolute }}\" target=\"_blank\">
                <i class=\"icon-instagram\"></i>
            </a>
            <i class=\"icon-angle-right gdlr-flex-next\"></i>
        </div>
        <div class=\"gdlr-instagram-item-wrapper\">
            <div class=\"flexslider\" data-type=\"carousel\" data-nav-container=\"gdlr-instagram-item-wrapper\">
                <div class=\"flex-viewport\" >
                    <ul class=\"slides\">
                        {% for images in module.header.gallery %}
                            <li>
                                <a href=\"{% if module.header.image_as_link %}{{ module.media.images[images.image].url }}{% else %}{{ images.url }}{% endif %}\" target=\"_blank\" data-lightbox=\"gallery\" data-title=\"images.image\">
                                    {{ module.media.images[images.image] }}
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    {% endif %}
    {{ module.content }}
</div>
</div>", "gallery.html.twig", "/var/www/html/grav/user/themes/soraarticle/templates/gallery.html.twig");
    }
}
