<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9db40ef2dacae9d39cd95da53c72985c21204329f3357badd2b9d6200eccdcc3 extends Twig_Template
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
        $__internal_a1341e71c0c074a14f2baa5bdedcd6377d2a8d3320d79d93569f8bbba81b5c14 = $this->env->getExtension("native_profiler");
        $__internal_a1341e71c0c074a14f2baa5bdedcd6377d2a8d3320d79d93569f8bbba81b5c14->enter($__internal_a1341e71c0c074a14f2baa5bdedcd6377d2a8d3320d79d93569f8bbba81b5c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a1341e71c0c074a14f2baa5bdedcd6377d2a8d3320d79d93569f8bbba81b5c14->leave($__internal_a1341e71c0c074a14f2baa5bdedcd6377d2a8d3320d79d93569f8bbba81b5c14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
