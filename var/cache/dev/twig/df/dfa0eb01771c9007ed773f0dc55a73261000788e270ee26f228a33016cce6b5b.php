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
        $__internal_4f1b6ddc32590744b418c9184af09df132ef67bc15c05562c0b3b5c9c98272f3 = $this->env->getExtension("native_profiler");
        $__internal_4f1b6ddc32590744b418c9184af09df132ef67bc15c05562c0b3b5c9c98272f3->enter($__internal_4f1b6ddc32590744b418c9184af09df132ef67bc15c05562c0b3b5c9c98272f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4f1b6ddc32590744b418c9184af09df132ef67bc15c05562c0b3b5c9c98272f3->leave($__internal_4f1b6ddc32590744b418c9184af09df132ef67bc15c05562c0b3b5c9c98272f3_prof);

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
