<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_fc7c294c37708ee6f8e108eb404b693546447ab0db1fd4b182704cc46639773c extends Twig_Template
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
        $__internal_5cbb67161251993083272d8861f5bd109772da3817c5834d04125beeb4683b42 = $this->env->getExtension("native_profiler");
        $__internal_5cbb67161251993083272d8861f5bd109772da3817c5834d04125beeb4683b42->enter($__internal_5cbb67161251993083272d8861f5bd109772da3817c5834d04125beeb4683b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5cbb67161251993083272d8861f5bd109772da3817c5834d04125beeb4683b42->leave($__internal_5cbb67161251993083272d8861f5bd109772da3817c5834d04125beeb4683b42_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
