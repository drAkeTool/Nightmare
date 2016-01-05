<?php

/* @pico_reputation/event/viewtopic_body_post_buttons_before.html */
class __TwigTemplate_4a3352c620517913785049af585f86597033a64dca86242e8bbab2f20db17586 extends Twig_Template
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
        if (((isset($context["S_REPUTATION"]) ? $context["S_REPUTATION"] : null) && (isset($context["S_FORUM_REPUTATION"]) ? $context["S_FORUM_REPUTATION"] : null))) {
            // line 2
            echo "\t";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_RATE_POST", array())) {
                // line 3
                echo "\t\t<li data-skip-responsive=\"true\">
\t\t\t<a href=\"";
                // line 4
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_RATE_POST_POSITIVE", array());
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RS_RATE_POST_POSITIVE", array());
                echo "\" class=\"button icon-button rate-good-icon";
                if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_VOTE_CLASS", array())) {
                    echo " ";
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_VOTE_CLASS", array());
                }
                echo "\" data-referer=\"_referer=";
                echo (isset($context["U_REPUTATION_REFERER"]) ? $context["U_REPUTATION_REFERER"] : null);
                echo "\"><span>";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RS_RATE_POST_POSITIVE", array());
                echo "</span></a>
\t\t</li>
\t";
            }
            // line 7
            echo "\t";
            if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_RATE_POST", array()) && $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_RATE_POST_NEGATIVE", array()))) {
                // line 8
                echo "\t\t<li data-skip-responsive=\"true\">
\t\t\t<a href=\"";
                // line 9
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_RATE_POST_NEGATIVE", array());
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RS_RATE_POST_NEGATIVE", array());
                echo "\" class=\"button icon-button rate-bad-icon";
                if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_VOTE_CLASS", array())) {
                    echo " ";
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_VOTE_CLASS", array());
                }
                echo "\" data-referer=\"_referer=";
                echo (isset($context["U_REPUTATION_REFERER"]) ? $context["U_REPUTATION_REFERER"] : null);
                echo "\"><span>";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RS_RATE_POST_NEGATIVE", array());
                echo "</span></a>
\t\t</li>
\t";
            }
            // line 12
            echo "\t<li data-skip-responsive=\"true\">
\t\t";
            // line 13
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_VIEW_REPUTATION", array())) {
                // line 14
                echo "\t\t\t<a href=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_VIEW_POST_REPUTATION", array());
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RS_RATE_POST_POSITIVE", array());
                echo "\" class=\"button post-reputation ";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_REPUTATION_CLASS", array());
                echo "\" data-referer=\"_referer=";
                echo (isset($context["U_REPUTATION_REFERER"]) ? $context["U_REPUTATION_REFERER"] : null);
                echo "\"><span>";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_REPUTATION", array());
                echo "</span></a>
\t\t";
            } else {
                // line 16
                echo "\t\t\t<div title=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RS_RATE_POST_POSITIVE", array());
                echo "\" class=\"button post-reputation ";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_REPUTATION_CLASS", array());
                echo " guest\" data-referer=\"_referer=";
                echo (isset($context["U_REPUTATION_REFERER"]) ? $context["U_REPUTATION_REFERER"] : null);
                echo "\"><span>";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_REPUTATION", array());
                echo "</span></div>
\t\t";
            }
            // line 18
            echo "\t</li>
";
        }
    }

    public function getTemplateName()
    {
        return "@pico_reputation/event/viewtopic_body_post_buttons_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 18,  86 => 16,  72 => 14,  70 => 13,  67 => 12,  50 => 9,  47 => 8,  44 => 7,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
