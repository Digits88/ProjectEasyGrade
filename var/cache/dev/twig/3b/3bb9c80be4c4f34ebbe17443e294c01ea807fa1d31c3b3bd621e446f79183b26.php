<?php

/* course/edit.html.twig */
class __TwigTemplate_7c378967e5dacf0071cf69175cabe00b85750cecc6763b36a69ddbd6dc9ad350 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "course/edit.html.twig", 1);
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
        $__internal_1450cd457adfbee95fe6ae62b55f14ce2b7568779d75ca5c314dced1e2e43936 = $this->env->getExtension("native_profiler");
        $__internal_1450cd457adfbee95fe6ae62b55f14ce2b7568779d75ca5c314dced1e2e43936->enter($__internal_1450cd457adfbee95fe6ae62b55f14ce2b7568779d75ca5c314dced1e2e43936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1450cd457adfbee95fe6ae62b55f14ce2b7568779d75ca5c314dced1e2e43936->leave($__internal_1450cd457adfbee95fe6ae62b55f14ce2b7568779d75ca5c314dced1e2e43936_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_beec40393abd44684a2c0245a97dc5ddaeee368938627cd196b82e154ec79fb0 = $this->env->getExtension("native_profiler");
        $__internal_beec40393abd44684a2c0245a97dc5ddaeee368938627cd196b82e154ec79fb0->enter($__internal_beec40393abd44684a2c0245a97dc5ddaeee368938627cd196b82e154ec79fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Course edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("course_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_beec40393abd44684a2c0245a97dc5ddaeee368938627cd196b82e154ec79fb0->leave($__internal_beec40393abd44684a2c0245a97dc5ddaeee368938627cd196b82e154ec79fb0_prof);

    }

    public function getTemplateName()
    {
        return "course/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Course edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('course_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
