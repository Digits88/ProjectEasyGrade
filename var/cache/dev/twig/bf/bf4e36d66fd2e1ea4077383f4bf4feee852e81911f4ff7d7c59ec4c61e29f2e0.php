<?php

/* submission/index.html.twig */
class __TwigTemplate_d555d86742044ffe6c9949b7f97701478d6a0bbe2d2e51c46f27a43f5c59ffdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "submission/index.html.twig", 1);
        $this->blocks = array(
            'authenticatedUsername' => array($this, 'block_authenticatedUsername'),
            'contentdetail' => array($this, 'block_contentdetail'),
            'cumstomScript' => array($this, 'block_cumstomScript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f740cdf5cf0a4330708fb346d635d23d324dc3b8a8dea6ea6cb4eeb058282d4 = $this->env->getExtension("native_profiler");
        $__internal_2f740cdf5cf0a4330708fb346d635d23d324dc3b8a8dea6ea6cb4eeb058282d4->enter($__internal_2f740cdf5cf0a4330708fb346d635d23d324dc3b8a8dea6ea6cb4eeb058282d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "submission/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f740cdf5cf0a4330708fb346d635d23d324dc3b8a8dea6ea6cb4eeb058282d4->leave($__internal_2f740cdf5cf0a4330708fb346d635d23d324dc3b8a8dea6ea6cb4eeb058282d4_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_0c4f5af1269faac1a189fffbf1f823c76ef4c37d38e3b07c7144b2141c7020e5 = $this->env->getExtension("native_profiler");
        $__internal_0c4f5af1269faac1a189fffbf1f823c76ef4c37d38e3b07c7144b2141c7020e5->enter($__internal_0c4f5af1269faac1a189fffbf1f823c76ef4c37d38e3b07c7144b2141c7020e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_0c4f5af1269faac1a189fffbf1f823c76ef4c37d38e3b07c7144b2141c7020e5->leave($__internal_0c4f5af1269faac1a189fffbf1f823c76ef4c37d38e3b07c7144b2141c7020e5_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_c8de96608498cd03e0d29aa94697e226c60babdb7538fbba289a874b5c8ade3e = $this->env->getExtension("native_profiler");
        $__internal_c8de96608498cd03e0d29aa94697e226c60babdb7538fbba289a874b5c8ade3e->enter($__internal_c8de96608498cd03e0d29aa94697e226c60babdb7538fbba289a874b5c8ade3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 5
        echo "    <h1>Submission list</h1>

    <ul>
        <li>
            <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("submission_new");
        echo "\" class=\"btn btn-warning\">Create a new Submission</a>
        </li>
    </ul>

    <br>
    <!-- Zero Configuration Table -->
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Your Submissions</div>
        <div class=\"panel-body\">
            <table id=\"zctb\" class=\"display table table-striped table-bordered table-hover\" cellspacing=\"0\" width=\"100%\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Submission</th>
                        <th>Uploaded</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["submissions"]) ? $context["submissions"] : $this->getContext($context, "submissions")));
        foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
            // line 30
            echo "                <tr>
                    <td class=\"sub_id\"><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("submission_show", array("id" => $this->getAttribute($context["submission"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["submission"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["submission"], "imageName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            if ($this->getAttribute($context["submission"], "updatedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["submission"], "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td class=\"sub_status\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["submission"], "status", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("submission_show", array("id" => $this->getAttribute($context["submission"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">show</a>
                                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("submission_edit", array("id" => $this->getAttribute($context["submission"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">edit</a>
                                <a href=\"#\" class=\"btn btn-primary grade\">Grade</a>
                            </li>
                        </ul>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </tbody>
            </table>
        </div>
    </div>


";
        
        $__internal_c8de96608498cd03e0d29aa94697e226c60babdb7538fbba289a874b5c8ade3e->leave($__internal_c8de96608498cd03e0d29aa94697e226c60babdb7538fbba289a874b5c8ade3e_prof);

    }

    // line 53
    public function block_cumstomScript($context, array $blocks = array())
    {
        $__internal_9753068fc8abe9ad1cbb9fbb296770058e65d645fa88115d3e8f5748fb2b6cc5 = $this->env->getExtension("native_profiler");
        $__internal_9753068fc8abe9ad1cbb9fbb296770058e65d645fa88115d3e8f5748fb2b6cc5->enter($__internal_9753068fc8abe9ad1cbb9fbb296770058e65d645fa88115d3e8f5748fb2b6cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cumstomScript"));

        // line 54
        echo "    <script type=\"application/javascript\">
        \$(
                \$('.grade').click(
                        function(\$e){
                            var the_id=\$('.sub_id',\$e.target.closest('tr')).text();
                            \$.ajax({
                                type: \"POST\",
                                data: {id:the_id},
                                url: \"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("test_grade");
        echo "\",
                                success: function(data){
                                    //data will contain the vote count echoed by the controller i.e.
                                    \"yourVoteCount\"
                                    //then append the result where ever you want like
                                    \$(\"span#votes_number\").html(data); //data will be containing the vote count which you have echoed from the controller
                                    var d=data.split(':')[0];
                                    var id=data.split(':')[1];
                                    var state=\"Error occurred.\";
                                    var action=\"Grade\";

                                    if(d=\"OK\"){
                                        state=\"Pending\";
                                        action=\"Check\";
                                    }

                                    \$('.sub_id')
                                            .each(function(i,td){
                                                if(\$(td).text()==id){
                                                    \$('.sub_status',td.closest('tr'))
                                                            .text(state);
                                                    \$('.grade',td.closest('tr'))
                                                            .text(action);
                                                }
                                            })
                                }
                            });
                        }
                )
        );

    </script>
";
        
        $__internal_9753068fc8abe9ad1cbb9fbb296770058e65d645fa88115d3e8f5748fb2b6cc5->leave($__internal_9753068fc8abe9ad1cbb9fbb296770058e65d645fa88115d3e8f5748fb2b6cc5_prof);

    }

    public function getTemplateName()
    {
        return "submission/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 62,  149 => 54,  143 => 53,  130 => 46,  117 => 39,  113 => 38,  106 => 34,  100 => 33,  96 => 32,  90 => 31,  87 => 30,  83 => 29,  60 => 9,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/*     <h1>Submission list</h1>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('submission_new') }}" class="btn btn-warning">Create a new Submission</a>*/
/*         </li>*/
/*     </ul>*/
/* */
/*     <br>*/
/*     <!-- Zero Configuration Table -->*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">Your Submissions</div>*/
/*         <div class="panel-body">*/
/*             <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <th>Submission</th>*/
/*                         <th>Uploaded</th>*/
/*                         <th>Status</th>*/
/*                         <th>Actions</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for submission in submissions %}*/
/*                 <tr>*/
/*                     <td class="sub_id"><a href="{{ path('submission_show', { 'id': submission.id }) }}">{{ submission.id }}</a></td>*/
/*                     <td>{{ submission.imageName }}</td>*/
/*                     <td>{% if submission.updatedAt %}{{ submission.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                     <td class="sub_status">{{ submission.status }}</td>*/
/*                     <td>*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <a href="{{ path('submission_show', { 'id': submission.id }) }}" class="btn btn-primary">show</a>*/
/*                                 <a href="{{ path('submission_edit', { 'id': submission.id }) }}" class="btn btn-primary">edit</a>*/
/*                                 <a href="#" class="btn btn-primary grade">Grade</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock contentdetail %}*/
/* {% block cumstomScript %}*/
/*     <script type="application/javascript">*/
/*         $(*/
/*                 $('.grade').click(*/
/*                         function($e){*/
/*                             var the_id=$('.sub_id',$e.target.closest('tr')).text();*/
/*                             $.ajax({*/
/*                                 type: "POST",*/
/*                                 data: {id:the_id},*/
/*                                 url: "{{ path('test_grade') }}",*/
/*                                 success: function(data){*/
/*                                     //data will contain the vote count echoed by the controller i.e.*/
/*                                     "yourVoteCount"*/
/*                                     //then append the result where ever you want like*/
/*                                     $("span#votes_number").html(data); //data will be containing the vote count which you have echoed from the controller*/
/*                                     var d=data.split(':')[0];*/
/*                                     var id=data.split(':')[1];*/
/*                                     var state="Error occurred.";*/
/*                                     var action="Grade";*/
/* */
/*                                     if(d="OK"){*/
/*                                         state="Pending";*/
/*                                         action="Check";*/
/*                                     }*/
/* */
/*                                     $('.sub_id')*/
/*                                             .each(function(i,td){*/
/*                                                 if($(td).text()==id){*/
/*                                                     $('.sub_status',td.closest('tr'))*/
/*                                                             .text(state);*/
/*                                                     $('.grade',td.closest('tr'))*/
/*                                                             .text(action);*/
/*                                                 }*/
/*                                             })*/
/*                                 }*/
/*                             });*/
/*                         }*/
/*                 )*/
/*         );*/
/* */
/*     </script>*/
/* {% endblock %}*/
