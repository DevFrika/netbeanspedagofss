<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_2150e55cdf916fc49b099324e9d974db1797e551df29b6ae8c44ba9b1f497a79 extends Twig_Template
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
        $__internal_be488dcf01423ea2be3162bd42dc4502144e29acecb4b17c8077eb822a155873 = $this->env->getExtension("native_profiler");
        $__internal_be488dcf01423ea2be3162bd42dc4502144e29acecb4b17c8077eb822a155873->enter($__internal_be488dcf01423ea2be3162bd42dc4502144e29acecb4b17c8077eb822a155873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_be488dcf01423ea2be3162bd42dc4502144e29acecb4b17c8077eb822a155873->leave($__internal_be488dcf01423ea2be3162bd42dc4502144e29acecb4b17c8077eb822a155873_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
