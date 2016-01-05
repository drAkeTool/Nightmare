<?php

/* @paybas_breadcrumbmenu/event/overall_footer_after.html */
class __TwigTemplate_43650421d7e3a858cebb1abfaca13936aab271438ec6cefe1e4fc404fb810e32 extends Twig_Template
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
        if ((isset($context["BREADCRUMB_MENU"]) ? $context["BREADCRUMB_MENU"] : null)) {
            // line 2
            echo "<div id=\"breadcrumb-menu\">
\t<ul id=\"crumb-index\" class=\"hidden\">
\t\t";
            // line 4
            echo (isset($context["BREADCRUMB_MENU"]) ? $context["BREADCRUMB_MENU"] : null);
            echo "

\t\t";
            // line 6
            if ((isset($context["U_NEWSPAGE"]) ? $context["U_NEWSPAGE"] : null)) {
                // line 7
                echo "\t\t\t<li";
                if (array_key_exists("NEWS_TITLE", $context)) {
                    echo " class=\"current\"";
                }
                echo "><a href=\"";
                echo (isset($context["U_NEWSPAGE"]) ? $context["U_NEWSPAGE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("NEWSPAGE");
                echo "</a></li>
\t\t";
            }
            // line 9
            echo "
\t\t";
            // line 10
            $context["page_switches"] = array(0 => (isset($context["S_OVERALL_HEADER_NAVIGATION_PREPEND"]) ? $context["S_OVERALL_HEADER_NAVIGATION_PREPEND"] : null), 1 => (isset($context["S_OVERALL_HEADER_NAVIGATION_APPEND"]) ? $context["S_OVERALL_HEADER_NAVIGATION_APPEND"] : null), 2 => (isset($context["S_OVERALL_FOOTER_TEAMLINK_AFTER"]) ? $context["S_OVERALL_FOOTER_TEAMLINK_AFTER"] : null), 3 => (isset($context["S_OVERALL_FOOTER_TEAMLINK_BEFORE"]) ? $context["S_OVERALL_FOOTER_TEAMLINK_BEFORE"] : null), 4 => (isset($context["S_OVERALL_FOOTER_TIMEZONE_AFTER"]) ? $context["S_OVERALL_FOOTER_TIMEZONE_AFTER"] : null), 5 => (isset($context["S_OVERALL_FOOTER_TIMEZONE_BEFORE"]) ? $context["S_OVERALL_FOOTER_TIMEZONE_BEFORE"] : null));
            // line 11
            echo "\t\t";
            $context["page_locations"] = array(0 => $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "overall_header_navigation_prepend_links", array()), 1 => $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "overall_header_navigation_append_links", array()), 2 => $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "overall_footer_teamlink_after_links", array()), 3 => $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "overall_footer_teamlink_before_links", array()), 4 => $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "overall_footer_timezone_after_links", array()), 5 => $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "overall_footer_timezone_before_links_links", array()));
            // line 12
            echo "\t\t";
            $context["pages_included"] = array();
            // line 13
            echo "
\t\t";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["page_locations"]) ? $context["page_locations"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 15
                echo "\t\t\t";
                if ($this->getAttribute((isset($context["page_switches"]) ? $context["page_switches"] : null), $this->getAttribute($context["loop"], "index0", array()), array(), "array")) {
                    // line 16
                    echo "\t\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($context["location"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                        if (!twig_in_filter($this->getAttribute($context["link"], "LINK_ROUTE", array()), (isset($context["pages_included"]) ? $context["pages_included"] : null))) {
                            // line 17
                            echo "\t\t\t\t\t<li";
                            if (((isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null) == $this->getAttribute($context["link"], "LINK_TITLE", array()))) {
                                echo " class=\"current\"";
                            }
                            echo "><a href=\"";
                            echo $this->getAttribute($context["link"], "U_LINK_URL", array());
                            echo "\">";
                            echo $this->getAttribute($context["link"], "LINK_TITLE", array());
                            echo "</a></li>
\t\t\t\t\t";
                            // line 18
                            $context["pages_included"] = twig_array_merge((isset($context["pages_included"]) ? $context["pages_included"] : null), array(0 => $this->getAttribute($context["link"], "LINK_ROUTE", array())));
                            // line 19
                            echo "\t\t\t\t";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    echo "\t\t\t";
                }
                // line 21
                echo "\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "
\t\t";
            // line 23
            if ((isset($context["S_BOARDRULES_LINK_ENABLED"]) ? $context["S_BOARDRULES_LINK_ENABLED"] : null)) {
                // line 24
                echo "\t\t\t<li";
                if ((isset($context["S_BOARD_RULES"]) ? $context["S_BOARD_RULES"] : null)) {
                    echo " class=\"current\"";
                }
                echo "><a href=\"";
                echo (isset($context["U_BOARDRULES"]) ? $context["U_BOARDRULES"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("BOARDRULES");
                echo "</a></li>
\t\t";
            }
            // line 26
            echo "\t</ul>
</div>

";
            // line 29
            $asset_file = "@paybas_breadcrumbmenu/jquery-ui-1.11.2.custom.min.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('42');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
            // line 30
            $asset_file = "@paybas_breadcrumbmenu/breadcrumb-menu.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('42');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        }
    }

    public function getTemplateName()
    {
        return "@paybas_breadcrumbmenu/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 30,  143 => 29,  138 => 26,  126 => 24,  124 => 23,  121 => 22,  107 => 21,  104 => 20,  97 => 19,  95 => 18,  84 => 17,  78 => 16,  75 => 15,  58 => 14,  55 => 13,  52 => 12,  49 => 11,  47 => 10,  44 => 9,  32 => 7,  30 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
