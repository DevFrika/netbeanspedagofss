<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_955accce10f1bef34dc9796e00da9fda36e8da593df7d5898a5487972cb82dad extends Twig_Template
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
        $__internal_4cc3771809fe3077c4a1cc4e4752ac225067dc3c04f3ac775ff613b077b52484 = $this->env->getExtension("native_profiler");
        $__internal_4cc3771809fe3077c4a1cc4e4752ac225067dc3c04f3ac775ff613b077b52484->enter($__internal_4cc3771809fe3077c4a1cc4e4752ac225067dc3c04f3ac775ff613b077b52484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4cc3771809fe3077c4a1cc4e4752ac225067dc3c04f3ac775ff613b077b52484->leave($__internal_4cc3771809fe3077c4a1cc4e4752ac225067dc3c04f3ac775ff613b077b52484_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
