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
        $__internal_180cf6ef98596aa3dd4f2571679f30faf3560588d2ccf17b2f0c389ddf34f8c1 = $this->env->getExtension("native_profiler");
        $__internal_180cf6ef98596aa3dd4f2571679f30faf3560588d2ccf17b2f0c389ddf34f8c1->enter($__internal_180cf6ef98596aa3dd4f2571679f30faf3560588d2ccf17b2f0c389ddf34f8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_180cf6ef98596aa3dd4f2571679f30faf3560588d2ccf17b2f0c389ddf34f8c1->leave($__internal_180cf6ef98596aa3dd4f2571679f30faf3560588d2ccf17b2f0c389ddf34f8c1_prof);

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
