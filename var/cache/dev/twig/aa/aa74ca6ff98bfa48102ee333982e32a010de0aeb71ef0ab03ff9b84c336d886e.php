<?php

/* assignment/new.html.twig */
class __TwigTemplate_2b20a5d9aa667da091f7dc5a7fef33110e2d0c931910c648a106214a3b141bca extends Twig_Template
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
        $__internal_32379e671c62bef805f7cdcd8d25415a31029099b7c9261444366f053cceda37 = $this->env->getExtension("native_profiler");
        $__internal_32379e671c62bef805f7cdcd8d25415a31029099b7c9261444366f053cceda37->enter($__internal_32379e671c62bef805f7cdcd8d25415a31029099b7c9261444366f053cceda37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assignment/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32379e671c62bef805f7cdcd8d25415a31029099b7c9261444366f053cceda37->leave($__internal_32379e671c62bef805f7cdcd8d25415a31029099b7c9261444366f053cceda37_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_23c8bd54d9ff6f95b591e1a27df680c266e0ee05a729668ea439800720376a78 = $this->env->getExtension("native_profiler");
        $__internal_23c8bd54d9ff6f95b591e1a27df680c266e0ee05a729668ea439800720376a78->enter($__internal_23c8bd54d9ff6f95b591e1a27df680c266e0ee05a729668ea439800720376a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_23c8bd54d9ff6f95b591e1a27df680c266e0ee05a729668ea439800720376a78->leave($__internal_23c8bd54d9ff6f95b591e1a27df680c266e0ee05a729668ea439800720376a78_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_e178edd3bf2a0d650c5ab84a3efd34bb1bd9c7732ec8e18e28f0974cbc55a4f6 = $this->env->getExtension("native_profiler");
        $__internal_e178edd3bf2a0d650c5ab84a3efd34bb1bd9c7732ec8e18e28f0974cbc55a4f6->enter($__internal_e178edd3bf2a0d650c5ab84a3efd34bb1bd9c7732ec8e18e28f0974cbc55a4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        
        $__internal_e178edd3bf2a0d650c5ab84a3efd34bb1bd9c7732ec8e18e28f0974cbc55a4f6->leave($__internal_e178edd3bf2a0d650c5ab84a3efd34bb1bd9c7732ec8e18e28f0974cbc55a4f6_prof);

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
