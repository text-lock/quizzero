<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_345b526524dfd2cb37842436fde58fb5eabc43bc50c49bab2c1722a385d0bd5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c58a92db277fd1c0495d0e0b7c4ac824eec0064a80a2c601635162e8feb14b91 = $this->env->getExtension("native_profiler");
        $__internal_c58a92db277fd1c0495d0e0b7c4ac824eec0064a80a2c601635162e8feb14b91->enter($__internal_c58a92db277fd1c0495d0e0b7c4ac824eec0064a80a2c601635162e8feb14b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c58a92db277fd1c0495d0e0b7c4ac824eec0064a80a2c601635162e8feb14b91->leave($__internal_c58a92db277fd1c0495d0e0b7c4ac824eec0064a80a2c601635162e8feb14b91_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9691803bf3566f8b2b68f21fcd206dca4c734bf1be1540a3f1cfa57170710250 = $this->env->getExtension("native_profiler");
        $__internal_9691803bf3566f8b2b68f21fcd206dca4c734bf1be1540a3f1cfa57170710250->enter($__internal_9691803bf3566f8b2b68f21fcd206dca4c734bf1be1540a3f1cfa57170710250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t
\t<h1>User card</h1>
        <div>
            ";
        // line 6
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 7
            echo "                ";
            $this->loadTemplate("QuizzeroQuizBundle::user.layout.html.twig", "FOSUserBundle::layout.html.twig", 7)->display($context);
            // line 8
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 13
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
/
                <a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 17
        echo "        </div>

        ";
        // line 19
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 20
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 21
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 22
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 23
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        ";
        }
        // line 28
        echo "
        <div>
            ";
        // line 30
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 32
        echo "        </div>
";
        
        $__internal_9691803bf3566f8b2b68f21fcd206dca4c734bf1be1540a3f1cfa57170710250->leave($__internal_9691803bf3566f8b2b68f21fcd206dca4c734bf1be1540a3f1cfa57170710250_prof);

    }

    // line 30
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25ec7182ff6f70b27fe74acfcf3e4633f3a35b3ce615c75aedac8e09fe16bdca = $this->env->getExtension("native_profiler");
        $__internal_25ec7182ff6f70b27fe74acfcf3e4633f3a35b3ce615c75aedac8e09fe16bdca->enter($__internal_25ec7182ff6f70b27fe74acfcf3e4633f3a35b3ce615c75aedac8e09fe16bdca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 31
        echo "            ";
        
        $__internal_25ec7182ff6f70b27fe74acfcf3e4633f3a35b3ce615c75aedac8e09fe16bdca->leave($__internal_25ec7182ff6f70b27fe74acfcf3e4633f3a35b3ce615c75aedac8e09fe16bdca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 31,  134 => 30,  126 => 32,  124 => 30,  120 => 28,  117 => 27,  111 => 26,  102 => 23,  97 => 22,  92 => 21,  87 => 20,  85 => 19,  81 => 17,  74 => 15,  66 => 13,  60 => 10,  56 => 9,  51 => 8,  48 => 7,  46 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* 	*/
/* 	<h1>User card</h1>*/
/*         <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {% include 'QuizzeroQuizBundle::user.layout.html.twig' %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/* /*/
/*                 <a href="{{ path('fos_user_registration_register') }}">{{ 'layout.register'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/* {% endblock %}*/
/* */
/* */
