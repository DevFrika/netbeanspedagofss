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
        $__internal_85af12d7c475ab3f7dd28602b3c1e6ec46adf3aa74346d91b3b806b9e8d79bcd = $this->env->getExtension("native_profiler");
        $__internal_85af12d7c475ab3f7dd28602b3c1e6ec46adf3aa74346d91b3b806b9e8d79bcd->enter($__internal_85af12d7c475ab3f7dd28602b3c1e6ec46adf3aa74346d91b3b806b9e8d79bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FssWebsiteDepartement/Default/etudiantindexdep.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85af12d7c475ab3f7dd28602b3c1e6ec46adf3aa74346d91b3b806b9e8d79bcd->leave($__internal_85af12d7c475ab3f7dd28602b3c1e6ec46adf3aa74346d91b3b806b9e8d79bcd_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_95d82008f038c5dfc344159758e9e0a1bcca73c8f4f0cbd1d573586bb37650e0 = $this->env->getExtension("native_profiler");
        $__internal_95d82008f038c5dfc344159758e9e0a1bcca73c8f4f0cbd1d573586bb37650e0->enter($__internal_95d82008f038c5dfc344159758e9e0a1bcca73c8f4f0cbd1d573586bb37650e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Normale
";
        
        $__internal_95d82008f038c5dfc344159758e9e0a1bcca73c8f4f0cbd1d573586bb37650e0->leave($__internal_95d82008f038c5dfc344159758e9e0a1bcca73c8f4f0cbd1d573586bb37650e0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d509bab366d1e546910ec60d415b197ebe20a09b1fbdb795ba9042715afb63f = $this->env->getExtension("native_profiler");
        $__internal_1d509bab366d1e546910ec60d415b197ebe20a09b1fbdb795ba9042715afb63f->enter($__internal_1d509bab366d1e546910ec60d415b197ebe20a09b1fbdb795ba9042715afb63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


<h2>Departement - Page quelconque etudiant - Page en construction </h2>

       



";
        
        $__internal_1d509bab366d1e546910ec60d415b197ebe20a09b1fbdb795ba9042715afb63f->leave($__internal_1d509bab366d1e546910ec60d415b197ebe20a09b1fbdb795ba9042715afb63f_prof);

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
