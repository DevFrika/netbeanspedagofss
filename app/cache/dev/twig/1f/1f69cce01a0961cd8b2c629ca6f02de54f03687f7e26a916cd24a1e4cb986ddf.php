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
        $__internal_279eda6300c4106fce78ff3b2ae298d86d095171e36f0c77f5b0049ea3d27dba = $this->env->getExtension("native_profiler");
        $__internal_279eda6300c4106fce78ff3b2ae298d86d095171e36f0c77f5b0049ea3d27dba->enter($__internal_279eda6300c4106fce78ff3b2ae298d86d095171e36f0c77f5b0049ea3d27dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_279eda6300c4106fce78ff3b2ae298d86d095171e36f0c77f5b0049ea3d27dba->leave($__internal_279eda6300c4106fce78ff3b2ae298d86d095171e36f0c77f5b0049ea3d27dba_prof);

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
