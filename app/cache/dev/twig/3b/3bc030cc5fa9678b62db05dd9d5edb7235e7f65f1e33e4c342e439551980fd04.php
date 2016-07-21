<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_ccfec6448377f06c2ef68f1c87856c59f3e2db4a0b99a600720d651e850df26f extends Twig_Template
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
        $__internal_d42d4fb2cbf30bdce7196c6a492359ad7ce24426d631d3d9d654eac2c3c84912 = $this->env->getExtension("native_profiler");
        $__internal_d42d4fb2cbf30bdce7196c6a492359ad7ce24426d631d3d9d654eac2c3c84912->enter($__internal_d42d4fb2cbf30bdce7196c6a492359ad7ce24426d631d3d9d654eac2c3c84912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d42d4fb2cbf30bdce7196c6a492359ad7ce24426d631d3d9d654eac2c3c84912->leave($__internal_d42d4fb2cbf30bdce7196c6a492359ad7ce24426d631d3d9d654eac2c3c84912_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
