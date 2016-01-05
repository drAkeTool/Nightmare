<?php

/* @dmzx_loadingindicator/event/overall_header_body_before.html */
class __TwigTemplate_fd7cb9db208a5f5f6c93aba792e42e7443532934d34622140ff273938cb0fef2 extends Twig_Template
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
        echo "<div id=\"loading-indicator\">
   <span>";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("LOADINGINDICATOR");
        echo "</span>
</div>";
    }

    public function getTemplateName()
    {
        return "@dmzx_loadingindicator/event/overall_header_body_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
