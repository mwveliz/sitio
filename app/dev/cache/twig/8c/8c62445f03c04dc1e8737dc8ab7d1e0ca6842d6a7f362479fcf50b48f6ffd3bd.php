<?php

/* :ente:index.html.twig */
class __TwigTemplate_c9c3f9d6e13f5ad6c9b156810acc669c7195cd9f5fb31920e5702af774d15287 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":ente:index.html.twig", 1);
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
        $__internal_24055668e22102fb60f7669a197eecaf5d02ce68813d64f0d5cd20bc35909ead = $this->env->getExtension("native_profiler");
        $__internal_24055668e22102fb60f7669a197eecaf5d02ce68813d64f0d5cd20bc35909ead->enter($__internal_24055668e22102fb60f7669a197eecaf5d02ce68813d64f0d5cd20bc35909ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ente:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24055668e22102fb60f7669a197eecaf5d02ce68813d64f0d5cd20bc35909ead->leave($__internal_24055668e22102fb60f7669a197eecaf5d02ce68813d64f0d5cd20bc35909ead_prof);

    }

    // line 2
    public function block_stylesheets_extra($context, array $blocks = array())
    {
        $__internal_17e77e2828ea71415dd4c647f99d0f51a49ad8f25952179ee5f81161674693f9 = $this->env->getExtension("native_profiler");
        $__internal_17e77e2828ea71415dd4c647f99d0f51a49ad8f25952179ee5f81161674693f9->enter($__internal_17e77e2828ea71415dd4c647f99d0f51a49ad8f25952179ee5f81161674693f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets_extra"));

        // line 3
        echo "      
";
        
        $__internal_17e77e2828ea71415dd4c647f99d0f51a49ad8f25952179ee5f81161674693f9->leave($__internal_17e77e2828ea71415dd4c647f99d0f51a49ad8f25952179ee5f81161674693f9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_85391ef4a02219cd87f04b40f93788eb10a1d52c1464c3aae05697051d013798 = $this->env->getExtension("native_profiler");
        $__internal_85391ef4a02219cd87f04b40f93788eb10a1d52c1464c3aae05697051d013798->enter($__internal_85391ef4a02219cd87f04b40f93788eb10a1d52c1464c3aae05697051d013798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Entes</h1>
 <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">
            <!-- BEGIN CONTENT -->
                    <div class=\"row\">
                       <div class=\"col-xs-12 col-sm-12        col-md-12 col-lg-12 \">
                            <a class=\"btn btn-success\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("ente_new");
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
        $context['_seq'] = twig_ensure_traversable((isset($context["entes"]) ? $context["entes"] : $this->getContext($context, "entes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ente"]) {
            // line 36
            echo "                                            <tr>
                                                <td>
                                                    <center>
                                                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ente_show", array("id" => $this->getAttribute($context["ente"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-search\"></i>
                                                        </a>      
                                                    </center>
                                                </td>
                                                    <td>
                                                    <center>
                                                        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ente_edit", array("id" => $this->getAttribute($context["ente"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-pencil\"></i>
                                                        </a>      
                                                    </center>
                                                </td>
                                            
                                                <td>";
            // line 52
            echo $this->getAttribute($context["ente"], "descripcion", array());
            echo "</td>                                                
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ente'], $context['_parent'], $context['loop']);
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
        
        $__internal_85391ef4a02219cd87f04b40f93788eb10a1d52c1464c3aae05697051d013798->leave($__internal_85391ef4a02219cd87f04b40f93788eb10a1d52c1464c3aae05697051d013798_prof);

    }

    // line 72
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_d41a2ccbaa994ce092407113438739ca92a9f8596ae8d3ae8301f47a85930828 = $this->env->getExtension("native_profiler");
        $__internal_d41a2ccbaa994ce092407113438739ca92a9f8596ae8d3ae8301f47a85930828->enter($__internal_d41a2ccbaa994ce092407113438739ca92a9f8596ae8d3ae8301f47a85930828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        // line 73
        echo "

 <script>    
 ";
        
        $__internal_d41a2ccbaa994ce092407113438739ca92a9f8596ae8d3ae8301f47a85930828->leave($__internal_d41a2ccbaa994ce092407113438739ca92a9f8596ae8d3ae8301f47a85930828_prof);

    }

    public function getTemplateName()
    {
        return ":ente:index.html.twig";
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
/*     <h1>Entes</h1>*/
/*  <!-- BEGIN CONTAINER -->*/
/*         <div class="page-container">*/
/*             <!-- BEGIN CONTENT -->*/
/*                     <div class="row">*/
/*                        <div class="col-xs-12 col-sm-12        col-md-12 col-lg-12 ">*/
/*                             <a class="btn btn-success" href="{{ path('ente_new') }}" ><span>Agregar</span></a>*/
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
/*                                         {% for ente in entes%}*/
/*                                             <tr>*/
/*                                                 <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('ente_show', { 'id': ente.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-search"></i>*/
/*                                                         </a>      */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                                     <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('ente_edit', { 'id': ente.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-pencil"></i>*/
/*                                                         </a>      */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                             */
/*                                                 <td>{{ ente.descripcion | raw }}</td>                                                */
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
/*  */
