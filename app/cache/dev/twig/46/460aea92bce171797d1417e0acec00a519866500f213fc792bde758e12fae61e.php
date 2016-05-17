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
        $__internal_986f6964e6f588a74bc94b958e51253d25acc9da6cdec5e26e703915e69f2df3 = $this->env->getExtension("native_profiler");
        $__internal_986f6964e6f588a74bc94b958e51253d25acc9da6cdec5e26e703915e69f2df3->enter($__internal_986f6964e6f588a74bc94b958e51253d25acc9da6cdec5e26e703915e69f2df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_986f6964e6f588a74bc94b958e51253d25acc9da6cdec5e26e703915e69f2df3->leave($__internal_986f6964e6f588a74bc94b958e51253d25acc9da6cdec5e26e703915e69f2df3_prof);

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
