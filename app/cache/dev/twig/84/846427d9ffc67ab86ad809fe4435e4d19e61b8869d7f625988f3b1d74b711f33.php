<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_11330922af778ec5e671a5a7491ca78c039e04faeb49ac5f13aa001cd5121765 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_34f8d737e3242cf0378071a0412214230f5321d95b567ca1cce06289d58269f2 = $this->env->getExtension("native_profiler");
        $__internal_34f8d737e3242cf0378071a0412214230f5321d95b567ca1cce06289d58269f2->enter($__internal_34f8d737e3242cf0378071a0412214230f5321d95b567ca1cce06289d58269f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34f8d737e3242cf0378071a0412214230f5321d95b567ca1cce06289d58269f2->leave($__internal_34f8d737e3242cf0378071a0412214230f5321d95b567ca1cce06289d58269f2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe9375935463df4457536fa8cf7979e2224f290ea41bf6a3c9845cef5c406c7a = $this->env->getExtension("native_profiler");
        $__internal_fe9375935463df4457536fa8cf7979e2224f290ea41bf6a3c9845cef5c406c7a->enter($__internal_fe9375935463df4457536fa8cf7979e2224f290ea41bf6a3c9845cef5c406c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fe9375935463df4457536fa8cf7979e2224f290ea41bf6a3c9845cef5c406c7a->leave($__internal_fe9375935463df4457536fa8cf7979e2224f290ea41bf6a3c9845cef5c406c7a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
