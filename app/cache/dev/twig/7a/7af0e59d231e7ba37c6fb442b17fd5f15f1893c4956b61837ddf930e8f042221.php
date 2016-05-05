<?php

/* @FssWebsiteDepartement/Default/etudiantindex.html.twig */
class __TwigTemplate_1eac4c072c19c5dfcb73726fc5fb9e0b087a176ed51e942abd8a23228f0618ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "@FssWebsiteDepartement/Default/etudiantindex.html.twig", 1);
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
        $__internal_5da29042e0c4394790f2d046437ec561f915158e6a14de43a2afa5f3147bd155 = $this->env->getExtension("native_profiler");
        $__internal_5da29042e0c4394790f2d046437ec561f915158e6a14de43a2afa5f3147bd155->enter($__internal_5da29042e0c4394790f2d046437ec561f915158e6a14de43a2afa5f3147bd155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FssWebsiteDepartement/Default/etudiantindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5da29042e0c4394790f2d046437ec561f915158e6a14de43a2afa5f3147bd155->leave($__internal_5da29042e0c4394790f2d046437ec561f915158e6a14de43a2afa5f3147bd155_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f55a3043efc1b606f5d0a10185136263aa71a8e8d96c0c010a44ba3caf8abb7 = $this->env->getExtension("native_profiler");
        $__internal_2f55a3043efc1b606f5d0a10185136263aa71a8e8d96c0c010a44ba3caf8abb7->enter($__internal_2f55a3043efc1b606f5d0a10185136263aa71a8e8d96c0c010a44ba3caf8abb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Admin
";
        
        $__internal_2f55a3043efc1b606f5d0a10185136263aa71a8e8d96c0c010a44ba3caf8abb7->leave($__internal_2f55a3043efc1b606f5d0a10185136263aa71a8e8d96c0c010a44ba3caf8abb7_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbee83d62932db5c47d82e1e54ef6dce3a04bde0d7c13e7d17e9f91d11c70fb6 = $this->env->getExtension("native_profiler");
        $__internal_fbee83d62932db5c47d82e1e54ef6dce3a04bde0d7c13e7d17e9f91d11c70fb6->enter($__internal_fbee83d62932db5c47d82e1e54ef6dce3a04bde0d7c13e7d17e9f91d11c70fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "


<h2>Departement - Page d'etudiant - Page en construction </h2>

       



";
        
        $__internal_fbee83d62932db5c47d82e1e54ef6dce3a04bde0d7c13e7d17e9f91d11c70fb6->leave($__internal_fbee83d62932db5c47d82e1e54ef6dce3a04bde0d7c13e7d17e9f91d11c70fb6_prof);

    }

    public function getTemplateName()
    {
        return "@FssWebsiteDepartement/Default/etudiantindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  49 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "FssWebsiteDepartementBundle::layout.html.twig" %}*/
/* {% block title %}*/
/* Departement - Admin*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* <h2>Departement - Page d'etudiant - Page en construction </h2>*/
/* */
/*        */
/* */
/* */
/* */
/* {% endblock %}*/
