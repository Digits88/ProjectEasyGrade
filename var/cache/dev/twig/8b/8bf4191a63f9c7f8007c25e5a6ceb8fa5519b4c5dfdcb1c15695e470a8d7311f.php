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
        $__internal_c781c2e6cb415d14cf7f907f24d0dc876d09cf7773c1cceb5c9de79041263236 = $this->env->getExtension("native_profiler");
        $__internal_c781c2e6cb415d14cf7f907f24d0dc876d09cf7773c1cceb5c9de79041263236->enter($__internal_c781c2e6cb415d14cf7f907f24d0dc876d09cf7773c1cceb5c9de79041263236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c781c2e6cb415d14cf7f907f24d0dc876d09cf7773c1cceb5c9de79041263236->leave($__internal_c781c2e6cb415d14cf7f907f24d0dc876d09cf7773c1cceb5c9de79041263236_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_9e4c42b6b8bd02e7e7ce0fe6c61188e5dd54a4d6d111f60ee04eb4c4d8bf2ef1 = $this->env->getExtension("native_profiler");
        $__internal_9e4c42b6b8bd02e7e7ce0fe6c61188e5dd54a4d6d111f60ee04eb4c4d8bf2ef1->enter($__internal_9e4c42b6b8bd02e7e7ce0fe6c61188e5dd54a4d6d111f60ee04eb4c4d8bf2ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_9e4c42b6b8bd02e7e7ce0fe6c61188e5dd54a4d6d111f60ee04eb4c4d8bf2ef1->leave($__internal_9e4c42b6b8bd02e7e7ce0fe6c61188e5dd54a4d6d111f60ee04eb4c4d8bf2ef1_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_c18ae6cf930f25fc0934fdba78bdf3dc4a242431c149bcc1b8a2fcf9cbe89e50 = $this->env->getExtension("native_profiler");
        $__internal_c18ae6cf930f25fc0934fdba78bdf3dc4a242431c149bcc1b8a2fcf9cbe89e50->enter($__internal_c18ae6cf930f25fc0934fdba78bdf3dc4a242431c149bcc1b8a2fcf9cbe89e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        echo $this->env->getExtension('routing')->getPath("course_index");
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
        
        $__internal_c18ae6cf930f25fc0934fdba78bdf3dc4a242431c149bcc1b8a2fcf9cbe89e50->leave($__internal_c18ae6cf930f25fc0934fdba78bdf3dc4a242431c149bcc1b8a2fcf9cbe89e50_prof);

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
        return array (  92 => 30,  88 => 29,  81 => 25,  77 => 24,  73 => 23,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>Course</h1>*/
/* */
/* <!-- Zero Configuration Table -->*/
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
/*                                     <a href="{{ path('course_index') }}" class="btn btn-primary">Back to the list</a>*/
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
