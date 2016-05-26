<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_eedbaab013a3a74a2877b6a4722bd43b4690334dd5ff1044e99ff4084a1bfbe5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_cdbf5586c24cab3073f377ec2cf809124147d788d8b6e4920d7faff560da4d6c = $this->env->getExtension("native_profiler");
        $__internal_cdbf5586c24cab3073f377ec2cf809124147d788d8b6e4920d7faff560da4d6c->enter($__internal_cdbf5586c24cab3073f377ec2cf809124147d788d8b6e4920d7faff560da4d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdbf5586c24cab3073f377ec2cf809124147d788d8b6e4920d7faff560da4d6c->leave($__internal_cdbf5586c24cab3073f377ec2cf809124147d788d8b6e4920d7faff560da4d6c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e033413357295e88889365ba0cb7ad92a196b30ba44f642adbcefa0c087ab619 = $this->env->getExtension("native_profiler");
        $__internal_e033413357295e88889365ba0cb7ad92a196b30ba44f642adbcefa0c087ab619->enter($__internal_e033413357295e88889365ba0cb7ad92a196b30ba44f642adbcefa0c087ab619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_e033413357295e88889365ba0cb7ad92a196b30ba44f642adbcefa0c087ab619->leave($__internal_e033413357295e88889365ba0cb7ad92a196b30ba44f642adbcefa0c087ab619_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
