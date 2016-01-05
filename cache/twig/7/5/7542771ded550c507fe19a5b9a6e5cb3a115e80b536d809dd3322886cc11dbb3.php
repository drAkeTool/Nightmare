<?php

/* @paybas_rankpoststyling/event/viewtopic_body_postrow_post_before.html */
class __TwigTemplate_7542771ded550c507fe19a5b9a6e5cb3a115e80b536d809dd3322886cc11dbb3 extends Twig_Template
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
        echo "<div class=\"post-container";
        if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_STYLE", array())) {
            echo " ";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_STYLE", array());
        }
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "@paybas_rankpoststyling/event/viewtopic_body_postrow_post_before.html";
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
