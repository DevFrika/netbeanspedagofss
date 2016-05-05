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
        $__internal_2c67a2b4dfbaa16c3e10d810b260dc20acbfaf4d034c9e11273b9cc0c49146a9 = $this->env->getExtension("native_profiler");
        $__internal_2c67a2b4dfbaa16c3e10d810b260dc20acbfaf4d034c9e11273b9cc0c49146a9->enter($__internal_2c67a2b4dfbaa16c3e10d810b260dc20acbfaf4d034c9e11273b9cc0c49146a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_2c67a2b4dfbaa16c3e10d810b260dc20acbfaf4d034c9e11273b9cc0c49146a9->leave($__internal_2c67a2b4dfbaa16c3e10d810b260dc20acbfaf4d034c9e11273b9cc0c49146a9_prof);

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
