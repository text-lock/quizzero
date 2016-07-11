<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c477478ba55979126213a0384a27b21ec45b9b94a3dd174340c00f6338b42406 extends Twig_Template
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
        $__internal_d002022ae065dacc903a13f70b623313a2a20d282dc0ec188f2dfd5ac53c8f5a = $this->env->getExtension("native_profiler");
        $__internal_d002022ae065dacc903a13f70b623313a2a20d282dc0ec188f2dfd5ac53c8f5a->enter($__internal_d002022ae065dacc903a13f70b623313a2a20d282dc0ec188f2dfd5ac53c8f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d002022ae065dacc903a13f70b623313a2a20d282dc0ec188f2dfd5ac53c8f5a->leave($__internal_d002022ae065dacc903a13f70b623313a2a20d282dc0ec188f2dfd5ac53c8f5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
