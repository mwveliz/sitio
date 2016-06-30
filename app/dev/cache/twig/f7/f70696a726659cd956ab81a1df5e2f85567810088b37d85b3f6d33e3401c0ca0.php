<?php

/* :enlace:index.html.twig */
class __TwigTemplate_ef426345eec07d7858f4c43cad864b0634c5b66135b5827df7efb46dc7f789b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":enlace:index.html.twig", 1);
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
        $__internal_4170472901dfb8bf6dc04824871d56bb5d07ab747f365e1ffea41be8840f6405 = $this->env->getExtension("native_profiler");
        $__internal_4170472901dfb8bf6dc04824871d56bb5d07ab747f365e1ffea41be8840f6405->enter($__internal_4170472901dfb8bf6dc04824871d56bb5d07ab747f365e1ffea41be8840f6405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enlace:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4170472901dfb8bf6dc04824871d56bb5d07ab747f365e1ffea41be8840f6405->leave($__internal_4170472901dfb8bf6dc04824871d56bb5d07ab747f365e1ffea41be8840f6405_prof);

    }

    // line 2
    public function block_stylesheets_extra($context, array $blocks = array())
    {
        $__internal_fbb422776437124b031e15e87a6f2070d2014529517b0b4b42536adbf9e9ded5 = $this->env->getExtension("native_profiler");
        $__internal_fbb422776437124b031e15e87a6f2070d2014529517b0b4b42536adbf9e9ded5->enter($__internal_fbb422776437124b031e15e87a6f2070d2014529517b0b4b42536adbf9e9ded5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets_extra"));

        echo " 
      
";
        
        $__internal_fbb422776437124b031e15e87a6f2070d2014529517b0b4b42536adbf9e9ded5->leave($__internal_fbb422776437124b031e15e87a6f2070d2014529517b0b4b42536adbf9e9ded5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_542df67e483378a45755aa8e57029efebb1a9a277ef7c49a0b39a64db6570334 = $this->env->getExtension("native_profiler");
        $__internal_542df67e483378a45755aa8e57029efebb1a9a277ef7c49a0b39a64db6570334->enter($__internal_542df67e483378a45755aa8e57029efebb1a9a277ef7c49a0b39a64db6570334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Enlace</h1>
 <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">
            <!-- BEGIN CONTENT -->
                    <div class=\"row\">
                       <div class=\"col-xs-12 col-sm-12\tcol-md-12 col-lg-12 \">
                            <a class=\"btn btn-success\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("enlace_new");
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
        $context['_seq'] = twig_ensure_traversable((isset($context["enlaces"]) ? $context["enlaces"] : $this->getContext($context, "enlaces")));
        foreach ($context['_seq'] as $context["_key"] => $context["enlace"]) {
            // line 36
            echo "                                            <tr>
                                                <td>
                                                    <center>
                                                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("enlace_show", array("id" => $this->getAttribute($context["enlace"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-search\"></i>
                                                        </a>       
                                                    </center>
                                                </td>
                                                    <td>
                                                    <center>
                                                        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("enlace_edit", array("id" => $this->getAttribute($context["enlace"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-pencil\"></i>
                                                        </a>       
                                                    </center>
                                                </td>
                                            
                                                <td>";
            // line 52
            echo $this->getAttribute($context["enlace"], "descripcion", array());
            echo "</td>                                                
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enlace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
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
        
        $__internal_542df67e483378a45755aa8e57029efebb1a9a277ef7c49a0b39a64db6570334->leave($__internal_542df67e483378a45755aa8e57029efebb1a9a277ef7c49a0b39a64db6570334_prof);

    }

    // line 72
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_fd6f2f05d2f5f545c3816d5be7dffd18caf49f9ce9db73f18550236a363909e6 = $this->env->getExtension("native_profiler");
        $__internal_fd6f2f05d2f5f545c3816d5be7dffd18caf49f9ce9db73f18550236a363909e6->enter($__internal_fd6f2f05d2f5f545c3816d5be7dffd18caf49f9ce9db73f18550236a363909e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        echo " 


 <script>    
 ";
        
        $__internal_fd6f2f05d2f5f545c3816d5be7dffd18caf49f9ce9db73f18550236a363909e6->leave($__internal_fd6f2f05d2f5f545c3816d5be7dffd18caf49f9ce9db73f18550236a363909e6_prof);

    }

    public function getTemplateName()
    {
        return ":enlace:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 72,  125 => 54,  116 => 52,  107 => 46,  97 => 39,  92 => 36,  88 => 35,  64 => 14,  56 => 8,  50 => 7,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets_extra %} */
/*       */
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     <h1>Enlace</h1>*/
/*  <!-- BEGIN CONTAINER -->*/
/*         <div class="page-container">*/
/*             <!-- BEGIN CONTENT -->*/
/*                     <div class="row">*/
/*                        <div class="col-xs-12 col-sm-12	col-md-12 col-lg-12 ">*/
/*                             <a class="btn btn-success" href="{{ path('enlace_new') }}" ><span>Agregar</span></a>*/
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
/*                                         {% for enlace in enlaces%}*/
/*                                             <tr>*/
/*                                                 <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('enlace_show', { 'id': enlace.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-search"></i>*/
/*                                                         </a>       */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                                     <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('enlace_edit', { 'id': enlace.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-pencil"></i>*/
/*                                                         </a>       */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                             */
/*                                                 <td>{{ enlace.descripcion | raw }}</td>                                                */
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
