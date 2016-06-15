<?php

/* base.html.twig */
class __TwigTemplate_9f4a27ef01856195ee521eecaba90aa7152061fe9ecb02801cc040de4ff413bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'headerdetail' => array($this, 'block_headerdetail'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'authenticatedUsername' => array($this, 'block_authenticatedUsername'),
            'sidebarmenu' => array($this, 'block_sidebarmenu'),
            'modulename' => array($this, 'block_modulename'),
            'contentdetail' => array($this, 'block_contentdetail'),
            'javascripts' => array($this, 'block_javascripts'),
            'cumstomScript' => array($this, 'block_cumstomScript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea7f1c879fcc5400baf5cfd1669a81bace80566526a1112f3879efb45eaddf20 = $this->env->getExtension("native_profiler");
        $__internal_ea7f1c879fcc5400baf5cfd1669a81bace80566526a1112f3879efb45eaddf20->enter($__internal_ea7f1c879fcc5400baf5cfd1669a81bace80566526a1112f3879efb45eaddf20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        $this->displayBlock('headerdetail', $context, $blocks);
        // line 11
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body background=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/images/back.jpg"), "html", null, true);
        echo "\">
";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 79
        $this->displayBlock('javascripts', $context, $blocks);
        // line 99
        echo "</body>
</html>
";
        
        $__internal_ea7f1c879fcc5400baf5cfd1669a81bace80566526a1112f3879efb45eaddf20->leave($__internal_ea7f1c879fcc5400baf5cfd1669a81bace80566526a1112f3879efb45eaddf20_prof);

    }

    // line 4
    public function block_headerdetail($context, array $blocks = array())
    {
        $__internal_1d4a3fa454aae2e94faed6421cc3f6c0fb12e125b75cba4b2ae1f6096fbfd0f3 = $this->env->getExtension("native_profiler");
        $__internal_1d4a3fa454aae2e94faed6421cc3f6c0fb12e125b75cba4b2ae1f6096fbfd0f3->enter($__internal_1d4a3fa454aae2e94faed6421cc3f6c0fb12e125b75cba4b2ae1f6096fbfd0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerdetail"));

        // line 5
        echo "        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
    ";
        
        $__internal_1d4a3fa454aae2e94faed6421cc3f6c0fb12e125b75cba4b2ae1f6096fbfd0f3->leave($__internal_1d4a3fa454aae2e94faed6421cc3f6c0fb12e125b75cba4b2ae1f6096fbfd0f3_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_c896b8210f395872ecdc09c6439af2fa1e827222e342d071d2254cc4c7b08cf7 = $this->env->getExtension("native_profiler");
        $__internal_c896b8210f395872ecdc09c6439af2fa1e827222e342d071d2254cc4c7b08cf7->enter($__internal_c896b8210f395872ecdc09c6439af2fa1e827222e342d071d2254cc4c7b08cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c896b8210f395872ecdc09c6439af2fa1e827222e342d071d2254cc4c7b08cf7->leave($__internal_c896b8210f395872ecdc09c6439af2fa1e827222e342d071d2254cc4c7b08cf7_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8459b30197449119b98773d045d81fbc97328183f000adaec5a51af46a5ef9b9 = $this->env->getExtension("native_profiler");
        $__internal_8459b30197449119b98773d045d81fbc97328183f000adaec5a51af46a5ef9b9->enter($__internal_8459b30197449119b98773d045d81fbc97328183f000adaec5a51af46a5ef9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">


        <!-- Font awesome -->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <!-- Sandstone Bootstrap CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/lecturer/css/bootsrap.min.css"), "html", null, true);
        echo "\">
        <!-- Bootstrap Datatables -->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- Bootstrap social button library -->
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/css/bootstrap-social.css"), "html", null, true);
        echo "\">
        <!-- Bootstrap select -->
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/css/bootstrap-select.css"), "html", null, true);
        echo "\">
        <!-- Bootstrap file input -->
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/css/fileinput.min.css"), "html", null, true);
        echo "\">
        <!-- Awesome Bootstrap checkbox -->
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/css/awesome-bootstrap-checkbox.css"), "html", null, true);
        echo "\">
        <!-- Admin Stye -->
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/css/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_8459b30197449119b98773d045d81fbc97328183f000adaec5a51af46a5ef9b9->leave($__internal_8459b30197449119b98773d045d81fbc97328183f000adaec5a51af46a5ef9b9_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_dabaebf9208f722fc9371c15d467ec1fb4e414806a892fc4c83abc45b2b426dc = $this->env->getExtension("native_profiler");
        $__internal_dabaebf9208f722fc9371c15d467ec1fb4e414806a892fc4c83abc45b2b426dc->enter($__internal_dabaebf9208f722fc9371c15d467ec1fb4e414806a892fc4c83abc45b2b426dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "    <div class=\"brand clearfix\">
        <a href=\"index.html\" class=\"logo\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/images/logo.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
        <span class=\"menu-btn\"><i class=\"fa fa-bars\"></i></span>
        <ul class=\"ts-profile-nav\">
            <li class=\"ts-account\">
                <a href=\"#\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/images/ts-avatar.jpg"), "html", null, true);
        echo "\" class=\"ts-avatar hidden-side\" alt=\"\"> ";
        $this->displayBlock('authenticatedUsername', $context, $blocks);
        echo " <i class=\"fa fa-angle-down hidden-side\"></i></a>
                <ul>
                    <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("own_account");
        echo "\">Edit Account</a></li>
                    <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class=\"ts-main-content\">
        <nav class=\"ts-sidebar\">
            <ul class=\"ts-sidebar-menu\">
                ";
        // line 54
        $this->displayBlock('sidebarmenu', $context, $blocks);
        // line 59
        echo "            </ul>
        </nav>



        <div class=\"content-wrapper\">
            <div class=\"container-fluid\">

                <div class=\"row\">
                    <div class=\"col-md-12\">

                        <h2 class=\"page-title\">";
        // line 70
        $this->displayBlock('modulename', $context, $blocks);
        echo "</h2>
                        ";
        // line 71
        $this->displayBlock('contentdetail', $context, $blocks);
        // line 72
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_dabaebf9208f722fc9371c15d467ec1fb4e414806a892fc4c83abc45b2b426dc->leave($__internal_dabaebf9208f722fc9371c15d467ec1fb4e414806a892fc4c83abc45b2b426dc_prof);

    }

    // line 42
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_15bd4e4a02d65f55b747de75a6d2946c44809e85e07eddbfea981752af50c137 = $this->env->getExtension("native_profiler");
        $__internal_15bd4e4a02d65f55b747de75a6d2946c44809e85e07eddbfea981752af50c137->enter($__internal_15bd4e4a02d65f55b747de75a6d2946c44809e85e07eddbfea981752af50c137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        
        $__internal_15bd4e4a02d65f55b747de75a6d2946c44809e85e07eddbfea981752af50c137->leave($__internal_15bd4e4a02d65f55b747de75a6d2946c44809e85e07eddbfea981752af50c137_prof);

    }

    // line 54
    public function block_sidebarmenu($context, array $blocks = array())
    {
        $__internal_1623dbef18a892aa047d0149def6320749cbc9aa41d406d1b6301ec5d9d97145 = $this->env->getExtension("native_profiler");
        $__internal_1623dbef18a892aa047d0149def6320749cbc9aa41d406d1b6301ec5d9d97145->enter($__internal_1623dbef18a892aa047d0149def6320749cbc9aa41d406d1b6301ec5d9d97145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebarmenu"));

        // line 55
        echo "                    <a href=\"#\" class=\"logo\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/images/sidebarimage.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                    <p style=\"color: #ffffff; font-size: large;font-weight: 200;text-align: center \"><br><br><br><br>easyGrade<br>The platform where programming assignment evaluation made easy.</p>

                ";
        
        $__internal_1623dbef18a892aa047d0149def6320749cbc9aa41d406d1b6301ec5d9d97145->leave($__internal_1623dbef18a892aa047d0149def6320749cbc9aa41d406d1b6301ec5d9d97145_prof);

    }

    // line 70
    public function block_modulename($context, array $blocks = array())
    {
        $__internal_16f3b8bcb3edae2026df7f0c1a117780b2ee38f369603ebd67b3f34d6df1f09e = $this->env->getExtension("native_profiler");
        $__internal_16f3b8bcb3edae2026df7f0c1a117780b2ee38f369603ebd67b3f34d6df1f09e->enter($__internal_16f3b8bcb3edae2026df7f0c1a117780b2ee38f369603ebd67b3f34d6df1f09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modulename"));

        echo "easyGrade";
        
        $__internal_16f3b8bcb3edae2026df7f0c1a117780b2ee38f369603ebd67b3f34d6df1f09e->leave($__internal_16f3b8bcb3edae2026df7f0c1a117780b2ee38f369603ebd67b3f34d6df1f09e_prof);

    }

    // line 71
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_31dc47959e8f4ec67d8b0e0fe2068c63bb63a1ec941e2f10fe71263a688d5a04 = $this->env->getExtension("native_profiler");
        $__internal_31dc47959e8f4ec67d8b0e0fe2068c63bb63a1ec941e2f10fe71263a688d5a04->enter($__internal_31dc47959e8f4ec67d8b0e0fe2068c63bb63a1ec941e2f10fe71263a688d5a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        
        $__internal_31dc47959e8f4ec67d8b0e0fe2068c63bb63a1ec941e2f10fe71263a688d5a04->leave($__internal_31dc47959e8f4ec67d8b0e0fe2068c63bb63a1ec941e2f10fe71263a688d5a04_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c0e7da6c1c2af98aef0eb7a2f63ec14f0a653ac62c3280b450de27f89a94581b = $this->env->getExtension("native_profiler");
        $__internal_c0e7da6c1c2af98aef0eb7a2f63ec14f0a653ac62c3280b450de27f89a94581b->enter($__internal_c0e7da6c1c2af98aef0eb7a2f63ec14f0a653ac62c3280b450de27f89a94581b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>


    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/fileinput.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/chartData.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/main.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 95
        $this->displayBlock('cumstomScript', $context, $blocks);
        
        $__internal_c0e7da6c1c2af98aef0eb7a2f63ec14f0a653ac62c3280b450de27f89a94581b->leave($__internal_c0e7da6c1c2af98aef0eb7a2f63ec14f0a653ac62c3280b450de27f89a94581b_prof);

    }

    public function block_cumstomScript($context, array $blocks = array())
    {
        $__internal_528c09c54735cf3fd2b7ffa2b5ffc3e05de3e51ac60b0d38eb1697c81383c404 = $this->env->getExtension("native_profiler");
        $__internal_528c09c54735cf3fd2b7ffa2b5ffc3e05de3e51ac60b0d38eb1697c81383c404->enter($__internal_528c09c54735cf3fd2b7ffa2b5ffc3e05de3e51ac60b0d38eb1697c81383c404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cumstomScript"));

        // line 96
        echo "
    ";
        
        $__internal_528c09c54735cf3fd2b7ffa2b5ffc3e05de3e51ac60b0d38eb1697c81383c404->leave($__internal_528c09c54735cf3fd2b7ffa2b5ffc3e05de3e51ac60b0d38eb1697c81383c404_prof);

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
        return array (  342 => 96,  330 => 95,  325 => 93,  321 => 92,  317 => 91,  313 => 90,  309 => 89,  305 => 88,  301 => 87,  297 => 86,  293 => 85,  286 => 80,  280 => 79,  269 => 71,  257 => 70,  245 => 55,  239 => 54,  228 => 42,  215 => 72,  213 => 71,  209 => 70,  196 => 59,  194 => 54,  182 => 45,  178 => 44,  171 => 42,  164 => 38,  161 => 37,  155 => 36,  146 => 31,  141 => 29,  136 => 27,  131 => 25,  126 => 23,  121 => 21,  116 => 19,  111 => 17,  105 => 13,  99 => 12,  87 => 11,  75 => 5,  69 => 4,  60 => 99,  58 => 79,  56 => 36,  52 => 35,  46 => 33,  44 => 12,  39 => 11,  37 => 4,  32 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     {% block headerdetail %}*/
/*         <meta charset="UTF-8" />*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/*     {% endblock %}*/
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/* */
/* */
/*         <!-- Font awesome -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/nsep/css/font-awesome.min.css') }}">*/
/*         <!-- Sandstone Bootstrap CSS -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/lecturer/css/bootsrap.min.css') }}">*/
/*         <!-- Bootstrap Datatables -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/nsep/css/dataTables.bootstrap.min.css') }}">*/
/*         <!-- Bootstrap social button library -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/nsep/css/bootstrap-social.css') }}">*/
/*         <!-- Bootstrap select -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/nsep/css/bootstrap-select.css') }}">*/
/*         <!-- Bootstrap file input -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/nsep/css/fileinput.min.css') }}">*/
/*         <!-- Awesome Bootstrap checkbox -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/nsep/css/awesome-bootstrap-checkbox.css') }}">*/
/*         <!-- Admin Stye -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/nsep/css/style.css') }}">*/
/*     {% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body background="{{ asset('bundles/nsep/images/back.jpg') }}">*/
/* {% block body %}*/
/*     <div class="brand clearfix">*/
/*         <a href="index.html" class="logo"><img src="{{ asset('bundles/nsep/images/logo.jpg') }}" class="img-responsive" alt=""></a>*/
/*         <span class="menu-btn"><i class="fa fa-bars"></i></span>*/
/*         <ul class="ts-profile-nav">*/
/*             <li class="ts-account">*/
/*                 <a href="#"><img src="{{ asset('bundles/nsep/images/ts-avatar.jpg') }}" class="ts-avatar hidden-side" alt=""> {% block authenticatedUsername %}{% endblock %} <i class="fa fa-angle-down hidden-side"></i></a>*/
/*                 <ul>*/
/*                     <li><a href="{{ path('own_account') }}">Edit Account</a></li>*/
/*                     <li><a href="{{ path('fos_user_security_logout') }}">Logout</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div class="ts-main-content">*/
/*         <nav class="ts-sidebar">*/
/*             <ul class="ts-sidebar-menu">*/
/*                 {% block sidebarmenu %}*/
/*                     <a href="#" class="logo"><img src="{{ asset('bundles/nsep/images/sidebarimage.jpg') }}" class="img-responsive" alt=""></a>*/
/*                     <p style="color: #ffffff; font-size: large;font-weight: 200;text-align: center "><br><br><br><br>easyGrade<br>The platform where programming assignment evaluation made easy.</p>*/
/* */
/*                 {% endblock sidebarmenu %}*/
/*             </ul>*/
/*         </nav>*/
/* */
/* */
/* */
/*         <div class="content-wrapper">*/
/*             <div class="container-fluid">*/
/* */
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/* */
/*                         <h2 class="page-title">{% block modulename %}easyGrade{% endblock %}</h2>*/
/*                         {% block contentdetail %}{% endblock %}*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* */
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*/
/*     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* */
/* */
/*     <script src="{{ asset('bundles/nsep/js/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/nsep/js/bootstrap-select.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/nsep/js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/nsep/js/jquery.dataTables.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/nsep/js/dataTables.bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/nsep/js/Chart.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/nsep/js/fileinput.js') }}"></script>*/
/*     <script src="{{ asset('bundles/nsep/js/chartData.js') }}"></script>*/
/*     <script src="{{ asset('bundles/nsep/js/main.js') }}"></script>*/
/* */
/*     {% block cumstomScript %}*/
/* */
/*     {% endblock %}*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
