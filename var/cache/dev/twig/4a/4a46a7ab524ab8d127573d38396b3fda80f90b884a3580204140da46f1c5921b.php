<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_7fa888df466ff5f1631cdf179f1f35280f9be550788f11bf81da912fd7aa4dea extends Twig_Template
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
        $__internal_2cd50af0b12bbce2437c6312ee0b813406bddafe2e4f097acc737cf10eaca227 = $this->env->getExtension("native_profiler");
        $__internal_2cd50af0b12bbce2437c6312ee0b813406bddafe2e4f097acc737cf10eaca227->enter($__internal_2cd50af0b12bbce2437c6312ee0b813406bddafe2e4f097acc737cf10eaca227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2cd50af0b12bbce2437c6312ee0b813406bddafe2e4f097acc737cf10eaca227->leave($__internal_2cd50af0b12bbce2437c6312ee0b813406bddafe2e4f097acc737cf10eaca227_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_442519c0e1fbab88cbbe8b1a1fb801900f80781b6ef27eba0d0d440a0b04fbec = $this->env->getExtension("native_profiler");
        $__internal_442519c0e1fbab88cbbe8b1a1fb801900f80781b6ef27eba0d0d440a0b04fbec->enter($__internal_442519c0e1fbab88cbbe8b1a1fb801900f80781b6ef27eba0d0d440a0b04fbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_442519c0e1fbab88cbbe8b1a1fb801900f80781b6ef27eba0d0d440a0b04fbec->leave($__internal_442519c0e1fbab88cbbe8b1a1fb801900f80781b6ef27eba0d0d440a0b04fbec_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1f3f4e63d08dfc6f7096a6a462ae1685a7e1073ace6bcee52fb6ca24d4b7b2f1 = $this->env->getExtension("native_profiler");
        $__internal_1f3f4e63d08dfc6f7096a6a462ae1685a7e1073ace6bcee52fb6ca24d4b7b2f1->enter($__internal_1f3f4e63d08dfc6f7096a6a462ae1685a7e1073ace6bcee52fb6ca24d4b7b2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1f3f4e63d08dfc6f7096a6a462ae1685a7e1073ace6bcee52fb6ca24d4b7b2f1->leave($__internal_1f3f4e63d08dfc6f7096a6a462ae1685a7e1073ace6bcee52fb6ca24d4b7b2f1_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_aed995f4c5361ee44fe234402a791013e1226271484e65b29c0cb55cb06ef1f3 = $this->env->getExtension("native_profiler");
        $__internal_aed995f4c5361ee44fe234402a791013e1226271484e65b29c0cb55cb06ef1f3->enter($__internal_aed995f4c5361ee44fe234402a791013e1226271484e65b29c0cb55cb06ef1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_aed995f4c5361ee44fe234402a791013e1226271484e65b29c0cb55cb06ef1f3->leave($__internal_aed995f4c5361ee44fe234402a791013e1226271484e65b29c0cb55cb06ef1f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
