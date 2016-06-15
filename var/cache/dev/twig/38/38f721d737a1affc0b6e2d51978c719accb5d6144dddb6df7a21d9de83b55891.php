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
        $__internal_991019874f00d8e095ec0b6115d7f7ed9bdd7156d606b2b9d386690df8254617 = $this->env->getExtension("native_profiler");
        $__internal_991019874f00d8e095ec0b6115d7f7ed9bdd7156d606b2b9d386690df8254617->enter($__internal_991019874f00d8e095ec0b6115d7f7ed9bdd7156d606b2b9d386690df8254617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_991019874f00d8e095ec0b6115d7f7ed9bdd7156d606b2b9d386690df8254617->leave($__internal_991019874f00d8e095ec0b6115d7f7ed9bdd7156d606b2b9d386690df8254617_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e1b1a7cd278a06243a7a8dba036358b950dadef3d162042ab0470c244c216cca = $this->env->getExtension("native_profiler");
        $__internal_e1b1a7cd278a06243a7a8dba036358b950dadef3d162042ab0470c244c216cca->enter($__internal_e1b1a7cd278a06243a7a8dba036358b950dadef3d162042ab0470c244c216cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_e1b1a7cd278a06243a7a8dba036358b950dadef3d162042ab0470c244c216cca->leave($__internal_e1b1a7cd278a06243a7a8dba036358b950dadef3d162042ab0470c244c216cca_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d66d8bfface4285db257eb18c5c2b6a5003776566775b41a3ed4e8dc6b660e2f = $this->env->getExtension("native_profiler");
        $__internal_d66d8bfface4285db257eb18c5c2b6a5003776566775b41a3ed4e8dc6b660e2f->enter($__internal_d66d8bfface4285db257eb18c5c2b6a5003776566775b41a3ed4e8dc6b660e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d66d8bfface4285db257eb18c5c2b6a5003776566775b41a3ed4e8dc6b660e2f->leave($__internal_d66d8bfface4285db257eb18c5c2b6a5003776566775b41a3ed4e8dc6b660e2f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1ff47e8c92311f1edcef1494f93cc23c1cb9af3d0b98533b678d3a22e323c678 = $this->env->getExtension("native_profiler");
        $__internal_1ff47e8c92311f1edcef1494f93cc23c1cb9af3d0b98533b678d3a22e323c678->enter($__internal_1ff47e8c92311f1edcef1494f93cc23c1cb9af3d0b98533b678d3a22e323c678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1ff47e8c92311f1edcef1494f93cc23c1cb9af3d0b98533b678d3a22e323c678->leave($__internal_1ff47e8c92311f1edcef1494f93cc23c1cb9af3d0b98533b678d3a22e323c678_prof);

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
