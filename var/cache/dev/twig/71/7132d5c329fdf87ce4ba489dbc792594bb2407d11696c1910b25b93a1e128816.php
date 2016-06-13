<?php

/* submission/edit.html.twig */
class __TwigTemplate_e40615ad0d342075e5a34a33076cfc897522ca2717262b85b0cfdd11aef97f3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "submission/edit.html.twig", 1);
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
        $__internal_ea5390690aba8ddc96226c46f701ac2bbec6e00e9835b5084f280239303e6c3f = $this->env->getExtension("native_profiler");
        $__internal_ea5390690aba8ddc96226c46f701ac2bbec6e00e9835b5084f280239303e6c3f->enter($__internal_ea5390690aba8ddc96226c46f701ac2bbec6e00e9835b5084f280239303e6c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "submission/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea5390690aba8ddc96226c46f701ac2bbec6e00e9835b5084f280239303e6c3f->leave($__internal_ea5390690aba8ddc96226c46f701ac2bbec6e00e9835b5084f280239303e6c3f_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_be857aa10a0f8ba75c6f5a4a18942cc72d1638eb599049840fe408069130a2e6 = $this->env->getExtension("native_profiler");
        $__internal_be857aa10a0f8ba75c6f5a4a18942cc72d1638eb599049840fe408069130a2e6->enter($__internal_be857aa10a0f8ba75c6f5a4a18942cc72d1638eb599049840fe408069130a2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_be857aa10a0f8ba75c6f5a4a18942cc72d1638eb599049840fe408069130a2e6->leave($__internal_be857aa10a0f8ba75c6f5a4a18942cc72d1638eb599049840fe408069130a2e6_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_a2f72c200f590648137d183bd58e2d3fe6db2081920a42941614ab3ec440b5ff = $this->env->getExtension("native_profiler");
        $__internal_a2f72c200f590648137d183bd58e2d3fe6db2081920a42941614ab3ec440b5ff->enter($__internal_a2f72c200f590648137d183bd58e2d3fe6db2081920a42941614ab3ec440b5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Submission edit</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("submission_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a2f72c200f590648137d183bd58e2d3fe6db2081920a42941614ab3ec440b5ff->leave($__internal_a2f72c200f590648137d183bd58e2d3fe6db2081920a42941614ab3ec440b5ff_prof);

    }

    public function getTemplateName()
    {
        return "submission/edit.html.twig";
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
/*     <h1>Submission edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('submission_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
