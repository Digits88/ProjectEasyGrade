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
            'courselist' => array($this, 'block_courselist'),
            'modulename' => array($this, 'block_modulename'),
            'contentdetail' => array($this, 'block_contentdetail'),
            'javascripts' => array($this, 'block_javascripts'),
            'cumstomScript' => array($this, 'block_cumstomScript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a72e8859b27c763415aab8bfb0c57c153d040ddcea759c22f0bdabf685e1d980 = $this->env->getExtension("native_profiler");
        $__internal_a72e8859b27c763415aab8bfb0c57c153d040ddcea759c22f0bdabf685e1d980->enter($__internal_a72e8859b27c763415aab8bfb0c57c153d040ddcea759c22f0bdabf685e1d980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 90
        $this->displayBlock('javascripts', $context, $blocks);
        // line 109
        echo "</body>
</html>
";
        
        $__internal_a72e8859b27c763415aab8bfb0c57c153d040ddcea759c22f0bdabf685e1d980->leave($__internal_a72e8859b27c763415aab8bfb0c57c153d040ddcea759c22f0bdabf685e1d980_prof);

    }

    // line 4
    public function block_headerdetail($context, array $blocks = array())
    {
        $__internal_656b4f54763ae99b8dbd783bfcaa416f5135963d87eace33ad6a58713e59549a = $this->env->getExtension("native_profiler");
        $__internal_656b4f54763ae99b8dbd783bfcaa416f5135963d87eace33ad6a58713e59549a->enter($__internal_656b4f54763ae99b8dbd783bfcaa416f5135963d87eace33ad6a58713e59549a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerdetail"));

        // line 5
        echo "        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
    ";
        
        $__internal_656b4f54763ae99b8dbd783bfcaa416f5135963d87eace33ad6a58713e59549a->leave($__internal_656b4f54763ae99b8dbd783bfcaa416f5135963d87eace33ad6a58713e59549a_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7ed71dfc08447b4e50facba37e5105f8e43b427b0257195fb046efa50695316 = $this->env->getExtension("native_profiler");
        $__internal_f7ed71dfc08447b4e50facba37e5105f8e43b427b0257195fb046efa50695316->enter($__internal_f7ed71dfc08447b4e50facba37e5105f8e43b427b0257195fb046efa50695316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f7ed71dfc08447b4e50facba37e5105f8e43b427b0257195fb046efa50695316->leave($__internal_f7ed71dfc08447b4e50facba37e5105f8e43b427b0257195fb046efa50695316_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_32412d94f039831e210008a3879a9efaddb070f6e708119740bad3161e39381c = $this->env->getExtension("native_profiler");
        $__internal_32412d94f039831e210008a3879a9efaddb070f6e708119740bad3161e39381c->enter($__internal_32412d94f039831e210008a3879a9efaddb070f6e708119740bad3161e39381c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_32412d94f039831e210008a3879a9efaddb070f6e708119740bad3161e39381c->leave($__internal_32412d94f039831e210008a3879a9efaddb070f6e708119740bad3161e39381c_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_50a8625304e96c8913d420b34c985476fb77c847b23c08d3c064f18c84e9b91c = $this->env->getExtension("native_profiler");
        $__internal_50a8625304e96c8913d420b34c985476fb77c847b23c08d3c064f18c84e9b91c->enter($__internal_50a8625304e96c8913d420b34c985476fb77c847b23c08d3c064f18c84e9b91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "    <div class=\"brand clearfix\">
        <a href=\"index.html\" class=\"logo\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/images/logo.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
        <span class=\"menu-btn\"><i class=\"fa fa-bars\"></i></span>
        <ul class=\"ts-profile-nav\">
            <li><a href=\"#\">Help</a></li>
            <li><a href=\"#\">Settings</a></li>
            <li class=\"ts-account\">
                <a href=\"#\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/images/ts-avatar.jpg"), "html", null, true);
        echo "\" class=\"ts-avatar hidden-side\" alt=\"\"> ";
        $this->displayBlock('authenticatedUsername', $context, $blocks);
        echo " <i class=\"fa fa-angle-down hidden-side\"></i></a>
                <ul>
                    <li><a href=\"#\">My Account</a></li>
                    <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Edit Account</a></li>
                    <li><a href=\"";
        // line 48
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
        // line 57
        $this->displayBlock('sidebarmenu', $context, $blocks);
        // line 70
        echo "            </ul>
        </nav>



        <div class=\"content-wrapper\">
            <div class=\"container-fluid\">

                <div class=\"row\">
                    <div class=\"col-md-12\">

                        <h2 class=\"page-title\">";
        // line 81
        $this->displayBlock('modulename', $context, $blocks);
        echo "</h2>
                        ";
        // line 82
        $this->displayBlock('contentdetail', $context, $blocks);
        // line 83
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_50a8625304e96c8913d420b34c985476fb77c847b23c08d3c064f18c84e9b91c->leave($__internal_50a8625304e96c8913d420b34c985476fb77c847b23c08d3c064f18c84e9b91c_prof);

    }

    // line 44
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_c9979bd8e5f068d37cf6a444be6081491b2afdad457871ddbc6c541d92dfb542 = $this->env->getExtension("native_profiler");
        $__internal_c9979bd8e5f068d37cf6a444be6081491b2afdad457871ddbc6c541d92dfb542->enter($__internal_c9979bd8e5f068d37cf6a444be6081491b2afdad457871ddbc6c541d92dfb542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        
        $__internal_c9979bd8e5f068d37cf6a444be6081491b2afdad457871ddbc6c541d92dfb542->leave($__internal_c9979bd8e5f068d37cf6a444be6081491b2afdad457871ddbc6c541d92dfb542_prof);

    }

    // line 57
    public function block_sidebarmenu($context, array $blocks = array())
    {
        $__internal_9ddd5d9f9b141e16ea79f2d985451e992f6982fe355c7933f2cce1afd0a4b31f = $this->env->getExtension("native_profiler");
        $__internal_9ddd5d9f9b141e16ea79f2d985451e992f6982fe355c7933f2cce1afd0a4b31f->enter($__internal_9ddd5d9f9b141e16ea79f2d985451e992f6982fe355c7933f2cce1afd0a4b31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebarmenu"));

        // line 58
        echo "                    <li class=\"ts-label\">Search</li>
                    <li>
                        <input type=\"text\" class=\"ts-sidebar-search\" placeholder=\"Search here...\">
                    </li>
                    <li class=\"ts-label\">Main</li>
                    <li><a href=\"/\"><i class=\"fa fa-dashboard\"></i> Dashboard</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-desktop\"></i> Courses</a>
                        <ul>
                            ";
        // line 66
        $this->displayBlock('courselist', $context, $blocks);
        // line 67
        echo "                        </ul>
                    </li>
                ";
        
        $__internal_9ddd5d9f9b141e16ea79f2d985451e992f6982fe355c7933f2cce1afd0a4b31f->leave($__internal_9ddd5d9f9b141e16ea79f2d985451e992f6982fe355c7933f2cce1afd0a4b31f_prof);

    }

    // line 66
    public function block_courselist($context, array $blocks = array())
    {
        $__internal_d7a3d8b6c6e012cc514d2ac7071bb9431074ad468d806151cf8b864ae5635b6f = $this->env->getExtension("native_profiler");
        $__internal_d7a3d8b6c6e012cc514d2ac7071bb9431074ad468d806151cf8b864ae5635b6f->enter($__internal_d7a3d8b6c6e012cc514d2ac7071bb9431074ad468d806151cf8b864ae5635b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "courselist"));

        
        $__internal_d7a3d8b6c6e012cc514d2ac7071bb9431074ad468d806151cf8b864ae5635b6f->leave($__internal_d7a3d8b6c6e012cc514d2ac7071bb9431074ad468d806151cf8b864ae5635b6f_prof);

    }

    // line 81
    public function block_modulename($context, array $blocks = array())
    {
        $__internal_5abaee8e16f3f6153bc60a663ab4d71f37a181661c1c6628c90f844fef767e9e = $this->env->getExtension("native_profiler");
        $__internal_5abaee8e16f3f6153bc60a663ab4d71f37a181661c1c6628c90f844fef767e9e->enter($__internal_5abaee8e16f3f6153bc60a663ab4d71f37a181661c1c6628c90f844fef767e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modulename"));

        echo "easyGrade";
        
        $__internal_5abaee8e16f3f6153bc60a663ab4d71f37a181661c1c6628c90f844fef767e9e->leave($__internal_5abaee8e16f3f6153bc60a663ab4d71f37a181661c1c6628c90f844fef767e9e_prof);

    }

    // line 82
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_996559771f8cc949da3e57a65d0bea689e6a8e2eb84573ff542308324f2cfebd = $this->env->getExtension("native_profiler");
        $__internal_996559771f8cc949da3e57a65d0bea689e6a8e2eb84573ff542308324f2cfebd->enter($__internal_996559771f8cc949da3e57a65d0bea689e6a8e2eb84573ff542308324f2cfebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        
        $__internal_996559771f8cc949da3e57a65d0bea689e6a8e2eb84573ff542308324f2cfebd->leave($__internal_996559771f8cc949da3e57a65d0bea689e6a8e2eb84573ff542308324f2cfebd_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f92f759d2037b681fff502d9100eadba873d99133d5d423e99bb19d37954576c = $this->env->getExtension("native_profiler");
        $__internal_f92f759d2037b681fff502d9100eadba873d99133d5d423e99bb19d37954576c->enter($__internal_f92f759d2037b681fff502d9100eadba873d99133d5d423e99bb19d37954576c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>


    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/fileinput.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/chartData.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 105
        $this->displayBlock('cumstomScript', $context, $blocks);
        
        $__internal_f92f759d2037b681fff502d9100eadba873d99133d5d423e99bb19d37954576c->leave($__internal_f92f759d2037b681fff502d9100eadba873d99133d5d423e99bb19d37954576c_prof);

    }

    public function block_cumstomScript($context, array $blocks = array())
    {
        $__internal_6430c68be9d67f4749fd8a18b637a17116c5ce4376794b3d0069b0cb06c0c674 = $this->env->getExtension("native_profiler");
        $__internal_6430c68be9d67f4749fd8a18b637a17116c5ce4376794b3d0069b0cb06c0c674->enter($__internal_6430c68be9d67f4749fd8a18b637a17116c5ce4376794b3d0069b0cb06c0c674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cumstomScript"));

        // line 106
        echo "
    ";
        
        $__internal_6430c68be9d67f4749fd8a18b637a17116c5ce4376794b3d0069b0cb06c0c674->leave($__internal_6430c68be9d67f4749fd8a18b637a17116c5ce4376794b3d0069b0cb06c0c674_prof);

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
        return array (  365 => 106,  353 => 105,  349 => 104,  345 => 103,  341 => 102,  337 => 101,  333 => 100,  329 => 99,  325 => 98,  321 => 97,  317 => 96,  310 => 91,  304 => 90,  293 => 82,  281 => 81,  270 => 66,  261 => 67,  259 => 66,  249 => 58,  243 => 57,  232 => 44,  219 => 83,  217 => 82,  213 => 81,  200 => 70,  198 => 57,  186 => 48,  182 => 47,  174 => 44,  165 => 38,  162 => 37,  156 => 36,  147 => 31,  142 => 29,  137 => 27,  132 => 25,  127 => 23,  122 => 21,  117 => 19,  112 => 17,  106 => 13,  100 => 12,  88 => 11,  76 => 5,  70 => 4,  61 => 109,  59 => 90,  57 => 36,  53 => 35,  47 => 33,  45 => 12,  40 => 11,  38 => 4,  33 => 1,);
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
/*             <li><a href="#">Help</a></li>*/
/*             <li><a href="#">Settings</a></li>*/
/*             <li class="ts-account">*/
/*                 <a href="#"><img src="{{ asset('bundles/nsep/images/ts-avatar.jpg') }}" class="ts-avatar hidden-side" alt=""> {% block authenticatedUsername %}{% endblock %} <i class="fa fa-angle-down hidden-side"></i></a>*/
/*                 <ul>*/
/*                     <li><a href="#">My Account</a></li>*/
/*                     <li><a href="{{ path('fos_user_profile_edit') }}">Edit Account</a></li>*/
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
/*                     <li class="ts-label">Search</li>*/
/*                     <li>*/
/*                         <input type="text" class="ts-sidebar-search" placeholder="Search here...">*/
/*                     </li>*/
/*                     <li class="ts-label">Main</li>*/
/*                     <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>*/
/*                     <li><a href="#"><i class="fa fa-desktop"></i> Courses</a>*/
/*                         <ul>*/
/*                             {% block courselist %}{% endblock courselist %}*/
/*                         </ul>*/
/*                     </li>*/
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
/*     {% block cumstomScript %}*/
/* */
/*     {% endblock %}*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
