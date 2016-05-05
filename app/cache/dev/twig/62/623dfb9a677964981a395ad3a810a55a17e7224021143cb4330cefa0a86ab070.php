<?php

/* @PedagoFssUser/Default/index.html.twig */
class __TwigTemplate_ae31db69e9adea88b7172eeb69ebb35c3aae78ba58f512641a6f511c1e5cdeae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@PedagoFssUser/Default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04cd4e2bc93872a485676223c4f2b0022d224957f3b05a8f66f126fd9b839d92 = $this->env->getExtension("native_profiler");
        $__internal_04cd4e2bc93872a485676223c4f2b0022d224957f3b05a8f66f126fd9b839d92->enter($__internal_04cd4e2bc93872a485676223c4f2b0022d224957f3b05a8f66f126fd9b839d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagoFssUser/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04cd4e2bc93872a485676223c4f2b0022d224957f3b05a8f66f126fd9b839d92->leave($__internal_04cd4e2bc93872a485676223c4f2b0022d224957f3b05a8f66f126fd9b839d92_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_229eb876d864ef4f9f90e717b6ea34320ecfe12d5b43613b0e311bc06ee740ba = $this->env->getExtension("native_profiler");
        $__internal_229eb876d864ef4f9f90e717b6ea34320ecfe12d5b43613b0e311bc06ee740ba->enter($__internal_229eb876d864ef4f9f90e717b6ea34320ecfe12d5b43613b0e311bc06ee740ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Utilisateur 
";
        
        $__internal_229eb876d864ef4f9f90e717b6ea34320ecfe12d5b43613b0e311bc06ee740ba->leave($__internal_229eb876d864ef4f9f90e717b6ea34320ecfe12d5b43613b0e311bc06ee740ba_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c3d30dbef227371b893b83e78ae1f3bd29ec6d686de4f7ee280fda577dc07e1 = $this->env->getExtension("native_profiler");
        $__internal_7c3d30dbef227371b893b83e78ae1f3bd29ec6d686de4f7ee280fda577dc07e1->enter($__internal_7c3d30dbef227371b893b83e78ae1f3bd29ec6d686de4f7ee280fda577dc07e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2>Utilisateur - Page Normale </h2>

<p>
Page en construction
</p>

";
        
        $__internal_7c3d30dbef227371b893b83e78ae1f3bd29ec6d686de4f7ee280fda577dc07e1->leave($__internal_7c3d30dbef227371b893b83e78ae1f3bd29ec6d686de4f7ee280fda577dc07e1_prof);

    }

    public function getTemplateName()
    {
        return "@PedagoFssUser/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block title %}*/
/* Utilisateur */
/* {% endblock %}*/
/* {% block body %}*/
/* <h2>Utilisateur - Page Normale </h2>*/
/* */
/* <p>*/
/* Page en construction*/
/* </p>*/
/* */
/* {% endblock %}*/
