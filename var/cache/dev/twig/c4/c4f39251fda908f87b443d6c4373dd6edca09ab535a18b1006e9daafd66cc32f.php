<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_f048c3944c65f193a07637af00f3a967346ebbf42805730408ed8cc80df3b89e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c38e02d1b3f91c41cdcef65c20a16e2a7cc3204bd422e9c52ea644e23a7954d = $this->env->getExtension("native_profiler");
        $__internal_2c38e02d1b3f91c41cdcef65c20a16e2a7cc3204bd422e9c52ea644e23a7954d->enter($__internal_2c38e02d1b3f91c41cdcef65c20a16e2a7cc3204bd422e9c52ea644e23a7954d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2c38e02d1b3f91c41cdcef65c20a16e2a7cc3204bd422e9c52ea644e23a7954d->leave($__internal_2c38e02d1b3f91c41cdcef65c20a16e2a7cc3204bd422e9c52ea644e23a7954d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
