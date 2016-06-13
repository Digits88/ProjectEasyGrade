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
        $__internal_3908a47a3e44200b5cd7331a915677baf660beb5fcfa9b948f2a3234f9ad7a90 = $this->env->getExtension("native_profiler");
        $__internal_3908a47a3e44200b5cd7331a915677baf660beb5fcfa9b948f2a3234f9ad7a90->enter($__internal_3908a47a3e44200b5cd7331a915677baf660beb5fcfa9b948f2a3234f9ad7a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3908a47a3e44200b5cd7331a915677baf660beb5fcfa9b948f2a3234f9ad7a90->leave($__internal_3908a47a3e44200b5cd7331a915677baf660beb5fcfa9b948f2a3234f9ad7a90_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_97f4eed7ca3785e96416f0a14cc9b064b29076dfb4d055ac2b82f37f480c080d = $this->env->getExtension("native_profiler");
        $__internal_97f4eed7ca3785e96416f0a14cc9b064b29076dfb4d055ac2b82f37f480c080d->enter($__internal_97f4eed7ca3785e96416f0a14cc9b064b29076dfb4d055ac2b82f37f480c080d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_97f4eed7ca3785e96416f0a14cc9b064b29076dfb4d055ac2b82f37f480c080d->leave($__internal_97f4eed7ca3785e96416f0a14cc9b064b29076dfb4d055ac2b82f37f480c080d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_32bf5acc8e4e50471c8f23fb1cf3bd9fb6a669e4bfefac424718475926a93e11 = $this->env->getExtension("native_profiler");
        $__internal_32bf5acc8e4e50471c8f23fb1cf3bd9fb6a669e4bfefac424718475926a93e11->enter($__internal_32bf5acc8e4e50471c8f23fb1cf3bd9fb6a669e4bfefac424718475926a93e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_32bf5acc8e4e50471c8f23fb1cf3bd9fb6a669e4bfefac424718475926a93e11->leave($__internal_32bf5acc8e4e50471c8f23fb1cf3bd9fb6a669e4bfefac424718475926a93e11_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4af6eb9d81d220863995364dfde086b026a002dbba820a82d87b3cd7ebb0c5ef = $this->env->getExtension("native_profiler");
        $__internal_4af6eb9d81d220863995364dfde086b026a002dbba820a82d87b3cd7ebb0c5ef->enter($__internal_4af6eb9d81d220863995364dfde086b026a002dbba820a82d87b3cd7ebb0c5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4af6eb9d81d220863995364dfde086b026a002dbba820a82d87b3cd7ebb0c5ef->leave($__internal_4af6eb9d81d220863995364dfde086b026a002dbba820a82d87b3cd7ebb0c5ef_prof);

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
