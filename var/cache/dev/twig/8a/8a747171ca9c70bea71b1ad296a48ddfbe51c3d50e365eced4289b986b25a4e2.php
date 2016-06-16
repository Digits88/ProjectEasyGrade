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
        $__internal_87be7bcaae3f772f2046a5b35ef8735362d18090e5e3f4f397b9217212ee986e = $this->env->getExtension("native_profiler");
        $__internal_87be7bcaae3f772f2046a5b35ef8735362d18090e5e3f4f397b9217212ee986e->enter($__internal_87be7bcaae3f772f2046a5b35ef8735362d18090e5e3f4f397b9217212ee986e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_87be7bcaae3f772f2046a5b35ef8735362d18090e5e3f4f397b9217212ee986e->leave($__internal_87be7bcaae3f772f2046a5b35ef8735362d18090e5e3f4f397b9217212ee986e_prof);

    }

    // line 4
    public function block_headerdetail($context, array $blocks = array())
    {
        $__internal_9a6b7163ac20314acdcc11ef19672f2bf82a09adffb7baec913a4cdafb0e71cf = $this->env->getExtension("native_profiler");
        $__internal_9a6b7163ac20314acdcc11ef19672f2bf82a09adffb7baec913a4cdafb0e71cf->enter($__internal_9a6b7163ac20314acdcc11ef19672f2bf82a09adffb7baec913a4cdafb0e71cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerdetail"));

        // line 5
        echo "        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
    ";
        
        $__internal_9a6b7163ac20314acdcc11ef19672f2bf82a09adffb7baec913a4cdafb0e71cf->leave($__internal_9a6b7163ac20314acdcc11ef19672f2bf82a09adffb7baec913a4cdafb0e71cf_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_7912cc09cc57eae576a2de8d6c47cf94eedefa955b722062dd68880f40dea775 = $this->env->getExtension("native_profiler");
        $__internal_7912cc09cc57eae576a2de8d6c47cf94eedefa955b722062dd68880f40dea775->enter($__internal_7912cc09cc57eae576a2de8d6c47cf94eedefa955b722062dd68880f40dea775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "easyGrade";
        
        $__internal_7912cc09cc57eae576a2de8d6c47cf94eedefa955b722062dd68880f40dea775->leave($__internal_7912cc09cc57eae576a2de8d6c47cf94eedefa955b722062dd68880f40dea775_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c2d2a1cf31d33254b187e3cb6eeebffa41fa23f9b23e88eeee703dc95d7ec7cb = $this->env->getExtension("native_profiler");
        $__internal_c2d2a1cf31d33254b187e3cb6eeebffa41fa23f9b23e88eeee703dc95d7ec7cb->enter($__internal_c2d2a1cf31d33254b187e3cb6eeebffa41fa23f9b23e88eeee703dc95d7ec7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c2d2a1cf31d33254b187e3cb6eeebffa41fa23f9b23e88eeee703dc95d7ec7cb->leave($__internal_c2d2a1cf31d33254b187e3cb6eeebffa41fa23f9b23e88eeee703dc95d7ec7cb_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_02284b49a893d97da950abeb27f2a44d62a9f6005898a1f91004267c9aa5ba09 = $this->env->getExtension("native_profiler");
        $__internal_02284b49a893d97da950abeb27f2a44d62a9f6005898a1f91004267c9aa5ba09->enter($__internal_02284b49a893d97da950abeb27f2a44d62a9f6005898a1f91004267c9aa5ba09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_02284b49a893d97da950abeb27f2a44d62a9f6005898a1f91004267c9aa5ba09->leave($__internal_02284b49a893d97da950abeb27f2a44d62a9f6005898a1f91004267c9aa5ba09_prof);

    }

    // line 42
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_77ec891f5df15d97a64ab1f01d68d47c2b15c6507bf8752f71fda6529af5d3f8 = $this->env->getExtension("native_profiler");
        $__internal_77ec891f5df15d97a64ab1f01d68d47c2b15c6507bf8752f71fda6529af5d3f8->enter($__internal_77ec891f5df15d97a64ab1f01d68d47c2b15c6507bf8752f71fda6529af5d3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        
        $__internal_77ec891f5df15d97a64ab1f01d68d47c2b15c6507bf8752f71fda6529af5d3f8->leave($__internal_77ec891f5df15d97a64ab1f01d68d47c2b15c6507bf8752f71fda6529af5d3f8_prof);

    }

    // line 54
    public function block_sidebarmenu($context, array $blocks = array())
    {
        $__internal_6fd996e27e80d9065b77e08edc3b8cb6405050c8315fac476ade693c1c008010 = $this->env->getExtension("native_profiler");
        $__internal_6fd996e27e80d9065b77e08edc3b8cb6405050c8315fac476ade693c1c008010->enter($__internal_6fd996e27e80d9065b77e08edc3b8cb6405050c8315fac476ade693c1c008010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebarmenu"));

        // line 55
        echo "                    <a href=\"#\" class=\"logo\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/nsep/images/sidebarimage.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                    <p style=\"color: #ffffff; font-size: large;font-weight: 200;text-align: center \"><br><br><br><br>easyGrade<br>The platform where programming assignment evaluation made easy.</p>

                ";
        
        $__internal_6fd996e27e80d9065b77e08edc3b8cb6405050c8315fac476ade693c1c008010->leave($__internal_6fd996e27e80d9065b77e08edc3b8cb6405050c8315fac476ade693c1c008010_prof);

    }

    // line 70
    public function block_modulename($context, array $blocks = array())
    {
        $__internal_0bea1388ebd2485086a68de889686db443faa35bd54770234e4eaae875ca7fd6 = $this->env->getExtension("native_profiler");
        $__internal_0bea1388ebd2485086a68de889686db443faa35bd54770234e4eaae875ca7fd6->enter($__internal_0bea1388ebd2485086a68de889686db443faa35bd54770234e4eaae875ca7fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modulename"));

        echo "easyGrade";
        
        $__internal_0bea1388ebd2485086a68de889686db443faa35bd54770234e4eaae875ca7fd6->leave($__internal_0bea1388ebd2485086a68de889686db443faa35bd54770234e4eaae875ca7fd6_prof);

    }

    // line 71
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_2cd4a1be7f8a0fbabb738cf26c09566c7f78a927e1e56b3fc5d6dad26565ff94 = $this->env->getExtension("native_profiler");
        $__internal_2cd4a1be7f8a0fbabb738cf26c09566c7f78a927e1e56b3fc5d6dad26565ff94->enter($__internal_2cd4a1be7f8a0fbabb738cf26c09566c7f78a927e1e56b3fc5d6dad26565ff94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        
        $__internal_2cd4a1be7f8a0fbabb738cf26c09566c7f78a927e1e56b3fc5d6dad26565ff94->leave($__internal_2cd4a1be7f8a0fbabb738cf26c09566c7f78a927e1e56b3fc5d6dad26565ff94_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f40956327198eefec5ff38586026416cedaea587ca96b8fae72a8dcb84a91af8 = $this->env->getExtension("native_profiler");
        $__internal_f40956327198eefec5ff38586026416cedaea587ca96b8fae72a8dcb84a91af8->enter($__internal_f40956327198eefec5ff38586026416cedaea587ca96b8fae72a8dcb84a91af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f40956327198eefec5ff38586026416cedaea587ca96b8fae72a8dcb84a91af8->leave($__internal_f40956327198eefec5ff38586026416cedaea587ca96b8fae72a8dcb84a91af8_prof);

    }

    public function block_cumstomScript($context, array $blocks = array())
    {
        $__internal_17b19f276062ac9e3be1b1987dc013c6c2ffb56288ad66b3c38040ac3ba2af13 = $this->env->getExtension("native_profiler");
        $__internal_17b19f276062ac9e3be1b1987dc013c6c2ffb56288ad66b3c38040ac3ba2af13->enter($__internal_17b19f276062ac9e3be1b1987dc013c6c2ffb56288ad66b3c38040ac3ba2af13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cumstomScript"));

        // line 96
        echo "
    ";
        
        $__internal_17b19f276062ac9e3be1b1987dc013c6c2ffb56288ad66b3c38040ac3ba2af13->leave($__internal_17b19f276062ac9e3be1b1987dc013c6c2ffb56288ad66b3c38040ac3ba2af13_prof);

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
/* */
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
