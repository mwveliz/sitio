<?php

/* :noticia:index.html.twig */
class __TwigTemplate_8e802037dfcd52f6b6dc6550f566061df25dd7e1caa2acfb4ca3ef9c1bf86bf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":noticia:index.html.twig", 1);
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
        $__internal_feadb71c12a3df6e190f3e53d3f01434265d23166701bec29d78f9325b5f997e = $this->env->getExtension("native_profiler");
        $__internal_feadb71c12a3df6e190f3e53d3f01434265d23166701bec29d78f9325b5f997e->enter($__internal_feadb71c12a3df6e190f3e53d3f01434265d23166701bec29d78f9325b5f997e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":noticia:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feadb71c12a3df6e190f3e53d3f01434265d23166701bec29d78f9325b5f997e->leave($__internal_feadb71c12a3df6e190f3e53d3f01434265d23166701bec29d78f9325b5f997e_prof);

    }

    // line 2
    public function block_stylesheets_extra($context, array $blocks = array())
    {
        $__internal_f894f4afa4d32a8f2ab2dc47c455b66a9172bcbb93085149154887545d0800f2 = $this->env->getExtension("native_profiler");
        $__internal_f894f4afa4d32a8f2ab2dc47c455b66a9172bcbb93085149154887545d0800f2->enter($__internal_f894f4afa4d32a8f2ab2dc47c455b66a9172bcbb93085149154887545d0800f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets_extra"));

        echo " 
      
";
        
        $__internal_f894f4afa4d32a8f2ab2dc47c455b66a9172bcbb93085149154887545d0800f2->leave($__internal_f894f4afa4d32a8f2ab2dc47c455b66a9172bcbb93085149154887545d0800f2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0faff56e23cbd6b7241f538f371279894c5887dd96d69a9d59d22bb139ee1bfe = $this->env->getExtension("native_profiler");
        $__internal_0faff56e23cbd6b7241f538f371279894c5887dd96d69a9d59d22bb139ee1bfe->enter($__internal_0faff56e23cbd6b7241f538f371279894c5887dd96d69a9d59d22bb139ee1bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Noticia</h1>
 <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">
            <!-- BEGIN CONTENT -->
                    <div class=\"row\">
                       <div class=\"col-xs-12 col-sm-12\tcol-md-12 col-lg-12 \">
                            <a class=\"btn btn-success\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("noticia_new");
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
        $context['_seq'] = twig_ensure_traversable((isset($context["noticias"]) ? $context["noticias"] : $this->getContext($context, "noticias")));
        foreach ($context['_seq'] as $context["_key"] => $context["Noticia"]) {
            // line 37
            echo "                                            <tr>
                                                <td>
                                                    <center>
                                                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticia_show", array("id" => $this->getAttribute($context["Noticia"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-search\"></i>
                                                        </a>       
                                                    </center>
                                                </td>
                                                    <td>
                                                    <center>
                                                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticia_edit", array("id" => $this->getAttribute($context["Noticia"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-pencil\"></i>
                                                        </a>       
                                                    </center>
                                                </td>
                                            
                                                <td>";
            // line 53
            echo $this->getAttribute($context["Noticia"], "descripcion", array());
            echo "</td>                                                
                                                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Noticia"], "fechahora", array()), "d/m/Y"), "html", null, true);
            echo "</td>                                                
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Noticia'], $context['_parent'], $context['loop']);
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
        
        $__internal_0faff56e23cbd6b7241f538f371279894c5887dd96d69a9d59d22bb139ee1bfe->leave($__internal_0faff56e23cbd6b7241f538f371279894c5887dd96d69a9d59d22bb139ee1bfe_prof);

    }

    // line 74
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_d032299f79508fa797d5fbd498e433ec04e4e496d02d5a004b771089e21cea45 = $this->env->getExtension("native_profiler");
        $__internal_d032299f79508fa797d5fbd498e433ec04e4e496d02d5a004b771089e21cea45->enter($__internal_d032299f79508fa797d5fbd498e433ec04e4e496d02d5a004b771089e21cea45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 


 <script>    
 ";
        
        $__internal_d032299f79508fa797d5fbd498e433ec04e4e496d02d5a004b771089e21cea45->leave($__internal_d032299f79508fa797d5fbd498e433ec04e4e496d02d5a004b771089e21cea45_prof);

    }

    public function getTemplateName()
    {
        return ":noticia:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 74,  130 => 56,  121 => 54,  117 => 53,  108 => 47,  98 => 40,  93 => 37,  89 => 36,  64 => 14,  56 => 8,  50 => 7,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets_extra %} */
/*       */
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     <h1>Noticia</h1>*/
/*  <!-- BEGIN CONTAINER -->*/
/*         <div class="page-container">*/
/*             <!-- BEGIN CONTENT -->*/
/*                     <div class="row">*/
/*                        <div class="col-xs-12 col-sm-12	col-md-12 col-lg-12 ">*/
/*                             <a class="btn btn-success" href="{{ path('noticia_new') }}" ><span>Agregar</span></a>*/
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
/*                                                 <th class="all">Fecha</th>                                               */
/*                                             </tr>*/
/*                                         </thead>*/
/*                                         <tbody>*/
/*                                         {% for Noticia in noticias%}*/
/*                                             <tr>*/
/*                                                 <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('noticia_show', { 'id': Noticia.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-search"></i>*/
/*                                                         </a>       */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                                     <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('noticia_edit', { 'id': Noticia.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-pencil"></i>*/
/*                                                         </a>       */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                             */
/*                                                 <td>{{ Noticia.descripcion | raw }}</td>                                                */
/*                                                 <td>{{ Noticia.fechahora | date("d/m/Y")}}</td>                                                */
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
