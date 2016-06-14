<?php

/* :testcase:edit.html.twig */
class __TwigTemplate_d3299a78c830920b72895ad401562eac7073499493034af2baad1b032f6b173f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":testcase:edit.html.twig", 1);
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
        $__internal_9610e3639d46b8c0638c29e55ccd4e7905a23488d25ede82a6b0919903d19b83 = $this->env->getExtension("native_profiler");
        $__internal_9610e3639d46b8c0638c29e55ccd4e7905a23488d25ede82a6b0919903d19b83->enter($__internal_9610e3639d46b8c0638c29e55ccd4e7905a23488d25ede82a6b0919903d19b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":testcase:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9610e3639d46b8c0638c29e55ccd4e7905a23488d25ede82a6b0919903d19b83->leave($__internal_9610e3639d46b8c0638c29e55ccd4e7905a23488d25ede82a6b0919903d19b83_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17cc878ead54e305f672168056b1d201a8bd7f028238fdaae7c07952bd761ba3 = $this->env->getExtension("native_profiler");
        $__internal_17cc878ead54e305f672168056b1d201a8bd7f028238fdaae7c07952bd761ba3->enter($__internal_17cc878ead54e305f672168056b1d201a8bd7f028238fdaae7c07952bd761ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_17cc878ead54e305f672168056b1d201a8bd7f028238fdaae7c07952bd761ba3->leave($__internal_17cc878ead54e305f672168056b1d201a8bd7f028238fdaae7c07952bd761ba3_prof);

    }

    public function getTemplateName()
    {
        return ":testcase:edit.html.twig";
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
