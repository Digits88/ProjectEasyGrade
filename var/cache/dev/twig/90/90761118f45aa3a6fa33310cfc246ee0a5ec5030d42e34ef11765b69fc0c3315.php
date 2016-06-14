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
        $__internal_83af9680eadc90f98a0f542b52789606e72cebb17d6a13e628b7bc13c832166d = $this->env->getExtension("native_profiler");
        $__internal_83af9680eadc90f98a0f542b52789606e72cebb17d6a13e628b7bc13c832166d->enter($__internal_83af9680eadc90f98a0f542b52789606e72cebb17d6a13e628b7bc13c832166d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_83af9680eadc90f98a0f542b52789606e72cebb17d6a13e628b7bc13c832166d->leave($__internal_83af9680eadc90f98a0f542b52789606e72cebb17d6a13e628b7bc13c832166d_prof);

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
