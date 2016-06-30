<?php

/* :enlace:new.html.twig */
class __TwigTemplate_835f0745f69629263006b2f6a964964af70d60009c83055c91ac65ea8fc68cac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":enlace:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts_extra' => array($this, 'block_javascripts_extra'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e965a75ff9123567b9931846661d67f08bae367b65918a7b358fce78d7fd0a53 = $this->env->getExtension("native_profiler");
        $__internal_e965a75ff9123567b9931846661d67f08bae367b65918a7b358fce78d7fd0a53->enter($__internal_e965a75ff9123567b9931846661d67f08bae367b65918a7b358fce78d7fd0a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enlace:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e965a75ff9123567b9931846661d67f08bae367b65918a7b358fce78d7fd0a53->leave($__internal_e965a75ff9123567b9931846661d67f08bae367b65918a7b358fce78d7fd0a53_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f521fc1ce6de1a4b3596d6b4090db0ea0bad596ab5d12238a343601d6a56feb = $this->env->getExtension("native_profiler");
        $__internal_3f521fc1ce6de1a4b3596d6b4090db0ea0bad596ab5d12238a343601d6a56feb->enter($__internal_3f521fc1ce6de1a4b3596d6b4090db0ea0bad596ab5d12238a343601d6a56feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Creación de Registro de enlace </h1>
<div class=\"row\">
        <div class=\"col-xs-6 col-sm-6\tcol-md-6 col-lg-6 \">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class=\"portlet light bordered\">
                <div class=\"portlet-title\">
                </div>
                <div class=\"portlet-body form\">
                    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <button type=\"reset\" class=\"btn btn-primary\"  id=\"clear\">Limpiar</button>
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("enlace_index");
        echo "\" class=\"btn btn-danger\" role=\"button\">Cancelar</a>
                    <button type=\"submit\" class=\"btn btn-success \">Enviar</button>
                    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_3f521fc1ce6de1a4b3596d6b4090db0ea0bad596ab5d12238a343601d6a56feb->leave($__internal_3f521fc1ce6de1a4b3596d6b4090db0ea0bad596ab5d12238a343601d6a56feb_prof);

    }

    // line 29
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_f64659d66d1745f4076262e9c82ed0bd4ceae1fc1f1ed8f96ffd42a19f2ac718 = $this->env->getExtension("native_profiler");
        $__internal_f64659d66d1745f4076262e9c82ed0bd4ceae1fc1f1ed8f96ffd42a19f2ac718->enter($__internal_f64659d66d1745f4076262e9c82ed0bd4ceae1fc1f1ed8f96ffd42a19f2ac718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 
<script>
    \$('document').ready(function(){
     
    });
    
    
    
    </script>
";
        
        $__internal_f64659d66d1745f4076262e9c82ed0bd4ceae1fc1f1ed8f96ffd42a19f2ac718->leave($__internal_f64659d66d1745f4076262e9c82ed0bd4ceae1fc1f1ed8f96ffd42a19f2ac718_prof);

    }

    public function getTemplateName()
    {
        return ":enlace:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 29,  66 => 17,  61 => 15,  56 => 13,  51 => 12,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Creación de Registro de enlace </h1>*/
/* <div class="row">*/
/*         <div class="col-xs-6 col-sm-6	col-md-6 col-lg-6 ">*/
/*             <!-- BEGIN SAMPLE FORM PORTLET-->*/
/*             <div class="portlet light bordered">*/
/*                 <div class="portlet-title">*/
/*                 </div>*/
/*                 <div class="portlet-body form">*/
/*                     {{ form_start(form) }}{{ tinymce_init() }}*/
/*                     {{ form_widget(form) }}*/
/*                     <button type="reset" class="btn btn-primary"  id="clear">Limpiar</button>*/
/*                     <a href="{{ path('enlace_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
/*                     <button type="submit" class="btn btn-success ">Enviar</button>*/
/*                     {{ form_end(form) }}*/
/*                     <br>*/
/*                     <div class="form-actions">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- END SAMPLE FORM PORTLET-->*/
/*         </div>*/
/*  */
/*     </div>*/
/*     */
/* {% endblock %}*/
/* {% block javascripts_extra %} */
/* <script>*/
/*     $('document').ready(function(){*/
/*      */
/*     });*/
/*     */
/*     */
/*     */
/*     </script>*/
/* {% endblock %}*/
/* */
