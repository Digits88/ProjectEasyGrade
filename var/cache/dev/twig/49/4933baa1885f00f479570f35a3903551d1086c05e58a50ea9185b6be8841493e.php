<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_fbae94a2932b200183e23097fc8f8b10e478249e99cd132d1668f3a60bc35a6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_bedb7f5b4ebdb1f13fe912a99f21effbd087757af3eec64c108c0418a29fc167 = $this->env->getExtension("native_profiler");
        $__internal_bedb7f5b4ebdb1f13fe912a99f21effbd087757af3eec64c108c0418a29fc167->enter($__internal_bedb7f5b4ebdb1f13fe912a99f21effbd087757af3eec64c108c0418a29fc167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bedb7f5b4ebdb1f13fe912a99f21effbd087757af3eec64c108c0418a29fc167->leave($__internal_bedb7f5b4ebdb1f13fe912a99f21effbd087757af3eec64c108c0418a29fc167_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_00e370d53a76dcec7e029c217383eff87c09cf373f5173768652725921c8dcc4 = $this->env->getExtension("native_profiler");
        $__internal_00e370d53a76dcec7e029c217383eff87c09cf373f5173768652725921c8dcc4->enter($__internal_00e370d53a76dcec7e029c217383eff87c09cf373f5173768652725921c8dcc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_00e370d53a76dcec7e029c217383eff87c09cf373f5173768652725921c8dcc4->leave($__internal_00e370d53a76dcec7e029c217383eff87c09cf373f5173768652725921c8dcc4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
