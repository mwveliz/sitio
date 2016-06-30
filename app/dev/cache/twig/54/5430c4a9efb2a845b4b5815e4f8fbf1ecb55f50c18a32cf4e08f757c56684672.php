<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_59a458571e711713e40afca34eec64c09700c4b409b3312b6dddf5e7e0b7afe8 extends Twig_Template
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
        $__internal_4076c455fdc085cd9d81bb7d9eebeb9b67016317239b830079a010465784e221 = $this->env->getExtension("native_profiler");
        $__internal_4076c455fdc085cd9d81bb7d9eebeb9b67016317239b830079a010465784e221->enter($__internal_4076c455fdc085cd9d81bb7d9eebeb9b67016317239b830079a010465784e221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4076c455fdc085cd9d81bb7d9eebeb9b67016317239b830079a010465784e221->leave($__internal_4076c455fdc085cd9d81bb7d9eebeb9b67016317239b830079a010465784e221_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
