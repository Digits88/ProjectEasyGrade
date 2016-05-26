<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_4ae764a54be864a34cbcd650e65633020533a6fcb152853d2b9113cc91ff6963 extends Twig_Template
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
        $__internal_db2f1a16c525f8a8dfc5cdacb47bd1eef657a90af0eefe4a7ce08dc702588b0a = $this->env->getExtension("native_profiler");
        $__internal_db2f1a16c525f8a8dfc5cdacb47bd1eef657a90af0eefe4a7ce08dc702588b0a->enter($__internal_db2f1a16c525f8a8dfc5cdacb47bd1eef657a90af0eefe4a7ce08dc702588b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_db2f1a16c525f8a8dfc5cdacb47bd1eef657a90af0eefe4a7ce08dc702588b0a->leave($__internal_db2f1a16c525f8a8dfc5cdacb47bd1eef657a90af0eefe4a7ce08dc702588b0a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bf4d358768dd5b559644726ce289f01cd7d4740e3e3b1f0413fe2a036eeaffa6 = $this->env->getExtension("native_profiler");
        $__internal_bf4d358768dd5b559644726ce289f01cd7d4740e3e3b1f0413fe2a036eeaffa6->enter($__internal_bf4d358768dd5b559644726ce289f01cd7d4740e3e3b1f0413fe2a036eeaffa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bf4d358768dd5b559644726ce289f01cd7d4740e3e3b1f0413fe2a036eeaffa6->leave($__internal_bf4d358768dd5b559644726ce289f01cd7d4740e3e3b1f0413fe2a036eeaffa6_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c4354e646b8bb3a4c8ab97baadc926b380cf764afbae1e132c1203579f0a85d5 = $this->env->getExtension("native_profiler");
        $__internal_c4354e646b8bb3a4c8ab97baadc926b380cf764afbae1e132c1203579f0a85d5->enter($__internal_c4354e646b8bb3a4c8ab97baadc926b380cf764afbae1e132c1203579f0a85d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c4354e646b8bb3a4c8ab97baadc926b380cf764afbae1e132c1203579f0a85d5->leave($__internal_c4354e646b8bb3a4c8ab97baadc926b380cf764afbae1e132c1203579f0a85d5_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_70afe85f63dfc63f06bbcdc76a210aad6e0fd34a4964467fd6d8b59161aaf1a7 = $this->env->getExtension("native_profiler");
        $__internal_70afe85f63dfc63f06bbcdc76a210aad6e0fd34a4964467fd6d8b59161aaf1a7->enter($__internal_70afe85f63dfc63f06bbcdc76a210aad6e0fd34a4964467fd6d8b59161aaf1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_70afe85f63dfc63f06bbcdc76a210aad6e0fd34a4964467fd6d8b59161aaf1a7->leave($__internal_70afe85f63dfc63f06bbcdc76a210aad6e0fd34a4964467fd6d8b59161aaf1a7_prof);

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
