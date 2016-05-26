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
        $__internal_119027e75e40702ec5787e90a493d1cdfe58745b11ce4e6443c1174a2db4d63f = $this->env->getExtension("native_profiler");
        $__internal_119027e75e40702ec5787e90a493d1cdfe58745b11ce4e6443c1174a2db4d63f->enter($__internal_119027e75e40702ec5787e90a493d1cdfe58745b11ce4e6443c1174a2db4d63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_119027e75e40702ec5787e90a493d1cdfe58745b11ce4e6443c1174a2db4d63f->leave($__internal_119027e75e40702ec5787e90a493d1cdfe58745b11ce4e6443c1174a2db4d63f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_98f3ec4245223516f6b10985aecba1681b8fdc392e5688c411fa21e5d8f4211f = $this->env->getExtension("native_profiler");
        $__internal_98f3ec4245223516f6b10985aecba1681b8fdc392e5688c411fa21e5d8f4211f->enter($__internal_98f3ec4245223516f6b10985aecba1681b8fdc392e5688c411fa21e5d8f4211f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_98f3ec4245223516f6b10985aecba1681b8fdc392e5688c411fa21e5d8f4211f->leave($__internal_98f3ec4245223516f6b10985aecba1681b8fdc392e5688c411fa21e5d8f4211f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_87f07904389d9e2483f11a0944348f704a9f24293ee1b9375fb8cb3b93d69aaf = $this->env->getExtension("native_profiler");
        $__internal_87f07904389d9e2483f11a0944348f704a9f24293ee1b9375fb8cb3b93d69aaf->enter($__internal_87f07904389d9e2483f11a0944348f704a9f24293ee1b9375fb8cb3b93d69aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_87f07904389d9e2483f11a0944348f704a9f24293ee1b9375fb8cb3b93d69aaf->leave($__internal_87f07904389d9e2483f11a0944348f704a9f24293ee1b9375fb8cb3b93d69aaf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5527b093814dd2fc9eebf659f74af1b9deb87c6d86e4b9aa3b7a63de545e498b = $this->env->getExtension("native_profiler");
        $__internal_5527b093814dd2fc9eebf659f74af1b9deb87c6d86e4b9aa3b7a63de545e498b->enter($__internal_5527b093814dd2fc9eebf659f74af1b9deb87c6d86e4b9aa3b7a63de545e498b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5527b093814dd2fc9eebf659f74af1b9deb87c6d86e4b9aa3b7a63de545e498b->leave($__internal_5527b093814dd2fc9eebf659f74af1b9deb87c6d86e4b9aa3b7a63de545e498b_prof);

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
