<?php

/* :submission:show.html.twig */
class __TwigTemplate_532353dbd354b38715d89ac77da706df8bfbdafa92bfa86c0e9fdeddb3cf3d0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":submission:show.html.twig", 1);
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
        $__internal_bc558c339136adcbbdd771a8f68f5178517db855ec82ab051075070a63096897 = $this->env->getExtension("native_profiler");
        $__internal_bc558c339136adcbbdd771a8f68f5178517db855ec82ab051075070a63096897->enter($__internal_bc558c339136adcbbdd771a8f68f5178517db855ec82ab051075070a63096897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":submission:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc558c339136adcbbdd771a8f68f5178517db855ec82ab051075070a63096897->leave($__internal_bc558c339136adcbbdd771a8f68f5178517db855ec82ab051075070a63096897_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_230a043f0dbe81f3f58e9902eec90fc9d48b7abdce243827b1c2acfec73c51a3 = $this->env->getExtension("native_profiler");
        $__internal_230a043f0dbe81f3f58e9902eec90fc9d48b7abdce243827b1c2acfec73c51a3->enter($__internal_230a043f0dbe81f3f58e9902eec90fc9d48b7abdce243827b1c2acfec73c51a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_230a043f0dbe81f3f58e9902eec90fc9d48b7abdce243827b1c2acfec73c51a3->leave($__internal_230a043f0dbe81f3f58e9902eec90fc9d48b7abdce243827b1c2acfec73c51a3_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_447bd1ce75477e3c04aea662807b33f660990c184427bffe71e6ef21cd36e217 = $this->env->getExtension("native_profiler");
        $__internal_447bd1ce75477e3c04aea662807b33f660990c184427bffe71e6ef21cd36e217->enter($__internal_447bd1ce75477e3c04aea662807b33f660990c184427bffe71e6ef21cd36e217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Submission</h1>

<!-- Zero Configuration Table -->
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Your Submissions</div>
        <div class=\"panel-body\">
            <table id=\"zctb\" class=\"display table table-striped table-bordered table-hover\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>File Name</th>
                    <th>Uploaded at</th>
                    <th>Code</th>
                    <th>Status</th>
                    <th>Execution Status</th>
                    <th>Output</th>
                    <th>Memory</th>
                    <th>Time</th>
                </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "id", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "imageName", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 30
        if ($this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "updatedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
                        <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "imageName", array()), "html", null, true);
        echo "</td>
                        <td><button type=\"button\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#myModal\">View Code</button></td>
                        <td>
                            ";
        // line 34
        if (($this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "result", array()) == 15)) {
            echo "Successful
                            ";
        } elseif (($this->getAttribute(        // line 35
(isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "result", array()) == 11)) {
            echo "Compilation Error
                            ";
        } elseif (($this->getAttribute(        // line 36
(isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "result", array()) == 12)) {
            echo "Runtime Error
                            ";
        } elseif (($this->getAttribute(        // line 37
(isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "result", array()) == 13)) {
            echo "Time Limit Exceeded
                            ";
        } elseif (($this->getAttribute(        // line 38
(isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "result", array()) == 17)) {
            echo "Memory Limit Exceeded
                            ";
        } elseif (($this->getAttribute(        // line 39
(isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "result", array()) == 19)) {
            echo "Illegal System Call
                            ";
        } elseif (($this->getAttribute(        // line 40
(isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "result", array()) == 20)) {
            echo "Internal Error
                            ";
        } elseif (($this->getAttribute(        // line 41
(isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "result", array()) == 20)) {
            echo "Internal Error
                            ";
        } else {
            // line 42
            echo "Not Yet Executed
                            ";
        }
        // line 44
        echo "

                        </td>
                        <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "output", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "memory", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : $this->getContext($context, "submission")), "time", array()), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>



    <ul>
        <li>
            <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("submission_index");
        echo "\" class=\"btn btn-primary\">Back to the list</a>
        </li>
        <li>
            ";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" value=\"Delete\" class=\"btn btn-warning\">
            ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>


    <!-- Modal -->
    <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Modal Header</h4>
                </div>
                <div class=\"modal-body\">
                    <p>code should go here</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>

        </div>
    </div>

";
        
        $__internal_447bd1ce75477e3c04aea662807b33f660990c184427bffe71e6ef21cd36e217->leave($__internal_447bd1ce75477e3c04aea662807b33f660990c184427bffe71e6ef21cd36e217_prof);

    }

    public function getTemplateName()
    {
        return ":submission:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 65,  168 => 63,  162 => 60,  148 => 49,  144 => 48,  140 => 47,  135 => 44,  131 => 42,  126 => 41,  122 => 40,  118 => 39,  114 => 38,  110 => 37,  106 => 36,  102 => 35,  98 => 34,  92 => 31,  86 => 30,  82 => 29,  78 => 28,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>Submission</h1>*/
/* */
/* <!-- Zero Configuration Table -->*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">Your Submissions</div>*/
/*         <div class="panel-body">*/
/*             <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>Id</th>*/
/*                     <th>File Name</th>*/
/*                     <th>Uploaded at</th>*/
/*                     <th>Code</th>*/
/*                     <th>Status</th>*/
/*                     <th>Execution Status</th>*/
/*                     <th>Output</th>*/
/*                     <th>Memory</th>*/
/*                     <th>Time</th>*/
/*                 </tr>*/
/*                 </thead>*/
/* */
/*                 <tbody>*/
/*                     <tr>*/
/*                         <td>{{ submission.id }}</td>*/
/*                         <td>{{ submission.imageName }}</td>*/
/*                         <td>{% if submission.updatedAt %}{{ submission.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                         <td>{{ submission.imageName }}</td>*/
/*                         <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">View Code</button></td>*/
/*                         <td>*/
/*                             {% if submission.result == 15 %}Successful*/
/*                             {% elseif submission.result == 11 %}Compilation Error*/
/*                             {% elseif submission.result == 12 %}Runtime Error*/
/*                             {% elseif submission.result == 13 %}Time Limit Exceeded*/
/*                             {% elseif submission.result == 17 %}Memory Limit Exceeded*/
/*                             {% elseif submission.result == 19 %}Illegal System Call*/
/*                             {% elseif submission.result == 20 %}Internal Error*/
/*                             {% elseif submission.result == 20 %}Internal Error*/
/*                             {% else %}Not Yet Executed*/
/*                             {% endif %}*/
/* */
/* */
/*                         </td>*/
/*                         <td>{{ submission.output }}</td>*/
/*                         <td>{{ submission.memory }}</td>*/
/*                         <td>{{ submission.time }}</td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('submission_index') }}" class="btn btn-primary">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*             <input type="submit" value="Delete" class="btn btn-warning">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* */
/* */
/*     <!-- Modal -->*/
/*     <div id="myModal" class="modal fade" role="dialog">*/
/*         <div class="modal-dialog">*/
/* */
/*             <!-- Modal content-->*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*                     <h4 class="modal-title">Modal Header</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     <p>code should go here</p>*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock contentdetail%}*/
/* */
/* */
/* */
