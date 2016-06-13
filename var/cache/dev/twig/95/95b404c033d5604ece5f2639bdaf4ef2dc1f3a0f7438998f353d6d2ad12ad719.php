<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f8dc3638993ee8c43c3532176a9f0c484feae34d73694e0f69feb42e9a933c81 extends Twig_Template
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
        $__internal_aefc3a3a1d46f905d2afa04c329a133de95791ff83d5adafcb3ee64229463c96 = $this->env->getExtension("native_profiler");
        $__internal_aefc3a3a1d46f905d2afa04c329a133de95791ff83d5adafcb3ee64229463c96->enter($__internal_aefc3a3a1d46f905d2afa04c329a133de95791ff83d5adafcb3ee64229463c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_aefc3a3a1d46f905d2afa04c329a133de95791ff83d5adafcb3ee64229463c96->leave($__internal_aefc3a3a1d46f905d2afa04c329a133de95791ff83d5adafcb3ee64229463c96_prof);

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
