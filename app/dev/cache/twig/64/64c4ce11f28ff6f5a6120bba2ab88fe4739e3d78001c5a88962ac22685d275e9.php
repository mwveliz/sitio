<?php

/* :posicion:index.html.twig */
class __TwigTemplate_08ecb5141bab7456cfa65e220ab441a71cc3b928b9c22fee7b312454c56e3962 extends Twig_Template
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
        $__internal_2cb5936ac06f5111385fa2c4db63976aadb7615b6e22a56d7d3b045070e12d23 = $this->env->getExtension("native_profiler");
        $__internal_2cb5936ac06f5111385fa2c4db63976aadb7615b6e22a56d7d3b045070e12d23->enter($__internal_2cb5936ac06f5111385fa2c4db63976aadb7615b6e22a56d7d3b045070e12d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":posicion:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cb5936ac06f5111385fa2c4db63976aadb7615b6e22a56d7d3b045070e12d23->leave($__internal_2cb5936ac06f5111385fa2c4db63976aadb7615b6e22a56d7d3b045070e12d23_prof);

    }

    // line 2
    public function block_stylesheets_extra($context, array $blocks = array())
    {
        $__internal_ebeeb8e97fbc988d084f55f9579f585ec665967e4f81d7008dec63acc5367590 = $this->env->getExtension("native_profiler");
        $__internal_ebeeb8e97fbc988d084f55f9579f585ec665967e4f81d7008dec63acc5367590->enter($__internal_ebeeb8e97fbc988d084f55f9579f585ec665967e4f81d7008dec63acc5367590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets_extra"));

        echo " 
      
";
        
        $__internal_ebeeb8e97fbc988d084f55f9579f585ec665967e4f81d7008dec63acc5367590->leave($__internal_ebeeb8e97fbc988d084f55f9579f585ec665967e4f81d7008dec63acc5367590_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d338cf15c3f1a50bfd521d07da5810b75f58d2da3d2d020e41ad252f934e2b03 = $this->env->getExtension("native_profiler");
        $__internal_d338cf15c3f1a50bfd521d07da5810b75f58d2da3d2d020e41ad252f934e2b03->enter($__internal_d338cf15c3f1a50bfd521d07da5810b75f58d2da3d2d020e41ad252f934e2b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["registros"]) ? $context["registros"] : $this->getContext($context, "registros")));
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
        
        $__internal_d338cf15c3f1a50bfd521d07da5810b75f58d2da3d2d020e41ad252f934e2b03->leave($__internal_d338cf15c3f1a50bfd521d07da5810b75f58d2da3d2d020e41ad252f934e2b03_prof);

    }

    // line 75
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_c4090057905813b59dca1bb1e0beeb69f419867d5a70ac24405aea259e2e0b01 = $this->env->getExtension("native_profiler");
        $__internal_c4090057905813b59dca1bb1e0beeb69f419867d5a70ac24405aea259e2e0b01->enter($__internal_c4090057905813b59dca1bb1e0beeb69f419867d5a70ac24405aea259e2e0b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 
<script>
 </script>

 <script>    
 ";
        
        $__internal_c4090057905813b59dca1bb1e0beeb69f419867d5a70ac24405aea259e2e0b01->leave($__internal_c4090057905813b59dca1bb1e0beeb69f419867d5a70ac24405aea259e2e0b01_prof);

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
        return array (  169 => 75,  146 => 57,  135 => 53,  131 => 52,  127 => 51,  124 => 50,  120 => 49,  101 => 33,  96 => 31,  92 => 30,  88 => 29,  84 => 28,  80 => 27,  76 => 26,  56 => 8,  50 => 7,  36 => 2,  11 => 1,);
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
