<?php

/* QuizzeroQuizBundle:Question:index.html.twig */
class __TwigTemplate_aeb3f28c40a2235a7898e7947f056ba22fc2359fca2ba95288ddb6d05e96fbd4 extends Twig_Template
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
        // line 2
        echo "
 ";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 6
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
        <article class=\"question ";
            // line 7
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index0", array())), "html", null, true);
            echo "\" id=\"question-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\">
            
            
            
            <blockquote>
            ";
            // line 12
            if ($this->getAttribute($context["question"], "image", array())) {
                // line 13
                echo "            \t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "img/upload", 1 => $this->getAttribute($context["question"], "image", array())))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : null), "title", array()), "html", null, true);
                echo " image not found\" class=\"large\" />
            \t";
            }
            // line 15
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "body", array()), "html", null, true);
            echo "
            </blockquote>
            <p>Your answer:<br> 
            ";
            // line 18
            $context["variates"] = twig_split_filter($this->env, $this->getAttribute($context["question"], "variates", array()), ";");
            // line 19
            echo "           \t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["variates"]) ? $context["variates"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["variate"]) {
                // line 20
                echo "            \t";
                if (($this->getAttribute($context["question"], "type", array()) == "textarea")) {
                    // line 21
                    echo "    \t    \t\t<textarea name = \"result[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                    echo "]\"></textarea>
                ";
                } elseif (($this->getAttribute(                // line 22
$context["question"], "type", array()) == "checkbox")) {
                    // line 23
                    echo "                    <input type=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "type", array()), "html", null, true);
                    echo "\" name = \"result[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "]\" value =\"";
                    echo twig_escape_filter($this->env, $context["variate"], "html", null, true);
                    echo "\">
                    <label>";
                    // line 24
                    echo twig_escape_filter($this->env, $context["variate"], "html", null, true);
                    echo "</label><br>
                ";
                } elseif (($this->getAttribute(                // line 25
$context["question"], "type", array()) == "radio")) {
                    // line 26
                    echo "                    <input type=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "type", array()), "html", null, true);
                    echo "\" name = \"result[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $context["variate"], "html", null, true);
                    echo "\" checked>
                    <label>";
                    // line 27
                    echo twig_escape_filter($this->env, $context["variate"], "html", null, true);
                    echo "</label><br>
    \t\t\t";
                } else {
                    // line 29
                    echo "    \t\t        \t<input type=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "type", array()), "html", null, true);
                    echo "\" name = \"result[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                    echo "]\">
    \t\t        \t<label>";
                    // line 30
                    echo twig_escape_filter($this->env, $context["variate"], "html", null, true);
                    echo "</label><br>
    \t        ";
                }
                // line 32
                echo "    \t        
            \t
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </p>
            \t<hr class=\"big\"/>
        </article>
        
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 40
            echo "        <p>Sorry, there are no questions for this quiz.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
   
";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

</form>
</p>";
    }

    public function getTemplateName()
    {
        return "QuizzeroQuizBundle:Question:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 44,  190 => 42,  183 => 40,  166 => 35,  150 => 32,  145 => 30,  138 => 29,  133 => 27,  124 => 26,  122 => 25,  118 => 24,  107 => 23,  105 => 22,  100 => 21,  97 => 20,  79 => 19,  77 => 18,  70 => 15,  62 => 13,  60 => 12,  50 => 7,  45 => 6,  27 => 5,  22 => 3,  19 => 2,);
    }
}
/* {# src/Quizzero/QuizBundle/Resources/views/Question/index.html.twig #}*/
/* */
/*  {{ form_start(form) }}*/
/* */
/*     {% for question in questions %}*/
/*         {{ form_errors(form) }}*/
/*         <article class="question {{ cycle(['odd', 'even'], loop.index0) }}" id="question-{{ question.id }}">*/
/*             */
/*             */
/*             */
/*             <blockquote>*/
/*             {% if question.image %}*/
/*             		<img src="{{ asset(['img/upload', question.image]|join) }}" alt="{{ quiz.title }} image not found" class="large" />*/
/*             	{% endif %}*/
/*                 {{ question.body }}*/
/*             </blockquote>*/
/*             <p>Your answer:<br> */
/*             {% set variates = question.variates|split(';') %}*/
/*            	{% for variate in variates %}*/
/*             	{% if question.type == 'textarea' %}*/
/*     	    		<textarea name = "result[{{question.id}}]"></textarea>*/
/*                 {% elseif question.type == 'checkbox'%}*/
/*                     <input type="{{question.type}}" name = "result[{{question.id}}][{{ loop.index }}]" value ="{{ variate }}">*/
/*                     <label>{{ variate }}</label><br>*/
/*                 {% elseif question.type == 'radio'%}*/
/*                     <input type="{{question.type}}" name = "result[{{question.id}}]" value="{{ variate }}" checked>*/
/*                     <label>{{ variate }}</label><br>*/
/*     			{% else %}*/
/*     		        	<input type="{{question.type}}" name = "result[{{question.id}}]">*/
/*     		        	<label>{{ variate }}</label><br>*/
/*     	        {% endif %}*/
/*     	        */
/*             	*/
/*             {% endfor %}*/
/*             </p>*/
/*             	<hr class="big"/>*/
/*         </article>*/
/*         */
/*     {% else %}*/
/*         <p>Sorry, there are no questions for this quiz.</p>*/
/*     {% endfor %}*/
/* */
/*    */
/* {{ form_rest(form) }}*/
/* */
/* </form>*/
/* </p>*/
