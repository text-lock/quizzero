<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c73c28507341c17240c0169b2eb1e571589177cf6f5f990abeca922b30fe7536 extends Twig_Template
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
        $__internal_aa0283d6b0865fad0323f458d8486ffa07b1e1c9a593a340f4804719fda179f7 = $this->env->getExtension("native_profiler");
        $__internal_aa0283d6b0865fad0323f458d8486ffa07b1e1c9a593a340f4804719fda179f7->enter($__internal_aa0283d6b0865fad0323f458d8486ffa07b1e1c9a593a340f4804719fda179f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_aa0283d6b0865fad0323f458d8486ffa07b1e1c9a593a340f4804719fda179f7->leave($__internal_aa0283d6b0865fad0323f458d8486ffa07b1e1c9a593a340f4804719fda179f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
