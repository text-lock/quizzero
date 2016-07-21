<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_1506976b34fe8b93ea60228b1cea9d20bab8f6bb1ef647f2779c08a02af11e75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_761beba3df030d12cfca296632bbf220b137ddbc231eff1bb7421ca1e9215877 = $this->env->getExtension("native_profiler");
        $__internal_761beba3df030d12cfca296632bbf220b137ddbc231eff1bb7421ca1e9215877->enter($__internal_761beba3df030d12cfca296632bbf220b137ddbc231eff1bb7421ca1e9215877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_761beba3df030d12cfca296632bbf220b137ddbc231eff1bb7421ca1e9215877->leave($__internal_761beba3df030d12cfca296632bbf220b137ddbc231eff1bb7421ca1e9215877_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d94bc3a527e02788fca95910f968cff23ca91a4ae6ccda7e0045be5568383f89 = $this->env->getExtension("native_profiler");
        $__internal_d94bc3a527e02788fca95910f968cff23ca91a4ae6ccda7e0045be5568383f89->enter($__internal_d94bc3a527e02788fca95910f968cff23ca91a4ae6ccda7e0045be5568383f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_d94bc3a527e02788fca95910f968cff23ca91a4ae6ccda7e0045be5568383f89->leave($__internal_d94bc3a527e02788fca95910f968cff23ca91a4ae6ccda7e0045be5568383f89_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
