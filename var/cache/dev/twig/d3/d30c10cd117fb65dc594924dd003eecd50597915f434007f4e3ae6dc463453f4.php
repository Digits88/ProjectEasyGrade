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
        $__internal_d3393399093465e892d9f20d3b2eed6085d751405be2da9bb7819879959f5c05 = $this->env->getExtension("native_profiler");
        $__internal_d3393399093465e892d9f20d3b2eed6085d751405be2da9bb7819879959f5c05->enter($__internal_d3393399093465e892d9f20d3b2eed6085d751405be2da9bb7819879959f5c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d3393399093465e892d9f20d3b2eed6085d751405be2da9bb7819879959f5c05->leave($__internal_d3393399093465e892d9f20d3b2eed6085d751405be2da9bb7819879959f5c05_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_712cb951af440593abe1f010f71a1f9f9669945f1fbb9f10f0bd6d912c339d34 = $this->env->getExtension("native_profiler");
        $__internal_712cb951af440593abe1f010f71a1f9f9669945f1fbb9f10f0bd6d912c339d34->enter($__internal_712cb951af440593abe1f010f71a1f9f9669945f1fbb9f10f0bd6d912c339d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_712cb951af440593abe1f010f71a1f9f9669945f1fbb9f10f0bd6d912c339d34->leave($__internal_712cb951af440593abe1f010f71a1f9f9669945f1fbb9f10f0bd6d912c339d34_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_871937d8bc9636fc97ace80480cc760cba14151f1709efd1b4c54fe4778feedb = $this->env->getExtension("native_profiler");
        $__internal_871937d8bc9636fc97ace80480cc760cba14151f1709efd1b4c54fe4778feedb->enter($__internal_871937d8bc9636fc97ace80480cc760cba14151f1709efd1b4c54fe4778feedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_871937d8bc9636fc97ace80480cc760cba14151f1709efd1b4c54fe4778feedb->leave($__internal_871937d8bc9636fc97ace80480cc760cba14151f1709efd1b4c54fe4778feedb_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cdfa7744b56ab071da03345df8ce348905fd47e61857fb72a7a38767ffb0c036 = $this->env->getExtension("native_profiler");
        $__internal_cdfa7744b56ab071da03345df8ce348905fd47e61857fb72a7a38767ffb0c036->enter($__internal_cdfa7744b56ab071da03345df8ce348905fd47e61857fb72a7a38767ffb0c036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cdfa7744b56ab071da03345df8ce348905fd47e61857fb72a7a38767ffb0c036->leave($__internal_cdfa7744b56ab071da03345df8ce348905fd47e61857fb72a7a38767ffb0c036_prof);

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
