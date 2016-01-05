<?php

/* @paybas_rankpoststyling/event/search_results_post_before.html */
class __TwigTemplate_eb2c362d0925e5670f749cae057ff84e19e3eed1bac7e93b72ef53d97ef15d27 extends Twig_Template
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
        if ($this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "RANK_STYLE", array())) {
            echo " ";
            echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "RANK_STYLE", array());
        }
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "@paybas_rankpoststyling/event/search_results_post_before.html";
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
