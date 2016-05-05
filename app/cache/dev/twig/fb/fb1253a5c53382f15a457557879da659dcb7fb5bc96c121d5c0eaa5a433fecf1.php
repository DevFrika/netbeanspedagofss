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
        $__internal_8b4bb79cf998fe3706cd122913f7edfa6cbb3ad677d9043fcafbcc2f653ca294 = $this->env->getExtension("native_profiler");
        $__internal_8b4bb79cf998fe3706cd122913f7edfa6cbb3ad677d9043fcafbcc2f653ca294->enter($__internal_8b4bb79cf998fe3706cd122913f7edfa6cbb3ad677d9043fcafbcc2f653ca294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FssWebsiteDepartementBundle:Default:etudiantindexdep.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b4bb79cf998fe3706cd122913f7edfa6cbb3ad677d9043fcafbcc2f653ca294->leave($__internal_8b4bb79cf998fe3706cd122913f7edfa6cbb3ad677d9043fcafbcc2f653ca294_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2de32259cbfdffe7055b43316f0fba122fee81788bbbd58864ed41a904cb84ee = $this->env->getExtension("native_profiler");
        $__internal_2de32259cbfdffe7055b43316f0fba122fee81788bbbd58864ed41a904cb84ee->enter($__internal_2de32259cbfdffe7055b43316f0fba122fee81788bbbd58864ed41a904cb84ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Normale
";
        
        $__internal_2de32259cbfdffe7055b43316f0fba122fee81788bbbd58864ed41a904cb84ee->leave($__internal_2de32259cbfdffe7055b43316f0fba122fee81788bbbd58864ed41a904cb84ee_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e834705473394958367327607e2d58f3e5bf07fb0636f73a5966b77d82debba9 = $this->env->getExtension("native_profiler");
        $__internal_e834705473394958367327607e2d58f3e5bf07fb0636f73a5966b77d82debba9->enter($__internal_e834705473394958367327607e2d58f3e5bf07fb0636f73a5966b77d82debba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


<h2>Departement - Page quelconque etudiant - Page en construction </h2>

       



";
        
        $__internal_e834705473394958367327607e2d58f3e5bf07fb0636f73a5966b77d82debba9->leave($__internal_e834705473394958367327607e2d58f3e5bf07fb0636f73a5966b77d82debba9_prof);

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
