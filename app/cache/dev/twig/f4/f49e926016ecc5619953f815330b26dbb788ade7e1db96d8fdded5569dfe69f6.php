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
        $__internal_1c7dfc9683094a39eb5ff5a42336af2fc99c105ca7ae97c6184ee84971d30391 = $this->env->getExtension("native_profiler");
        $__internal_1c7dfc9683094a39eb5ff5a42336af2fc99c105ca7ae97c6184ee84971d30391->enter($__internal_1c7dfc9683094a39eb5ff5a42336af2fc99c105ca7ae97c6184ee84971d30391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FssWebsiteDepartementBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c7dfc9683094a39eb5ff5a42336af2fc99c105ca7ae97c6184ee84971d30391->leave($__internal_1c7dfc9683094a39eb5ff5a42336af2fc99c105ca7ae97c6184ee84971d30391_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6022884f068d22019866ef00fd65fa6dde2a070c9bb1652195f12609d36de75b = $this->env->getExtension("native_profiler");
        $__internal_6022884f068d22019866ef00fd65fa6dde2a070c9bb1652195f12609d36de75b->enter($__internal_6022884f068d22019866ef00fd65fa6dde2a070c9bb1652195f12609d36de75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Admin
";
        
        $__internal_6022884f068d22019866ef00fd65fa6dde2a070c9bb1652195f12609d36de75b->leave($__internal_6022884f068d22019866ef00fd65fa6dde2a070c9bb1652195f12609d36de75b_prof);

    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_89c75c4325844d3f52d84af9161e9b2e77ff7c3c44a36580aa13a718897a8184 = $this->env->getExtension("native_profiler");
        $__internal_89c75c4325844d3f52d84af9161e9b2e77ff7c3c44a36580aa13a718897a8184->enter($__internal_89c75c4325844d3f52d84af9161e9b2e77ff7c3c44a36580aa13a718897a8184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 7
        echo "

<h2>Departement Normale - Submenu - Page en construction </h2>

       
";
        
        $__internal_89c75c4325844d3f52d84af9161e9b2e77ff7c3c44a36580aa13a718897a8184->leave($__internal_89c75c4325844d3f52d84af9161e9b2e77ff7c3c44a36580aa13a718897a8184_prof);

    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_0c87cfce0dd6f07d610c0d764cf8bc64038eef96c197473bee1e5ce237b1ecf3 = $this->env->getExtension("native_profiler");
        $__internal_0c87cfce0dd6f07d610c0d764cf8bc64038eef96c197473bee1e5ce237b1ecf3->enter($__internal_0c87cfce0dd6f07d610c0d764cf8bc64038eef96c197473bee1e5ce237b1ecf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 16
        echo "

<h2>Departement - Body Content </h2>

       
";
        
        $__internal_0c87cfce0dd6f07d610c0d764cf8bc64038eef96c197473bee1e5ce237b1ecf3->leave($__internal_0c87cfce0dd6f07d610c0d764cf8bc64038eef96c197473bee1e5ce237b1ecf3_prof);

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
