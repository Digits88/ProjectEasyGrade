<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_bf64f2e1cb23ca2dc16ae573d2c233c1222b568118ceba1e06f4506a57eac17e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_da37aa1849bfd5431e6445e5ee6a60e03a3f03d870b4f9a4290546007f59c3f7 = $this->env->getExtension("native_profiler");
        $__internal_da37aa1849bfd5431e6445e5ee6a60e03a3f03d870b4f9a4290546007f59c3f7->enter($__internal_da37aa1849bfd5431e6445e5ee6a60e03a3f03d870b4f9a4290546007f59c3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da37aa1849bfd5431e6445e5ee6a60e03a3f03d870b4f9a4290546007f59c3f7->leave($__internal_da37aa1849bfd5431e6445e5ee6a60e03a3f03d870b4f9a4290546007f59c3f7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a3a825773e14328d133e52c33d1349261c4c9b51e77ed7372c62e1fa93a7116 = $this->env->getExtension("native_profiler");
        $__internal_5a3a825773e14328d133e52c33d1349261c4c9b51e77ed7372c62e1fa93a7116->enter($__internal_5a3a825773e14328d133e52c33d1349261c4c9b51e77ed7372c62e1fa93a7116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_5a3a825773e14328d133e52c33d1349261c4c9b51e77ed7372c62e1fa93a7116->leave($__internal_5a3a825773e14328d133e52c33d1349261c4c9b51e77ed7372c62e1fa93a7116_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
