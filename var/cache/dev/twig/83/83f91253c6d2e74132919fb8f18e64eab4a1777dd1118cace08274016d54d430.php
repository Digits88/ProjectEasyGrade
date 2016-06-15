<?php

/* :course:show.html.twig */
class __TwigTemplate_9c12c462130d7737001025b3c72378f4a328d22de42f6862580b558b77407855 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":course:show.html.twig", 1);
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
        $__internal_aa630a00f6b2150025b949b3555e55b1eb3ab1cc73b4292b97c00e885cd907e0 = $this->env->getExtension("native_profiler");
        $__internal_aa630a00f6b2150025b949b3555e55b1eb3ab1cc73b4292b97c00e885cd907e0->enter($__internal_aa630a00f6b2150025b949b3555e55b1eb3ab1cc73b4292b97c00e885cd907e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":course:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa630a00f6b2150025b949b3555e55b1eb3ab1cc73b4292b97c00e885cd907e0->leave($__internal_aa630a00f6b2150025b949b3555e55b1eb3ab1cc73b4292b97c00e885cd907e0_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_ceffe841b0985f718e3f4172626d3fa5365b0ac0c67799843d77f7b690ac9e42 = $this->env->getExtension("native_profiler");
        $__internal_ceffe841b0985f718e3f4172626d3fa5365b0ac0c67799843d77f7b690ac9e42->enter($__internal_ceffe841b0985f718e3f4172626d3fa5365b0ac0c67799843d77f7b690ac9e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_ceffe841b0985f718e3f4172626d3fa5365b0ac0c67799843d77f7b690ac9e42->leave($__internal_ceffe841b0985f718e3f4172626d3fa5365b0ac0c67799843d77f7b690ac9e42_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_c9c1bb46484ab4d583bfccb64f1e8cdeaf4f7a68f5eb82da86aa5d365aab1c8f = $this->env->getExtension("native_profiler");
        $__internal_c9c1bb46484ab4d583bfccb64f1e8cdeaf4f7a68f5eb82da86aa5d365aab1c8f->enter($__internal_c9c1bb46484ab4d583bfccb64f1e8cdeaf4f7a68f5eb82da86aa5d365aab1c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Course</h1>

    <!-- Zero Configuration Table -->
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Your Courses</div>
        <div class=\"panel-body\">

            <table id=\"zctb\" class=\"display table table-striped table-bordered table-hover\" cellspacing=\"0\" width=\"100%\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Courseid</th>
                        <th>Coursename</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "courseid", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "coursename", array()), "html", null, true);
        echo "</td>
                        <td>
                            <ul>
                                <li>
                                    <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("user_courses");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
                                    <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_edit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Edit</a>
                                </li>

                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


";
        
        $__internal_c9c1bb46484ab4d583bfccb64f1e8cdeaf4f7a68f5eb82da86aa5d365aab1c8f->leave($__internal_c9c1bb46484ab4d583bfccb64f1e8cdeaf4f7a68f5eb82da86aa5d365aab1c8f_prof);

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
        return array (  92 => 30,  88 => 29,  81 => 25,  77 => 24,  73 => 23,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>Course</h1>*/
/* */
/*     <!-- Zero Configuration Table -->*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">Your Courses</div>*/
/*         <div class="panel-body">*/
/* */
/*             <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <th>Courseid</th>*/
/*                         <th>Coursename</th>*/
/*                         <th>Actions</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         <td>{{ course.id }}</td>*/
/*                         <td>{{ course.courseid }}</td>*/
/*                         <td>{{ course.coursename }}</td>*/
/*                         <td>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <a href="{{ path('user_courses') }}" class="btn btn-primary">Back to the list</a>*/
/*                                     <a href="{{ path('course_edit', { 'id': course.id }) }}" class="btn btn-primary">Edit</a>*/
/*                                 </li>*/
/* */
/*                             </ul>*/
/*                         </td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock contentdetail %}*/
/* */
