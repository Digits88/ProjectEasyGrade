<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_70031137b0913118882b6b83773cc94f7e6df12b851651c6ed11f6cc3699024a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_4f3a7e3c5651967920c2e0e5d43f4c0aacebb6d790645626b06c45bb485d5bfa = $this->env->getExtension("native_profiler");
        $__internal_4f3a7e3c5651967920c2e0e5d43f4c0aacebb6d790645626b06c45bb485d5bfa->enter($__internal_4f3a7e3c5651967920c2e0e5d43f4c0aacebb6d790645626b06c45bb485d5bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f3a7e3c5651967920c2e0e5d43f4c0aacebb6d790645626b06c45bb485d5bfa->leave($__internal_4f3a7e3c5651967920c2e0e5d43f4c0aacebb6d790645626b06c45bb485d5bfa_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db376e75425bcfe68525565b27b4be8ac6c889d9fba8cfa59ee500da90826f9c = $this->env->getExtension("native_profiler");
        $__internal_db376e75425bcfe68525565b27b4be8ac6c889d9fba8cfa59ee500da90826f9c->enter($__internal_db376e75425bcfe68525565b27b4be8ac6c889d9fba8cfa59ee500da90826f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_db376e75425bcfe68525565b27b4be8ac6c889d9fba8cfa59ee500da90826f9c->leave($__internal_db376e75425bcfe68525565b27b4be8ac6c889d9fba8cfa59ee500da90826f9c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
