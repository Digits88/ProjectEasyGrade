<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_50105e76e8744dc1202373c3d11bc48e15157a02e6c5a1f767a2a4c8c2cdc65e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b92d0a87e43fc974dafa74001e535629bcbf4beb98953e4bf21ad3e5c7b6190 = $this->env->getExtension("native_profiler");
        $__internal_6b92d0a87e43fc974dafa74001e535629bcbf4beb98953e4bf21ad3e5c7b6190->enter($__internal_6b92d0a87e43fc974dafa74001e535629bcbf4beb98953e4bf21ad3e5c7b6190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b92d0a87e43fc974dafa74001e535629bcbf4beb98953e4bf21ad3e5c7b6190->leave($__internal_6b92d0a87e43fc974dafa74001e535629bcbf4beb98953e4bf21ad3e5c7b6190_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_949f9db605f6ea4005c977b57eda8237849ee541707ea1680d0fd2b3fd930c7d = $this->env->getExtension("native_profiler");
        $__internal_949f9db605f6ea4005c977b57eda8237849ee541707ea1680d0fd2b3fd930c7d->enter($__internal_949f9db605f6ea4005c977b57eda8237849ee541707ea1680d0fd2b3fd930c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_949f9db605f6ea4005c977b57eda8237849ee541707ea1680d0fd2b3fd930c7d->leave($__internal_949f9db605f6ea4005c977b57eda8237849ee541707ea1680d0fd2b3fd930c7d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
