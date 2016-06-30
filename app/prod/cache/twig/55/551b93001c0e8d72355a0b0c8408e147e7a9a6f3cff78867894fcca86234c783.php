<?php

/* :posicion:index.html.twig */
class __TwigTemplate_3242e1bc6c4b7ba08da3e87ecbdd042618d2656c57628bc541c111b9342055b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":posicion:index.html.twig", 1);
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

    // line 2
    public function block_stylesheets_extra($context, array $blocks = array())
    {
        echo " 
      
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>Posición</h1>
 <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">
            <!-- BEGIN CONTENT -->
                    <div class=\"row\">
                       <div class=\"col-xs-12 col-sm-12\tcol-md-12 col-lg-12 \">
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
                                <div class=\"form-group col-xs-6 col-sm-6\tcol-md-6 col-lg-6\">
                                
                                    <a class=\"btn btn-default\" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("tabla_index", array("seleccion" => "interna"));
        echo "\" ><span>Noticia interna</span></a>
                                    <a class=\"btn btn-default\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("tabla_index", array("seleccion" => "destacado"));
        echo "\" ><span>Destacado</span></a>
                                    <a class=\"btn btn-default\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("tabla_index", array("seleccion" => "enlace"));
        echo "\" ><span>Enlace</span></a>
                                    <a class=\"btn btn-default\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("tabla_index", array("seleccion" => "estadistica"));
        echo "\" ><span>Estadística</span></a>
                                    <a class=\"btn btn-default\" href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("tabla_index", array("seleccion" => "video"));
        echo "\" ><span>Video</span></a>
                                    <a class=\"btn btn-default\" href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("tabla_index", array("seleccion" => "Noticia"));
        echo "\" ><span>Noticia</span></a>
                                      <!--
                                       <a class=\"btn btn-success\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("tabla_index", array("seleccion" => "destacado"));
        echo "\" ><span>Destacado</span></a>-->
                                    .
                                    
                                   
                                </div>    
                                <div class=\"portlet-body\">
                                    <table class=\"table table-striped table-bordered table-hover dt-responsive\" width=\"100%\" id=\"sample_1\">
                                        <thead>
                                            <tr>
                                                <th class=\"all\" width=\"10%\">ID</th>
                                                <th class=\"all\" width=\"10%\">Titulo</th>
                                                <th class=\"all\">Descripcion</th>    
                                                <th class=\"all\">Posición</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                          ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["registros"]) ? $context["registros"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["Registro"]) {
            // line 50
            echo "                                            <tr>                                      
                                                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["Registro"], "id", array()), "html", null, true);
            echo "</td>    
                                                <td>";
            // line 52
            echo $this->getAttribute($context["Registro"], "titulo", array());
            echo "</td> 
                                                <td>";
            // line 53
            echo $this->getAttribute($context["Registro"], "descripcion", array());
            echo "</td>
                                                <td><input type=\"number\" max=\"10\" min=\"1\" style=\"width: 50px\"/></td>                                                
                                            </tr>
                                            
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Registro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
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

    // line 75
    public function block_javascripts_extra($context, array $blocks = array())
    {
        echo " 
<script>
 </script>

 <script>    
 ";
    }

    public function getTemplateName()
    {
        return ":posicion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 75,  131 => 57,  120 => 53,  116 => 52,  112 => 51,  109 => 50,  105 => 49,  86 => 33,  81 => 31,  77 => 30,  73 => 29,  69 => 28,  65 => 27,  61 => 26,  41 => 8,  38 => 7,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets_extra %} */
/*       */
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     <h1>Posición</h1>*/
/*  <!-- BEGIN CONTAINER -->*/
/*         <div class="page-container">*/
/*             <!-- BEGIN CONTENT -->*/
/*                     <div class="row">*/
/*                        <div class="col-xs-12 col-sm-12	col-md-12 col-lg-12 ">*/
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
/*                                 <div class="form-group col-xs-6 col-sm-6	col-md-6 col-lg-6">*/
/*                                 */
/*                                     <a class="btn btn-default" href="{{ path("tabla_index",{"seleccion" : 'interna'}) }}" ><span>Noticia interna</span></a>*/
/*                                     <a class="btn btn-default" href="{{ path("tabla_index",{"seleccion" : 'destacado'}) }}" ><span>Destacado</span></a>*/
/*                                     <a class="btn btn-default" href="{{ path("tabla_index",{"seleccion" : 'enlace'}) }}" ><span>Enlace</span></a>*/
/*                                     <a class="btn btn-default" href="{{ path("tabla_index",{"seleccion" : 'estadistica'}) }}" ><span>Estadística</span></a>*/
/*                                     <a class="btn btn-default" href="{{ path("tabla_index",{"seleccion" : 'video'}) }}" ><span>Video</span></a>*/
/*                                     <a class="btn btn-default" href="{{ path("tabla_index",{"seleccion" : 'Noticia'}) }}" ><span>Noticia</span></a>*/
/*                                       <!--*/
/*                                        <a class="btn btn-success" href="{{ path("tabla_index",{"seleccion" : 'destacado'}) }}" ><span>Destacado</span></a>-->*/
/*                                     .*/
/*                                     */
/*                                    */
/*                                 </div>    */
/*                                 <div class="portlet-body">*/
/*                                     <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">*/
/*                                         <thead>*/
/*                                             <tr>*/
/*                                                 <th class="all" width="10%">ID</th>*/
/*                                                 <th class="all" width="10%">Titulo</th>*/
/*                                                 <th class="all">Descripcion</th>    */
/*                                                 <th class="all">Posición</th>  */
/*                                             </tr>*/
/*                                         </thead>*/
/*                                         <tbody>*/
/*                                           {% for Registro in registros%}*/
/*                                             <tr>                                      */
/*                                                 <td>{{ Registro.id}}</td>    */
/*                                                 <td>{{ Registro.titulo | raw }}</td> */
/*                                                 <td>{{ Registro.descripcion | raw }}</td>*/
/*                                                 <td><input type="number" max="10" min="1" style="width: 50px"/></td>                                                */
/*                                             </tr>*/
/*                                             */
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
/* <script>*/
/*  </script>*/
/* */
/*  <script>    */
/*  {% endblock %}*/
/*     */
