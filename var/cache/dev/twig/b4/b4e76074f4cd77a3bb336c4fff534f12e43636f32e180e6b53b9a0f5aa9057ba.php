<?php

/* :submission:index.html.twig */
class __TwigTemplate_ae50e1d7de7cb0d15e139ec6f1c934fd31e12c15e0e847cfbd88decc13adcea7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":submission:index.html.twig", 1);
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
        $__internal_7c63c141e1dc790659773fd2258d82c9d8707ff6bd6d094c414fe06c5204091c = $this->env->getExtension("native_profiler");
        $__internal_7c63c141e1dc790659773fd2258d82c9d8707ff6bd6d094c414fe06c5204091c->enter($__internal_7c63c141e1dc790659773fd2258d82c9d8707ff6bd6d094c414fe06c5204091c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":submission:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c63c141e1dc790659773fd2258d82c9d8707ff6bd6d094c414fe06c5204091c->leave($__internal_7c63c141e1dc790659773fd2258d82c9d8707ff6bd6d094c414fe06c5204091c_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_d717ac3c6616d74a462b7a767580a1533c8e1efb8409c0a6d6d7c24e924dd3b4 = $this->env->getExtension("native_profiler");
        $__internal_d717ac3c6616d74a462b7a767580a1533c8e1efb8409c0a6d6d7c24e924dd3b4->enter($__internal_d717ac3c6616d74a462b7a767580a1533c8e1efb8409c0a6d6d7c24e924dd3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_d717ac3c6616d74a462b7a767580a1533c8e1efb8409c0a6d6d7c24e924dd3b4->leave($__internal_d717ac3c6616d74a462b7a767580a1533c8e1efb8409c0a6d6d7c24e924dd3b4_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_0693789d95a0669d84cca645a4078ccf45f28c0d641e88f02818a5e35da6f069 = $this->env->getExtension("native_profiler");
        $__internal_0693789d95a0669d84cca645a4078ccf45f28c0d641e88f02818a5e35da6f069->enter($__internal_0693789d95a0669d84cca645a4078ccf45f28c0d641e88f02818a5e35da6f069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
                                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_grade", array("id" => $this->getAttribute($context["submission"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary grade\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["submission"], "status", array()), "html", null, true);
            echo "</a>
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
        
        $__internal_0693789d95a0669d84cca645a4078ccf45f28c0d641e88f02818a5e35da6f069->leave($__internal_0693789d95a0669d84cca645a4078ccf45f28c0d641e88f02818a5e35da6f069_prof);

    }

    // line 53
    public function block_cumstomScript($context, array $blocks = array())
    {
        $__internal_c997f82eb8d2e6dba011e60af8625b9af07e0c5f7353dffc6a3c9451172aecc7 = $this->env->getExtension("native_profiler");
        $__internal_c997f82eb8d2e6dba011e60af8625b9af07e0c5f7353dffc6a3c9451172aecc7->enter($__internal_c997f82eb8d2e6dba011e60af8625b9af07e0c5f7353dffc6a3c9451172aecc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cumstomScript"));

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
                                    //\$(\"span#votes_number\").html(data); //data will be containing the vote count which you have echoed from the controller
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
        
        $__internal_c997f82eb8d2e6dba011e60af8625b9af07e0c5f7353dffc6a3c9451172aecc7->leave($__internal_c997f82eb8d2e6dba011e60af8625b9af07e0c5f7353dffc6a3c9451172aecc7_prof);

    }

    public function getTemplateName()
    {
        return ":submission:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 62,  154 => 54,  148 => 53,  135 => 46,  121 => 40,  117 => 39,  113 => 38,  106 => 34,  100 => 33,  96 => 32,  90 => 31,  87 => 30,  83 => 29,  60 => 9,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
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
/*                                 <a href="{{ path('test_grade',{'id': submission.id }) }}" class="btn btn-primary grade">{{ submission.status }}</a>*/
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
/*                                     //$("span#votes_number").html(data); //data will be containing the vote count which you have echoed from the controller*/
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
