<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_3a5ec4862ac8098d71e46d134e52f34f46d913097efb26fff2ea001816f18a61 extends Twig_Template
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
        $__internal_2143ae7a1ae0a08e2ea4435baf273afabe0c29c144cd6b2b9140d309c5a6052f = $this->env->getExtension("native_profiler");
        $__internal_2143ae7a1ae0a08e2ea4435baf273afabe0c29c144cd6b2b9140d309c5a6052f->enter($__internal_2143ae7a1ae0a08e2ea4435baf273afabe0c29c144cd6b2b9140d309c5a6052f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_2143ae7a1ae0a08e2ea4435baf273afabe0c29c144cd6b2b9140d309c5a6052f->leave($__internal_2143ae7a1ae0a08e2ea4435baf273afabe0c29c144cd6b2b9140d309c5a6052f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
