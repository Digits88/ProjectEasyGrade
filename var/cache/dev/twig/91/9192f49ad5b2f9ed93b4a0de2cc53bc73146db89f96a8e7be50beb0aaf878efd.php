<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_95bb208137b063db705ab40d8c4558ca7c1c711d91dbeb1ad3663703ee1e5986 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_d53c9f6f596625742545e63ed69f5a7ff947f8f99120ba5f53a45ee1ffee1863 = $this->env->getExtension("native_profiler");
        $__internal_d53c9f6f596625742545e63ed69f5a7ff947f8f99120ba5f53a45ee1ffee1863->enter($__internal_d53c9f6f596625742545e63ed69f5a7ff947f8f99120ba5f53a45ee1ffee1863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d53c9f6f596625742545e63ed69f5a7ff947f8f99120ba5f53a45ee1ffee1863->leave($__internal_d53c9f6f596625742545e63ed69f5a7ff947f8f99120ba5f53a45ee1ffee1863_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ddc3f61397b7ee48e9c42525558df076f90a8dd73113965caf2ade5c7411c0ae = $this->env->getExtension("native_profiler");
        $__internal_ddc3f61397b7ee48e9c42525558df076f90a8dd73113965caf2ade5c7411c0ae->enter($__internal_ddc3f61397b7ee48e9c42525558df076f90a8dd73113965caf2ade5c7411c0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ddc3f61397b7ee48e9c42525558df076f90a8dd73113965caf2ade5c7411c0ae->leave($__internal_ddc3f61397b7ee48e9c42525558df076f90a8dd73113965caf2ade5c7411c0ae_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
