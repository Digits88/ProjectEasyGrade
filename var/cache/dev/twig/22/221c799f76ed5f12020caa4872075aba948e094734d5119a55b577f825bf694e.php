<?php

/* :assignment:show.html.twig */
class __TwigTemplate_11496dccc2cac2adf12868e65efc2cbceb217150750fa8982838d623c8cd7858 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":assignment:show.html.twig", 1);
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
        $__internal_8767df49c887dec3110946f6e439391a78a288f86551aa67c409d37545cee071 = $this->env->getExtension("native_profiler");
        $__internal_8767df49c887dec3110946f6e439391a78a288f86551aa67c409d37545cee071->enter($__internal_8767df49c887dec3110946f6e439391a78a288f86551aa67c409d37545cee071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":assignment:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8767df49c887dec3110946f6e439391a78a288f86551aa67c409d37545cee071->leave($__internal_8767df49c887dec3110946f6e439391a78a288f86551aa67c409d37545cee071_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_8c079d10ce6245364d1c317c73ec6b0296dce14c06a06c36107b05d6931d60e1 = $this->env->getExtension("native_profiler");
        $__internal_8c079d10ce6245364d1c317c73ec6b0296dce14c06a06c36107b05d6931d60e1->enter($__internal_8c079d10ce6245364d1c317c73ec6b0296dce14c06a06c36107b05d6931d60e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_8c079d10ce6245364d1c317c73ec6b0296dce14c06a06c36107b05d6931d60e1->leave($__internal_8c079d10ce6245364d1c317c73ec6b0296dce14c06a06c36107b05d6931d60e1_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_7cbfdddde28a79abb277a251e8d480ecce1dc82c3795dd1bc22f127ed9ac6717 = $this->env->getExtension("native_profiler");
        $__internal_7cbfdddde28a79abb277a251e8d480ecce1dc82c3795dd1bc22f127ed9ac6717->enter($__internal_7cbfdddde28a79abb277a251e8d480ecce1dc82c3795dd1bc22f127ed9ac6717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Assignment</h1>

    <!-- Zero Configuration Table -->
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Your Assignment</div>
        <div class=\"panel-body\">
            <table id=\"zctb\" class=\"display table table-striped table-bordered table-hover\" cellspacing=\"0\" width=\"100%\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Assignmentid</th>
                        <th>Assignmentname</th>
                        <th>Assignmentdescription</th>
                        <th>Test Input One</th>
                        <th>Test Output One</th>
                        <th>Actions</th>
                    </tr>
                </thead>
        <tbody>
            <tr>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : $this->getContext($context, "assignment")), "id", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : $this->getContext($context, "assignment")), "assignmentid", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : $this->getContext($context, "assignment")), "assignmentname", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : $this->getContext($context, "assignment")), "assignmentdescription", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : $this->getContext($context, "assignment")), "testinputone", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : $this->getContext($context, "assignment")), "testoutputone", array()), "html", null, true);
        echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("course_assignments");
        echo "\" class=\"btn btn-warning\">Back to the list</a>
                            <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("assignment_edit", array("id" => $this->getAttribute((isset($context["assignment"]) ? $context["assignment"] : $this->getContext($context, "assignment")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Edit</a>
                            ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                            <input type=\"submit\" value=\"Delete\" class=\"btn btn-success\">
                            ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                        </li>

                    </ul>
                </td>
            </tr>




        </tbody>
    </table>


";
        
        $__internal_7cbfdddde28a79abb277a251e8d480ecce1dc82c3795dd1bc22f127ed9ac6717->leave($__internal_7cbfdddde28a79abb277a251e8d480ecce1dc82c3795dd1bc22f127ed9ac6717_prof);

    }

    public function getTemplateName()
    {
        return ":assignment:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 38,  110 => 36,  106 => 35,  102 => 34,  95 => 30,  91 => 29,  87 => 28,  83 => 27,  79 => 26,  75 => 25,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>Assignment</h1>*/
/* */
/*     <!-- Zero Configuration Table -->*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">Your Assignment</div>*/
/*         <div class="panel-body">*/
/*             <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <th>Assignmentid</th>*/
/*                         <th>Assignmentname</th>*/
/*                         <th>Assignmentdescription</th>*/
/*                         <th>Test Input One</th>*/
/*                         <th>Test Output One</th>*/
/*                         <th>Actions</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <td>{{ assignment.id }}</td>*/
/*                 <td>{{ assignment.assignmentid }}</td>*/
/*                 <td>{{ assignment.assignmentname }}</td>*/
/*                 <td>{{ assignment.assignmentdescription }}</td>*/
/*                 <td>{{ assignment.testinputone }}</td>*/
/*                 <td>{{ assignment.testoutputone }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('course_assignments') }}" class="btn btn-warning">Back to the list</a>*/
/*                             <a href="{{ path('assignment_edit', { 'id': assignment.id }) }}" class="btn btn-primary">Edit</a>*/
/*                             {{ form_start(delete_form) }}*/
/*                             <input type="submit" value="Delete" class="btn btn-success">*/
/*                             {{ form_end(delete_form) }}*/
/*                         </li>*/
/* */
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/* */
/* */
/* */
/* */
/*         </tbody>*/
/*     </table>*/
/* */
/* */
/* {% endblock contentdetail %}*/
/* */
