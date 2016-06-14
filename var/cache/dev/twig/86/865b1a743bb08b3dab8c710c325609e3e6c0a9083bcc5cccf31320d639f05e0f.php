<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_19bda4b2bdbddf4924875e9ce21fb65be0955519353e373f39c29e852c67a94e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_8c457b727ed3cb23145fc9d22f4a873e80f0b974f943f2631dd0e7008a3d3be1 = $this->env->getExtension("native_profiler");
        $__internal_8c457b727ed3cb23145fc9d22f4a873e80f0b974f943f2631dd0e7008a3d3be1->enter($__internal_8c457b727ed3cb23145fc9d22f4a873e80f0b974f943f2631dd0e7008a3d3be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c457b727ed3cb23145fc9d22f4a873e80f0b974f943f2631dd0e7008a3d3be1->leave($__internal_8c457b727ed3cb23145fc9d22f4a873e80f0b974f943f2631dd0e7008a3d3be1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_441b7395f6ed8f8eb1d63ee21e0835c9afc9709b0a580c665009fcf75eb3a1c7 = $this->env->getExtension("native_profiler");
        $__internal_441b7395f6ed8f8eb1d63ee21e0835c9afc9709b0a580c665009fcf75eb3a1c7->enter($__internal_441b7395f6ed8f8eb1d63ee21e0835c9afc9709b0a580c665009fcf75eb3a1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_441b7395f6ed8f8eb1d63ee21e0835c9afc9709b0a580c665009fcf75eb3a1c7->leave($__internal_441b7395f6ed8f8eb1d63ee21e0835c9afc9709b0a580c665009fcf75eb3a1c7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
