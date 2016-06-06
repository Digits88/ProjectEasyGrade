<?php

/* course/edit.html.twig */
class __TwigTemplate_7c378967e5dacf0071cf69175cabe00b85750cecc6763b36a69ddbd6dc9ad350 extends Twig_Template
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
        $__internal_e5a47d443694a7e7ea2593fe2f14589e4c9d1d9bd9def4de2de53487dbe9c510 = $this->env->getExtension("native_profiler");
        $__internal_e5a47d443694a7e7ea2593fe2f14589e4c9d1d9bd9def4de2de53487dbe9c510->enter($__internal_e5a47d443694a7e7ea2593fe2f14589e4c9d1d9bd9def4de2de53487dbe9c510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5a47d443694a7e7ea2593fe2f14589e4c9d1d9bd9def4de2de53487dbe9c510->leave($__internal_e5a47d443694a7e7ea2593fe2f14589e4c9d1d9bd9def4de2de53487dbe9c510_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_8d73081ea7617abcf73e5792893c33e48a9cdb8533709907530e321d2ce7fbf6 = $this->env->getExtension("native_profiler");
        $__internal_8d73081ea7617abcf73e5792893c33e48a9cdb8533709907530e321d2ce7fbf6->enter($__internal_8d73081ea7617abcf73e5792893c33e48a9cdb8533709907530e321d2ce7fbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_8d73081ea7617abcf73e5792893c33e48a9cdb8533709907530e321d2ce7fbf6->leave($__internal_8d73081ea7617abcf73e5792893c33e48a9cdb8533709907530e321d2ce7fbf6_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_691c8a146dbb8e8fd5596f7a036c8418cddaa780ba0b2ac88c9a447e307f2b89 = $this->env->getExtension("native_profiler");
        $__internal_691c8a146dbb8e8fd5596f7a036c8418cddaa780ba0b2ac88c9a447e307f2b89->enter($__internal_691c8a146dbb8e8fd5596f7a036c8418cddaa780ba0b2ac88c9a447e307f2b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        echo $this->env->getExtension('routing')->getPath("course_index");
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
        
        $__internal_691c8a146dbb8e8fd5596f7a036c8418cddaa780ba0b2ac88c9a447e307f2b89->leave($__internal_691c8a146dbb8e8fd5596f7a036c8418cddaa780ba0b2ac88c9a447e307f2b89_prof);

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
/*             <br><a href="{{ path('course_index') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <br><input class="btn btn-warning" type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
