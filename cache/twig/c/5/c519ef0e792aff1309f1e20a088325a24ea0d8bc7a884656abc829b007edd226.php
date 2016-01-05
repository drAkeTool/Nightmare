<?php

/* @paybas_rankpoststyling/event/memberlist_view_content_prepend.html */
class __TwigTemplate_c519ef0e792aff1309f1e20a088325a24ea0d8bc7a884656abc829b007edd226 extends Twig_Template
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
        echo "<div ";
        if ((isset($context["RANK_STYLE"]) ? $context["RANK_STYLE"] : null)) {
            echo " class=\"";
            echo (isset($context["RANK_STYLE"]) ? $context["RANK_STYLE"] : null);
            echo "\"";
        }
        echo ">
";
    }

    public function getTemplateName()
    {
        return "@paybas_rankpoststyling/event/memberlist_view_content_prepend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
