<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_de9dcff218950b5da84cd9ad9efe430637fbd3fcfeca138d4eb18ef1da2847a1 extends Twig_Template
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
        $__internal_670d5f949b666844cfee97225d361cd49eb7fc5b88d59cf8afc817ac35415258 = $this->env->getExtension("native_profiler");
        $__internal_670d5f949b666844cfee97225d361cd49eb7fc5b88d59cf8afc817ac35415258->enter($__internal_670d5f949b666844cfee97225d361cd49eb7fc5b88d59cf8afc817ac35415258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_670d5f949b666844cfee97225d361cd49eb7fc5b88d59cf8afc817ac35415258->leave($__internal_670d5f949b666844cfee97225d361cd49eb7fc5b88d59cf8afc817ac35415258_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
