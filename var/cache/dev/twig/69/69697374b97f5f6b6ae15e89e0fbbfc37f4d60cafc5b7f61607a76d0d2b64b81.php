<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_e3c7aa61d220b0703cdf5ee8d7b29fb2f40c548117e454b2de523ccaffddee22 extends Twig_Template
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
        $__internal_8a1e7483c0c72cf9e079b87498dd205171e1a04f8a4b4434c6d7acd1d61e1b06 = $this->env->getExtension("native_profiler");
        $__internal_8a1e7483c0c72cf9e079b87498dd205171e1a04f8a4b4434c6d7acd1d61e1b06->enter($__internal_8a1e7483c0c72cf9e079b87498dd205171e1a04f8a4b4434c6d7acd1d61e1b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8a1e7483c0c72cf9e079b87498dd205171e1a04f8a4b4434c6d7acd1d61e1b06->leave($__internal_8a1e7483c0c72cf9e079b87498dd205171e1a04f8a4b4434c6d7acd1d61e1b06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
