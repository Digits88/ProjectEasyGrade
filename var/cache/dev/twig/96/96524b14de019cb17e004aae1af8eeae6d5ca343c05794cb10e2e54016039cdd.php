<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_9ce67525cc7be8299e241d522e71863d7f77b915f301b959708c8e9f3b5d6f08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b878871079e8c2702c1a254229db1bcca41c73261f236b4e250bfc19eda8026d = $this->env->getExtension("native_profiler");
        $__internal_b878871079e8c2702c1a254229db1bcca41c73261f236b4e250bfc19eda8026d->enter($__internal_b878871079e8c2702c1a254229db1bcca41c73261f236b4e250bfc19eda8026d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b878871079e8c2702c1a254229db1bcca41c73261f236b4e250bfc19eda8026d->leave($__internal_b878871079e8c2702c1a254229db1bcca41c73261f236b4e250bfc19eda8026d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9380f0bc8cba84e73bd6700cb81508ec128a8fc6cfddca9b5c31c84490a570d = $this->env->getExtension("native_profiler");
        $__internal_f9380f0bc8cba84e73bd6700cb81508ec128a8fc6cfddca9b5c31c84490a570d->enter($__internal_f9380f0bc8cba84e73bd6700cb81508ec128a8fc6cfddca9b5c31c84490a570d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_f9380f0bc8cba84e73bd6700cb81508ec128a8fc6cfddca9b5c31c84490a570d->leave($__internal_f9380f0bc8cba84e73bd6700cb81508ec128a8fc6cfddca9b5c31c84490a570d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
