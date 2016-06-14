<?php

/* default/index.html.twig */
class __TwigTemplate_9b778da5ef0c799d79463112e3f809cfe08c5c95d80075f34b6070041ff3535b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03e265249fef12cbd07fb7a56c40bbed6ee119a050e4bd18cd7160dc0f7acf1c = $this->env->getExtension("native_profiler");
        $__internal_03e265249fef12cbd07fb7a56c40bbed6ee119a050e4bd18cd7160dc0f7acf1c->enter($__internal_03e265249fef12cbd07fb7a56c40bbed6ee119a050e4bd18cd7160dc0f7acf1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03e265249fef12cbd07fb7a56c40bbed6ee119a050e4bd18cd7160dc0f7acf1c->leave($__internal_03e265249fef12cbd07fb7a56c40bbed6ee119a050e4bd18cd7160dc0f7acf1c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_741d1716361e7ab05eaa594eb4805947598bde2f63a3c0464a0dd5064c8d8031 = $this->env->getExtension("native_profiler");
        $__internal_741d1716361e7ab05eaa594eb4805947598bde2f63a3c0464a0dd5064c8d8031->enter($__internal_741d1716361e7ab05eaa594eb4805947598bde2f63a3c0464a0dd5064c8d8031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
";
        
        $__internal_741d1716361e7ab05eaa594eb4805947598bde2f63a3c0464a0dd5064c8d8031->leave($__internal_741d1716361e7ab05eaa594eb4805947598bde2f63a3c0464a0dd5064c8d8031_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/*     {{ id }}*/
/* {% endblock %}*/
/* */
