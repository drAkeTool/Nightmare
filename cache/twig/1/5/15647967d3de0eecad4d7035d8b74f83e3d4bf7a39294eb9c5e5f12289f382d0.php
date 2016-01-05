<?php

/* @vse_lightbox/event/overall_footer_after.html */
class __TwigTemplate_15647967d3de0eecad4d7035d8b74f83e3d4bf7a39294eb9c5e5f12289f382d0 extends Twig_Template
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
        if ((isset($context["LIGHTBOX_RESIZE_WIDTH"]) ? $context["LIGHTBOX_RESIZE_WIDTH"] : null)) {
            // line 2
            echo "\t";
            $asset_file = "@vse_lightbox/js/resizer.js";
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
            // line 3
            echo "\t";
            // line 4
            echo "\t";
            if ( !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "INCLUDED_LIGHTBOXJS", array())) {
                // line 5
                echo "\t\t";
                $asset_file = "@vse_lightbox/lightbox/js/lightbox.min.js";
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
                $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
                // line 6
                echo "\t\t";
                $value = true;
                $context['definition']->set('INCLUDED_LIGHTBOXJS', $value);
                // line 7
                echo "\t";
            }
            // line 8
            echo "\t<script>
\t\tvar vseLightbox = {};
\t\tvseLightbox.resizeWidth = ";
            // line 10
            echo (isset($context["LIGHTBOX_RESIZE_WIDTH"]) ? $context["LIGHTBOX_RESIZE_WIDTH"] : null);
            echo ";
\t\tvseLightbox.lightboxGal = ";
            // line 11
            echo (isset($context["S_LIGHTBOX_GALLERY"]) ? $context["S_LIGHTBOX_GALLERY"] : null);
            echo ";
\t\tvseLightbox.lightboxSig = ";
            // line 12
            echo (isset($context["S_LIGHTBOX_SIGNATURES"]) ? $context["S_LIGHTBOX_SIGNATURES"] : null);
            echo ";
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@vse_lightbox/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 12,  73 => 11,  69 => 10,  65 => 8,  62 => 7,  58 => 6,  42 => 5,  39 => 4,  37 => 3,  21 => 2,  19 => 1,);
    }
}
