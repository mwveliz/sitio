<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_37c5bcaf3b4c0f76754996f841082b553516284912a17179ad5e520ded4eb948 extends Twig_Template
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
        $__internal_0b1fb4604df1381e55bef925c8e44dcbab876c2335f9f4b58d776b1440b6b78c = $this->env->getExtension("native_profiler");
        $__internal_0b1fb4604df1381e55bef925c8e44dcbab876c2335f9f4b58d776b1440b6b78c->enter($__internal_0b1fb4604df1381e55bef925c8e44dcbab876c2335f9f4b58d776b1440b6b78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b1fb4604df1381e55bef925c8e44dcbab876c2335f9f4b58d776b1440b6b78c->leave($__internal_0b1fb4604df1381e55bef925c8e44dcbab876c2335f9f4b58d776b1440b6b78c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_46a0bd7175c6d1abea6594b278886b12ba161980c93aba7314f9d65faea8195b = $this->env->getExtension("native_profiler");
        $__internal_46a0bd7175c6d1abea6594b278886b12ba161980c93aba7314f9d65faea8195b->enter($__internal_46a0bd7175c6d1abea6594b278886b12ba161980c93aba7314f9d65faea8195b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<h1>Registrar nuevo Usuario </h1>

    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
        
        $__internal_46a0bd7175c6d1abea6594b278886b12ba161980c93aba7314f9d65faea8195b->leave($__internal_46a0bd7175c6d1abea6594b278886b12ba161980c93aba7314f9d65faea8195b_prof);

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
        return array (  57 => 16,  51 => 13,  44 => 9,  40 => 7,  34 => 6,  11 => 4,);
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
