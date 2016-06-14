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
        $__internal_175407ff62fb2a5852091061e65b69fda05a2944e7567340b5d6d2eb3ae9a74c = $this->env->getExtension("native_profiler");
        $__internal_175407ff62fb2a5852091061e65b69fda05a2944e7567340b5d6d2eb3ae9a74c->enter($__internal_175407ff62fb2a5852091061e65b69fda05a2944e7567340b5d6d2eb3ae9a74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assignment/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_175407ff62fb2a5852091061e65b69fda05a2944e7567340b5d6d2eb3ae9a74c->leave($__internal_175407ff62fb2a5852091061e65b69fda05a2944e7567340b5d6d2eb3ae9a74c_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_1eec895dd53de86072af4102aa0d88bb566891bb0938e98e1ba27109f87bdb88 = $this->env->getExtension("native_profiler");
        $__internal_1eec895dd53de86072af4102aa0d88bb566891bb0938e98e1ba27109f87bdb88->enter($__internal_1eec895dd53de86072af4102aa0d88bb566891bb0938e98e1ba27109f87bdb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_1eec895dd53de86072af4102aa0d88bb566891bb0938e98e1ba27109f87bdb88->leave($__internal_1eec895dd53de86072af4102aa0d88bb566891bb0938e98e1ba27109f87bdb88_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_fcc642452104ae8b45135455a851155a5c4d734cb4996f5b01fb22acc52738e7 = $this->env->getExtension("native_profiler");
        $__internal_fcc642452104ae8b45135455a851155a5c4d734cb4996f5b01fb22acc52738e7->enter($__internal_fcc642452104ae8b45135455a851155a5c4d734cb4996f5b01fb22acc52738e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Assignment edit</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input  class=\"btn btn-success\" type=\"submit\" value=\"Save\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("course_assignments");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
        <li>
            ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-warning\">
            ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_fcc642452104ae8b45135455a851155a5c4d734cb4996f5b01fb22acc52738e7->leave($__internal_fcc642452104ae8b45135455a851155a5c4d734cb4996f5b01fb22acc52738e7_prof);

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
        return array (  84 => 19,  79 => 17,  73 => 14,  66 => 10,  61 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>Assignment edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input  class="btn btn-success" type="submit" value="Save" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('course_assignments') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete" class="btn btn-warning">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
