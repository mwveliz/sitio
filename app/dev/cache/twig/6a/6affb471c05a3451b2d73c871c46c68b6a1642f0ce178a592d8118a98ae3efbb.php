<?php

/* :imagen:new.html.twig */
class __TwigTemplate_521d03c5492974be407eed299308a1163ccdc532c35f595ea396758f1e347439 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":imagen:new.html.twig", 1);
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
        $__internal_1c394fe749656ec0247993b79a49b9fc9b25039561f454ee0e48e306198eed07 = $this->env->getExtension("native_profiler");
        $__internal_1c394fe749656ec0247993b79a49b9fc9b25039561f454ee0e48e306198eed07->enter($__internal_1c394fe749656ec0247993b79a49b9fc9b25039561f454ee0e48e306198eed07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":imagen:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c394fe749656ec0247993b79a49b9fc9b25039561f454ee0e48e306198eed07->leave($__internal_1c394fe749656ec0247993b79a49b9fc9b25039561f454ee0e48e306198eed07_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c394b23d4b19de4e68d25f99b873e71814ce331f9a5d7ede4bb02997775aa0ec = $this->env->getExtension("native_profiler");
        $__internal_c394b23d4b19de4e68d25f99b873e71814ce331f9a5d7ede4bb02997775aa0ec->enter($__internal_c394b23d4b19de4e68d25f99b873e71814ce331f9a5d7ede4bb02997775aa0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Creación de Registro de imagen </h1>
<div class=\"row\">
        <div class=\"col-xs-12 col-sm-12\tcol-md-12 col-lg-12 \">
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
        echo $this->env->getExtension('routing')->getPath("imagen_index");
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
        
        $__internal_c394b23d4b19de4e68d25f99b873e71814ce331f9a5d7ede4bb02997775aa0ec->leave($__internal_c394b23d4b19de4e68d25f99b873e71814ce331f9a5d7ede4bb02997775aa0ec_prof);

    }

    // line 29
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_769af72246ba90cd47b2d2fab14301cec06aa4e05278204a6b0b3efa79c5dfd1 = $this->env->getExtension("native_profiler");
        $__internal_769af72246ba90cd47b2d2fab14301cec06aa4e05278204a6b0b3efa79c5dfd1->enter($__internal_769af72246ba90cd47b2d2fab14301cec06aa4e05278204a6b0b3efa79c5dfd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 
<script>
    \$('document').ready(function(){
     
    });
    
    
    
    </script>
";
        
        $__internal_769af72246ba90cd47b2d2fab14301cec06aa4e05278204a6b0b3efa79c5dfd1->leave($__internal_769af72246ba90cd47b2d2fab14301cec06aa4e05278204a6b0b3efa79c5dfd1_prof);

    }

    public function getTemplateName()
    {
        return ":imagen:new.html.twig";
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
/*     <h1>Creación de Registro de imagen </h1>*/
/* <div class="row">*/
/*         <div class="col-xs-12 col-sm-12	col-md-12 col-lg-12 ">*/
/*             <!-- BEGIN SAMPLE FORM PORTLET-->*/
/*             <div class="portlet light bordered">*/
/*                 <div class="portlet-title">*/
/*                 </div>*/
/*                 <div class="portlet-body form">*/
/*                     {{ form_start(form) }}{{ tinymce_init() }}*/
/*                     {{ form_widget(form) }}*/
/*                     <button type="reset" class="btn btn-primary"  id="clear">Limpiar</button>*/
/*                     <a href="{{ path('imagen_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
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
