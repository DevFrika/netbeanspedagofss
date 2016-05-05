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
        $__internal_21a94461d8b1b69992ac476d65c43a7e3e82e1146588ebea50a6b78fdb9a9024 = $this->env->getExtension("native_profiler");
        $__internal_21a94461d8b1b69992ac476d65c43a7e3e82e1146588ebea50a6b78fdb9a9024->enter($__internal_21a94461d8b1b69992ac476d65c43a7e3e82e1146588ebea50a6b78fdb9a9024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_21a94461d8b1b69992ac476d65c43a7e3e82e1146588ebea50a6b78fdb9a9024->leave($__internal_21a94461d8b1b69992ac476d65c43a7e3e82e1146588ebea50a6b78fdb9a9024_prof);

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
