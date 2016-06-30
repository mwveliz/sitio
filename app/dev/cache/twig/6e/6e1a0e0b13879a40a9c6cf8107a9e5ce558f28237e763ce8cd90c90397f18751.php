<?php

/* :menu:new.html.twig */
class __TwigTemplate_53d6fceffb862f303b81cb1729ffae1fa9acb42f9ef9d1d0f01b2fb34df4589f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":menu:new.html.twig", 1);
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
        $__internal_97089d91ee03c41620002b1dc1c1f907c80b01bc6b8261258926821c94c5259c = $this->env->getExtension("native_profiler");
        $__internal_97089d91ee03c41620002b1dc1c1f907c80b01bc6b8261258926821c94c5259c->enter($__internal_97089d91ee03c41620002b1dc1c1f907c80b01bc6b8261258926821c94c5259c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menu:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97089d91ee03c41620002b1dc1c1f907c80b01bc6b8261258926821c94c5259c->leave($__internal_97089d91ee03c41620002b1dc1c1f907c80b01bc6b8261258926821c94c5259c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_609a5a4a5a9633b68168e7ffb17a0b9ba139ec3fcc8137b824925f91f6b7a473 = $this->env->getExtension("native_profiler");
        $__internal_609a5a4a5a9633b68168e7ffb17a0b9ba139ec3fcc8137b824925f91f6b7a473->enter($__internal_609a5a4a5a9633b68168e7ffb17a0b9ba139ec3fcc8137b824925f91f6b7a473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Creación de Registro de Menu </h1>
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
        echo $this->env->getExtension('routing')->getPath("menu_index");
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
        
        $__internal_609a5a4a5a9633b68168e7ffb17a0b9ba139ec3fcc8137b824925f91f6b7a473->leave($__internal_609a5a4a5a9633b68168e7ffb17a0b9ba139ec3fcc8137b824925f91f6b7a473_prof);

    }

    // line 29
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_f71043f0b281afd398351024f1c00704375b5b5bd3c002733c39654d1a46384f = $this->env->getExtension("native_profiler");
        $__internal_f71043f0b281afd398351024f1c00704375b5b5bd3c002733c39654d1a46384f->enter($__internal_f71043f0b281afd398351024f1c00704375b5b5bd3c002733c39654d1a46384f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 
<script>
    \$('document').ready(function(){
     
    });
    
    
    
    </script>
";
        
        $__internal_f71043f0b281afd398351024f1c00704375b5b5bd3c002733c39654d1a46384f->leave($__internal_f71043f0b281afd398351024f1c00704375b5b5bd3c002733c39654d1a46384f_prof);

    }

    public function getTemplateName()
    {
        return ":menu:new.html.twig";
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
/*     <h1>Creación de Registro de Menu </h1>*/
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
/*                     <a href="{{ path('menu_index') }}" class="btn btn-danger" role="button">Cancelar</a>*/
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
