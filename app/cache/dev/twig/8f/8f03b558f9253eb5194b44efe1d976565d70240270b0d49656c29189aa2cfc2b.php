<?php

/* @App/Default/index.html.twig */
class __TwigTemplate_b4c671769e372e65925f8c6c1419c72394f20b648beba228170ebc78dace1e52 extends Twig_Template
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
        $__internal_5142917367ffd8122cd0b677f6bff79ed65a89a8d923575c9c29b90cfab27c1e = $this->env->getExtension("native_profiler");
        $__internal_5142917367ffd8122cd0b677f6bff79ed65a89a8d923575c9c29b90cfab27c1e->enter($__internal_5142917367ffd8122cd0b677f6bff79ed65a89a8d923575c9c29b90cfab27c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Default/index.html.twig"));

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
        
        $__internal_5142917367ffd8122cd0b677f6bff79ed65a89a8d923575c9c29b90cfab27c1e->leave($__internal_5142917367ffd8122cd0b677f6bff79ed65a89a8d923575c9c29b90cfab27c1e_prof);

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
        return array (  27 => 4,  22 => 1,);
    }
}
/* */
/* <html>*/
/* 	<body>*/
/* 		Hello {{ name }} !*/
/* 	</body>*/
/* </html>*/
