<?php

/* @paybas_pbwow/event/viewtopic_body_avatar_before.html */
class __TwigTemplate_ecabca941697cf4034185db90982ce989a04615fef4fbf17281a0b8b7fd96876 extends Twig_Template
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
        if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_HAS_PBWOW_AVATAR", array())) {
            // line 2
            echo "<div class=\"icons-frame\">
\t<div class=\"game-icon-a\">
\t\t";
            // line 4
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_WOW_RACE_VALUE_RAW", array())) {
                // line 5
                echo "\t\t<div class=\"icon-wow-";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_WOW_RACE_VALUE_RAW", array());
                if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_PROFILE_PB_WOW_GENDER", array()) && ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_WOW_GENDER_VALUE_RAW", array()) > 1))) {
                    echo " female";
                }
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_WOW_RACE_VALUE", array());
                echo "\"></div>
\t\t";
            } elseif ($this->getAttribute(            // line 6
(isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_DIABLO_CLASS_VALUE_RAW", array())) {
                // line 7
                echo "\t\t<div class=\"icon-diablo-";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_DIABLO_CLASS_VALUE_RAW", array());
                if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_PROFILE_PB_DIABLO_GENDER", array()) && ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_DIABLO_GENDER_VALUE_RAW", array()) > 1))) {
                    echo " female";
                }
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_DIABLO_CLASS_VALUE", array());
                echo "\"></div>
\t\t";
            } elseif ($this->getAttribute(            // line 8
(isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_WILDSTAR_RACE_VALUE_RAW", array())) {
                // line 9
                echo "\t\t<div class=\"icon-wildstar-";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_WILDSTAR_RACE_VALUE_RAW", array());
                if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_PROFILE_PB_WILDSTAR_GENDER", array()) && ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_WILDSTAR_GENDER_VALUE_RAW", array()) > 1))) {
                    echo " female";
                }
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_WILDSTAR_RACE_VALUE", array());
                echo "\"></div>
\t\t";
            }
            // line 11
            echo "\t</div>
\t<div class=\"game-icon-b\">
\t\t";
            // line 13
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_WOW_CLASS_VALUE_RAW", array())) {
                // line 14
                echo "\t\t<div class=\"icon-wow-";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_WOW_CLASS_VALUE_RAW", array());
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_WOW_CLASS_VALUE", array());
                echo "\"></div>
\t\t";
            } elseif ($this->getAttribute(            // line 15
(isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_DIABLO_FOLLOWER_VALUE_RAW", array())) {
                // line 16
                echo "\t\t<div class=\"icon-diablo-";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_DIABLO_FOLLOWER_VALUE_RAW", array());
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_DIABLO_FOLLOWER_VALUE", array());
                echo "\"></div>
\t\t";
            } elseif ($this->getAttribute(            // line 17
(isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_WILDSTAR_CLASS_VALUE_RAW", array())) {
                // line 18
                echo "\t\t<div class=\"icon-wildstar-";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_WILDSTAR_CLASS_VALUE_RAW", array());
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_WILDSTAR_CLASS_VALUE", array());
                echo "\"></div>
\t\t";
            }
            // line 20
            echo "\t</div>
\t<div class=\"game-icon-c\">
\t\t";
            // line 22
            if (((isset($context["S_SMALL_RANKS"]) ? $context["S_SMALL_RANKS"] : null) && $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTS_RANK_IMG", array()))) {
                // line 23
                echo "\t\t<div class=\"\" style=\"background-image: url('";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTS_RANK_IMG_SRC", array());
                echo "');\" title=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTS_RANK_TITLE", array());
                echo "\"></div>
\t\t";
            } elseif (($this->getAttribute(            // line 24
(isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_WOW_RACE_VALUE_RAW", array()) && $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PBFACTION", array()))) {
                // line 25
                echo "\t\t<div class=\"icon-wow-";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PBFACTION", array());
                echo "\"></div>
\t\t";
            } elseif (($this->getAttribute(            // line 26
(isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_WILDSTAR_RACE_VALUE_RAW", array()) && $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PBFACTION", array()))) {
                // line 27
                echo "\t\t<div class=\"icon-wildstar-";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PBFACTION", array());
                echo "\"></div>
\t\t";
            }
            // line 29
            echo "\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@paybas_pbwow/event/viewtopic_body_avatar_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 29,  116 => 27,  114 => 26,  109 => 25,  107 => 24,  100 => 23,  98 => 22,  94 => 20,  86 => 18,  84 => 17,  77 => 16,  75 => 15,  68 => 14,  66 => 13,  62 => 11,  51 => 9,  49 => 8,  39 => 7,  37 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
