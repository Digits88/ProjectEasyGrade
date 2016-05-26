<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_56f02694ce4373576ba63244df3f5ec312e75d6ec9992360acebd8c152462969 extends Twig_Template
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
        $__internal_586a1ec62a15423a1184e5ec91f6b0466aa4d181470f85e104b90690b44f13f7 = $this->env->getExtension("native_profiler");
        $__internal_586a1ec62a15423a1184e5ec91f6b0466aa4d181470f85e104b90690b44f13f7->enter($__internal_586a1ec62a15423a1184e5ec91f6b0466aa4d181470f85e104b90690b44f13f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_586a1ec62a15423a1184e5ec91f6b0466aa4d181470f85e104b90690b44f13f7->leave($__internal_586a1ec62a15423a1184e5ec91f6b0466aa4d181470f85e104b90690b44f13f7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_696a52968d39940859bb85c77c96a598fe6787d525524d92af8bf935f059038e = $this->env->getExtension("native_profiler");
        $__internal_696a52968d39940859bb85c77c96a598fe6787d525524d92af8bf935f059038e->enter($__internal_696a52968d39940859bb85c77c96a598fe6787d525524d92af8bf935f059038e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_696a52968d39940859bb85c77c96a598fe6787d525524d92af8bf935f059038e->leave($__internal_696a52968d39940859bb85c77c96a598fe6787d525524d92af8bf935f059038e_prof);

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
