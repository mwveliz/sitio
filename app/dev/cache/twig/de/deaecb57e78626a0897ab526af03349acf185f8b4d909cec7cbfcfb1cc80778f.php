<?php

/* :tipodocumento:index.html.twig */
class __TwigTemplate_4cfa89603a6bcc3981f6bc2f03f57043aeea807d736b762b8959d34ac563951c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":tipodocumento:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets_extra' => array($this, 'block_stylesheets_extra'),
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
        $__internal_12c8d3a8dc6a8517fe024d8ac87e525d6ae346e28d2f0bc08bfbd151b9028ac6 = $this->env->getExtension("native_profiler");
        $__internal_12c8d3a8dc6a8517fe024d8ac87e525d6ae346e28d2f0bc08bfbd151b9028ac6->enter($__internal_12c8d3a8dc6a8517fe024d8ac87e525d6ae346e28d2f0bc08bfbd151b9028ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tipodocumento:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12c8d3a8dc6a8517fe024d8ac87e525d6ae346e28d2f0bc08bfbd151b9028ac6->leave($__internal_12c8d3a8dc6a8517fe024d8ac87e525d6ae346e28d2f0bc08bfbd151b9028ac6_prof);

    }

    // line 2
    public function block_stylesheets_extra($context, array $blocks = array())
    {
        $__internal_505aa72cd9f52220ff8c901c5dc17ceed4fdedf20af82a44b34327dde8a54984 = $this->env->getExtension("native_profiler");
        $__internal_505aa72cd9f52220ff8c901c5dc17ceed4fdedf20af82a44b34327dde8a54984->enter($__internal_505aa72cd9f52220ff8c901c5dc17ceed4fdedf20af82a44b34327dde8a54984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets_extra"));

        echo " 
      
";
        
        $__internal_505aa72cd9f52220ff8c901c5dc17ceed4fdedf20af82a44b34327dde8a54984->leave($__internal_505aa72cd9f52220ff8c901c5dc17ceed4fdedf20af82a44b34327dde8a54984_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_967b3e4222fc66bf2eaa0c53ccf4d906f260a9c127d85a9e4210d58e169e4248 = $this->env->getExtension("native_profiler");
        $__internal_967b3e4222fc66bf2eaa0c53ccf4d906f260a9c127d85a9e4210d58e169e4248->enter($__internal_967b3e4222fc66bf2eaa0c53ccf4d906f260a9c127d85a9e4210d58e169e4248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Tipos Documentos</h1>
 <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">
            <!-- BEGIN CONTENT -->
                    <div class=\"row\">
                       <div class=\"col-xs-12 col-sm-12\tcol-md-12 col-lg-12 \">
                            <a class=\"btn btn-success\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("tipodocumento_new");
        echo "\" ><span>Agregar</span></a>
                            <br><br>                            
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class=\"portlet light bordered\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption font-green\">
                                        <i class=\"icon-settings font-green\"></i>
                                        <span class=\"caption-subject bold uppercase\"></span>
                                    </div>
                                    <div class=\"tools\"> </div>
                                </div>
                                <div class=\"portlet-body\">
                                    <table class=\"table table-striped table-bordered table-hover dt-responsive\" width=\"100%\" id=\"sample_2\">
                                        <thead>
                                            <tr>
                                                <th class=\"all\" width=\"10%\">Detalle</th>
                                                <th class=\"all\" width=\"10%\">Editar</th>
                                                <th class=\"all\">Descripcion</th>                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipoDocumentos"]) ? $context["tipoDocumentos"] : $this->getContext($context, "tipoDocumentos")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipoDocumento"]) {
            // line 36
            echo "                                            <tr>
                                                <td>
                                                    <center>
                                                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipodocumento_show", array("id" => $this->getAttribute($context["tipoDocumento"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-search\"></i>
                                                        </a>       
                                                    </center>
                                                </td>
                                                    <td>
                                                    <center>
                                                        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipodocumento_edit", array("id" => $this->getAttribute($context["tipoDocumento"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-pencil\"></i>
                                                        </a>       
                                                    </center>
                                                </td>
                                            
                                                <td>";
            // line 52
            echo $this->getAttribute($context["tipoDocumento"], "descripcion", array());
            echo "</td>                                                
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipoDocumento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo " 
                                        </tbody>                                        
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                        
                    </div>
                                    
                                        
            <!-- END CONTENT BODY -->
            
        </div>                                       
        <!-- END CONTAINER -->
     
";
        
        $__internal_967b3e4222fc66bf2eaa0c53ccf4d906f260a9c127d85a9e4210d58e169e4248->leave($__internal_967b3e4222fc66bf2eaa0c53ccf4d906f260a9c127d85a9e4210d58e169e4248_prof);

    }

    // line 72
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_c93778bdc47820d1e65a3465deb2ae93128c696e042b1deab0a4d984be7ef78a = $this->env->getExtension("native_profiler");
        $__internal_c93778bdc47820d1e65a3465deb2ae93128c696e042b1deab0a4d984be7ef78a->enter($__internal_c93778bdc47820d1e65a3465deb2ae93128c696e042b1deab0a4d984be7ef78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 


 <script>    
 ";
        
        $__internal_c93778bdc47820d1e65a3465deb2ae93128c696e042b1deab0a4d984be7ef78a->leave($__internal_c93778bdc47820d1e65a3465deb2ae93128c696e042b1deab0a4d984be7ef78a_prof);

    }

    public function getTemplateName()
    {
        return ":tipodocumento:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 72,  125 => 54,  116 => 52,  107 => 46,  97 => 39,  92 => 36,  88 => 35,  64 => 14,  56 => 8,  50 => 7,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets_extra %} */
/*       */
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     <h1>Tipos Documentos</h1>*/
/*  <!-- BEGIN CONTAINER -->*/
/*         <div class="page-container">*/
/*             <!-- BEGIN CONTENT -->*/
/*                     <div class="row">*/
/*                        <div class="col-xs-12 col-sm-12	col-md-12 col-lg-12 ">*/
/*                             <a class="btn btn-success" href="{{ path('tipodocumento_new') }}" ><span>Agregar</span></a>*/
/*                             <br><br>                            */
/*                             <!-- BEGIN EXAMPLE TABLE PORTLET-->*/
/*                             <div class="portlet light bordered">*/
/*                                 <div class="portlet-title">*/
/*                                     <div class="caption font-green">*/
/*                                         <i class="icon-settings font-green"></i>*/
/*                                         <span class="caption-subject bold uppercase"></span>*/
/*                                     </div>*/
/*                                     <div class="tools"> </div>*/
/*                                 </div>*/
/*                                 <div class="portlet-body">*/
/*                                     <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_2">*/
/*                                         <thead>*/
/*                                             <tr>*/
/*                                                 <th class="all" width="10%">Detalle</th>*/
/*                                                 <th class="all" width="10%">Editar</th>*/
/*                                                 <th class="all">Descripcion</th>                                               */
/*                                             </tr>*/
/*                                         </thead>*/
/*                                         <tbody>*/
/*                                         {% for tipoDocumento in tipoDocumentos%}*/
/*                                             <tr>*/
/*                                                 <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('tipodocumento_show', { 'id': tipoDocumento.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-search"></i>*/
/*                                                         </a>       */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                                     <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('tipodocumento_edit', { 'id': tipoDocumento.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-pencil"></i>*/
/*                                                         </a>       */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                             */
/*                                                 <td>{{ tipoDocumento.descripcion | raw }}</td>                                                */
/*                                             </tr>*/
/*                                         {% endfor %} */
/*                                         </tbody>                                        */
/*                                     </table>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <!-- END EXAMPLE TABLE PORTLET-->*/
/*                         </div>*/
/*                         */
/*                     </div>*/
/*                                     */
/*                                         */
/*             <!-- END CONTENT BODY -->*/
/*             */
/*         </div>                                       */
/*         <!-- END CONTAINER -->*/
/*      */
/* {% endblock %}*/
/* */
/* {% block javascripts_extra %} */
/* */
/* */
/*  <script>    */
/*  {% endblock %}*/
/*     */
