<?php

/* @zoddo_postmodels/event/overall_footer_after.html */
class __TwigTemplate_d00a8a0308d7e004f54f9c1b2f40c7e57dd1452bbb658d3e2b55fc003673bcbf extends Twig_Template
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
        if (((isset($context["S_AUTH_MODEL"]) ? $context["S_AUTH_MODEL"] : null) && (isset($context["S_TOTAL_MODEL"]) ? $context["S_TOTAL_MODEL"] : null))) {
            // line 2
            echo "<script type=\"text/javascript\">
    //<![CDATA[
    var models_refresh_url= '";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["U_AJAX_REFRESH"]) ? $context["U_AJAX_REFRESH"] : null), "js");
            echo "';
    //]]>
</script>
";
            // line 7
            $asset_file = "@zoddo_postmodels/postmodels.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('42');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        }
    }

    public function getTemplateName()
    {
        return "@zoddo_postmodels/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  25 => 4,  21 => 2,  19 => 1,);
    }
}
