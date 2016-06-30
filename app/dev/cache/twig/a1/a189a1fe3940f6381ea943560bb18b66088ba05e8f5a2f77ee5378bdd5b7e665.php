<?php

/* :destacado:index.html.twig */
class __TwigTemplate_c102e1a38e532ff3632a713d7ab8608506b03ec591ea5c9f0b3ca26d204cb099 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":destacado:index.html.twig", 1);
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
        $__internal_874509e245af27532cbf7219037bfb50279ef5315057fe5775f6f542b491ee97 = $this->env->getExtension("native_profiler");
        $__internal_874509e245af27532cbf7219037bfb50279ef5315057fe5775f6f542b491ee97->enter($__internal_874509e245af27532cbf7219037bfb50279ef5315057fe5775f6f542b491ee97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":destacado:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_874509e245af27532cbf7219037bfb50279ef5315057fe5775f6f542b491ee97->leave($__internal_874509e245af27532cbf7219037bfb50279ef5315057fe5775f6f542b491ee97_prof);

    }

    // line 2
    public function block_stylesheets_extra($context, array $blocks = array())
    {
        $__internal_6b22e63cb1ac7bd7f23c016f2ad2677fafe93fd8834d18dfa6c323a66a7301f0 = $this->env->getExtension("native_profiler");
        $__internal_6b22e63cb1ac7bd7f23c016f2ad2677fafe93fd8834d18dfa6c323a66a7301f0->enter($__internal_6b22e63cb1ac7bd7f23c016f2ad2677fafe93fd8834d18dfa6c323a66a7301f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets_extra"));

        echo " 
      
";
        
        $__internal_6b22e63cb1ac7bd7f23c016f2ad2677fafe93fd8834d18dfa6c323a66a7301f0->leave($__internal_6b22e63cb1ac7bd7f23c016f2ad2677fafe93fd8834d18dfa6c323a66a7301f0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d7bd0bd596bb147b72918670e2d73a806e9bc932cf1a6ba11d9f6bc9792d97b = $this->env->getExtension("native_profiler");
        $__internal_1d7bd0bd596bb147b72918670e2d73a806e9bc932cf1a6ba11d9f6bc9792d97b->enter($__internal_1d7bd0bd596bb147b72918670e2d73a806e9bc932cf1a6ba11d9f6bc9792d97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Destacado</h1>
 <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">
            <!-- BEGIN CONTENT -->
                    <div class=\"row\">
                       <div class=\"col-xs-12 col-sm-12\tcol-md-12 col-lg-12 \">
                            <a class=\"btn btn-success\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("destacado_new");
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
        $context['_seq'] = twig_ensure_traversable((isset($context["destacados"]) ? $context["destacados"] : $this->getContext($context, "destacados")));
        foreach ($context['_seq'] as $context["_key"] => $context["Destacado"]) {
            // line 36
            echo "                                            <tr>
                                                <td>
                                                    <center>
                                                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("destacado_show", array("id" => $this->getAttribute($context["Destacado"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-search\"></i>
                                                        </a>       
                                                    </center>
                                                </td>
                                                    <td>
                                                    <center>
                                                        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("destacado_edit", array("id" => $this->getAttribute($context["Destacado"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-pencil\"></i>
                                                        </a>       
                                                    </center>
                                                </td>
                                            
                                                <td>";
            // line 52
            echo $this->getAttribute($context["Destacado"], "descripcion", array());
            echo "</td>                                                
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Destacado'], $context['_parent'], $context['loop']);
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
        
        $__internal_1d7bd0bd596bb147b72918670e2d73a806e9bc932cf1a6ba11d9f6bc9792d97b->leave($__internal_1d7bd0bd596bb147b72918670e2d73a806e9bc932cf1a6ba11d9f6bc9792d97b_prof);

    }

    // line 72
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_2543327dc31cd09d280fcdbb4bea16fc48e2ffb1e9100adf66963ed3f11c7770 = $this->env->getExtension("native_profiler");
        $__internal_2543327dc31cd09d280fcdbb4bea16fc48e2ffb1e9100adf66963ed3f11c7770->enter($__internal_2543327dc31cd09d280fcdbb4bea16fc48e2ffb1e9100adf66963ed3f11c7770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 


 <script>    
 ";
        
        $__internal_2543327dc31cd09d280fcdbb4bea16fc48e2ffb1e9100adf66963ed3f11c7770->leave($__internal_2543327dc31cd09d280fcdbb4bea16fc48e2ffb1e9100adf66963ed3f11c7770_prof);

    }

    public function getTemplateName()
    {
        return ":destacado:index.html.twig";
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
/*     <h1>Destacado</h1>*/
/*  <!-- BEGIN CONTAINER -->*/
/*         <div class="page-container">*/
/*             <!-- BEGIN CONTENT -->*/
/*                     <div class="row">*/
/*                        <div class="col-xs-12 col-sm-12	col-md-12 col-lg-12 ">*/
/*                             <a class="btn btn-success" href="{{ path('destacado_new') }}" ><span>Agregar</span></a>*/
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
/*                                         {% for Destacado in destacados%}*/
/*                                             <tr>*/
/*                                                 <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('destacado_show', { 'id': Destacado.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-search"></i>*/
/*                                                         </a>       */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                                     <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('destacado_edit', { 'id': Destacado.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-pencil"></i>*/
/*                                                         </a>       */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                             */
/*                                                 <td>{{ Destacado.descripcion | raw }}</td>                                                */
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
