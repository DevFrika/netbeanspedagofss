<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0c950ac583288da0cb11bc7594f7c55bcc01201bfb5a4fc5764071effbc33677 extends Twig_Template
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
        $__internal_70246f3945fd9e90e067885b64219399fb6b148b9c71d984a40bb5dd48ffa3aa = $this->env->getExtension("native_profiler");
        $__internal_70246f3945fd9e90e067885b64219399fb6b148b9c71d984a40bb5dd48ffa3aa->enter($__internal_70246f3945fd9e90e067885b64219399fb6b148b9c71d984a40bb5dd48ffa3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_70246f3945fd9e90e067885b64219399fb6b148b9c71d984a40bb5dd48ffa3aa->leave($__internal_70246f3945fd9e90e067885b64219399fb6b148b9c71d984a40bb5dd48ffa3aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
