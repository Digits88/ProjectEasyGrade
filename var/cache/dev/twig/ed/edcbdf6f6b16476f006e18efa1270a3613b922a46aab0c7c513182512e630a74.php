<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_58a1d961eddf020cb7e166ed322092edff32a027d5b72a6e89bde489051b01be extends Twig_Template
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
        $__internal_28002ca3d69800251df0f7466d32c67bcaf0c7f8ac59ce994e30452842426a6b = $this->env->getExtension("native_profiler");
        $__internal_28002ca3d69800251df0f7466d32c67bcaf0c7f8ac59ce994e30452842426a6b->enter($__internal_28002ca3d69800251df0f7466d32c67bcaf0c7f8ac59ce994e30452842426a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_28002ca3d69800251df0f7466d32c67bcaf0c7f8ac59ce994e30452842426a6b->leave($__internal_28002ca3d69800251df0f7466d32c67bcaf0c7f8ac59ce994e30452842426a6b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fd3c89bfadf574be4b090307a6a119943de2d3a6f7853d410d9fb30c0c0c6687 = $this->env->getExtension("native_profiler");
        $__internal_fd3c89bfadf574be4b090307a6a119943de2d3a6f7853d410d9fb30c0c0c6687->enter($__internal_fd3c89bfadf574be4b090307a6a119943de2d3a6f7853d410d9fb30c0c0c6687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fd3c89bfadf574be4b090307a6a119943de2d3a6f7853d410d9fb30c0c0c6687->leave($__internal_fd3c89bfadf574be4b090307a6a119943de2d3a6f7853d410d9fb30c0c0c6687_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_da1bfff0d8d8a4609ed2285e21465b0aff01fc7263ae91c5586892f30910ffbc = $this->env->getExtension("native_profiler");
        $__internal_da1bfff0d8d8a4609ed2285e21465b0aff01fc7263ae91c5586892f30910ffbc->enter($__internal_da1bfff0d8d8a4609ed2285e21465b0aff01fc7263ae91c5586892f30910ffbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_da1bfff0d8d8a4609ed2285e21465b0aff01fc7263ae91c5586892f30910ffbc->leave($__internal_da1bfff0d8d8a4609ed2285e21465b0aff01fc7263ae91c5586892f30910ffbc_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e779ef9a830087399ccf0cf30aa90423e8b041e41a3c5e1857c52d7d872e8df0 = $this->env->getExtension("native_profiler");
        $__internal_e779ef9a830087399ccf0cf30aa90423e8b041e41a3c5e1857c52d7d872e8df0->enter($__internal_e779ef9a830087399ccf0cf30aa90423e8b041e41a3c5e1857c52d7d872e8df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e779ef9a830087399ccf0cf30aa90423e8b041e41a3c5e1857c52d7d872e8df0->leave($__internal_e779ef9a830087399ccf0cf30aa90423e8b041e41a3c5e1857c52d7d872e8df0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
