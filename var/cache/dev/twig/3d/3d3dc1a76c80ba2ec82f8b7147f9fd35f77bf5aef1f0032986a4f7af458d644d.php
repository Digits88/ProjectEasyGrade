<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_bcd2ad0954fd4285ebb1ba17c55ef087a2db466eb7309b3a1a54d147f3dcdb04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_80c66616854e541a7cd708a9b5bd6cf3bb737d7288a9b2064af9230256317b42 = $this->env->getExtension("native_profiler");
        $__internal_80c66616854e541a7cd708a9b5bd6cf3bb737d7288a9b2064af9230256317b42->enter($__internal_80c66616854e541a7cd708a9b5bd6cf3bb737d7288a9b2064af9230256317b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80c66616854e541a7cd708a9b5bd6cf3bb737d7288a9b2064af9230256317b42->leave($__internal_80c66616854e541a7cd708a9b5bd6cf3bb737d7288a9b2064af9230256317b42_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f77d31ae7fd640265df823b41e3298a2a63b2a3513f645d2cdb4f7f5c16d5fe = $this->env->getExtension("native_profiler");
        $__internal_3f77d31ae7fd640265df823b41e3298a2a63b2a3513f645d2cdb4f7f5c16d5fe->enter($__internal_3f77d31ae7fd640265df823b41e3298a2a63b2a3513f645d2cdb4f7f5c16d5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_3f77d31ae7fd640265df823b41e3298a2a63b2a3513f645d2cdb4f7f5c16d5fe->leave($__internal_3f77d31ae7fd640265df823b41e3298a2a63b2a3513f645d2cdb4f7f5c16d5fe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
