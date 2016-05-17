<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_92e69a2b2ee10c61fa384aac0896d3a1a2876fb205ddb13420f5adbdc81effc0 extends Twig_Template
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
        $__internal_486dbf914d6f7e75356ed2a2be839be2d9db8a686a4f32435806a36c7f0a0ce4 = $this->env->getExtension("native_profiler");
        $__internal_486dbf914d6f7e75356ed2a2be839be2d9db8a686a4f32435806a36c7f0a0ce4->enter($__internal_486dbf914d6f7e75356ed2a2be839be2d9db8a686a4f32435806a36c7f0a0ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_486dbf914d6f7e75356ed2a2be839be2d9db8a686a4f32435806a36c7f0a0ce4->leave($__internal_486dbf914d6f7e75356ed2a2be839be2d9db8a686a4f32435806a36c7f0a0ce4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
