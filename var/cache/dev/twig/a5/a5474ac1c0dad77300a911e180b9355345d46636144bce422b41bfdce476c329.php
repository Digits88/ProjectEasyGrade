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
        $__internal_df43bc6792d5d87837c7bdf65248f0f7d54fbedf893cc132e0bc2c076124fa1e = $this->env->getExtension("native_profiler");
        $__internal_df43bc6792d5d87837c7bdf65248f0f7d54fbedf893cc132e0bc2c076124fa1e->enter($__internal_df43bc6792d5d87837c7bdf65248f0f7d54fbedf893cc132e0bc2c076124fa1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df43bc6792d5d87837c7bdf65248f0f7d54fbedf893cc132e0bc2c076124fa1e->leave($__internal_df43bc6792d5d87837c7bdf65248f0f7d54fbedf893cc132e0bc2c076124fa1e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac75e115b7888c4755d8c5e40843ac162bcf10a1f1b353bcb13e2e946aa64146 = $this->env->getExtension("native_profiler");
        $__internal_ac75e115b7888c4755d8c5e40843ac162bcf10a1f1b353bcb13e2e946aa64146->enter($__internal_ac75e115b7888c4755d8c5e40843ac162bcf10a1f1b353bcb13e2e946aa64146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_ac75e115b7888c4755d8c5e40843ac162bcf10a1f1b353bcb13e2e946aa64146->leave($__internal_ac75e115b7888c4755d8c5e40843ac162bcf10a1f1b353bcb13e2e946aa64146_prof);

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
