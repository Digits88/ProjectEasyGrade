<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8a2c967aa1f9a8dc4023427a611507530afc492cf67329716829febddfadb251 extends Twig_Template
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
        $__internal_65f802865027de5cd9c6f1015b0525b8f9297619da75556bdd6ea1781f90c2f4 = $this->env->getExtension("native_profiler");
        $__internal_65f802865027de5cd9c6f1015b0525b8f9297619da75556bdd6ea1781f90c2f4->enter($__internal_65f802865027de5cd9c6f1015b0525b8f9297619da75556bdd6ea1781f90c2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_65f802865027de5cd9c6f1015b0525b8f9297619da75556bdd6ea1781f90c2f4->leave($__internal_65f802865027de5cd9c6f1015b0525b8f9297619da75556bdd6ea1781f90c2f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
