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
        $__internal_8ea6ac721ce391fcbee5b3f26c0b54add0b2a0b157cdc5541a888d69cd3ad47c = $this->env->getExtension("native_profiler");
        $__internal_8ea6ac721ce391fcbee5b3f26c0b54add0b2a0b157cdc5541a888d69cd3ad47c->enter($__internal_8ea6ac721ce391fcbee5b3f26c0b54add0b2a0b157cdc5541a888d69cd3ad47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assignment/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ea6ac721ce391fcbee5b3f26c0b54add0b2a0b157cdc5541a888d69cd3ad47c->leave($__internal_8ea6ac721ce391fcbee5b3f26c0b54add0b2a0b157cdc5541a888d69cd3ad47c_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_b5c39a85caf069ef547b8a6fb96d0b3422bcb16c3c803491df02faad94219b48 = $this->env->getExtension("native_profiler");
        $__internal_b5c39a85caf069ef547b8a6fb96d0b3422bcb16c3c803491df02faad94219b48->enter($__internal_b5c39a85caf069ef547b8a6fb96d0b3422bcb16c3c803491df02faad94219b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_b5c39a85caf069ef547b8a6fb96d0b3422bcb16c3c803491df02faad94219b48->leave($__internal_b5c39a85caf069ef547b8a6fb96d0b3422bcb16c3c803491df02faad94219b48_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_9f0270edf8bce3e6894eb1219fe5449acd78f99920ea1dd90c4ba79fbabb73cf = $this->env->getExtension("native_profiler");
        $__internal_9f0270edf8bce3e6894eb1219fe5449acd78f99920ea1dd90c4ba79fbabb73cf->enter($__internal_9f0270edf8bce3e6894eb1219fe5449acd78f99920ea1dd90c4ba79fbabb73cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        echo $this->env->getExtension('routing')->getPath("user_courses");
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
        
        $__internal_9f0270edf8bce3e6894eb1219fe5449acd78f99920ea1dd90c4ba79fbabb73cf->leave($__internal_9f0270edf8bce3e6894eb1219fe5449acd78f99920ea1dd90c4ba79fbabb73cf_prof);

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
/*             <a href="{{ path('user_courses') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete" class="btn btn-warning">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
