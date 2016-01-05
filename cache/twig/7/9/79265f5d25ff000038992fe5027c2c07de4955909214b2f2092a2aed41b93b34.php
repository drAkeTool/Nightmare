<?php

/* @vse_similartopics/event/viewtopic_body_footer_before.html */
class __TwigTemplate_79265f5d25ff000038992fe5027c2c07de4955909214b2f2092a2aed41b93b34 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "similar", array()))) {
            // line 2
            echo "<div class=\"forumbg\">

\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t<dt><div class=\"list-inner\">";
            // line 8
            echo $this->env->getExtension('phpbb')->lang("SIMILAR_TOPICS");
            echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("REPLIES");
            echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
            // line 10
            echo $this->env->getExtension('phpbb')->lang("VIEWS");
            echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("LAST_POST");
            echo "</span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist topics\">

\t\t";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "similar", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["similar"]) {
                // line 18
                echo "\t\t\t";
                // line 19
                echo "\t\t\t<li class=\"row";
                if (($this->getAttribute($context["similar"], "S_ROW_COUNT", array()) % 2 == 0)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                echo "\">
\t\t\t\t<dl class=\"icon ";
                // line 20
                echo $this->getAttribute($context["similar"], "TOPIC_IMG_STYLE", array());
                echo "\">
\t\t\t\t\t<dt ";
                // line 21
                if ($this->getAttribute($context["similar"], "TOPIC_ICON_IMG", array())) {
                    echo "style=\"background-image: url(";
                    echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                    echo $this->getAttribute($context["similar"], "TOPIC_ICON_IMG", array());
                    echo "); background-repeat: no-repeat;\"";
                }
                echo " title=\"";
                echo $this->getAttribute($context["similar"], "TOPIC_FOLDER_IMG_ALT", array());
                echo "\">
\t\t\t\t\t\t";
                // line 22
                if (($this->getAttribute($context["similar"], "S_UNREAD_TOPIC", array()) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["similar"], "U_NEWEST_POST", array());
                    echo "\" class=\"icon-link\"></a>";
                }
                // line 23
                echo "\t\t\t\t\t\t<div class=\"list-inner\">

\t\t\t\t\t\t\t";
                // line 25
                // line 26
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["similar"], "S_UNREAD_TOPIC", array()) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["similar"], "U_NEWEST_POST", array());
                    echo "\">";
                    echo (isset($context["NEWEST_POST_IMG"]) ? $context["NEWEST_POST_IMG"] : null);
                    echo "</a> ";
                }
                // line 27
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["similar"], "U_VIEW_TOPIC", array());
                echo "\" class=\"topictitle\">";
                echo $this->getAttribute($context["similar"], "TOPIC_TITLE", array());
                echo "</a> ";
                echo $this->getAttribute($context["similar"], "ATTACH_ICON_IMG", array());
                echo "
\t\t\t\t\t\t\t";
                // line 28
                if (($this->getAttribute($context["similar"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["similar"], "S_POSTS_UNAPPROVED", array()))) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["similar"], "U_MCP_QUEUE", array());
                    echo "\">";
                    echo $this->getAttribute($context["similar"], "UNAPPROVED_IMG", array());
                    echo "</a> ";
                }
                // line 29
                echo "\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["similar"], "S_TOPIC_REPORTED", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["similar"], "U_MCP_REPORT", array());
                    echo "\">";
                    echo (isset($context["REPORTED_IMG"]) ? $context["REPORTED_IMG"] : null);
                    echo "</a>";
                }
                echo "<br />
\t\t\t\t\t\t\t";
                // line 30
                if (twig_length_filter($this->env, $this->getAttribute($context["similar"], "pagination", array()))) {
                    // line 31
                    echo "\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                    // line 33
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["similar"], "pagination", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                        // line 34
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                            // line 35
                            echo "\t\t\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                            echo "<li class=\"active\"><span>";
                            echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                            echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute(                        // line 36
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                            echo "<li class=\"ellipsis\"><span>";
                            echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                            echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute(                        // line 37
$context["pagination"], "S_IS_NEXT", array())) {
                            // line 38
                            echo "\t\t\t\t\t\t\t\t\t";
                        } else {
                            echo "<li><a href=\"";
                            echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                            echo "\">";
                            echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 40
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 44
                echo "\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["similar"], "S_HAS_POLL", array())) {
                    echo (isset($context["POLL_IMG"]) ? $context["POLL_IMG"] : null);
                    echo " ";
                }
                // line 45
                echo "\t\t\t\t\t\t\t";
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["similar"], "TOPIC_AUTHOR_FULL", array());
                echo " &raquo; ";
                echo $this->getAttribute($context["similar"], "FIRST_POST_TIME", array());
                echo " &raquo; ";
                echo $this->env->getExtension('phpbb')->lang("IN");
                echo " <a href=\"";
                echo $this->getAttribute($context["similar"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->getAttribute($context["similar"], "FORUM_TITLE", array());
                echo "</a>
\t\t\t\t\t\t\t";
                // line 46
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('vse_topicpreview', '__main__'));
                $this->env->loadTemplate('@vse_topicpreview/event/topiclist_row_append.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                // line 47
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"posts\">";
                // line 50
                echo $this->getAttribute($context["similar"], "TOPIC_REPLIES", array());
                echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
                // line 51
                echo $this->getAttribute($context["similar"], "TOPIC_VIEWS", array());
                echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>
\t\t\t\t\t\t";
                // line 53
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["similar"], "LAST_POST_AUTHOR_FULL", array());
                echo "
\t\t\t\t\t\t";
                // line 54
                if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["similar"], "U_LAST_POST", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                    echo "\">";
                    echo (isset($context["LAST_POST_IMG"]) ? $context["LAST_POST_IMG"] : null);
                    echo "</a> ";
                }
                echo "<br />";
                echo $this->getAttribute($context["similar"], "LAST_POST_TIME", array());
                echo "<br /> </span>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                // line 58
                // line 59
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['similar'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "\t\t</ul>

\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@vse_similartopics/event/viewtopic_body_footer_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 60,  241 => 59,  240 => 58,  223 => 54,  217 => 53,  212 => 51,  208 => 50,  203 => 47,  198 => 46,  183 => 45,  177 => 44,  172 => 41,  166 => 40,  156 => 38,  154 => 37,  148 => 36,  141 => 35,  138 => 34,  134 => 33,  130 => 31,  128 => 30,  117 => 29,  109 => 28,  100 => 27,  91 => 26,  90 => 25,  86 => 23,  80 => 22,  69 => 21,  65 => 20,  56 => 19,  54 => 18,  50 => 17,  41 => 11,  37 => 10,  33 => 9,  29 => 8,  21 => 2,  19 => 1,);
    }
}
