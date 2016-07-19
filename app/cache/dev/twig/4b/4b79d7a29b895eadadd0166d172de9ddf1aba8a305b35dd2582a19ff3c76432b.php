<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_ce06833df53242e600fdbfc732afe9c008441deb0b80d94bb9cded6320040a28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_fafd6d28a991af03110ba882e453bbec9c2262af6c28ec8052e84e1cbdfe36eb = $this->env->getExtension("native_profiler");
        $__internal_fafd6d28a991af03110ba882e453bbec9c2262af6c28ec8052e84e1cbdfe36eb->enter($__internal_fafd6d28a991af03110ba882e453bbec9c2262af6c28ec8052e84e1cbdfe36eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fafd6d28a991af03110ba882e453bbec9c2262af6c28ec8052e84e1cbdfe36eb->leave($__internal_fafd6d28a991af03110ba882e453bbec9c2262af6c28ec8052e84e1cbdfe36eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7bc04dfc0748bcaebe5f1bb40098187ba66a161df7180b4eb03ded1e0de23b93 = $this->env->getExtension("native_profiler");
        $__internal_7bc04dfc0748bcaebe5f1bb40098187ba66a161df7180b4eb03ded1e0de23b93->enter($__internal_7bc04dfc0748bcaebe5f1bb40098187ba66a161df7180b4eb03ded1e0de23b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_7bc04dfc0748bcaebe5f1bb40098187ba66a161df7180b4eb03ded1e0de23b93->leave($__internal_7bc04dfc0748bcaebe5f1bb40098187ba66a161df7180b4eb03ded1e0de23b93_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
