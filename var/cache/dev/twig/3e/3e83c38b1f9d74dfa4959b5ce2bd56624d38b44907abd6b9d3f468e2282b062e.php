<?php

/* testcase/new.html.twig */
class __TwigTemplate_194329f5fdbd52612d759e0f2d5b6cb89a41acd539e4403165f956066199c0aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "testcase/new.html.twig", 1);
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
        $__internal_e870f3f3f86f22131879bb68aa8e832f013a01d46b0b941bcb109a155d6ce518 = $this->env->getExtension("native_profiler");
        $__internal_e870f3f3f86f22131879bb68aa8e832f013a01d46b0b941bcb109a155d6ce518->enter($__internal_e870f3f3f86f22131879bb68aa8e832f013a01d46b0b941bcb109a155d6ce518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testcase/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e870f3f3f86f22131879bb68aa8e832f013a01d46b0b941bcb109a155d6ce518->leave($__internal_e870f3f3f86f22131879bb68aa8e832f013a01d46b0b941bcb109a155d6ce518_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_160a98ba53380fbabcbb5acf7cfde994830452ccf82b3d85546cf30cd558aa04 = $this->env->getExtension("native_profiler");
        $__internal_160a98ba53380fbabcbb5acf7cfde994830452ccf82b3d85546cf30cd558aa04->enter($__internal_160a98ba53380fbabcbb5acf7cfde994830452ccf82b3d85546cf30cd558aa04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_160a98ba53380fbabcbb5acf7cfde994830452ccf82b3d85546cf30cd558aa04->leave($__internal_160a98ba53380fbabcbb5acf7cfde994830452ccf82b3d85546cf30cd558aa04_prof);

    }

    public function getTemplateName()
    {
        return "testcase/new.html.twig";
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
