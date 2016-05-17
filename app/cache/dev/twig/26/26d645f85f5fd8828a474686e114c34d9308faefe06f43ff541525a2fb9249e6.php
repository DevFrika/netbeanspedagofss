<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_0aaa101967d59c77ed97c1d882d7abab96abf2ecbcd770b4ca3ae079cfb8481b extends Twig_Template
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
        $__internal_2cb5931df2826988493aaa3c48df8ccc3e6df901e06b25aed5ef88e72a941b4e = $this->env->getExtension("native_profiler");
        $__internal_2cb5931df2826988493aaa3c48df8ccc3e6df901e06b25aed5ef88e72a941b4e->enter($__internal_2cb5931df2826988493aaa3c48df8ccc3e6df901e06b25aed5ef88e72a941b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_2cb5931df2826988493aaa3c48df8ccc3e6df901e06b25aed5ef88e72a941b4e->leave($__internal_2cb5931df2826988493aaa3c48df8ccc3e6df901e06b25aed5ef88e72a941b4e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
