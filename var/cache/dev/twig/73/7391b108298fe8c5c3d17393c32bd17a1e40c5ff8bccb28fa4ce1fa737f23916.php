<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_6f1687899d7b39270fac690b0a4dd11786b5b52d54ae8b90de32c2a9b5c37835 extends Twig_Template
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
        $__internal_d4f9682e4423d707854218edb8d0792a32ae105dd1aa1afedef946deb07aa817 = $this->env->getExtension("native_profiler");
        $__internal_d4f9682e4423d707854218edb8d0792a32ae105dd1aa1afedef946deb07aa817->enter($__internal_d4f9682e4423d707854218edb8d0792a32ae105dd1aa1afedef946deb07aa817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_d4f9682e4423d707854218edb8d0792a32ae105dd1aa1afedef946deb07aa817->leave($__internal_d4f9682e4423d707854218edb8d0792a32ae105dd1aa1afedef946deb07aa817_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
