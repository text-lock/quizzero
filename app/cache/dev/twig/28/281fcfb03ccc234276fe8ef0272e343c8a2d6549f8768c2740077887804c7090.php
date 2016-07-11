<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2edb96df6ad097f52bd9a09d0f62b9b372b13aeab997f283eea6fb91a4767a2d extends Twig_Template
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
        $__internal_c26fd477003eee2842804e5311dba2251513c361a46246f0df52b8e405712c9b = $this->env->getExtension("native_profiler");
        $__internal_c26fd477003eee2842804e5311dba2251513c361a46246f0df52b8e405712c9b->enter($__internal_c26fd477003eee2842804e5311dba2251513c361a46246f0df52b8e405712c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c26fd477003eee2842804e5311dba2251513c361a46246f0df52b8e405712c9b->leave($__internal_c26fd477003eee2842804e5311dba2251513c361a46246f0df52b8e405712c9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
