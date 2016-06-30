<?php

/* :noticia:new.html.twig */
class __TwigTemplate_bb5900fc288039366f1baeab6a760d29f6d9c3f9c1fe61950152cf9242dea80e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":noticia:new.html.twig", 1);
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
        $__internal_53d2e7e5c498f2fec9ee478faf5c52157ae067b65f7bdd1450cce31492320d45 = $this->env->getExtension("native_profiler");
        $__internal_53d2e7e5c498f2fec9ee478faf5c52157ae067b65f7bdd1450cce31492320d45->enter($__internal_53d2e7e5c498f2fec9ee478faf5c52157ae067b65f7bdd1450cce31492320d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":noticia:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53d2e7e5c498f2fec9ee478faf5c52157ae067b65f7bdd1450cce31492320d45->leave($__internal_53d2e7e5c498f2fec9ee478faf5c52157ae067b65f7bdd1450cce31492320d45_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_db8ba6ded3cfae373e1c7b6c0a498a2845bdad12af6cbc9e000599703606b4d0 = $this->env->getExtension("native_profiler");
        $__internal_db8ba6ded3cfae373e1c7b6c0a498a2845bdad12af6cbc9e000599703606b4d0->enter($__internal_db8ba6ded3cfae373e1c7b6c0a498a2845bdad12af6cbc9e000599703606b4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Creación de Noticias </h1>
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
                    <button type=\"button\" class=\"btn btn-primary\"  id=\"clear\">Limpiar</button>
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("noticia_index");
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
        
        $__internal_db8ba6ded3cfae373e1c7b6c0a498a2845bdad12af6cbc9e000599703606b4d0->leave($__internal_db8ba6ded3cfae373e1c7b6c0a498a2845bdad12af6cbc9e000599703606b4d0_prof);

    }

    // line 29
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_fafc0667385dc2e4906057edbcb67834f5e152883331a687c5a7a4a9f45f9d39 = $this->env->getExtension("native_profiler");
        $__internal_fafc0667385dc2e4906057edbcb67834f5e152883331a687c5a7a4a9f45f9d39->enter($__internal_fafc0667385dc2e4906057edbcb67834f5e152883331a687c5a7a4a9f45f9d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 
<script>
    \$('document').ready(function(){
     
    });
    
    
    
    </script>
";
        
        $__internal_fafc0667385dc2e4906057edbcb67834f5e152883331a687c5a7a4a9f45f9d39->leave($__internal_fafc0667385dc2e4906057edbcb67834f5e152883331a687c5a7a4a9f45f9d39_prof);

    }

    public function getTemplateName()
    {
        return ":noticia:new.html.twig";
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
/*     <h1>Creación de Noticias </h1>*/
/* <div class="row">*/
/*         <div class="col-xs-12 col-sm-12	col-md-12 col-lg-12 ">*/
/*             <!-- BEGIN SAMPLE FORM PORTLET-->*/
/*             <div class="portlet light bordered">*/
/*                 <div class="portlet-title">*/
/*                 </div>*/
/*                 <div class="portlet-body form">*/
/*                     {{ form_start(form) }}{{ tinymce_init() }}*/
/*                     {{ form_widget(form) }}*/
/*                     <button type="button" class="btn btn-primary"  id="clear">Limpiar</button>*/
/*                     <a href="{{ path('noticia_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
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
/*  */
/* */
