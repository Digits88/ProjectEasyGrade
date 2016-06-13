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
        $__internal_fd79ab3b764d4047e17cf929c3f267db7bf9064acc17c5b172d56952440c204b = $this->env->getExtension("native_profiler");
        $__internal_fd79ab3b764d4047e17cf929c3f267db7bf9064acc17c5b172d56952440c204b->enter($__internal_fd79ab3b764d4047e17cf929c3f267db7bf9064acc17c5b172d56952440c204b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd79ab3b764d4047e17cf929c3f267db7bf9064acc17c5b172d56952440c204b->leave($__internal_fd79ab3b764d4047e17cf929c3f267db7bf9064acc17c5b172d56952440c204b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_13ba19332cf5e2e45fd7d84c2de3c8418a9401edfc6992d6854765c9c2b0f92b = $this->env->getExtension("native_profiler");
        $__internal_13ba19332cf5e2e45fd7d84c2de3c8418a9401edfc6992d6854765c9c2b0f92b->enter($__internal_13ba19332cf5e2e45fd7d84c2de3c8418a9401edfc6992d6854765c9c2b0f92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_13ba19332cf5e2e45fd7d84c2de3c8418a9401edfc6992d6854765c9c2b0f92b->leave($__internal_13ba19332cf5e2e45fd7d84c2de3c8418a9401edfc6992d6854765c9c2b0f92b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_371fb748178c5542ee67a53ed9febba89d445bf2537cb99aa709a682a7047153 = $this->env->getExtension("native_profiler");
        $__internal_371fb748178c5542ee67a53ed9febba89d445bf2537cb99aa709a682a7047153->enter($__internal_371fb748178c5542ee67a53ed9febba89d445bf2537cb99aa709a682a7047153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_371fb748178c5542ee67a53ed9febba89d445bf2537cb99aa709a682a7047153->leave($__internal_371fb748178c5542ee67a53ed9febba89d445bf2537cb99aa709a682a7047153_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c63ef4a110c011409fbc5472dc2365e7da9f99cf4fe42805c958a2a1ce2e127 = $this->env->getExtension("native_profiler");
        $__internal_4c63ef4a110c011409fbc5472dc2365e7da9f99cf4fe42805c958a2a1ce2e127->enter($__internal_4c63ef4a110c011409fbc5472dc2365e7da9f99cf4fe42805c958a2a1ce2e127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4c63ef4a110c011409fbc5472dc2365e7da9f99cf4fe42805c958a2a1ce2e127->leave($__internal_4c63ef4a110c011409fbc5472dc2365e7da9f99cf4fe42805c958a2a1ce2e127_prof);

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
