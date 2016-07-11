<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_cd52bc14e92547213ec1085bb43b9cfd1e1bf96800d9517a89d1755998f40639 extends Twig_Template
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
        $__internal_a843b231514300eaffa061642ae60bc3f2732cbac1dbbbdaedf200a94419c104 = $this->env->getExtension("native_profiler");
        $__internal_a843b231514300eaffa061642ae60bc3f2732cbac1dbbbdaedf200a94419c104->enter($__internal_a843b231514300eaffa061642ae60bc3f2732cbac1dbbbdaedf200a94419c104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a843b231514300eaffa061642ae60bc3f2732cbac1dbbbdaedf200a94419c104->leave($__internal_a843b231514300eaffa061642ae60bc3f2732cbac1dbbbdaedf200a94419c104_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
