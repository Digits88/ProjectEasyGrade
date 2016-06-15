<?php

/* NSEPBundle:Default:index.html.twig */
class __TwigTemplate_a98ca1d98143a971795c1774f6ecead31e750a2f6e5eb93a9e4f2b8d3324d321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NSEPBundle:Default:index.html.twig", 1);
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
        $__internal_5a08bf6b733b5b7a3def95f631ad142e8ee0aabc47198d1a1ed5bbd71e1b153d = $this->env->getExtension("native_profiler");
        $__internal_5a08bf6b733b5b7a3def95f631ad142e8ee0aabc47198d1a1ed5bbd71e1b153d->enter($__internal_5a08bf6b733b5b7a3def95f631ad142e8ee0aabc47198d1a1ed5bbd71e1b153d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSEPBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a08bf6b733b5b7a3def95f631ad142e8ee0aabc47198d1a1ed5bbd71e1b153d->leave($__internal_5a08bf6b733b5b7a3def95f631ad142e8ee0aabc47198d1a1ed5bbd71e1b153d_prof);

    }

    // line 4
    public function block_authenticatedUsername($context, array $blocks = array())
    {
        $__internal_72f9b509b0bfac06fc84c0680961e9dcab1f3c9be6c533fc50d6da0fcddddc3e = $this->env->getExtension("native_profiler");
        $__internal_72f9b509b0bfac06fc84c0680961e9dcab1f3c9be6c533fc50d6da0fcddddc3e->enter($__internal_72f9b509b0bfac06fc84c0680961e9dcab1f3c9be6c533fc50d6da0fcddddc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "authenticatedUsername"));

        echo twig_include($this->env, $context, "@NSEP/Default/userid.html.twig");
        
        $__internal_72f9b509b0bfac06fc84c0680961e9dcab1f3c9be6c533fc50d6da0fcddddc3e->leave($__internal_72f9b509b0bfac06fc84c0680961e9dcab1f3c9be6c533fc50d6da0fcddddc3e_prof);

    }

    // line 5
    public function block_contentdetail($context, array $blocks = array())
    {
        $__internal_97a35f7062af040a6ccc74c970a0d46595d1aea6d4f228eba6a7e30611e983f1 = $this->env->getExtension("native_profiler");
        $__internal_97a35f7062af040a6ccc74c970a0d46595d1aea6d4f228eba6a7e30611e983f1->enter($__internal_97a35f7062af040a6ccc74c970a0d46595d1aea6d4f228eba6a7e30611e983f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentdetail"));

        // line 6
        echo "
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_courses", array("id" => (isset($context["aid"]) ? $context["aid"] : $this->getContext($context, "aid")))), "html", null, true);
        echo "\" class=\"btn btn-warning\">Back</a>

    <div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>


";
        
        $__internal_97a35f7062af040a6ccc74c970a0d46595d1aea6d4f228eba6a7e30611e983f1->leave($__internal_97a35f7062af040a6ccc74c970a0d46595d1aea6d4f228eba6a7e30611e983f1_prof);

    }

    // line 14
    public function block_cumstomScript($context, array $blocks = array())
    {
        $__internal_557a19807379515b0943381ae72be6c5035c9be9c1a073ddd1d401fd51b1d05c = $this->env->getExtension("native_profiler");
        $__internal_557a19807379515b0943381ae72be6c5035c9be9c1a073ddd1d401fd51b1d05c->enter($__internal_557a19807379515b0943381ae72be6c5035c9be9c1a073ddd1d401fd51b1d05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cumstomScript"));

        // line 15
        echo "    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>

    <script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
    <script type=\"text/javascript\">
        ";
        // line 20
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "
    </script>



";
        
        $__internal_557a19807379515b0943381ae72be6c5035c9be9c1a073ddd1d401fd51b1d05c->leave($__internal_557a19807379515b0943381ae72be6c5035c9be9c1a073ddd1d401fd51b1d05c_prof);

    }

    public function getTemplateName()
    {
        return "NSEPBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 20,  76 => 15,  70 => 14,  57 => 7,  54 => 6,  48 => 5,  36 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* {% block authenticatedUsername %}{{ include('@NSEP/Default/userid.html.twig') }}{% endblock authenticatedUsername %}*/
/* {% block contentdetail %}*/
/* */
/*     <a href="{{ path('user_courses',{ 'id' : aid }) }}" class="btn btn-warning">Back</a>*/
/* */
/*     <div id="linechart" style="min-width: 400px; height: 400px; margin: 0 auto"></div>*/
/* */
/* */
/* {% endblock contentdetail %}*/
/* */
/* {% block cumstomScript %}*/
/*     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>*/
/* */
/*     <script src="//code.highcharts.com/4.1.8/highcharts.js"></script>*/
/*     <script src="//code.highcharts.com/4.1.8/modules/exporting.js"></script>*/
/*     <script type="text/javascript">*/
/*         {{ chart(chart) }}*/
/*     </script>*/
/* */
/* */
/* */
/* {% endblock cumstomScript %}*/
