<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e96805cadcb7ded62209ab41c81afab64035b723922a44b08abd734c3eba6e2b extends Twig_Template
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
        $__internal_137385ef4281e8867912a38fb7669db9d96d83b89a70a9ca04b756e18d2e21fc = $this->env->getExtension("native_profiler");
        $__internal_137385ef4281e8867912a38fb7669db9d96d83b89a70a9ca04b756e18d2e21fc->enter($__internal_137385ef4281e8867912a38fb7669db9d96d83b89a70a9ca04b756e18d2e21fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_137385ef4281e8867912a38fb7669db9d96d83b89a70a9ca04b756e18d2e21fc->leave($__internal_137385ef4281e8867912a38fb7669db9d96d83b89a70a9ca04b756e18d2e21fc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b7adadd910c3e7d413ad185608ec4adaba016dfa8818ba2ba701612e2db8aa55 = $this->env->getExtension("native_profiler");
        $__internal_b7adadd910c3e7d413ad185608ec4adaba016dfa8818ba2ba701612e2db8aa55->enter($__internal_b7adadd910c3e7d413ad185608ec4adaba016dfa8818ba2ba701612e2db8aa55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b7adadd910c3e7d413ad185608ec4adaba016dfa8818ba2ba701612e2db8aa55->leave($__internal_b7adadd910c3e7d413ad185608ec4adaba016dfa8818ba2ba701612e2db8aa55_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2a6e9d3f2d88cf88d643f41b8bcc5aa1ec72e343e50ae99ad379ab430cf5142 = $this->env->getExtension("native_profiler");
        $__internal_c2a6e9d3f2d88cf88d643f41b8bcc5aa1ec72e343e50ae99ad379ab430cf5142->enter($__internal_c2a6e9d3f2d88cf88d643f41b8bcc5aa1ec72e343e50ae99ad379ab430cf5142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c2a6e9d3f2d88cf88d643f41b8bcc5aa1ec72e343e50ae99ad379ab430cf5142->leave($__internal_c2a6e9d3f2d88cf88d643f41b8bcc5aa1ec72e343e50ae99ad379ab430cf5142_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b3e6182cceec315fc5867af770121250d1098475956484aec59df5bb4643568 = $this->env->getExtension("native_profiler");
        $__internal_9b3e6182cceec315fc5867af770121250d1098475956484aec59df5bb4643568->enter($__internal_9b3e6182cceec315fc5867af770121250d1098475956484aec59df5bb4643568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9b3e6182cceec315fc5867af770121250d1098475956484aec59df5bb4643568->leave($__internal_9b3e6182cceec315fc5867af770121250d1098475956484aec59df5bb4643568_prof);

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
