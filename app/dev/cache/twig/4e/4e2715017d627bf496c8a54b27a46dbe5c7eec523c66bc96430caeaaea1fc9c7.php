<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b879fcec2ff49606fbcabc7ea8450765d1c3a216b4ebdbe94441be320102be9b extends Twig_Template
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
        $__internal_484c8d049ef79a3a7cd8033fb3eb8c6890057887ec729a756dac5f643ffb62da = $this->env->getExtension("native_profiler");
        $__internal_484c8d049ef79a3a7cd8033fb3eb8c6890057887ec729a756dac5f643ffb62da->enter($__internal_484c8d049ef79a3a7cd8033fb3eb8c6890057887ec729a756dac5f643ffb62da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_484c8d049ef79a3a7cd8033fb3eb8c6890057887ec729a756dac5f643ffb62da->leave($__internal_484c8d049ef79a3a7cd8033fb3eb8c6890057887ec729a756dac5f643ffb62da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
