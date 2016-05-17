<?php

/* @FssWebsiteDepartement/Default/profindex.html.twig */
class __TwigTemplate_3c30e267b1427656e9afa62fff258f939134aa8fc2a5201ca8ff3a1637604d07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "@FssWebsiteDepartement/Default/profindex.html.twig", 1);
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
        $__internal_977544113b46525d1b8909b1289df352592667ec14e2e710fda7f2d223ac1794 = $this->env->getExtension("native_profiler");
        $__internal_977544113b46525d1b8909b1289df352592667ec14e2e710fda7f2d223ac1794->enter($__internal_977544113b46525d1b8909b1289df352592667ec14e2e710fda7f2d223ac1794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FssWebsiteDepartement/Default/profindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_977544113b46525d1b8909b1289df352592667ec14e2e710fda7f2d223ac1794->leave($__internal_977544113b46525d1b8909b1289df352592667ec14e2e710fda7f2d223ac1794_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa83cb22dfcc0408d320c09e588c6577dba094e76b20e796001c3fed4e3b6030 = $this->env->getExtension("native_profiler");
        $__internal_aa83cb22dfcc0408d320c09e588c6577dba094e76b20e796001c3fed4e3b6030->enter($__internal_aa83cb22dfcc0408d320c09e588c6577dba094e76b20e796001c3fed4e3b6030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Admin
";
        
        $__internal_aa83cb22dfcc0408d320c09e588c6577dba094e76b20e796001c3fed4e3b6030->leave($__internal_aa83cb22dfcc0408d320c09e588c6577dba094e76b20e796001c3fed4e3b6030_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_345da5e806aca693717a4392b04833f51659846aa94d53eb12f6a93efe0c2a0c = $this->env->getExtension("native_profiler");
        $__internal_345da5e806aca693717a4392b04833f51659846aa94d53eb12f6a93efe0c2a0c->enter($__internal_345da5e806aca693717a4392b04833f51659846aa94d53eb12f6a93efe0c2a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "


<h2>Departement - Page prof - Page en construction </h2>

       



";
        
        $__internal_345da5e806aca693717a4392b04833f51659846aa94d53eb12f6a93efe0c2a0c->leave($__internal_345da5e806aca693717a4392b04833f51659846aa94d53eb12f6a93efe0c2a0c_prof);

    }

    public function getTemplateName()
    {
        return "@FssWebsiteDepartement/Default/profindex.html.twig";
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
