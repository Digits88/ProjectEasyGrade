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
        $__internal_80ad4af58d5bc95a77d14eae5a22d19ca01d35d952074cf95f48e807951e06ca = $this->env->getExtension("native_profiler");
        $__internal_80ad4af58d5bc95a77d14eae5a22d19ca01d35d952074cf95f48e807951e06ca->enter($__internal_80ad4af58d5bc95a77d14eae5a22d19ca01d35d952074cf95f48e807951e06ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_80ad4af58d5bc95a77d14eae5a22d19ca01d35d952074cf95f48e807951e06ca->leave($__internal_80ad4af58d5bc95a77d14eae5a22d19ca01d35d952074cf95f48e807951e06ca_prof);

    }

    // line 4
    public function block_headerdetail($context, array $blocks = array())
    {
        $__internal_1a352e314b5c30d7d1791d20d395d9031f2f2824a889c3a3e72450f3ed5100b3 = $this->env->getExtension("native_profiler");
        $__internal_1a352e314b5c30d7d1791d20d395d9031f2f2824a889c3a3e72450f3ed5100b3->enter($__internal_1a352e314b5c30d7d1791d20d395d9031f2f2824a889c3a3e72450f3ed5100b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerdetail"));

        // line 5
        echo "        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
    ";
        
        $__internal_1a352e314b5c30d7d1791d20d395d9031f2f2824a889c3a3e72450f3ed5100b3->leave($__internal_1a352e314b5c30d7d1791d20d395d9031f2f2824a889c3a3e72450f3ed5100b3_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b45f27efb3df16d6a19daab8f0d74716795d78623131decaa7222f1edf42e41 = $this->env->getExtension("native_profiler");
        $__internal_3b45f27efb3df16d6a19daab8f0d74716795d78623131decaa7222f1edf42e41->enter($__internal_3b45f27efb3df16d6a19daab8f0d74716795d78623131decaa7222f1edf42e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "easyGrade";
        
        $__internal_3b45f27efb3df16d6a19daab8f0d74716795d78623131decaa7222f1edf42e41->leave($__internal_3b45f27efb3df16d6a19daab8f0d74716795d78623131decaa7222f1edf42e41_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dd94764d05d3bc0a4e83021360eaa71c1e6d5cf28d7196dbb65431c60b56e370 = $this->env->getExtension("native_profiler");
        $__internal_dd94764d05d3bc0a4e83021360eaa71c1e6d5cf28d7196dbb65431c60b56e370->enter($__internal_dd94764d05d3bc0a4e83021360eaa71c1e6d5cf28d7196dbb65431c60b56e370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_dd94764d05d3bc0a4e83021360eaa71c1e6d5cf28d7196dbb65431c60b56e370->leave($__internal_dd94764d05d3bc0a4e83021360eaa71c1e6d5cf28d7196dbb65431c60b56e370_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea7ce65fd34c4117abcddb2ef567cf56c0ef23c582524dd2ed287c959b975d4a = $this->env->getExtension("native_profiler");
        $__internal_ea7ce65fd34c4117abcddb2ef567cf56c0ef23c582524dd2ed287c959b975d4a->enter($__internal_ea7ce65fd34c4117abcddb2ef567cf56c0ef23c582524dd2ed287c959b975d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "    <div class=\"brand clearfix\">
        
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
        
        $__internal_ea7ce65fd34c4117abcddb2ef567cf56c0ef23c582524dd2ed287c959b975d4a->leave($__internal_ea7ce65fd34c4117abcddb2ef567cf56c0ef23c582524dd2ed287c959b975d4a_prof);

    }

    // line 42
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_92966c2b193c06ea6c80f9aecdf3caee449073199820d1861865bb7eb0eeab82 = $this->env->getExtension("native_profiler");
        $__internal_92966c2b193c06ea6c80f9aecdf3caee449073199820d1861865bb7eb0eeab82->enter($__internal_92966c2b193c06ea6c80f9aecdf3caee449073199820d1861865bb7eb0eeab82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        
        $__internal_92966c2b193c06ea6c80f9aecdf3caee449073199820d1861865bb7eb0eeab82->leave($__internal_92966c2b193c06ea6c80f9aecdf3caee449073199820d1861865bb7eb0eeab82_prof);

    }

    // line 54
    public function block_sidebarmenu($context, array $blocks = array())
    {
        $__internal_832855a129c26ef3ea1e24a9c355ed341b9fcd9e6ab7c1c7a65799e789b7763d = $this->env->getExtension("native_profiler");
        $__internal_832855a129c26ef3ea1e24a9c355ed341b9fcd9e6ab7c1c7a65799e789b7763d->enter($__internal_832855a129c26ef3ea1e24a9c355ed341b9fcd9e6ab7c1c7a65799e789b7763d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebarmenu"));

        // line 55
        echo "                    <a href=\"#\" class=\"logo\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/images/sidebarimage.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                    <p style=\"color: #ffffff; font-size: large;font-weight: 200;text-align: center \"><br><br><br><br>easyGrade<br>The platform where programming assignment evaluation made easy.</p>

                ";
        
        $__internal_832855a129c26ef3ea1e24a9c355ed341b9fcd9e6ab7c1c7a65799e789b7763d->leave($__internal_832855a129c26ef3ea1e24a9c355ed341b9fcd9e6ab7c1c7a65799e789b7763d_prof);

    }

    // line 70
    public function block_modulename($context, array $blocks = array())
    {
        $__internal_d3a47535ec41a7949a6d5837fce253b8387fef2db73de81ec5a387b0ea31d3db = $this->env->getExtension("native_profiler");
        $__internal_d3a47535ec41a7949a6d5837fce253b8387fef2db73de81ec5a387b0ea31d3db->enter($__internal_d3a47535ec41a7949a6d5837fce253b8387fef2db73de81ec5a387b0ea31d3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modulename"));

        echo "easyGrade";
        
        $__internal_d3a47535ec41a7949a6d5837fce253b8387fef2db73de81ec5a387b0ea31d3db->leave($__internal_d3a47535ec41a7949a6d5837fce253b8387fef2db73de81ec5a387b0ea31d3db_prof);

    }

    // line 71
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_176ab2d10459b8e0a49878d2a3bca384869b0393afe97a7e21cbb31e8780534d = $this->env->getExtension("native_profiler");
        $__internal_176ab2d10459b8e0a49878d2a3bca384869b0393afe97a7e21cbb31e8780534d->enter($__internal_176ab2d10459b8e0a49878d2a3bca384869b0393afe97a7e21cbb31e8780534d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        
        $__internal_176ab2d10459b8e0a49878d2a3bca384869b0393afe97a7e21cbb31e8780534d->leave($__internal_176ab2d10459b8e0a49878d2a3bca384869b0393afe97a7e21cbb31e8780534d_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7987166bae7461ced9da053763db0910f6fc000c177e2495ad8c77750cdba130 = $this->env->getExtension("native_profiler");
        $__internal_7987166bae7461ced9da053763db0910f6fc000c177e2495ad8c77750cdba130->enter($__internal_7987166bae7461ced9da053763db0910f6fc000c177e2495ad8c77750cdba130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7987166bae7461ced9da053763db0910f6fc000c177e2495ad8c77750cdba130->leave($__internal_7987166bae7461ced9da053763db0910f6fc000c177e2495ad8c77750cdba130_prof);

    }

    public function block_cumstomScript($context, array $blocks = array())
    {
        $__internal_47de369ae1eae450ef5d99b18d0d7ab43aab67a7ff658bd4b4ca24160651f6bc = $this->env->getExtension("native_profiler");
        $__internal_47de369ae1eae450ef5d99b18d0d7ab43aab67a7ff658bd4b4ca24160651f6bc->enter($__internal_47de369ae1eae450ef5d99b18d0d7ab43aab67a7ff658bd4b4ca24160651f6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cumstomScript"));

        // line 96
        echo "
    ";
        
        $__internal_47de369ae1eae450ef5d99b18d0d7ab43aab67a7ff658bd4b4ca24160651f6bc->leave($__internal_47de369ae1eae450ef5d99b18d0d7ab43aab67a7ff658bd4b4ca24160651f6bc_prof);

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
        return array (  339 => 96,  327 => 95,  322 => 93,  318 => 92,  314 => 91,  310 => 90,  306 => 89,  302 => 88,  298 => 87,  294 => 86,  290 => 85,  283 => 80,  277 => 79,  266 => 71,  254 => 70,  242 => 55,  236 => 54,  225 => 42,  212 => 72,  210 => 71,  206 => 70,  193 => 59,  191 => 54,  179 => 45,  175 => 44,  168 => 42,  161 => 37,  155 => 36,  146 => 31,  141 => 29,  136 => 27,  131 => 25,  126 => 23,  121 => 21,  116 => 19,  111 => 17,  105 => 13,  99 => 12,  87 => 11,  75 => 5,  69 => 4,  60 => 99,  58 => 79,  56 => 36,  52 => 35,  46 => 33,  44 => 12,  39 => 11,  37 => 4,  32 => 1,);
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
/*     <title>{% block title %}easyGrade{% endblock %}</title>*/
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
/*         */
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
