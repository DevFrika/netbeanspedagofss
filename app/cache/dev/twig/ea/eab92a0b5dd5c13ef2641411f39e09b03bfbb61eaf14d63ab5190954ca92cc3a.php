<?php

/* @FssWebsiteDepartement/Default/etudiantindexdep.html.twig */
class __TwigTemplate_8a916572b295545b962f61099cf910cba8089075150f88174014b7352c5b3b52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "@FssWebsiteDepartement/Default/etudiantindexdep.html.twig", 1);
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
        $__internal_a208291217619980e4e71521bb9a3b79bb074840f3706ccc76037aed58b9f514 = $this->env->getExtension("native_profiler");
        $__internal_a208291217619980e4e71521bb9a3b79bb074840f3706ccc76037aed58b9f514->enter($__internal_a208291217619980e4e71521bb9a3b79bb074840f3706ccc76037aed58b9f514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FssWebsiteDepartement/Default/etudiantindexdep.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a208291217619980e4e71521bb9a3b79bb074840f3706ccc76037aed58b9f514->leave($__internal_a208291217619980e4e71521bb9a3b79bb074840f3706ccc76037aed58b9f514_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c02ca25ebf3d9b8126ed6671914522957f45744226a0a1e1c474e3b2178dfda = $this->env->getExtension("native_profiler");
        $__internal_2c02ca25ebf3d9b8126ed6671914522957f45744226a0a1e1c474e3b2178dfda->enter($__internal_2c02ca25ebf3d9b8126ed6671914522957f45744226a0a1e1c474e3b2178dfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Normale
";
        
        $__internal_2c02ca25ebf3d9b8126ed6671914522957f45744226a0a1e1c474e3b2178dfda->leave($__internal_2c02ca25ebf3d9b8126ed6671914522957f45744226a0a1e1c474e3b2178dfda_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c66313438dfc40d6a32bf543811c0b2f8599a5da17aaa9764dee5b13dc3b8e7d = $this->env->getExtension("native_profiler");
        $__internal_c66313438dfc40d6a32bf543811c0b2f8599a5da17aaa9764dee5b13dc3b8e7d->enter($__internal_c66313438dfc40d6a32bf543811c0b2f8599a5da17aaa9764dee5b13dc3b8e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


<h2>Departement - Page quelconque etudiant - Page en construction </h2>

       



";
        
        $__internal_c66313438dfc40d6a32bf543811c0b2f8599a5da17aaa9764dee5b13dc3b8e7d->leave($__internal_c66313438dfc40d6a32bf543811c0b2f8599a5da17aaa9764dee5b13dc3b8e7d_prof);

    }

    public function getTemplateName()
    {
        return "@FssWebsiteDepartement/Default/etudiantindexdep.html.twig";
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
