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
        $__internal_a9d5ae5471a44b1d5538f111823580f86d524ea9e2da9ab8d5ef5e3e0e3bedff = $this->env->getExtension("native_profiler");
        $__internal_a9d5ae5471a44b1d5538f111823580f86d524ea9e2da9ab8d5ef5e3e0e3bedff->enter($__internal_a9d5ae5471a44b1d5538f111823580f86d524ea9e2da9ab8d5ef5e3e0e3bedff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a9d5ae5471a44b1d5538f111823580f86d524ea9e2da9ab8d5ef5e3e0e3bedff->leave($__internal_a9d5ae5471a44b1d5538f111823580f86d524ea9e2da9ab8d5ef5e3e0e3bedff_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d32e505d306148183d69a258c1a8550e84fabc371845faa760dd9dea6fa21c35 = $this->env->getExtension("native_profiler");
        $__internal_d32e505d306148183d69a258c1a8550e84fabc371845faa760dd9dea6fa21c35->enter($__internal_d32e505d306148183d69a258c1a8550e84fabc371845faa760dd9dea6fa21c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d32e505d306148183d69a258c1a8550e84fabc371845faa760dd9dea6fa21c35->leave($__internal_d32e505d306148183d69a258c1a8550e84fabc371845faa760dd9dea6fa21c35_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_98489a73a64033ccbb9447f341a7c69eea30435bb7d0013f84e148cb457c1d12 = $this->env->getExtension("native_profiler");
        $__internal_98489a73a64033ccbb9447f341a7c69eea30435bb7d0013f84e148cb457c1d12->enter($__internal_98489a73a64033ccbb9447f341a7c69eea30435bb7d0013f84e148cb457c1d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_98489a73a64033ccbb9447f341a7c69eea30435bb7d0013f84e148cb457c1d12->leave($__internal_98489a73a64033ccbb9447f341a7c69eea30435bb7d0013f84e148cb457c1d12_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4057db8e5ec4b068cbffacb7009d6bd41468626c27c33630a3ccf21809871fd8 = $this->env->getExtension("native_profiler");
        $__internal_4057db8e5ec4b068cbffacb7009d6bd41468626c27c33630a3ccf21809871fd8->enter($__internal_4057db8e5ec4b068cbffacb7009d6bd41468626c27c33630a3ccf21809871fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4057db8e5ec4b068cbffacb7009d6bd41468626c27c33630a3ccf21809871fd8->leave($__internal_4057db8e5ec4b068cbffacb7009d6bd41468626c27c33630a3ccf21809871fd8_prof);

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
