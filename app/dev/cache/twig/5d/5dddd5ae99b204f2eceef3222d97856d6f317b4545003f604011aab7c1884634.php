<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_b585e1b0ca8815d4b8ad5660368b0cdf6b8f7c5cc58127d89ca7995e9af4e7e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6869fa62c5b9f42d1cf8413359935eee200f123e63c55627b6e5da83f847e8a6 = $this->env->getExtension("native_profiler");
        $__internal_6869fa62c5b9f42d1cf8413359935eee200f123e63c55627b6e5da83f847e8a6->enter($__internal_6869fa62c5b9f42d1cf8413359935eee200f123e63c55627b6e5da83f847e8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6869fa62c5b9f42d1cf8413359935eee200f123e63c55627b6e5da83f847e8a6->leave($__internal_6869fa62c5b9f42d1cf8413359935eee200f123e63c55627b6e5da83f847e8a6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_948841f88172139c97ad993bf47512bf5c35d47efe9c6e512b47aebe7b2a7307 = $this->env->getExtension("native_profiler");
        $__internal_948841f88172139c97ad993bf47512bf5c35d47efe9c6e512b47aebe7b2a7307->enter($__internal_948841f88172139c97ad993bf47512bf5c35d47efe9c6e512b47aebe7b2a7307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_948841f88172139c97ad993bf47512bf5c35d47efe9c6e512b47aebe7b2a7307->leave($__internal_948841f88172139c97ad993bf47512bf5c35d47efe9c6e512b47aebe7b2a7307_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d36e65c14b5402fb04d3da189882770794a9b19d7937739c44f3987b90d4a9f3 = $this->env->getExtension("native_profiler");
        $__internal_d36e65c14b5402fb04d3da189882770794a9b19d7937739c44f3987b90d4a9f3->enter($__internal_d36e65c14b5402fb04d3da189882770794a9b19d7937739c44f3987b90d4a9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d36e65c14b5402fb04d3da189882770794a9b19d7937739c44f3987b90d4a9f3->leave($__internal_d36e65c14b5402fb04d3da189882770794a9b19d7937739c44f3987b90d4a9f3_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_636a9325a25839d10518925a6832a8cbec33377fe98ac4f2586cde974035bc00 = $this->env->getExtension("native_profiler");
        $__internal_636a9325a25839d10518925a6832a8cbec33377fe98ac4f2586cde974035bc00->enter($__internal_636a9325a25839d10518925a6832a8cbec33377fe98ac4f2586cde974035bc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_636a9325a25839d10518925a6832a8cbec33377fe98ac4f2586cde974035bc00->leave($__internal_636a9325a25839d10518925a6832a8cbec33377fe98ac4f2586cde974035bc00_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
