<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_8888b73c13171ebe358f645142f5a29cd913c7a011cc6d15b7b0a1fbdc5e9e0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_6be3cfee3fb0fd29e795146ba9d19b265dfe802ccec692fb225bd23e053741b5 = $this->env->getExtension("native_profiler");
        $__internal_6be3cfee3fb0fd29e795146ba9d19b265dfe802ccec692fb225bd23e053741b5->enter($__internal_6be3cfee3fb0fd29e795146ba9d19b265dfe802ccec692fb225bd23e053741b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6be3cfee3fb0fd29e795146ba9d19b265dfe802ccec692fb225bd23e053741b5->leave($__internal_6be3cfee3fb0fd29e795146ba9d19b265dfe802ccec692fb225bd23e053741b5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b95f880eecf01b0fb4626b09dfc7c5e387cfb3057cc979d3a879912d263cfcca = $this->env->getExtension("native_profiler");
        $__internal_b95f880eecf01b0fb4626b09dfc7c5e387cfb3057cc979d3a879912d263cfcca->enter($__internal_b95f880eecf01b0fb4626b09dfc7c5e387cfb3057cc979d3a879912d263cfcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_b95f880eecf01b0fb4626b09dfc7c5e387cfb3057cc979d3a879912d263cfcca->leave($__internal_b95f880eecf01b0fb4626b09dfc7c5e387cfb3057cc979d3a879912d263cfcca_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
