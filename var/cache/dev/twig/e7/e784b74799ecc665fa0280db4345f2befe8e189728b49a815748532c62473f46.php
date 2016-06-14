<?php

/* course/edit.html.twig */
class __TwigTemplate_0399badf8b6abeed060be9f9e27696c72c12f6ee70bfd337a19274213098d7b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "course/edit.html.twig", 1);
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
        $__internal_7e6ab60a1c1e85f33babcbcd756f5a2c0e1a281fda4bcc046241a00d141e9b6d = $this->env->getExtension("native_profiler");
        $__internal_7e6ab60a1c1e85f33babcbcd756f5a2c0e1a281fda4bcc046241a00d141e9b6d->enter($__internal_7e6ab60a1c1e85f33babcbcd756f5a2c0e1a281fda4bcc046241a00d141e9b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e6ab60a1c1e85f33babcbcd756f5a2c0e1a281fda4bcc046241a00d141e9b6d->leave($__internal_7e6ab60a1c1e85f33babcbcd756f5a2c0e1a281fda4bcc046241a00d141e9b6d_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_4f6ecddca0054b7adf9121b5fcfb95a5d7221384ba025d77a26f63d637e385a7 = $this->env->getExtension("native_profiler");
        $__internal_4f6ecddca0054b7adf9121b5fcfb95a5d7221384ba025d77a26f63d637e385a7->enter($__internal_4f6ecddca0054b7adf9121b5fcfb95a5d7221384ba025d77a26f63d637e385a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_4f6ecddca0054b7adf9121b5fcfb95a5d7221384ba025d77a26f63d637e385a7->leave($__internal_4f6ecddca0054b7adf9121b5fcfb95a5d7221384ba025d77a26f63d637e385a7_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_80bbaf366cd789b831d1c3498ad23e9537e79182f17bc0cc99101334f06dee10 = $this->env->getExtension("native_profiler");
        $__internal_80bbaf366cd789b831d1c3498ad23e9537e79182f17bc0cc99101334f06dee10->enter($__internal_80bbaf366cd789b831d1c3498ad23e9537e79182f17bc0cc99101334f06dee10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Course edit</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <br><input class=\"btn btn-success\" type=\"submit\" value=\"Save\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <br><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("user_courses");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
        <li>
            ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <br><input class=\"btn btn-warning\" type=\"submit\" value=\"Delete\">
            ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_80bbaf366cd789b831d1c3498ad23e9537e79182f17bc0cc99101334f06dee10->leave($__internal_80bbaf366cd789b831d1c3498ad23e9537e79182f17bc0cc99101334f06dee10_prof);

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
        return array (  84 => 19,  79 => 17,  73 => 14,  66 => 10,  61 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>Course edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <br><input class="btn btn-success" type="submit" value="Save" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <br><a href="{{ path('user_courses') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <br><input class="btn btn-warning" type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
