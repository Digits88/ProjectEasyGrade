<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_5e6572eca1960fdee633d7eaff24a159c8b7870011809b5cb6fbf0d59e677c2b extends Twig_Template
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
        $__internal_8c9017bc3284e34d964c9f2768a81c756d495042044376e6b02292ce5552318b = $this->env->getExtension("native_profiler");
        $__internal_8c9017bc3284e34d964c9f2768a81c756d495042044376e6b02292ce5552318b->enter($__internal_8c9017bc3284e34d964c9f2768a81c756d495042044376e6b02292ce5552318b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c9017bc3284e34d964c9f2768a81c756d495042044376e6b02292ce5552318b->leave($__internal_8c9017bc3284e34d964c9f2768a81c756d495042044376e6b02292ce5552318b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2256580e2eeedc57769a927214fa39bdcd8537f08efdab0db14dd82f4ab8453f = $this->env->getExtension("native_profiler");
        $__internal_2256580e2eeedc57769a927214fa39bdcd8537f08efdab0db14dd82f4ab8453f->enter($__internal_2256580e2eeedc57769a927214fa39bdcd8537f08efdab0db14dd82f4ab8453f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2256580e2eeedc57769a927214fa39bdcd8537f08efdab0db14dd82f4ab8453f->leave($__internal_2256580e2eeedc57769a927214fa39bdcd8537f08efdab0db14dd82f4ab8453f_prof);

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