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
        $__internal_5fa94730f69a016386cedfff72a531b9b861f359066529690005ace76364233c = $this->env->getExtension("native_profiler");
        $__internal_5fa94730f69a016386cedfff72a531b9b861f359066529690005ace76364233c->enter($__internal_5fa94730f69a016386cedfff72a531b9b861f359066529690005ace76364233c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5fa94730f69a016386cedfff72a531b9b861f359066529690005ace76364233c->leave($__internal_5fa94730f69a016386cedfff72a531b9b861f359066529690005ace76364233c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b4202e85cec2aa1cf8c51f1df45ae653359bc764eafb10743e75c3e550e1d58e = $this->env->getExtension("native_profiler");
        $__internal_b4202e85cec2aa1cf8c51f1df45ae653359bc764eafb10743e75c3e550e1d58e->enter($__internal_b4202e85cec2aa1cf8c51f1df45ae653359bc764eafb10743e75c3e550e1d58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_b4202e85cec2aa1cf8c51f1df45ae653359bc764eafb10743e75c3e550e1d58e->leave($__internal_b4202e85cec2aa1cf8c51f1df45ae653359bc764eafb10743e75c3e550e1d58e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d4c372b1f35e4ff49882ee15dd1d5cfdab27884639a405426306d6c435bf1b51 = $this->env->getExtension("native_profiler");
        $__internal_d4c372b1f35e4ff49882ee15dd1d5cfdab27884639a405426306d6c435bf1b51->enter($__internal_d4c372b1f35e4ff49882ee15dd1d5cfdab27884639a405426306d6c435bf1b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d4c372b1f35e4ff49882ee15dd1d5cfdab27884639a405426306d6c435bf1b51->leave($__internal_d4c372b1f35e4ff49882ee15dd1d5cfdab27884639a405426306d6c435bf1b51_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ec15b67c2ca2a709d6369cff75a01b3594b5df19e6759515ce12ba64273eac85 = $this->env->getExtension("native_profiler");
        $__internal_ec15b67c2ca2a709d6369cff75a01b3594b5df19e6759515ce12ba64273eac85->enter($__internal_ec15b67c2ca2a709d6369cff75a01b3594b5df19e6759515ce12ba64273eac85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ec15b67c2ca2a709d6369cff75a01b3594b5df19e6759515ce12ba64273eac85->leave($__internal_ec15b67c2ca2a709d6369cff75a01b3594b5df19e6759515ce12ba64273eac85_prof);

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
