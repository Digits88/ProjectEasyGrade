<?php

/* user/new.html.twig */
class __TwigTemplate_63381a52628d9846f209c40b6aa77534eefcb6a994825a5d773c45b4739e1b76 extends Twig_Template
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
        $__internal_726feb7f0f23172826759e5d1b272072effe1bdec1f83e9a1b7a9523f4922e50 = $this->env->getExtension("native_profiler");
        $__internal_726feb7f0f23172826759e5d1b272072effe1bdec1f83e9a1b7a9523f4922e50->enter($__internal_726feb7f0f23172826759e5d1b272072effe1bdec1f83e9a1b7a9523f4922e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_726feb7f0f23172826759e5d1b272072effe1bdec1f83e9a1b7a9523f4922e50->leave($__internal_726feb7f0f23172826759e5d1b272072effe1bdec1f83e9a1b7a9523f4922e50_prof);

    }

    // line 4
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_215d6359353e9e77bfee116e09678e4b457720cb02ba83d54ae343ccc51cac8d = $this->env->getExtension("native_profiler");
        $__internal_215d6359353e9e77bfee116e09678e4b457720cb02ba83d54ae343ccc51cac8d->enter($__internal_215d6359353e9e77bfee116e09678e4b457720cb02ba83d54ae343ccc51cac8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_215d6359353e9e77bfee116e09678e4b457720cb02ba83d54ae343ccc51cac8d->leave($__internal_215d6359353e9e77bfee116e09678e4b457720cb02ba83d54ae343ccc51cac8d_prof);

    }

    // line 5
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_8fde9572f51335d3ef325158e7c92bef16836781503f9aaacbe75e82dfc4a71f = $this->env->getExtension("native_profiler");
        $__internal_8fde9572f51335d3ef325158e7c92bef16836781503f9aaacbe75e82dfc4a71f->enter($__internal_8fde9572f51335d3ef325158e7c92bef16836781503f9aaacbe75e82dfc4a71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        
        $__internal_8fde9572f51335d3ef325158e7c92bef16836781503f9aaacbe75e82dfc4a71f->leave($__internal_8fde9572f51335d3ef325158e7c92bef16836781503f9aaacbe75e82dfc4a71f_prof);

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
