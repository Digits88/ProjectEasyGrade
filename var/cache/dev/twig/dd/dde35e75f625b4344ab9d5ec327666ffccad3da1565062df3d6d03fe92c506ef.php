<?php

/* :user:new.html.twig */
class __TwigTemplate_ae6531312008e28d00389f60e70cfd38633c793d4f1b6f341c868172aadf8c86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:new.html.twig", 1);
        $this->blocks = array(
            'authenticatedUsername' => array($this, 'block_authenticatedUsername'),
            'contentdetail' => array($this, 'block_contentdetail'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54f324e80ce49fca77305d36b2728bd659811ccc4ecc1974002c44e4baddf5ef = $this->env->getExtension("native_profiler");
        $__internal_54f324e80ce49fca77305d36b2728bd659811ccc4ecc1974002c44e4baddf5ef->enter($__internal_54f324e80ce49fca77305d36b2728bd659811ccc4ecc1974002c44e4baddf5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54f324e80ce49fca77305d36b2728bd659811ccc4ecc1974002c44e4baddf5ef->leave($__internal_54f324e80ce49fca77305d36b2728bd659811ccc4ecc1974002c44e4baddf5ef_prof);

    }

    // line 4
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_d7e9722fb0ac5014acf2e7a6f1fb5392bd0c1ad1a45e506c13e47dea57b49345 = $this->env->getExtension("native_profiler");
        $__internal_d7e9722fb0ac5014acf2e7a6f1fb5392bd0c1ad1a45e506c13e47dea57b49345->enter($__internal_d7e9722fb0ac5014acf2e7a6f1fb5392bd0c1ad1a45e506c13e47dea57b49345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_d7e9722fb0ac5014acf2e7a6f1fb5392bd0c1ad1a45e506c13e47dea57b49345->leave($__internal_d7e9722fb0ac5014acf2e7a6f1fb5392bd0c1ad1a45e506c13e47dea57b49345_prof);

    }

    // line 5
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_abcec633c2813f2bf3f30461fdae21d175bb24f4ff3def14161393d159f7f7e6 = $this->env->getExtension("native_profiler");
        $__internal_abcec633c2813f2bf3f30461fdae21d175bb24f4ff3def14161393d159f7f7e6->enter($__internal_abcec633c2813f2bf3f30461fdae21d175bb24f4ff3def14161393d159f7f7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 6
        echo "    <h1>User creation</h1>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <br><input class=\"btn btn-success\" type=\"submit\" value=\"Create\" />
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <br><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_abcec633c2813f2bf3f30461fdae21d175bb24f4ff3def14161393d159f7f7e6->leave($__internal_abcec633c2813f2bf3f30461fdae21d175bb24f4ff3def14161393d159f7f7e6_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  66 => 11,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>User creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <br><input class="btn btn-success" type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <br><a href="{{ path('user_index') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
