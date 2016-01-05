<?php

/* @pico_reputation/event/viewtopic_body_postrow_custom_fields_before.html */
class __TwigTemplate_f5e53b8c33aa7b9587e0ccd72d1bbfc7917405342d6782d8ea8228b756ed84c8 extends Twig_Template
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
        if (((isset($context["S_REPUTATION"]) ? $context["S_REPUTATION"] : null) && $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_POST_AUTHOR", array()))) {
            // line 2
            echo "\t<dd id=\"profile-";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_ID", array());
            echo "\" class=\"user-reputation\"><strong>";
            echo $this->env->getExtension('phpbb')->lang("REPUTATION");
            echo ":</strong> ";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_VIEW_REPUTATION", array())) {
                echo "<a href=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_VIEW_USER_REPUTATION", array());
                echo "\" data-referer=\"_referer=";
                echo (isset($context["U_REPUTATION_REFERER"]) ? $context["U_REPUTATION_REFERER"] : null);
                echo "\">";
            }
            echo "<span>";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "USER_REPUTATION", array());
            echo "</span>";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_VIEW_REPUTATION", array())) {
                echo "</a>";
            }
            echo "</dd>
";
        }
    }

    public function getTemplateName()
    {
        return "@pico_reputation/event/viewtopic_body_postrow_custom_fields_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
