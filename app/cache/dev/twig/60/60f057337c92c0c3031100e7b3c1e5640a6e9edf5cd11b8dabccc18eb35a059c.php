<?php

/* TestBundle:Default:index.html.twig */
class __TwigTemplate_b58da73be75a389f0fddad6dce68e065cd97d3246b9044d379217beb4dab6476 extends Twig_Template
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
        $__internal_8e60a374f812e3042a915c39d8a6ecc6cc1bd5eb05be219030481fb85c9784fa = $this->env->getExtension("native_profiler");
        $__internal_8e60a374f812e3042a915c39d8a6ecc6cc1bd5eb05be219030481fb85c9784fa->enter($__internal_8e60a374f812e3042a915c39d8a6ecc6cc1bd5eb05be219030481fb85c9784fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:index.html.twig"));

        // line 1
        echo "
<html>
\t<body>
\t\tHello ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " !
\t</body>
</html>";
        
        $__internal_8e60a374f812e3042a915c39d8a6ecc6cc1bd5eb05be219030481fb85c9784fa->leave($__internal_8e60a374f812e3042a915c39d8a6ecc6cc1bd5eb05be219030481fb85c9784fa_prof);

    }

    public function getTemplateName()
    {
        return "TestBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* */
/* <html>*/
/* 	<body>*/
/* 		Hello {{ name }} !*/
/* 	</body>*/
/* </html>*/
