<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_bf5c1a48ba2bb82c50655cd3a102a45840a7059d10de17136396f5874c862f8b extends Twig_Template
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
        $__internal_8f0cba1724763b168bcb13fcd220ee48791c200705ef01290cbca3a84eae81fc = $this->env->getExtension("native_profiler");
        $__internal_8f0cba1724763b168bcb13fcd220ee48791c200705ef01290cbca3a84eae81fc->enter($__internal_8f0cba1724763b168bcb13fcd220ee48791c200705ef01290cbca3a84eae81fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8f0cba1724763b168bcb13fcd220ee48791c200705ef01290cbca3a84eae81fc->leave($__internal_8f0cba1724763b168bcb13fcd220ee48791c200705ef01290cbca3a84eae81fc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */