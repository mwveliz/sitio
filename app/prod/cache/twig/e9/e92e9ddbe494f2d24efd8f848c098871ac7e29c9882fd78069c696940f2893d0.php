<?php

/* StfalconTinymceBundle:Script:init.html.twig */
class __TwigTemplate_6190b85e4320f0494d45fd244e37fada6215bd37acef51ccbe6cd1e0914ad4c1 extends Twig_Template
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
        if ((isset($context["include_jquery"]) ? $context["include_jquery"] : null)) {
            // line 2
            echo "    <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
";
        }
        // line 4
        if ((isset($context["tinymce_jquery"]) ? $context["tinymce_jquery"] : null)) {
            // line 5
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : null) . "bundles/stfalcontinymce/vendor/tinymce/jquery.tinymce.min.js"), (isset($context["asset_package_name"]) ? $context["asset_package_name"] : null)), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : null) . "bundles/stfalcontinymce/js/init.jquery.js"), (isset($context["asset_package_name"]) ? $context["asset_package_name"] : null)), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 8
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : null) . "bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js"), (isset($context["asset_package_name"]) ? $context["asset_package_name"] : null)), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : null) . "bundles/stfalcontinymce/js/ready.min.js"), (isset($context["asset_package_name"]) ? $context["asset_package_name"] : null)), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : null) . "bundles/stfalcontinymce/js/init.standard.js"), (isset($context["asset_package_name"]) ? $context["asset_package_name"] : null)), "html", null, true);
            echo "\"></script>
";
        }
        // line 12
        echo "<script type=\"text/javascript\">
    //<![CDATA[
    stfalcon_tinymce_config = ";
        // line 14
        echo (isset($context["tinymce_config"]) ? $context["tinymce_config"] : null);
        echo ";
    initTinyMCE();
    //]]>
</script>
";
    }

    public function getTemplateName()
    {
        return "StfalconTinymceBundle:Script:init.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  51 => 12,  46 => 10,  42 => 9,  37 => 8,  32 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if include_jquery %}*/
/*     <script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>*/
/* {% endif %}*/
/* {% if tinymce_jquery %}*/
/*     <script type="text/javascript" src="{{ asset(base_url~'bundles/stfalcontinymce/vendor/tinymce/jquery.tinymce.min.js', asset_package_name) }}"></script>*/
/*     <script type="text/javascript" src="{{ asset(base_url~'bundles/stfalcontinymce/js/init.jquery.js', asset_package_name) }}"></script>*/
/* {% else %}*/
/*     <script type="text/javascript" src="{{ asset(base_url~'bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js', asset_package_name) }}"></script>*/
/*     <script type="text/javascript" src="{{ asset(base_url~'bundles/stfalcontinymce/js/ready.min.js', asset_package_name) }}"></script>*/
/*     <script type="text/javascript" src="{{ asset(base_url~'bundles/stfalcontinymce/js/init.standard.js', asset_package_name) }}"></script>*/
/* {% endif %}*/
/* <script type="text/javascript">*/
/*     //<![CDATA[*/
/*     stfalcon_tinymce_config = {{ tinymce_config|raw }};*/
/*     initTinyMCE();*/
/*     //]]>*/
/* </script>*/
/* */
