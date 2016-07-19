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
        $__internal_fcb73d9b39186e057214c225d4814555555371ab4adc167d2025a0c51acf0a94 = $this->env->getExtension("native_profiler");
        $__internal_fcb73d9b39186e057214c225d4814555555371ab4adc167d2025a0c51acf0a94->enter($__internal_fcb73d9b39186e057214c225d4814555555371ab4adc167d2025a0c51acf0a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_fcb73d9b39186e057214c225d4814555555371ab4adc167d2025a0c51acf0a94->leave($__internal_fcb73d9b39186e057214c225d4814555555371ab4adc167d2025a0c51acf0a94_prof);

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
