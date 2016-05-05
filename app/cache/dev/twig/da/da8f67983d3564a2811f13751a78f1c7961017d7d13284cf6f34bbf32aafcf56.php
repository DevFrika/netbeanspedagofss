<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9e958282b064c0d19c4c5347c29a1c9b828c7bc1b99f7bac33f6ee4e405280e0 extends Twig_Template
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
        $__internal_aa120bbbc9e021814a38be1afeda480245fe5314ae748d4f21913847cd81ce55 = $this->env->getExtension("native_profiler");
        $__internal_aa120bbbc9e021814a38be1afeda480245fe5314ae748d4f21913847cd81ce55->enter($__internal_aa120bbbc9e021814a38be1afeda480245fe5314ae748d4f21913847cd81ce55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_aa120bbbc9e021814a38be1afeda480245fe5314ae748d4f21913847cd81ce55->leave($__internal_aa120bbbc9e021814a38be1afeda480245fe5314ae748d4f21913847cd81ce55_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
