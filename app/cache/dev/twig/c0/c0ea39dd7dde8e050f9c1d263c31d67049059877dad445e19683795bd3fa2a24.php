<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e0a8941f0e93f6e6ec59721e035ee17c3d23126833b1bb98c8e1a4f5c764d674 extends Twig_Template
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
        $__internal_0365cb1004d6a7eee22744032893876291212473bb40ad430c90fb485a061073 = $this->env->getExtension("native_profiler");
        $__internal_0365cb1004d6a7eee22744032893876291212473bb40ad430c90fb485a061073->enter($__internal_0365cb1004d6a7eee22744032893876291212473bb40ad430c90fb485a061073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0365cb1004d6a7eee22744032893876291212473bb40ad430c90fb485a061073->leave($__internal_0365cb1004d6a7eee22744032893876291212473bb40ad430c90fb485a061073_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
