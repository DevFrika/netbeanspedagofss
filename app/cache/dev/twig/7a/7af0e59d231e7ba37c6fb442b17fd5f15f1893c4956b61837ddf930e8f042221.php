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
        $__internal_b1ace99a0a358b7c0cae9f41aafb363cd52a45a5652708286aba6c105f60c66c = $this->env->getExtension("native_profiler");
        $__internal_b1ace99a0a358b7c0cae9f41aafb363cd52a45a5652708286aba6c105f60c66c->enter($__internal_b1ace99a0a358b7c0cae9f41aafb363cd52a45a5652708286aba6c105f60c66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FssWebsiteDepartement/Default/etudiantindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1ace99a0a358b7c0cae9f41aafb363cd52a45a5652708286aba6c105f60c66c->leave($__internal_b1ace99a0a358b7c0cae9f41aafb363cd52a45a5652708286aba6c105f60c66c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e89b591a853ed63bcf92b27e58eecdb48686df6d4a4ac8c4556b57484b19ffd4 = $this->env->getExtension("native_profiler");
        $__internal_e89b591a853ed63bcf92b27e58eecdb48686df6d4a4ac8c4556b57484b19ffd4->enter($__internal_e89b591a853ed63bcf92b27e58eecdb48686df6d4a4ac8c4556b57484b19ffd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Admin
";
        
        $__internal_e89b591a853ed63bcf92b27e58eecdb48686df6d4a4ac8c4556b57484b19ffd4->leave($__internal_e89b591a853ed63bcf92b27e58eecdb48686df6d4a4ac8c4556b57484b19ffd4_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cb99153458e0b04d21cf9b85381260d7b6489042abe8fca56e0b612a34b670f = $this->env->getExtension("native_profiler");
        $__internal_9cb99153458e0b04d21cf9b85381260d7b6489042abe8fca56e0b612a34b670f->enter($__internal_9cb99153458e0b04d21cf9b85381260d7b6489042abe8fca56e0b612a34b670f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "


<h2>Departement - Page d'etudiant - Page en construction </h2>

       



";
        
        $__internal_9cb99153458e0b04d21cf9b85381260d7b6489042abe8fca56e0b612a34b670f->leave($__internal_9cb99153458e0b04d21cf9b85381260d7b6489042abe8fca56e0b612a34b670f_prof);

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
