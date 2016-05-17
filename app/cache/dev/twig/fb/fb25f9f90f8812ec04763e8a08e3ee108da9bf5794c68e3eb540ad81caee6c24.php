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
        $__internal_c333f829a61679ec5875bee6c4b1f368ca968288cc5724c4b4f66238ea913598 = $this->env->getExtension("native_profiler");
        $__internal_c333f829a61679ec5875bee6c4b1f368ca968288cc5724c4b4f66238ea913598->enter($__internal_c333f829a61679ec5875bee6c4b1f368ca968288cc5724c4b4f66238ea913598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_c333f829a61679ec5875bee6c4b1f368ca968288cc5724c4b4f66238ea913598->leave($__internal_c333f829a61679ec5875bee6c4b1f368ca968288cc5724c4b4f66238ea913598_prof);

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
