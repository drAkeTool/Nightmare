<?php

/* @vse_topicpreview/event/overall_header_head_append.html */
class __TwigTemplate_8a42b9ad121a18f60adf92e3fcfcce692e97d292158d6a14bd648783d28063d8 extends Twig_Template
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
        if (((isset($context["S_TOPICPREVIEW"]) ? $context["S_TOPICPREVIEW"] : null) && (isset($context["TOPICPREVIEW_THEME"]) ? $context["TOPICPREVIEW_THEME"] : null))) {
            // line 2
            echo "\t";
            $asset_file = (("@vse_topicpreview/" . (isset($context["TOPICPREVIEW_THEME"]) ? $context["TOPICPREVIEW_THEME"] : null)) . ".css");
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
            $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen" />
');
        }
    }

    public function getTemplateName()
    {
        return "@vse_topicpreview/event/overall_header_head_append.html";
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