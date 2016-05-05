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
        $__internal_3af1176eaaf2528a507581f34945050660e39e2c49b7aa77e91cfca0c4610cf0 = $this->env->getExtension("native_profiler");
        $__internal_3af1176eaaf2528a507581f34945050660e39e2c49b7aa77e91cfca0c4610cf0->enter($__internal_3af1176eaaf2528a507581f34945050660e39e2c49b7aa77e91cfca0c4610cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FssWebsiteDepartement/Default/adminindexdep.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3af1176eaaf2528a507581f34945050660e39e2c49b7aa77e91cfca0c4610cf0->leave($__internal_3af1176eaaf2528a507581f34945050660e39e2c49b7aa77e91cfca0c4610cf0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_946e2c7ce20c65ebe2ccabe31daa916ad5a42fc81d8fd35ac369067b87ce6b57 = $this->env->getExtension("native_profiler");
        $__internal_946e2c7ce20c65ebe2ccabe31daa916ad5a42fc81d8fd35ac369067b87ce6b57->enter($__internal_946e2c7ce20c65ebe2ccabe31daa916ad5a42fc81d8fd35ac369067b87ce6b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Normale
";
        
        $__internal_946e2c7ce20c65ebe2ccabe31daa916ad5a42fc81d8fd35ac369067b87ce6b57->leave($__internal_946e2c7ce20c65ebe2ccabe31daa916ad5a42fc81d8fd35ac369067b87ce6b57_prof);

    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_eba2afcf194164f11e4cae42cc5b11d8781fb3e09f2161bb4a0ab53dc694ff19 = $this->env->getExtension("native_profiler");
        $__internal_eba2afcf194164f11e4cae42cc5b11d8781fb3e09f2161bb4a0ab53dc694ff19->enter($__internal_eba2afcf194164f11e4cae42cc5b11d8781fb3e09f2161bb4a0ab53dc694ff19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 7
        echo "

<h2>Departement de ( ??? ) - Submenu admin - Page en construction </h2>

       
";
        
        $__internal_eba2afcf194164f11e4cae42cc5b11d8781fb3e09f2161bb4a0ab53dc694ff19->leave($__internal_eba2afcf194164f11e4cae42cc5b11d8781fb3e09f2161bb4a0ab53dc694ff19_prof);

    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_813d74a7e109f593aa04e5d579505a99d62a5a9ced24906e689d29f36f2b60e5 = $this->env->getExtension("native_profiler");
        $__internal_813d74a7e109f593aa04e5d579505a99d62a5a9ced24906e689d29f36f2b60e5->enter($__internal_813d74a7e109f593aa04e5d579505a99d62a5a9ced24906e689d29f36f2b60e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 16
        echo "

<h2>Departement - Body Content admin </h2>

       
";
        
        $__internal_813d74a7e109f593aa04e5d579505a99d62a5a9ced24906e689d29f36f2b60e5->leave($__internal_813d74a7e109f593aa04e5d579505a99d62a5a9ced24906e689d29f36f2b60e5_prof);

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
