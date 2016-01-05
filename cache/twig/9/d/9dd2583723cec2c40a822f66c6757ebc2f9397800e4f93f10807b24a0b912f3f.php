<?php

/* @vinny_shareon/event/viewtopic_body_postrow_post_notices_after.html */
class __TwigTemplate_9dd2583723cec2c40a822f66c6757ebc2f9397800e4f93f10807b24a0b912f3f extends Twig_Template
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
        if ((isset($context["S_SO_STATUS"]) ? $context["S_SO_STATUS"] : null)) {
            // line 2
            echo "\t";
            if ((((isset($context["S_SO_TYPE"]) ? $context["S_SO_TYPE"] : null) == "0") || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_FIRST_ROW", array()))) {
                // line 3
                echo "\t\t<br />
\t\t<ul class=\"share-buttons\">
\t\t\t";
                // line 5
                if ((isset($context["S_SO_FACEBOOK"]) ? $context["S_SO_FACEBOOK"] : null)) {
                    echo "<li>
\t\t\t\t<a href=\"";
                    // line 6
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_FACEBOOK", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("SHARE_ON_FACEBOOK");
                    echo "\" class=\"share-button share-icon-button facebook-icon\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("SHARE_ON_FACEBOOK");
                    echo "</span></a>
\t\t\t</li>";
                }
                // line 8
                echo "
\t\t\t";
                // line 9
                if ((isset($context["S_SO_TWITTER"]) ? $context["S_SO_TWITTER"] : null)) {
                    echo "<li>
\t\t\t\t<a href=\"";
                    // line 10
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_TWITTER", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("SHARE_ON_TWITTER");
                    echo "\" class=\"share-button share-icon-button twitter-icon\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("SHARE_ON_TWITTER");
                    echo "</span></a>
\t\t\t</li>";
                }
                // line 12
                echo "
\t\t\t";
                // line 13
                if ((isset($context["S_SO_TUENTI"]) ? $context["S_SO_TUENTI"] : null)) {
                    echo "<li>
\t\t\t\t<a href=\"";
                    // line 14
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_TUENTI", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("SHARE_ON_TUENTI");
                    echo "\" class=\"share-button share-icon-button tuenti-icon\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("SHARE_ON_TUENTI");
                    echo "</span></a>
\t\t\t</li>";
                }
                // line 16
                echo "
\t\t\t";
                // line 17
                if ((isset($context["S_SO_SONICO"]) ? $context["S_SO_SONICO"] : null)) {
                    echo "<li>
\t\t\t\t<a href=\"";
                    // line 18
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_SONICO", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("SHARE_ON_SONICO");
                    echo "\" class=\"share-button share-icon-button sonico-icon\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("SHARE_ON_SONICO");
                    echo "</span></a>
\t\t\t</li>";
                }
                // line 20
                echo "
\t\t\t";
                // line 21
                if ((isset($context["S_SO_FRIENDFEED"]) ? $context["S_SO_FRIENDFEED"] : null)) {
                    echo "<li>
\t\t\t\t<a href=\"";
                    // line 22
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_FRIENDFEED", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("SHARE_ON_FRIENDFEED");
                    echo "\" class=\"share-button share-icon-button friendfeed-icon\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("SHARE_ON_FRIENDFEED");
                    echo "</span></a>
\t\t\t</li>";
                }
                // line 24
                echo "
\t\t\t";
                // line 25
                if ((isset($context["S_SO_DIGG"]) ? $context["S_SO_DIGG"] : null)) {
                    echo "<li>
\t\t\t\t<a href=\"";
                    // line 26
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_DIGG", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("SHARE_ON_DIGG");
                    echo "\" class=\"share-button share-icon-button digg-icon\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("SHARE_ON_DIGG");
                    echo "</span></a>
\t\t\t</li>";
                }
                // line 28
                echo "
\t\t\t";
                // line 29
                if ((isset($context["S_SO_REDDIT"]) ? $context["S_SO_REDDIT"] : null)) {
                    echo "<li>
\t\t\t\t<a href=\"";
                    // line 30
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_REDDIT", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("SHARE_ON_REDDIT");
                    echo "\" class=\"share-button share-icon-button reddit-icon\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("SHARE_ON_REDDIT");
                    echo "</span></a>
\t\t\t</li>";
                }
                // line 32
                echo "
\t\t\t";
                // line 33
                if ((isset($context["S_SO_DELICIOUS"]) ? $context["S_SO_DELICIOUS"] : null)) {
                    echo "<li>
\t\t\t\t<a href=\"";
                    // line 34
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_DELICIOUS", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("SHARE_ON_DELICIOUS");
                    echo "\" class=\"share-button share-icon-button delicious-icon\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("SHARE_ON_DELICIOUS");
                    echo "</span></a>
\t\t\t</li>";
                }
                // line 36
                echo "
\t\t\t";
                // line 37
                if ((isset($context["S_SO_VK"]) ? $context["S_SO_VK"] : null)) {
                    echo "<li>
\t\t\t\t<a href=\"";
                    // line 38
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_VK", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("SHARE_ON_VK");
                    echo "\" class=\"share-button share-icon-button vk-icon\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("SHARE_ON_VK");
                    echo "</span></a>
\t\t\t</li>";
                }
                // line 40
                echo "
\t\t\t";
                // line 41
                if ((isset($context["S_SO_TUMBLR"]) ? $context["S_SO_TUMBLR"] : null)) {
                    echo "<li>
\t\t\t\t<a href=\"";
                    // line 42
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_TUMBLR", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("SHARE_ON_TUMBLR");
                    echo "\" class=\"share-button share-icon-button tumblr-icon\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("SHARE_ON_TUMBLR");
                    echo "</span></a>
\t\t\t</li>";
                }
                // line 44
                echo "
\t\t\t";
                // line 45
                if ((isset($context["S_SO_GOOGLE"]) ? $context["S_SO_GOOGLE"] : null)) {
                    echo "<li>
\t\t\t\t<a href=\"";
                    // line 46
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_GOOGLE", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("SHARE_ON_GOOGLE");
                    echo "\" class=\"share-button share-icon-button google-icon\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("SHARE_ON_GOOGLE");
                    echo "</span></a>
\t\t\t</li>";
                }
                // line 48
                echo "\t\t</ul>
\t\t<br />
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@vinny_shareon/event/viewtopic_body_postrow_post_notices_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 48,  192 => 46,  188 => 45,  185 => 44,  176 => 42,  172 => 41,  169 => 40,  160 => 38,  156 => 37,  153 => 36,  144 => 34,  140 => 33,  137 => 32,  128 => 30,  124 => 29,  121 => 28,  112 => 26,  108 => 25,  105 => 24,  96 => 22,  92 => 21,  89 => 20,  80 => 18,  76 => 17,  73 => 16,  64 => 14,  60 => 13,  57 => 12,  48 => 10,  44 => 9,  41 => 8,  32 => 6,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
