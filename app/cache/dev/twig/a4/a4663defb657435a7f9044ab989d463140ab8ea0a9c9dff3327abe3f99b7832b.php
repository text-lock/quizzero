<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_e87084ea4ec7e1789ba7f0b1796e7fc317b5f65e30f4126a1011345c3d382742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_b2a4d7822201ee6aab68e1097e101831ebffc0a39725cab59a6e3ca2a28e3577 = $this->env->getExtension("native_profiler");
        $__internal_b2a4d7822201ee6aab68e1097e101831ebffc0a39725cab59a6e3ca2a28e3577->enter($__internal_b2a4d7822201ee6aab68e1097e101831ebffc0a39725cab59a6e3ca2a28e3577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2a4d7822201ee6aab68e1097e101831ebffc0a39725cab59a6e3ca2a28e3577->leave($__internal_b2a4d7822201ee6aab68e1097e101831ebffc0a39725cab59a6e3ca2a28e3577_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e31267095230edf5b4bece4188fc829c143f6473da8e81c6163096d8184ffc2f = $this->env->getExtension("native_profiler");
        $__internal_e31267095230edf5b4bece4188fc829c143f6473da8e81c6163096d8184ffc2f->enter($__internal_e31267095230edf5b4bece4188fc829c143f6473da8e81c6163096d8184ffc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_e31267095230edf5b4bece4188fc829c143f6473da8e81c6163096d8184ffc2f->leave($__internal_e31267095230edf5b4bece4188fc829c143f6473da8e81c6163096d8184ffc2f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
