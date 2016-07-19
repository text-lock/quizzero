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
        $__internal_fad544bd1a03f91ecaca3cd23d4ef2f3c20aa1d286ad35f5c5bded7694940a07 = $this->env->getExtension("native_profiler");
        $__internal_fad544bd1a03f91ecaca3cd23d4ef2f3c20aa1d286ad35f5c5bded7694940a07->enter($__internal_fad544bd1a03f91ecaca3cd23d4ef2f3c20aa1d286ad35f5c5bded7694940a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_fad544bd1a03f91ecaca3cd23d4ef2f3c20aa1d286ad35f5c5bded7694940a07->leave($__internal_fad544bd1a03f91ecaca3cd23d4ef2f3c20aa1d286ad35f5c5bded7694940a07_prof);

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
