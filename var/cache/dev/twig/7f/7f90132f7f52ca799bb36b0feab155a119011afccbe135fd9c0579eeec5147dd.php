<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_e90573ee99c6f39178c2f7ff5bdc6c15d384ef3215220ae17bf82b51bd399f61 extends Twig_Template
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
        $__internal_b50e82abafd84e850d22fc1f3c32a7ef43adcc9a700093bbc88c3c25b99d4632 = $this->env->getExtension("native_profiler");
        $__internal_b50e82abafd84e850d22fc1f3c32a7ef43adcc9a700093bbc88c3c25b99d4632->enter($__internal_b50e82abafd84e850d22fc1f3c32a7ef43adcc9a700093bbc88c3c25b99d4632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_b50e82abafd84e850d22fc1f3c32a7ef43adcc9a700093bbc88c3c25b99d4632->leave($__internal_b50e82abafd84e850d22fc1f3c32a7ef43adcc9a700093bbc88c3c25b99d4632_prof);

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
