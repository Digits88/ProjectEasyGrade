<?php

/* :course:new.html.twig */
class __TwigTemplate_2efaf1be1b5526f68778d547c62ca99df2785d5b7f32786a695d7d76fd1d5dc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":course:new.html.twig", 1);
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
        $__internal_c40b759da8a13442a6bbf16888aa9229005596d875b92b41103b072de506cf28 = $this->env->getExtension("native_profiler");
        $__internal_c40b759da8a13442a6bbf16888aa9229005596d875b92b41103b072de506cf28->enter($__internal_c40b759da8a13442a6bbf16888aa9229005596d875b92b41103b072de506cf28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":course:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c40b759da8a13442a6bbf16888aa9229005596d875b92b41103b072de506cf28->leave($__internal_c40b759da8a13442a6bbf16888aa9229005596d875b92b41103b072de506cf28_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_042a66a3cca51f294ecd3031733b47fa13ac160cddad529a35d4c9c301e9fb03 = $this->env->getExtension("native_profiler");
        $__internal_042a66a3cca51f294ecd3031733b47fa13ac160cddad529a35d4c9c301e9fb03->enter($__internal_042a66a3cca51f294ecd3031733b47fa13ac160cddad529a35d4c9c301e9fb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_042a66a3cca51f294ecd3031733b47fa13ac160cddad529a35d4c9c301e9fb03->leave($__internal_042a66a3cca51f294ecd3031733b47fa13ac160cddad529a35d4c9c301e9fb03_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_da4dcb8d43660eb1948562bb3c3b4a59fa821c41def6f40e3d9c73dc0f9320e6 = $this->env->getExtension("native_profiler");
        $__internal_da4dcb8d43660eb1948562bb3c3b4a59fa821c41def6f40e3d9c73dc0f9320e6->enter($__internal_da4dcb8d43660eb1948562bb3c3b4a59fa821c41def6f40e3d9c73dc0f9320e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        echo $this->env->getExtension('routing')->getPath("user_courses");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_da4dcb8d43660eb1948562bb3c3b4a59fa821c41def6f40e3d9c73dc0f9320e6->leave($__internal_da4dcb8d43660eb1948562bb3c3b4a59fa821c41def6f40e3d9c73dc0f9320e6_prof);

    }

    public function getTemplateName()
    {
        return ":course:new.html.twig";
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
/*             <br><a href="{{ path('user_courses') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
