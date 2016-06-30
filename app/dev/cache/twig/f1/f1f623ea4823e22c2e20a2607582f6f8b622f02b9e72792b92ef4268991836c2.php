<?php

/* :banner:index.html.twig */
class __TwigTemplate_56dc7517b5922fa4c8ea5307c2fcb08fb055ef9bdb5f29d8faae131ffa5cd7b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":banner:index.html.twig", 2);
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
        $__internal_523115749847a029386d2364da84e7f2f34b54e79032660ce6c475ce578e5ce0 = $this->env->getExtension("native_profiler");
        $__internal_523115749847a029386d2364da84e7f2f34b54e79032660ce6c475ce578e5ce0->enter($__internal_523115749847a029386d2364da84e7f2f34b54e79032660ce6c475ce578e5ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":banner:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_523115749847a029386d2364da84e7f2f34b54e79032660ce6c475ce578e5ce0->leave($__internal_523115749847a029386d2364da84e7f2f34b54e79032660ce6c475ce578e5ce0_prof);

    }

    // line 3
    public function block_stylesheets_extra($context, array $blocks = array())
    {
        $__internal_bf0487e043e4ab501084f6d7d8887f80999c703dd89de805f9234ad4361fe06a = $this->env->getExtension("native_profiler");
        $__internal_bf0487e043e4ab501084f6d7d8887f80999c703dd89de805f9234ad4361fe06a->enter($__internal_bf0487e043e4ab501084f6d7d8887f80999c703dd89de805f9234ad4361fe06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets_extra"));

        echo " 
      
";
        
        $__internal_bf0487e043e4ab501084f6d7d8887f80999c703dd89de805f9234ad4361fe06a->leave($__internal_bf0487e043e4ab501084f6d7d8887f80999c703dd89de805f9234ad4361fe06a_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_06c3aebc0d0273a638c15376c54651dddf4e5bf07ce2f41e22ffdfee8f7addb7 = $this->env->getExtension("native_profiler");
        $__internal_06c3aebc0d0273a638c15376c54651dddf4e5bf07ce2f41e22ffdfee8f7addb7->enter($__internal_06c3aebc0d0273a638c15376c54651dddf4e5bf07ce2f41e22ffdfee8f7addb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1>Banner</h1>
 <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">
            <!-- BEGIN CONTENT -->
                    <div class=\"row\">
                       <div class=\"col-xs-12 col-sm-12\tcol-md-12 col-lg-12 \">
                            <a class=\"btn btn-success\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("banner_new");
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
                                               <th class=\"all\" width=\"10%\">ID   </th>                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : $this->getContext($context, "banners")));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 35
            echo "                                            <tr>
                                                <td>
                                                    <center>
                                                        <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banner_show", array("id" => $this->getAttribute($context["banner"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-search\"></i>
                                                        </a>       
                                                    </center>
                                                </td>
                                                    <td>
                                                    <center>
                                                        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banner_edit", array("id" => $this->getAttribute($context["banner"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-pencil\"></i>
                                                        </a>       
                                                    </center>
                                                </td>
                                            <td>";
            // line 50
            echo $this->getAttribute($context["banner"], "id", array());
            echo "</td>
                                                                                         
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
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
        
        $__internal_06c3aebc0d0273a638c15376c54651dddf4e5bf07ce2f41e22ffdfee8f7addb7->leave($__internal_06c3aebc0d0273a638c15376c54651dddf4e5bf07ce2f41e22ffdfee8f7addb7_prof);

    }

    // line 70
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_85f3948e03d08ba53823252947235ac074c8fba001d70f95165e0f39f5843cad = $this->env->getExtension("native_profiler");
        $__internal_85f3948e03d08ba53823252947235ac074c8fba001d70f95165e0f39f5843cad->enter($__internal_85f3948e03d08ba53823252947235ac074c8fba001d70f95165e0f39f5843cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 
<script>    
 ";
        
        $__internal_85f3948e03d08ba53823252947235ac074c8fba001d70f95165e0f39f5843cad->leave($__internal_85f3948e03d08ba53823252947235ac074c8fba001d70f95165e0f39f5843cad_prof);

    }

    public function getTemplateName()
    {
        return ":banner:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 70,  125 => 53,  115 => 50,  107 => 45,  97 => 38,  92 => 35,  88 => 34,  64 => 13,  56 => 7,  50 => 6,  36 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets_extra %} */
/*       */
/* {% endblock %}*/
/* {% block body %}*/
/*     <h1>Banner</h1>*/
/*  <!-- BEGIN CONTAINER -->*/
/*         <div class="page-container">*/
/*             <!-- BEGIN CONTENT -->*/
/*                     <div class="row">*/
/*                        <div class="col-xs-12 col-sm-12	col-md-12 col-lg-12 ">*/
/*                             <a class="btn btn-success" href="{{ path('banner_new') }}" ><span>Agregar</span></a>*/
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
/*                                                <th class="all" width="10%">ID   </th>                              */
/*                                             </tr>*/
/*                                         </thead>*/
/*                                         <tbody>*/
/*                                         {% for banner in banners%}*/
/*                                             <tr>*/
/*                                                 <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('banner_show', { 'id': banner.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-search"></i>*/
/*                                                         </a>       */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                                     <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('banner_edit', { 'id': banner.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-pencil"></i>*/
/*                                                         </a>       */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                             <td>{{ banner.id | raw }}</td>*/
/*                                                                                          */
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
