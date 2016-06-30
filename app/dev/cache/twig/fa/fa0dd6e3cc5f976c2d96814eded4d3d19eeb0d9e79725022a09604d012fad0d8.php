<?php

/* :noticiainterna:index.html.twig */
class __TwigTemplate_a0a9adba0e7b87f9a5768c520efd52d2075d43225974bcff6a366cb0971478b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":noticiainterna:index.html.twig", 1);
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
        $__internal_f18eb16b52b51a2dce1568bc8afb2aca30c004a90d7beba4efa64dbdab1849c8 = $this->env->getExtension("native_profiler");
        $__internal_f18eb16b52b51a2dce1568bc8afb2aca30c004a90d7beba4efa64dbdab1849c8->enter($__internal_f18eb16b52b51a2dce1568bc8afb2aca30c004a90d7beba4efa64dbdab1849c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":noticiainterna:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f18eb16b52b51a2dce1568bc8afb2aca30c004a90d7beba4efa64dbdab1849c8->leave($__internal_f18eb16b52b51a2dce1568bc8afb2aca30c004a90d7beba4efa64dbdab1849c8_prof);

    }

    // line 2
    public function block_stylesheets_extra($context, array $blocks = array())
    {
        $__internal_b8562066db5d2d99bc88a3cd036643ee1806b5cf014063bf6d9e1ab9f2470184 = $this->env->getExtension("native_profiler");
        $__internal_b8562066db5d2d99bc88a3cd036643ee1806b5cf014063bf6d9e1ab9f2470184->enter($__internal_b8562066db5d2d99bc88a3cd036643ee1806b5cf014063bf6d9e1ab9f2470184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets_extra"));

        // line 3
        echo "      
";
        
        $__internal_b8562066db5d2d99bc88a3cd036643ee1806b5cf014063bf6d9e1ab9f2470184->leave($__internal_b8562066db5d2d99bc88a3cd036643ee1806b5cf014063bf6d9e1ab9f2470184_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_33cc6a99d59621b96ca8a4472d0d2fb61234d54d22c97ef72e630cc136a0755d = $this->env->getExtension("native_profiler");
        $__internal_33cc6a99d59621b96ca8a4472d0d2fb61234d54d22c97ef72e630cc136a0755d->enter($__internal_33cc6a99d59621b96ca8a4472d0d2fb61234d54d22c97ef72e630cc136a0755d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Noticias Internas</h1>
 <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">
            <!-- BEGIN CONTENT -->
                    <div class=\"row\">
                       <div class=\"col-xs-12 col-sm-12        col-md-12 col-lg-12 \">
                            <a class=\"btn btn-success\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("noticiainterna_new");
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
        $context['_seq'] = twig_ensure_traversable((isset($context["noticiaInternas"]) ? $context["noticiaInternas"] : $this->getContext($context, "noticiaInternas")));
        foreach ($context['_seq'] as $context["_key"] => $context["noticiainterna"]) {
            // line 37
            echo "                                            <tr>
                                                <td>
                                                    <center>
                                                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticiainterna_show", array("id" => $this->getAttribute($context["noticiainterna"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-search\"></i>
                                                        </a>      
                                                    </center>
                                                </td>
                                                    <td>
                                                    <center>
                                                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticiainterna_edit", array("id" => $this->getAttribute($context["noticiainterna"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-pencil\"></i>
                                                        </a>      
                                                    </center>
                                                </td>
                                            
                                                <td>";
            // line 53
            echo $this->getAttribute($context["noticiainterna"], "descripcion", array());
            echo "</td>
                                                <td>";
            // line 54
            echo $this->getAttribute($context["noticiainterna"], "descripcion", array());
            echo "</td>
                                                 
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticiainterna'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
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
        
        $__internal_33cc6a99d59621b96ca8a4472d0d2fb61234d54d22c97ef72e630cc136a0755d->leave($__internal_33cc6a99d59621b96ca8a4472d0d2fb61234d54d22c97ef72e630cc136a0755d_prof);

    }

    // line 75
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_22f3442062fff06fb1ed39658fff9a5a9e925ae256eba729dd2c79a17910222d = $this->env->getExtension("native_profiler");
        $__internal_22f3442062fff06fb1ed39658fff9a5a9e925ae256eba729dd2c79a17910222d->enter($__internal_22f3442062fff06fb1ed39658fff9a5a9e925ae256eba729dd2c79a17910222d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        // line 76
        echo "

 <script>    
 ";
        
        $__internal_22f3442062fff06fb1ed39658fff9a5a9e925ae256eba729dd2c79a17910222d->leave($__internal_22f3442062fff06fb1ed39658fff9a5a9e925ae256eba729dd2c79a17910222d_prof);

    }

    public function getTemplateName()
    {
        return ":noticiainterna:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 76,  153 => 75,  131 => 58,  121 => 54,  117 => 53,  108 => 47,  98 => 40,  93 => 37,  89 => 36,  64 => 14,  56 => 8,  50 => 7,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets_extra %}*/
/*       */
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     <h1>Noticias Internas</h1>*/
/*  <!-- BEGIN CONTAINER -->*/
/*         <div class="page-container">*/
/*             <!-- BEGIN CONTENT -->*/
/*                     <div class="row">*/
/*                        <div class="col-xs-12 col-sm-12        col-md-12 col-lg-12 ">*/
/*                             <a class="btn btn-success" href="{{ path('noticiainterna_new') }}" ><span>Agregar</span></a>*/
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
/*                                                 <th class="all">Fecha</th>                                              */
/*                                             </tr>*/
/*                                         </thead>*/
/*                                         <tbody>*/
/*                                         {% for noticiainterna in noticiaInternas%}*/
/*                                             <tr>*/
/*                                                 <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('noticiainterna_show', { 'id': noticiainterna.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-search"></i>*/
/*                                                         </a>      */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                                     <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('noticiainterna_edit', { 'id': noticiainterna.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-pencil"></i>*/
/*                                                         </a>      */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                             */
/*                                                 <td>{{ noticiainterna.descripcion | raw }}</td>*/
/*                                                 <td>{{ noticiainterna.descripcion | raw }}</td>*/
/*                                                  */
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
