<?php

/* @FssWebsiteDepartement/Default/adminindex.html.twig */
class __TwigTemplate_94f575592f44f4dd60b7d9f21e64e011c380db4a25dc28a9b49d034fc15ae224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "@FssWebsiteDepartement/Default/adminindex.html.twig", 1);
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
        $__internal_9c07015da8705fa0bfe1c6e5d576bed9a71bd4ab508cb359167579d94595d38a = $this->env->getExtension("native_profiler");
        $__internal_9c07015da8705fa0bfe1c6e5d576bed9a71bd4ab508cb359167579d94595d38a->enter($__internal_9c07015da8705fa0bfe1c6e5d576bed9a71bd4ab508cb359167579d94595d38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FssWebsiteDepartement/Default/adminindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c07015da8705fa0bfe1c6e5d576bed9a71bd4ab508cb359167579d94595d38a->leave($__internal_9c07015da8705fa0bfe1c6e5d576bed9a71bd4ab508cb359167579d94595d38a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d1fba42397cd01a76322d89ac270f4062edcb68575c3aae6ae3e0465bd29fdc = $this->env->getExtension("native_profiler");
        $__internal_0d1fba42397cd01a76322d89ac270f4062edcb68575c3aae6ae3e0465bd29fdc->enter($__internal_0d1fba42397cd01a76322d89ac270f4062edcb68575c3aae6ae3e0465bd29fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Admin
";
        
        $__internal_0d1fba42397cd01a76322d89ac270f4062edcb68575c3aae6ae3e0465bd29fdc->leave($__internal_0d1fba42397cd01a76322d89ac270f4062edcb68575c3aae6ae3e0465bd29fdc_prof);

    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_95f89350dc97d3186e9c5fed8206c7e25e9c528e1a42d607ba614408ccb274f9 = $this->env->getExtension("native_profiler");
        $__internal_95f89350dc97d3186e9c5fed8206c7e25e9c528e1a42d607ba614408ccb274f9->enter($__internal_95f89350dc97d3186e9c5fed8206c7e25e9c528e1a42d607ba614408ccb274f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 7
        echo "

<h2>Departement accueil - Submenu admin - Page en construction </h2>

       
";
        
        $__internal_95f89350dc97d3186e9c5fed8206c7e25e9c528e1a42d607ba614408ccb274f9->leave($__internal_95f89350dc97d3186e9c5fed8206c7e25e9c528e1a42d607ba614408ccb274f9_prof);

    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_1f056ebbf6de29dd345dc7a23846e52ee5cf938a18a7f44c9bb65e6cf2f7c13b = $this->env->getExtension("native_profiler");
        $__internal_1f056ebbf6de29dd345dc7a23846e52ee5cf938a18a7f44c9bb65e6cf2f7c13b->enter($__internal_1f056ebbf6de29dd345dc7a23846e52ee5cf938a18a7f44c9bb65e6cf2f7c13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 16
        echo "

<h2>Departement - Body Content admin </h2>

       
";
        
        $__internal_1f056ebbf6de29dd345dc7a23846e52ee5cf938a18a7f44c9bb65e6cf2f7c13b->leave($__internal_1f056ebbf6de29dd345dc7a23846e52ee5cf938a18a7f44c9bb65e6cf2f7c13b_prof);

    }

    public function getTemplateName()
    {
        return "@FssWebsiteDepartement/Default/adminindex.html.twig";
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
/* <h2>Departement accueil - Submenu admin - Page en construction </h2>*/
/* */
/*        */
/* {% endblock %}*/
/* */
/* */
/* {% block bodycontent %}*/
/* */
/* */
/* <h2>Departement - Body Content admin </h2>*/
/* */
/*        */
/* {% endblock %}*/
