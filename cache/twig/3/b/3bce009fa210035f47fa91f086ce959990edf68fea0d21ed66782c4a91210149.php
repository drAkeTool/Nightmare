<?php

/* @zoddo_postmodels/event/posting_editor_subject_after.html */
class __TwigTemplate_3bce009fa210035f47fa91f086ce959990edf68fea0d21ed66782c4a91210149 extends Twig_Template
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
        if (((isset($context["S_AUTH_MODEL"]) ? $context["S_AUTH_MODEL"] : null) && (isset($context["S_TOTAL_MODEL"]) ? $context["S_TOTAL_MODEL"] : null))) {
            // line 2
            echo "<dl style=\"clear: left;\">
    <dt><label for=\"post_model\">";
            // line 3
            echo $this->env->getExtension('phpbb')->lang("MODELS_POST");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
    <dd id=\"models_refresh_id\">";
            // line 4
            if ((isset($context["S_TOTAL_LANGUAGE"]) ? $context["S_TOTAL_LANGUAGE"] : null)) {
                echo (isset($context["S_LANGUAGE"]) ? $context["S_LANGUAGE"] : null);
                echo "&nbsp;";
            }
            echo (isset($context["S_POST_MODEL"]) ? $context["S_POST_MODEL"] : null);
            echo "&nbsp;";
            echo (isset($context["BUTTON"]) ? $context["BUTTON"] : null);
            echo "</dd>
</dl>
";
        }
    }

    public function getTemplateName()
    {
        return "@zoddo_postmodels/event/posting_editor_subject_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
