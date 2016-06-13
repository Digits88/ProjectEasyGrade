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
        $__internal_14a9a6cad7950b2b7fd82e456e08bf7b8a84e2b52475e5ca00f2b480ab595528 = $this->env->getExtension("native_profiler");
        $__internal_14a9a6cad7950b2b7fd82e456e08bf7b8a84e2b52475e5ca00f2b480ab595528->enter($__internal_14a9a6cad7950b2b7fd82e456e08bf7b8a84e2b52475e5ca00f2b480ab595528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_14a9a6cad7950b2b7fd82e456e08bf7b8a84e2b52475e5ca00f2b480ab595528->leave($__internal_14a9a6cad7950b2b7fd82e456e08bf7b8a84e2b52475e5ca00f2b480ab595528_prof);

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
