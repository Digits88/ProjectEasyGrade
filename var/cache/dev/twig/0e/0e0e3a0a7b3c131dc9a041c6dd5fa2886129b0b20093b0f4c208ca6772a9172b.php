<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_4c46106c7af9cb28a52049dc2bedf79cdf50f5e0cc8c58bed55f00619224c661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_1a127b9408df66623d7ae1e412b09cc29dbccce3ad7645e7f404a196f9fd1c8d = $this->env->getExtension("native_profiler");
        $__internal_1a127b9408df66623d7ae1e412b09cc29dbccce3ad7645e7f404a196f9fd1c8d->enter($__internal_1a127b9408df66623d7ae1e412b09cc29dbccce3ad7645e7f404a196f9fd1c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a127b9408df66623d7ae1e412b09cc29dbccce3ad7645e7f404a196f9fd1c8d->leave($__internal_1a127b9408df66623d7ae1e412b09cc29dbccce3ad7645e7f404a196f9fd1c8d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7eaa0392d67a3bb6db448897d9a46f1f8abc5010ef38fcc139496475f473d835 = $this->env->getExtension("native_profiler");
        $__internal_7eaa0392d67a3bb6db448897d9a46f1f8abc5010ef38fcc139496475f473d835->enter($__internal_7eaa0392d67a3bb6db448897d9a46f1f8abc5010ef38fcc139496475f473d835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_7eaa0392d67a3bb6db448897d9a46f1f8abc5010ef38fcc139496475f473d835->leave($__internal_7eaa0392d67a3bb6db448897d9a46f1f8abc5010ef38fcc139496475f473d835_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
