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
        $__internal_de91d8cf73a97171d5e35c11cae4ac353909bfdd694d43c14b216f81d1baaf75 = $this->env->getExtension("native_profiler");
        $__internal_de91d8cf73a97171d5e35c11cae4ac353909bfdd694d43c14b216f81d1baaf75->enter($__internal_de91d8cf73a97171d5e35c11cae4ac353909bfdd694d43c14b216f81d1baaf75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_de91d8cf73a97171d5e35c11cae4ac353909bfdd694d43c14b216f81d1baaf75->leave($__internal_de91d8cf73a97171d5e35c11cae4ac353909bfdd694d43c14b216f81d1baaf75_prof);

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
