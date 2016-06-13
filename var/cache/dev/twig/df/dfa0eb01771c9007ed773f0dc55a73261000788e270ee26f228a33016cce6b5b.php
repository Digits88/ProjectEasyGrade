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
        $__internal_54b8322baeff0aaa7d7d73712ca12193f66dca2e3f186b41d9945fd1178d0e76 = $this->env->getExtension("native_profiler");
        $__internal_54b8322baeff0aaa7d7d73712ca12193f66dca2e3f186b41d9945fd1178d0e76->enter($__internal_54b8322baeff0aaa7d7d73712ca12193f66dca2e3f186b41d9945fd1178d0e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_54b8322baeff0aaa7d7d73712ca12193f66dca2e3f186b41d9945fd1178d0e76->leave($__internal_54b8322baeff0aaa7d7d73712ca12193f66dca2e3f186b41d9945fd1178d0e76_prof);

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
