<?php

/* @phpbb_pages/event/overall_footer_teamlink_after.html */
class __TwigTemplate_a6383e1c7b154420b9e0c7ae2bc1e0b9758a14d92c4a3948625ffffee0f9ff7e extends Twig_Template
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
        // line 2
        if ((isset($context["S_OVERALL_FOOTER_TEAMLINK_BEFORE"]) ? $context["S_OVERALL_FOOTER_TEAMLINK_BEFORE"] : null)) {
            // line 3
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "overall_footer_teamlink_before_links", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["overall_footer_teamlink_before_links"]) {
                // line 4
                echo "\t\t<li class=\"small-icon icon-pages icon-page-";
                echo $this->getAttribute($context["overall_footer_teamlink_before_links"], "LINK_ROUTE", array());
                echo " rightside\"";
                if ($this->getAttribute($context["overall_footer_teamlink_before_links"], "ICON_LINK", array())) {
                    echo " style=\"background-image: url('";
                    echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                    echo "/images/";
                    echo $this->getAttribute($context["overall_footer_teamlink_before_links"], "ICON_LINK", array());
                    echo "');\"";
                }
                echo ">
\t\t\t<a href=\"";
                // line 5
                echo $this->getAttribute($context["overall_footer_teamlink_before_links"], "U_LINK_URL", array());
                echo "\" role=\"menuitem\">";
                echo $this->getAttribute($context["overall_footer_teamlink_before_links"], "LINK_TITLE", array());
                echo "</a>
\t\t</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['overall_footer_teamlink_before_links'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_pages/event/overall_footer_teamlink_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  26 => 4,  21 => 3,  19 => 2,);
    }
}
