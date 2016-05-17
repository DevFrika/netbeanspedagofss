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
        $__internal_9b7d996d90fb5cf54435d04edaac93da81698a497f279fc0026fe3824587b98c = $this->env->getExtension("native_profiler");
        $__internal_9b7d996d90fb5cf54435d04edaac93da81698a497f279fc0026fe3824587b98c->enter($__internal_9b7d996d90fb5cf54435d04edaac93da81698a497f279fc0026fe3824587b98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FssWebsiteDepartement/Default/etudiantindexdep.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b7d996d90fb5cf54435d04edaac93da81698a497f279fc0026fe3824587b98c->leave($__internal_9b7d996d90fb5cf54435d04edaac93da81698a497f279fc0026fe3824587b98c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_236274069749d6e2d7e25f3a24a3689b44aa9a2e95e54828359c9559c7bae3ab = $this->env->getExtension("native_profiler");
        $__internal_236274069749d6e2d7e25f3a24a3689b44aa9a2e95e54828359c9559c7bae3ab->enter($__internal_236274069749d6e2d7e25f3a24a3689b44aa9a2e95e54828359c9559c7bae3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Normale
";
        
        $__internal_236274069749d6e2d7e25f3a24a3689b44aa9a2e95e54828359c9559c7bae3ab->leave($__internal_236274069749d6e2d7e25f3a24a3689b44aa9a2e95e54828359c9559c7bae3ab_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d5088ba4d2a93becabe2566acf2c0cb270c7d7b452f13a3783bd3d68967dec7 = $this->env->getExtension("native_profiler");
        $__internal_3d5088ba4d2a93becabe2566acf2c0cb270c7d7b452f13a3783bd3d68967dec7->enter($__internal_3d5088ba4d2a93becabe2566acf2c0cb270c7d7b452f13a3783bd3d68967dec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


<h2>Departement - Page quelconque etudiant - Page en construction </h2>

       



";
        
        $__internal_3d5088ba4d2a93becabe2566acf2c0cb270c7d7b452f13a3783bd3d68967dec7->leave($__internal_3d5088ba4d2a93becabe2566acf2c0cb270c7d7b452f13a3783bd3d68967dec7_prof);

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
