<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_d3137dff351c884f7ac57a0a93494ffdb2f139c8818c0f758347708b89aa72b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_3a5d3e174199d2502a36cf7ed8ed51894c5c1b253cc9b9be1842f87c8bb660c8 = $this->env->getExtension("native_profiler");
        $__internal_3a5d3e174199d2502a36cf7ed8ed51894c5c1b253cc9b9be1842f87c8bb660c8->enter($__internal_3a5d3e174199d2502a36cf7ed8ed51894c5c1b253cc9b9be1842f87c8bb660c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a5d3e174199d2502a36cf7ed8ed51894c5c1b253cc9b9be1842f87c8bb660c8->leave($__internal_3a5d3e174199d2502a36cf7ed8ed51894c5c1b253cc9b9be1842f87c8bb660c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8099a7dd5f045edbf2167e85351ea183c41ff42d2ab397af5044c8b746abf15d = $this->env->getExtension("native_profiler");
        $__internal_8099a7dd5f045edbf2167e85351ea183c41ff42d2ab397af5044c8b746abf15d->enter($__internal_8099a7dd5f045edbf2167e85351ea183c41ff42d2ab397af5044c8b746abf15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_8099a7dd5f045edbf2167e85351ea183c41ff42d2ab397af5044c8b746abf15d->leave($__internal_8099a7dd5f045edbf2167e85351ea183c41ff42d2ab397af5044c8b746abf15d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
