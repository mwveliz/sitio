<?php

/* :estadistica:index.html.twig */
class __TwigTemplate_40bc94149b0c6c7846f51a6fde5b72acfbec9b383c4bcc864a0050e872bcdc16 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets_extra($context, array $blocks = array())
    {
        echo " 
      
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["estadisticas"]) ? $context["estadisticas"] : null));
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
    }

    // line 73
    public function block_javascripts_extra($context, array $blocks = array())
    {
        echo " 
<script>    
 ";
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
        return array (  136 => 73,  116 => 56,  107 => 54,  103 => 53,  94 => 47,  84 => 40,  79 => 37,  75 => 36,  49 => 13,  41 => 7,  38 => 6,  30 => 3,  11 => 2,);
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
