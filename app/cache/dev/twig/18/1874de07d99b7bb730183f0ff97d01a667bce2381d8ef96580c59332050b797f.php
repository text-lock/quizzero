<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_e3449c2d3dacdf2e3cebc938478407fdd5a701ff7498e91422f1d396fcaba449 extends Twig_Template
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
        $__internal_a829c9bae55994e836ce93c161f3f1f35d6aef468ca4b242f3257742b10c0c9d = $this->env->getExtension("native_profiler");
        $__internal_a829c9bae55994e836ce93c161f3f1f35d6aef468ca4b242f3257742b10c0c9d->enter($__internal_a829c9bae55994e836ce93c161f3f1f35d6aef468ca4b242f3257742b10c0c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_a829c9bae55994e836ce93c161f3f1f35d6aef468ca4b242f3257742b10c0c9d->leave($__internal_a829c9bae55994e836ce93c161f3f1f35d6aef468ca4b242f3257742b10c0c9d_prof);

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
