<?php

/* FssWebsiteDepartementBundle:Default:index.html.twig */
class __TwigTemplate_85966800c7b43ae2a73672486f3aebb118b5c1ede72e9c4dc612b3977ca48aa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "FssWebsiteDepartementBundle:Default:index.html.twig", 1);
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
        $__internal_2c44ba50c8742bbe41a6461b9656eae0fcd011401c71949ed65da01f0e242cc0 = $this->env->getExtension("native_profiler");
        $__internal_2c44ba50c8742bbe41a6461b9656eae0fcd011401c71949ed65da01f0e242cc0->enter($__internal_2c44ba50c8742bbe41a6461b9656eae0fcd011401c71949ed65da01f0e242cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FssWebsiteDepartementBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c44ba50c8742bbe41a6461b9656eae0fcd011401c71949ed65da01f0e242cc0->leave($__internal_2c44ba50c8742bbe41a6461b9656eae0fcd011401c71949ed65da01f0e242cc0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fabe5759cf247c516d9f1b5a96feef33cdb8de6a75a0736fea4ba56fd24c4be = $this->env->getExtension("native_profiler");
        $__internal_1fabe5759cf247c516d9f1b5a96feef33cdb8de6a75a0736fea4ba56fd24c4be->enter($__internal_1fabe5759cf247c516d9f1b5a96feef33cdb8de6a75a0736fea4ba56fd24c4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Admin
";
        
        $__internal_1fabe5759cf247c516d9f1b5a96feef33cdb8de6a75a0736fea4ba56fd24c4be->leave($__internal_1fabe5759cf247c516d9f1b5a96feef33cdb8de6a75a0736fea4ba56fd24c4be_prof);

    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_a307f881c3b1fadc2fbfc8234b5dad32d956074422df2e2935f29a4c229cfb4e = $this->env->getExtension("native_profiler");
        $__internal_a307f881c3b1fadc2fbfc8234b5dad32d956074422df2e2935f29a4c229cfb4e->enter($__internal_a307f881c3b1fadc2fbfc8234b5dad32d956074422df2e2935f29a4c229cfb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 7
        echo "

<h2>Departement Normale - Submenu - Page en construction </h2>

       
";
        
        $__internal_a307f881c3b1fadc2fbfc8234b5dad32d956074422df2e2935f29a4c229cfb4e->leave($__internal_a307f881c3b1fadc2fbfc8234b5dad32d956074422df2e2935f29a4c229cfb4e_prof);

    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_7fc324c6049d3a116f7b6fc99ace9ffe22a54d12fbe62fd28135c662708d5703 = $this->env->getExtension("native_profiler");
        $__internal_7fc324c6049d3a116f7b6fc99ace9ffe22a54d12fbe62fd28135c662708d5703->enter($__internal_7fc324c6049d3a116f7b6fc99ace9ffe22a54d12fbe62fd28135c662708d5703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 16
        echo "

<h2>Departement - Body Content </h2>

       
";
        
        $__internal_7fc324c6049d3a116f7b6fc99ace9ffe22a54d12fbe62fd28135c662708d5703->leave($__internal_7fc324c6049d3a116f7b6fc99ace9ffe22a54d12fbe62fd28135c662708d5703_prof);

    }

    public function getTemplateName()
    {
        return "FssWebsiteDepartementBundle:Default:index.html.twig";
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
/* <h2>Departement Normale - Submenu - Page en construction </h2>*/
/* */
/*        */
/* {% endblock %}*/
/* */
/* */
/* {% block bodycontent %}*/
/* */
/* */
/* <h2>Departement - Body Content </h2>*/
/* */
/*        */
/* {% endblock %}*/
