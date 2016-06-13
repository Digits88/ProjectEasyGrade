<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_2e9da98cf465c2318a9042bbaac5a8f3fa50bfe12048bc742588eae3b6131ebc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_e2675e2c5d5fd91e6eeb494f3a775e3f71b507dda38b83f2f20cafc493a41eca = $this->env->getExtension("native_profiler");
        $__internal_e2675e2c5d5fd91e6eeb494f3a775e3f71b507dda38b83f2f20cafc493a41eca->enter($__internal_e2675e2c5d5fd91e6eeb494f3a775e3f71b507dda38b83f2f20cafc493a41eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2675e2c5d5fd91e6eeb494f3a775e3f71b507dda38b83f2f20cafc493a41eca->leave($__internal_e2675e2c5d5fd91e6eeb494f3a775e3f71b507dda38b83f2f20cafc493a41eca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_969b4f8015a2b334dd90a14483ea9343647cc15875380e5bfe671920658ee722 = $this->env->getExtension("native_profiler");
        $__internal_969b4f8015a2b334dd90a14483ea9343647cc15875380e5bfe671920658ee722->enter($__internal_969b4f8015a2b334dd90a14483ea9343647cc15875380e5bfe671920658ee722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_969b4f8015a2b334dd90a14483ea9343647cc15875380e5bfe671920658ee722->leave($__internal_969b4f8015a2b334dd90a14483ea9343647cc15875380e5bfe671920658ee722_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
