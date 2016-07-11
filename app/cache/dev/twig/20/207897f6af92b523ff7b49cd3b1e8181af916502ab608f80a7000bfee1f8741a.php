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
        $__internal_9b1cce5c57a0b67804a92b574f1ae97fe2b31c8ff275f2072769bb4fe7ad3dc3 = $this->env->getExtension("native_profiler");
        $__internal_9b1cce5c57a0b67804a92b574f1ae97fe2b31c8ff275f2072769bb4fe7ad3dc3->enter($__internal_9b1cce5c57a0b67804a92b574f1ae97fe2b31c8ff275f2072769bb4fe7ad3dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b1cce5c57a0b67804a92b574f1ae97fe2b31c8ff275f2072769bb4fe7ad3dc3->leave($__internal_9b1cce5c57a0b67804a92b574f1ae97fe2b31c8ff275f2072769bb4fe7ad3dc3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c26e5212dd4e235aa8e35d8d93d89cf58c9b25e7341d5c8ccdb7adee09e02d54 = $this->env->getExtension("native_profiler");
        $__internal_c26e5212dd4e235aa8e35d8d93d89cf58c9b25e7341d5c8ccdb7adee09e02d54->enter($__internal_c26e5212dd4e235aa8e35d8d93d89cf58c9b25e7341d5c8ccdb7adee09e02d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_c26e5212dd4e235aa8e35d8d93d89cf58c9b25e7341d5c8ccdb7adee09e02d54->leave($__internal_c26e5212dd4e235aa8e35d8d93d89cf58c9b25e7341d5c8ccdb7adee09e02d54_prof);

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
