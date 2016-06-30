<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_371a3f11f84b76e701bc933eaf5f725b9d59253006a242c31bffc2f2257f9983 extends Twig_Template
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
        $__internal_440976e6c80dbaabcf2434800f1b2defd05542ba11c6d4f0463f6a5fcfa86501 = $this->env->getExtension("native_profiler");
        $__internal_440976e6c80dbaabcf2434800f1b2defd05542ba11c6d4f0463f6a5fcfa86501->enter($__internal_440976e6c80dbaabcf2434800f1b2defd05542ba11c6d4f0463f6a5fcfa86501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_440976e6c80dbaabcf2434800f1b2defd05542ba11c6d4f0463f6a5fcfa86501->leave($__internal_440976e6c80dbaabcf2434800f1b2defd05542ba11c6d4f0463f6a5fcfa86501_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
