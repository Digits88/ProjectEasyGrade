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
        $__internal_7891b6d66648ffbcc450c13675b1122e5c7ecebd833ec45e62d8f1f591fdc43d = $this->env->getExtension("native_profiler");
        $__internal_7891b6d66648ffbcc450c13675b1122e5c7ecebd833ec45e62d8f1f591fdc43d->enter($__internal_7891b6d66648ffbcc450c13675b1122e5c7ecebd833ec45e62d8f1f591fdc43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7891b6d66648ffbcc450c13675b1122e5c7ecebd833ec45e62d8f1f591fdc43d->leave($__internal_7891b6d66648ffbcc450c13675b1122e5c7ecebd833ec45e62d8f1f591fdc43d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_698a4d21ddcb8f2a541deeedc7aa22ce542b531c38bdd4c1f5373c51ca6a7761 = $this->env->getExtension("native_profiler");
        $__internal_698a4d21ddcb8f2a541deeedc7aa22ce542b531c38bdd4c1f5373c51ca6a7761->enter($__internal_698a4d21ddcb8f2a541deeedc7aa22ce542b531c38bdd4c1f5373c51ca6a7761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_698a4d21ddcb8f2a541deeedc7aa22ce542b531c38bdd4c1f5373c51ca6a7761->leave($__internal_698a4d21ddcb8f2a541deeedc7aa22ce542b531c38bdd4c1f5373c51ca6a7761_prof);

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
