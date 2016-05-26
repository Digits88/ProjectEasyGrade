<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_0c2a33d9727ec3fa082cad3f82a43e23e1a5912d4ba1bd3915d5d9a03f7ab2d0 extends Twig_Template
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
        $__internal_ffb6b2196652145edb1f4b84d7ce5a53715ba5ef1b7b497be2e6a4c27e9b94ca = $this->env->getExtension("native_profiler");
        $__internal_ffb6b2196652145edb1f4b84d7ce5a53715ba5ef1b7b497be2e6a4c27e9b94ca->enter($__internal_ffb6b2196652145edb1f4b84d7ce5a53715ba5ef1b7b497be2e6a4c27e9b94ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ffb6b2196652145edb1f4b84d7ce5a53715ba5ef1b7b497be2e6a4c27e9b94ca->leave($__internal_ffb6b2196652145edb1f4b84d7ce5a53715ba5ef1b7b497be2e6a4c27e9b94ca_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a976bee373d57d51823e0bf6b2f3844c1857ca8e5f1eb6f5d4d9ac98f55fe2b0 = $this->env->getExtension("native_profiler");
        $__internal_a976bee373d57d51823e0bf6b2f3844c1857ca8e5f1eb6f5d4d9ac98f55fe2b0->enter($__internal_a976bee373d57d51823e0bf6b2f3844c1857ca8e5f1eb6f5d4d9ac98f55fe2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a976bee373d57d51823e0bf6b2f3844c1857ca8e5f1eb6f5d4d9ac98f55fe2b0->leave($__internal_a976bee373d57d51823e0bf6b2f3844c1857ca8e5f1eb6f5d4d9ac98f55fe2b0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_13eb77ed4cad72b4050bf9a7050df6f31242579fab80b41a0f6d75fe25ee39b2 = $this->env->getExtension("native_profiler");
        $__internal_13eb77ed4cad72b4050bf9a7050df6f31242579fab80b41a0f6d75fe25ee39b2->enter($__internal_13eb77ed4cad72b4050bf9a7050df6f31242579fab80b41a0f6d75fe25ee39b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_13eb77ed4cad72b4050bf9a7050df6f31242579fab80b41a0f6d75fe25ee39b2->leave($__internal_13eb77ed4cad72b4050bf9a7050df6f31242579fab80b41a0f6d75fe25ee39b2_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cdff8a30b75883e685aa5910a3270123d38bbed91203ff7641dd0960b433b10c = $this->env->getExtension("native_profiler");
        $__internal_cdff8a30b75883e685aa5910a3270123d38bbed91203ff7641dd0960b433b10c->enter($__internal_cdff8a30b75883e685aa5910a3270123d38bbed91203ff7641dd0960b433b10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cdff8a30b75883e685aa5910a3270123d38bbed91203ff7641dd0960b433b10c->leave($__internal_cdff8a30b75883e685aa5910a3270123d38bbed91203ff7641dd0960b433b10c_prof);

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
