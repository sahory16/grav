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

/* partials/masterslider.html.twig */
class __TwigTemplate_05b7726ea2ac6e5f644997dfd690432ce0ab66534fced24f80883bbd70ea746d extends \Twig\Template
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
        echo "<!-- Above Sidebar Section-->
<div class='above-sidebar-wrapper'>
        <div class='gdlr-color-wrapper  gdlr-show-all no-skin' style='padding-top: 0px; padding-bottom: 30px; '>
            <div class='container'>
                <div class='gdlr-master-slider-item gdlr-slider-item gdlr-item'>
                    <!-- MasterSlider -->
                    <div class='master-slider-parent ms-parent-id-5' id='P_MS53d5cadc7a9d0'>
                        <!-- MasterSlider Main -->
                        <div class='master-slider ms-skin-default' id='MS53d5cadc7a9d0'>
                            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "masterslider", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "                                <div class='ms-slide' data-delay='6' data-fill-mode='fill'>
                                    <img alt='' data-src='";
            // line 12
            echo ($context["theme_url"] ?? null);
            echo "/images/";
            echo $this->getAttribute($context["item"], "image", []);
            echo "' src='";
            echo ($context["theme_url"] ?? null);
            echo "/images/blank.gif' title=''/>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                        </div>
                        <!-- END MasterSlider Main -->
                    </div>
                    <!-- END MasterSlider -->
                    <script>
                    (function ( \$ ) {
                        \"use strict\";

                        \$(function () {
                            var masterslider_a9d0 = new MasterSlider();

                // slider controls
                masterslider_a9d0.control('arrows'     ,{ autohide:true, overVideo:true  });                    
                masterslider_a9d0.control('circletimer',{ autohide:false, overVideo:true, color:'#272727', radius:10, stroke:2   });
                masterslider_a9d0.control('timebar'    ,{ autohide:false, overVideo:true, align:'bottom', color:'#efefef'  , width:4 });
                // slider setup
                masterslider_a9d0.setup(\"MS53d5cadc7a9d0\", {
                    width           :    ";
        // line 32
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "width", []);
        echo ",
                    height          :    ";
        // line 33
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "height", []);
        echo ",
                    space           :    ";
        // line 34
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "space", []);
        echo ",
                    start           :    ";
        // line 35
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "start", []);
        echo ",
                    grabCursor      :    ";
        // line 36
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "grabCursor", []);
        echo ",
                    swipe           :    ";
        // line 37
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "swipe", []);
        echo ",
                    mouse           :    ";
        // line 38
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "mouse", []);
        echo ",
                    layout          :    \"";
        // line 39
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "layout", []);
        echo "\",
                    wheel           :    ";
        // line 40
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "wheel", []);
        echo ",
                    autoplay        :    ";
        // line 41
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "autoplay", []);
        echo ",
                    instantStartLayers:  ";
        // line 42
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "instantStartLayers", []);
        echo ",
                    loop            :    ";
        // line 43
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "loop", []);
        echo ",
                    shuffle         :    ";
        // line 44
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "shuffle", []);
        echo ",
                    preload         :    ";
        // line 45
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "preload", []);
        echo ",
                    heightLimit     :    ";
        // line 46
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "heightLimit", []);
        echo ",
                    autoHeight      :    ";
        // line 47
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "autoHeight", []);
        echo ",
                    smoothHeight    :    ";
        // line 48
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "smoothHeight", []);
        echo ",
                    endPause        :    ";
        // line 49
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "endPause", []);
        echo ",
                    overPause       :    ";
        // line 50
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "overPause", []);
        echo ",
                    fillMode        :    \"";
        // line 51
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "fillMode", []);
        echo "\",
                    centerControls  :    ";
        // line 52
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "centerControls", []);
        echo ",
                    layersMode      :    \"";
        // line 53
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "layersMode", []);
        echo "\",
                    hideLayers      :    ";
        // line 54
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "hideLayers", []);
        echo ",
                    fullscreenMargin:    ";
        // line 55
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "fullscreenMargin", []);
        echo ",
                    speed           :    ";
        // line 56
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "speed", []);
        echo ",
                    dir             :    \"";
        // line 57
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "dir", []);
        echo "\",
                    parallaxMode    :    '";
        // line 58
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "parallaxMode", []);
        echo "',
                    view            :    \"";
        // line 59
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "masterslider_setup", []), "view", []);
        echo "\"
                });


\$(\"head\").append( \"<link href='http://fonts.googleapis.com/css?family=Arvo:regular|Merriweather:700' id='ms-fonts' media='all' rel='stylesheet' type='text/css'/>\" );

window.masterslider_instances = window.masterslider_instances || {};
window.masterslider_instances[\"5_a9d0\"] = masterslider_a9d0;
});

})(jQuery);
</script>
</div>
<div class='clear'></div>
</div>
</div>
<div class='clear'></div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/masterslider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 59,  184 => 58,  180 => 57,  176 => 56,  172 => 55,  168 => 54,  164 => 53,  160 => 52,  156 => 51,  152 => 50,  148 => 49,  144 => 48,  140 => 47,  136 => 46,  132 => 45,  128 => 44,  124 => 43,  120 => 42,  116 => 41,  112 => 40,  108 => 39,  104 => 38,  100 => 37,  96 => 36,  92 => 35,  88 => 34,  84 => 33,  80 => 32,  61 => 15,  48 => 12,  45 => 11,  41 => 10,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- Above Sidebar Section-->
<div class='above-sidebar-wrapper'>
        <div class='gdlr-color-wrapper  gdlr-show-all no-skin' style='padding-top: 0px; padding-bottom: 30px; '>
            <div class='container'>
                <div class='gdlr-master-slider-item gdlr-slider-item gdlr-item'>
                    <!-- MasterSlider -->
                    <div class='master-slider-parent ms-parent-id-5' id='P_MS53d5cadc7a9d0'>
                        <!-- MasterSlider Main -->
                        <div class='master-slider ms-skin-default' id='MS53d5cadc7a9d0'>
                            {% for item in site.masterslider %}
                                <div class='ms-slide' data-delay='6' data-fill-mode='fill'>
                                    <img alt='' data-src='{{ theme_url }}/images/{{ item.image }}' src='{{ theme_url }}/images/blank.gif' title=''/>
                                </div>
                            {% endfor %}
                        </div>
                        <!-- END MasterSlider Main -->
                    </div>
                    <!-- END MasterSlider -->
                    <script>
                    (function ( \$ ) {
                        \"use strict\";

                        \$(function () {
                            var masterslider_a9d0 = new MasterSlider();

                // slider controls
                masterslider_a9d0.control('arrows'     ,{ autohide:true, overVideo:true  });                    
                masterslider_a9d0.control('circletimer',{ autohide:false, overVideo:true, color:'#272727', radius:10, stroke:2   });
                masterslider_a9d0.control('timebar'    ,{ autohide:false, overVideo:true, align:'bottom', color:'#efefef'  , width:4 });
                // slider setup
                masterslider_a9d0.setup(\"MS53d5cadc7a9d0\", {
                    width           :    {{ site.masterslider_setup.width            }},
                    height          :    {{ site.masterslider_setup.height           }},
                    space           :    {{ site.masterslider_setup.space            }},
                    start           :    {{ site.masterslider_setup.start            }},
                    grabCursor      :    {{ site.masterslider_setup.grabCursor       }},
                    swipe           :    {{ site.masterslider_setup.swipe            }},
                    mouse           :    {{ site.masterslider_setup.mouse            }},
                    layout          :    \"{{ site.masterslider_setup.layout           }}\",
                    wheel           :    {{ site.masterslider_setup.wheel            }},
                    autoplay        :    {{ site.masterslider_setup.autoplay         }},
                    instantStartLayers:  {{ site.masterslider_setup.instantStartLayers }},
                    loop            :    {{ site.masterslider_setup.loop             }},
                    shuffle         :    {{ site.masterslider_setup.shuffle          }},
                    preload         :    {{ site.masterslider_setup.preload          }},
                    heightLimit     :    {{ site.masterslider_setup.heightLimit      }},
                    autoHeight      :    {{ site.masterslider_setup.autoHeight       }},
                    smoothHeight    :    {{ site.masterslider_setup.smoothHeight     }},
                    endPause        :    {{ site.masterslider_setup.endPause         }},
                    overPause       :    {{ site.masterslider_setup.overPause        }},
                    fillMode        :    \"{{ site.masterslider_setup.fillMode         }}\",
                    centerControls  :    {{ site.masterslider_setup.centerControls   }},
                    layersMode      :    \"{{ site.masterslider_setup.layersMode       }}\",
                    hideLayers      :    {{ site.masterslider_setup.hideLayers       }},
                    fullscreenMargin:    {{ site.masterslider_setup.fullscreenMargin }},
                    speed           :    {{ site.masterslider_setup.speed            }},
                    dir             :    \"{{ site.masterslider_setup.dir              }}\",
                    parallaxMode    :    '{{ site.masterslider_setup.parallaxMode     }}',
                    view            :    \"{{ site.masterslider_setup.view             }}\"
                });


\$(\"head\").append( \"<link href='http://fonts.googleapis.com/css?family=Arvo:regular|Merriweather:700' id='ms-fonts' media='all' rel='stylesheet' type='text/css'/>\" );

window.masterslider_instances = window.masterslider_instances || {};
window.masterslider_instances[\"5_a9d0\"] = masterslider_a9d0;
});

})(jQuery);
</script>
</div>
<div class='clear'></div>
</div>
</div>
<div class='clear'></div>
</div>", "partials/masterslider.html.twig", "/var/www/html/grav/user/themes/soraarticle/templates/partials/masterslider.html.twig");
    }
}
