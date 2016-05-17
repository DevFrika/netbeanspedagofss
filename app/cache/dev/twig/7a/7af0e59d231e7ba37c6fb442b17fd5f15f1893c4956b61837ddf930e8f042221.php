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
        $__internal_18e8668ee5ec3d56735b69559cd5260e52d7c0e647050a693784b3df0f073ef8 = $this->env->getExtension("native_profiler");
        $__internal_18e8668ee5ec3d56735b69559cd5260e52d7c0e647050a693784b3df0f073ef8->enter($__internal_18e8668ee5ec3d56735b69559cd5260e52d7c0e647050a693784b3df0f073ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FssWebsiteDepartement/Default/etudiantindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18e8668ee5ec3d56735b69559cd5260e52d7c0e647050a693784b3df0f073ef8->leave($__internal_18e8668ee5ec3d56735b69559cd5260e52d7c0e647050a693784b3df0f073ef8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_56d417dbbb28a023ca62d10b522670a40cce25e6e1ffc68a4a4e3b1dec93277a = $this->env->getExtension("native_profiler");
        $__internal_56d417dbbb28a023ca62d10b522670a40cce25e6e1ffc68a4a4e3b1dec93277a->enter($__internal_56d417dbbb28a023ca62d10b522670a40cce25e6e1ffc68a4a4e3b1dec93277a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Admin
";
        
        $__internal_56d417dbbb28a023ca62d10b522670a40cce25e6e1ffc68a4a4e3b1dec93277a->leave($__internal_56d417dbbb28a023ca62d10b522670a40cce25e6e1ffc68a4a4e3b1dec93277a_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b83f5e02cde01b60c349d38af39a587e5332a27ae333039955ef025776b942ee = $this->env->getExtension("native_profiler");
        $__internal_b83f5e02cde01b60c349d38af39a587e5332a27ae333039955ef025776b942ee->enter($__internal_b83f5e02cde01b60c349d38af39a587e5332a27ae333039955ef025776b942ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "


<h2>Departement - Page d'etudiant - Page en construction </h2>

       



";
        
        $__internal_b83f5e02cde01b60c349d38af39a587e5332a27ae333039955ef025776b942ee->leave($__internal_b83f5e02cde01b60c349d38af39a587e5332a27ae333039955ef025776b942ee_prof);

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
