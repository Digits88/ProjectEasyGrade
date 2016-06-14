<?php

/* :testcase:new.html.twig */
class __TwigTemplate_14f5214ea462fefcad8a7aef2596106f7675b2d5aa8f55621e922255e547d417 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":testcase:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_169015add1606428a6910af6979f398d94ff282f46467b95af3c63b0f00c0842 = $this->env->getExtension("native_profiler");
        $__internal_169015add1606428a6910af6979f398d94ff282f46467b95af3c63b0f00c0842->enter($__internal_169015add1606428a6910af6979f398d94ff282f46467b95af3c63b0f00c0842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":testcase:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_169015add1606428a6910af6979f398d94ff282f46467b95af3c63b0f00c0842->leave($__internal_169015add1606428a6910af6979f398d94ff282f46467b95af3c63b0f00c0842_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c63077fcd00b96425794219d49f0ef4e8503683ab6ca5bff88200f956855b92 = $this->env->getExtension("native_profiler");
        $__internal_7c63077fcd00b96425794219d49f0ef4e8503683ab6ca5bff88200f956855b92->enter($__internal_7c63077fcd00b96425794219d49f0ef4e8503683ab6ca5bff88200f956855b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>TestCase creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("testcase_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_7c63077fcd00b96425794219d49f0ef4e8503683ab6ca5bff88200f956855b92->leave($__internal_7c63077fcd00b96425794219d49f0ef4e8503683ab6ca5bff88200f956855b92_prof);

    }

    public function getTemplateName()
    {
        return ":testcase:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>TestCase creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('testcase_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
