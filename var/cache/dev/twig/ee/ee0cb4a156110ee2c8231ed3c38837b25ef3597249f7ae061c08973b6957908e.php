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
        $__internal_53d9d4cde8b171560f1078e4f8e8c17d357d95582e4ec087922188b2ef6cf5ff = $this->env->getExtension("native_profiler");
        $__internal_53d9d4cde8b171560f1078e4f8e8c17d357d95582e4ec087922188b2ef6cf5ff->enter($__internal_53d9d4cde8b171560f1078e4f8e8c17d357d95582e4ec087922188b2ef6cf5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_53d9d4cde8b171560f1078e4f8e8c17d357d95582e4ec087922188b2ef6cf5ff->leave($__internal_53d9d4cde8b171560f1078e4f8e8c17d357d95582e4ec087922188b2ef6cf5ff_prof);

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
