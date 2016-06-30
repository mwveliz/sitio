<?php

/* :menu:index.html.twig */
class __TwigTemplate_75833450afd05ae499d9fc119fe77ab9308392702d75c3536c6947d85b4f4e85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":menu:index.html.twig", 1);
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
        $__internal_5c73da4bf6c2cbb1c961caa43185bee1aac5e994474dd18563072f1fbde302bd = $this->env->getExtension("native_profiler");
        $__internal_5c73da4bf6c2cbb1c961caa43185bee1aac5e994474dd18563072f1fbde302bd->enter($__internal_5c73da4bf6c2cbb1c961caa43185bee1aac5e994474dd18563072f1fbde302bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menu:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c73da4bf6c2cbb1c961caa43185bee1aac5e994474dd18563072f1fbde302bd->leave($__internal_5c73da4bf6c2cbb1c961caa43185bee1aac5e994474dd18563072f1fbde302bd_prof);

    }

    // line 2
    public function block_stylesheets_extra($context, array $blocks = array())
    {
        $__internal_1f675e1ff39715b7fc99eaa946bfa31915b3bdd80c75a2e861801df951537b02 = $this->env->getExtension("native_profiler");
        $__internal_1f675e1ff39715b7fc99eaa946bfa31915b3bdd80c75a2e861801df951537b02->enter($__internal_1f675e1ff39715b7fc99eaa946bfa31915b3bdd80c75a2e861801df951537b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets_extra"));

        // line 3
        echo "      
";
        
        $__internal_1f675e1ff39715b7fc99eaa946bfa31915b3bdd80c75a2e861801df951537b02->leave($__internal_1f675e1ff39715b7fc99eaa946bfa31915b3bdd80c75a2e861801df951537b02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_840e3c536f22f2ee35e1121ef8391818ece101296d4610d4551352a1cde8f6f7 = $this->env->getExtension("native_profiler");
        $__internal_840e3c536f22f2ee35e1121ef8391818ece101296d4610d4551352a1cde8f6f7->enter($__internal_840e3c536f22f2ee35e1121ef8391818ece101296d4610d4551352a1cde8f6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Menu</h1>
 <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">
            <!-- BEGIN CONTENT -->
                    <div class=\"row\">
                       <div class=\"col-xs-12 col-sm-12        col-md-12 col-lg-12 \">
                            <a class=\"btn btn-success\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("menu_new");
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
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
        foreach ($context['_seq'] as $context["_key"] => $context["Menu"]) {
            // line 36
            echo "                                            <tr>
                                                <td>
                                                    <center>
                                                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("menu_show", array("id" => $this->getAttribute($context["Menu"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-search\"></i>
                                                        </a>      
                                                    </center>
                                                </td>
                                                    <td>
                                                    <center>
                                                        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("menu_edit", array("id" => $this->getAttribute($context["Menu"], "id", array()))), "html", null, true);
            echo "\">
                                                            <i class=\"glyphicon glyphicon-pencil\"></i>
                                                        </a>      
                                                    </center>
                                                </td>
                                            
                                                <td>";
            // line 52
            echo $this->getAttribute($context["Menu"], "descripcion", array());
            echo "</td>                                                
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Menu'], $context['_parent'], $context['loop']);
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
        
        $__internal_840e3c536f22f2ee35e1121ef8391818ece101296d4610d4551352a1cde8f6f7->leave($__internal_840e3c536f22f2ee35e1121ef8391818ece101296d4610d4551352a1cde8f6f7_prof);

    }

    // line 72
    public function block_javascripts_extra($context, array $blocks = array())
    {
        $__internal_a4a6ec87f6d8734677fe881c6def222f9cdeca6a655c7d927114f39fa00eb8fa = $this->env->getExtension("native_profiler");
        $__internal_a4a6ec87f6d8734677fe881c6def222f9cdeca6a655c7d927114f39fa00eb8fa->enter($__internal_a4a6ec87f6d8734677fe881c6def222f9cdeca6a655c7d927114f39fa00eb8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_extra"));

        // line 73
        echo "

 <script>    
 ";
        
        $__internal_a4a6ec87f6d8734677fe881c6def222f9cdeca6a655c7d927114f39fa00eb8fa->leave($__internal_a4a6ec87f6d8734677fe881c6def222f9cdeca6a655c7d927114f39fa00eb8fa_prof);

    }

    public function getTemplateName()
    {
        return ":menu:index.html.twig";
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
/*     <h1>Menu</h1>*/
/*  <!-- BEGIN CONTAINER -->*/
/*         <div class="page-container">*/
/*             <!-- BEGIN CONTENT -->*/
/*                     <div class="row">*/
/*                        <div class="col-xs-12 col-sm-12        col-md-12 col-lg-12 ">*/
/*                             <a class="btn btn-success" href="{{ path('menu_new') }}" ><span>Agregar</span></a>*/
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
/*                                         {% for Menu in menus %}*/
/*                                             <tr>*/
/*                                                 <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('menu_show', { 'id': Menu.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-search"></i>*/
/*                                                         </a>      */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                                     <td>*/
/*                                                     <center>*/
/*                                                         <a href="{{ path('menu_edit', { 'id': Menu.id }) }}">*/
/*                                                             <i class="glyphicon glyphicon-pencil"></i>*/
/*                                                         </a>      */
/*                                                     </center>*/
/*                                                 </td>*/
/*                                             */
/*                                                 <td>{{ Menu.descripcion | raw }}</td>                                                */
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
