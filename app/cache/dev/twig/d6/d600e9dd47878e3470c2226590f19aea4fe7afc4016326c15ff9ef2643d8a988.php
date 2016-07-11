<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0385fd407f05cf7a632030c24386286956e04dc59a569ac6a26f0ffa9d2e30c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_41da877723e730742d0e23c3ca86827ab9ab563a3a44994e4d77b43e4af2f8eb = $this->env->getExtension("native_profiler");
        $__internal_41da877723e730742d0e23c3ca86827ab9ab563a3a44994e4d77b43e4af2f8eb->enter($__internal_41da877723e730742d0e23c3ca86827ab9ab563a3a44994e4d77b43e4af2f8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41da877723e730742d0e23c3ca86827ab9ab563a3a44994e4d77b43e4af2f8eb->leave($__internal_41da877723e730742d0e23c3ca86827ab9ab563a3a44994e4d77b43e4af2f8eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dde4e310e6e8ab719f18d0a51d9e5c94653b95164d78c05018fa01254b66c23a = $this->env->getExtension("native_profiler");
        $__internal_dde4e310e6e8ab719f18d0a51d9e5c94653b95164d78c05018fa01254b66c23a->enter($__internal_dde4e310e6e8ab719f18d0a51d9e5c94653b95164d78c05018fa01254b66c23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_dde4e310e6e8ab719f18d0a51d9e5c94653b95164d78c05018fa01254b66c23a->leave($__internal_dde4e310e6e8ab719f18d0a51d9e5c94653b95164d78c05018fa01254b66c23a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
