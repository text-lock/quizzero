<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_f7a56af745de2c96170e830a3dad3ea680b4918d83b3061fde8ca6204b700227 extends Twig_Template
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
        $__internal_12fcccc352e6c882328ecc2588cc957a08d310dfe5c69f530d2a51dfdcb8ac0c = $this->env->getExtension("native_profiler");
        $__internal_12fcccc352e6c882328ecc2588cc957a08d310dfe5c69f530d2a51dfdcb8ac0c->enter($__internal_12fcccc352e6c882328ecc2588cc957a08d310dfe5c69f530d2a51dfdcb8ac0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_12fcccc352e6c882328ecc2588cc957a08d310dfe5c69f530d2a51dfdcb8ac0c->leave($__internal_12fcccc352e6c882328ecc2588cc957a08d310dfe5c69f530d2a51dfdcb8ac0c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/*         <traces>*/
/* {% for trace in exception.trace %}*/
/*             <trace>*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/*             </trace>*/
/* {% endfor %}*/
/*         </traces>*/
/* */
