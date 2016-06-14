<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_97b406d5dbc7c401f512d515fc5d543bdedf29e40ed9821f3ef2cf9f30d18a67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_2f97de3c4295fca26498159231be5f5b28369769c7c75a1dad3e36421ab59d32 = $this->env->getExtension("native_profiler");
        $__internal_2f97de3c4295fca26498159231be5f5b28369769c7c75a1dad3e36421ab59d32->enter($__internal_2f97de3c4295fca26498159231be5f5b28369769c7c75a1dad3e36421ab59d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f97de3c4295fca26498159231be5f5b28369769c7c75a1dad3e36421ab59d32->leave($__internal_2f97de3c4295fca26498159231be5f5b28369769c7c75a1dad3e36421ab59d32_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cdf8afcd6f40c5c071f6c04f6c76109e42d97be54d31546c204dce89e13a7a3e = $this->env->getExtension("native_profiler");
        $__internal_cdf8afcd6f40c5c071f6c04f6c76109e42d97be54d31546c204dce89e13a7a3e->enter($__internal_cdf8afcd6f40c5c071f6c04f6c76109e42d97be54d31546c204dce89e13a7a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_cdf8afcd6f40c5c071f6c04f6c76109e42d97be54d31546c204dce89e13a7a3e->leave($__internal_cdf8afcd6f40c5c071f6c04f6c76109e42d97be54d31546c204dce89e13a7a3e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
