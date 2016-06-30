<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b054019aaf12f8989a5c50857844614a29e1091e02b75947e1e9c12278533e7f extends Twig_Template
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
        $__internal_a330526d1a961e690240a230321fd44fe8ad6cf9a01b973478c7a0efae66b6d9 = $this->env->getExtension("native_profiler");
        $__internal_a330526d1a961e690240a230321fd44fe8ad6cf9a01b973478c7a0efae66b6d9->enter($__internal_a330526d1a961e690240a230321fd44fe8ad6cf9a01b973478c7a0efae66b6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a330526d1a961e690240a230321fd44fe8ad6cf9a01b973478c7a0efae66b6d9->leave($__internal_a330526d1a961e690240a230321fd44fe8ad6cf9a01b973478c7a0efae66b6d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
