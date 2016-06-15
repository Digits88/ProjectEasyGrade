<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_a007b875959d395a8cbfb4f3c6b23520b8e83b0f15520fc7a2da4888ba54ded7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_4436168191fe202d67878099216db46052c9731ad590dd3b33fdd63e957a82cc = $this->env->getExtension("native_profiler");
        $__internal_4436168191fe202d67878099216db46052c9731ad590dd3b33fdd63e957a82cc->enter($__internal_4436168191fe202d67878099216db46052c9731ad590dd3b33fdd63e957a82cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4436168191fe202d67878099216db46052c9731ad590dd3b33fdd63e957a82cc->leave($__internal_4436168191fe202d67878099216db46052c9731ad590dd3b33fdd63e957a82cc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a746996f2c39fc23349653d119ce07d9a267c67038ce476734814315479be789 = $this->env->getExtension("native_profiler");
        $__internal_a746996f2c39fc23349653d119ce07d9a267c67038ce476734814315479be789->enter($__internal_a746996f2c39fc23349653d119ce07d9a267c67038ce476734814315479be789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_a746996f2c39fc23349653d119ce07d9a267c67038ce476734814315479be789->leave($__internal_a746996f2c39fc23349653d119ce07d9a267c67038ce476734814315479be789_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
