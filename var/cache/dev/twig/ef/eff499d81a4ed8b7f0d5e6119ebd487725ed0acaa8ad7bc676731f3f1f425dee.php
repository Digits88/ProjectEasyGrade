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
        $__internal_63c4310563d919425f98a1b5b1a1a257a4a4a80fc9c027e91420ac327e96b201 = $this->env->getExtension("native_profiler");
        $__internal_63c4310563d919425f98a1b5b1a1a257a4a4a80fc9c027e91420ac327e96b201->enter($__internal_63c4310563d919425f98a1b5b1a1a257a4a4a80fc9c027e91420ac327e96b201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_63c4310563d919425f98a1b5b1a1a257a4a4a80fc9c027e91420ac327e96b201->leave($__internal_63c4310563d919425f98a1b5b1a1a257a4a4a80fc9c027e91420ac327e96b201_prof);

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
