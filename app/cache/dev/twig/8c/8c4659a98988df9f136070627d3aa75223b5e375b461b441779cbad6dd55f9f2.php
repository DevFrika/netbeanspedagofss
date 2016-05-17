<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5fe4230e34d9be338e0340fe33bb81c7522e1a095037ad34495ff742a6b83c45 extends Twig_Template
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
        $__internal_a2e0ebf8adb5b1048a5d929f7ebe4dcf37a763eb9ae04314c0f920e841e1d0f8 = $this->env->getExtension("native_profiler");
        $__internal_a2e0ebf8adb5b1048a5d929f7ebe4dcf37a763eb9ae04314c0f920e841e1d0f8->enter($__internal_a2e0ebf8adb5b1048a5d929f7ebe4dcf37a763eb9ae04314c0f920e841e1d0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a2e0ebf8adb5b1048a5d929f7ebe4dcf37a763eb9ae04314c0f920e841e1d0f8->leave($__internal_a2e0ebf8adb5b1048a5d929f7ebe4dcf37a763eb9ae04314c0f920e841e1d0f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
