<?php

/* @pico_reputation/event/memberlist_view_user_statistics_after.html */
class __TwigTemplate_c14b25ab8366cccc031b8a28c3e28cbf8d52245823d4dc579c1c77242468438d extends Twig_Template
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
        if ((isset($context["S_REPUTATION"]) ? $context["S_REPUTATION"] : null)) {
            // line 2
            echo "\t<dt>";
            echo $this->env->getExtension('phpbb')->lang("REPUTATION");
            echo ":</dt> <dd><span id=\"user-reputation\"><strong>";
            echo (isset($context["USER_REPUTATION"]) ? $context["USER_REPUTATION"] : null);
            echo "</strong></span> [ ";
            if ((isset($context["S_VIEW_REPUTATION"]) ? $context["S_VIEW_REPUTATION"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_VIEW_USER_REPUTATION"]) ? $context["U_VIEW_USER_REPUTATION"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("RS_VIEW_DETAILS");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RS_VIEW_DETAILS");
                echo "</a> | ";
            }
            if ((isset($context["S_RATE_USER"]) ? $context["S_RATE_USER"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_RATE_USER"]) ? $context["U_RATE_USER"] : null);
                echo "\" id=\"rate-user\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("RS_RATE_USER");
                echo "\" data-referer=\"_referer=";
                echo (isset($context["U_RS_REFERER"]) ? $context["U_RS_REFERER"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RS_RATE_USER");
                echo "</a>";
            }
            echo " ]</dd>
";
        }
    }

    public function getTemplateName()
    {
        return "@pico_reputation/event/memberlist_view_user_statistics_after.html";
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
