<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_f3c742c58bd442a86026d51dca625611a6757d7c5dd0e5d55931a1adee41361a extends Twig_Template
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
        $__internal_142a515f85761d815ab6c6523bf2aa7cdac08cb9c8fef97f3a6be48c8189ad6b = $this->env->getExtension("native_profiler");
        $__internal_142a515f85761d815ab6c6523bf2aa7cdac08cb9c8fef97f3a6be48c8189ad6b->enter($__internal_142a515f85761d815ab6c6523bf2aa7cdac08cb9c8fef97f3a6be48c8189ad6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_142a515f85761d815ab6c6523bf2aa7cdac08cb9c8fef97f3a6be48c8189ad6b->leave($__internal_142a515f85761d815ab6c6523bf2aa7cdac08cb9c8fef97f3a6be48c8189ad6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
