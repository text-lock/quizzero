<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a9af1c6c5f3c8712d2a77c49193543478bed5318fe1bf9d8df68dedb9e555cf9 extends Twig_Template
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
        $__internal_c921cf901dd3b4388bd6016c6e7017af13a13c7829404b6dda9838f4cd8179b3 = $this->env->getExtension("native_profiler");
        $__internal_c921cf901dd3b4388bd6016c6e7017af13a13c7829404b6dda9838f4cd8179b3->enter($__internal_c921cf901dd3b4388bd6016c6e7017af13a13c7829404b6dda9838f4cd8179b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c921cf901dd3b4388bd6016c6e7017af13a13c7829404b6dda9838f4cd8179b3->leave($__internal_c921cf901dd3b4388bd6016c6e7017af13a13c7829404b6dda9838f4cd8179b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
