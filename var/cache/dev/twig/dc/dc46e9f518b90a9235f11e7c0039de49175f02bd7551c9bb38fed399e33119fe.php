<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_5eee46d6e55764cc75a2510616220eb2954ebeb2169ba76ae0840f8d9469f13c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_a9b256b5595c29a17010368b1cb62dcb5439bdf2e918d45f9af674c988076e81 = $this->env->getExtension("native_profiler");
        $__internal_a9b256b5595c29a17010368b1cb62dcb5439bdf2e918d45f9af674c988076e81->enter($__internal_a9b256b5595c29a17010368b1cb62dcb5439bdf2e918d45f9af674c988076e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9b256b5595c29a17010368b1cb62dcb5439bdf2e918d45f9af674c988076e81->leave($__internal_a9b256b5595c29a17010368b1cb62dcb5439bdf2e918d45f9af674c988076e81_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0515ae18cab8ba744eda61591f6a72efdbb6686fff0207ceffd05a5c824e2ce0 = $this->env->getExtension("native_profiler");
        $__internal_0515ae18cab8ba744eda61591f6a72efdbb6686fff0207ceffd05a5c824e2ce0->enter($__internal_0515ae18cab8ba744eda61591f6a72efdbb6686fff0207ceffd05a5c824e2ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_0515ae18cab8ba744eda61591f6a72efdbb6686fff0207ceffd05a5c824e2ce0->leave($__internal_0515ae18cab8ba744eda61591f6a72efdbb6686fff0207ceffd05a5c824e2ce0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
