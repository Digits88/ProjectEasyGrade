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
        $__internal_4256bcbd30c78184787fb7e3776979cd113a6484c404d41a779fd302b3352401 = $this->env->getExtension("native_profiler");
        $__internal_4256bcbd30c78184787fb7e3776979cd113a6484c404d41a779fd302b3352401->enter($__internal_4256bcbd30c78184787fb7e3776979cd113a6484c404d41a779fd302b3352401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 106
        echo "</body>
</html>
";
        
        $__internal_4256bcbd30c78184787fb7e3776979cd113a6484c404d41a779fd302b3352401->leave($__internal_4256bcbd30c78184787fb7e3776979cd113a6484c404d41a779fd302b3352401_prof);

    }

    // line 4
    public function block_headerdetail($context, array $blocks = array())
    {
        $__internal_a564e08d9a12d10392f0a1d80b3a20fafbca10638dbea886c8a487a9d479fdd7 = $this->env->getExtension("native_profiler");
        $__internal_a564e08d9a12d10392f0a1d80b3a20fafbca10638dbea886c8a487a9d479fdd7->enter($__internal_a564e08d9a12d10392f0a1d80b3a20fafbca10638dbea886c8a487a9d479fdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerdetail"));

        // line 5
        echo "        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
    ";
        
        $__internal_a564e08d9a12d10392f0a1d80b3a20fafbca10638dbea886c8a487a9d479fdd7->leave($__internal_a564e08d9a12d10392f0a1d80b3a20fafbca10638dbea886c8a487a9d479fdd7_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_c19fcfe1c95edef69dca0973330311a634731b00ecf2aff611d070d9c0a4790b = $this->env->getExtension("native_profiler");
        $__internal_c19fcfe1c95edef69dca0973330311a634731b00ecf2aff611d070d9c0a4790b->enter($__internal_c19fcfe1c95edef69dca0973330311a634731b00ecf2aff611d070d9c0a4790b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c19fcfe1c95edef69dca0973330311a634731b00ecf2aff611d070d9c0a4790b->leave($__internal_c19fcfe1c95edef69dca0973330311a634731b00ecf2aff611d070d9c0a4790b_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_20d58a860d3a7617c160ef647df23e400477d8576644f43a396e5c3fa819e804 = $this->env->getExtension("native_profiler");
        $__internal_20d58a860d3a7617c160ef647df23e400477d8576644f43a396e5c3fa819e804->enter($__internal_20d58a860d3a7617c160ef647df23e400477d8576644f43a396e5c3fa819e804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_20d58a860d3a7617c160ef647df23e400477d8576644f43a396e5c3fa819e804->leave($__internal_20d58a860d3a7617c160ef647df23e400477d8576644f43a396e5c3fa819e804_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_4991a2418b79a586d5ec3239ed6cf639e76b4f915f74da2cf6b3ac9a9756f4e6 = $this->env->getExtension("native_profiler");
        $__internal_4991a2418b79a586d5ec3239ed6cf639e76b4f915f74da2cf6b3ac9a9756f4e6->enter($__internal_4991a2418b79a586d5ec3239ed6cf639e76b4f915f74da2cf6b3ac9a9756f4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 67
        echo "            </ul>
        </nav>



        <div class=\"content-wrapper\">
            <div class=\"container-fluid\">

                <div class=\"row\">
                    <div class=\"col-md-12\">

                        <h2 class=\"page-title\">";
        // line 78
        $this->displayBlock('modulename', $context, $blocks);
        echo "</h2>
                        ";
        // line 79
        $this->displayBlock('contentdetail', $context, $blocks);
        // line 80
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_4991a2418b79a586d5ec3239ed6cf639e76b4f915f74da2cf6b3ac9a9756f4e6->leave($__internal_4991a2418b79a586d5ec3239ed6cf639e76b4f915f74da2cf6b3ac9a9756f4e6_prof);

    }

    // line 42
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_9dfc8c6a805704f607a76fc2679d3ad730e9e53ddf8e0307ebf0dc23b0047082 = $this->env->getExtension("native_profiler");
        $__internal_9dfc8c6a805704f607a76fc2679d3ad730e9e53ddf8e0307ebf0dc23b0047082->enter($__internal_9dfc8c6a805704f607a76fc2679d3ad730e9e53ddf8e0307ebf0dc23b0047082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        
        $__internal_9dfc8c6a805704f607a76fc2679d3ad730e9e53ddf8e0307ebf0dc23b0047082->leave($__internal_9dfc8c6a805704f607a76fc2679d3ad730e9e53ddf8e0307ebf0dc23b0047082_prof);

    }

    // line 54
    public function block_sidebarmenu($context, array $blocks = array())
    {
        $__internal_c4472c9ad44b3b480e23ce82d1c11b71f9d02e1d0353975af304d817f6ad9fe3 = $this->env->getExtension("native_profiler");
        $__internal_c4472c9ad44b3b480e23ce82d1c11b71f9d02e1d0353975af304d817f6ad9fe3->enter($__internal_c4472c9ad44b3b480e23ce82d1c11b71f9d02e1d0353975af304d817f6ad9fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebarmenu"));

        // line 55
        echo "                    <li class=\"ts-label\">Search</li>
                    <li>
                        <input type=\"text\" class=\"ts-sidebar-search\" placeholder=\"Search here...\">
                    </li>
                    <li class=\"ts-label\">Main</li>
                    <li><a href=\"/\"><i class=\"fa fa-dashboard\"></i> Dashboard</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-desktop\"></i> Courses</a>
                        <ul>
                            ";
        // line 63
        $this->displayBlock('courselist', $context, $blocks);
        // line 64
        echo "                        </ul>
                    </li>
                ";
        
        $__internal_c4472c9ad44b3b480e23ce82d1c11b71f9d02e1d0353975af304d817f6ad9fe3->leave($__internal_c4472c9ad44b3b480e23ce82d1c11b71f9d02e1d0353975af304d817f6ad9fe3_prof);

    }

    // line 63
    public function block_courselist($context, array $blocks = array())
    {
        $__internal_06c8ff17fee12af8d4abb31b6c6e2a6cf3bdb7cd3feb15b6fe44622865f5efb4 = $this->env->getExtension("native_profiler");
        $__internal_06c8ff17fee12af8d4abb31b6c6e2a6cf3bdb7cd3feb15b6fe44622865f5efb4->enter($__internal_06c8ff17fee12af8d4abb31b6c6e2a6cf3bdb7cd3feb15b6fe44622865f5efb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "courselist"));

        
        $__internal_06c8ff17fee12af8d4abb31b6c6e2a6cf3bdb7cd3feb15b6fe44622865f5efb4->leave($__internal_06c8ff17fee12af8d4abb31b6c6e2a6cf3bdb7cd3feb15b6fe44622865f5efb4_prof);

    }

    // line 78
    public function block_modulename($context, array $blocks = array())
    {
        $__internal_c97a32f58e6e488bd743cd78d4542dfc5e40fc9dd5ee50adb61b64c12f3f5e7e = $this->env->getExtension("native_profiler");
        $__internal_c97a32f58e6e488bd743cd78d4542dfc5e40fc9dd5ee50adb61b64c12f3f5e7e->enter($__internal_c97a32f58e6e488bd743cd78d4542dfc5e40fc9dd5ee50adb61b64c12f3f5e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modulename"));

        echo "easyGrade";
        
        $__internal_c97a32f58e6e488bd743cd78d4542dfc5e40fc9dd5ee50adb61b64c12f3f5e7e->leave($__internal_c97a32f58e6e488bd743cd78d4542dfc5e40fc9dd5ee50adb61b64c12f3f5e7e_prof);

    }

    // line 79
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_50cc21fcbfee447b4d8f8b89243f16cff63fdf9558fceba15adf642166451903 = $this->env->getExtension("native_profiler");
        $__internal_50cc21fcbfee447b4d8f8b89243f16cff63fdf9558fceba15adf642166451903->enter($__internal_50cc21fcbfee447b4d8f8b89243f16cff63fdf9558fceba15adf642166451903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        
        $__internal_50cc21fcbfee447b4d8f8b89243f16cff63fdf9558fceba15adf642166451903->leave($__internal_50cc21fcbfee447b4d8f8b89243f16cff63fdf9558fceba15adf642166451903_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f548d4fc684e8e7c37c9afba1d50fd15b2c77bb58138541dd8cedc245201ec9b = $this->env->getExtension("native_profiler");
        $__internal_f548d4fc684e8e7c37c9afba1d50fd15b2c77bb58138541dd8cedc245201ec9b->enter($__internal_f548d4fc684e8e7c37c9afba1d50fd15b2c77bb58138541dd8cedc245201ec9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>


    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/fileinput.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/chartData.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 102
        $this->displayBlock('cumstomScript', $context, $blocks);
        
        $__internal_f548d4fc684e8e7c37c9afba1d50fd15b2c77bb58138541dd8cedc245201ec9b->leave($__internal_f548d4fc684e8e7c37c9afba1d50fd15b2c77bb58138541dd8cedc245201ec9b_prof);

    }

    public function block_cumstomScript($context, array $blocks = array())
    {
        $__internal_2bae3d91341cefb806fec0b364f656e9b6e9a4bb542b0b33cfa0d67665762370 = $this->env->getExtension("native_profiler");
        $__internal_2bae3d91341cefb806fec0b364f656e9b6e9a4bb542b0b33cfa0d67665762370->enter($__internal_2bae3d91341cefb806fec0b364f656e9b6e9a4bb542b0b33cfa0d67665762370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cumstomScript"));

        // line 103
        echo "
    ";
        
        $__internal_2bae3d91341cefb806fec0b364f656e9b6e9a4bb542b0b33cfa0d67665762370->leave($__internal_2bae3d91341cefb806fec0b364f656e9b6e9a4bb542b0b33cfa0d67665762370_prof);

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
        return array (  362 => 103,  350 => 102,  346 => 101,  342 => 100,  338 => 99,  334 => 98,  330 => 97,  326 => 96,  322 => 95,  318 => 94,  314 => 93,  307 => 88,  301 => 87,  290 => 79,  278 => 78,  267 => 63,  258 => 64,  256 => 63,  246 => 55,  240 => 54,  229 => 42,  216 => 80,  214 => 79,  210 => 78,  197 => 67,  195 => 54,  183 => 45,  179 => 44,  172 => 42,  165 => 38,  162 => 37,  156 => 36,  147 => 31,  142 => 29,  137 => 27,  132 => 25,  127 => 23,  122 => 21,  117 => 19,  112 => 17,  106 => 13,  100 => 12,  88 => 11,  76 => 5,  70 => 4,  61 => 106,  59 => 87,  57 => 36,  53 => 35,  47 => 33,  45 => 12,  40 => 11,  38 => 4,  33 => 1,);
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
