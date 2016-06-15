<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_a688b489e114ca6b0e111b0720dde16062ebaaadeaf621c7c4cd79a58a7b0703 extends Twig_Template
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
        $__internal_20da91529b68e945c9d3b40baf228b5d4a0ba4a4d19dcaac4ce1031ee0806f40 = $this->env->getExtension("native_profiler");
        $__internal_20da91529b68e945c9d3b40baf228b5d4a0ba4a4d19dcaac4ce1031ee0806f40->enter($__internal_20da91529b68e945c9d3b40baf228b5d4a0ba4a4d19dcaac4ce1031ee0806f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_20da91529b68e945c9d3b40baf228b5d4a0ba4a4d19dcaac4ce1031ee0806f40->leave($__internal_20da91529b68e945c9d3b40baf228b5d4a0ba4a4d19dcaac4ce1031ee0806f40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
