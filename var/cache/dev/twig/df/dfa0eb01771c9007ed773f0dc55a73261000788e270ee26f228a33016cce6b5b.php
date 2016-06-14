<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0aad2a3a6fcce65ae392700082cb45a307ba4ff69c307be29f2d1c2f0cd75e77 extends Twig_Template
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
        $__internal_b60734bdf48d25470393040ac5ba3f847ec6b90c6ee9bc1b9f837e98cc5da1b8 = $this->env->getExtension("native_profiler");
        $__internal_b60734bdf48d25470393040ac5ba3f847ec6b90c6ee9bc1b9f837e98cc5da1b8->enter($__internal_b60734bdf48d25470393040ac5ba3f847ec6b90c6ee9bc1b9f837e98cc5da1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b60734bdf48d25470393040ac5ba3f847ec6b90c6ee9bc1b9f837e98cc5da1b8->leave($__internal_b60734bdf48d25470393040ac5ba3f847ec6b90c6ee9bc1b9f837e98cc5da1b8_prof);

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
