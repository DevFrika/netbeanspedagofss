<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a5a54542d0d8053a363651ae72b0e501153afbb6b99838fbd8221add179e9309 extends Twig_Template
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
        $__internal_22336543a310b07c7f0a99246e8d25d3d55699575ebb04b3f093795274312482 = $this->env->getExtension("native_profiler");
        $__internal_22336543a310b07c7f0a99246e8d25d3d55699575ebb04b3f093795274312482->enter($__internal_22336543a310b07c7f0a99246e8d25d3d55699575ebb04b3f093795274312482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_22336543a310b07c7f0a99246e8d25d3d55699575ebb04b3f093795274312482->leave($__internal_22336543a310b07c7f0a99246e8d25d3d55699575ebb04b3f093795274312482_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
