<?php

/* @NSEP/Default/index.html.twig */
class __TwigTemplate_8e8fbb92d4b9abde46abd87ee05906d6eae38ecea73164608bef3357719e25fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e48d3cf3f1bd3a3f88ab72ccf5ea7a2e064d9d6849c624a93e08ea7f8889fb89 = $this->env->getExtension("native_profiler");
        $__internal_e48d3cf3f1bd3a3f88ab72ccf5ea7a2e064d9d6849c624a93e08ea7f8889fb89->enter($__internal_e48d3cf3f1bd3a3f88ab72ccf5ea7a2e064d9d6849c624a93e08ea7f8889fb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NSEP/Default/index.html.twig"));

        // line 1
        echo "<html>
<head></head>
<body>
<div id=\"div_chart\"></div>

<script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
<script type=\"text/javascript\">
    ";
        // line 8
        echo $this->env->getExtension('cmen_google_charts_extension')->draw((isset($context["histogram"]) ? $context["histogram"] : $this->getContext($context, "histogram")), "div_chart");
        echo "
</script>
</body>
</html>";
        
        $__internal_e48d3cf3f1bd3a3f88ab72ccf5ea7a2e064d9d6849c624a93e08ea7f8889fb89->leave($__internal_e48d3cf3f1bd3a3f88ab72ccf5ea7a2e064d9d6849c624a93e08ea7f8889fb89_prof);

    }

    public function getTemplateName()
    {
        return "@NSEP/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  22 => 1,);
    }
}
/* <html>*/
/* <head></head>*/
/* <body>*/
/* <div id="div_chart"></div>*/
/* */
/* <script type="text/javascript" src="https://www.google.com/jsapi"></script>*/
/* <script type="text/javascript">*/
/*     {{ gc_draw(histogram, 'div_chart') }}*/
/* </script>*/
/* </body>*/
/* </html>*/
