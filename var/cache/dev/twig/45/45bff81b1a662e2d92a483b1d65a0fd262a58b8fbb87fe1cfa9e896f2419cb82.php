<?php

/* base.html.twig */
class __TwigTemplate_6b12ae45c8d4d48a58d6eccfaf5e6e6aad07865c03d2175b5ee7f34d8256aa09 extends Twig_Template
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
        $__internal_0c2b9c07ca6c43f32612cc06995bf829d903e8a46cb13a05b4b9bfa06c437e62 = $this->env->getExtension("native_profiler");
        $__internal_0c2b9c07ca6c43f32612cc06995bf829d903e8a46cb13a05b4b9bfa06c437e62->enter($__internal_0c2b9c07ca6c43f32612cc06995bf829d903e8a46cb13a05b4b9bfa06c437e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0c2b9c07ca6c43f32612cc06995bf829d903e8a46cb13a05b4b9bfa06c437e62->leave($__internal_0c2b9c07ca6c43f32612cc06995bf829d903e8a46cb13a05b4b9bfa06c437e62_prof);

    }

    // line 4
    public function block_headerdetail($context, array $blocks = array())
    {
        $__internal_1e5f0b416dc2dc5ef84f85e360d48fb04e4b33aa7f8fdd7a9987e7020db4bf0c = $this->env->getExtension("native_profiler");
        $__internal_1e5f0b416dc2dc5ef84f85e360d48fb04e4b33aa7f8fdd7a9987e7020db4bf0c->enter($__internal_1e5f0b416dc2dc5ef84f85e360d48fb04e4b33aa7f8fdd7a9987e7020db4bf0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerdetail"));

        // line 5
        echo "        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
    ";
        
        $__internal_1e5f0b416dc2dc5ef84f85e360d48fb04e4b33aa7f8fdd7a9987e7020db4bf0c->leave($__internal_1e5f0b416dc2dc5ef84f85e360d48fb04e4b33aa7f8fdd7a9987e7020db4bf0c_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_f09f0647ba9a00b8fa38939c74c9a01fcbbd66b15a02528cd4374914df3e2b41 = $this->env->getExtension("native_profiler");
        $__internal_f09f0647ba9a00b8fa38939c74c9a01fcbbd66b15a02528cd4374914df3e2b41->enter($__internal_f09f0647ba9a00b8fa38939c74c9a01fcbbd66b15a02528cd4374914df3e2b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f09f0647ba9a00b8fa38939c74c9a01fcbbd66b15a02528cd4374914df3e2b41->leave($__internal_f09f0647ba9a00b8fa38939c74c9a01fcbbd66b15a02528cd4374914df3e2b41_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5438a732a64a1092e9948397c7236729852100978701fed5ead349d8dfac6220 = $this->env->getExtension("native_profiler");
        $__internal_5438a732a64a1092e9948397c7236729852100978701fed5ead349d8dfac6220->enter($__internal_5438a732a64a1092e9948397c7236729852100978701fed5ead349d8dfac6220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5438a732a64a1092e9948397c7236729852100978701fed5ead349d8dfac6220->leave($__internal_5438a732a64a1092e9948397c7236729852100978701fed5ead349d8dfac6220_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_e601134636df92f2e26aeea4bcfaf8784f0e2aa3004f21ed3bab6c2a6ccbe3ef = $this->env->getExtension("native_profiler");
        $__internal_e601134636df92f2e26aeea4bcfaf8784f0e2aa3004f21ed3bab6c2a6ccbe3ef->enter($__internal_e601134636df92f2e26aeea4bcfaf8784f0e2aa3004f21ed3bab6c2a6ccbe3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <li><a href=\"#\">Edit Account</a></li>
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
        
        $__internal_e601134636df92f2e26aeea4bcfaf8784f0e2aa3004f21ed3bab6c2a6ccbe3ef->leave($__internal_e601134636df92f2e26aeea4bcfaf8784f0e2aa3004f21ed3bab6c2a6ccbe3ef_prof);

    }

    // line 44
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_96879bfe257b70ad4424e5716761b6519ee5fd571d861bfeee3d86e2bf2f7d0c = $this->env->getExtension("native_profiler");
        $__internal_96879bfe257b70ad4424e5716761b6519ee5fd571d861bfeee3d86e2bf2f7d0c->enter($__internal_96879bfe257b70ad4424e5716761b6519ee5fd571d861bfeee3d86e2bf2f7d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        
        $__internal_96879bfe257b70ad4424e5716761b6519ee5fd571d861bfeee3d86e2bf2f7d0c->leave($__internal_96879bfe257b70ad4424e5716761b6519ee5fd571d861bfeee3d86e2bf2f7d0c_prof);

    }

    // line 57
    public function block_sidebarmenu($context, array $blocks = array())
    {
        $__internal_e7672a1fccfca18d882e00fe534cffd17df9a592f7b6e1ce50df80c5578a87d7 = $this->env->getExtension("native_profiler");
        $__internal_e7672a1fccfca18d882e00fe534cffd17df9a592f7b6e1ce50df80c5578a87d7->enter($__internal_e7672a1fccfca18d882e00fe534cffd17df9a592f7b6e1ce50df80c5578a87d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebarmenu"));

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
        
        $__internal_e7672a1fccfca18d882e00fe534cffd17df9a592f7b6e1ce50df80c5578a87d7->leave($__internal_e7672a1fccfca18d882e00fe534cffd17df9a592f7b6e1ce50df80c5578a87d7_prof);

    }

    // line 66
    public function block_courselist($context, array $blocks = array())
    {
        $__internal_216a06e7fff2a93dbf4be8901ca0982375763d5a46ba3558a00a9907a928804b = $this->env->getExtension("native_profiler");
        $__internal_216a06e7fff2a93dbf4be8901ca0982375763d5a46ba3558a00a9907a928804b->enter($__internal_216a06e7fff2a93dbf4be8901ca0982375763d5a46ba3558a00a9907a928804b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "courselist"));

        
        $__internal_216a06e7fff2a93dbf4be8901ca0982375763d5a46ba3558a00a9907a928804b->leave($__internal_216a06e7fff2a93dbf4be8901ca0982375763d5a46ba3558a00a9907a928804b_prof);

    }

    // line 81
    public function block_modulename($context, array $blocks = array())
    {
        $__internal_d3ff5545418be470bafb710f1bcd74b0cdd223b01cf2d833471a132be4e9fe7d = $this->env->getExtension("native_profiler");
        $__internal_d3ff5545418be470bafb710f1bcd74b0cdd223b01cf2d833471a132be4e9fe7d->enter($__internal_d3ff5545418be470bafb710f1bcd74b0cdd223b01cf2d833471a132be4e9fe7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modulename"));

        echo "easyGrade";
        
        $__internal_d3ff5545418be470bafb710f1bcd74b0cdd223b01cf2d833471a132be4e9fe7d->leave($__internal_d3ff5545418be470bafb710f1bcd74b0cdd223b01cf2d833471a132be4e9fe7d_prof);

    }

    // line 82
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_05a80e36c7fb335dcdf4c460f120db840092fdbce6ccc29b8db17169b31322e3 = $this->env->getExtension("native_profiler");
        $__internal_05a80e36c7fb335dcdf4c460f120db840092fdbce6ccc29b8db17169b31322e3->enter($__internal_05a80e36c7fb335dcdf4c460f120db840092fdbce6ccc29b8db17169b31322e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        
        $__internal_05a80e36c7fb335dcdf4c460f120db840092fdbce6ccc29b8db17169b31322e3->leave($__internal_05a80e36c7fb335dcdf4c460f120db840092fdbce6ccc29b8db17169b31322e3_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_64e8676381576062f1976c709f83195081684e45d3d8ff70f1fe88222a69a6ac = $this->env->getExtension("native_profiler");
        $__internal_64e8676381576062f1976c709f83195081684e45d3d8ff70f1fe88222a69a6ac->enter($__internal_64e8676381576062f1976c709f83195081684e45d3d8ff70f1fe88222a69a6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_64e8676381576062f1976c709f83195081684e45d3d8ff70f1fe88222a69a6ac->leave($__internal_64e8676381576062f1976c709f83195081684e45d3d8ff70f1fe88222a69a6ac_prof);

    }

    public function block_cumstomScript($context, array $blocks = array())
    {
        $__internal_7ff98ab5575f2cbaf6146479f49e30a45a470975f55fdf86bf19363e1c326ec7 = $this->env->getExtension("native_profiler");
        $__internal_7ff98ab5575f2cbaf6146479f49e30a45a470975f55fdf86bf19363e1c326ec7->enter($__internal_7ff98ab5575f2cbaf6146479f49e30a45a470975f55fdf86bf19363e1c326ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cumstomScript"));

        // line 106
        echo "
    ";
        
        $__internal_7ff98ab5575f2cbaf6146479f49e30a45a470975f55fdf86bf19363e1c326ec7->leave($__internal_7ff98ab5575f2cbaf6146479f49e30a45a470975f55fdf86bf19363e1c326ec7_prof);

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
        return array (  362 => 106,  350 => 105,  346 => 104,  342 => 103,  338 => 102,  334 => 101,  330 => 100,  326 => 99,  322 => 98,  318 => 97,  314 => 96,  307 => 91,  301 => 90,  290 => 82,  278 => 81,  267 => 66,  258 => 67,  256 => 66,  246 => 58,  240 => 57,  229 => 44,  216 => 83,  214 => 82,  210 => 81,  197 => 70,  195 => 57,  183 => 48,  174 => 44,  165 => 38,  162 => 37,  156 => 36,  147 => 31,  142 => 29,  137 => 27,  132 => 25,  127 => 23,  122 => 21,  117 => 19,  112 => 17,  106 => 13,  100 => 12,  88 => 11,  76 => 5,  70 => 4,  61 => 109,  59 => 90,  57 => 36,  53 => 35,  47 => 33,  45 => 12,  40 => 11,  38 => 4,  33 => 1,);
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
/*                     <li><a href="#">Edit Account</a></li>*/
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
