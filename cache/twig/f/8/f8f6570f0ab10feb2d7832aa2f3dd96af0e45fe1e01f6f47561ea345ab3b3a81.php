<?php

/* search_results.html */
class __TwigTemplate_f8f6570f0ab10feb2d7832aa2f3dd96af0e45fe1e01f6f47561ea345ab3b3a81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "search_results.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        // line 3
        echo "
<h2 class=\"searchresults-title\">";
        // line 4
        if ((isset($context["SEARCH_TITLE"]) ? $context["SEARCH_TITLE"] : null)) {
            echo (isset($context["SEARCH_TITLE"]) ? $context["SEARCH_TITLE"] : null);
        } else {
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
        }
        if ((isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <a href=\"";
            echo (isset($context["U_SEARCH_WORDS"]) ? $context["U_SEARCH_WORDS"] : null);
            echo "\">";
            echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
            echo "</a>";
        }
        echo "</h2>
";
        // line 5
        if ((isset($context["SEARCHED_QUERY"]) ? $context["SEARCHED_QUERY"] : null)) {
            echo " <p>";
            echo $this->env->getExtension('phpbb')->lang("SEARCHED_QUERY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <strong>";
            echo (isset($context["SEARCHED_QUERY"]) ? $context["SEARCHED_QUERY"] : null);
            echo "</strong></p>";
        }
        // line 6
        if ((isset($context["IGNORED_WORDS"]) ? $context["IGNORED_WORDS"] : null)) {
            echo " <p>";
            echo $this->env->getExtension('phpbb')->lang("IGNORED_TERMS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <strong>";
            echo (isset($context["IGNORED_WORDS"]) ? $context["IGNORED_WORDS"] : null);
            echo "</strong></p>";
        }
        // line 7
        if ((isset($context["PHRASE_SEARCH_DISABLED"]) ? $context["PHRASE_SEARCH_DISABLED"] : null)) {
            echo " <p><strong>";
            echo $this->env->getExtension('phpbb')->lang("PHRASE_SEARCH_DISABLED");
            echo "</strong></p>";
        }
        // line 8
        echo "
";
        // line 9
        if ((isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null)) {
            // line 10
            echo "\t<p class=\"return-link\"><a class=\"arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" href=\"";
            echo (isset($context["U_SEARCH_TOPIC"]) ? $context["U_SEARCH_TOPIC"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_TOPIC");
            echo "</a></p>
";
        } else {
            // line 12
            echo "\t<p class=\"advanced-search-link\"><a class=\"arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("GO_TO_SEARCH_ADV");
            echo "</a></p>
";
        }
        // line 14
        echo "
";
        // line 15
        // line 16
        if ((((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null)) || (isset($context["TOTAL_MATCHES"]) ? $context["TOTAL_MATCHES"] : null)) || (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null))) {
            // line 17
            echo "\t<div class=\"action-bar top\">

\t";
            // line 19
            if (((isset($context["TOTAL_MATCHES"]) ? $context["TOTAL_MATCHES"] : null) > 0)) {
                // line 20
                echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"post\" action=\"";
                // line 21
                echo (isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null);
                echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\" type=\"search\" name=\"add_keywords\" id=\"add_keywords\" value=\"\" placeholder=\"";
                // line 23
                echo $this->env->getExtension('phpbb')->lang("SEARCH_IN_RESULTS");
                echo "\" />
\t\t\t\t<button class=\"button icon-button search-icon\" type=\"submit\" title=\"";
                // line 24
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "</button>
\t\t\t\t<a href=\"";
                // line 25
                echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
                echo "\" class=\"button icon-button search-adv-icon\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
                echo "</a>
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
            }
            // line 30
            echo "
\t\t";
            // line 31
            // line 32
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 33
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
            echo "
\t\t\t";
            // line 34
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 35
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "search_results.html", 35)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 36
                echo "\t\t\t";
            } else {
                // line 37
                echo "\t\t\t\t &bull; ";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t";
            }
            // line 39
            echo "\t\t</div>
\t</div>
";
        }
        // line 42
        echo "
";
        // line 43
        if ((isset($context["S_SHOW_TOPICS"]) ? $context["S_SHOW_TOPICS"] : null)) {
            // line 44
            echo "
\t";
            // line 45
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()))) {
                // line 46
                echo "\t<div class=\"forumbg\">

\t\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 52
                echo $this->env->getExtension('phpbb')->lang("TOPICS");
                echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
                // line 53
                echo $this->env->getExtension('phpbb')->lang("REPLIES");
                echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
                // line 54
                echo $this->env->getExtension('phpbb')->lang("VIEWS");
                echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 55
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist topics\">

\t\t";
                // line 61
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                    // line 62
                    echo "\t\t\t";
                    // line 63
                    echo "\t\t\t<li class=\"row";
                    if (($this->getAttribute($context["searchresults"], "S_ROW_COUNT", array()) % 2 == 0)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl class=\"icon ";
                    // line 64
                    echo $this->getAttribute($context["searchresults"], "TOPIC_IMG_STYLE", array());
                    echo "\">
\t\t\t\t\t<dt ";
                    // line 65
                    if ($this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG", array())) {
                        echo "style=\"background-image: url(";
                        echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                        echo $this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG", array());
                        echo "); background-repeat: no-repeat;\"";
                    }
                    echo " title=\"";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_FOLDER_IMG_ALT", array());
                    echo "\">
\t\t\t\t\t\t";
                    // line 66
                    if (($this->getAttribute($context["searchresults"], "S_UNREAD_TOPIC", array()) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_NEWEST_POST", array());
                        echo "\" class=\"icon-link\"></a>";
                    }
                    // line 67
                    echo "\t\t\t\t\t\t<div class=\"list-inner\">

\t\t\t\t\t\t\t";
                    // line 69
                    // line 70
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["searchresults"], "S_UNREAD_TOPIC", array()) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_NEWEST_POST", array());
                        echo "\">";
                        echo (isset($context["NEWEST_POST_IMG"]) ? $context["NEWEST_POST_IMG"] : null);
                        echo "</a> ";
                    }
                    // line 71
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", array());
                    echo "\" class=\"topictitle\">";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_TITLE", array());
                    echo "</a> ";
                    echo $this->getAttribute($context["searchresults"], "ATTACH_ICON_IMG", array());
                    echo "
\t\t\t\t\t\t\t";
                    // line 72
                    if (($this->getAttribute($context["searchresults"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["searchresults"], "S_POSTS_UNAPPROVED", array()))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_QUEUE", array());
                        echo "\">";
                        echo $this->getAttribute($context["searchresults"], "UNAPPROVED_IMG", array());
                        echo "</a> ";
                    }
                    // line 73
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "S_TOPIC_DELETED", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_QUEUE", array());
                        echo "\">";
                        echo (isset($context["DELETED_IMG"]) ? $context["DELETED_IMG"] : null);
                        echo "</a> ";
                    }
                    // line 74
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "S_TOPIC_REPORTED", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_REPORT", array());
                        echo "\">";
                        echo (isset($context["REPORTED_IMG"]) ? $context["REPORTED_IMG"] : null);
                        echo "</a>";
                    }
                    echo "<br />
\t\t\t\t\t\t\t";
                    // line 75
                    if (twig_length_filter($this->env, $this->getAttribute($context["searchresults"], "pagination", array()))) {
                        // line 76
                        echo "\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                        // line 78
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["searchresults"], "pagination", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                            // line 79
                            echo "\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                                // line 80
                                echo "\t\t\t\t\t\t\t\t\t";
                            } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                                echo "<li class=\"active\"><span>";
                                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                            } elseif ($this->getAttribute(                            // line 81
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                                echo "<li class=\"ellipsis\"><span>";
                                echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                                echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                            } elseif ($this->getAttribute(                            // line 82
$context["pagination"], "S_IS_NEXT", array())) {
                                // line 83
                                echo "\t\t\t\t\t\t\t\t\t";
                            } else {
                                echo "<li><a href=\"";
                                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                                echo "\">";
                                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 85
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 86
                        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 89
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "S_HAS_POLL", array())) {
                        echo (isset($context["POLL_IMG"]) ? $context["POLL_IMG"] : null);
                        echo " ";
                    }
                    // line 90
                    echo "\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_AUTHOR_FULL", array());
                    echo " &raquo; ";
                    echo $this->getAttribute($context["searchresults"], "FIRST_POST_TIME", array());
                    echo " &raquo; ";
                    echo $this->env->getExtension('phpbb')->lang("IN");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "FORUM_TITLE", array());
                    echo "</a>
\t\t\t\t\t\t\t";
                    // line 91
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('vse_topicpreview', '__main__'));
                    $this->env->loadTemplate('@vse_topicpreview/event/topiclist_row_append.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    // line 92
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"posts\">";
                    // line 95
                    echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", array());
                    echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
                    // line 96
                    echo $this->getAttribute($context["searchresults"], "TOPIC_VIEWS", array());
                    echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>
\t\t\t\t\t\t";
                    // line 98
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["searchresults"], "LAST_POST_AUTHOR_FULL", array());
                    echo "
\t\t\t\t\t\t";
                    // line 99
                    if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_LAST_POST", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                        echo "\">";
                        echo (isset($context["LAST_POST_IMG"]) ? $context["LAST_POST_IMG"] : null);
                        echo "</a> ";
                    }
                    echo "<br />";
                    echo $this->getAttribute($context["searchresults"], "LAST_POST_TIME", array());
                    echo "<br /> </span>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                    // line 103
                    // line 104
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "\t\t</ul>

\t\t</div>
\t</div>
\t";
            } else {
                // line 110
                echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 112
                echo $this->env->getExtension('phpbb')->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 116
            echo "
";
        } else {
            // line 118
            echo "
\t";
            // line 119
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                // line 120
                echo "\t\t";
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('paybas_rankpoststyling', '__main__'));
                $this->env->loadTemplate('@paybas_rankpoststyling/event/search_results_post_before.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                // line 121
                echo "\t\t<div class=\"search post ";
                if (($this->getAttribute($context["searchresults"], "S_ROW_COUNT", array()) % 2 == 1)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if ($this->getAttribute($context["searchresults"], "S_POST_REPORTED", array())) {
                    echo " reported";
                }
                echo "\">
\t\t\t<div class=\"inner\">

\t";
                // line 124
                if ($this->getAttribute($context["searchresults"], "S_IGNORE_POST", array())) {
                    // line 125
                    echo "\t\t<div class=\"postbody\">
\t\t\t";
                    // line 126
                    echo $this->getAttribute($context["searchresults"], "L_IGNORE_POST", array());
                    echo "
\t\t</div>
\t";
                } else {
                    // line 129
                    echo "\t\t<dl class=\"postprofile\">
\t\t\t";
                    // line 130
                    // line 131
                    echo "\t\t\t<dt class=\"author\">";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["searchresults"], "POST_AUTHOR_FULL", array());
                    echo "</dt>
\t\t\t<dd class=\"search-result-date\">";
                    // line 132
                    echo $this->getAttribute($context["searchresults"], "POST_DATE", array());
                    echo "</dd>
\t\t\t<dd>";
                    // line 133
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "FORUM_TITLE", array());
                    echo "</a></dd>
\t\t\t<dd>";
                    // line 134
                    echo $this->env->getExtension('phpbb')->lang("TOPIC");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", array());
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_TITLE", array());
                    echo "</a></dd>
\t\t\t<dd>";
                    // line 135
                    echo $this->env->getExtension('phpbb')->lang("REPLIES");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", array());
                    echo "</strong></dd>
\t\t\t<dd>";
                    // line 136
                    echo $this->env->getExtension('phpbb')->lang("VIEWS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_VIEWS", array());
                    echo "</strong></dd>
\t\t\t";
                    // line 137
                    // line 138
                    echo "\t\t</dl>

\t\t<div class=\"postbody\">
\t\t\t<h3><a href=\"";
                    // line 141
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_POST", array());
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "POST_SUBJECT", array());
                    echo "</a></h3>
\t\t\t<div class=\"content\">";
                    // line 142
                    echo $this->getAttribute($context["searchresults"], "MESSAGE", array());
                    echo "</div>
\t\t</div>
\t";
                }
                // line 145
                echo "
\t";
                // line 146
                if ( !$this->getAttribute($context["searchresults"], "S_IGNORE_POST", array())) {
                    // line 147
                    echo "\t\t<ul class=\"searchresults\">
\t\t\t<li ><a href=\"";
                    // line 148
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_POST", array());
                    echo "\" class=\"arrow-";
                    echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("JUMP_TO_POST");
                    echo "</a></li>
\t\t</ul>
\t";
                }
                // line 151
                echo "
\t\t\t</div>
\t\t</div>
\t\t";
                // line 154
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('paybas_rankpoststyling', '__main__'));
                $this->env->loadTemplate('@paybas_rankpoststyling/event/search_results_post_after.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                // line 155
                echo "\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 156
                echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 158
                echo $this->env->getExtension('phpbb')->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 163
        echo "
<div class=\"action-bar bottom\">
\t";
        // line 165
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array())) && ((isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null) || (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null)))) {
            // line 166
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null);
            echo "\">
\t\t";
            // line 167
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "search_results.html", 167)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 168
            echo "\t</form>
\t";
        }
        // line 170
        echo "
\t<div class=\"pagination\">
\t\t";
        // line 172
        echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
        echo "
\t\t";
        // line 173
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 174
            echo "\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "search_results.html", 174)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 175
            echo "\t\t";
        } else {
            // line 176
            echo "\t\t\t&bull; ";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "
\t\t";
        }
        // line 178
        echo "\t</div>
</div>

";
        // line 181
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "search_results.html", 181)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 182
        echo "
";
        // line 183
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_results.html", 183)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_results.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  682 => 183,  679 => 182,  667 => 181,  662 => 178,  656 => 176,  653 => 175,  640 => 174,  638 => 173,  634 => 172,  630 => 170,  626 => 168,  614 => 167,  609 => 166,  607 => 165,  603 => 163,  592 => 158,  588 => 156,  583 => 155,  578 => 154,  573 => 151,  563 => 148,  560 => 147,  558 => 146,  555 => 145,  549 => 142,  543 => 141,  538 => 138,  537 => 137,  530 => 136,  523 => 135,  514 => 134,  505 => 133,  501 => 132,  494 => 131,  493 => 130,  490 => 129,  484 => 126,  481 => 125,  479 => 124,  465 => 121,  459 => 120,  454 => 119,  451 => 118,  447 => 116,  440 => 112,  436 => 110,  429 => 105,  423 => 104,  422 => 103,  405 => 99,  399 => 98,  394 => 96,  390 => 95,  385 => 92,  380 => 91,  365 => 90,  359 => 89,  354 => 86,  348 => 85,  338 => 83,  336 => 82,  330 => 81,  323 => 80,  320 => 79,  316 => 78,  312 => 76,  310 => 75,  299 => 74,  290 => 73,  282 => 72,  273 => 71,  264 => 70,  263 => 69,  259 => 67,  253 => 66,  242 => 65,  238 => 64,  229 => 63,  227 => 62,  223 => 61,  214 => 55,  210 => 54,  206 => 53,  202 => 52,  194 => 46,  192 => 45,  189 => 44,  187 => 43,  184 => 42,  179 => 39,  173 => 37,  170 => 36,  157 => 35,  155 => 34,  151 => 33,  148 => 32,  147 => 31,  144 => 30,  132 => 25,  126 => 24,  122 => 23,  117 => 21,  114 => 20,  112 => 19,  108 => 17,  106 => 16,  105 => 15,  102 => 14,  90 => 12,  80 => 10,  78 => 9,  75 => 8,  69 => 7,  60 => 6,  51 => 5,  35 => 4,  32 => 3,  31 => 2,  19 => 1,);
    }
}
