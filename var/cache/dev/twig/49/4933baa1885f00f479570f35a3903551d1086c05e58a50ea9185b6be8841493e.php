<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_fbae94a2932b200183e23097fc8f8b10e478249e99cd132d1668f3a60bc35a6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_757da90474e2859012f9b8147b5e5a14a57db43a3e1527706aa29edffadab4af = $this->env->getExtension("native_profiler");
        $__internal_757da90474e2859012f9b8147b5e5a14a57db43a3e1527706aa29edffadab4af->enter($__internal_757da90474e2859012f9b8147b5e5a14a57db43a3e1527706aa29edffadab4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_757da90474e2859012f9b8147b5e5a14a57db43a3e1527706aa29edffadab4af->leave($__internal_757da90474e2859012f9b8147b5e5a14a57db43a3e1527706aa29edffadab4af_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cdca96fdda060497749ffe17980f5bc3c82e6022e46ab797e6e9b5e130ff0367 = $this->env->getExtension("native_profiler");
        $__internal_cdca96fdda060497749ffe17980f5bc3c82e6022e46ab797e6e9b5e130ff0367->enter($__internal_cdca96fdda060497749ffe17980f5bc3c82e6022e46ab797e6e9b5e130ff0367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_cdca96fdda060497749ffe17980f5bc3c82e6022e46ab797e6e9b5e130ff0367->leave($__internal_cdca96fdda060497749ffe17980f5bc3c82e6022e46ab797e6e9b5e130ff0367_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
