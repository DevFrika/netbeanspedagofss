<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_678b73196499ed2f750a88b952f9cd3400fa6b93374e276faeaae8af2b2afd4f extends Twig_Template
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
        $__internal_deff6387afc606c3bdcd08399c1966c7842f08a033482ea9fa630863ade5c1f0 = $this->env->getExtension("native_profiler");
        $__internal_deff6387afc606c3bdcd08399c1966c7842f08a033482ea9fa630863ade5c1f0->enter($__internal_deff6387afc606c3bdcd08399c1966c7842f08a033482ea9fa630863ade5c1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_deff6387afc606c3bdcd08399c1966c7842f08a033482ea9fa630863ade5c1f0->leave($__internal_deff6387afc606c3bdcd08399c1966c7842f08a033482ea9fa630863ade5c1f0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
