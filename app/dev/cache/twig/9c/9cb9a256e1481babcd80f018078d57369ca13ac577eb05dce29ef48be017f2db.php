<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_bff7f3215fb8e268b678568880ff74549d62e84ab992246fe838d1789d525258 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87bddadd1fe8da7fbf6728e1543df6cc2e973357c31b1086ec53df163da82c99 = $this->env->getExtension("native_profiler");
        $__internal_87bddadd1fe8da7fbf6728e1543df6cc2e973357c31b1086ec53df163da82c99->enter($__internal_87bddadd1fe8da7fbf6728e1543df6cc2e973357c31b1086ec53df163da82c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87bddadd1fe8da7fbf6728e1543df6cc2e973357c31b1086ec53df163da82c99->leave($__internal_87bddadd1fe8da7fbf6728e1543df6cc2e973357c31b1086ec53df163da82c99_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc9c5e8e53230f42e20ac9aa0a9b6f9298a6f7bf1beb040ec31cdd2eaaa7731d = $this->env->getExtension("native_profiler");
        $__internal_bc9c5e8e53230f42e20ac9aa0a9b6f9298a6f7bf1beb040ec31cdd2eaaa7731d->enter($__internal_bc9c5e8e53230f42e20ac9aa0a9b6f9298a6f7bf1beb040ec31cdd2eaaa7731d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bc9c5e8e53230f42e20ac9aa0a9b6f9298a6f7bf1beb040ec31cdd2eaaa7731d->leave($__internal_bc9c5e8e53230f42e20ac9aa0a9b6f9298a6f7bf1beb040ec31cdd2eaaa7731d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_49194d6d1a09c4fa894c2cc8adefcc2c9026de147758cc056a738018f5bf6342 = $this->env->getExtension("native_profiler");
        $__internal_49194d6d1a09c4fa894c2cc8adefcc2c9026de147758cc056a738018f5bf6342->enter($__internal_49194d6d1a09c4fa894c2cc8adefcc2c9026de147758cc056a738018f5bf6342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_49194d6d1a09c4fa894c2cc8adefcc2c9026de147758cc056a738018f5bf6342->leave($__internal_49194d6d1a09c4fa894c2cc8adefcc2c9026de147758cc056a738018f5bf6342_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
