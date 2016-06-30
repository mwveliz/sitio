<?php

/* :estadistica:index.html.twig */
class __TwigTemplate_9a60c8a3bb42705a191e9467fc9b14825ab9653723a38195f7719e89139e47d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":estadistica:index.html.twig", 2);
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
        $__internal_800b8fbb3f1b52f7e74b4744e78118f6ba86c5d1f369300958e168108cbf22ed = $this->env->getExtension("native_profiler");
        $__internal_800b8fbb3f1b52f7e74b4744e78118f6ba86c5d1f369300958e168108cbf22ed->enter($__internal_800b8fbb3f1b52f7e74b4744e78118f6ba86c5d1f369300958e168108cbf22ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":estadistica:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_800b8fbb3f1b52f7e74b4744e78118f6ba86c5d1f369300958e168108cbf22ed->leave($__internal_800b8fbb3f1b52f7e74b4744e78118f6ba86c5d1f369300958e168108cbf22ed_prof);

    }

    // line 3
    public function block_stylesheets_extra($context, array $blocks = array())
    {
        $__internal_4c2820e949eb3ea08c1fce50a9825ca67fad3610e62e4b4f01de42b566488a4b = $this->env->getExtension("native_profiler");
        $__internal_4c2820e949eb3ea08c1fce50a9825ca67fad3610e62e4b4f01de42b566488a4b->enter($__internal_4c2820e949eb3ea08c1fce50a9825ca67fad3610e62e4b4f01de42b566488a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets_extra"));

        echo " 
      
";
        
        $__internal_4c2820e949eb3ea08c1fce50a9825ca67fad3610e62e4b4f01de42b566488a4b->leave($__internal_4c2820e949eb3ea08c1fce50a9825ca67fad3610e62e4b4f01de42b566488a4b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_22af9bbf58f2a1cb0c9d75c998966ba2a915bd2b6481b0cca7d82501bafb1d50 = $this->env->getExtension("native_profiler");
        $__internal_22af9bbf58f2a1cb0c9d75c998966ba2a915bd2b6481b0cca7d82501bafb1d50->enter($__internal_22af9bbf58f2a1cb0c9d75c998966ba2a915bd2b6481b0cca7d82501bafb1d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1>Estadisticas</h1>
 <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">
            <!-- BEGIN CONTENT -->
                    <div class=\"row\">
                       <div class=\"col-xs-12 col-sm-12\tcol-md-12 col-lg-12 \">
                            <a class=\"btn btn-success\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("estadistica_new");
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
                                                <th class=\"all\">Fecha</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estadisticas"]) ? $context["estadisticas"] : $this->getContext($context, "estadisticas")));
        foreach ($context['_seq'] as $context["_key"] => $context["estadistica"]) {
            // line 37
            echo "                                            <tr>
                                                <td>
                                                    <center>
                                                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estadistica_show", array("id" => $this->getAttribute($context["estadistica"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-search\"></i>
                                                        </a>       
                                                    </center>
                                                </td>
                                                    <td>
                                                    <center>
                                                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estadistica_edit", array("id" => $this->getAttribute($context["estadistica"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-pencil\"></i>
                                                        </a>       
                                                    </center>
                                                </td>
                                            
                                                <td>";
            // line 53
            echo $this->getAttribute($context["estadistica"], "descripcion", array());
            echo "</td>
                                                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["estadistica"], "fechahora", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estadistica'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
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
        
        $__internal_22af9bbf58f2a1cb0c9d75c998966ba2a915bd2b6481b0cca7d82501bafb1d50->leave($__internal_22af9bbf58f2a1cb0c9d75c998966ba2a915bd2b6481b0cca7d82501bafb1d50_prof);

    }

    // line 73
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_edd056b30250b1fba9e58277d5f60f16cdb2d285dcd3a565fe5cbbc5e6042fce = $this->env->getExtension("native_profiler");
        $__internal_edd056b30250b1fba9e58277d5f60f16cdb2d285dcd3a565fe5cbbc5e6042fce->enter($__internal_edd056b30250b1fba9e58277d5f60f16cdb2d285dcd3a565fe5cbbc5e6042fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 
<script>    
 ";
        
        $__internal_edd056b30250b1fba9e58277d5f60f16cdb2d285dcd3a565fe5cbbc5e6042fce->leave($__internal_edd056b30250b1fba9e58277d5f60f16cdb2d285dcd3a565fe5cbbc5e6042fce_prof);

    }

    public function getTemplateName()
    {
        return ":estadistica:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 73,  131 => 56,  122 => 54,  118 => 53,  109 => 47,  99 => 40,  94 => 37,  90 => 36,  64 => 13,  56 => 7,  50 => 6,  36 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets_extra %} */
/*       */
/* {% endblock %}*/
/* {% block body %}*/
/*     <h1>Estadisticas</h1>*/
/*  <!-- BEGIN CONTAINER -->*/
/*         <div class="page-container">*/
/*             <!-- BEGIN CONTENT -->*/
/*                     <div class="row">*/
/*                        <div class="col-xs-12 col-sm-12	col-md-12 col-lg-12 ">*/
/*                             <a class="btn btn-success" href="{{ path('estadistica_new') }}" ><span>Agregar</span></a>*/
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
/*                                                 <th class="all">Descripcion</th>*/
/*                                                 <th class="all">Fecha</th>*/
/* */
/*                                             </tr>*/
/*                                         </thead>*/
/*                                         <tbody>*/
/*                                         {% for estadistica in estadisticas%}*/
/*                                             <tr>*/
/*                                                 <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('estadistica_show', { 'id': estadistica.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-search"></i>*/
/*                                                         </a>       */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                                     <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('estadistica_edit', { 'id': estadistica.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-pencil"></i>*/
/*                                                         </a>       */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                             */
/*                                                 <td>{{ estadistica.descripcion | raw }}</td>*/
/*                                                 <td>{{ estadistica.fechahora | date("d/m/Y") }}</td>*/
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
/* {% block javascripts_extra %} */
/* <script>    */
/*  {% endblock %}*/
/* */
/* */
/* */
