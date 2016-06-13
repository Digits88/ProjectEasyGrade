<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_0bcdb9d26e6696f6e3bfd64e18aa55e06a8eefff9b8b7e559cf0a5d8e9841fb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_9bd5a6ffc6fdedb307c66ad57141a8001274648e199e0e5481b1c8c58ae2699b = $this->env->getExtension("native_profiler");
        $__internal_9bd5a6ffc6fdedb307c66ad57141a8001274648e199e0e5481b1c8c58ae2699b->enter($__internal_9bd5a6ffc6fdedb307c66ad57141a8001274648e199e0e5481b1c8c58ae2699b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bd5a6ffc6fdedb307c66ad57141a8001274648e199e0e5481b1c8c58ae2699b->leave($__internal_9bd5a6ffc6fdedb307c66ad57141a8001274648e199e0e5481b1c8c58ae2699b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a24a218f2ce1e5660d37dc6a54c277c93c6c5e3599bc7c0e633ce2ce53b00f0c = $this->env->getExtension("native_profiler");
        $__internal_a24a218f2ce1e5660d37dc6a54c277c93c6c5e3599bc7c0e633ce2ce53b00f0c->enter($__internal_a24a218f2ce1e5660d37dc6a54c277c93c6c5e3599bc7c0e633ce2ce53b00f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_a24a218f2ce1e5660d37dc6a54c277c93c6c5e3599bc7c0e633ce2ce53b00f0c->leave($__internal_a24a218f2ce1e5660d37dc6a54c277c93c6c5e3599bc7c0e633ce2ce53b00f0c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
