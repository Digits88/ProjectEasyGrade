<?php

/* submission/new.html.twig */
class __TwigTemplate_e46d0be768505f8bcc892c64e7ea5ead37a8a6f6b3edce6660007893281c57cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "submission/new.html.twig", 1);
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
        $__internal_4fcd097801a04314c7cc1a4a38de90e2a189ae8966478a964154c57b22e519a7 = $this->env->getExtension("native_profiler");
        $__internal_4fcd097801a04314c7cc1a4a38de90e2a189ae8966478a964154c57b22e519a7->enter($__internal_4fcd097801a04314c7cc1a4a38de90e2a189ae8966478a964154c57b22e519a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "submission/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fcd097801a04314c7cc1a4a38de90e2a189ae8966478a964154c57b22e519a7->leave($__internal_4fcd097801a04314c7cc1a4a38de90e2a189ae8966478a964154c57b22e519a7_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_118a7f674deb464718db6d9d210b7e33c24fdead95467f88dfc2e4f1e9eb6154 = $this->env->getExtension("native_profiler");
        $__internal_118a7f674deb464718db6d9d210b7e33c24fdead95467f88dfc2e4f1e9eb6154->enter($__internal_118a7f674deb464718db6d9d210b7e33c24fdead95467f88dfc2e4f1e9eb6154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_118a7f674deb464718db6d9d210b7e33c24fdead95467f88dfc2e4f1e9eb6154->leave($__internal_118a7f674deb464718db6d9d210b7e33c24fdead95467f88dfc2e4f1e9eb6154_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_0ef0c9ad3d4d573737b34dc212c74fdc4d2c45a11bf27bd972bfa0220a005ffe = $this->env->getExtension("native_profiler");
        $__internal_0ef0c9ad3d4d573737b34dc212c74fdc4d2c45a11bf27bd972bfa0220a005ffe->enter($__internal_0ef0c9ad3d4d573737b34dc212c74fdc4d2c45a11bf27bd972bfa0220a005ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        
        $__internal_0ef0c9ad3d4d573737b34dc212c74fdc4d2c45a11bf27bd972bfa0220a005ffe->leave($__internal_0ef0c9ad3d4d573737b34dc212c74fdc4d2c45a11bf27bd972bfa0220a005ffe_prof);

    }

    public function getTemplateName()
    {
        return "submission/new.html.twig";
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
