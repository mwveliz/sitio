<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_caf12b3fb5bfd16141602e85572959ffec9e872ba6803d6f44f05440989ae90f extends Twig_Template
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
        $__internal_8e0cb5a8e076505f351bd71f4606e22d329d3ba3604cb7658148485dff29e455 = $this->env->getExtension("native_profiler");
        $__internal_8e0cb5a8e076505f351bd71f4606e22d329d3ba3604cb7658148485dff29e455->enter($__internal_8e0cb5a8e076505f351bd71f4606e22d329d3ba3604cb7658148485dff29e455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8e0cb5a8e076505f351bd71f4606e22d329d3ba3604cb7658148485dff29e455->leave($__internal_8e0cb5a8e076505f351bd71f4606e22d329d3ba3604cb7658148485dff29e455_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
