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
        $__internal_ffe7147e30920909eca3a622773859aca1a014b35e0679ec4a7c6b3fd45f3c89 = $this->env->getExtension("native_profiler");
        $__internal_ffe7147e30920909eca3a622773859aca1a014b35e0679ec4a7c6b3fd45f3c89->enter($__internal_ffe7147e30920909eca3a622773859aca1a014b35e0679ec4a7c6b3fd45f3c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffe7147e30920909eca3a622773859aca1a014b35e0679ec4a7c6b3fd45f3c89->leave($__internal_ffe7147e30920909eca3a622773859aca1a014b35e0679ec4a7c6b3fd45f3c89_prof);

    }

    // line 4
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_9b7f52c6a6eb3aa80fba759faef31a66f83915e2024d5d50bab759a870ee9f3e = $this->env->getExtension("native_profiler");
        $__internal_9b7f52c6a6eb3aa80fba759faef31a66f83915e2024d5d50bab759a870ee9f3e->enter($__internal_9b7f52c6a6eb3aa80fba759faef31a66f83915e2024d5d50bab759a870ee9f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_9b7f52c6a6eb3aa80fba759faef31a66f83915e2024d5d50bab759a870ee9f3e->leave($__internal_9b7f52c6a6eb3aa80fba759faef31a66f83915e2024d5d50bab759a870ee9f3e_prof);

    }

    // line 5
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_cae10e493e47f9348dfd9bca81167ea5ff44f605fa480eb60a6266bdd9f8d963 = $this->env->getExtension("native_profiler");
        $__internal_cae10e493e47f9348dfd9bca81167ea5ff44f605fa480eb60a6266bdd9f8d963->enter($__internal_cae10e493e47f9348dfd9bca81167ea5ff44f605fa480eb60a6266bdd9f8d963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        
        $__internal_cae10e493e47f9348dfd9bca81167ea5ff44f605fa480eb60a6266bdd9f8d963->leave($__internal_cae10e493e47f9348dfd9bca81167ea5ff44f605fa480eb60a6266bdd9f8d963_prof);

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
