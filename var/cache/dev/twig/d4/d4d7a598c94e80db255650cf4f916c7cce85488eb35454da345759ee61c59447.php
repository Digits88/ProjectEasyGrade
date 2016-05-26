<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_8d57a26867a230dc2fabceb629cbe38ad0115a0bb1cb7fb5c050d02ace5405e7 extends Twig_Template
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
        $__internal_ca855b7b55b4a74eb7465b984090fc7fa795321bb4d2f45194bbe443dd5cf7a6 = $this->env->getExtension("native_profiler");
        $__internal_ca855b7b55b4a74eb7465b984090fc7fa795321bb4d2f45194bbe443dd5cf7a6->enter($__internal_ca855b7b55b4a74eb7465b984090fc7fa795321bb4d2f45194bbe443dd5cf7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca855b7b55b4a74eb7465b984090fc7fa795321bb4d2f45194bbe443dd5cf7a6->leave($__internal_ca855b7b55b4a74eb7465b984090fc7fa795321bb4d2f45194bbe443dd5cf7a6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2570c3fef6cbf9acc5468bfba24a3db04ef39b530e2bb2b041b2fbd1ab3f54b = $this->env->getExtension("native_profiler");
        $__internal_c2570c3fef6cbf9acc5468bfba24a3db04ef39b530e2bb2b041b2fbd1ab3f54b->enter($__internal_c2570c3fef6cbf9acc5468bfba24a3db04ef39b530e2bb2b041b2fbd1ab3f54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_c2570c3fef6cbf9acc5468bfba24a3db04ef39b530e2bb2b041b2fbd1ab3f54b->leave($__internal_c2570c3fef6cbf9acc5468bfba24a3db04ef39b530e2bb2b041b2fbd1ab3f54b_prof);

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
