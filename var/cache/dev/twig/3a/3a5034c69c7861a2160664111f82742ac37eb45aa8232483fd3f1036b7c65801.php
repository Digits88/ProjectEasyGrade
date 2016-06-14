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
        $__internal_10dcd47edd73ddac0ac8d46ca36a3d3dd2f0bc3fe225d9d946c29d66a066959f = $this->env->getExtension("native_profiler");
        $__internal_10dcd47edd73ddac0ac8d46ca36a3d3dd2f0bc3fe225d9d946c29d66a066959f->enter($__internal_10dcd47edd73ddac0ac8d46ca36a3d3dd2f0bc3fe225d9d946c29d66a066959f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10dcd47edd73ddac0ac8d46ca36a3d3dd2f0bc3fe225d9d946c29d66a066959f->leave($__internal_10dcd47edd73ddac0ac8d46ca36a3d3dd2f0bc3fe225d9d946c29d66a066959f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_afcd60cbe5287be19a2107a7c5b680c779639d76d4643db65f34315009d0316d = $this->env->getExtension("native_profiler");
        $__internal_afcd60cbe5287be19a2107a7c5b680c779639d76d4643db65f34315009d0316d->enter($__internal_afcd60cbe5287be19a2107a7c5b680c779639d76d4643db65f34315009d0316d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_afcd60cbe5287be19a2107a7c5b680c779639d76d4643db65f34315009d0316d->leave($__internal_afcd60cbe5287be19a2107a7c5b680c779639d76d4643db65f34315009d0316d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_86ea1ca54fd2a0e3aa964248438ee9f29e47af0ebf55e449a3b4ff09f7107fb6 = $this->env->getExtension("native_profiler");
        $__internal_86ea1ca54fd2a0e3aa964248438ee9f29e47af0ebf55e449a3b4ff09f7107fb6->enter($__internal_86ea1ca54fd2a0e3aa964248438ee9f29e47af0ebf55e449a3b4ff09f7107fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_86ea1ca54fd2a0e3aa964248438ee9f29e47af0ebf55e449a3b4ff09f7107fb6->leave($__internal_86ea1ca54fd2a0e3aa964248438ee9f29e47af0ebf55e449a3b4ff09f7107fb6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcfe30682ce7bfc78473492fc0fec7fcf36af3bafbf93a2bee8056c6fc5c3f2d = $this->env->getExtension("native_profiler");
        $__internal_fcfe30682ce7bfc78473492fc0fec7fcf36af3bafbf93a2bee8056c6fc5c3f2d->enter($__internal_fcfe30682ce7bfc78473492fc0fec7fcf36af3bafbf93a2bee8056c6fc5c3f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fcfe30682ce7bfc78473492fc0fec7fcf36af3bafbf93a2bee8056c6fc5c3f2d->leave($__internal_fcfe30682ce7bfc78473492fc0fec7fcf36af3bafbf93a2bee8056c6fc5c3f2d_prof);

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
