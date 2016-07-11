<?php

/* ::base.html.twig */
class __TwigTemplate_70f8f66eae54516a818d6945cbaf7fc5fb4e208c8dd80567c05b7c12eba8c20b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'blog_title' => array($this, 'block_blog_title'),
            'header_image' => array($this, 'block_header_image'),
            'header_title' => array($this, 'block_header_title'),
            'header_subtitle' => array($this, 'block_header_subtitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_979daadab1b0d814a6b7846e51407c99938b3009f7c46acb85e0e5c2f8ae7a89 = $this->env->getExtension("native_profiler");
        $__internal_979daadab1b0d814a6b7846e51407c99938b3009f7c46acb85e0e5c2f8ae7a89->enter($__internal_979daadab1b0d814a6b7846e51407c99938b3009f7c46acb85e0e5c2f8ae7a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - Quiz for FS</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
    ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    <!-- Navigation -->
    <nav class=\"navbar navbar-default navbar-custom navbar-fixed-top\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header page-scroll\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    Menu <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand\" href=\"/\">";
        // line 49
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"/\">Home</a>
                    </li>
                    <li>
                        <a href=\"/user\">User</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class=\"intro-header\" style=\"background-image: url('";
        // line 70
        $this->displayBlock('header_image', $context, $blocks);
        echo "')\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                    <div class=\"site-heading\">
                        <h1>";
        // line 75
        $this->displayBlock('header_title', $context, $blocks);
        echo "</h1>
                        <hr class=\"small\"/>
                        <span class=\"subheading\">";
        // line 77
        $this->displayBlock('header_subtitle', $context, $blocks);
        echo "</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <article>
        <!-- Main Content -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                    ";
        // line 88
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "                </div>
            </div>
        </div>
    </article>
     <!-- Footer -->
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                    <ul class=\"list-inline text-center\">
                    
                   
                        <li>
                            <a href=\"https://github.com/text-lock/quizzero\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                                    <i class=\"fa fa-github fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class=\"copyright text-muted\">By &copy;Nornik for FS <ins></ins> 2016</p>
                </div>
            </div>
        </div>
    </footer>

   

</body>

</html>

";
        
        $__internal_979daadab1b0d814a6b7846e51407c99938b3009f7c46acb85e0e5c2f8ae7a89->leave($__internal_979daadab1b0d814a6b7846e51407c99938b3009f7c46acb85e0e5c2f8ae7a89_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e53ad0c3559395f86c630c7e8aed93a1dd7829cd95a5f93c90882b288e206d3 = $this->env->getExtension("native_profiler");
        $__internal_7e53ad0c3559395f86c630c7e8aed93a1dd7829cd95a5f93c90882b288e206d3->enter($__internal_7e53ad0c3559395f86c630c7e8aed93a1dd7829cd95a5f93c90882b288e206d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "QuizZERO";
        
        $__internal_7e53ad0c3559395f86c630c7e8aed93a1dd7829cd95a5f93c90882b288e206d3->leave($__internal_7e53ad0c3559395f86c630c7e8aed93a1dd7829cd95a5f93c90882b288e206d3_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_376986d874bb006e06552b1f36dcf204fff4ed723d358f34761d1d86a5f4de77 = $this->env->getExtension("native_profiler");
        $__internal_376986d874bb006e06552b1f36dcf204fff4ed723d358f34761d1d86a5f4de77->enter($__internal_376986d874bb006e06552b1f36dcf204fff4ed723d358f34761d1d86a5f4de77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "
<!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Theme CSS -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/clean-blog.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/common.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>

    ";
        
        $__internal_376986d874bb006e06552b1f36dcf204fff4ed723d358f34761d1d86a5f4de77->leave($__internal_376986d874bb006e06552b1f36dcf204fff4ed723d358f34761d1d86a5f4de77_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6906aaf3a58983b2fafa32cdf0c359030d1f53091d8150f9fb5d18db9ff85a72 = $this->env->getExtension("native_profiler");
        $__internal_6906aaf3a58983b2fafa32cdf0c359030d1f53091d8150f9fb5d18db9ff85a72->enter($__internal_6906aaf3a58983b2fafa32cdf0c359030d1f53091d8150f9fb5d18db9ff85a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " <!-- jQuery -->
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>


    <!-- Theme JavaScript -->
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/clean-blog.min.js"), "html", null, true);
        echo "\"></script>
    
";
        
        $__internal_6906aaf3a58983b2fafa32cdf0c359030d1f53091d8150f9fb5d18db9ff85a72->leave($__internal_6906aaf3a58983b2fafa32cdf0c359030d1f53091d8150f9fb5d18db9ff85a72_prof);

    }

    // line 49
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_b497034d2bbb36e41d04a8ed25003120f21fbf9155d150b18b44ccc650d8364b = $this->env->getExtension("native_profiler");
        $__internal_b497034d2bbb36e41d04a8ed25003120f21fbf9155d150b18b44ccc650d8364b->enter($__internal_b497034d2bbb36e41d04a8ed25003120f21fbf9155d150b18b44ccc650d8364b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "QuizZERO";
        
        $__internal_b497034d2bbb36e41d04a8ed25003120f21fbf9155d150b18b44ccc650d8364b->leave($__internal_b497034d2bbb36e41d04a8ed25003120f21fbf9155d150b18b44ccc650d8364b_prof);

    }

    // line 70
    public function block_header_image($context, array $blocks = array())
    {
        $__internal_5a578e591259a09a18ee5177d2b8ed097ba9361b6ad6f1c3b29417a093911074 = $this->env->getExtension("native_profiler");
        $__internal_5a578e591259a09a18ee5177d2b8ed097ba9361b6ad6f1c3b29417a093911074->enter($__internal_5a578e591259a09a18ee5177d2b8ed097ba9361b6ad6f1c3b29417a093911074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_image"));

        echo "/img/home-bg.jpg";
        
        $__internal_5a578e591259a09a18ee5177d2b8ed097ba9361b6ad6f1c3b29417a093911074->leave($__internal_5a578e591259a09a18ee5177d2b8ed097ba9361b6ad6f1c3b29417a093911074_prof);

    }

    // line 75
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_e5fefa92e2813e56a037b724a992c457cfa16d7b4c3f9d4556c59464999de1a1 = $this->env->getExtension("native_profiler");
        $__internal_e5fefa92e2813e56a037b724a992c457cfa16d7b4c3f9d4556c59464999de1a1->enter($__internal_e5fefa92e2813e56a037b724a992c457cfa16d7b4c3f9d4556c59464999de1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_title"));

        echo "KOLA";
        
        $__internal_e5fefa92e2813e56a037b724a992c457cfa16d7b4c3f9d4556c59464999de1a1->leave($__internal_e5fefa92e2813e56a037b724a992c457cfa16d7b4c3f9d4556c59464999de1a1_prof);

    }

    // line 77
    public function block_header_subtitle($context, array $blocks = array())
    {
        $__internal_9d34bf05b8296378563342cfa39c66e0a6debd85ceee5c5e04ad3dc8e92932d5 = $this->env->getExtension("native_profiler");
        $__internal_9d34bf05b8296378563342cfa39c66e0a6debd85ceee5c5e04ad3dc8e92932d5->enter($__internal_9d34bf05b8296378563342cfa39c66e0a6debd85ceee5c5e04ad3dc8e92932d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_subtitle"));

        echo "QUIZ";
        
        $__internal_9d34bf05b8296378563342cfa39c66e0a6debd85ceee5c5e04ad3dc8e92932d5->leave($__internal_9d34bf05b8296378563342cfa39c66e0a6debd85ceee5c5e04ad3dc8e92932d5_prof);

    }

    // line 88
    public function block_body($context, array $blocks = array())
    {
        $__internal_8416d24c870ed4facc2a9acf4c795c3666ce79d976e6b215fe707a2d1c01f37c = $this->env->getExtension("native_profiler");
        $__internal_8416d24c870ed4facc2a9acf4c795c3666ce79d976e6b215fe707a2d1c01f37c->enter($__internal_8416d24c870ed4facc2a9acf4c795c3666ce79d976e6b215fe707a2d1c01f37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8416d24c870ed4facc2a9acf4c795c3666ce79d976e6b215fe707a2d1c01f37c->leave($__internal_8416d24c870ed4facc2a9acf4c795c3666ce79d976e6b215fe707a2d1c01f37c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 88,  283 => 77,  271 => 75,  259 => 70,  247 => 49,  237 => 34,  230 => 30,  224 => 27,  216 => 26,  206 => 22,  202 => 21,  198 => 20,  192 => 17,  188 => 16,  182 => 13,  178 => 11,  172 => 10,  160 => 6,  120 => 89,  118 => 88,  104 => 77,  99 => 75,  91 => 70,  67 => 49,  51 => 37,  49 => 26,  46 => 25,  44 => 10,  37 => 6,  30 => 1,);
    }
}
/* <!-- app/Resources/views/base.html.twig -->*/
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html"; charset=utf-8" />*/
/*     <title>{% block title %}QuizZERO{% endblock %} - Quiz for FS</title>*/
/*     <!--[if lt IE 9]>*/
/*     <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*     <![endif]-->*/
/*     {% block stylesheets %}*/
/* */
/* <!-- Bootstrap Core CSS -->*/
/*     <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">*/
/* */
/*     <!-- Theme CSS -->*/
/*     <link href="{{ asset('css/clean-blog.min.css') }}" rel="stylesheet">*/
/* 	<link href="{{ asset('css/common.css') }}" rel="stylesheet">*/
/* */
/*     <!-- Custom Fonts -->*/
/*     <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">*/
/*     <link href="{{ asset('http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic') }}" rel='stylesheet' type='text/css'>*/
/*     <link href="{{ asset('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') }}" rel='stylesheet' type='text/css'>*/
/* */
/*     {% endblock %}*/
/* */
/*     {% block javascripts %} <!-- jQuery -->*/
/*     <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>*/
/* */
/*     <!-- Bootstrap Core JavaScript -->*/
/*     <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>*/
/* */
/* */
/*     <!-- Theme JavaScript -->*/
/*     <script src="{{ asset('js/clean-blog.min.js') }}"></script>*/
/*     */
/* {% endblock %}*/
/*     <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/*     <!-- Navigation -->*/
/*     <nav class="navbar navbar-default navbar-custom navbar-fixed-top">*/
/*         <div class="container-fluid">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header page-scroll">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     Menu <i class="fa fa-bars"></i>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="/">{% block blog_title %}QuizZERO{% endblock %}</a>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     <li>*/
/*                         <a href="/">Home</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="/user">User</a>*/
/*                     </li>*/
/*                     */
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     </nav>*/
/*     <!-- Page Header -->*/
/*     <!-- Set your background image for this header on the line below. -->*/
/*     <header class="intro-header" style="background-image: url('{% block header_image %}/img/home-bg.jpg{% endblock %}')">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                     <div class="site-heading">*/
/*                         <h1>{% block header_title %}KOLA{% endblock %}</h1>*/
/*                         <hr class="small"/>*/
/*                         <span class="subheading">{% block header_subtitle %}QUIZ{% endblock %}</span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </header>*/
/*     <article>*/
/*         <!-- Main Content -->*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                     {% block body %}{% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </article>*/
/*      <!-- Footer -->*/
/*     <footer>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                     <ul class="list-inline text-center">*/
/*                     */
/*                    */
/*                         <li>*/
/*                             <a href="https://github.com/text-lock/quizzero">*/
/*                                 <span class="fa-stack fa-lg">*/
/*                                     <i class="fa fa-circle fa-stack-2x"></i>*/
/*                                     <i class="fa fa-github fa-stack-1x fa-inverse"></i>*/
/*                                 </span>*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <p class="copyright text-muted">By &copy;Nornik for FS <ins></ins> 2016</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/* */
/*    */
/* */
/* </body>*/
/* */
/* </html>*/
/* */
/* */
