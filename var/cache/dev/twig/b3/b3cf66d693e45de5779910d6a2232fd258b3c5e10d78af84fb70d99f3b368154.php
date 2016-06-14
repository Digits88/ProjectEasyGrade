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
        $__internal_a35a930faf1c51ce7336a54e6a038b2fa6351a5b5421cbc2557d0529aad59544 = $this->env->getExtension("native_profiler");
        $__internal_a35a930faf1c51ce7336a54e6a038b2fa6351a5b5421cbc2557d0529aad59544->enter($__internal_a35a930faf1c51ce7336a54e6a038b2fa6351a5b5421cbc2557d0529aad59544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a35a930faf1c51ce7336a54e6a038b2fa6351a5b5421cbc2557d0529aad59544->leave($__internal_a35a930faf1c51ce7336a54e6a038b2fa6351a5b5421cbc2557d0529aad59544_prof);

    }

    // line 4
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_56b3456647e6673ca77684d1e38f90dd3b8597cbcf47118b36c3334b40dd7a15 = $this->env->getExtension("native_profiler");
        $__internal_56b3456647e6673ca77684d1e38f90dd3b8597cbcf47118b36c3334b40dd7a15->enter($__internal_56b3456647e6673ca77684d1e38f90dd3b8597cbcf47118b36c3334b40dd7a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_56b3456647e6673ca77684d1e38f90dd3b8597cbcf47118b36c3334b40dd7a15->leave($__internal_56b3456647e6673ca77684d1e38f90dd3b8597cbcf47118b36c3334b40dd7a15_prof);

    }

    // line 5
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_4fdb8f7636b0580034f97b1c2749562395076bf65bb3e81faadd242924c79bdc = $this->env->getExtension("native_profiler");
        $__internal_4fdb8f7636b0580034f97b1c2749562395076bf65bb3e81faadd242924c79bdc->enter($__internal_4fdb8f7636b0580034f97b1c2749562395076bf65bb3e81faadd242924c79bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        echo $this->env->getExtension('routing')->getPath("user_courses");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
            <br>
        </li>
    </ul>
";
        
        $__internal_4fdb8f7636b0580034f97b1c2749562395076bf65bb3e81faadd242924c79bdc->leave($__internal_4fdb8f7636b0580034f97b1c2749562395076bf65bb3e81faadd242924c79bdc_prof);

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
/*             <a href="{{ path('user_courses') }}" class="btn btn-primary">Back to the list</a>*/
/*             <br>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
