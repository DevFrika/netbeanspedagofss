<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4c1826c667fa713a8c2a7b22e4ea65d5e4000ef4f245e63890745b90188cb0fd extends Twig_Template
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
        $__internal_ff6c4919323d8fc561e263d1f76889b442b8e246fd578d28d7b185c03babde5e = $this->env->getExtension("native_profiler");
        $__internal_ff6c4919323d8fc561e263d1f76889b442b8e246fd578d28d7b185c03babde5e->enter($__internal_ff6c4919323d8fc561e263d1f76889b442b8e246fd578d28d7b185c03babde5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ff6c4919323d8fc561e263d1f76889b442b8e246fd578d28d7b185c03babde5e->leave($__internal_ff6c4919323d8fc561e263d1f76889b442b8e246fd578d28d7b185c03babde5e_prof);

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
