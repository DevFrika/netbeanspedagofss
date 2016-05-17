<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_faeb30d61a8532a92f8a6d9d66d59fd0a30f789454ad3f155bf7f23d270598c5 extends Twig_Template
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
        $__internal_b12e7d0d95b38f9de9874c657f95af866cb1bf41b425eb22fee40bfb4dac32a3 = $this->env->getExtension("native_profiler");
        $__internal_b12e7d0d95b38f9de9874c657f95af866cb1bf41b425eb22fee40bfb4dac32a3->enter($__internal_b12e7d0d95b38f9de9874c657f95af866cb1bf41b425eb22fee40bfb4dac32a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b12e7d0d95b38f9de9874c657f95af866cb1bf41b425eb22fee40bfb4dac32a3->leave($__internal_b12e7d0d95b38f9de9874c657f95af866cb1bf41b425eb22fee40bfb4dac32a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
