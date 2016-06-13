<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_403c3c86716a8af913c7aa328487b78582208cc1200671b18b62a3ea81f30f3d extends Twig_Template
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
        $__internal_0ed52d4be0b1cfb6bf228da2c421e1fe50a1f5580cc4ced93c2eb7bb38f9a6dc = $this->env->getExtension("native_profiler");
        $__internal_0ed52d4be0b1cfb6bf228da2c421e1fe50a1f5580cc4ced93c2eb7bb38f9a6dc->enter($__internal_0ed52d4be0b1cfb6bf228da2c421e1fe50a1f5580cc4ced93c2eb7bb38f9a6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0ed52d4be0b1cfb6bf228da2c421e1fe50a1f5580cc4ced93c2eb7bb38f9a6dc->leave($__internal_0ed52d4be0b1cfb6bf228da2c421e1fe50a1f5580cc4ced93c2eb7bb38f9a6dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
