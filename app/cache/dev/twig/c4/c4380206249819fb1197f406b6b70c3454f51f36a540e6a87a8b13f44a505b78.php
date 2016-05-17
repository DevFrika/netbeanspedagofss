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
        $__internal_4a8552f1ad382590a9b459f05839e5e0c5a4af9ca239a419765570436016f388 = $this->env->getExtension("native_profiler");
        $__internal_4a8552f1ad382590a9b459f05839e5e0c5a4af9ca239a419765570436016f388->enter($__internal_4a8552f1ad382590a9b459f05839e5e0c5a4af9ca239a419765570436016f388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_4a8552f1ad382590a9b459f05839e5e0c5a4af9ca239a419765570436016f388->leave($__internal_4a8552f1ad382590a9b459f05839e5e0c5a4af9ca239a419765570436016f388_prof);

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
