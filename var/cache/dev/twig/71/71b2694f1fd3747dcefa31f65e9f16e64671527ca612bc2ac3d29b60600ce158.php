<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_ebdbfb0f4b4a8c0502a471f03784b22a37c2ece7eeab6eeb659af02f186ec7b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_ef3b93481c61e07e1d3f41336f410fe5ca6f3700197f00bd6f733bfd93df10e3 = $this->env->getExtension("native_profiler");
        $__internal_ef3b93481c61e07e1d3f41336f410fe5ca6f3700197f00bd6f733bfd93df10e3->enter($__internal_ef3b93481c61e07e1d3f41336f410fe5ca6f3700197f00bd6f733bfd93df10e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef3b93481c61e07e1d3f41336f410fe5ca6f3700197f00bd6f733bfd93df10e3->leave($__internal_ef3b93481c61e07e1d3f41336f410fe5ca6f3700197f00bd6f733bfd93df10e3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_761b6b46aef9146b3c169f241779246af5d70b884cb405e2072c6a0018124100 = $this->env->getExtension("native_profiler");
        $__internal_761b6b46aef9146b3c169f241779246af5d70b884cb405e2072c6a0018124100->enter($__internal_761b6b46aef9146b3c169f241779246af5d70b884cb405e2072c6a0018124100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_761b6b46aef9146b3c169f241779246af5d70b884cb405e2072c6a0018124100->leave($__internal_761b6b46aef9146b3c169f241779246af5d70b884cb405e2072c6a0018124100_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
