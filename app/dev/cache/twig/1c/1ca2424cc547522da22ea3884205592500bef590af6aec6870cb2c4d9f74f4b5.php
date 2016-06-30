<?php

/* :video:edit.html.twig */
class __TwigTemplate_3db4919b324fb0081c88d835a6ae78011390b9d5654b30ddc3586145fc395bf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":video:edit.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d46e039b365ab40c54ca3676d12f760479399c1f745cf1e9e8e03c2e1cc42ae4 = $this->env->getExtension("native_profiler");
        $__internal_d46e039b365ab40c54ca3676d12f760479399c1f745cf1e9e8e03c2e1cc42ae4->enter($__internal_d46e039b365ab40c54ca3676d12f760479399c1f745cf1e9e8e03c2e1cc42ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":video:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d46e039b365ab40c54ca3676d12f760479399c1f745cf1e9e8e03c2e1cc42ae4->leave($__internal_d46e039b365ab40c54ca3676d12f760479399c1f745cf1e9e8e03c2e1cc42ae4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e06429dc1fe7100f5e148c8acfbcd3d6250d73fad6726ae38811946f3617a045 = $this->env->getExtension("native_profiler");
        $__internal_e06429dc1fe7100f5e148c8acfbcd3d6250d73fad6726ae38811946f3617a045->enter($__internal_e06429dc1fe7100f5e148c8acfbcd3d6250d73fad6726ae38811946f3617a045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12\tcol-md-12 col-lg-12 \">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class=\"portlet light bordered\">
                <div class=\"portlet-title\">
                </div>
                <div class=\"portlet-body form\">
                    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                    <button type=\"reset\" class=\"btn btn-primary\"  id=\"clear\">Limpiar</button>
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("video_index");
        echo "\" class=\"btn btn-danger\" role=\"button\">Cancelar</a>
                    <button type=\"submit\" class=\"btn btn-success \">Enviar</button>
                    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                    <br>
                    <div class=\"form-actions\">
                    </div>
                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>
    </div>
  
";
        
        $__internal_e06429dc1fe7100f5e148c8acfbcd3d6250d73fad6726ae38811946f3617a045->leave($__internal_e06429dc1fe7100f5e148c8acfbcd3d6250d73fad6726ae38811946f3617a045_prof);

    }

    public function getTemplateName()
    {
        return ":video:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 17,  59 => 15,  54 => 13,  49 => 12,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-xs-12 col-sm-12	col-md-12 col-lg-12 ">*/
/*             <!-- BEGIN SAMPLE FORM PORTLET-->*/
/*             <div class="portlet light bordered">*/
/*                 <div class="portlet-title">*/
/*                 </div>*/
/*                 <div class="portlet-body form">*/
/*                     {{ form_start(edit_form) }}{{ tinymce_init() }}*/
/*                     {{ form_widget(edit_form) }}*/
/*                     <button type="reset" class="btn btn-primary"  id="clear">Limpiar</button>*/
/*                     <a href="{{ path('video_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
/*                     <button type="submit" class="btn btn-success ">Enviar</button>*/
/*                     {{ form_end(edit_form) }}*/
/*                     <br>*/
/*                     <div class="form-actions">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- END SAMPLE FORM PORTLET-->*/
/*         </div>*/
/*     </div>*/
/*   */
/* {% endblock %}*/
