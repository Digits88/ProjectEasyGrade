<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_ad80f999ae5c2df2604d587d1b68ef56190af44f66620308db65ae3ab31becc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_8249b34ef30d312489a2e8f246e41f79b2a6b26c096ab74eb73385c360b167c2 = $this->env->getExtension("native_profiler");
        $__internal_8249b34ef30d312489a2e8f246e41f79b2a6b26c096ab74eb73385c360b167c2->enter($__internal_8249b34ef30d312489a2e8f246e41f79b2a6b26c096ab74eb73385c360b167c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8249b34ef30d312489a2e8f246e41f79b2a6b26c096ab74eb73385c360b167c2->leave($__internal_8249b34ef30d312489a2e8f246e41f79b2a6b26c096ab74eb73385c360b167c2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7bf995c12aec7702e322293a8dacaeac6436f159364397c6d4e1d87d137a61ee = $this->env->getExtension("native_profiler");
        $__internal_7bf995c12aec7702e322293a8dacaeac6436f159364397c6d4e1d87d137a61ee->enter($__internal_7bf995c12aec7702e322293a8dacaeac6436f159364397c6d4e1d87d137a61ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7bf995c12aec7702e322293a8dacaeac6436f159364397c6d4e1d87d137a61ee->leave($__internal_7bf995c12aec7702e322293a8dacaeac6436f159364397c6d4e1d87d137a61ee_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
