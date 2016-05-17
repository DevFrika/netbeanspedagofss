<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_14e55a48a8d91e579b62aafabbe88913b9c49fbd9aef8d019f9795bceaf1884f extends Twig_Template
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
        $__internal_487cfc21ccb01a74bac84dd4a0d1f91cc3e3c73eaf8fad695e108d710ac1836a = $this->env->getExtension("native_profiler");
        $__internal_487cfc21ccb01a74bac84dd4a0d1f91cc3e3c73eaf8fad695e108d710ac1836a->enter($__internal_487cfc21ccb01a74bac84dd4a0d1f91cc3e3c73eaf8fad695e108d710ac1836a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_487cfc21ccb01a74bac84dd4a0d1f91cc3e3c73eaf8fad695e108d710ac1836a->leave($__internal_487cfc21ccb01a74bac84dd4a0d1f91cc3e3c73eaf8fad695e108d710ac1836a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
