<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_dfed2860a02c523851e028965b68ba44e0e60f6220bebf678d571e3c9503b1a4 extends Twig_Template
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
        $__internal_d947e403b9e4904a613c7c6569a0a3b4679253136f5ee0d831e04045939850a0 = $this->env->getExtension("native_profiler");
        $__internal_d947e403b9e4904a613c7c6569a0a3b4679253136f5ee0d831e04045939850a0->enter($__internal_d947e403b9e4904a613c7c6569a0a3b4679253136f5ee0d831e04045939850a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_d947e403b9e4904a613c7c6569a0a3b4679253136f5ee0d831e04045939850a0->leave($__internal_d947e403b9e4904a613c7c6569a0a3b4679253136f5ee0d831e04045939850a0_prof);

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
