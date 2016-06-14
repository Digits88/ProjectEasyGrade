<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_ff62e05b03c7da87bea14b193fef5d51c66818e32df09be05ce902443961b3ae extends Twig_Template
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
        $__internal_26b20e6318cf0d6515ec8b59fa44126402d70cd86e4f5fe98d10df3cf4b351bd = $this->env->getExtension("native_profiler");
        $__internal_26b20e6318cf0d6515ec8b59fa44126402d70cd86e4f5fe98d10df3cf4b351bd->enter($__internal_26b20e6318cf0d6515ec8b59fa44126402d70cd86e4f5fe98d10df3cf4b351bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
        
        $__internal_26b20e6318cf0d6515ec8b59fa44126402d70cd86e4f5fe98d10df3cf4b351bd->leave($__internal_26b20e6318cf0d6515ec8b59fa44126402d70cd86e4f5fe98d10df3cf4b351bd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
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
