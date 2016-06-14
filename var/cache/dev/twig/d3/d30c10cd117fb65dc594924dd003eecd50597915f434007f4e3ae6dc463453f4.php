<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_94298cfaec81ea5991dada50cdfaeb718bfab0c69a02504a233d6cd9edf71539 extends Twig_Template
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
        $__internal_7595a4101f823a7d2d1b85a7b4ac4b8e41c127489d9f010356d32065a2299383 = $this->env->getExtension("native_profiler");
        $__internal_7595a4101f823a7d2d1b85a7b4ac4b8e41c127489d9f010356d32065a2299383->enter($__internal_7595a4101f823a7d2d1b85a7b4ac4b8e41c127489d9f010356d32065a2299383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7595a4101f823a7d2d1b85a7b4ac4b8e41c127489d9f010356d32065a2299383->leave($__internal_7595a4101f823a7d2d1b85a7b4ac4b8e41c127489d9f010356d32065a2299383_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3df586aed1c2d76edda466865c26d192a6f10c3c9d9170475d02ae2b399e70f9 = $this->env->getExtension("native_profiler");
        $__internal_3df586aed1c2d76edda466865c26d192a6f10c3c9d9170475d02ae2b399e70f9->enter($__internal_3df586aed1c2d76edda466865c26d192a6f10c3c9d9170475d02ae2b399e70f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_3df586aed1c2d76edda466865c26d192a6f10c3c9d9170475d02ae2b399e70f9->leave($__internal_3df586aed1c2d76edda466865c26d192a6f10c3c9d9170475d02ae2b399e70f9_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9ec6f5603ad8d2201a85e13a11598509b8eeb14e25ef08487b992bc03cedab68 = $this->env->getExtension("native_profiler");
        $__internal_9ec6f5603ad8d2201a85e13a11598509b8eeb14e25ef08487b992bc03cedab68->enter($__internal_9ec6f5603ad8d2201a85e13a11598509b8eeb14e25ef08487b992bc03cedab68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9ec6f5603ad8d2201a85e13a11598509b8eeb14e25ef08487b992bc03cedab68->leave($__internal_9ec6f5603ad8d2201a85e13a11598509b8eeb14e25ef08487b992bc03cedab68_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_41fd9714090fda56456a261d9f2fd95818206e01236f244711f65e09bb70250c = $this->env->getExtension("native_profiler");
        $__internal_41fd9714090fda56456a261d9f2fd95818206e01236f244711f65e09bb70250c->enter($__internal_41fd9714090fda56456a261d9f2fd95818206e01236f244711f65e09bb70250c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_41fd9714090fda56456a261d9f2fd95818206e01236f244711f65e09bb70250c->leave($__internal_41fd9714090fda56456a261d9f2fd95818206e01236f244711f65e09bb70250c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
