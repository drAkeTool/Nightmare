<?php

/* @rmcgirr83_elonw/event/overall_footer_after.html */
class __TwigTemplate_aa82101790e6619ed26b6560a31debeb7f06ee7178a897fcc9ec14447437277f extends Twig_Template
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
        if ((isset($context["S_ELONW"]) ? $context["S_ELONW"] : null)) {
            // line 2
            echo "<script type=\"text/javascript\">
var elonw_title = '";
            // line 3
            echo addslashes($this->env->getExtension('phpbb')->lang("ELONW"));
            echo "';
(function(\$) {
\tsource=removeSubdomain(location.hostname);
\t\$('a[href^=\"http://\"], a[href^=\"https://\"], a[href^=\"ftp://\"]').filter(function(){return this.hostname&&removeSubdomain(this.hostname)!==source}).attr(\"onclick\",\"window.open(this.href);return false;\").attr(\"rel\", \"nofollow\").attr(\"title\", elonw_title).addClass(\"elonw\");
})(jQuery);
function removeSubdomain(a,b){return a.split(\".\").slice(-(b||2)).join(\".\")};
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@rmcgirr83_elonw/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }
}