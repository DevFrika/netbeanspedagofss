<?php

/* @FssWebsiteDepartement/Default/adminindexdep.html.twig */
class __TwigTemplate_00c291365b5d84414c026c0b088b9b7d6c64afbb2b89116376c38bb14f380fbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "@FssWebsiteDepartement/Default/adminindexdep.html.twig", 1);
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
        $__internal_96351375bfb73a14a011c7cb3f86097e75cfbdc8e2dc4207958d9e3e93973c8c = $this->env->getExtension("native_profiler");
        $__internal_96351375bfb73a14a011c7cb3f86097e75cfbdc8e2dc4207958d9e3e93973c8c->enter($__internal_96351375bfb73a14a011c7cb3f86097e75cfbdc8e2dc4207958d9e3e93973c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FssWebsiteDepartement/Default/adminindexdep.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96351375bfb73a14a011c7cb3f86097e75cfbdc8e2dc4207958d9e3e93973c8c->leave($__internal_96351375bfb73a14a011c7cb3f86097e75cfbdc8e2dc4207958d9e3e93973c8c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7756f68d4678eeded4aeec4872aa8118368506c81b7dc94d44f6ed9e1885b617 = $this->env->getExtension("native_profiler");
        $__internal_7756f68d4678eeded4aeec4872aa8118368506c81b7dc94d44f6ed9e1885b617->enter($__internal_7756f68d4678eeded4aeec4872aa8118368506c81b7dc94d44f6ed9e1885b617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Normale
";
        
        $__internal_7756f68d4678eeded4aeec4872aa8118368506c81b7dc94d44f6ed9e1885b617->leave($__internal_7756f68d4678eeded4aeec4872aa8118368506c81b7dc94d44f6ed9e1885b617_prof);

    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_66471137e47b2f80fe951946b79d72c81773e01262e92054a5eb2ff983fe3aa1 = $this->env->getExtension("native_profiler");
        $__internal_66471137e47b2f80fe951946b79d72c81773e01262e92054a5eb2ff983fe3aa1->enter($__internal_66471137e47b2f80fe951946b79d72c81773e01262e92054a5eb2ff983fe3aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 7
        echo "

<h2>Departement de ( ??? ) - Submenu admin - Page en construction </h2>

       
";
        
        $__internal_66471137e47b2f80fe951946b79d72c81773e01262e92054a5eb2ff983fe3aa1->leave($__internal_66471137e47b2f80fe951946b79d72c81773e01262e92054a5eb2ff983fe3aa1_prof);

    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_f4649cb67c0979b7343663556c990eacebfa9a15be67523d7161e9d3043476b5 = $this->env->getExtension("native_profiler");
        $__internal_f4649cb67c0979b7343663556c990eacebfa9a15be67523d7161e9d3043476b5->enter($__internal_f4649cb67c0979b7343663556c990eacebfa9a15be67523d7161e9d3043476b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 16
        echo "

<h2>Departement - Body Content admin </h2>

       
";
        
        $__internal_f4649cb67c0979b7343663556c990eacebfa9a15be67523d7161e9d3043476b5->leave($__internal_f4649cb67c0979b7343663556c990eacebfa9a15be67523d7161e9d3043476b5_prof);

    }

    public function getTemplateName()
    {
        return "@FssWebsiteDepartement/Default/adminindexdep.html.twig";
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
/* Departement - Normale*/
/* {% endblock %}*/
/* */
/* {% block submenu %}*/
/* */
/* */
/* <h2>Departement de ( ??? ) - Submenu admin - Page en construction </h2>*/
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
