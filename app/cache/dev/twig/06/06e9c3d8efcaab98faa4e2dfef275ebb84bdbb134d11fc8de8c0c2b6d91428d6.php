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
        $__internal_9b46cc0621b34ee5c844b2ca29ab704ad977a0c1e0c76585866ee3e7104029cc = $this->env->getExtension("native_profiler");
        $__internal_9b46cc0621b34ee5c844b2ca29ab704ad977a0c1e0c76585866ee3e7104029cc->enter($__internal_9b46cc0621b34ee5c844b2ca29ab704ad977a0c1e0c76585866ee3e7104029cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_9b46cc0621b34ee5c844b2ca29ab704ad977a0c1e0c76585866ee3e7104029cc->leave($__internal_9b46cc0621b34ee5c844b2ca29ab704ad977a0c1e0c76585866ee3e7104029cc_prof);

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
