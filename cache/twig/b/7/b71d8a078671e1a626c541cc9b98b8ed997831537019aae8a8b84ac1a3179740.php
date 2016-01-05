<?php

/* index_body.html */
class __TwigTemplate_b71d8a078671e1a626c541cc9b98b8ed997831537019aae8a8b84ac1a3179740 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div class=\"fancy-index\"></div>
";
        // line 4
        if ((isset($context["RECENT_TOPICS_DISPLAY"]) ? $context["RECENT_TOPICS_DISPLAY"] : null)) {
            echo "<div class=\"index-right\">";
        }
        // line 5
        echo "
\t";
        // line 6
        // line 7
        echo "
";
        // line 8
        if ((isset($context["RECENT_TOPICS_DISPLAY"]) ? $context["RECENT_TOPICS_DISPLAY"] : null)) {
            // line 9
            echo "\t";
            if (((isset($context["ADS_INDEX_CODE"]) ? $context["ADS_INDEX_CODE"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                // line 10
                echo "\t<div class=\"misc-block advertisement\">";
                echo (isset($context["ADS_INDEX_CODE"]) ? $context["ADS_INDEX_CODE"] : null);
                echo "</div>
\t";
            }
            // line 12
            echo "</div><!-- /.index-right -->
<div class=\"index-left\">
";
        }
        // line 15
        echo "
";
        // line 16
        // line 17
        echo "
";
        // line 18
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 18)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 19
        echo "
";
        // line 20
        // line 21
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('pico_reputation', '__main__'));
        $this->env->loadTemplate('@pico_reputation/event/index_body_stat_blocks_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 22
        echo "
";
        // line 23
        if ((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)) {
            // line 24
            echo "\t<div class=\"stat-block online-list\">
\t\t";
            // line 25
            if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                echo "<h3><a href=\"";
                echo (isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                echo "</a></h3>";
            } else {
                echo "<h3>";
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                echo "</h3>";
            }
            // line 26
            echo "\t\t<p>
\t\t\t";
            // line 27
            // line 28
            echo "\t\t\t";
            echo (isset($context["TOTAL_USERS_ONLINE"]) ? $context["TOTAL_USERS_ONLINE"] : null);
            echo " (";
            echo $this->env->getExtension('phpbb')->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            echo (isset($context["RECORD_USERS"]) ? $context["RECORD_USERS"] : null);
            echo "<br /> <br />";
            echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
            echo "
\t\t\t";
            // line 29
            if ((isset($context["LEGEND"]) ? $context["LEGEND"] : null)) {
                echo "<br /><em>";
                echo $this->env->getExtension('phpbb')->lang("LEGEND");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["LEGEND"]) ? $context["LEGEND"] : null);
                echo "</em>";
            }
            // line 30
            echo "\t\t\t";
            // line 31
            echo "\t\t\t";
            if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                echo "<a class=\"online-pagelink\" href=\"";
                echo (isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                echo "\">";
                echo (isset($context["LAST_POST_IMG"]) ? $context["LAST_POST_IMG"] : null);
                echo "</a>";
            }
            // line 32
            echo "\t\t</p>
\t</div>
";
        }
        // line 35
        echo "
";
        // line 36
        if ((isset($context["S_DISPLAY_BIRTHDAY_LIST"]) ? $context["S_DISPLAY_BIRTHDAY_LIST"] : null)) {
            // line 37
            echo "\t<div class=\"stat-block birthday-list\">
\t\t<h3>";
            // line 38
            echo $this->env->getExtension('phpbb')->lang("BIRTHDAYS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 40
            // line 41
            echo "\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()))) {
                echo $this->env->getExtension('phpbb')->lang("CONGRATULATIONS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <strong>";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo $this->getAttribute($context["birthdays"], "USERNAME", array());
                    if (($this->getAttribute($context["birthdays"], "AGE", array()) !== "")) {
                        echo " (";
                        echo $this->getAttribute($context["birthdays"], "AGE", array());
                        echo ")";
                    }
                    if ( !$this->getAttribute($context["birthdays"], "S_LAST_ROW", array())) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->env->getExtension('phpbb')->lang("NO_BIRTHDAYS");
            }
            // line 42
            echo "\t\t\t";
            // line 43
            echo "\t\t</p>
\t</div>
";
        }
        // line 46
        echo "
";
        // line 47
        if ((isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null)) {
            // line 48
            echo "\t<div class=\"stat-block statistics\">
\t\t<h3>";
            // line 49
            echo $this->env->getExtension('phpbb')->lang("STATISTICS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 51
            // line 52
            echo "\t\t\t";
            echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
            echo " &bull; ";
            echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
            echo " &bull; ";
            echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
            echo " &bull; ";
            echo (isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null);
            echo "
\t\t\t";
            // line 53
            // line 54
            echo "\t\t</p>
\t</div>
";
        }
        // line 57
        echo "
";
        // line 58
        // line 59
        echo "
";
        // line 60
        if ((isset($context["RECENT_TOPICS_DISPLAY"]) ? $context["RECENT_TOPICS_DISPLAY"] : null)) {
            echo "</div><!-- /.index-left -->";
        }
        // line 61
        echo "<div class=\"clear\"></div>

";
        // line 63
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 63)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 63,  241 => 61,  237 => 60,  234 => 59,  233 => 58,  230 => 57,  225 => 54,  224 => 53,  213 => 52,  212 => 51,  207 => 49,  204 => 48,  202 => 47,  199 => 46,  194 => 43,  192 => 42,  166 => 41,  165 => 40,  160 => 38,  157 => 37,  155 => 36,  152 => 35,  147 => 32,  136 => 31,  134 => 30,  125 => 29,  114 => 28,  113 => 27,  110 => 26,  98 => 25,  95 => 24,  93 => 23,  90 => 22,  85 => 21,  84 => 20,  81 => 19,  69 => 18,  66 => 17,  65 => 16,  62 => 15,  57 => 12,  51 => 10,  48 => 9,  46 => 8,  43 => 7,  42 => 6,  39 => 5,  35 => 4,  31 => 2,  19 => 1,);
    }
}
