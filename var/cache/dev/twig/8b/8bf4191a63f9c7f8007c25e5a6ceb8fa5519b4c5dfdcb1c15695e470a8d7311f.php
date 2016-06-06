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
        $__internal_f70bb73818c1630a5128e346f8242444b1696b85aa4df4822eb68255b30cb77d = $this->env->getExtension("native_profiler");
        $__internal_f70bb73818c1630a5128e346f8242444b1696b85aa4df4822eb68255b30cb77d->enter($__internal_f70bb73818c1630a5128e346f8242444b1696b85aa4df4822eb68255b30cb77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f70bb73818c1630a5128e346f8242444b1696b85aa4df4822eb68255b30cb77d->leave($__internal_f70bb73818c1630a5128e346f8242444b1696b85aa4df4822eb68255b30cb77d_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_66f15abe430e2cc372aad5925bc7791885f5531e10c4347e3bb3a2330e6bc166 = $this->env->getExtension("native_profiler");
        $__internal_66f15abe430e2cc372aad5925bc7791885f5531e10c4347e3bb3a2330e6bc166->enter($__internal_66f15abe430e2cc372aad5925bc7791885f5531e10c4347e3bb3a2330e6bc166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_66f15abe430e2cc372aad5925bc7791885f5531e10c4347e3bb3a2330e6bc166->leave($__internal_66f15abe430e2cc372aad5925bc7791885f5531e10c4347e3bb3a2330e6bc166_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_0957fb17a86e1c87a8db96cbb116ad7509da01c5e46970a66c6e05e92ddb22cf = $this->env->getExtension("native_profiler");
        $__internal_0957fb17a86e1c87a8db96cbb116ad7509da01c5e46970a66c6e05e92ddb22cf->enter($__internal_0957fb17a86e1c87a8db96cbb116ad7509da01c5e46970a66c6e05e92ddb22cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        
        $__internal_0957fb17a86e1c87a8db96cbb116ad7509da01c5e46970a66c6e05e92ddb22cf->leave($__internal_0957fb17a86e1c87a8db96cbb116ad7509da01c5e46970a66c6e05e92ddb22cf_prof);

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
