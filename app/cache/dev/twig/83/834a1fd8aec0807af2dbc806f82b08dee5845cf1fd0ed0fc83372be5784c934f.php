<?php

/* FssWebsiteDepartementBundle:Default:profindex.html.twig */
class __TwigTemplate_79fb73034bb7be053c9c6a6dfb326202c4af5e1ce1ed1226f7d6218c5917907a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "FssWebsiteDepartementBundle:Default:profindex.html.twig", 1);
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
        $__internal_0e241f06214bb4becdfa78bc40abff65d9ba8071774674458c8d38ddea95a2e1 = $this->env->getExtension("native_profiler");
        $__internal_0e241f06214bb4becdfa78bc40abff65d9ba8071774674458c8d38ddea95a2e1->enter($__internal_0e241f06214bb4becdfa78bc40abff65d9ba8071774674458c8d38ddea95a2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FssWebsiteDepartementBundle:Default:profindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e241f06214bb4becdfa78bc40abff65d9ba8071774674458c8d38ddea95a2e1->leave($__internal_0e241f06214bb4becdfa78bc40abff65d9ba8071774674458c8d38ddea95a2e1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ba10917d857fb5588ac935fde02ad6ee3e663aa71cb31cd3fbe90b4696f3f8e = $this->env->getExtension("native_profiler");
        $__internal_9ba10917d857fb5588ac935fde02ad6ee3e663aa71cb31cd3fbe90b4696f3f8e->enter($__internal_9ba10917d857fb5588ac935fde02ad6ee3e663aa71cb31cd3fbe90b4696f3f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Admin
";
        
        $__internal_9ba10917d857fb5588ac935fde02ad6ee3e663aa71cb31cd3fbe90b4696f3f8e->leave($__internal_9ba10917d857fb5588ac935fde02ad6ee3e663aa71cb31cd3fbe90b4696f3f8e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_18af52fd9c58ad6154fc012042ae6994ad09ec2959acc78a1533487a130990f3 = $this->env->getExtension("native_profiler");
        $__internal_18af52fd9c58ad6154fc012042ae6994ad09ec2959acc78a1533487a130990f3->enter($__internal_18af52fd9c58ad6154fc012042ae6994ad09ec2959acc78a1533487a130990f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "


<h2>Departement - Page prof - Page en construction </h2>

       



";
        
        $__internal_18af52fd9c58ad6154fc012042ae6994ad09ec2959acc78a1533487a130990f3->leave($__internal_18af52fd9c58ad6154fc012042ae6994ad09ec2959acc78a1533487a130990f3_prof);

    }

    public function getTemplateName()
    {
        return "FssWebsiteDepartementBundle:Default:profindex.html.twig";
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
/* <h2>Departement - Page prof - Page en construction </h2>*/
/* */
/*        */
/* */
/* */
/* */
/* {% endblock %}*/