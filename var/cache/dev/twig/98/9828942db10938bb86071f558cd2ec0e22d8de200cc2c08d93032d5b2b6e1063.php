<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_a351236a17ed1e8cb2ba49544551ecb8da1e52b962b4def9a03b2fb7926a3be2 extends Twig_Template
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
        $__internal_c7d33bafa64281e69f07e3770a2b0f9c38430a26dd7bed79d2e55456beb074cb = $this->env->getExtension("native_profiler");
        $__internal_c7d33bafa64281e69f07e3770a2b0f9c38430a26dd7bed79d2e55456beb074cb->enter($__internal_c7d33bafa64281e69f07e3770a2b0f9c38430a26dd7bed79d2e55456beb074cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c7d33bafa64281e69f07e3770a2b0f9c38430a26dd7bed79d2e55456beb074cb->leave($__internal_c7d33bafa64281e69f07e3770a2b0f9c38430a26dd7bed79d2e55456beb074cb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
