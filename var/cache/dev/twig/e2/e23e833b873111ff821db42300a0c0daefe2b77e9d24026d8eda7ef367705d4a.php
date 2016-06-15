<?php

/* :assignment:new.html.twig */
class __TwigTemplate_83346ecec6d022bd5d4e2df6cb5d68dd6340abc70ddd279cd39d21ab09293329 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":assignment:new.html.twig", 1);
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
        $__internal_58207b288d83249630313420e91e25f36261bfc9ca14ce48cf97703a4f9d4966 = $this->env->getExtension("native_profiler");
        $__internal_58207b288d83249630313420e91e25f36261bfc9ca14ce48cf97703a4f9d4966->enter($__internal_58207b288d83249630313420e91e25f36261bfc9ca14ce48cf97703a4f9d4966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":assignment:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58207b288d83249630313420e91e25f36261bfc9ca14ce48cf97703a4f9d4966->leave($__internal_58207b288d83249630313420e91e25f36261bfc9ca14ce48cf97703a4f9d4966_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_6dd67d2b5bd3cd01e1e89797956ebd48251fb65330a48d43f7865acc3ef7a3ba = $this->env->getExtension("native_profiler");
        $__internal_6dd67d2b5bd3cd01e1e89797956ebd48251fb65330a48d43f7865acc3ef7a3ba->enter($__internal_6dd67d2b5bd3cd01e1e89797956ebd48251fb65330a48d43f7865acc3ef7a3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_6dd67d2b5bd3cd01e1e89797956ebd48251fb65330a48d43f7865acc3ef7a3ba->leave($__internal_6dd67d2b5bd3cd01e1e89797956ebd48251fb65330a48d43f7865acc3ef7a3ba_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_3c55c34d91a032103283f4d977112a925d889cd7f85da557c44db2640df102c7 = $this->env->getExtension("native_profiler");
        $__internal_3c55c34d91a032103283f4d977112a925d889cd7f85da557c44db2640df102c7->enter($__internal_3c55c34d91a032103283f4d977112a925d889cd7f85da557c44db2640df102c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        
        $__internal_3c55c34d91a032103283f4d977112a925d889cd7f85da557c44db2640df102c7->leave($__internal_3c55c34d91a032103283f4d977112a925d889cd7f85da557c44db2640df102c7_prof);

    }

    public function getTemplateName()
    {
        return ":assignment:new.html.twig";
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
