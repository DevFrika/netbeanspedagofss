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
        $__internal_7aadf22c6cfc3a72571228a40cf9550546424f43a46b36e990b11dd83947864b = $this->env->getExtension("native_profiler");
        $__internal_7aadf22c6cfc3a72571228a40cf9550546424f43a46b36e990b11dd83947864b->enter($__internal_7aadf22c6cfc3a72571228a40cf9550546424f43a46b36e990b11dd83947864b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FssWebsiteDepartementBundle:Default:adminindexdep.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aadf22c6cfc3a72571228a40cf9550546424f43a46b36e990b11dd83947864b->leave($__internal_7aadf22c6cfc3a72571228a40cf9550546424f43a46b36e990b11dd83947864b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e463709fd08554f083d8424dd773de737edcdb6de9d080e8374d96bf56cad22 = $this->env->getExtension("native_profiler");
        $__internal_1e463709fd08554f083d8424dd773de737edcdb6de9d080e8374d96bf56cad22->enter($__internal_1e463709fd08554f083d8424dd773de737edcdb6de9d080e8374d96bf56cad22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Normale
";
        
        $__internal_1e463709fd08554f083d8424dd773de737edcdb6de9d080e8374d96bf56cad22->leave($__internal_1e463709fd08554f083d8424dd773de737edcdb6de9d080e8374d96bf56cad22_prof);

    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_fa65775a1b82ace2ca876793f9db0549bcad478166041917c21d1c09a30a7bc3 = $this->env->getExtension("native_profiler");
        $__internal_fa65775a1b82ace2ca876793f9db0549bcad478166041917c21d1c09a30a7bc3->enter($__internal_fa65775a1b82ace2ca876793f9db0549bcad478166041917c21d1c09a30a7bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 7
        echo "

<h2>Departement de ( ??? ) - Submenu admin - Page en construction </h2>

       
";
        
        $__internal_fa65775a1b82ace2ca876793f9db0549bcad478166041917c21d1c09a30a7bc3->leave($__internal_fa65775a1b82ace2ca876793f9db0549bcad478166041917c21d1c09a30a7bc3_prof);

    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_14c0c5c47f20071996e08bfe739623be826e614ad4b368d1437f46b465143b8f = $this->env->getExtension("native_profiler");
        $__internal_14c0c5c47f20071996e08bfe739623be826e614ad4b368d1437f46b465143b8f->enter($__internal_14c0c5c47f20071996e08bfe739623be826e614ad4b368d1437f46b465143b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 16
        echo "

<h2>Departement - Body Content admin </h2>

       
";
        
        $__internal_14c0c5c47f20071996e08bfe739623be826e614ad4b368d1437f46b465143b8f->leave($__internal_14c0c5c47f20071996e08bfe739623be826e614ad4b368d1437f46b465143b8f_prof);

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
