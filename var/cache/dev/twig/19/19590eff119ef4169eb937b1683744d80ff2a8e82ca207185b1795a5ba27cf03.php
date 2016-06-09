<?php

/* submission/index.html.twig */
class __TwigTemplate_5e2cbee8d8c2d33284f3ddbe9ef72e62711eea5e8196c5f236a8012966a781eb extends Twig_Template
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
        $__internal_a16334262c6344789a15ba3eeca9f58dfcc3b620f780e245f3d9a16b3808180a = $this->env->getExtension("native_profiler");
        $__internal_a16334262c6344789a15ba3eeca9f58dfcc3b620f780e245f3d9a16b3808180a->enter($__internal_a16334262c6344789a15ba3eeca9f58dfcc3b620f780e245f3d9a16b3808180a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "submission/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a16334262c6344789a15ba3eeca9f58dfcc3b620f780e245f3d9a16b3808180a->leave($__internal_a16334262c6344789a15ba3eeca9f58dfcc3b620f780e245f3d9a16b3808180a_prof);

    }

    // line 3
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_44d0965071919a4557e5f0aa796acebaa1c35dbdd51db824953ba2896a90b1ac = $this->env->getExtension("native_profiler");
        $__internal_44d0965071919a4557e5f0aa796acebaa1c35dbdd51db824953ba2896a90b1ac->enter($__internal_44d0965071919a4557e5f0aa796acebaa1c35dbdd51db824953ba2896a90b1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_44d0965071919a4557e5f0aa796acebaa1c35dbdd51db824953ba2896a90b1ac->leave($__internal_44d0965071919a4557e5f0aa796acebaa1c35dbdd51db824953ba2896a90b1ac_prof);

    }

    // line 4
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_3cab36104ef21629345fe52167f02110ff463d4cced479126a6dfd056ace404d = $this->env->getExtension("native_profiler");
        $__internal_3cab36104ef21629345fe52167f02110ff463d4cced479126a6dfd056ace404d->enter($__internal_3cab36104ef21629345fe52167f02110ff463d4cced479126a6dfd056ace404d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

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
        
        $__internal_3cab36104ef21629345fe52167f02110ff463d4cced479126a6dfd056ace404d->leave($__internal_3cab36104ef21629345fe52167f02110ff463d4cced479126a6dfd056ace404d_prof);

    }

    // line 53
    public function block_cumstomScript($context, array $blocks = array())
    {
        $__internal_23de74ee78249a5fa8308a96b9fcfda670b204e5e736f3df85266e5894369918 = $this->env->getExtension("native_profiler");
        $__internal_23de74ee78249a5fa8308a96b9fcfda670b204e5e736f3df85266e5894369918->enter($__internal_23de74ee78249a5fa8308a96b9fcfda670b204e5e736f3df85266e5894369918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cumstomScript"));

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
        
        $__internal_23de74ee78249a5fa8308a96b9fcfda670b204e5e736f3df85266e5894369918->leave($__internal_23de74ee78249a5fa8308a96b9fcfda670b204e5e736f3df85266e5894369918_prof);

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
