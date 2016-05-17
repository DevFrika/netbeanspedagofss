<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_1ef999964edee31528ccc83c0f44a02e9c1b4468a749f9e38d8f757aa9366039 extends Twig_Template
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
        $__internal_fcdbdcbc860cc68dbb400c82c0b392a3c3d567bc5dbafde3b84bf72d5e0d3e24 = $this->env->getExtension("native_profiler");
        $__internal_fcdbdcbc860cc68dbb400c82c0b392a3c3d567bc5dbafde3b84bf72d5e0d3e24->enter($__internal_fcdbdcbc860cc68dbb400c82c0b392a3c3d567bc5dbafde3b84bf72d5e0d3e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

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
        
        $__internal_fcdbdcbc860cc68dbb400c82c0b392a3c3d567bc5dbafde3b84bf72d5e0d3e24->leave($__internal_fcdbdcbc860cc68dbb400c82c0b392a3c3d567bc5dbafde3b84bf72d5e0d3e24_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
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
