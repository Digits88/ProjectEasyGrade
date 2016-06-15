<?php

/* course/show.html.twig */
class __TwigTemplate_04e4030cf1eeeedcb526cb733a68d023985c5b7997ae33717784d4d190bc51f7 extends Twig_Template
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
        $__internal_09939bd35948501c6c7d3830b72145defcd89351a30c1a1c2bf951fc5021a79f = $this->env->getExtension("native_profiler");
        $__internal_09939bd35948501c6c7d3830b72145defcd89351a30c1a1c2bf951fc5021a79f->enter($__internal_09939bd35948501c6c7d3830b72145defcd89351a30c1a1c2bf951fc5021a79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09939bd35948501c6c7d3830b72145defcd89351a30c1a1c2bf951fc5021a79f->leave($__internal_09939bd35948501c6c7d3830b72145defcd89351a30c1a1c2bf951fc5021a79f_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_e7df6be542bdbd38c58de4d38fc30ef56468760ac7052950425f645c487609df = $this->env->getExtension("native_profiler");
        $__internal_e7df6be542bdbd38c58de4d38fc30ef56468760ac7052950425f645c487609df->enter($__internal_e7df6be542bdbd38c58de4d38fc30ef56468760ac7052950425f645c487609df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_e7df6be542bdbd38c58de4d38fc30ef56468760ac7052950425f645c487609df->leave($__internal_e7df6be542bdbd38c58de4d38fc30ef56468760ac7052950425f645c487609df_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_4361dc79adc04e7895df3cac2a8512e386f66fbc001707c44dc473416892428f = $this->env->getExtension("native_profiler");
        $__internal_4361dc79adc04e7895df3cac2a8512e386f66fbc001707c44dc473416892428f->enter($__internal_4361dc79adc04e7895df3cac2a8512e386f66fbc001707c44dc473416892428f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        
        $__internal_4361dc79adc04e7895df3cac2a8512e386f66fbc001707c44dc473416892428f->leave($__internal_4361dc79adc04e7895df3cac2a8512e386f66fbc001707c44dc473416892428f_prof);

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
