<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b02de01a65d209555b9dda103d52e90b41f2180626ddafb6b9cf49b543e88eb5 extends Twig_Template
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
        $__internal_04393fb43d2ecee3937eb2ac37ef865d9a21281008f957e82a22121e76d262e0 = $this->env->getExtension("native_profiler");
        $__internal_04393fb43d2ecee3937eb2ac37ef865d9a21281008f957e82a22121e76d262e0->enter($__internal_04393fb43d2ecee3937eb2ac37ef865d9a21281008f957e82a22121e76d262e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_04393fb43d2ecee3937eb2ac37ef865d9a21281008f957e82a22121e76d262e0->leave($__internal_04393fb43d2ecee3937eb2ac37ef865d9a21281008f957e82a22121e76d262e0_prof);

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
