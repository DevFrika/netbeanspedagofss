<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_848ab1e9547eba02d7ef8d61ce717cc9480b0f6966d50d09a20bd8b2b05f8506 extends Twig_Template
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
        $__internal_eef71f5174ce26bf886745fb0f1b6d1f7039dcf1d358715938db4badb4742c38 = $this->env->getExtension("native_profiler");
        $__internal_eef71f5174ce26bf886745fb0f1b6d1f7039dcf1d358715938db4badb4742c38->enter($__internal_eef71f5174ce26bf886745fb0f1b6d1f7039dcf1d358715938db4badb4742c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_eef71f5174ce26bf886745fb0f1b6d1f7039dcf1d358715938db4badb4742c38->leave($__internal_eef71f5174ce26bf886745fb0f1b6d1f7039dcf1d358715938db4badb4742c38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
