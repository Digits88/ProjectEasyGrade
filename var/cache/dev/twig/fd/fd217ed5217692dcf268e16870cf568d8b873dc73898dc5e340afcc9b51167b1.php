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
        $__internal_d423edf78873dc078d448c3be3961936459cc317057fd5fca35968025b4543e4 = $this->env->getExtension("native_profiler");
        $__internal_d423edf78873dc078d448c3be3961936459cc317057fd5fca35968025b4543e4->enter($__internal_d423edf78873dc078d448c3be3961936459cc317057fd5fca35968025b4543e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d423edf78873dc078d448c3be3961936459cc317057fd5fca35968025b4543e4->leave($__internal_d423edf78873dc078d448c3be3961936459cc317057fd5fca35968025b4543e4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_354ccd10b95bbb0a107321a798fa26b27de61dca725d31073df9f5e422ce66fa = $this->env->getExtension("native_profiler");
        $__internal_354ccd10b95bbb0a107321a798fa26b27de61dca725d31073df9f5e422ce66fa->enter($__internal_354ccd10b95bbb0a107321a798fa26b27de61dca725d31073df9f5e422ce66fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_354ccd10b95bbb0a107321a798fa26b27de61dca725d31073df9f5e422ce66fa->leave($__internal_354ccd10b95bbb0a107321a798fa26b27de61dca725d31073df9f5e422ce66fa_prof);

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
