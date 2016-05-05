<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e1440af78506e27f1077efaf1ee63aaf3f4476da80989b32dcec3607cf07b892 extends Twig_Template
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
        $__internal_af9ca3acd29a1ffb6abcdc825d00a8f8450f7f5400db6588bf8818be303fa8ec = $this->env->getExtension("native_profiler");
        $__internal_af9ca3acd29a1ffb6abcdc825d00a8f8450f7f5400db6588bf8818be303fa8ec->enter($__internal_af9ca3acd29a1ffb6abcdc825d00a8f8450f7f5400db6588bf8818be303fa8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_af9ca3acd29a1ffb6abcdc825d00a8f8450f7f5400db6588bf8818be303fa8ec->leave($__internal_af9ca3acd29a1ffb6abcdc825d00a8f8450f7f5400db6588bf8818be303fa8ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
