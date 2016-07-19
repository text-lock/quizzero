<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_aaab2f229236bbab3f06931a6db85211fdef3f2091a10044472185f9600dab4f extends Twig_Template
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
        $__internal_654e33dc3fcd29acb370be354fd3c41f9d63b5e3bf714750a01baf552dfb1f65 = $this->env->getExtension("native_profiler");
        $__internal_654e33dc3fcd29acb370be354fd3c41f9d63b5e3bf714750a01baf552dfb1f65->enter($__internal_654e33dc3fcd29acb370be354fd3c41f9d63b5e3bf714750a01baf552dfb1f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_654e33dc3fcd29acb370be354fd3c41f9d63b5e3bf714750a01baf552dfb1f65->leave($__internal_654e33dc3fcd29acb370be354fd3c41f9d63b5e3bf714750a01baf552dfb1f65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
