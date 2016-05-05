<?php

/* FssWebsiteDepartementBundle:Default:adminindex.html.twig */
class __TwigTemplate_7f9a4b062dbe5e5c486198694781da3d8057da046b7ecc4f47efb40c441a810f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "FssWebsiteDepartementBundle:Default:adminindex.html.twig", 1);
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
        $__internal_71181706c64cce57d08a4043d5d0ff4b3a60e84a28f12efd17e731efa28ae54e = $this->env->getExtension("native_profiler");
        $__internal_71181706c64cce57d08a4043d5d0ff4b3a60e84a28f12efd17e731efa28ae54e->enter($__internal_71181706c64cce57d08a4043d5d0ff4b3a60e84a28f12efd17e731efa28ae54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FssWebsiteDepartementBundle:Default:adminindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71181706c64cce57d08a4043d5d0ff4b3a60e84a28f12efd17e731efa28ae54e->leave($__internal_71181706c64cce57d08a4043d5d0ff4b3a60e84a28f12efd17e731efa28ae54e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2988cbbb6ef5cd67a361649aae5b8b7fbff709c80e19ff8b1830d79504659c81 = $this->env->getExtension("native_profiler");
        $__internal_2988cbbb6ef5cd67a361649aae5b8b7fbff709c80e19ff8b1830d79504659c81->enter($__internal_2988cbbb6ef5cd67a361649aae5b8b7fbff709c80e19ff8b1830d79504659c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Admin
";
        
        $__internal_2988cbbb6ef5cd67a361649aae5b8b7fbff709c80e19ff8b1830d79504659c81->leave($__internal_2988cbbb6ef5cd67a361649aae5b8b7fbff709c80e19ff8b1830d79504659c81_prof);

    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_1c5484d4dab3311cd01093f2ade3cc2943193ca4569a109dd76bdcbea6e14d38 = $this->env->getExtension("native_profiler");
        $__internal_1c5484d4dab3311cd01093f2ade3cc2943193ca4569a109dd76bdcbea6e14d38->enter($__internal_1c5484d4dab3311cd01093f2ade3cc2943193ca4569a109dd76bdcbea6e14d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 7
        echo "

<h2>Departement accueil - Submenu admin - Page en construction </h2>

       
";
        
        $__internal_1c5484d4dab3311cd01093f2ade3cc2943193ca4569a109dd76bdcbea6e14d38->leave($__internal_1c5484d4dab3311cd01093f2ade3cc2943193ca4569a109dd76bdcbea6e14d38_prof);

    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_bdec24eefeebf1ac1efe3f719e4b51cea5670639496eed0d761dcdc52708277a = $this->env->getExtension("native_profiler");
        $__internal_bdec24eefeebf1ac1efe3f719e4b51cea5670639496eed0d761dcdc52708277a->enter($__internal_bdec24eefeebf1ac1efe3f719e4b51cea5670639496eed0d761dcdc52708277a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 16
        echo "

<h2>Departement - Body Content admin </h2>

       
";
        
        $__internal_bdec24eefeebf1ac1efe3f719e4b51cea5670639496eed0d761dcdc52708277a->leave($__internal_bdec24eefeebf1ac1efe3f719e4b51cea5670639496eed0d761dcdc52708277a_prof);

    }

    public function getTemplateName()
    {
        return "FssWebsiteDepartementBundle:Default:adminindex.html.twig";
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
