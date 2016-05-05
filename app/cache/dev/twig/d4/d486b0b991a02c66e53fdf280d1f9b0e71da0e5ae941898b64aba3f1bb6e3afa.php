<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_2fd9b01720e51178bd071adf099ff9cdad42196f2b5777d4a9359eaaafc99402 extends Twig_Template
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
        $__internal_ca7f0626c25855a055cec5be6119659c1304eb08be321c4a3c0247ee02c48892 = $this->env->getExtension("native_profiler");
        $__internal_ca7f0626c25855a055cec5be6119659c1304eb08be321c4a3c0247ee02c48892->enter($__internal_ca7f0626c25855a055cec5be6119659c1304eb08be321c4a3c0247ee02c48892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ca7f0626c25855a055cec5be6119659c1304eb08be321c4a3c0247ee02c48892->leave($__internal_ca7f0626c25855a055cec5be6119659c1304eb08be321c4a3c0247ee02c48892_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
