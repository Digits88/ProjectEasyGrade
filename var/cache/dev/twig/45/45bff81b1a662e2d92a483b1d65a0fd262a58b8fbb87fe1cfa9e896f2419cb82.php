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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_767f73322c65090fa3c710213054857c4dd8315b5b748cdf0a32fe84c8fa0c76 = $this->env->getExtension("native_profiler");
        $__internal_767f73322c65090fa3c710213054857c4dd8315b5b748cdf0a32fe84c8fa0c76->enter($__internal_767f73322c65090fa3c710213054857c4dd8315b5b748cdf0a32fe84c8fa0c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 108
        echo "</body>
</html>
";
        
        $__internal_767f73322c65090fa3c710213054857c4dd8315b5b748cdf0a32fe84c8fa0c76->leave($__internal_767f73322c65090fa3c710213054857c4dd8315b5b748cdf0a32fe84c8fa0c76_prof);

    }

    // line 4
    public function block_headerdetail($context, array $blocks = array())
    {
        $__internal_b34f3927d4d02b6264f10bb6c2da67f350b581adebcb9687f5c03712c1286e4f = $this->env->getExtension("native_profiler");
        $__internal_b34f3927d4d02b6264f10bb6c2da67f350b581adebcb9687f5c03712c1286e4f->enter($__internal_b34f3927d4d02b6264f10bb6c2da67f350b581adebcb9687f5c03712c1286e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerdetail"));

        // line 5
        echo "        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
    ";
        
        $__internal_b34f3927d4d02b6264f10bb6c2da67f350b581adebcb9687f5c03712c1286e4f->leave($__internal_b34f3927d4d02b6264f10bb6c2da67f350b581adebcb9687f5c03712c1286e4f_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_c49dddfe093c0b12ee27e7b2befb906f02fa2158f448039f7602f81c942743d3 = $this->env->getExtension("native_profiler");
        $__internal_c49dddfe093c0b12ee27e7b2befb906f02fa2158f448039f7602f81c942743d3->enter($__internal_c49dddfe093c0b12ee27e7b2befb906f02fa2158f448039f7602f81c942743d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c49dddfe093c0b12ee27e7b2befb906f02fa2158f448039f7602f81c942743d3->leave($__internal_c49dddfe093c0b12ee27e7b2befb906f02fa2158f448039f7602f81c942743d3_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5c9670072a66720947b4346f9fd7d3e420775e8509fc04886a40ab37c43f0855 = $this->env->getExtension("native_profiler");
        $__internal_5c9670072a66720947b4346f9fd7d3e420775e8509fc04886a40ab37c43f0855->enter($__internal_5c9670072a66720947b4346f9fd7d3e420775e8509fc04886a40ab37c43f0855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5c9670072a66720947b4346f9fd7d3e420775e8509fc04886a40ab37c43f0855->leave($__internal_5c9670072a66720947b4346f9fd7d3e420775e8509fc04886a40ab37c43f0855_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_802bafb0a7817bda13c9c1faad46813017b324b792899a6d5e5ec4c353284632 = $this->env->getExtension("native_profiler");
        $__internal_802bafb0a7817bda13c9c1faad46813017b324b792899a6d5e5ec4c353284632->enter($__internal_802bafb0a7817bda13c9c1faad46813017b324b792899a6d5e5ec4c353284632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_802bafb0a7817bda13c9c1faad46813017b324b792899a6d5e5ec4c353284632->leave($__internal_802bafb0a7817bda13c9c1faad46813017b324b792899a6d5e5ec4c353284632_prof);

    }

    // line 44
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_39e3fdd57ae63bac788f9dce5faaa6b4b54ef30418a1f5ddd5dea64d69f80584 = $this->env->getExtension("native_profiler");
        $__internal_39e3fdd57ae63bac788f9dce5faaa6b4b54ef30418a1f5ddd5dea64d69f80584->enter($__internal_39e3fdd57ae63bac788f9dce5faaa6b4b54ef30418a1f5ddd5dea64d69f80584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        
        $__internal_39e3fdd57ae63bac788f9dce5faaa6b4b54ef30418a1f5ddd5dea64d69f80584->leave($__internal_39e3fdd57ae63bac788f9dce5faaa6b4b54ef30418a1f5ddd5dea64d69f80584_prof);

    }

    // line 57
    public function block_sidebarmenu($context, array $blocks = array())
    {
        $__internal_f8a65e232bcd58ef476547bf59791ffbafae9d5cdb5e6a44eb20a66e332e2cea = $this->env->getExtension("native_profiler");
        $__internal_f8a65e232bcd58ef476547bf59791ffbafae9d5cdb5e6a44eb20a66e332e2cea->enter($__internal_f8a65e232bcd58ef476547bf59791ffbafae9d5cdb5e6a44eb20a66e332e2cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebarmenu"));

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
        
        $__internal_f8a65e232bcd58ef476547bf59791ffbafae9d5cdb5e6a44eb20a66e332e2cea->leave($__internal_f8a65e232bcd58ef476547bf59791ffbafae9d5cdb5e6a44eb20a66e332e2cea_prof);

    }

    // line 66
    public function block_courselist($context, array $blocks = array())
    {
        $__internal_954cb9276ccfeceecf59d08f87fcfef61d4c767dc6fd2616d3ac2119d6f4d3b8 = $this->env->getExtension("native_profiler");
        $__internal_954cb9276ccfeceecf59d08f87fcfef61d4c767dc6fd2616d3ac2119d6f4d3b8->enter($__internal_954cb9276ccfeceecf59d08f87fcfef61d4c767dc6fd2616d3ac2119d6f4d3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "courselist"));

        
        $__internal_954cb9276ccfeceecf59d08f87fcfef61d4c767dc6fd2616d3ac2119d6f4d3b8->leave($__internal_954cb9276ccfeceecf59d08f87fcfef61d4c767dc6fd2616d3ac2119d6f4d3b8_prof);

    }

    // line 81
    public function block_modulename($context, array $blocks = array())
    {
        $__internal_febf1cf9c8ca3b40872678050b1f2f3aa526fa2aa2a76c9932c2400cf88b1675 = $this->env->getExtension("native_profiler");
        $__internal_febf1cf9c8ca3b40872678050b1f2f3aa526fa2aa2a76c9932c2400cf88b1675->enter($__internal_febf1cf9c8ca3b40872678050b1f2f3aa526fa2aa2a76c9932c2400cf88b1675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modulename"));

        echo "easyGrade";
        
        $__internal_febf1cf9c8ca3b40872678050b1f2f3aa526fa2aa2a76c9932c2400cf88b1675->leave($__internal_febf1cf9c8ca3b40872678050b1f2f3aa526fa2aa2a76c9932c2400cf88b1675_prof);

    }

    // line 82
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_3e00c02ebf10e59a0caec6986c1c0b538ee0af918ab9c855cd4c1c2c44ca0bd0 = $this->env->getExtension("native_profiler");
        $__internal_3e00c02ebf10e59a0caec6986c1c0b538ee0af918ab9c855cd4c1c2c44ca0bd0->enter($__internal_3e00c02ebf10e59a0caec6986c1c0b538ee0af918ab9c855cd4c1c2c44ca0bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        
        $__internal_3e00c02ebf10e59a0caec6986c1c0b538ee0af918ab9c855cd4c1c2c44ca0bd0->leave($__internal_3e00c02ebf10e59a0caec6986c1c0b538ee0af918ab9c855cd4c1c2c44ca0bd0_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_913ce15fb1f08e2339478e01895956464a4a3f87655aac6a4d648360174bbb03 = $this->env->getExtension("native_profiler");
        $__internal_913ce15fb1f08e2339478e01895956464a4a3f87655aac6a4d648360174bbb03->enter($__internal_913ce15fb1f08e2339478e01895956464a4a3f87655aac6a4d648360174bbb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_913ce15fb1f08e2339478e01895956464a4a3f87655aac6a4d648360174bbb03->leave($__internal_913ce15fb1f08e2339478e01895956464a4a3f87655aac6a4d648360174bbb03_prof);

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
        return array (  345 => 104,  341 => 103,  337 => 102,  333 => 101,  329 => 100,  325 => 99,  321 => 98,  317 => 97,  313 => 96,  306 => 91,  300 => 90,  289 => 82,  277 => 81,  266 => 66,  257 => 67,  255 => 66,  245 => 58,  239 => 57,  228 => 44,  215 => 83,  213 => 82,  209 => 81,  196 => 70,  194 => 57,  182 => 48,  173 => 44,  164 => 38,  161 => 37,  155 => 36,  146 => 31,  141 => 29,  136 => 27,  131 => 25,  126 => 23,  121 => 21,  116 => 19,  111 => 17,  105 => 13,  99 => 12,  87 => 11,  75 => 5,  69 => 4,  60 => 108,  58 => 90,  56 => 36,  52 => 35,  46 => 33,  44 => 12,  39 => 11,  37 => 4,  32 => 1,);
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
/* */
/* */
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
