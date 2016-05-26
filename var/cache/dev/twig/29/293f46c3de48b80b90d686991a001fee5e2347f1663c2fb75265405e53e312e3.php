<?php

/* course/new.html.twig */
class __TwigTemplate_af871a0939b8d0c3abb1e505cd2e1ec45757f18bbc90c6f526ff15b5df84511b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "course/new.html.twig", 1);
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
        $__internal_8e1d1bbdbb614efb1590c6eda823138fb817acbf5eab8527fab02e599084545a = $this->env->getExtension("native_profiler");
        $__internal_8e1d1bbdbb614efb1590c6eda823138fb817acbf5eab8527fab02e599084545a->enter($__internal_8e1d1bbdbb614efb1590c6eda823138fb817acbf5eab8527fab02e599084545a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e1d1bbdbb614efb1590c6eda823138fb817acbf5eab8527fab02e599084545a->leave($__internal_8e1d1bbdbb614efb1590c6eda823138fb817acbf5eab8527fab02e599084545a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_221780fa19d554b56b8c9ef161d2f6847e4418ba6a0e325eeefcb7148e3cc582 = $this->env->getExtension("native_profiler");
        $__internal_221780fa19d554b56b8c9ef161d2f6847e4418ba6a0e325eeefcb7148e3cc582->enter($__internal_221780fa19d554b56b8c9ef161d2f6847e4418ba6a0e325eeefcb7148e3cc582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Course creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("course_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_221780fa19d554b56b8c9ef161d2f6847e4418ba6a0e325eeefcb7148e3cc582->leave($__internal_221780fa19d554b56b8c9ef161d2f6847e4418ba6a0e325eeefcb7148e3cc582_prof);

    }

    public function getTemplateName()
    {
        return "course/new.html.twig";
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
/*     <h1>Course creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('course_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
