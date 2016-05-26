<?php

/* :course:new.html.twig */
class __TwigTemplate_dd5d595b8d6c40bea6d062d9fe28eb977833d63bf545ef6e83d48eb3382ef496 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":course:new.html.twig", 1);
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
        $__internal_55d296c41ae7a26323e8ce60f019997a0cbe977a8046d1b75dfdb59c859fe92f = $this->env->getExtension("native_profiler");
        $__internal_55d296c41ae7a26323e8ce60f019997a0cbe977a8046d1b75dfdb59c859fe92f->enter($__internal_55d296c41ae7a26323e8ce60f019997a0cbe977a8046d1b75dfdb59c859fe92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":course:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55d296c41ae7a26323e8ce60f019997a0cbe977a8046d1b75dfdb59c859fe92f->leave($__internal_55d296c41ae7a26323e8ce60f019997a0cbe977a8046d1b75dfdb59c859fe92f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_631345a87a49136c609c03fca817b8906e22c77bb3ffba7cfa5ee4e87a1410b3 = $this->env->getExtension("native_profiler");
        $__internal_631345a87a49136c609c03fca817b8906e22c77bb3ffba7cfa5ee4e87a1410b3->enter($__internal_631345a87a49136c609c03fca817b8906e22c77bb3ffba7cfa5ee4e87a1410b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Course creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("course_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_631345a87a49136c609c03fca817b8906e22c77bb3ffba7cfa5ee4e87a1410b3->leave($__internal_631345a87a49136c609c03fca817b8906e22c77bb3ffba7cfa5ee4e87a1410b3_prof);

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
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Course creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('course_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
