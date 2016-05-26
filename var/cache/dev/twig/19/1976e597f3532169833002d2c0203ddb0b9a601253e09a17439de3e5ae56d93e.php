<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_ebd771e8b1f2dda15f15d8ed1e3f22af6a4115c15222c9dcc48ce30f0c5b9d78 extends Twig_Template
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
        $__internal_2b1dc8976f931e0c625f40fbae0ee7bf622a839c40b8bcb1c8b9cd95b0694498 = $this->env->getExtension("native_profiler");
        $__internal_2b1dc8976f931e0c625f40fbae0ee7bf622a839c40b8bcb1c8b9cd95b0694498->enter($__internal_2b1dc8976f931e0c625f40fbae0ee7bf622a839c40b8bcb1c8b9cd95b0694498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_2b1dc8976f931e0c625f40fbae0ee7bf622a839c40b8bcb1c8b9cd95b0694498->leave($__internal_2b1dc8976f931e0c625f40fbae0ee7bf622a839c40b8bcb1c8b9cd95b0694498_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
