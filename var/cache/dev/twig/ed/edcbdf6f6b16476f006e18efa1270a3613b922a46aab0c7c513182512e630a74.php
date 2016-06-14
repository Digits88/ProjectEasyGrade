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
        $__internal_fedcea53cd130dab92e1641fe4f78921d575b58503b363c6aed8b27cdb8b44f8 = $this->env->getExtension("native_profiler");
        $__internal_fedcea53cd130dab92e1641fe4f78921d575b58503b363c6aed8b27cdb8b44f8->enter($__internal_fedcea53cd130dab92e1641fe4f78921d575b58503b363c6aed8b27cdb8b44f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fedcea53cd130dab92e1641fe4f78921d575b58503b363c6aed8b27cdb8b44f8->leave($__internal_fedcea53cd130dab92e1641fe4f78921d575b58503b363c6aed8b27cdb8b44f8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6a7a38b3f28a6641812a4adf093ead2956052a786408fd5b6713482aad1a9dc3 = $this->env->getExtension("native_profiler");
        $__internal_6a7a38b3f28a6641812a4adf093ead2956052a786408fd5b6713482aad1a9dc3->enter($__internal_6a7a38b3f28a6641812a4adf093ead2956052a786408fd5b6713482aad1a9dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6a7a38b3f28a6641812a4adf093ead2956052a786408fd5b6713482aad1a9dc3->leave($__internal_6a7a38b3f28a6641812a4adf093ead2956052a786408fd5b6713482aad1a9dc3_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e5b8001580bd587dc12f9e8e33cda94270912ff98f36063fb08b181f43962b7e = $this->env->getExtension("native_profiler");
        $__internal_e5b8001580bd587dc12f9e8e33cda94270912ff98f36063fb08b181f43962b7e->enter($__internal_e5b8001580bd587dc12f9e8e33cda94270912ff98f36063fb08b181f43962b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e5b8001580bd587dc12f9e8e33cda94270912ff98f36063fb08b181f43962b7e->leave($__internal_e5b8001580bd587dc12f9e8e33cda94270912ff98f36063fb08b181f43962b7e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_abfcd631d258a8b74db69b46f5826facc6d06c89d815a8a817d3f9db969be364 = $this->env->getExtension("native_profiler");
        $__internal_abfcd631d258a8b74db69b46f5826facc6d06c89d815a8a817d3f9db969be364->enter($__internal_abfcd631d258a8b74db69b46f5826facc6d06c89d815a8a817d3f9db969be364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_abfcd631d258a8b74db69b46f5826facc6d06c89d815a8a817d3f9db969be364->leave($__internal_abfcd631d258a8b74db69b46f5826facc6d06c89d815a8a817d3f9db969be364_prof);

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
