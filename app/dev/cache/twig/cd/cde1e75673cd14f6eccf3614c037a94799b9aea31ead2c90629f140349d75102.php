<?php

/* :usuario:index.html.twig */
class __TwigTemplate_03533f08fc7bfe1c8e8073e42ca0d9b27dd2d4c5a662c569a4a103cc894d5781 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":usuario:index.html.twig", 2);
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
        $__internal_3556cbf4fb0a8fd16e07c0f7efff5dd4b90b3e0af901e65b4582eeff1bafb908 = $this->env->getExtension("native_profiler");
        $__internal_3556cbf4fb0a8fd16e07c0f7efff5dd4b90b3e0af901e65b4582eeff1bafb908->enter($__internal_3556cbf4fb0a8fd16e07c0f7efff5dd4b90b3e0af901e65b4582eeff1bafb908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":usuario:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3556cbf4fb0a8fd16e07c0f7efff5dd4b90b3e0af901e65b4582eeff1bafb908->leave($__internal_3556cbf4fb0a8fd16e07c0f7efff5dd4b90b3e0af901e65b4582eeff1bafb908_prof);

    }

    // line 3
    public function block_stylesheets_extra($context, array $blocks = array())
    {
        $__internal_b0297ae3c4ac7378e5720e08e46ec36103d708c0293cef7c7ad6044eebb45bac = $this->env->getExtension("native_profiler");
        $__internal_b0297ae3c4ac7378e5720e08e46ec36103d708c0293cef7c7ad6044eebb45bac->enter($__internal_b0297ae3c4ac7378e5720e08e46ec36103d708c0293cef7c7ad6044eebb45bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets_extra"));

        echo " 
      
";
        
        $__internal_b0297ae3c4ac7378e5720e08e46ec36103d708c0293cef7c7ad6044eebb45bac->leave($__internal_b0297ae3c4ac7378e5720e08e46ec36103d708c0293cef7c7ad6044eebb45bac_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fe8de3732f860d817ddc3613b8e7287e04523ff83a1156618c9ef6ac4a0ddc9 = $this->env->getExtension("native_profiler");
        $__internal_9fe8de3732f860d817ddc3613b8e7287e04523ff83a1156618c9ef6ac4a0ddc9->enter($__internal_9fe8de3732f860d817ddc3613b8e7287e04523ff83a1156618c9ef6ac4a0ddc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <h1>Lista de Usuarios</h1>
 <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">
            <!-- BEGIN CONTENT -->
                    <div class=\"row\">
                       <div class=\"col-xs-12 col-sm-12\tcol-md-12 col-lg-12 \">
                            <a class=\"btn btn-success\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("usuario_new");
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
                                                <th class=\"all\">Cedula</th>                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["Usuario"]) {
            // line 37
            echo "                                            <tr>
                                                <td>
                                                    <center>
                                                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_show", array("id" => $this->getAttribute($context["Usuario"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-search\"></i>
                                                        </a>       
                                                    </center>
                                                </td>
                                                    <td>
                                                    <center>
                                                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_edit", array("id" => $this->getAttribute($context["Usuario"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-pencil\"></i>
                                                        </a>       
                                                    </center>
                                                </td>
                                            
                                                <td>";
            // line 53
            echo $this->getAttribute($context["Usuario"], "dni", array());
            echo "</td>                                                
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
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
        
        $__internal_9fe8de3732f860d817ddc3613b8e7287e04523ff83a1156618c9ef6ac4a0ddc9->leave($__internal_9fe8de3732f860d817ddc3613b8e7287e04523ff83a1156618c9ef6ac4a0ddc9_prof);

    }

    // line 73
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_2ae6ca2a88bb4866815a36724e7dae2cd3d62ef54f4228e2ea7da8a02d9831ab = $this->env->getExtension("native_profiler");
        $__internal_2ae6ca2a88bb4866815a36724e7dae2cd3d62ef54f4228e2ea7da8a02d9831ab->enter($__internal_2ae6ca2a88bb4866815a36724e7dae2cd3d62ef54f4228e2ea7da8a02d9831ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 


 <script>    
 ";
        
        $__internal_2ae6ca2a88bb4866815a36724e7dae2cd3d62ef54f4228e2ea7da8a02d9831ab->leave($__internal_2ae6ca2a88bb4866815a36724e7dae2cd3d62ef54f4228e2ea7da8a02d9831ab_prof);

    }

    public function getTemplateName()
    {
        return ":usuario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 73,  125 => 55,  116 => 53,  107 => 47,  97 => 40,  92 => 37,  88 => 36,  64 => 15,  56 => 9,  50 => 8,  36 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets_extra %} */
/*       */
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     <h1>Lista de Usuarios</h1>*/
/*  <!-- BEGIN CONTAINER -->*/
/*         <div class="page-container">*/
/*             <!-- BEGIN CONTENT -->*/
/*                     <div class="row">*/
/*                        <div class="col-xs-12 col-sm-12	col-md-12 col-lg-12 ">*/
/*                             <a class="btn btn-success" href="{{ path('usuario_new') }}" ><span>Agregar</span></a>*/
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
/*                                                 <th class="all">Cedula</th>                                               */
/*                                             </tr>*/
/*                                         </thead>*/
/*                                         <tbody>*/
/*                                         {% for Usuario in usuarios%}*/
/*                                             <tr>*/
/*                                                 <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('usuario_show', { 'id': Usuario.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-search"></i>*/
/*                                                         </a>       */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                                     <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('usuario_edit', { 'id': Usuario.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-pencil"></i>*/
/*                                                         </a>       */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                             */
/*                                                 <td>{{ Usuario.dni | raw }}</td>                                                */
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
/* */
