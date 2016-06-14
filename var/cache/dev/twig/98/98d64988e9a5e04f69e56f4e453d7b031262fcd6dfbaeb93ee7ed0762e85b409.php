<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_12c04a963b00956078394b98fb5241fb5faf698a0f74995a0b37321c42170d30 extends Twig_Template
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
        $__internal_cb2f4fb1cd3d796377eddbb488ae5dcdd49987d968162f1f6365bc261c77a1ac = $this->env->getExtension("native_profiler");
        $__internal_cb2f4fb1cd3d796377eddbb488ae5dcdd49987d968162f1f6365bc261c77a1ac->enter($__internal_cb2f4fb1cd3d796377eddbb488ae5dcdd49987d968162f1f6365bc261c77a1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_cb2f4fb1cd3d796377eddbb488ae5dcdd49987d968162f1f6365bc261c77a1ac->leave($__internal_cb2f4fb1cd3d796377eddbb488ae5dcdd49987d968162f1f6365bc261c77a1ac_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
