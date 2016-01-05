<?php

/* @paybas_pbwow/event/viewtopic_body_avatar_after.html */
class __TwigTemplate_85186c0f8c8d54854a90832761517580fc655f114666c580e2668eb7e5b2901c extends Twig_Template
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
        if ((((isset($context["S_SMALL_RANKS"]) ? $context["S_SMALL_RANKS"] : null) && $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_IMG", array())) && ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_HAS_MULTIPLE_RANKS", array()) ||  !$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_HAS_PBWOW_AVATAR", array())))) {
            // line 2
            echo "<div class=\"rank-icon\">
\t";
            // line 3
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_IMG", array());
            echo "
</div>
";
        } elseif ((($this->getAttribute(        // line 5
(isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_AVATAR", array()) && $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_PROFILE_PB_WOW_LEVEL", array())) && ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_WOW_LEVEL_VALUE", array()) != 0))) {
            // line 6
            echo "<div class=\"rank-icon\">
\t<span>";
            // line 7
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_PB_WOW_LEVEL_VALUE", array());
            echo "</span>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@paybas_pbwow/event/viewtopic_body_avatar_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  31 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
