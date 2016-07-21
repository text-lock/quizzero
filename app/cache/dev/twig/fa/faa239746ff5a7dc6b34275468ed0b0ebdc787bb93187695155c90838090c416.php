<?php

/* base.html.twig */
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
        $__internal_bf7d05f8d01a23dbd11fda775b9b38de18c39e7e56f4b68f8561fdcd9f8efe29 = $this->env->getExtension("native_profiler");
        $__internal_bf7d05f8d01a23dbd11fda775b9b38de18c39e7e56f4b68f8561fdcd9f8efe29->enter($__internal_bf7d05f8d01a23dbd11fda775b9b38de18c39e7e56f4b68f8561fdcd9f8efe29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_bf7d05f8d01a23dbd11fda775b9b38de18c39e7e56f4b68f8561fdcd9f8efe29->leave($__internal_bf7d05f8d01a23dbd11fda775b9b38de18c39e7e56f4b68f8561fdcd9f8efe29_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_23d3c3d9edccd77880184157d786b05ccea65296f398a54e0d3f5cc7ce50890a = $this->env->getExtension("native_profiler");
        $__internal_23d3c3d9edccd77880184157d786b05ccea65296f398a54e0d3f5cc7ce50890a->enter($__internal_23d3c3d9edccd77880184157d786b05ccea65296f398a54e0d3f5cc7ce50890a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "QuizZERO";
        
        $__internal_23d3c3d9edccd77880184157d786b05ccea65296f398a54e0d3f5cc7ce50890a->leave($__internal_23d3c3d9edccd77880184157d786b05ccea65296f398a54e0d3f5cc7ce50890a_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_84c9e495d59c655d326e73b8a0ce9207a893d1af96eee6760b2dea878fc34d4f = $this->env->getExtension("native_profiler");
        $__internal_84c9e495d59c655d326e73b8a0ce9207a893d1af96eee6760b2dea878fc34d4f->enter($__internal_84c9e495d59c655d326e73b8a0ce9207a893d1af96eee6760b2dea878fc34d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_84c9e495d59c655d326e73b8a0ce9207a893d1af96eee6760b2dea878fc34d4f->leave($__internal_84c9e495d59c655d326e73b8a0ce9207a893d1af96eee6760b2dea878fc34d4f_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ce928f9b6433f5d286635bbf573a3c50e075ff159d12919a8fd66d390c92e3db = $this->env->getExtension("native_profiler");
        $__internal_ce928f9b6433f5d286635bbf573a3c50e075ff159d12919a8fd66d390c92e3db->enter($__internal_ce928f9b6433f5d286635bbf573a3c50e075ff159d12919a8fd66d390c92e3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ce928f9b6433f5d286635bbf573a3c50e075ff159d12919a8fd66d390c92e3db->leave($__internal_ce928f9b6433f5d286635bbf573a3c50e075ff159d12919a8fd66d390c92e3db_prof);

    }

    // line 49
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_4155fd11a85df144184a24bdfcf35f52c0fd806fbadaa49e90341cf50a3b66b2 = $this->env->getExtension("native_profiler");
        $__internal_4155fd11a85df144184a24bdfcf35f52c0fd806fbadaa49e90341cf50a3b66b2->enter($__internal_4155fd11a85df144184a24bdfcf35f52c0fd806fbadaa49e90341cf50a3b66b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "QuizZERO";
        
        $__internal_4155fd11a85df144184a24bdfcf35f52c0fd806fbadaa49e90341cf50a3b66b2->leave($__internal_4155fd11a85df144184a24bdfcf35f52c0fd806fbadaa49e90341cf50a3b66b2_prof);

    }

    // line 70
    public function block_header_image($context, array $blocks = array())
    {
        $__internal_3de6796ebef47c1b692595b6cf5375fad9180df1cd0656b772571d4d5bcad62d = $this->env->getExtension("native_profiler");
        $__internal_3de6796ebef47c1b692595b6cf5375fad9180df1cd0656b772571d4d5bcad62d->enter($__internal_3de6796ebef47c1b692595b6cf5375fad9180df1cd0656b772571d4d5bcad62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_image"));

        echo "/img/home-bg.jpg";
        
        $__internal_3de6796ebef47c1b692595b6cf5375fad9180df1cd0656b772571d4d5bcad62d->leave($__internal_3de6796ebef47c1b692595b6cf5375fad9180df1cd0656b772571d4d5bcad62d_prof);

    }

    // line 75
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_b3e4b33c469033d5d3288426f9ef6d1a607e8dda22eb4efe6d66c17c90a196dc = $this->env->getExtension("native_profiler");
        $__internal_b3e4b33c469033d5d3288426f9ef6d1a607e8dda22eb4efe6d66c17c90a196dc->enter($__internal_b3e4b33c469033d5d3288426f9ef6d1a607e8dda22eb4efe6d66c17c90a196dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_title"));

        echo "KOLA";
        
        $__internal_b3e4b33c469033d5d3288426f9ef6d1a607e8dda22eb4efe6d66c17c90a196dc->leave($__internal_b3e4b33c469033d5d3288426f9ef6d1a607e8dda22eb4efe6d66c17c90a196dc_prof);

    }

    // line 77
    public function block_header_subtitle($context, array $blocks = array())
    {
        $__internal_755ced6bb1e272220612560b90bb93d015f5541a8c8a5adf568d1b71becfc1d2 = $this->env->getExtension("native_profiler");
        $__internal_755ced6bb1e272220612560b90bb93d015f5541a8c8a5adf568d1b71becfc1d2->enter($__internal_755ced6bb1e272220612560b90bb93d015f5541a8c8a5adf568d1b71becfc1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_subtitle"));

        echo "QUIZ";
        
        $__internal_755ced6bb1e272220612560b90bb93d015f5541a8c8a5adf568d1b71becfc1d2->leave($__internal_755ced6bb1e272220612560b90bb93d015f5541a8c8a5adf568d1b71becfc1d2_prof);

    }

    // line 88
    public function block_body($context, array $blocks = array())
    {
        $__internal_06a2706c871586acd40191e7d3335f63857b3091300602f8e273def2489d44f2 = $this->env->getExtension("native_profiler");
        $__internal_06a2706c871586acd40191e7d3335f63857b3091300602f8e273def2489d44f2->enter($__internal_06a2706c871586acd40191e7d3335f63857b3091300602f8e273def2489d44f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_06a2706c871586acd40191e7d3335f63857b3091300602f8e273def2489d44f2->leave($__internal_06a2706c871586acd40191e7d3335f63857b3091300602f8e273def2489d44f2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
