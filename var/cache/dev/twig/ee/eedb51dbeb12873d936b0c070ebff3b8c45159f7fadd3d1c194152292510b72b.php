<?php

/* :testcase:index.html.twig */
class __TwigTemplate_f499b8ee801924a5f3c9ae21bfc1d92c4848a23fd113372278a66868141f1ffc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":testcase:index.html.twig", 1);
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
        $__internal_aabffd679a779d2beaac72f91fd85a01b0cc8c3b1921d1d24df9afaebe2ec46d = $this->env->getExtension("native_profiler");
        $__internal_aabffd679a779d2beaac72f91fd85a01b0cc8c3b1921d1d24df9afaebe2ec46d->enter($__internal_aabffd679a779d2beaac72f91fd85a01b0cc8c3b1921d1d24df9afaebe2ec46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":testcase:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aabffd679a779d2beaac72f91fd85a01b0cc8c3b1921d1d24df9afaebe2ec46d->leave($__internal_aabffd679a779d2beaac72f91fd85a01b0cc8c3b1921d1d24df9afaebe2ec46d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee3ab73cecdaffef5d583cc3bc5966a79453585a7c2ff4535987d0afb27dc1a7 = $this->env->getExtension("native_profiler");
        $__internal_ee3ab73cecdaffef5d583cc3bc5966a79453585a7c2ff4535987d0afb27dc1a7->enter($__internal_ee3ab73cecdaffef5d583cc3bc5966a79453585a7c2ff4535987d0afb27dc1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>TestCase list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Imagename</th>
                <th>Updatedat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["testCases"]) ? $context["testCases"] : $this->getContext($context, "testCases")));
        foreach ($context['_seq'] as $context["_key"] => $context["testCase"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("testcase_show", array("id" => $this->getAttribute($context["testCase"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["testCase"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["testCase"], "imageName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["testCase"], "updatedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["testCase"], "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("testcase_show", array("id" => $this->getAttribute($context["testCase"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("testcase_edit", array("id" => $this->getAttribute($context["testCase"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testCase'], $context['_parent'], $context['loop']);
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
        
        $__internal_ee3ab73cecdaffef5d583cc3bc5966a79453585a7c2ff4535987d0afb27dc1a7->leave($__internal_ee3ab73cecdaffef5d583cc3bc5966a79453585a7c2ff4535987d0afb27dc1a7_prof);

    }

    public function getTemplateName()
    {
        return ":testcase:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 38,  98 => 33,  86 => 27,  80 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>TestCase list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Imagename</th>*/
/*                 <th>Updatedat</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for testCase in testCases %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('testcase_show', { 'id': testCase.id }) }}">{{ testCase.id }}</a></td>*/
/*                 <td>{{ testCase.imageName }}</td>*/
/*                 <td>{% if testCase.updatedAt %}{{ testCase.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('testcase_show', { 'id': testCase.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('testcase_edit', { 'id': testCase.id }) }}">edit</a>*/
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
