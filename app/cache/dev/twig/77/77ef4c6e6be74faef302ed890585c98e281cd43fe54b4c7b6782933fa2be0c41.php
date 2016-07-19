<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_2045b627d22fb4a807996f24f3aa4b5b72b1f434d2d399ea7f305af3206657c1 extends Twig_Template
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
        $__internal_6de838a08faf5a2d19139fda846de341e14a552e8b9a0e5f2245db3421d7606b = $this->env->getExtension("native_profiler");
        $__internal_6de838a08faf5a2d19139fda846de341e14a552e8b9a0e5f2245db3421d7606b->enter($__internal_6de838a08faf5a2d19139fda846de341e14a552e8b9a0e5f2245db3421d7606b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_6de838a08faf5a2d19139fda846de341e14a552e8b9a0e5f2245db3421d7606b->leave($__internal_6de838a08faf5a2d19139fda846de341e14a552e8b9a0e5f2245db3421d7606b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
