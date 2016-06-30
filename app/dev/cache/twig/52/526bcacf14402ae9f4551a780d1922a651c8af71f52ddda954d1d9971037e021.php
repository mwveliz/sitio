<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_49e2b0a7e4137344ce724777eecb71bf1acc35c1a3efd51504474820b616550a extends Twig_Template
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
        $__internal_7d4687cc188b1adca24592294788992e48d6fcd298216324fc301350edf1487c = $this->env->getExtension("native_profiler");
        $__internal_7d4687cc188b1adca24592294788992e48d6fcd298216324fc301350edf1487c->enter($__internal_7d4687cc188b1adca24592294788992e48d6fcd298216324fc301350edf1487c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7d4687cc188b1adca24592294788992e48d6fcd298216324fc301350edf1487c->leave($__internal_7d4687cc188b1adca24592294788992e48d6fcd298216324fc301350edf1487c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
