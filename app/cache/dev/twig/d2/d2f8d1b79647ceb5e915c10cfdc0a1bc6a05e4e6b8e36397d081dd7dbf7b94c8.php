<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_a1f40a49f9ac43d02fbcd6f61450bd4524e2ea6d0f27d897aa0874c2a2ef7382 extends Twig_Template
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
        $__internal_013f869f7f2ac7c55025eb7fbca3b0a72c216934915ba110a38e51ea6605da56 = $this->env->getExtension("native_profiler");
        $__internal_013f869f7f2ac7c55025eb7fbca3b0a72c216934915ba110a38e51ea6605da56->enter($__internal_013f869f7f2ac7c55025eb7fbca3b0a72c216934915ba110a38e51ea6605da56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_013f869f7f2ac7c55025eb7fbca3b0a72c216934915ba110a38e51ea6605da56->leave($__internal_013f869f7f2ac7c55025eb7fbca3b0a72c216934915ba110a38e51ea6605da56_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
