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
        $__internal_c5b88c010be655bb5c0932878f1f417bebe33450fbfabb54dc4877357d3d7b93 = $this->env->getExtension("native_profiler");
        $__internal_c5b88c010be655bb5c0932878f1f417bebe33450fbfabb54dc4877357d3d7b93->enter($__internal_c5b88c010be655bb5c0932878f1f417bebe33450fbfabb54dc4877357d3d7b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5b88c010be655bb5c0932878f1f417bebe33450fbfabb54dc4877357d3d7b93->leave($__internal_c5b88c010be655bb5c0932878f1f417bebe33450fbfabb54dc4877357d3d7b93_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_533c3c3b331d8306c7a8ae1a38007870ca9c8206921e7f3b9c0e2be61ea6ebb7 = $this->env->getExtension("native_profiler");
        $__internal_533c3c3b331d8306c7a8ae1a38007870ca9c8206921e7f3b9c0e2be61ea6ebb7->enter($__internal_533c3c3b331d8306c7a8ae1a38007870ca9c8206921e7f3b9c0e2be61ea6ebb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_533c3c3b331d8306c7a8ae1a38007870ca9c8206921e7f3b9c0e2be61ea6ebb7->leave($__internal_533c3c3b331d8306c7a8ae1a38007870ca9c8206921e7f3b9c0e2be61ea6ebb7_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_5b735cbb727611bbfae44c0c3d36919d04536a825698e49027039546854e7bbe = $this->env->getExtension("native_profiler");
        $__internal_5b735cbb727611bbfae44c0c3d36919d04536a825698e49027039546854e7bbe->enter($__internal_5b735cbb727611bbfae44c0c3d36919d04536a825698e49027039546854e7bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        
        $__internal_5b735cbb727611bbfae44c0c3d36919d04536a825698e49027039546854e7bbe->leave($__internal_5b735cbb727611bbfae44c0c3d36919d04536a825698e49027039546854e7bbe_prof);

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
