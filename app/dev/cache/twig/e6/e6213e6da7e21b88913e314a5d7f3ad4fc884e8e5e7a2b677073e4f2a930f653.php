<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_765e8c567c60bb50757af34b8e12d9352ae8abbc4380767bf62ab2c8271e462c extends Twig_Template
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
        $__internal_14f02641875ec72277fec53b38a32b99d9e074856535e6b6acc172d6c8b507da = $this->env->getExtension("native_profiler");
        $__internal_14f02641875ec72277fec53b38a32b99d9e074856535e6b6acc172d6c8b507da->enter($__internal_14f02641875ec72277fec53b38a32b99d9e074856535e6b6acc172d6c8b507da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_14f02641875ec72277fec53b38a32b99d9e074856535e6b6acc172d6c8b507da->leave($__internal_14f02641875ec72277fec53b38a32b99d9e074856535e6b6acc172d6c8b507da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
