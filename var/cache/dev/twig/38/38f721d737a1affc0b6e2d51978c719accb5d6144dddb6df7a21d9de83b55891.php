<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_809292e1ba9ef39b682612e596fb604debc047ccccb624f414a0c591e32ebded extends Twig_Template
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
        $__internal_7058de84bfcee67c6888cc27e50f1356e364522e34125846e361b8ce4f76dbae = $this->env->getExtension("native_profiler");
        $__internal_7058de84bfcee67c6888cc27e50f1356e364522e34125846e361b8ce4f76dbae->enter($__internal_7058de84bfcee67c6888cc27e50f1356e364522e34125846e361b8ce4f76dbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7058de84bfcee67c6888cc27e50f1356e364522e34125846e361b8ce4f76dbae->leave($__internal_7058de84bfcee67c6888cc27e50f1356e364522e34125846e361b8ce4f76dbae_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_404ef3f5c35bb760990e8461389760e5fca53d3e6d8f065c7f090190ce0d6787 = $this->env->getExtension("native_profiler");
        $__internal_404ef3f5c35bb760990e8461389760e5fca53d3e6d8f065c7f090190ce0d6787->enter($__internal_404ef3f5c35bb760990e8461389760e5fca53d3e6d8f065c7f090190ce0d6787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_404ef3f5c35bb760990e8461389760e5fca53d3e6d8f065c7f090190ce0d6787->leave($__internal_404ef3f5c35bb760990e8461389760e5fca53d3e6d8f065c7f090190ce0d6787_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_abd5006b096eb7b6f1ea44562087c89e959accf064bce9d173a535c23f44c36c = $this->env->getExtension("native_profiler");
        $__internal_abd5006b096eb7b6f1ea44562087c89e959accf064bce9d173a535c23f44c36c->enter($__internal_abd5006b096eb7b6f1ea44562087c89e959accf064bce9d173a535c23f44c36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_abd5006b096eb7b6f1ea44562087c89e959accf064bce9d173a535c23f44c36c->leave($__internal_abd5006b096eb7b6f1ea44562087c89e959accf064bce9d173a535c23f44c36c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d93d620abff81e1c6a04f57ba48b688019ca9e6a7cfa02730d1bec9a43938cf5 = $this->env->getExtension("native_profiler");
        $__internal_d93d620abff81e1c6a04f57ba48b688019ca9e6a7cfa02730d1bec9a43938cf5->enter($__internal_d93d620abff81e1c6a04f57ba48b688019ca9e6a7cfa02730d1bec9a43938cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d93d620abff81e1c6a04f57ba48b688019ca9e6a7cfa02730d1bec9a43938cf5->leave($__internal_d93d620abff81e1c6a04f57ba48b688019ca9e6a7cfa02730d1bec9a43938cf5_prof);

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
