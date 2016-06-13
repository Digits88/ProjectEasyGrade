<?php

/* assignment/edit.html.twig */
class __TwigTemplate_1aa56aa95246bc2ac92d4450e238b421ea8bc359de611fd64523f55aa08c80ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "assignment/edit.html.twig", 1);
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
        $__internal_847704fc9ef818915805adb30fbd1b31452b536d3f9014069ae0711c84d29d69 = $this->env->getExtension("native_profiler");
        $__internal_847704fc9ef818915805adb30fbd1b31452b536d3f9014069ae0711c84d29d69->enter($__internal_847704fc9ef818915805adb30fbd1b31452b536d3f9014069ae0711c84d29d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assignment/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_847704fc9ef818915805adb30fbd1b31452b536d3f9014069ae0711c84d29d69->leave($__internal_847704fc9ef818915805adb30fbd1b31452b536d3f9014069ae0711c84d29d69_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_29b4a0719f0639f36b165dc82ebbbb492475b3e35a3db3fb3c6dfead8c60b679 = $this->env->getExtension("native_profiler");
        $__internal_29b4a0719f0639f36b165dc82ebbbb492475b3e35a3db3fb3c6dfead8c60b679->enter($__internal_29b4a0719f0639f36b165dc82ebbbb492475b3e35a3db3fb3c6dfead8c60b679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_29b4a0719f0639f36b165dc82ebbbb492475b3e35a3db3fb3c6dfead8c60b679->leave($__internal_29b4a0719f0639f36b165dc82ebbbb492475b3e35a3db3fb3c6dfead8c60b679_prof);

    }

    public function getTemplateName()
    {
        return "assignment/edit.html.twig";
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
