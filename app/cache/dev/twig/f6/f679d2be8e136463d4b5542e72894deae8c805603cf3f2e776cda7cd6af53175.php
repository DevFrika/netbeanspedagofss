<?php

/* TestBundle:MyApp:index.html.twig */
class __TwigTemplate_b6bde9f42db16884e0dcc2d0f9709025a44daafb13949bd8deeffeadf263bbf8 extends Twig_Template
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
        $__internal_65d93d584e39b771ae50e378d3b410f0f4163250ba3833f172dc74fb789a757a = $this->env->getExtension("native_profiler");
        $__internal_65d93d584e39b771ae50e378d3b410f0f4163250ba3833f172dc74fb789a757a->enter($__internal_65d93d584e39b771ae50e378d3b410f0f4163250ba3833f172dc74fb789a757a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:MyApp:index.html.twig"));

        // line 1
        echo "
<html>
\t<body>
\t\tHello World !
\t</body>
</html>";
        
        $__internal_65d93d584e39b771ae50e378d3b410f0f4163250ba3833f172dc74fb789a757a->leave($__internal_65d93d584e39b771ae50e378d3b410f0f4163250ba3833f172dc74fb789a757a_prof);

    }

    public function getTemplateName()
    {
        return "TestBundle:MyApp:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* */
/* <html>*/
/* 	<body>*/
/* 		Hello World !*/
/* 	</body>*/
/* </html>*/
