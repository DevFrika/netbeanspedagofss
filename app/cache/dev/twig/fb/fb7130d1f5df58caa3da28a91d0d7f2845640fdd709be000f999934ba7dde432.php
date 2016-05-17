<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_a84b8f00550345d26c3103d01540a27b695026829378b7fe5670c5ae25cde82b extends Twig_Template
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
        $__internal_000c12e9221544103ed457fe0fd61565cb936271d8a05e6f315a9805dc539229 = $this->env->getExtension("native_profiler");
        $__internal_000c12e9221544103ed457fe0fd61565cb936271d8a05e6f315a9805dc539229->enter($__internal_000c12e9221544103ed457fe0fd61565cb936271d8a05e6f315a9805dc539229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_000c12e9221544103ed457fe0fd61565cb936271d8a05e6f315a9805dc539229->leave($__internal_000c12e9221544103ed457fe0fd61565cb936271d8a05e6f315a9805dc539229_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
