<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_1632a1666a4644b6b666f959db8a43b3700282bebaa6a703b81c0dcf06401808 extends Twig_Template
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
        $__internal_cc6ea668976af6eea603cb89aad070f4177a2bdb0f913b1a68df2233805bfcb2 = $this->env->getExtension("native_profiler");
        $__internal_cc6ea668976af6eea603cb89aad070f4177a2bdb0f913b1a68df2233805bfcb2->enter($__internal_cc6ea668976af6eea603cb89aad070f4177a2bdb0f913b1a68df2233805bfcb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_cc6ea668976af6eea603cb89aad070f4177a2bdb0f913b1a68df2233805bfcb2->leave($__internal_cc6ea668976af6eea603cb89aad070f4177a2bdb0f913b1a68df2233805bfcb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
