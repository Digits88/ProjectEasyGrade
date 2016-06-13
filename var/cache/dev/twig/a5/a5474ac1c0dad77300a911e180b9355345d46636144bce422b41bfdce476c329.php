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
        $__internal_cb080ac77f0b98bf1aafd7498d48fbd26db3aec2de0bd17c75ac4e3f1a73ad02 = $this->env->getExtension("native_profiler");
        $__internal_cb080ac77f0b98bf1aafd7498d48fbd26db3aec2de0bd17c75ac4e3f1a73ad02->enter($__internal_cb080ac77f0b98bf1aafd7498d48fbd26db3aec2de0bd17c75ac4e3f1a73ad02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb080ac77f0b98bf1aafd7498d48fbd26db3aec2de0bd17c75ac4e3f1a73ad02->leave($__internal_cb080ac77f0b98bf1aafd7498d48fbd26db3aec2de0bd17c75ac4e3f1a73ad02_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9e9e48bf17b3a8464c587fe32503f8f1179c00a9a92b05211e9148473b38e3dd = $this->env->getExtension("native_profiler");
        $__internal_9e9e48bf17b3a8464c587fe32503f8f1179c00a9a92b05211e9148473b38e3dd->enter($__internal_9e9e48bf17b3a8464c587fe32503f8f1179c00a9a92b05211e9148473b38e3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_9e9e48bf17b3a8464c587fe32503f8f1179c00a9a92b05211e9148473b38e3dd->leave($__internal_9e9e48bf17b3a8464c587fe32503f8f1179c00a9a92b05211e9148473b38e3dd_prof);

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
