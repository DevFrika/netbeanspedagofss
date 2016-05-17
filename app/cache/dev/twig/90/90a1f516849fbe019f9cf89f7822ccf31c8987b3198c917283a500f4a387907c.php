<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_34598fb9837e1e2d7f6056fb845652e60d7586888be8f214ba2b475a70523e70 extends Twig_Template
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
        $__internal_6bc97dd16707c3165d590fa869880af1aa79a307c70df46741933604f05fbb17 = $this->env->getExtension("native_profiler");
        $__internal_6bc97dd16707c3165d590fa869880af1aa79a307c70df46741933604f05fbb17->enter($__internal_6bc97dd16707c3165d590fa869880af1aa79a307c70df46741933604f05fbb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_6bc97dd16707c3165d590fa869880af1aa79a307c70df46741933604f05fbb17->leave($__internal_6bc97dd16707c3165d590fa869880af1aa79a307c70df46741933604f05fbb17_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
