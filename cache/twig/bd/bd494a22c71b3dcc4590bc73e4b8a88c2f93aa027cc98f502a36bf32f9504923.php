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

/* partials/blog_item.html.twig */
class __TwigTemplate_927bdb6effe5e45b2e68aaf0ff46d031cadd12ba2be44b8a459e7f78ae41b571 extends \Twig\Template
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
        echo "<div class=\"post-outer\">
  <div class=\"gdlr-item gdlr-blog-full \">
    <div class=\"gdlr-ux gdlr-blog-full-ux\">
      <article class=\"post type-post status-publish format-standard has-post-thumbnail hentry\">
        <div class=\"gdlr-standard-style\">
          <div class=\"blog-date-wrapper gdlr-title-font\">
            <i class=\"icon-calendar-empty\"></i>
            <div class=\"blog-date-day\">
              ";
        // line 9
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "d");
        echo "
            </div>
            <div class=\"blog-date-month\">
              ";
        // line 12
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "M");
        echo "
            </div>
            <div class=\"blog-date-year\">
              ";
        // line 15
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "Y");
        echo "
            </div>
          </div>
            <div class=\"blog-content-wrapper\">
              <div class=\"gdlr-blog-thumbnail ";
        // line 19
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "youtube", []) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "soundcloud", []))) {
            echo "gdlr-video";
        }
        echo "\">
                ";
        // line 20
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "youtube", [])) {
            // line 21
            echo "                  <iframe width=\"600\" height=\"403\" src=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "youtube", []);
            echo "?showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>
                  ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 22
($context["page"] ?? null), "header", []), "soundcloud", [])) {
            // line 23
            echo "                  <iframe width=\"100%\" height=\"403\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "soundcloud", []);
            echo "&amp;auto_play=false&amp;hide_related=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true&amp;buying=false\"></iframe>
                  ";
        } else {
            // line 25
            echo "                  ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "cropZoom", [0 => 640, 1 => 430], "method"), "html", []);
            echo "
                ";
        }
        // line 27
        echo "               ";
        if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_date", [])) {
            // line 28
            echo "                <div class=\"gdlr-sticky-banner\">";
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "G:i");
            echo " ";
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "A");
            echo "</div>
                 ";
        }
        // line 30
        echo "              </div>
              <div class=\"blog-content-inner-wrapper\">
                <header class=\"post-header\">

                  ";
        // line 34
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", [])) {
            // line 35
            echo "                    <h3 class=\"gdlr-blog-title\">
                      ";
            // line 36
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
                // line 37
                echo "                        <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", []);
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
                      ";
            }
            // line 39
            echo "                      <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", []);
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</a>
                    </h3>
                    ";
        } else {
            // line 42
            echo "                    <h3 class=\"gdlr-blog-title\"><a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</a></h3>
                  ";
        }
        // line 44
        echo "
                  <div class=\"gdlr-blog-info gdlr-title-font gdlr-info\">

                    ";
        // line 47
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
            // line 48
            echo "                      <div class=\"blog-info blog-tag\"><i class=\"icon-tags\"></i>
                        ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 50
                echo "                          <a href=\"";
                echo ($context["base_url"] ?? null);
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
                echo $context["tag"];
                echo "\" rel=\"tag\">";
                echo $context["tag"];
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo ", ";
                }
                echo "</a>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                      </div>
                    ";
        }
        // line 54
        echo "
                    ";
        // line 55
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "name", []) || $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []))) {
            // line 56
            echo "                      <div class=\"blog-info blog-author\"><i class=\"icon-user\"></i>
                        ";
            // line 57
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "name", [])) {
                // line 58
                echo "                          ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "url", [])) {
                    // line 59
                    echo "                           <a href=\"";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "url", []);
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "name", []);
                    echo "</a>
                           ";
                } else {
                    // line 61
                    echo "                           ";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "name", []);
                    echo "
                         ";
                }
                // line 63
                echo "                         ";
            } else {
                // line 64
                echo "                         ";
                if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "url", [])) {
                    // line 65
                    echo "                           <a href=\"";
                    echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "url", []);
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []);
                    echo "</a>
                           ";
                } else {
                    // line 67
                    echo "                           ";
                    echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []);
                    echo "
                         ";
                }
                // line 69
                echo "                       ";
            }
            // line 70
            echo "                     </div>
                   ";
        }
        // line 72
        echo "                    <div class=\"clear\"></div>
                  </div>
                </header>
                <div class=\"gdlr-blog-content\">
                  ";
        // line 76
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
            // line 77
            echo "                    ";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
                    ";
            // line 78
            if ( !($context["truncate"] ?? null)) {
                // line 79
                echo "                      ";
                $context["show_prev_next"] = true;
                // line 80
                echo "                      ";
            }
            // line 81
            echo "                      ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", [])))) {
            // line 82
            echo "                      ";
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "
                      <p><a href=\"";
            // line 83
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\" class=\"more-link\"><span class=\"gdlr-button with-border excerpt-read-more\">Read More</span></a></p>
                      ";
        } elseif (        // line 84
($context["truncate"] ?? null)) {
            // line 85
            echo "                      ";
            echo \Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", []), 550);
            echo "
                      <p><a href=\"";
            // line 86
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\" class=\"more-link\"><span class=\"gdlr-button with-border excerpt-read-more\">Read More</span></a></p>
                      ";
        } else {
            // line 88
            echo "                      ";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
                      ";
            // line 89
            $context["show_prev_next"] = true;
            // line 90
            echo "                      ";
        }
        // line 91
        echo "
                      <div class=\"gdlr-social-share\">
                        <a href=\"http://digg.com/submit?url=";
        // line 93
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
        echo "&amp;title=";
        echo twig_replace_filter($this->getAttribute(($context["page"] ?? null), "title", []), [" " => "%20"]);
        echo "\" target=\"_blank\"><img src=\"";
        echo ($context["theme_url"] ?? null);
        echo "/images/digg.png\" alt=\"digg-share\" width=\"112\" height=\"112\"></a><a href=\"http://www.facebook.com/share.php?u=";
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
        echo "\" target=\"_blank\"><img src=\"";
        echo ($context["theme_url"] ?? null);
        echo "/images/facebook.png\" alt=\"facebook-share\" width=\"112\" height=\"112\"></a><a href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url=";
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
        echo "&amp;title=";
        echo twig_replace_filter($this->getAttribute(($context["page"] ?? null), "title", []), [" " => "%20"]);
        echo "\" target=\"_blank\"><img src=\"";
        echo ($context["theme_url"] ?? null);
        echo "/images/linkedin.png\" alt=\"linked-share\" width=\"112\" height=\"112\"></a><a href=\"http://www.tumblr.com/share/link?url=";
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
        echo "&amp;name=";
        echo twig_replace_filter($this->getAttribute(($context["page"] ?? null), "title", []), [" " => "%20"]);
        echo "\" target=\"_blank\"><img src=\"";
        echo ($context["theme_url"] ?? null);
        echo "/images/tumblr.png\" alt=\"tumblr-share\" width=\"112\" height=\"112\"></a><a href=\"http://reddit.com/submit?url=";
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
        echo "&amp;title=";
        echo twig_replace_filter($this->getAttribute(($context["page"] ?? null), "title", []), [" " => "%20"]);
        echo "\" target=\"_blank\"><img src=\"";
        echo ($context["theme_url"] ?? null);
        echo "/images/reddit.png\" alt=\"reddit-share\" width=\"112\" height=\"112\"></a><a href=\"http://www.stumbleupon.com/submit?url=";
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
        echo "&amp;title=";
        echo twig_replace_filter($this->getAttribute(($context["page"] ?? null), "title", []), [" " => "%20"]);
        echo "\" target=\"_blank\"><img src=\"";
        echo ($context["theme_url"] ?? null);
        echo "/images/stumble-upon.png\" alt=\"stumble-upon-share\" width=\"112\" height=\"112\"></a><a href=\"http://twitter.com/home?status=";
        echo twig_replace_filter($this->getAttribute(($context["page"] ?? null), "title", []), [" " => "%20"]);
        echo "-";
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
        echo "\" target=\"_blank\"><img src=\"";
        echo ($context["theme_url"] ?? null);
        echo "/images/twitter.png\" alt=\"twitter-share\" width=\"112\" height=\"112\"></a>
                        <div class=\"clear\"></div>
                      </div>

                      ";
        // line 97
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "enabled", []) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 98
            echo "                        <br /><br />
                        <div class=\"gdlr-related-post-widget\">
                         <h3 class=\"related-post-title\">You may also like</h3>
                         ";
            // line 101
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/blog_item.html.twig", 101)->display($context);
            // line 102
            echo "                         <div class=\"clear\"></div>
                       </div>
                     ";
        }
        // line 105
        echo "
                     ";
        // line 106
        if ($this->getAttribute(($context["page"] ?? null), "activeChild", [], "method")) {
            // line 107
            echo "                       <div class=\"gdlr-post-author\">
                        <h3 class=\"post-author-title\">About Post Author</h3>
                        <div class=\"clear\"></div>
                        ";
            // line 110
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", [])) {
                // line 111
                echo "                          ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "logo", [])) {
                    // line 112
                    echo "                            <div class=\"post-author-avartar\">
                              <img src=\"";
                    // line 113
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["header"] ?? null), "author", []), "logo", []), [], "array");
                    echo "\" class=\"avatar avatar-125 photo\" />
                            </div>
                          ";
                }
                // line 116
                echo "                          <div class=\"post-author-content\">
                            <h4 class=\"post-author\">
                              ";
                // line 118
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "url", [])) {
                    // line 119
                    echo "                                <a href=\"";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "url", []);
                    echo "\" rel=\"author\">";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "name", []);
                    echo "</a>
                                ";
                } else {
                    // line 121
                    echo "                                ";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "name", []);
                    echo "
                              ";
                }
                // line 123
                echo "                            </h4>
                            ";
                // line 124
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "description", []);
                echo "
                          </div>
                          ";
            } else {
                // line 127
                echo "                          ";
                if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "logo", [])) {
                    // line 128
                    echo "                            <div class=\"post-author-avartar\">
                              <img src=\"";
                    // line 129
                    echo ($context["theme_url"] ?? null);
                    echo "/images/";
                    echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "logo", []);
                    echo "\" class=\"avatar avatar-125 photo\" />
                            </div>
                          ";
                }
                // line 132
                echo "                          <div class=\"post-author-content\">
                            <h4 class=\"post-author\">
                              ";
                // line 134
                if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "url", [])) {
                    // line 135
                    echo "                                <a href=\"";
                    echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "url", []);
                    echo "\" rel=\"author\">";
                    echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []);
                    echo "</a>
                                ";
                } else {
                    // line 137
                    echo "                                ";
                    echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []);
                    echo "
                              ";
                }
                // line 139
                echo "                            </h4>
                            ";
                // line 140
                echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "description", []);
                echo "
                          </div>
                        ";
            }
            // line 143
            echo "
                        <div class=\"clear\"></div>
                      </div>
                    ";
        }
        // line 147
        echo "                    </div>
                  </div>
                </div>
              <div class=\"clear\"></div>

                ";
        // line 152
        if ( !($context["truncate"] ?? null)) {
            // line 153
            echo "                ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "jscomments", []), "enabled", []) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "jscomments", []), "provider", []))) {
                // line 154
                echo "                  <div class=\"comments\" id=\"comments\">
                    <div class=\"comment-respond\">
                      <h3 class=\"comment-reply-title\">Comments:</h3>
                    ";
                // line 157
                echo call_user_func_array($this->env->getFunction('jscomments')->getCallable(), [$this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "jscomments", []), "provider", [])]);
                echo "
                    </div>
                  </div>
                ";
            }
            // line 161
            echo "              ";
        }
        // line 162
        echo "
            </div>
          </article>
        </div>
      </div>
    </div>

    ";
        // line 169
        if (($context["show_prev_next"] ?? null)) {
            // line 170
            echo "      <div class=\"blog-pager\" id=\"blog-pager\">
        ";
            // line 171
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
                // line 172
                echo "          <span id=\"blog-pager-newer-link\">
            <a class=\"blog-pager-newer-link\" href=\"";
                // line 173
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []);
                echo "\"><i class=\"fa fa-chevron-left\"></i> Newer Post</a>
          </span>
        ";
            }
            // line 176
            echo "
        ";
            // line 177
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
                // line 178
                echo "         <span id=\"blog-pager-older-link\">
          <a class=\"blog-pager-older-link\" href=\"";
                // line 179
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []);
                echo "\">Older Post <i class=\"fa fa-chevron-right\"></i></a>
        </span>
      ";
            }
            // line 182
            echo "      <a class=\"home-link\" href=\"";
            echo ($context["base_url_absolute"] ?? null);
            echo "\">Home</a>
    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  529 => 182,  523 => 179,  520 => 178,  518 => 177,  515 => 176,  509 => 173,  506 => 172,  504 => 171,  501 => 170,  499 => 169,  490 => 162,  487 => 161,  480 => 157,  475 => 154,  472 => 153,  470 => 152,  463 => 147,  457 => 143,  451 => 140,  448 => 139,  442 => 137,  434 => 135,  432 => 134,  428 => 132,  420 => 129,  417 => 128,  414 => 127,  408 => 124,  405 => 123,  399 => 121,  391 => 119,  389 => 118,  385 => 116,  379 => 113,  376 => 112,  373 => 111,  371 => 110,  366 => 107,  364 => 106,  361 => 105,  356 => 102,  354 => 101,  349 => 98,  347 => 97,  302 => 93,  298 => 91,  295 => 90,  293 => 89,  288 => 88,  283 => 86,  278 => 85,  276 => 84,  272 => 83,  267 => 82,  264 => 81,  261 => 80,  258 => 79,  256 => 78,  251 => 77,  249 => 76,  243 => 72,  239 => 70,  236 => 69,  230 => 67,  222 => 65,  219 => 64,  216 => 63,  210 => 61,  202 => 59,  199 => 58,  197 => 57,  194 => 56,  192 => 55,  189 => 54,  185 => 52,  160 => 50,  143 => 49,  140 => 48,  138 => 47,  133 => 44,  125 => 42,  116 => 39,  110 => 37,  108 => 36,  105 => 35,  103 => 34,  97 => 30,  89 => 28,  86 => 27,  80 => 25,  74 => 23,  72 => 22,  67 => 21,  65 => 20,  59 => 19,  52 => 15,  46 => 12,  40 => 9,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"post-outer\">
  <div class=\"gdlr-item gdlr-blog-full \">
    <div class=\"gdlr-ux gdlr-blog-full-ux\">
      <article class=\"post type-post status-publish format-standard has-post-thumbnail hentry\">
        <div class=\"gdlr-standard-style\">
          <div class=\"blog-date-wrapper gdlr-title-font\">
            <i class=\"icon-calendar-empty\"></i>
            <div class=\"blog-date-day\">
              {{ page.date|date(\"d\") }}
            </div>
            <div class=\"blog-date-month\">
              {{ page.date|date(\"M\") }}
            </div>
            <div class=\"blog-date-year\">
              {{ page.date|date(\"Y\") }}
            </div>
          </div>
            <div class=\"blog-content-wrapper\">
              <div class=\"gdlr-blog-thumbnail {% if page.header.youtube or page.header.soundcloud %}gdlr-video{% endif %}\">
                {% if page.header.youtube %}
                  <iframe width=\"600\" height=\"403\" src=\"{{ page.header.youtube }}?showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>
                  {% elseif page.header.soundcloud %}
                  <iframe width=\"100%\" height=\"403\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/{{ page.header.soundcloud }}&amp;auto_play=false&amp;hide_related=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true&amp;buying=false\"></iframe>
                  {% else %}
                  {{ page.media.images|first.cropZoom(640,430).html }}
                {% endif %}
               {% if not page.header.hide_date %}
                <div class=\"gdlr-sticky-banner\">{{ page.date|date(\"G:i\") }} {{ page.date|date(\"A\") }}</div>
                 {% endif %}
              </div>
              <div class=\"blog-content-inner-wrapper\">
                <header class=\"post-header\">

                  {% if page.header.link %}
                    <h3 class=\"gdlr-blog-title\">
                      {% if page.header.continue_link is not sameas(false) %}
                        <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right\"></i></a>
                      {% endif %}
                      <a href=\"{{ page.header.link }}\">{{ page.title }}</a>
                    </h3>
                    {% else %}
                    <h3 class=\"gdlr-blog-title\"><a href=\"{{ page.url }}\">{{ page.title }}</a></h3>
                  {% endif %}

                  <div class=\"gdlr-blog-info gdlr-title-font gdlr-info\">

                    {% if page.taxonomy.tag %}
                      <div class=\"blog-info blog-tag\"><i class=\"icon-tags\"></i>
                        {% for tag in page.taxonomy.tag %}
                          <a href=\"{{ base_url }}/tag{{ config.system.param_sep }}{{ tag }}\" rel=\"tag\">{{ tag }}{% if not loop.last %}, {% endif %}</a>
                        {% endfor %}
                      </div>
                    {% endif %}

                    {% if page.header.author.name or site.author.name %}
                      <div class=\"blog-info blog-author\"><i class=\"icon-user\"></i>
                        {% if page.header.author.name %}
                          {% if page.header.author.url %}
                           <a href=\"{{ page.header.author.url }}\">{{ page.header.author.name }}</a>
                           {% else %}
                           {{ page.header.author.name }}
                         {% endif %}
                         {% else %}
                         {% if site.author.url %}
                           <a href=\"{{ site.author.url }}\">{{ site.author.name }}</a>
                           {% else %}
                           {{ site.author.name }}
                         {% endif %}
                       {% endif %}
                     </div>
                   {% endif %}
                    <div class=\"clear\"></div>
                  </div>
                </header>
                <div class=\"gdlr-blog-content\">
                  {% if page.header.continue_link is sameas(false) %}
                    {{ page.content }}
                    {% if not truncate %}
                      {% set show_prev_next = true %}
                      {% endif %}
                      {% elseif truncate and page.summary != page.content %}
                      {{ page.summary }}
                      <p><a href=\"{{ page.url }}\" class=\"more-link\"><span class=\"gdlr-button with-border excerpt-read-more\">Read More</span></a></p>
                      {% elseif truncate %}
                      {{ page.content|truncate(550) }}
                      <p><a href=\"{{ page.url }}\" class=\"more-link\"><span class=\"gdlr-button with-border excerpt-read-more\">Read More</span></a></p>
                      {% else %}
                      {{ page.content }}
                      {% set show_prev_next = true %}
                      {% endif %}

                      <div class=\"gdlr-social-share\">
                        <a href=\"http://digg.com/submit?url={{ page.url(true) }}&amp;title={{ page.title|replace({' ': \"%20\"}) }}\" target=\"_blank\"><img src=\"{{ theme_url }}/images/digg.png\" alt=\"digg-share\" width=\"112\" height=\"112\"></a><a href=\"http://www.facebook.com/share.php?u={{ page.url(true) }}\" target=\"_blank\"><img src=\"{{ theme_url }}/images/facebook.png\" alt=\"facebook-share\" width=\"112\" height=\"112\"></a><a href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url={{ page.url(true) }}&amp;title={{ page.title|replace({' ': \"%20\"}) }}\" target=\"_blank\"><img src=\"{{ theme_url }}/images/linkedin.png\" alt=\"linked-share\" width=\"112\" height=\"112\"></a><a href=\"http://www.tumblr.com/share/link?url={{ page.url(true) }}&amp;name={{ page.title|replace({' ': \"%20\"}) }}\" target=\"_blank\"><img src=\"{{ theme_url }}/images/tumblr.png\" alt=\"tumblr-share\" width=\"112\" height=\"112\"></a><a href=\"http://reddit.com/submit?url={{ page.url(true) }}&amp;title={{ page.title|replace({' ': \"%20\"}) }}\" target=\"_blank\"><img src=\"{{ theme_url }}/images/reddit.png\" alt=\"reddit-share\" width=\"112\" height=\"112\"></a><a href=\"http://www.stumbleupon.com/submit?url={{ page.url(true) }}&amp;title={{ page.title|replace({' ': \"%20\"}) }}\" target=\"_blank\"><img src=\"{{ theme_url }}/images/stumble-upon.png\" alt=\"stumble-upon-share\" width=\"112\" height=\"112\"></a><a href=\"http://twitter.com/home?status={{ page.title|replace({' ': \"%20\"}) }}-{{ page.url(true) }}\" target=\"_blank\"><img src=\"{{ theme_url }}/images/twitter.png\" alt=\"twitter-share\" width=\"112\" height=\"112\"></a>
                        <div class=\"clear\"></div>
                      </div>

                      {% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
                        <br /><br />
                        <div class=\"gdlr-related-post-widget\">
                         <h3 class=\"related-post-title\">You may also like</h3>
                         {% include 'partials/relatedpages.html.twig' %}
                         <div class=\"clear\"></div>
                       </div>
                     {% endif %}

                     {% if page.activeChild() %}
                       <div class=\"gdlr-post-author\">
                        <h3 class=\"post-author-title\">About Post Author</h3>
                        <div class=\"clear\"></div>
                        {% if page.header.author %}
                          {% if page.header.author.logo %}
                            <div class=\"post-author-avartar\">
                              <img src=\"{{ page.media.images[header.author.logo] }}\" class=\"avatar avatar-125 photo\" />
                            </div>
                          {% endif %}
                          <div class=\"post-author-content\">
                            <h4 class=\"post-author\">
                              {% if page.header.author.url %}
                                <a href=\"{{ page.header.author.url }}\" rel=\"author\">{{ page.header.author.name }}</a>
                                {% else %}
                                {{ page.header.author.name }}
                              {% endif %}
                            </h4>
                            {{ page.header.author.description }}
                          </div>
                          {% else %}
                          {% if site.author.logo %}
                            <div class=\"post-author-avartar\">
                              <img src=\"{{ theme_url }}/images/{{ site.author.logo }}\" class=\"avatar avatar-125 photo\" />
                            </div>
                          {% endif %}
                          <div class=\"post-author-content\">
                            <h4 class=\"post-author\">
                              {% if site.author.url %}
                                <a href=\"{{ site.author.url }}\" rel=\"author\">{{ site.author.name }}</a>
                                {% else %}
                                {{ site.author.name }}
                              {% endif %}
                            </h4>
                            {{ site.author.description }}
                          </div>
                        {% endif %}

                        <div class=\"clear\"></div>
                      </div>
                    {% endif %}
                    </div>
                  </div>
                </div>
              <div class=\"clear\"></div>

                {% if not truncate %}
                {% if config.plugins.jscomments.enabled and config.plugins.jscomments.provider %}
                  <div class=\"comments\" id=\"comments\">
                    <div class=\"comment-respond\">
                      <h3 class=\"comment-reply-title\">Comments:</h3>
                    {{ jscomments(config.plugins.jscomments.provider) }}
                    </div>
                  </div>
                {% endif %}
              {% endif %}

            </div>
          </article>
        </div>
      </div>
    </div>

    {% if show_prev_next %}
      <div class=\"blog-pager\" id=\"blog-pager\">
        {% if not page.isFirst %}
          <span id=\"blog-pager-newer-link\">
            <a class=\"blog-pager-newer-link\" href=\"{{ page.nextSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> Newer Post</a>
          </span>
        {% endif %}

        {% if not page.isLast %}
         <span id=\"blog-pager-older-link\">
          <a class=\"blog-pager-older-link\" href=\"{{ page.prevSibling.url }}\">Older Post <i class=\"fa fa-chevron-right\"></i></a>
        </span>
      {% endif %}
      <a class=\"home-link\" href=\"{{ base_url_absolute }}\">Home</a>
    </div>
  {% endif %}
", "partials/blog_item.html.twig", "/var/www/html/grav/user/themes/soraarticle/templates/partials/blog_item.html.twig");
    }
}
