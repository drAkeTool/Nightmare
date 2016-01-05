<?php

/* @marc_quickedit/event/overall_footer_after.html */
class __TwigTemplate_9ffe6143a88b73a63a8e91954638d5bb90ad1eb894ea22bc4f3a7827137d09fd extends Twig_Template
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
        if (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "viewtopic")) {
            // line 2
            echo "<div style=\"display: none\" data-allow-quickedit=\"";
            echo (isset($context["S_QUICK_EDIT"]) ? $context["S_QUICK_EDIT"] : null);
            echo "\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "@marc_quickedit/event/overall_footer_after.html";
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
