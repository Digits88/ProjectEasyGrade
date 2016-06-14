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
        $__internal_4a69f1dfd67e5c4a34b1d222cde97e06e0f21f08bea819c23504a4033b650c31 = $this->env->getExtension("native_profiler");
        $__internal_4a69f1dfd67e5c4a34b1d222cde97e06e0f21f08bea819c23504a4033b650c31->enter($__internal_4a69f1dfd67e5c4a34b1d222cde97e06e0f21f08bea819c23504a4033b650c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4a69f1dfd67e5c4a34b1d222cde97e06e0f21f08bea819c23504a4033b650c31->leave($__internal_4a69f1dfd67e5c4a34b1d222cde97e06e0f21f08bea819c23504a4033b650c31_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2d7dbbc17bad1f61ffd2dc3e2c5d4fd74a0dd356db8dfddc0e935028d9ff0412 = $this->env->getExtension("native_profiler");
        $__internal_2d7dbbc17bad1f61ffd2dc3e2c5d4fd74a0dd356db8dfddc0e935028d9ff0412->enter($__internal_2d7dbbc17bad1f61ffd2dc3e2c5d4fd74a0dd356db8dfddc0e935028d9ff0412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2d7dbbc17bad1f61ffd2dc3e2c5d4fd74a0dd356db8dfddc0e935028d9ff0412->leave($__internal_2d7dbbc17bad1f61ffd2dc3e2c5d4fd74a0dd356db8dfddc0e935028d9ff0412_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1ab429e89531f83fdab772a2517f6afb84842659ca2ff4348f52e0f8b24c46d5 = $this->env->getExtension("native_profiler");
        $__internal_1ab429e89531f83fdab772a2517f6afb84842659ca2ff4348f52e0f8b24c46d5->enter($__internal_1ab429e89531f83fdab772a2517f6afb84842659ca2ff4348f52e0f8b24c46d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1ab429e89531f83fdab772a2517f6afb84842659ca2ff4348f52e0f8b24c46d5->leave($__internal_1ab429e89531f83fdab772a2517f6afb84842659ca2ff4348f52e0f8b24c46d5_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1c4d4abc5458aa27222e9ca407f114b6faefceac261d0e7dc33e400e79aeddb8 = $this->env->getExtension("native_profiler");
        $__internal_1c4d4abc5458aa27222e9ca407f114b6faefceac261d0e7dc33e400e79aeddb8->enter($__internal_1c4d4abc5458aa27222e9ca407f114b6faefceac261d0e7dc33e400e79aeddb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1c4d4abc5458aa27222e9ca407f114b6faefceac261d0e7dc33e400e79aeddb8->leave($__internal_1c4d4abc5458aa27222e9ca407f114b6faefceac261d0e7dc33e400e79aeddb8_prof);

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
