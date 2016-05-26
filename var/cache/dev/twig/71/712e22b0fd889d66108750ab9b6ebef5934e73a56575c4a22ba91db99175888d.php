<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_90779edba507068afe03cd92bab5218c28fe78cf6b037448b08e8d24c70862aa extends Twig_Template
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
        $__internal_d8494757bdd9f08c0ffb7006d62287f7ce62f1f21bd6dc6b41377d41755da6f4 = $this->env->getExtension("native_profiler");
        $__internal_d8494757bdd9f08c0ffb7006d62287f7ce62f1f21bd6dc6b41377d41755da6f4->enter($__internal_d8494757bdd9f08c0ffb7006d62287f7ce62f1f21bd6dc6b41377d41755da6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_d8494757bdd9f08c0ffb7006d62287f7ce62f1f21bd6dc6b41377d41755da6f4->leave($__internal_d8494757bdd9f08c0ffb7006d62287f7ce62f1f21bd6dc6b41377d41755da6f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
