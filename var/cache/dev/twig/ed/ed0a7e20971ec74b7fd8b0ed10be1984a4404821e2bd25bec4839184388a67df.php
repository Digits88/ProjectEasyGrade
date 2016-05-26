<?php

/* :course:show.html.twig */
class __TwigTemplate_ded33410ab2593f9c7caf0a0fc806215a30920f12ae5f6ee97790cf22764b5a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":course:show.html.twig", 1);
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
        $__internal_3808731e164426028e907990fcf86abc54b3590c54f4f80c64b3c7dc7207260e = $this->env->getExtension("native_profiler");
        $__internal_3808731e164426028e907990fcf86abc54b3590c54f4f80c64b3c7dc7207260e->enter($__internal_3808731e164426028e907990fcf86abc54b3590c54f4f80c64b3c7dc7207260e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":course:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3808731e164426028e907990fcf86abc54b3590c54f4f80c64b3c7dc7207260e->leave($__internal_3808731e164426028e907990fcf86abc54b3590c54f4f80c64b3c7dc7207260e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d0b821838d95162d21d42364e229d05c30cbc14ddac7a6c1122271814ce97e7 = $this->env->getExtension("native_profiler");
        $__internal_3d0b821838d95162d21d42364e229d05c30cbc14ddac7a6c1122271814ce97e7->enter($__internal_3d0b821838d95162d21d42364e229d05c30cbc14ddac7a6c1122271814ce97e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Course</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Courseid</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "courseid", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Coursename</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "coursename", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("course_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_edit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_3d0b821838d95162d21d42364e229d05c30cbc14ddac7a6c1122271814ce97e7->leave($__internal_3d0b821838d95162d21d42364e229d05c30cbc14ddac7a6c1122271814ce97e7_prof);

    }

    public function getTemplateName()
    {
        return ":course:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
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
/*             <a href="{{ path('course_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('course_edit', { 'id': course.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
