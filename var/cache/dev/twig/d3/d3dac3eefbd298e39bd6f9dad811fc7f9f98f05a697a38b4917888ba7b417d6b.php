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
        $__internal_a00c7031ea492419493f6b43458da54e5fc52325d14141f36ec70754eaeeecef = $this->env->getExtension("native_profiler");
        $__internal_a00c7031ea492419493f6b43458da54e5fc52325d14141f36ec70754eaeeecef->enter($__internal_a00c7031ea492419493f6b43458da54e5fc52325d14141f36ec70754eaeeecef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_a00c7031ea492419493f6b43458da54e5fc52325d14141f36ec70754eaeeecef->leave($__internal_a00c7031ea492419493f6b43458da54e5fc52325d14141f36ec70754eaeeecef_prof);

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
