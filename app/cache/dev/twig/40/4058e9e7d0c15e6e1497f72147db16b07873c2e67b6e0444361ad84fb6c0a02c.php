<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_50ef1f44b8e07ea22f7adf4be9a9947d2cb25525f8b581f941ace0656ee3b3e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_ad306bb76fd4838a90377e1c75692f328e28715621edfd09419829ca521b2546 = $this->env->getExtension("native_profiler");
        $__internal_ad306bb76fd4838a90377e1c75692f328e28715621edfd09419829ca521b2546->enter($__internal_ad306bb76fd4838a90377e1c75692f328e28715621edfd09419829ca521b2546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad306bb76fd4838a90377e1c75692f328e28715621edfd09419829ca521b2546->leave($__internal_ad306bb76fd4838a90377e1c75692f328e28715621edfd09419829ca521b2546_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a36d1da1ee9a368d2cabcfe86baada4d3bee70aecc99614b3d852506bb17e858 = $this->env->getExtension("native_profiler");
        $__internal_a36d1da1ee9a368d2cabcfe86baada4d3bee70aecc99614b3d852506bb17e858->enter($__internal_a36d1da1ee9a368d2cabcfe86baada4d3bee70aecc99614b3d852506bb17e858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a36d1da1ee9a368d2cabcfe86baada4d3bee70aecc99614b3d852506bb17e858->leave($__internal_a36d1da1ee9a368d2cabcfe86baada4d3bee70aecc99614b3d852506bb17e858_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
