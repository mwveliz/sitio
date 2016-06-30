<?php

/* :menu:edit.html.twig */
class __TwigTemplate_5debcd47e1597d97c80957b5e9dbd35bde78a7af11c1daf2f8edd0bbdee8e983 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":menu:edit.html.twig", 1);
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
        $__internal_f61d556286c8924aa09f3e8b769a9ae3241b8acccc4a696f04f1a224f78bb5b6 = $this->env->getExtension("native_profiler");
        $__internal_f61d556286c8924aa09f3e8b769a9ae3241b8acccc4a696f04f1a224f78bb5b6->enter($__internal_f61d556286c8924aa09f3e8b769a9ae3241b8acccc4a696f04f1a224f78bb5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menu:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f61d556286c8924aa09f3e8b769a9ae3241b8acccc4a696f04f1a224f78bb5b6->leave($__internal_f61d556286c8924aa09f3e8b769a9ae3241b8acccc4a696f04f1a224f78bb5b6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4590a3deb8953830691c4f370dca19e98bc338f7b938c87e377243ca7b6e425 = $this->env->getExtension("native_profiler");
        $__internal_c4590a3deb8953830691c4f370dca19e98bc338f7b938c87e377243ca7b6e425->enter($__internal_c4590a3deb8953830691c4f370dca19e98bc338f7b938c87e377243ca7b6e425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12\tcol-md-12 col-lg-12 \">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class=\"portlet light bordered\">
                <div class=\"portlet-title\">
                </div>
                <div class=\"portlet-body form\">
                    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
                    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                    <button type=\"button\" class=\"btn btn-primary\"  id=\"clear\">Limpiar</button>
                    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("menu_index");
        echo "\" class=\"btn btn-danger\" role=\"button\">Cancelar</a>
                    <button type=\"submit\" class=\"btn btn-success \">Enviar</button>
                    ";
        // line 16
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
        
        $__internal_c4590a3deb8953830691c4f370dca19e98bc338f7b938c87e377243ca7b6e425->leave($__internal_c4590a3deb8953830691c4f370dca19e98bc338f7b938c87e377243ca7b6e425_prof);

    }

    public function getTemplateName()
    {
        return ":menu:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  59 => 14,  54 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
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
/*                     <button type="button" class="btn btn-primary"  id="clear">Limpiar</button>*/
/*                     <a href="{{ path('menu_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
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
/* */
