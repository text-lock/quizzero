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
        $__internal_dfc48b86ba5b19158db89424e88a052b9f8e58a4253192c59df814cf1b5caa9e = $this->env->getExtension("native_profiler");
        $__internal_dfc48b86ba5b19158db89424e88a052b9f8e58a4253192c59df814cf1b5caa9e->enter($__internal_dfc48b86ba5b19158db89424e88a052b9f8e58a4253192c59df814cf1b5caa9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_dfc48b86ba5b19158db89424e88a052b9f8e58a4253192c59df814cf1b5caa9e->leave($__internal_dfc48b86ba5b19158db89424e88a052b9f8e58a4253192c59df814cf1b5caa9e_prof);

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
