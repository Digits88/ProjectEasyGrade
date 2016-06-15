<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_e5a87c392be5e1000fc357b3c3ef6d14269944ca6da901b892836238d02d61a7 extends Twig_Template
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
        $__internal_11d8437f9a9c04c7d7db21ffcbad5f43dc16c92457e9eb23e32cf5d4b0622126 = $this->env->getExtension("native_profiler");
        $__internal_11d8437f9a9c04c7d7db21ffcbad5f43dc16c92457e9eb23e32cf5d4b0622126->enter($__internal_11d8437f9a9c04c7d7db21ffcbad5f43dc16c92457e9eb23e32cf5d4b0622126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["month"]) ? $context["month"] : $this->getContext($context, "month")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["day"]) ? $context["day"] : $this->getContext($context, "day")), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_11d8437f9a9c04c7d7db21ffcbad5f43dc16c92457e9eb23e32cf5d4b0622126->leave($__internal_11d8437f9a9c04c7d7db21ffcbad5f43dc16c92457e9eb23e32cf5d4b0622126_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(*/
/*             $view['form']->widget($form['year']),*/
/*             $view['form']->widget($form['month']),*/
/*             $view['form']->widget($form['day']),*/
/*         ), $date_pattern) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
