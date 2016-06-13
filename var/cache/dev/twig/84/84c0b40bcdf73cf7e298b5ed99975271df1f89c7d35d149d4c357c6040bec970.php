<?php

/* user/new.html.twig */
class __TwigTemplate_744891f495f4c6ec521ce303fa7af6955aba301d5d35f9b8b93eb216b5b01a44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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
        $__internal_d05b268e3a80d9520a353d7f0adc584f23fc13984ed5c04304fc097997aa1d2e = $this->env->getExtension("native_profiler");
        $__internal_d05b268e3a80d9520a353d7f0adc584f23fc13984ed5c04304fc097997aa1d2e->enter($__internal_d05b268e3a80d9520a353d7f0adc584f23fc13984ed5c04304fc097997aa1d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d05b268e3a80d9520a353d7f0adc584f23fc13984ed5c04304fc097997aa1d2e->leave($__internal_d05b268e3a80d9520a353d7f0adc584f23fc13984ed5c04304fc097997aa1d2e_prof);

    }

    // line 4
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_f80288d9e13924e44e170cecad11d5f8bce4545be43de46adfcd92361820cb28 = $this->env->getExtension("native_profiler");
        $__internal_f80288d9e13924e44e170cecad11d5f8bce4545be43de46adfcd92361820cb28->enter($__internal_f80288d9e13924e44e170cecad11d5f8bce4545be43de46adfcd92361820cb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_f80288d9e13924e44e170cecad11d5f8bce4545be43de46adfcd92361820cb28->leave($__internal_f80288d9e13924e44e170cecad11d5f8bce4545be43de46adfcd92361820cb28_prof);

    }

    // line 5
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_1fdc07727f407b38253f7e97c9555ba8adf68838f5a3a5a292b50a7dd54a6df7 = $this->env->getExtension("native_profiler");
        $__internal_1fdc07727f407b38253f7e97c9555ba8adf68838f5a3a5a292b50a7dd54a6df7->enter($__internal_1fdc07727f407b38253f7e97c9555ba8adf68838f5a3a5a292b50a7dd54a6df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 6
        echo "    <h1>User creation</h1>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <br><input class=\"btn btn-success\" type=\"submit\" value=\"Create\" />
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <br><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1fdc07727f407b38253f7e97c9555ba8adf68838f5a3a5a292b50a7dd54a6df7->leave($__internal_1fdc07727f407b38253f7e97c9555ba8adf68838f5a3a5a292b50a7dd54a6df7_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  66 => 11,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>User creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <br><input class="btn btn-success" type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <br><a href="{{ path('user_index') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
