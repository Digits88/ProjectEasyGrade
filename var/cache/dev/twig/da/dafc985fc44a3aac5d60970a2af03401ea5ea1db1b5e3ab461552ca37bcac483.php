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
        $__internal_daee67af037f5572692cc947a49fc5314c02a82ce2006a483eb67af1a22dcb9d = $this->env->getExtension("native_profiler");
        $__internal_daee67af037f5572692cc947a49fc5314c02a82ce2006a483eb67af1a22dcb9d->enter($__internal_daee67af037f5572692cc947a49fc5314c02a82ce2006a483eb67af1a22dcb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_daee67af037f5572692cc947a49fc5314c02a82ce2006a483eb67af1a22dcb9d->leave($__internal_daee67af037f5572692cc947a49fc5314c02a82ce2006a483eb67af1a22dcb9d_prof);

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
