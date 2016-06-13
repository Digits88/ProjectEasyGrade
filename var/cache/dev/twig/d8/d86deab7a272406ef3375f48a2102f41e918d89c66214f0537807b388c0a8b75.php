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
        $__internal_cea38c57f3e34852d8d46bfd69bd57f40d12ec2bb20ef13075d5ae59bf186bc7 = $this->env->getExtension("native_profiler");
        $__internal_cea38c57f3e34852d8d46bfd69bd57f40d12ec2bb20ef13075d5ae59bf186bc7->enter($__internal_cea38c57f3e34852d8d46bfd69bd57f40d12ec2bb20ef13075d5ae59bf186bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_cea38c57f3e34852d8d46bfd69bd57f40d12ec2bb20ef13075d5ae59bf186bc7->leave($__internal_cea38c57f3e34852d8d46bfd69bd57f40d12ec2bb20ef13075d5ae59bf186bc7_prof);

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
