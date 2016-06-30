<?php

/* :reporteagricola:index.html.twig */
class __TwigTemplate_d9be36e1cbc1f3869cfc6af6d856508c2aec4460efd47a151924c4671da1cc56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reporteagricola:index.html.twig", 1);
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
        $__internal_7ee7c7f88845db11f3047537c2c9d7a5466a73be7542b1800725bf1e60aba7dc = $this->env->getExtension("native_profiler");
        $__internal_7ee7c7f88845db11f3047537c2c9d7a5466a73be7542b1800725bf1e60aba7dc->enter($__internal_7ee7c7f88845db11f3047537c2c9d7a5466a73be7542b1800725bf1e60aba7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reporteagricola:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ee7c7f88845db11f3047537c2c9d7a5466a73be7542b1800725bf1e60aba7dc->leave($__internal_7ee7c7f88845db11f3047537c2c9d7a5466a73be7542b1800725bf1e60aba7dc_prof);

    }

    // line 2
    public function block_stylesheets_extra($context, array $blocks = array())
    {
        $__internal_381f27885000e4e1e40941fb0f1fce49de203e7208c4e68f67dbbf39022d6b2d = $this->env->getExtension("native_profiler");
        $__internal_381f27885000e4e1e40941fb0f1fce49de203e7208c4e68f67dbbf39022d6b2d->enter($__internal_381f27885000e4e1e40941fb0f1fce49de203e7208c4e68f67dbbf39022d6b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets_extra"));

        // line 3
        echo "      
";
        
        $__internal_381f27885000e4e1e40941fb0f1fce49de203e7208c4e68f67dbbf39022d6b2d->leave($__internal_381f27885000e4e1e40941fb0f1fce49de203e7208c4e68f67dbbf39022d6b2d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c490c3b9fe1ade84bc618eaf792f1bd4fa430fb8551b301ae46a44276da2087 = $this->env->getExtension("native_profiler");
        $__internal_2c490c3b9fe1ade84bc618eaf792f1bd4fa430fb8551b301ae46a44276da2087->enter($__internal_2c490c3b9fe1ade84bc618eaf792f1bd4fa430fb8551b301ae46a44276da2087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Lista Reporte Clima</h1>
 <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">
            <!-- BEGIN CONTENT -->
                    <div class=\"row\">
                       <div class=\"col-xs-12 col-sm-12        col-md-12 col-lg-12 \">
                            <a class=\"btn btn-success\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("reporteagricola_new");
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
        $context['_seq'] = twig_ensure_traversable((isset($context["reporteAgricolas"]) ? $context["reporteAgricolas"] : $this->getContext($context, "reporteAgricolas")));
        foreach ($context['_seq'] as $context["_key"] => $context["reporteAgricola"]) {
            // line 36
            echo "                                            <tr>
                                                <td>
                                                    <center>
                                                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reporteagricola_show", array("id" => $this->getAttribute($context["reporteAgricola"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-search\"></i>
                                                        </a>      
                                                    </center>
                                                </td>
                                                    <td>
                                                    <center>
                                                        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reporteagricola_edit", array("id" => $this->getAttribute($context["reporteAgricola"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-pencil\"></i>
                                                        </a>      
                                                    </center>
                                                </td>
                                            
                                                <td>";
            // line 52
            echo $this->getAttribute($context["reporteAgricola"], "descripcion", array());
            echo "</td>                                                
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reporteAgricola'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                                        </tbody>                                        
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
        
        $__internal_2c490c3b9fe1ade84bc618eaf792f1bd4fa430fb8551b301ae46a44276da2087->leave($__internal_2c490c3b9fe1ade84bc618eaf792f1bd4fa430fb8551b301ae46a44276da2087_prof);

    }

    // line 72
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_68655ddd8c6cb4ed92f55137631fa64a86b8c5330db881384a51a4a8bbceb4b6 = $this->env->getExtension("native_profiler");
        $__internal_68655ddd8c6cb4ed92f55137631fa64a86b8c5330db881384a51a4a8bbceb4b6->enter($__internal_68655ddd8c6cb4ed92f55137631fa64a86b8c5330db881384a51a4a8bbceb4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        // line 73
        echo "

 <script>    
 ";
        
        $__internal_68655ddd8c6cb4ed92f55137631fa64a86b8c5330db881384a51a4a8bbceb4b6->leave($__internal_68655ddd8c6cb4ed92f55137631fa64a86b8c5330db881384a51a4a8bbceb4b6_prof);

    }

    public function getTemplateName()
    {
        return ":reporteagricola:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 73,  147 => 72,  125 => 55,  116 => 52,  107 => 46,  97 => 39,  92 => 36,  88 => 35,  64 => 14,  56 => 8,  50 => 7,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets_extra %}*/
/*       */
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     <h1>Lista Reporte Clima</h1>*/
/*  <!-- BEGIN CONTAINER -->*/
/*         <div class="page-container">*/
/*             <!-- BEGIN CONTENT -->*/
/*                     <div class="row">*/
/*                        <div class="col-xs-12 col-sm-12        col-md-12 col-lg-12 ">*/
/*                             <a class="btn btn-success" href="{{ path('reporteagricola_new') }}" ><span>Agregar</span></a>*/
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
/*                                                 <th class="all">Descripcion</th>                                              */
/*                                             </tr>*/
/*                                         </thead>*/
/*                                         <tbody>*/
/*                                         {% for reporteAgricola in reporteAgricolas%}*/
/*                                             <tr>*/
/*                                                 <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('reporteagricola_show', { 'id': reporteAgricola.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-search"></i>*/
/*                                                         </a>      */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                                     <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('reporteagricola_edit', { 'id': reporteAgricola.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-pencil"></i>*/
/*                                                         </a>      */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                             */
/*                                                 <td>{{ reporteAgricola.descripcion | raw }}</td>                                                */
/*                                             </tr>*/
/*                                         {% endfor %}*/
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
/*         </div>                                      */
/*         <!-- END CONTAINER -->*/
/*     */
/* {% endblock %}*/
/* */
/* {% block javascripts_extra %}*/
/* */
/* */
/*  <script>    */
/*  {% endblock %}*/
