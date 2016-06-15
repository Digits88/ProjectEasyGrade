<?php

/* submission/edit.html.twig */
class __TwigTemplate_e40615ad0d342075e5a34a33076cfc897522ca2717262b85b0cfdd11aef97f3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "submission/edit.html.twig", 1);
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
        $__internal_46af52875ef2f7d6df71e25e910146a00fceb5b8fa8e606e90c127a4d5e51055 = $this->env->getExtension("native_profiler");
        $__internal_46af52875ef2f7d6df71e25e910146a00fceb5b8fa8e606e90c127a4d5e51055->enter($__internal_46af52875ef2f7d6df71e25e910146a00fceb5b8fa8e606e90c127a4d5e51055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "submission/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46af52875ef2f7d6df71e25e910146a00fceb5b8fa8e606e90c127a4d5e51055->leave($__internal_46af52875ef2f7d6df71e25e910146a00fceb5b8fa8e606e90c127a4d5e51055_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_1d08fc8551f85f538db8ef4a42aaeeb873c04a6906714bb01fecd0ebdcf1918e = $this->env->getExtension("native_profiler");
        $__internal_1d08fc8551f85f538db8ef4a42aaeeb873c04a6906714bb01fecd0ebdcf1918e->enter($__internal_1d08fc8551f85f538db8ef4a42aaeeb873c04a6906714bb01fecd0ebdcf1918e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_1d08fc8551f85f538db8ef4a42aaeeb873c04a6906714bb01fecd0ebdcf1918e->leave($__internal_1d08fc8551f85f538db8ef4a42aaeeb873c04a6906714bb01fecd0ebdcf1918e_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_fdaba93e824fe661cccf151463111e744d4ccf714f5e88c91e842f4009964797 = $this->env->getExtension("native_profiler");
        $__internal_fdaba93e824fe661cccf151463111e744d4ccf714f5e88c91e842f4009964797->enter($__internal_fdaba93e824fe661cccf151463111e744d4ccf714f5e88c91e842f4009964797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Submission edit</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("submission_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_fdaba93e824fe661cccf151463111e744d4ccf714f5e88c91e842f4009964797->leave($__internal_fdaba93e824fe661cccf151463111e744d4ccf714f5e88c91e842f4009964797_prof);

    }

    public function getTemplateName()
    {
        return "submission/edit.html.twig";
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
/*     <h1>Submission edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('submission_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
