<?php

/* overall_header.html */
class __TwigTemplate_7c6b7d336fa6a038519c29feb66f8792e9b4cb849a80d68dba88db4d6ea58c81 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo "\" lang=\"";
        echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
        echo "\">
<head>
<meta charset=\"utf-8\" />
<meta name=\"viewport\" content=\"width=device-width\" />
";
        // line 6
        echo (isset($context["META"]) ? $context["META"] : null);
        echo "
<title>";
        // line 7
        if ((isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null)) {
            echo "(";
            echo (isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null);
            echo ") ";
        }
        if (( !(isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) &&  !(isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo " - ";
        }
        if ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo " - ";
        } elseif ((isset($context["S_IN_UCP"]) ? $context["S_IN_UCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("UCP");
            echo " - ";
        }
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        if (((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) || (isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo " - ";
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        }
        echo "</title>

";
        // line 9
        if ((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null)) {
            // line 10
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_OVERALL"]) ? $context["S_ENABLE_FEEDS_OVERALL"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "\">";
            }
            // line 11
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_NEWS"]) ? $context["S_ENABLE_FEEDS_NEWS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=news\">";
            }
            // line 12
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_FORUMS"]) ? $context["S_ENABLE_FEEDS_FORUMS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=forums\">";
            }
            // line 13
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS"]) ? $context["S_ENABLE_FEEDS_TOPICS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=topics\">";
            }
            // line 14
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"]) ? $context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=topics_active\">";
            }
            // line 15
            echo "\t";
            if (((isset($context["S_ENABLE_FEEDS_FORUM"]) ? $context["S_ENABLE_FEEDS_FORUM"] : null) && (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo " - ";
                echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?f=";
                echo (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null);
                echo "\">";
            }
            // line 16
            echo "\t";
            if (((isset($context["S_ENABLE_FEEDS_TOPIC"]) ? $context["S_ENABLE_FEEDS_TOPIC"] : null) && (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " - ";
                echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?f=";
                echo (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null);
                echo "&amp;t=";
                echo (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null);
                echo "\">";
            }
        }
        // line 18
        echo "
";
        // line 19
        if ((isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null)) {
            // line 20
            echo "\t<link rel=\"canonical\" href=\"";
            echo (isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null);
            echo "\">
";
        }
        // line 22
        echo "
<!--
\tphpBB style name: PBWoW 3
\tBased on style:   prosilver (this is the default phpBB3 style)
\tOriginal author:  Tom Beddard ( http://www.subBlue.com/ )
\tModified by: PayBas ( http://www.pbwow.com/ )
-->

";
        // line 30
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            // line 31
            echo "<script>
\tWebFontConfig = {
\t\tgoogle: {
\t\t\tfamilies: ['Open Sans:n6']
\t\t}
\t};

\t(function(d) {
\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\twf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
\t\twf.async = true;
\t\ts.parentNode.insertBefore(wf, s);
\t})(document);
</script>
";
        }
        // line 46
        echo "
\t<link href=\"";
        // line 47
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/common.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 48
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/links.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 49
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/content.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 50
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/buttons.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 51
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/cp.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 52
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/forms.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">

\t";
        // line 54
        if (((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) !== "pbwow3")) {
            // line 55
            echo "\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3/theme/stylesheet.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 57
        echo "\t";
        if (((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_wildstar")) {
            // line 58
            echo "\t\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3_heroes/theme/stylesheet.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        } elseif ((        // line 59
(isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_xmas")) {
            // line 60
            echo "\t\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3_wotlk/theme/stylesheet.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 62
        echo "
\t<link href=\"";
        // line 63
        echo (isset($context["T_STYLESHEET_LINK"]) ? $context["T_STYLESHEET_LINK"] : null);
        echo "\" rel=\"stylesheet\">

\t";
        // line 65
        if (((((((((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3") || ((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_battlecry")) || ((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_garrison")) || ((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_pandaria")) || ((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_tbc")) || ((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_tribute")) || ((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_warlords"))) {
            // line 66
            echo "\t\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3/theme/";
            echo (isset($context["T_THEME_LANG_NAME"]) ? $context["T_THEME_LANG_NAME"] : null);
            echo "/stylesheet.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        } elseif (((        // line 67
(isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_wotlk") || ((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_xmas"))) {
            // line 68
            echo "\t\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3_wotlk/theme/";
            echo (isset($context["T_THEME_LANG_NAME"]) ? $context["T_THEME_LANG_NAME"] : null);
            echo "/stylesheet.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 70
        echo "
\t<link href=\"";
        // line 71
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/responsive.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\" media=\"all and (max-width: 700px), all and (max-device-width: 700px)\">
\t<link href=\"";
        // line 72
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/pbwow3/theme/responsive.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\" media=\"all and (max-width: 700px), all and (max-device-width: 700px)\">
\t";
        // line 73
        if ((((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_heroes") || ((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_wildstar"))) {
            // line 74
            echo "\t\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3_heroes/theme/responsive.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\" media=\"all and (max-width: 700px), all and (max-device-width: 700px)\">
\t";
        }
        // line 76
        echo "
\t";
        // line 77
        if ((isset($context["S_PBWOW_AVATARS"]) ? $context["S_PBWOW_AVATARS"] : null)) {
            // line 78
            echo "\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3/theme/game-icons.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 80
        echo "
\t<link href=\"";
        // line 81
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/pbwow3/theme/custom.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
\t";
        // line 82
        if ((((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_heroes") || ((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_wildstar"))) {
            // line 83
            echo "\t\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3_heroes/theme/custom.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        } elseif ((        // line 84
(isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_tech")) {
            // line 85
            echo "\t\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3_tech/theme/custom.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 87
        echo "
\t";
        // line 88
        if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
            // line 89
            echo "\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/prosilver/theme/bidi.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t<link href=\"";
            // line 90
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3/theme/bidi.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 92
        echo "
\t";
        // line 93
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            // line 94
            echo "\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/prosilver/theme/plupload.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 96
        echo "
\t<!--[if lte IE 9]>
\t<link href=\"";
        // line 98
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/pbwow3/theme/tweaks.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
\t";
        // line 99
        if ((((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_heroes") || ((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_wildstar"))) {
            // line 100
            echo "\t\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3_heroes/theme/tweaks.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 102
        echo "\t<![endif]-->

";
        // line 104
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('alex75_smiliesscrollbox', '__main__'));
        $this->env->loadTemplate('@alex75_smiliesscrollbox/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('derky_sortablescaptcha', '__main__'));
        $this->env->loadTemplate('@derky_sortablescaptcha/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('dmzx_loadingindicator', '__main__'));
        $this->env->loadTemplate('@dmzx_loadingindicator/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('marc_quickedit', '__main__'));
        $this->env->loadTemplate('@marc_quickedit/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('paybas_breadcrumbmenu', '__main__'));
        $this->env->loadTemplate('@paybas_breadcrumbmenu/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('paybas_pbwow', '__main__'));
        $this->env->loadTemplate('@paybas_pbwow/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('pico_reputation', '__main__'));
        $this->env->loadTemplate('@pico_reputation/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('rmcgirr83_elonw', '__main__'));
        $this->env->loadTemplate('@rmcgirr83_elonw/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('vinny_shareon', '__main__'));
        $this->env->loadTemplate('@vinny_shareon/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('vse_abbc3', '__main__'));
        $this->env->loadTemplate('@vse_abbc3/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('vse_lightbox', '__main__'));
        $this->env->loadTemplate('@vse_lightbox/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('vse_topicpreview', '__main__'));
        $this->env->loadTemplate('@vse_topicpreview/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 105
        echo "
";
        // line 106
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "STYLESHEETS", array());
        echo "

\t<link href=\"";
        // line 108
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/pbwow3/theme/extensions.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
\t";
        // line 109
        if ((((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_heroes") || ((isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_wildstar"))) {
            // line 110
            echo "\t\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3_heroes/theme/extensions.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        } elseif ((        // line 111
(isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null) == "pbwow3_tech")) {
            // line 112
            echo "\t\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/pbwow3_tech/theme/extensions.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 114
        echo "
";
        // line 115
        // line 116
        echo "
</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 118
        echo (isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null);
        echo " ";
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo " ";
        echo (isset($context["T_THEME_NAME"]) ? $context["T_THEME_NAME"] : null);
        echo " ";
        echo (isset($context["BODY_CLASS"]) ? $context["BODY_CLASS"] : null);
        echo "\">

";
        // line 120
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('dmzx_loadingindicator', '__main__'));
        $this->env->loadTemplate('@dmzx_loadingindicator/event/overall_header_body_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('paybas_pbwow', '__main__'));
        $this->env->loadTemplate('@paybas_pbwow/event/overall_header_body_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 121
        echo "
<div id=\"wrap\">
\t<a id=\"top\" class=\"anchor\" accesskey=\"t\"></a>
\t<div id=\"page-header\">
\t\t<div class=\"headerbar\" role=\"banner\">
\t\t\t<div class=\"inner\">

\t\t\t<div id=\"site-description\">
\t\t\t\t<a id=\"logo\" class=\"logo\" href=\"";
        // line 129
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
        } else {
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        }
        echo "\" title=\"";
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
        } else {
            echo $this->env->getExtension('phpbb')->lang("INDEX");
        }
        echo "\"></a>
\t\t\t\t<h1>";
        // line 130
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "</h1>
\t\t\t\t<p>";
        // line 131
        echo (isset($context["SITE_DESCRIPTION"]) ? $context["SITE_DESCRIPTION"] : null);
        echo "</p>
\t\t\t\t<p class=\"skiplink\"><a href=\"#start_here\">";
        // line 132
        echo $this->env->getExtension('phpbb')->lang("SKIP");
        echo "</a></p>
\t\t\t</div>

\t\t\t";
        // line 135
        // line 136
        echo "\t\t\t";
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) &&  !(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
            // line 137
            echo "\t\t\t<div id=\"search-box\" class=\"search-box search-header\" role=\"search\">
\t\t\t\t<form action=\"";
            // line 138
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" method=\"get\" id=\"search\">
\t\t\t\t<fieldset>
\t\t\t\t\t<input name=\"keywords\" id=\"keywords\" type=\"search\" maxlength=\"128\" title=\"";
            // line 140
            echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
            echo "\" class=\"inputbox search tiny\" size=\"20\" value=\"";
            echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
            echo "\" placeholder=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_MINI");
            echo "\" />
\t\t\t\t\t<button class=\"button icon-button search-icon\" type=\"submit\" title=\"";
            // line 141
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</button>
\t\t\t\t\t<a href=\"";
            // line 142
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" class=\"button icon-button search-adv-icon\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "</a>
\t\t\t\t\t";
            // line 143
            echo (isset($context["S_SEARCH_HIDDEN_FIELDS"]) ? $context["S_SEARCH_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t";
        }
        // line 148
        echo "
\t\t\t</div>
\t\t</div>

\t\t";
        // line 152
        // line 153
        echo "\t\t";
        $location = "navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_header.html", "overall_header.html", 153)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 154
        echo "\t</div>

\t";
        // line 156
        // line 157
        echo "
\t<a id=\"start_here\" class=\"anchor\"></a>
\t<div id=\"page-body\" role=\"main\">
\t\t";
        // line 160
        if ((((isset($context["S_BOARD_DISABLED"]) ? $context["S_BOARD_DISABLED"] : null) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) && ((isset($context["U_MCP"]) ? $context["U_MCP"] : null) || (isset($context["U_ACP"]) ? $context["U_ACP"] : null)))) {
            // line 161
            echo "\t\t<div id=\"information\" class=\"rules\">
\t\t\t<div class=\"inner\">
\t\t\t\t<strong>";
            // line 163
            echo $this->env->getExtension('phpbb')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            echo $this->env->getExtension('phpbb')->lang("BOARD_DISABLED");
            echo "
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 167
        echo "
\t\t";
        // line 168
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  652 => 168,  649 => 167,  639 => 163,  635 => 161,  633 => 160,  628 => 157,  627 => 156,  623 => 154,  610 => 153,  609 => 152,  603 => 148,  595 => 143,  587 => 142,  581 => 141,  573 => 140,  568 => 138,  565 => 137,  562 => 136,  561 => 135,  555 => 132,  551 => 131,  547 => 130,  533 => 129,  523 => 121,  514 => 120,  503 => 118,  499 => 116,  498 => 115,  495 => 114,  487 => 112,  485 => 111,  478 => 110,  476 => 109,  470 => 108,  465 => 106,  462 => 105,  413 => 104,  409 => 102,  401 => 100,  399 => 99,  393 => 98,  389 => 96,  381 => 94,  379 => 93,  376 => 92,  369 => 90,  362 => 89,  360 => 88,  357 => 87,  349 => 85,  347 => 84,  340 => 83,  338 => 82,  332 => 81,  329 => 80,  321 => 78,  319 => 77,  316 => 76,  308 => 74,  306 => 73,  300 => 72,  294 => 71,  291 => 70,  281 => 68,  279 => 67,  270 => 66,  268 => 65,  263 => 63,  260 => 62,  252 => 60,  250 => 59,  243 => 58,  240 => 57,  232 => 55,  230 => 54,  223 => 52,  217 => 51,  211 => 50,  205 => 49,  199 => 48,  193 => 47,  190 => 46,  173 => 31,  171 => 30,  161 => 22,  155 => 20,  153 => 19,  150 => 18,  132 => 16,  117 => 15,  106 => 14,  95 => 13,  84 => 12,  73 => 11,  62 => 10,  60 => 9,  35 => 7,  31 => 6,  22 => 2,  19 => 1,);
    }
}
