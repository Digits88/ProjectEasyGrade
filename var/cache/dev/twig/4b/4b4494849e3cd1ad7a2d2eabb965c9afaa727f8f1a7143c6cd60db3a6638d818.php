<?php

/* testcase/edit.html.twig */
class __TwigTemplate_7c493ec5bf5634cf03386076dcdb528248aceafc87f4923bbd553ca195cf32fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "testcase/edit.html.twig", 1);
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
        $__internal_d696d4c57962067ae2598d1bad3cbf6ab8af413078b9974e7f66663146a2cf66 = $this->env->getExtension("native_profiler");
        $__internal_d696d4c57962067ae2598d1bad3cbf6ab8af413078b9974e7f66663146a2cf66->enter($__internal_d696d4c57962067ae2598d1bad3cbf6ab8af413078b9974e7f66663146a2cf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testcase/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d696d4c57962067ae2598d1bad3cbf6ab8af413078b9974e7f66663146a2cf66->leave($__internal_d696d4c57962067ae2598d1bad3cbf6ab8af413078b9974e7f66663146a2cf66_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e8bc57bb1c13ac97eb12a3daeffaf1128c3ad9f6a37157e8a88f99c088eda69 = $this->env->getExtension("native_profiler");
        $__internal_7e8bc57bb1c13ac97eb12a3daeffaf1128c3ad9f6a37157e8a88f99c088eda69->enter($__internal_7e8bc57bb1c13ac97eb12a3daeffaf1128c3ad9f6a37157e8a88f99c088eda69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>TestCase edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("testcase_index");
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
        
        $__internal_7e8bc57bb1c13ac97eb12a3daeffaf1128c3ad9f6a37157e8a88f99c088eda69->leave($__internal_7e8bc57bb1c13ac97eb12a3daeffaf1128c3ad9f6a37157e8a88f99c088eda69_prof);

    }

    public function getTemplateName()
    {
        return "testcase/edit.html.twig";
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
/*     <h1>TestCase edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('testcase_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
