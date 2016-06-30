<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_726bab57b46ed9456a6a50c64af4256f13402db7aed798b61c5ebcff30372ecc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f1de5b6feb475bcd265882c80332eba9ee22831663161820bbe63fd4bb972d9 = $this->env->getExtension("native_profiler");
        $__internal_6f1de5b6feb475bcd265882c80332eba9ee22831663161820bbe63fd4bb972d9->enter($__internal_6f1de5b6feb475bcd265882c80332eba9ee22831663161820bbe63fd4bb972d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_6f1de5b6feb475bcd265882c80332eba9ee22831663161820bbe63fd4bb972d9->leave($__internal_6f1de5b6feb475bcd265882c80332eba9ee22831663161820bbe63fd4bb972d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
