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
        $__internal_92601c49edd7d6ad84b1e3b13ad447d22a78afe6bba2dc75e4e60f8898e50eda = $this->env->getExtension("native_profiler");
        $__internal_92601c49edd7d6ad84b1e3b13ad447d22a78afe6bba2dc75e4e60f8898e50eda->enter($__internal_92601c49edd7d6ad84b1e3b13ad447d22a78afe6bba2dc75e4e60f8898e50eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_92601c49edd7d6ad84b1e3b13ad447d22a78afe6bba2dc75e4e60f8898e50eda->leave($__internal_92601c49edd7d6ad84b1e3b13ad447d22a78afe6bba2dc75e4e60f8898e50eda_prof);

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
