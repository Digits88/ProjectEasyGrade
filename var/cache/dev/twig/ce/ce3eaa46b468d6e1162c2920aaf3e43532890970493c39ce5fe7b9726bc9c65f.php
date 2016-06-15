<?php

/* :submission:new.html.twig */
class __TwigTemplate_f35474989b4ed0d1ec402ca6f2a7c113facf0b18a40524ed5c30d6f93b816668 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":submission:new.html.twig", 1);
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
        $__internal_0cc7468e3244e01b66895d47e983e15b23ac4de0a45014abc21b77c60fb15c38 = $this->env->getExtension("native_profiler");
        $__internal_0cc7468e3244e01b66895d47e983e15b23ac4de0a45014abc21b77c60fb15c38->enter($__internal_0cc7468e3244e01b66895d47e983e15b23ac4de0a45014abc21b77c60fb15c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":submission:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cc7468e3244e01b66895d47e983e15b23ac4de0a45014abc21b77c60fb15c38->leave($__internal_0cc7468e3244e01b66895d47e983e15b23ac4de0a45014abc21b77c60fb15c38_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_887a356235ee10e549882a5955588b012b9552a618c207fdd0edfd2d09222e7a = $this->env->getExtension("native_profiler");
        $__internal_887a356235ee10e549882a5955588b012b9552a618c207fdd0edfd2d09222e7a->enter($__internal_887a356235ee10e549882a5955588b012b9552a618c207fdd0edfd2d09222e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_887a356235ee10e549882a5955588b012b9552a618c207fdd0edfd2d09222e7a->leave($__internal_887a356235ee10e549882a5955588b012b9552a618c207fdd0edfd2d09222e7a_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_588f4ed502f79bad4f4421be515fdbe7a7235ffd873e0a4b639ce36877653448 = $this->env->getExtension("native_profiler");
        $__internal_588f4ed502f79bad4f4421be515fdbe7a7235ffd873e0a4b639ce36877653448->enter($__internal_588f4ed502f79bad4f4421be515fdbe7a7235ffd873e0a4b639ce36877653448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Submission creation</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <br><input class=\"btn btn-success\" type=\"submit\" value=\"Upload\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <br><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("submission_index");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_588f4ed502f79bad4f4421be515fdbe7a7235ffd873e0a4b639ce36877653448->leave($__internal_588f4ed502f79bad4f4421be515fdbe7a7235ffd873e0a4b639ce36877653448_prof);

    }

    public function getTemplateName()
    {
        return ":submission:new.html.twig";
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
/*     <h1>Submission creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <br><input class="btn btn-success" type="submit" value="Upload" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <br><a href="{{ path('submission_index') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
