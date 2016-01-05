<?php

/* @paybas_pbwow/event/overall_header_head_append.html */
class __TwigTemplate_387e7da2ab8290d1682e5e2ac403871ea32f7fa2d26246b3bd240ba069210210 extends Twig_Template
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
        if ((isset($context["S_PBLOGO"]) ? $context["S_PBLOGO"] : null)) {
            // line 2
            echo "<style>
#logo {
\tbackground: url(\"";
            // line 4
            echo (isset($context["PBLOGO_SRC"]) ? $context["PBLOGO_SRC"] : null);
            echo "\") no-repeat 50% 50%;
\twidth: ";
            // line 5
            echo (isset($context["PBLOGO_WIDTH"]) ? $context["PBLOGO_WIDTH"] : null);
            echo "px;
\theight: ";
            // line 6
            echo (isset($context["PBLOGO_HEIGHT"]) ? $context["PBLOGO_HEIGHT"] : null);
            echo "px;
\t";
            // line 7
            if ((isset($context["PBLOGO_MARGINS"]) ? $context["PBLOGO_MARGINS"] : null)) {
                echo " margin: ";
                echo (isset($context["PBLOGO_MARGINS"]) ? $context["PBLOGO_MARGINS"] : null);
                echo ";";
            }
            // line 8
            echo "}

@media screen and (max-width: 859px) {
\t#logo {
\t\tbackground-size: 100% 100%;
\t\twidth: ";
            // line 13
            echo (isset($context["PBLOGO_WIDTH_MOB"]) ? $context["PBLOGO_WIDTH_MOB"] : null);
            echo "px;
\t\theight: ";
            // line 14
            echo (isset($context["PBLOGO_HEIGHT_MOB"]) ? $context["PBLOGO_HEIGHT_MOB"] : null);
            echo "px;
\t}
}
</style>
";
        }
    }

    public function getTemplateName()
    {
        return "@paybas_pbwow/event/overall_header_head_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  50 => 13,  43 => 8,  37 => 7,  33 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
