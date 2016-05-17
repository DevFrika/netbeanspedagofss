<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_06218d237e3b211ea6f80d9f789c24914affdaf2bedbd5185f4a74d194e6ad46 extends Twig_Template
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
        $__internal_6411ce35e3aafa0053517e7e4640941e69d8707f0963d915542e59720e5aaa7c = $this->env->getExtension("native_profiler");
        $__internal_6411ce35e3aafa0053517e7e4640941e69d8707f0963d915542e59720e5aaa7c->enter($__internal_6411ce35e3aafa0053517e7e4640941e69d8707f0963d915542e59720e5aaa7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6411ce35e3aafa0053517e7e4640941e69d8707f0963d915542e59720e5aaa7c->leave($__internal_6411ce35e3aafa0053517e7e4640941e69d8707f0963d915542e59720e5aaa7c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
