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
        $__internal_eb81bd6042c5ad0148a4aa74a86319a9acdb766b80d8f85005e33f50d957ee7d = $this->env->getExtension("native_profiler");
        $__internal_eb81bd6042c5ad0148a4aa74a86319a9acdb766b80d8f85005e33f50d957ee7d->enter($__internal_eb81bd6042c5ad0148a4aa74a86319a9acdb766b80d8f85005e33f50d957ee7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb81bd6042c5ad0148a4aa74a86319a9acdb766b80d8f85005e33f50d957ee7d->leave($__internal_eb81bd6042c5ad0148a4aa74a86319a9acdb766b80d8f85005e33f50d957ee7d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f722c4ef055108430defb84d0c6fadb000de20870facb2b9c472e37ab981c696 = $this->env->getExtension("native_profiler");
        $__internal_f722c4ef055108430defb84d0c6fadb000de20870facb2b9c472e37ab981c696->enter($__internal_f722c4ef055108430defb84d0c6fadb000de20870facb2b9c472e37ab981c696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_f722c4ef055108430defb84d0c6fadb000de20870facb2b9c472e37ab981c696->leave($__internal_f722c4ef055108430defb84d0c6fadb000de20870facb2b9c472e37ab981c696_prof);

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
