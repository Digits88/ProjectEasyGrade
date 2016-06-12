<?php

/* user/edit.html.twig */
class __TwigTemplate_5811b7e2584378a43b901be1eaf15f15998efed0160f1c08fbf5a8414f962720 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
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
        $__internal_663113712f3c9e103b45e8429c7a1654446776bd711cefc57595b1bc1391b653 = $this->env->getExtension("native_profiler");
        $__internal_663113712f3c9e103b45e8429c7a1654446776bd711cefc57595b1bc1391b653->enter($__internal_663113712f3c9e103b45e8429c7a1654446776bd711cefc57595b1bc1391b653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_663113712f3c9e103b45e8429c7a1654446776bd711cefc57595b1bc1391b653->leave($__internal_663113712f3c9e103b45e8429c7a1654446776bd711cefc57595b1bc1391b653_prof);

    }

    // line 4
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_c41cbb21de63ad952603a3837f254625df079362392a928205722c0531073c5b = $this->env->getExtension("native_profiler");
        $__internal_c41cbb21de63ad952603a3837f254625df079362392a928205722c0531073c5b->enter($__internal_c41cbb21de63ad952603a3837f254625df079362392a928205722c0531073c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_c41cbb21de63ad952603a3837f254625df079362392a928205722c0531073c5b->leave($__internal_c41cbb21de63ad952603a3837f254625df079362392a928205722c0531073c5b_prof);

    }

    // line 5
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_c8e1d0c3982bedc3153d2f4631e025cc0778fdc1fb343c79261a9b2e77294d4b = $this->env->getExtension("native_profiler");
        $__internal_c8e1d0c3982bedc3153d2f4631e025cc0778fdc1fb343c79261a9b2e77294d4b->enter($__internal_c8e1d0c3982bedc3153d2f4631e025cc0778fdc1fb343c79261a9b2e77294d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 6
        echo "    <h1>User edit</h1>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
    <input class=\"btn btn-success\" type=\"submit\" value=\"Edit\" />
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <br>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
            <br>
        </li>
    </ul>
";
        
        $__internal_c8e1d0c3982bedc3153d2f4631e025cc0778fdc1fb343c79261a9b2e77294d4b->leave($__internal_c8e1d0c3982bedc3153d2f4631e025cc0778fdc1fb343c79261a9b2e77294d4b_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 16,  66 => 11,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>User edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*     {{ form_widget(edit_form) }}*/
/*     <input class="btn btn-success" type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <br>*/
/*             <a href="{{ path('user_index') }}" class="btn btn-primary">Back to the list</a>*/
/*             <br>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
