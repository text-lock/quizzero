<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_496edf5c34b55d9a59cb036496b4510c7d377416070b87be78da49cb1d441b2a extends Twig_Template
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
        $__internal_cbfde431cd6416594abbf06377a3bd749b583b72f33fc5eb2a97a8fbb1cb3df2 = $this->env->getExtension("native_profiler");
        $__internal_cbfde431cd6416594abbf06377a3bd749b583b72f33fc5eb2a97a8fbb1cb3df2->enter($__internal_cbfde431cd6416594abbf06377a3bd749b583b72f33fc5eb2a97a8fbb1cb3df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_cbfde431cd6416594abbf06377a3bd749b583b72f33fc5eb2a97a8fbb1cb3df2->leave($__internal_cbfde431cd6416594abbf06377a3bd749b583b72f33fc5eb2a97a8fbb1cb3df2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
