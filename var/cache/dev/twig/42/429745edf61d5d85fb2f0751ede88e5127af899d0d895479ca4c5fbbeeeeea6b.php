<?php

/* :assignment:edit.html.twig */
class __TwigTemplate_1ff5854fd7fc5e616f79a2aa52a1591bc710cbbd1027a5a9606262ee50ab15fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":assignment:edit.html.twig", 1);
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
        $__internal_77bfca125765b1227458615375287d0078998f6425d12a505182f8b2c29f8278 = $this->env->getExtension("native_profiler");
        $__internal_77bfca125765b1227458615375287d0078998f6425d12a505182f8b2c29f8278->enter($__internal_77bfca125765b1227458615375287d0078998f6425d12a505182f8b2c29f8278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":assignment:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77bfca125765b1227458615375287d0078998f6425d12a505182f8b2c29f8278->leave($__internal_77bfca125765b1227458615375287d0078998f6425d12a505182f8b2c29f8278_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_635c0caffa553d7f9be89ee139c269aed334703143b8c6900ab8be8cd8dd3509 = $this->env->getExtension("native_profiler");
        $__internal_635c0caffa553d7f9be89ee139c269aed334703143b8c6900ab8be8cd8dd3509->enter($__internal_635c0caffa553d7f9be89ee139c269aed334703143b8c6900ab8be8cd8dd3509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Assignment edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("assignment_index");
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
        
        $__internal_635c0caffa553d7f9be89ee139c269aed334703143b8c6900ab8be8cd8dd3509->leave($__internal_635c0caffa553d7f9be89ee139c269aed334703143b8c6900ab8be8cd8dd3509_prof);

    }

    public function getTemplateName()
    {
        return ":assignment:edit.html.twig";
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
/*     <h1>Assignment edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('assignment_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
