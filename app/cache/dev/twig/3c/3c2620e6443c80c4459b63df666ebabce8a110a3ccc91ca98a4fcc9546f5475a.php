<?php

/* PedagoFssUserBundle:Default:etudiant.html.twig */
class __TwigTemplate_0bc6cba0a153d54292ba6fef079134765bbfabe8945eb44f058921625f61f840 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PedagoFssUserBundle:Default:etudiant.html.twig", 1);
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
        $__internal_fed3ff207b2a91ca594c9a86438cb71b1746d3515b9fa5b8e1160e4f409db105 = $this->env->getExtension("native_profiler");
        $__internal_fed3ff207b2a91ca594c9a86438cb71b1746d3515b9fa5b8e1160e4f409db105->enter($__internal_fed3ff207b2a91ca594c9a86438cb71b1746d3515b9fa5b8e1160e4f409db105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagoFssUserBundle:Default:etudiant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fed3ff207b2a91ca594c9a86438cb71b1746d3515b9fa5b8e1160e4f409db105->leave($__internal_fed3ff207b2a91ca594c9a86438cb71b1746d3515b9fa5b8e1160e4f409db105_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4aa1b6ccdb5c4d816f9b1fc6c871eaf47cd68f5d2aff23b31fd157b0ae0dca75 = $this->env->getExtension("native_profiler");
        $__internal_4aa1b6ccdb5c4d816f9b1fc6c871eaf47cd68f5d2aff23b31fd157b0ae0dca75->enter($__internal_4aa1b6ccdb5c4d816f9b1fc6c871eaf47cd68f5d2aff23b31fd157b0ae0dca75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Utilisateur - Etudiant
";
        
        $__internal_4aa1b6ccdb5c4d816f9b1fc6c871eaf47cd68f5d2aff23b31fd157b0ae0dca75->leave($__internal_4aa1b6ccdb5c4d816f9b1fc6c871eaf47cd68f5d2aff23b31fd157b0ae0dca75_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6696673e432cb19d8bf22d3a6b06748cc0d119a93b008c5ca41cb2cab39dd19a = $this->env->getExtension("native_profiler");
        $__internal_6696673e432cb19d8bf22d3a6b06748cc0d119a93b008c5ca41cb2cab39dd19a->enter($__internal_6696673e432cb19d8bf22d3a6b06748cc0d119a93b008c5ca41cb2cab39dd19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2>Utilisateur - Page Etudiant </h2>

<p>
Page en construction
</p>

";
        
        $__internal_6696673e432cb19d8bf22d3a6b06748cc0d119a93b008c5ca41cb2cab39dd19a->leave($__internal_6696673e432cb19d8bf22d3a6b06748cc0d119a93b008c5ca41cb2cab39dd19a_prof);

    }

    public function getTemplateName()
    {
        return "PedagoFssUserBundle:Default:etudiant.html.twig";
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
/* Utilisateur - Etudiant*/
/* {% endblock %}*/
/* {% block body %}*/
/* <h2>Utilisateur - Page Etudiant </h2>*/
/* */
/* <p>*/
/* Page en construction*/
/* </p>*/
/* */
/* {% endblock %}*/
