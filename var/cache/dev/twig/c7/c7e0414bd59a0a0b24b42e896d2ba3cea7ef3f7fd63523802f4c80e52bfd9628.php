<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_bbd4acedeeb645ff31a5e1bef2948ce0fca146d31123ddaa34258bfe97e1b035 extends Twig_Template
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
        $__internal_9e7cabc9bd8e2b6e167e2ec33c7cca0a73a087728a2a2b091c572e139c21d912 = $this->env->getExtension("native_profiler");
        $__internal_9e7cabc9bd8e2b6e167e2ec33c7cca0a73a087728a2a2b091c572e139c21d912->enter($__internal_9e7cabc9bd8e2b6e167e2ec33c7cca0a73a087728a2a2b091c572e139c21d912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_9e7cabc9bd8e2b6e167e2ec33c7cca0a73a087728a2a2b091c572e139c21d912->leave($__internal_9e7cabc9bd8e2b6e167e2ec33c7cca0a73a087728a2a2b091c572e139c21d912_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
