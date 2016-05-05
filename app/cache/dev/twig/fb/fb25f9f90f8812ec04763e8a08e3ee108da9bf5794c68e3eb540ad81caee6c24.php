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
        $__internal_a5aee3cf6dbfaa16664cdb43ae8c159d39c65b68701d40def7302819813e5202 = $this->env->getExtension("native_profiler");
        $__internal_a5aee3cf6dbfaa16664cdb43ae8c159d39c65b68701d40def7302819813e5202->enter($__internal_a5aee3cf6dbfaa16664cdb43ae8c159d39c65b68701d40def7302819813e5202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_a5aee3cf6dbfaa16664cdb43ae8c159d39c65b68701d40def7302819813e5202->leave($__internal_a5aee3cf6dbfaa16664cdb43ae8c159d39c65b68701d40def7302819813e5202_prof);

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
