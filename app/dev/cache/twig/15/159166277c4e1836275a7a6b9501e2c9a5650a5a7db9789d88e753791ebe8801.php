<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_f77e0bd7d8a5a160fe90575ee01e875b766d250722b30321116a7bf6c0acdbde extends Twig_Template
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
        $__internal_d91def96ed5cc966c279ea437d0221861d70e83d18b88b2d4c72f0e3c7209ee7 = $this->env->getExtension("native_profiler");
        $__internal_d91def96ed5cc966c279ea437d0221861d70e83d18b88b2d4c72f0e3c7209ee7->enter($__internal_d91def96ed5cc966c279ea437d0221861d70e83d18b88b2d4c72f0e3c7209ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_d91def96ed5cc966c279ea437d0221861d70e83d18b88b2d4c72f0e3c7209ee7->leave($__internal_d91def96ed5cc966c279ea437d0221861d70e83d18b88b2d4c72f0e3c7209ee7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
