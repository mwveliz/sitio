<?php

/* :video:index.html.twig */
class __TwigTemplate_ab3880b9300d579d95653a5c6e2fd070ca6c0802bf8663785e514ee97ed22d2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":video:index.html.twig", 2);
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
        $__internal_a03dc3e74c2a11f01f6d6e1ca3ff0f47d994c422af02d0732d4b6e920f501622 = $this->env->getExtension("native_profiler");
        $__internal_a03dc3e74c2a11f01f6d6e1ca3ff0f47d994c422af02d0732d4b6e920f501622->enter($__internal_a03dc3e74c2a11f01f6d6e1ca3ff0f47d994c422af02d0732d4b6e920f501622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":video:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a03dc3e74c2a11f01f6d6e1ca3ff0f47d994c422af02d0732d4b6e920f501622->leave($__internal_a03dc3e74c2a11f01f6d6e1ca3ff0f47d994c422af02d0732d4b6e920f501622_prof);

    }

    // line 3
    public function block_stylesheets_extra($context, array $blocks = array())
    {
        $__internal_748d1defa3c0592cfeb2d468c5b72bec8c345619992df932ef0847a5f9808f80 = $this->env->getExtension("native_profiler");
        $__internal_748d1defa3c0592cfeb2d468c5b72bec8c345619992df932ef0847a5f9808f80->enter($__internal_748d1defa3c0592cfeb2d468c5b72bec8c345619992df932ef0847a5f9808f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets_extra"));

        echo " 
      
";
        
        $__internal_748d1defa3c0592cfeb2d468c5b72bec8c345619992df932ef0847a5f9808f80->leave($__internal_748d1defa3c0592cfeb2d468c5b72bec8c345619992df932ef0847a5f9808f80_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_eea0840d24b638331503c406a9b0e84ec38a7f260cb07315ab5c24dddc57fa15 = $this->env->getExtension("native_profiler");
        $__internal_eea0840d24b638331503c406a9b0e84ec38a7f260cb07315ab5c24dddc57fa15->enter($__internal_eea0840d24b638331503c406a9b0e84ec38a7f260cb07315ab5c24dddc57fa15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1>Videos</h1>
 <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">
            <!-- BEGIN CONTENT -->
                    <div class=\"row\">
                       <div class=\"col-xs-12 col-sm-12\tcol-md-12 col-lg-12 \">
                            <a class=\"btn btn-success\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("video_new");
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
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos")));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 35
            echo "                                            <tr>
                                                <td>
                                                    <center>
                                                        <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("video_show", array("id" => $this->getAttribute($context["video"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-search\"></i>
                                                        </a>       
                                                    </center>
                                                </td>
                                                    <td>
                                                    <center>
                                                        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("video_edit", array("id" => $this->getAttribute($context["video"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-pencil\"></i>
                                                        </a>       
                                                    </center>
                                                </td>
                                            
                                                <td>";
            // line 51
            echo $this->getAttribute($context["video"], "descripcion", array());
            echo "</td>                                                
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
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
        
        $__internal_eea0840d24b638331503c406a9b0e84ec38a7f260cb07315ab5c24dddc57fa15->leave($__internal_eea0840d24b638331503c406a9b0e84ec38a7f260cb07315ab5c24dddc57fa15_prof);

    }

    // line 70
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_1cff6f14ed44a7061d460f968e193cd68f5c9dd6e9dff00a65b80a2edd080348 = $this->env->getExtension("native_profiler");
        $__internal_1cff6f14ed44a7061d460f968e193cd68f5c9dd6e9dff00a65b80a2edd080348->enter($__internal_1cff6f14ed44a7061d460f968e193cd68f5c9dd6e9dff00a65b80a2edd080348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 
<script>    
 ";
        
        $__internal_1cff6f14ed44a7061d460f968e193cd68f5c9dd6e9dff00a65b80a2edd080348->leave($__internal_1cff6f14ed44a7061d460f968e193cd68f5c9dd6e9dff00a65b80a2edd080348_prof);

    }

    public function getTemplateName()
    {
        return ":video:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 70,  125 => 53,  116 => 51,  107 => 45,  97 => 38,  92 => 35,  88 => 34,  64 => 13,  56 => 7,  50 => 6,  36 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets_extra %} */
/*       */
/* {% endblock %}*/
/* {% block body %}*/
/*     <h1>Videos</h1>*/
/*  <!-- BEGIN CONTAINER -->*/
/*         <div class="page-container">*/
/*             <!-- BEGIN CONTENT -->*/
/*                     <div class="row">*/
/*                        <div class="col-xs-12 col-sm-12	col-md-12 col-lg-12 ">*/
/*                             <a class="btn btn-success" href="{{ path('video_new') }}" ><span>Agregar</span></a>*/
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
/*                                         {% for video in videos%}*/
/*                                             <tr>*/
/*                                                 <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('video_show', { 'id': video.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-search"></i>*/
/*                                                         </a>       */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                                     <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('video_edit', { 'id': video.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-pencil"></i>*/
/*                                                         </a>       */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                             */
/*                                                 <td>{{ video.descripcion | raw }}</td>                                                */
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
/* */
