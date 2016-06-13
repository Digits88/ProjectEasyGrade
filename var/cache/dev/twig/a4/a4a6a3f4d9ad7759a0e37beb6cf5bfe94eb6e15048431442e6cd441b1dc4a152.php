<?php

/* assignment/new.html.twig */
class __TwigTemplate_e8599bf3e28222cbd9c576ab1caafd30964e700b937653763308da9c414dd587 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "assignment/new.html.twig", 1);
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
        $__internal_f5114f8ee3b3b3d21bbb5d9d89b77c481e70f63b8d4e5a1f934cab0b9507cc38 = $this->env->getExtension("native_profiler");
        $__internal_f5114f8ee3b3b3d21bbb5d9d89b77c481e70f63b8d4e5a1f934cab0b9507cc38->enter($__internal_f5114f8ee3b3b3d21bbb5d9d89b77c481e70f63b8d4e5a1f934cab0b9507cc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assignment/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5114f8ee3b3b3d21bbb5d9d89b77c481e70f63b8d4e5a1f934cab0b9507cc38->leave($__internal_f5114f8ee3b3b3d21bbb5d9d89b77c481e70f63b8d4e5a1f934cab0b9507cc38_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_3633f26cba2c45383bee7e90467ffbc486b9f7f62231a2421b0854e4f82aa827 = $this->env->getExtension("native_profiler");
        $__internal_3633f26cba2c45383bee7e90467ffbc486b9f7f62231a2421b0854e4f82aa827->enter($__internal_3633f26cba2c45383bee7e90467ffbc486b9f7f62231a2421b0854e4f82aa827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_3633f26cba2c45383bee7e90467ffbc486b9f7f62231a2421b0854e4f82aa827->leave($__internal_3633f26cba2c45383bee7e90467ffbc486b9f7f62231a2421b0854e4f82aa827_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_ab355fa474d87deca00e78794f4296a031693b1f75ca2c498b3f66e019242f57 = $this->env->getExtension("native_profiler");
        $__internal_ab355fa474d87deca00e78794f4296a031693b1f75ca2c498b3f66e019242f57->enter($__internal_ab355fa474d87deca00e78794f4296a031693b1f75ca2c498b3f66e019242f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Assignment creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("assignment_index");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_ab355fa474d87deca00e78794f4296a031693b1f75ca2c498b3f66e019242f57->leave($__internal_ab355fa474d87deca00e78794f4296a031693b1f75ca2c498b3f66e019242f57_prof);

    }

    public function getTemplateName()
    {
        return "assignment/new.html.twig";
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
/*     <h1>Assignment creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <br><input type="submit" value="Create" class="btn btn-success" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <br><a href="{{ path('assignment_index') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
