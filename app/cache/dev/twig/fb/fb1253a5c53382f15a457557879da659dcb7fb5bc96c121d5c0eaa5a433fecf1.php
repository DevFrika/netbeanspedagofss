<?php

/* FssWebsiteDepartementBundle:Default:etudiantindexdep.html.twig */
class __TwigTemplate_e51b455db3c3d70ea7fc220292b35ed7f2158166fb9b70479eb00e9f75e2e8c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "FssWebsiteDepartementBundle:Default:etudiantindexdep.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FssWebsiteDepartementBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77547dd87a98245beecafe5922ee418d2adc9f7384131cfe99a2cf5ed66b92d2 = $this->env->getExtension("native_profiler");
        $__internal_77547dd87a98245beecafe5922ee418d2adc9f7384131cfe99a2cf5ed66b92d2->enter($__internal_77547dd87a98245beecafe5922ee418d2adc9f7384131cfe99a2cf5ed66b92d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FssWebsiteDepartementBundle:Default:etudiantindexdep.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77547dd87a98245beecafe5922ee418d2adc9f7384131cfe99a2cf5ed66b92d2->leave($__internal_77547dd87a98245beecafe5922ee418d2adc9f7384131cfe99a2cf5ed66b92d2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e36554009ba295c982eb822d75b4a759d1bd8e5ab10ee254c932e734e4ae41b8 = $this->env->getExtension("native_profiler");
        $__internal_e36554009ba295c982eb822d75b4a759d1bd8e5ab10ee254c932e734e4ae41b8->enter($__internal_e36554009ba295c982eb822d75b4a759d1bd8e5ab10ee254c932e734e4ae41b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Normale
";
        
        $__internal_e36554009ba295c982eb822d75b4a759d1bd8e5ab10ee254c932e734e4ae41b8->leave($__internal_e36554009ba295c982eb822d75b4a759d1bd8e5ab10ee254c932e734e4ae41b8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7afbc3a8d68ccf8e2736725f82ebcd08cfbe04566bbc532cafac6837abb0ccb1 = $this->env->getExtension("native_profiler");
        $__internal_7afbc3a8d68ccf8e2736725f82ebcd08cfbe04566bbc532cafac6837abb0ccb1->enter($__internal_7afbc3a8d68ccf8e2736725f82ebcd08cfbe04566bbc532cafac6837abb0ccb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


<h2>Departement - Page quelconque etudiant - Page en construction </h2>

       



";
        
        $__internal_7afbc3a8d68ccf8e2736725f82ebcd08cfbe04566bbc532cafac6837abb0ccb1->leave($__internal_7afbc3a8d68ccf8e2736725f82ebcd08cfbe04566bbc532cafac6837abb0ccb1_prof);

    }

    public function getTemplateName()
    {
        return "FssWebsiteDepartementBundle:Default:etudiantindexdep.html.twig";
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
/* {% extends "FssWebsiteDepartementBundle::layout.html.twig" %}*/
/* {% block title %}*/
/* Departement - Normale*/
/* {% endblock %}*/
/* {% block body %}*/
/* */
/* */
/* */
/* <h2>Departement - Page quelconque etudiant - Page en construction </h2>*/
/* */
/*        */
/* */
/* */
/* */
/* {% endblock %}*/
