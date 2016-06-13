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
        $__internal_48cc0f50c0c19b4b8b628ffdfb25863cc91e178a943f685b894da1be199da8f3 = $this->env->getExtension("native_profiler");
        $__internal_48cc0f50c0c19b4b8b628ffdfb25863cc91e178a943f685b894da1be199da8f3->enter($__internal_48cc0f50c0c19b4b8b628ffdfb25863cc91e178a943f685b894da1be199da8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_48cc0f50c0c19b4b8b628ffdfb25863cc91e178a943f685b894da1be199da8f3->leave($__internal_48cc0f50c0c19b4b8b628ffdfb25863cc91e178a943f685b894da1be199da8f3_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_00282aadaeb0fa8c0b8ce4ca6414fcf56c8183679b33a7af7f6d38df32fc29bc = $this->env->getExtension("native_profiler");
        $__internal_00282aadaeb0fa8c0b8ce4ca6414fcf56c8183679b33a7af7f6d38df32fc29bc->enter($__internal_00282aadaeb0fa8c0b8ce4ca6414fcf56c8183679b33a7af7f6d38df32fc29bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_00282aadaeb0fa8c0b8ce4ca6414fcf56c8183679b33a7af7f6d38df32fc29bc->leave($__internal_00282aadaeb0fa8c0b8ce4ca6414fcf56c8183679b33a7af7f6d38df32fc29bc_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_dba83c881cafe44a5800bdc5a820117b8e65ef5c926512638855952788c5fab5 = $this->env->getExtension("native_profiler");
        $__internal_dba83c881cafe44a5800bdc5a820117b8e65ef5c926512638855952788c5fab5->enter($__internal_dba83c881cafe44a5800bdc5a820117b8e65ef5c926512638855952788c5fab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_dba83c881cafe44a5800bdc5a820117b8e65ef5c926512638855952788c5fab5->leave($__internal_dba83c881cafe44a5800bdc5a820117b8e65ef5c926512638855952788c5fab5_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_26fa22acc2ed50cc7108ce93908a5aa9187b6ce42014c45598de282044f02d7d = $this->env->getExtension("native_profiler");
        $__internal_26fa22acc2ed50cc7108ce93908a5aa9187b6ce42014c45598de282044f02d7d->enter($__internal_26fa22acc2ed50cc7108ce93908a5aa9187b6ce42014c45598de282044f02d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_26fa22acc2ed50cc7108ce93908a5aa9187b6ce42014c45598de282044f02d7d->leave($__internal_26fa22acc2ed50cc7108ce93908a5aa9187b6ce42014c45598de282044f02d7d_prof);

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
