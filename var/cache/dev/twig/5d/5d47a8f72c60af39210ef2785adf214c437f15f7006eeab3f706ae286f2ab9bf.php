<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_09d5310392117a3f247396d6261af7935a4b86938eeb37688bcdf09df1f61ec9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be7322800abec0d161e41b2a1246ee63a2fef542fda4d924cb5dbbe4b7dc1110 = $this->env->getExtension("native_profiler");
        $__internal_be7322800abec0d161e41b2a1246ee63a2fef542fda4d924cb5dbbe4b7dc1110->enter($__internal_be7322800abec0d161e41b2a1246ee63a2fef542fda4d924cb5dbbe4b7dc1110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_be7322800abec0d161e41b2a1246ee63a2fef542fda4d924cb5dbbe4b7dc1110->leave($__internal_be7322800abec0d161e41b2a1246ee63a2fef542fda4d924cb5dbbe4b7dc1110_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_126cc1eca14e4730d5bd4ec7ac9c47f73c851f6e5ec99967a22a32afdfc03c88 = $this->env->getExtension("native_profiler");
        $__internal_126cc1eca14e4730d5bd4ec7ac9c47f73c851f6e5ec99967a22a32afdfc03c88->enter($__internal_126cc1eca14e4730d5bd4ec7ac9c47f73c851f6e5ec99967a22a32afdfc03c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_126cc1eca14e4730d5bd4ec7ac9c47f73c851f6e5ec99967a22a32afdfc03c88->leave($__internal_126cc1eca14e4730d5bd4ec7ac9c47f73c851f6e5ec99967a22a32afdfc03c88_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_aa3730f61303be4550b8a6156119959ed8beba9f0e9083967a790668702a7125 = $this->env->getExtension("native_profiler");
        $__internal_aa3730f61303be4550b8a6156119959ed8beba9f0e9083967a790668702a7125->enter($__internal_aa3730f61303be4550b8a6156119959ed8beba9f0e9083967a790668702a7125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_aa3730f61303be4550b8a6156119959ed8beba9f0e9083967a790668702a7125->leave($__internal_aa3730f61303be4550b8a6156119959ed8beba9f0e9083967a790668702a7125_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_437b0c4f4c41503a152ed806c1edd5f9b0c1a3243b160737308857514c24be91 = $this->env->getExtension("native_profiler");
        $__internal_437b0c4f4c41503a152ed806c1edd5f9b0c1a3243b160737308857514c24be91->enter($__internal_437b0c4f4c41503a152ed806c1edd5f9b0c1a3243b160737308857514c24be91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_437b0c4f4c41503a152ed806c1edd5f9b0c1a3243b160737308857514c24be91->leave($__internal_437b0c4f4c41503a152ed806c1edd5f9b0c1a3243b160737308857514c24be91_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
