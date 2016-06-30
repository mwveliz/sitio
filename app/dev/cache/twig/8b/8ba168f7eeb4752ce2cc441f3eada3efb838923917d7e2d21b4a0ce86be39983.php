<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_0abab6d69b14ff5f9d7066b95e3a42a16744bdfc3552d2b13f26f0789ca20d4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3042dccb562ec54335068d759c06414060b60f1e1875ed22ae1172b9e89981b = $this->env->getExtension("native_profiler");
        $__internal_c3042dccb562ec54335068d759c06414060b60f1e1875ed22ae1172b9e89981b->enter($__internal_c3042dccb562ec54335068d759c06414060b60f1e1875ed22ae1172b9e89981b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3042dccb562ec54335068d759c06414060b60f1e1875ed22ae1172b9e89981b->leave($__internal_c3042dccb562ec54335068d759c06414060b60f1e1875ed22ae1172b9e89981b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_910dc66b15e89ed08b0c4427d09b6b5efa3c31b55fea229a608b892a2a275ca8 = $this->env->getExtension("native_profiler");
        $__internal_910dc66b15e89ed08b0c4427d09b6b5efa3c31b55fea229a608b892a2a275ca8->enter($__internal_910dc66b15e89ed08b0c4427d09b6b5efa3c31b55fea229a608b892a2a275ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_910dc66b15e89ed08b0c4427d09b6b5efa3c31b55fea229a608b892a2a275ca8->leave($__internal_910dc66b15e89ed08b0c4427d09b6b5efa3c31b55fea229a608b892a2a275ca8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_66977aaaa20063daaa5bd12b82fc68bd4339ddc1f5907de84bd8879f8a9ad960 = $this->env->getExtension("native_profiler");
        $__internal_66977aaaa20063daaa5bd12b82fc68bd4339ddc1f5907de84bd8879f8a9ad960->enter($__internal_66977aaaa20063daaa5bd12b82fc68bd4339ddc1f5907de84bd8879f8a9ad960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_66977aaaa20063daaa5bd12b82fc68bd4339ddc1f5907de84bd8879f8a9ad960->leave($__internal_66977aaaa20063daaa5bd12b82fc68bd4339ddc1f5907de84bd8879f8a9ad960_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2869d6807a7ab2235c519676fef0eebd296ef35f7629ff770f19811fc2031ced = $this->env->getExtension("native_profiler");
        $__internal_2869d6807a7ab2235c519676fef0eebd296ef35f7629ff770f19811fc2031ced->enter($__internal_2869d6807a7ab2235c519676fef0eebd296ef35f7629ff770f19811fc2031ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2869d6807a7ab2235c519676fef0eebd296ef35f7629ff770f19811fc2031ced->leave($__internal_2869d6807a7ab2235c519676fef0eebd296ef35f7629ff770f19811fc2031ced_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
