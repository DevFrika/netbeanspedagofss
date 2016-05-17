<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_21a861fff4c467e69467a97e617a79c82055bdd2aeea4c568954422780f44069 extends Twig_Template
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
        $__internal_cc3a836189721dc1b26e2c940953ce3f2eeec45800bbdfc34063d69a0fff66a0 = $this->env->getExtension("native_profiler");
        $__internal_cc3a836189721dc1b26e2c940953ce3f2eeec45800bbdfc34063d69a0fff66a0->enter($__internal_cc3a836189721dc1b26e2c940953ce3f2eeec45800bbdfc34063d69a0fff66a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cc3a836189721dc1b26e2c940953ce3f2eeec45800bbdfc34063d69a0fff66a0->leave($__internal_cc3a836189721dc1b26e2c940953ce3f2eeec45800bbdfc34063d69a0fff66a0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
