<?php

/* FssWebsiteDepartementBundle:Default:adminindexdep.html.twig */
class __TwigTemplate_427040547de4f9ca39530e555d520da10175d006eff6ad3a3ca2ffd8cde14643 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "FssWebsiteDepartementBundle:Default:adminindexdep.html.twig", 1);
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
        $__internal_7fa111fb34ee7cc203b7989486decc8f9e77e8ba29928343f441ef7214a7c75a = $this->env->getExtension("native_profiler");
        $__internal_7fa111fb34ee7cc203b7989486decc8f9e77e8ba29928343f441ef7214a7c75a->enter($__internal_7fa111fb34ee7cc203b7989486decc8f9e77e8ba29928343f441ef7214a7c75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FssWebsiteDepartementBundle:Default:adminindexdep.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fa111fb34ee7cc203b7989486decc8f9e77e8ba29928343f441ef7214a7c75a->leave($__internal_7fa111fb34ee7cc203b7989486decc8f9e77e8ba29928343f441ef7214a7c75a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_83673e0d27682f7336624ee91a76aff2084b285dc8715b58cd3badcb8506d8c3 = $this->env->getExtension("native_profiler");
        $__internal_83673e0d27682f7336624ee91a76aff2084b285dc8715b58cd3badcb8506d8c3->enter($__internal_83673e0d27682f7336624ee91a76aff2084b285dc8715b58cd3badcb8506d8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Normale
";
        
        $__internal_83673e0d27682f7336624ee91a76aff2084b285dc8715b58cd3badcb8506d8c3->leave($__internal_83673e0d27682f7336624ee91a76aff2084b285dc8715b58cd3badcb8506d8c3_prof);

    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_04aebc923adffea2fa365daa4af42f821f1e1eb3ef192c33cfe3de2d154fc65d = $this->env->getExtension("native_profiler");
        $__internal_04aebc923adffea2fa365daa4af42f821f1e1eb3ef192c33cfe3de2d154fc65d->enter($__internal_04aebc923adffea2fa365daa4af42f821f1e1eb3ef192c33cfe3de2d154fc65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 7
        echo "

<h2>Departement de ( ??? ) - Submenu admin - Page en construction </h2>

       
";
        
        $__internal_04aebc923adffea2fa365daa4af42f821f1e1eb3ef192c33cfe3de2d154fc65d->leave($__internal_04aebc923adffea2fa365daa4af42f821f1e1eb3ef192c33cfe3de2d154fc65d_prof);

    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_2ec21d183b1b46a1dd1829f46b08999defe53189a49674d22e26fb88c254dbb2 = $this->env->getExtension("native_profiler");
        $__internal_2ec21d183b1b46a1dd1829f46b08999defe53189a49674d22e26fb88c254dbb2->enter($__internal_2ec21d183b1b46a1dd1829f46b08999defe53189a49674d22e26fb88c254dbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 16
        echo "

<h2>Departement - Body Content admin </h2>

       
";
        
        $__internal_2ec21d183b1b46a1dd1829f46b08999defe53189a49674d22e26fb88c254dbb2->leave($__internal_2ec21d183b1b46a1dd1829f46b08999defe53189a49674d22e26fb88c254dbb2_prof);

    }

    public function getTemplateName()
    {
        return "FssWebsiteDepartementBundle:Default:adminindexdep.html.twig";
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
