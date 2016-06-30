<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_5a79113d3bf0ae0e9fa8ef4b1d64ded80b58b16fd32b1d69420386723c121e61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Registration:register.html.twig", 4);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<h1>Registrar nuevo Usuario </h1>

    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "
                                <div class=\"form-group\">
                                    <!-- Button -->                                        
                                      <div class=\"col-md-3\">
                                            <input type=\"submit\" id=\"_submit\" class=\"btn btn-info btn btn-lg btn-block\" name=\"_back\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Volver"), "html", null, true);
        echo "\" />
                                        </div>
                                        <div class=\"col-md-3\">
                                            <input type=\"submit\" id=\"_submit\" class=\"btn btn-success btn btn-lg btn-block\" name=\"_submit\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Registrar"), "html", null, true);
        echo "\" />
                                        </div>
                                </div>
        <ul class=\"record_actions\">
   
</ul>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  42 => 13,  35 => 9,  31 => 7,  28 => 6,  11 => 4,);
    }
}
/* {#{% extends ":inicio.html.twig" %}#}*/
/* */
/* */
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Registrar nuevo Usuario </h1>*/
/* */
/*     {{ form(form) }}*/
/*                                 <div class="form-group">*/
/*                                     <!-- Button -->                                        */
/*                                       <div class="col-md-3">*/
/*                                             <input type="submit" id="_submit" class="btn btn-info btn btn-lg btn-block" name="_back" value="{{ 'Volver'|trans }}" />*/
/*                                         </div>*/
/*                                         <div class="col-md-3">*/
/*                                             <input type="submit" id="_submit" class="btn btn-success btn btn-lg btn-block" name="_submit" value="{{ 'Registrar'|trans }}" />*/
/*                                         </div>*/
/*                                 </div>*/
/*         <ul class="record_actions">*/
/*    */
/* </ul>*/
/* {% endblock %}*/
/* */
