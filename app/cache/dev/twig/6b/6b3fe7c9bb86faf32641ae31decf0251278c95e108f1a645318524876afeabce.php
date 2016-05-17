<?php

/* @FssWebsiteDepartement/Default/index.html.twig */
class __TwigTemplate_3757e7c06bbf47ab0f2772d5a7f63483393fdde75b97abf44988d2a581bbd54e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "@FssWebsiteDepartement/Default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'submenu' => array($this, 'block_submenu'),
            'bodycontent' => array($this, 'block_bodycontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FssWebsiteDepartementBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fdcb206e6de6e93660daa7be19cdffae718e3c385aa964c37c6de415a30e8d4b = $this->env->getExtension("native_profiler");
        $__internal_fdcb206e6de6e93660daa7be19cdffae718e3c385aa964c37c6de415a30e8d4b->enter($__internal_fdcb206e6de6e93660daa7be19cdffae718e3c385aa964c37c6de415a30e8d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FssWebsiteDepartement/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdcb206e6de6e93660daa7be19cdffae718e3c385aa964c37c6de415a30e8d4b->leave($__internal_fdcb206e6de6e93660daa7be19cdffae718e3c385aa964c37c6de415a30e8d4b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b80dad3d8726c653b5c8aa416999b372c0586a134483d02c3151067194eea3e3 = $this->env->getExtension("native_profiler");
        $__internal_b80dad3d8726c653b5c8aa416999b372c0586a134483d02c3151067194eea3e3->enter($__internal_b80dad3d8726c653b5c8aa416999b372c0586a134483d02c3151067194eea3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Admin
";
        
        $__internal_b80dad3d8726c653b5c8aa416999b372c0586a134483d02c3151067194eea3e3->leave($__internal_b80dad3d8726c653b5c8aa416999b372c0586a134483d02c3151067194eea3e3_prof);

    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_a1ecc22056cdeb7d41997648b020561e495068967ebc6980b06a7b50caab22b8 = $this->env->getExtension("native_profiler");
        $__internal_a1ecc22056cdeb7d41997648b020561e495068967ebc6980b06a7b50caab22b8->enter($__internal_a1ecc22056cdeb7d41997648b020561e495068967ebc6980b06a7b50caab22b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 7
        echo "

<h2>Departement Normale - Submenu - Page en construction </h2>

       
";
        
        $__internal_a1ecc22056cdeb7d41997648b020561e495068967ebc6980b06a7b50caab22b8->leave($__internal_a1ecc22056cdeb7d41997648b020561e495068967ebc6980b06a7b50caab22b8_prof);

    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_46f840a3e53092a8f037132ec0444b99c3b6ec49de8294c206aeaf4bc79f5355 = $this->env->getExtension("native_profiler");
        $__internal_46f840a3e53092a8f037132ec0444b99c3b6ec49de8294c206aeaf4bc79f5355->enter($__internal_46f840a3e53092a8f037132ec0444b99c3b6ec49de8294c206aeaf4bc79f5355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 16
        echo "

<h2>Departement - Body Content </h2>

       
";
        
        $__internal_46f840a3e53092a8f037132ec0444b99c3b6ec49de8294c206aeaf4bc79f5355->leave($__internal_46f840a3e53092a8f037132ec0444b99c3b6ec49de8294c206aeaf4bc79f5355_prof);

    }

    public function getTemplateName()
    {
        return "@FssWebsiteDepartement/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 16,  68 => 15,  56 => 7,  50 => 6,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "FssWebsiteDepartementBundle::layout.html.twig" %}*/
/* {% block title %}*/
/* Departement - Admin*/
/* {% endblock %}*/
/* */
/* {% block submenu %}*/
/* */
/* */
/* <h2>Departement Normale - Submenu - Page en construction </h2>*/
/* */
/*        */
/* {% endblock %}*/
/* */
/* */
/* {% block bodycontent %}*/
/* */
/* */
/* <h2>Departement - Body Content </h2>*/
/* */
/*        */
/* {% endblock %}*/
