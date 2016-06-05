<?php

/* course/show.html.twig */
class __TwigTemplate_7f40f4bbdb64a12a0d68796d44f00b3b32a817614fabdc1033cfebb4d426f351 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "course/show.html.twig", 1);
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
        $__internal_ebe07f37ef73862bffb4f08c18cd1d5311cb083185fec9d436527f2496e3a4c9 = $this->env->getExtension("native_profiler");
        $__internal_ebe07f37ef73862bffb4f08c18cd1d5311cb083185fec9d436527f2496e3a4c9->enter($__internal_ebe07f37ef73862bffb4f08c18cd1d5311cb083185fec9d436527f2496e3a4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebe07f37ef73862bffb4f08c18cd1d5311cb083185fec9d436527f2496e3a4c9->leave($__internal_ebe07f37ef73862bffb4f08c18cd1d5311cb083185fec9d436527f2496e3a4c9_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_1a7c805381e0169bd42e36901ff76b3f39db8e427f03e5eb16d4888368395a87 = $this->env->getExtension("native_profiler");
        $__internal_1a7c805381e0169bd42e36901ff76b3f39db8e427f03e5eb16d4888368395a87->enter($__internal_1a7c805381e0169bd42e36901ff76b3f39db8e427f03e5eb16d4888368395a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_1a7c805381e0169bd42e36901ff76b3f39db8e427f03e5eb16d4888368395a87->leave($__internal_1a7c805381e0169bd42e36901ff76b3f39db8e427f03e5eb16d4888368395a87_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_af5c83ca1ef02f9bbbedf53847d10f076ed80c9be3ad54720c867125d68ae7b9 = $this->env->getExtension("native_profiler");
        $__internal_af5c83ca1ef02f9bbbedf53847d10f076ed80c9be3ad54720c867125d68ae7b9->enter($__internal_af5c83ca1ef02f9bbbedf53847d10f076ed80c9be3ad54720c867125d68ae7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Course</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Courseid</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "courseid", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Coursename</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "coursename", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("course_index");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_edit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Edit</a>
        </li>
        <li>
            ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-primary\">
            ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_af5c83ca1ef02f9bbbedf53847d10f076ed80c9be3ad54720c867125d68ae7b9->leave($__internal_af5c83ca1ef02f9bbbedf53847d10f076ed80c9be3ad54720c867125d68ae7b9_prof);

    }

    public function getTemplateName()
    {
        return "course/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  97 => 32,  91 => 29,  85 => 26,  75 => 19,  68 => 15,  61 => 11,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>Course</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ course.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Courseid</th>*/
/*                 <td>{{ course.courseid }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Coursename</th>*/
/*                 <td>{{ course.coursename }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('course_index') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('course_edit', { 'id': course.id }) }}" class="btn btn-primary">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete" class="btn btn-primary">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock contentdetail %}*/
/* */
