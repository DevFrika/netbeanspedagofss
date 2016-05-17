<?php

/* @Test/Default/index.html.twig */
class __TwigTemplate_bfa265493935fb1ddc689e495a76de12323659cfb39741f02c4bfbdc863c6b25 extends Twig_Template
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
        $__internal_f441420421517ec62eb33bd890bfd1b6008a29aea01ad57ae11bb3dc97f81d98 = $this->env->getExtension("native_profiler");
        $__internal_f441420421517ec62eb33bd890bfd1b6008a29aea01ad57ae11bb3dc97f81d98->enter($__internal_f441420421517ec62eb33bd890bfd1b6008a29aea01ad57ae11bb3dc97f81d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Test/Default/index.html.twig"));

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
        
        $__internal_f441420421517ec62eb33bd890bfd1b6008a29aea01ad57ae11bb3dc97f81d98->leave($__internal_f441420421517ec62eb33bd890bfd1b6008a29aea01ad57ae11bb3dc97f81d98_prof);

    }

    public function getTemplateName()
    {
        return "@Test/Default/index.html.twig";
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
