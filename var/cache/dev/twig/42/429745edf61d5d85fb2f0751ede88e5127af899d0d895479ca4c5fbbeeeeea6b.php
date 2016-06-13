<?php

/* :assignment:edit.html.twig */
class __TwigTemplate_1ff5854fd7fc5e616f79a2aa52a1591bc710cbbd1027a5a9606262ee50ab15fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":assignment:edit.html.twig", 1);
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
        $__internal_904a04caac080187f6c21348237112cb8ddf1d75f63914773e53246275bbb345 = $this->env->getExtension("native_profiler");
        $__internal_904a04caac080187f6c21348237112cb8ddf1d75f63914773e53246275bbb345->enter($__internal_904a04caac080187f6c21348237112cb8ddf1d75f63914773e53246275bbb345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":assignment:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_904a04caac080187f6c21348237112cb8ddf1d75f63914773e53246275bbb345->leave($__internal_904a04caac080187f6c21348237112cb8ddf1d75f63914773e53246275bbb345_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3767af5e4da96133855927884605198ea566e5192dceb8a2ecd5d80c0a6a55f4 = $this->env->getExtension("native_profiler");
        $__internal_3767af5e4da96133855927884605198ea566e5192dceb8a2ecd5d80c0a6a55f4->enter($__internal_3767af5e4da96133855927884605198ea566e5192dceb8a2ecd5d80c0a6a55f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Assignment edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("assignment_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_3767af5e4da96133855927884605198ea566e5192dceb8a2ecd5d80c0a6a55f4->leave($__internal_3767af5e4da96133855927884605198ea566e5192dceb8a2ecd5d80c0a6a55f4_prof);

    }

    public function getTemplateName()
    {
        return ":assignment:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Assignment edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('assignment_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
