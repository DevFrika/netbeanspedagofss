<?php

/* @Test/Default/index.html.twig */
class __TwigTemplate_170c60ab0e663c2a38416b674749ef644157200db48925056328645fb14e4ed0 extends Twig_Template
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
        return "@Test/Default/index.html.twig";
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