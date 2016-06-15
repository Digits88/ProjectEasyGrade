<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_07e4eddb62a03f086dda53689bb8c2e6339693096632ac4fcdde57f135e940cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9991c535563d3ca6bed5cad4b38aaf92fb69c3ac8cc929df2e6d7de0a071e89a = $this->env->getExtension("native_profiler");
        $__internal_9991c535563d3ca6bed5cad4b38aaf92fb69c3ac8cc929df2e6d7de0a071e89a->enter($__internal_9991c535563d3ca6bed5cad4b38aaf92fb69c3ac8cc929df2e6d7de0a071e89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_9991c535563d3ca6bed5cad4b38aaf92fb69c3ac8cc929df2e6d7de0a071e89a->leave($__internal_9991c535563d3ca6bed5cad4b38aaf92fb69c3ac8cc929df2e6d7de0a071e89a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */
