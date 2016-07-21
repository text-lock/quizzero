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
        $__internal_7af1ba6b80cfec3fb5db737d48a145e0873dbab65d58364dd5e3b9420b4ce7ee = $this->env->getExtension("native_profiler");
        $__internal_7af1ba6b80cfec3fb5db737d48a145e0873dbab65d58364dd5e3b9420b4ce7ee->enter($__internal_7af1ba6b80cfec3fb5db737d48a145e0873dbab65d58364dd5e3b9420b4ce7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_7af1ba6b80cfec3fb5db737d48a145e0873dbab65d58364dd5e3b9420b4ce7ee->leave($__internal_7af1ba6b80cfec3fb5db737d48a145e0873dbab65d58364dd5e3b9420b4ce7ee_prof);

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
