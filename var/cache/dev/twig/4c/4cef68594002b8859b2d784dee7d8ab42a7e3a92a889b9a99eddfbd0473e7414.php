<?php

/* course/new.html.twig */
class __TwigTemplate_743da21efd2f5dd1581c377fb5848d42c92fd3a2532a74a11a998421d6cfd0ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "course/new.html.twig", 1);
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
        $__internal_71f055842b7f0ee7af64b941f69d313c8d58150dec2dd32e76ad2e6ee1bbb47c = $this->env->getExtension("native_profiler");
        $__internal_71f055842b7f0ee7af64b941f69d313c8d58150dec2dd32e76ad2e6ee1bbb47c->enter($__internal_71f055842b7f0ee7af64b941f69d313c8d58150dec2dd32e76ad2e6ee1bbb47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71f055842b7f0ee7af64b941f69d313c8d58150dec2dd32e76ad2e6ee1bbb47c->leave($__internal_71f055842b7f0ee7af64b941f69d313c8d58150dec2dd32e76ad2e6ee1bbb47c_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_80a917c9b4cd8360ee2f9017e1d638733b778ecca9422108f5fd3a2b28c9d63c = $this->env->getExtension("native_profiler");
        $__internal_80a917c9b4cd8360ee2f9017e1d638733b778ecca9422108f5fd3a2b28c9d63c->enter($__internal_80a917c9b4cd8360ee2f9017e1d638733b778ecca9422108f5fd3a2b28c9d63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_80a917c9b4cd8360ee2f9017e1d638733b778ecca9422108f5fd3a2b28c9d63c->leave($__internal_80a917c9b4cd8360ee2f9017e1d638733b778ecca9422108f5fd3a2b28c9d63c_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_ea32fa48a28d2f901455599fe4870ad019429e8005e7592431923589e52840f8 = $this->env->getExtension("native_profiler");
        $__internal_ea32fa48a28d2f901455599fe4870ad019429e8005e7592431923589e52840f8->enter($__internal_ea32fa48a28d2f901455599fe4870ad019429e8005e7592431923589e52840f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Course creation</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <br><input type=\"submit\" value=\"Create\" class=\"btn btn-success\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <br><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("course_index");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_ea32fa48a28d2f901455599fe4870ad019429e8005e7592431923589e52840f8->leave($__internal_ea32fa48a28d2f901455599fe4870ad019429e8005e7592431923589e52840f8_prof);

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
        return array (  73 => 14,  66 => 10,  61 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>Course creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <br><input type="submit" value="Create" class="btn btn-success" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <br><a href="{{ path('course_index') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
