<?php

/* testcase/index.html.twig */
class __TwigTemplate_40f62de102e0ca81f4e7d5510787048cbf16fc7d000dd9e424009927d973f0b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "testcase/index.html.twig", 1);
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
        $__internal_34f1085cd45723f9fd85fa5a78a22fe271a66e4a60391eb5f71d7d0c53e30c47 = $this->env->getExtension("native_profiler");
        $__internal_34f1085cd45723f9fd85fa5a78a22fe271a66e4a60391eb5f71d7d0c53e30c47->enter($__internal_34f1085cd45723f9fd85fa5a78a22fe271a66e4a60391eb5f71d7d0c53e30c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "testcase/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34f1085cd45723f9fd85fa5a78a22fe271a66e4a60391eb5f71d7d0c53e30c47->leave($__internal_34f1085cd45723f9fd85fa5a78a22fe271a66e4a60391eb5f71d7d0c53e30c47_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dec6b201c6be05bdf407745a03b6d3e721977373df6a0af8e7e8dfcb3888f4e7 = $this->env->getExtension("native_profiler");
        $__internal_dec6b201c6be05bdf407745a03b6d3e721977373df6a0af8e7e8dfcb3888f4e7->enter($__internal_dec6b201c6be05bdf407745a03b6d3e721977373df6a0af8e7e8dfcb3888f4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Testcase list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Testinput</th>
                <th>Testoutput</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["testcases"]) ? $context["testcases"] : $this->getContext($context, "testcases")));
        foreach ($context['_seq'] as $context["_key"] => $context["testcase"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("testcase_show", array("id" => $this->getAttribute($context["testcase"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["testcase"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["testcase"], "testinput", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["testcase"], "testoutput", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("testcase_show", array("id" => $this->getAttribute($context["testcase"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("testcase_edit", array("id" => $this->getAttribute($context["testcase"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testcase'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("testcase_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_dec6b201c6be05bdf407745a03b6d3e721977373df6a0af8e7e8dfcb3888f4e7->leave($__internal_dec6b201c6be05bdf407745a03b6d3e721977373df6a0af8e7e8dfcb3888f4e7_prof);

    }

    public function getTemplateName()
    {
        return "testcase/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Testcase list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Testinput</th>*/
/*                 <th>Testoutput</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for testcase in testcases %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('testcase_show', { 'id': testcase.id }) }}">{{ testcase.id }}</a></td>*/
/*                 <td>{{ testcase.testinput }}</td>*/
/*                 <td>{{ testcase.testoutput }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('testcase_show', { 'id': testcase.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('testcase_edit', { 'id': testcase.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('testcase_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
