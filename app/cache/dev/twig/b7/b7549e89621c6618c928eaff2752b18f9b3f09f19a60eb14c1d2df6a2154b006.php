<?php

/* FssWebsiteDepartementBundle:Default:etudiantindex.html.twig */
class __TwigTemplate_00100623bb08d10aee52747781073469932952af95b328de910fc230f2825356 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "FssWebsiteDepartementBundle:Default:etudiantindex.html.twig", 1);
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
        $__internal_9b37831e985844b32abca0065acf0345e6eedd1a80d8251c55a85a4ad80e04fc = $this->env->getExtension("native_profiler");
        $__internal_9b37831e985844b32abca0065acf0345e6eedd1a80d8251c55a85a4ad80e04fc->enter($__internal_9b37831e985844b32abca0065acf0345e6eedd1a80d8251c55a85a4ad80e04fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FssWebsiteDepartementBundle:Default:etudiantindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b37831e985844b32abca0065acf0345e6eedd1a80d8251c55a85a4ad80e04fc->leave($__internal_9b37831e985844b32abca0065acf0345e6eedd1a80d8251c55a85a4ad80e04fc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_65ad0803dabcb42ef407ec4441110646c71466eca0e5aaf2b4dfbd2b99f00cd7 = $this->env->getExtension("native_profiler");
        $__internal_65ad0803dabcb42ef407ec4441110646c71466eca0e5aaf2b4dfbd2b99f00cd7->enter($__internal_65ad0803dabcb42ef407ec4441110646c71466eca0e5aaf2b4dfbd2b99f00cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Admin
";
        
        $__internal_65ad0803dabcb42ef407ec4441110646c71466eca0e5aaf2b4dfbd2b99f00cd7->leave($__internal_65ad0803dabcb42ef407ec4441110646c71466eca0e5aaf2b4dfbd2b99f00cd7_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_1043cc102468db1a654025c6503144e201d7fa3ed3acec4a534c466bddc87e00 = $this->env->getExtension("native_profiler");
        $__internal_1043cc102468db1a654025c6503144e201d7fa3ed3acec4a534c466bddc87e00->enter($__internal_1043cc102468db1a654025c6503144e201d7fa3ed3acec4a534c466bddc87e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "


<h2>Departement - Page d'etudiant - Page en construction </h2>

       



";
        
        $__internal_1043cc102468db1a654025c6503144e201d7fa3ed3acec4a534c466bddc87e00->leave($__internal_1043cc102468db1a654025c6503144e201d7fa3ed3acec4a534c466bddc87e00_prof);

    }

    public function getTemplateName()
    {
        return "FssWebsiteDepartementBundle:Default:etudiantindex.html.twig";
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
