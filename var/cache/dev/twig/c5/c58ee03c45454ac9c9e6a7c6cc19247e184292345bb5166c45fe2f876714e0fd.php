<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_fe652ef937c144fa825ec809cf14b25d8e15350225d6586795e7bd53ea4661d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_86fe6a533eb1e0cfb75698f4f95c0477fd04501aed605093887ab08e6a9e544e = $this->env->getExtension("native_profiler");
        $__internal_86fe6a533eb1e0cfb75698f4f95c0477fd04501aed605093887ab08e6a9e544e->enter($__internal_86fe6a533eb1e0cfb75698f4f95c0477fd04501aed605093887ab08e6a9e544e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86fe6a533eb1e0cfb75698f4f95c0477fd04501aed605093887ab08e6a9e544e->leave($__internal_86fe6a533eb1e0cfb75698f4f95c0477fd04501aed605093887ab08e6a9e544e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_42db587acc396ecaa526add40e0e44f9f1cf783055b703396cad2e0bed4abb7a = $this->env->getExtension("native_profiler");
        $__internal_42db587acc396ecaa526add40e0e44f9f1cf783055b703396cad2e0bed4abb7a->enter($__internal_42db587acc396ecaa526add40e0e44f9f1cf783055b703396cad2e0bed4abb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_42db587acc396ecaa526add40e0e44f9f1cf783055b703396cad2e0bed4abb7a->leave($__internal_42db587acc396ecaa526add40e0e44f9f1cf783055b703396cad2e0bed4abb7a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
