<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_56bc7f0e64f2328eb961cd75ef5237b09735be334eea629c8c3ee969cedb4ff4 extends Twig_Template
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
        $__internal_0d06733b47e3fae6c7ba834d751bb2a10ffd489c9420e583baaa0e3688794404 = $this->env->getExtension("native_profiler");
        $__internal_0d06733b47e3fae6c7ba834d751bb2a10ffd489c9420e583baaa0e3688794404->enter($__internal_0d06733b47e3fae6c7ba834d751bb2a10ffd489c9420e583baaa0e3688794404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0d06733b47e3fae6c7ba834d751bb2a10ffd489c9420e583baaa0e3688794404->leave($__internal_0d06733b47e3fae6c7ba834d751bb2a10ffd489c9420e583baaa0e3688794404_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
