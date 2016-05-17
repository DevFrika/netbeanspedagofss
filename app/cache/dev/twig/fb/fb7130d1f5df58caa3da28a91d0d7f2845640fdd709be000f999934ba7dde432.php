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
        $__internal_c36f8b5e603aa9fa4a1a6ceefc1b99432435d3b97ddc874903c17fc0571433dc = $this->env->getExtension("native_profiler");
        $__internal_c36f8b5e603aa9fa4a1a6ceefc1b99432435d3b97ddc874903c17fc0571433dc->enter($__internal_c36f8b5e603aa9fa4a1a6ceefc1b99432435d3b97ddc874903c17fc0571433dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_c36f8b5e603aa9fa4a1a6ceefc1b99432435d3b97ddc874903c17fc0571433dc->leave($__internal_c36f8b5e603aa9fa4a1a6ceefc1b99432435d3b97ddc874903c17fc0571433dc_prof);

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
