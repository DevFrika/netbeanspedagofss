<?php

/* @App/Default/index.html.twig */
class __TwigTemplate_fa1278cd5311e50ce55fa8d1a931e3feaf826663c53ea34f179db3ac6ca018f3 extends Twig_Template
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
        // line 1
        echo "
<html>
\t<body>
\t\tHello ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo " !
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "@App/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
/* */
/* <html>*/
/* 	<body>*/
/* 		Hello {{ name }} !*/
/* 	</body>*/
/* </html>*/
