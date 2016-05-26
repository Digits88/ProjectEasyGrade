<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a51cd3432a20dc0d468ad5b935e3d43ad500ecc0b9590ddfe364e44da1edf955 extends Twig_Template
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
        $__internal_c9f2ce006f0bf9f39c1b961f6d660fee19a14eb1b77b71b6a772bd83a081f2bf = $this->env->getExtension("native_profiler");
        $__internal_c9f2ce006f0bf9f39c1b961f6d660fee19a14eb1b77b71b6a772bd83a081f2bf->enter($__internal_c9f2ce006f0bf9f39c1b961f6d660fee19a14eb1b77b71b6a772bd83a081f2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c9f2ce006f0bf9f39c1b961f6d660fee19a14eb1b77b71b6a772bd83a081f2bf->leave($__internal_c9f2ce006f0bf9f39c1b961f6d660fee19a14eb1b77b71b6a772bd83a081f2bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
