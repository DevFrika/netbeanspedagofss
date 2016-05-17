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
        $__internal_58094ab9cfc957fb2265048f174d4b614bf0591cdb6d161bfdd1158bfe17e457 = $this->env->getExtension("native_profiler");
        $__internal_58094ab9cfc957fb2265048f174d4b614bf0591cdb6d161bfdd1158bfe17e457->enter($__internal_58094ab9cfc957fb2265048f174d4b614bf0591cdb6d161bfdd1158bfe17e457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FssWebsiteDepartement/Default/profindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58094ab9cfc957fb2265048f174d4b614bf0591cdb6d161bfdd1158bfe17e457->leave($__internal_58094ab9cfc957fb2265048f174d4b614bf0591cdb6d161bfdd1158bfe17e457_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0910d017d5540c744bd1c45b46b85f34fe3b2795db8e34e8655f0530df3881c = $this->env->getExtension("native_profiler");
        $__internal_e0910d017d5540c744bd1c45b46b85f34fe3b2795db8e34e8655f0530df3881c->enter($__internal_e0910d017d5540c744bd1c45b46b85f34fe3b2795db8e34e8655f0530df3881c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Admin
";
        
        $__internal_e0910d017d5540c744bd1c45b46b85f34fe3b2795db8e34e8655f0530df3881c->leave($__internal_e0910d017d5540c744bd1c45b46b85f34fe3b2795db8e34e8655f0530df3881c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bfbe06cedec4710ec4bad3a4a60bc1dfefc948aa8151b07aba770e756afefc3 = $this->env->getExtension("native_profiler");
        $__internal_8bfbe06cedec4710ec4bad3a4a60bc1dfefc948aa8151b07aba770e756afefc3->enter($__internal_8bfbe06cedec4710ec4bad3a4a60bc1dfefc948aa8151b07aba770e756afefc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "


<h2>Departement - Page prof - Page en construction </h2>

       



";
        
        $__internal_8bfbe06cedec4710ec4bad3a4a60bc1dfefc948aa8151b07aba770e756afefc3->leave($__internal_8bfbe06cedec4710ec4bad3a4a60bc1dfefc948aa8151b07aba770e756afefc3_prof);

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
