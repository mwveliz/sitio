<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_322b6b4282178a601a0a3e97a4df3dd3245b3e6d707b549cebcaeb9243183a24 extends Twig_Template
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
        $__internal_a34a5f97398d9ef1c743bfe4e80baa937764c484abb7a486fadd0b38852e0e24 = $this->env->getExtension("native_profiler");
        $__internal_a34a5f97398d9ef1c743bfe4e80baa937764c484abb7a486fadd0b38852e0e24->enter($__internal_a34a5f97398d9ef1c743bfe4e80baa937764c484abb7a486fadd0b38852e0e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a34a5f97398d9ef1c743bfe4e80baa937764c484abb7a486fadd0b38852e0e24->leave($__internal_a34a5f97398d9ef1c743bfe4e80baa937764c484abb7a486fadd0b38852e0e24_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ad3851e5ae937693a6d5c332fae614ec5ea3ae736db948639b30b0a1e388b4b1 = $this->env->getExtension("native_profiler");
        $__internal_ad3851e5ae937693a6d5c332fae614ec5ea3ae736db948639b30b0a1e388b4b1->enter($__internal_ad3851e5ae937693a6d5c332fae614ec5ea3ae736db948639b30b0a1e388b4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ad3851e5ae937693a6d5c332fae614ec5ea3ae736db948639b30b0a1e388b4b1->leave($__internal_ad3851e5ae937693a6d5c332fae614ec5ea3ae736db948639b30b0a1e388b4b1_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0d816ecfae0b6e054b305a34f0c59c9d4172012dd5c086d0a1779a1bdcdcf397 = $this->env->getExtension("native_profiler");
        $__internal_0d816ecfae0b6e054b305a34f0c59c9d4172012dd5c086d0a1779a1bdcdcf397->enter($__internal_0d816ecfae0b6e054b305a34f0c59c9d4172012dd5c086d0a1779a1bdcdcf397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0d816ecfae0b6e054b305a34f0c59c9d4172012dd5c086d0a1779a1bdcdcf397->leave($__internal_0d816ecfae0b6e054b305a34f0c59c9d4172012dd5c086d0a1779a1bdcdcf397_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3437888e03c87c63cd56ca4cbd93692eaca1d32cf557af28dba1ba8647d3fd6e = $this->env->getExtension("native_profiler");
        $__internal_3437888e03c87c63cd56ca4cbd93692eaca1d32cf557af28dba1ba8647d3fd6e->enter($__internal_3437888e03c87c63cd56ca4cbd93692eaca1d32cf557af28dba1ba8647d3fd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3437888e03c87c63cd56ca4cbd93692eaca1d32cf557af28dba1ba8647d3fd6e->leave($__internal_3437888e03c87c63cd56ca4cbd93692eaca1d32cf557af28dba1ba8647d3fd6e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
