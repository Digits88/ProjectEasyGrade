<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_a4c4dcbe7388056137ac0b0884b945d1302b989629917b70b4fed6aca457ee22 extends Twig_Template
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
        $__internal_f92082959e0947238f1d22c6a5739410d4a71e7257205a41734833d48f9a994a = $this->env->getExtension("native_profiler");
        $__internal_f92082959e0947238f1d22c6a5739410d4a71e7257205a41734833d48f9a994a->enter($__internal_f92082959e0947238f1d22c6a5739410d4a71e7257205a41734833d48f9a994a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_f92082959e0947238f1d22c6a5739410d4a71e7257205a41734833d48f9a994a->leave($__internal_f92082959e0947238f1d22c6a5739410d4a71e7257205a41734833d48f9a994a_prof);

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
