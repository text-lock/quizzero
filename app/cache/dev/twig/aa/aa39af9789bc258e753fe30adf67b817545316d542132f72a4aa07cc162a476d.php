<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2b312455b6925f6abd5eb5c6af8334da52f1c2a1fd72bd3d56159efaa779ab30 extends Twig_Template
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
        $__internal_6c1396fe999c1f3f5cfdb611e6f801de774532b844a29edc118e2aff214f84ae = $this->env->getExtension("native_profiler");
        $__internal_6c1396fe999c1f3f5cfdb611e6f801de774532b844a29edc118e2aff214f84ae->enter($__internal_6c1396fe999c1f3f5cfdb611e6f801de774532b844a29edc118e2aff214f84ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6c1396fe999c1f3f5cfdb611e6f801de774532b844a29edc118e2aff214f84ae->leave($__internal_6c1396fe999c1f3f5cfdb611e6f801de774532b844a29edc118e2aff214f84ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
