<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_bec66c36b1582af96fdd94b66a32b5771e4297cacf5eeab2844c880bfc3b25a4 extends Twig_Template
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
        $__internal_73c276b333a02f2000340337b1b9821e42e00c64c82ee178b0c8d14a5757b900 = $this->env->getExtension("native_profiler");
        $__internal_73c276b333a02f2000340337b1b9821e42e00c64c82ee178b0c8d14a5757b900->enter($__internal_73c276b333a02f2000340337b1b9821e42e00c64c82ee178b0c8d14a5757b900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_73c276b333a02f2000340337b1b9821e42e00c64c82ee178b0c8d14a5757b900->leave($__internal_73c276b333a02f2000340337b1b9821e42e00c64c82ee178b0c8d14a5757b900_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
