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
        $__internal_73c0a8d3ef97be3b43af18a9e8fa98408363878f51411a1f905a82e9047a80b3 = $this->env->getExtension("native_profiler");
        $__internal_73c0a8d3ef97be3b43af18a9e8fa98408363878f51411a1f905a82e9047a80b3->enter($__internal_73c0a8d3ef97be3b43af18a9e8fa98408363878f51411a1f905a82e9047a80b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assignment/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73c0a8d3ef97be3b43af18a9e8fa98408363878f51411a1f905a82e9047a80b3->leave($__internal_73c0a8d3ef97be3b43af18a9e8fa98408363878f51411a1f905a82e9047a80b3_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_46acb7c9152b6d7e76ec247310ffe98c639772d27793720c823eba56f95191dc = $this->env->getExtension("native_profiler");
        $__internal_46acb7c9152b6d7e76ec247310ffe98c639772d27793720c823eba56f95191dc->enter($__internal_46acb7c9152b6d7e76ec247310ffe98c639772d27793720c823eba56f95191dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_46acb7c9152b6d7e76ec247310ffe98c639772d27793720c823eba56f95191dc->leave($__internal_46acb7c9152b6d7e76ec247310ffe98c639772d27793720c823eba56f95191dc_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_2f61baa91a417a47bc1b75c9029be226014b412c3f3eb2a3f001d1e727338ae2 = $this->env->getExtension("native_profiler");
        $__internal_2f61baa91a417a47bc1b75c9029be226014b412c3f3eb2a3f001d1e727338ae2->enter($__internal_2f61baa91a417a47bc1b75c9029be226014b412c3f3eb2a3f001d1e727338ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        echo $this->env->getExtension('routing')->getPath("user_courses");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_2f61baa91a417a47bc1b75c9029be226014b412c3f3eb2a3f001d1e727338ae2->leave($__internal_2f61baa91a417a47bc1b75c9029be226014b412c3f3eb2a3f001d1e727338ae2_prof);

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
/*             <br><a href="{{ path('user_courses') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
