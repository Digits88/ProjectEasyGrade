<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b251ac24d9e1d5d0a81107e59b59bdd1a592512c4c75d00fa8cfaf1f41d24202 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e478bf3a66ec5d49a5bb239ba7a1ce065bb83688a1bff1cc1e9ea534c180cd41 = $this->env->getExtension("native_profiler");
        $__internal_e478bf3a66ec5d49a5bb239ba7a1ce065bb83688a1bff1cc1e9ea534c180cd41->enter($__internal_e478bf3a66ec5d49a5bb239ba7a1ce065bb83688a1bff1cc1e9ea534c180cd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e478bf3a66ec5d49a5bb239ba7a1ce065bb83688a1bff1cc1e9ea534c180cd41->leave($__internal_e478bf3a66ec5d49a5bb239ba7a1ce065bb83688a1bff1cc1e9ea534c180cd41_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_595450f0f9e70c8ff43fa655509f95ffc0793a3bfd877872cba80b7becf91228 = $this->env->getExtension("native_profiler");
        $__internal_595450f0f9e70c8ff43fa655509f95ffc0793a3bfd877872cba80b7becf91228->enter($__internal_595450f0f9e70c8ff43fa655509f95ffc0793a3bfd877872cba80b7becf91228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_595450f0f9e70c8ff43fa655509f95ffc0793a3bfd877872cba80b7becf91228->leave($__internal_595450f0f9e70c8ff43fa655509f95ffc0793a3bfd877872cba80b7becf91228_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1d6050913675620d54626937abd1ecfcba5b188a67c5fac96ae41fe0ed2344a = $this->env->getExtension("native_profiler");
        $__internal_e1d6050913675620d54626937abd1ecfcba5b188a67c5fac96ae41fe0ed2344a->enter($__internal_e1d6050913675620d54626937abd1ecfcba5b188a67c5fac96ae41fe0ed2344a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e1d6050913675620d54626937abd1ecfcba5b188a67c5fac96ae41fe0ed2344a->leave($__internal_e1d6050913675620d54626937abd1ecfcba5b188a67c5fac96ae41fe0ed2344a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_34055a0df97858fdb65dcdf7d8926854cc5dcef32b9eb279e35993dfdc895e66 = $this->env->getExtension("native_profiler");
        $__internal_34055a0df97858fdb65dcdf7d8926854cc5dcef32b9eb279e35993dfdc895e66->enter($__internal_34055a0df97858fdb65dcdf7d8926854cc5dcef32b9eb279e35993dfdc895e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_34055a0df97858fdb65dcdf7d8926854cc5dcef32b9eb279e35993dfdc895e66->leave($__internal_34055a0df97858fdb65dcdf7d8926854cc5dcef32b9eb279e35993dfdc895e66_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
