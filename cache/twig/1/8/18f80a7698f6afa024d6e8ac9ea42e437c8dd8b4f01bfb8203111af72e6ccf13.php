<?php

/* @pico_reputation/event/overall_header_head_append.html */
class __TwigTemplate_18f80a7698f6afa024d6e8ac9ea42e437c8dd8b4f01bfb8203111af72e6ccf13 extends Twig_Template
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
            echo "\t";
            $asset_file = "@pico_reputation/../theme/reputation_common.css";
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
            // line 3
            echo "\t";
            if ((isset($context["S_FORUM_REPUTATION"]) ? $context["S_FORUM_REPUTATION"] : null)) {
                // line 4
                echo "\t\t";
                $asset_file = "@pico_reputation/../theme/reputation_viewtopic.css";
                $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
                if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                    $asset_path = $asset->get_path();                    $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                    if (!file_exists($local_file)) {
                        $local_file = $this->getEnvironment()->findTemplate($asset_path);
                        $asset->set_path($local_file, true);
                    $asset->add_assets_version('42');
                    $asset_file = $asset->get_url();
                    }
                }
                $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen" />
');
                // line 5
                echo "\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@pico_reputation/event/overall_header_head_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  39 => 4,  36 => 3,  21 => 2,  19 => 1,);
    }
}
