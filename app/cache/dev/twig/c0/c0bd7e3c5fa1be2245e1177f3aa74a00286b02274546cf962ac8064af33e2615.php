<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_11bf69247312f9fe15623529983000cf83aa7c56344c9ac8319a88a5d2e1848f extends Twig_Template
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
        $__internal_aac2af0cd25de25d7fda91c4aa73336bdee72f30b4939f993bf431d89b0c93c8 = $this->env->getExtension("native_profiler");
        $__internal_aac2af0cd25de25d7fda91c4aa73336bdee72f30b4939f993bf431d89b0c93c8->enter($__internal_aac2af0cd25de25d7fda91c4aa73336bdee72f30b4939f993bf431d89b0c93c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_aac2af0cd25de25d7fda91c4aa73336bdee72f30b4939f993bf431d89b0c93c8->leave($__internal_aac2af0cd25de25d7fda91c4aa73336bdee72f30b4939f993bf431d89b0c93c8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
