<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_19bda4b2bdbddf4924875e9ce21fb65be0955519353e373f39c29e852c67a94e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_889dd525b7dbe41068e450bb730602a0eada877e47eeb26d1320d3bb3cc4eaa7 = $this->env->getExtension("native_profiler");
        $__internal_889dd525b7dbe41068e450bb730602a0eada877e47eeb26d1320d3bb3cc4eaa7->enter($__internal_889dd525b7dbe41068e450bb730602a0eada877e47eeb26d1320d3bb3cc4eaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_889dd525b7dbe41068e450bb730602a0eada877e47eeb26d1320d3bb3cc4eaa7->leave($__internal_889dd525b7dbe41068e450bb730602a0eada877e47eeb26d1320d3bb3cc4eaa7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bd4fc39490826ddbdbe059b095d6c765aace3f00bb44325b043474e92fb99f9c = $this->env->getExtension("native_profiler");
        $__internal_bd4fc39490826ddbdbe059b095d6c765aace3f00bb44325b043474e92fb99f9c->enter($__internal_bd4fc39490826ddbdbe059b095d6c765aace3f00bb44325b043474e92fb99f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_bd4fc39490826ddbdbe059b095d6c765aace3f00bb44325b043474e92fb99f9c->leave($__internal_bd4fc39490826ddbdbe059b095d6c765aace3f00bb44325b043474e92fb99f9c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
