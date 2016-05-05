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
        $__internal_fbf6b95571d13ba0c83bd71d794870c6a464b5b3e41902b257694cada9f1328e = $this->env->getExtension("native_profiler");
        $__internal_fbf6b95571d13ba0c83bd71d794870c6a464b5b3e41902b257694cada9f1328e->enter($__internal_fbf6b95571d13ba0c83bd71d794870c6a464b5b3e41902b257694cada9f1328e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FssWebsiteDepartementBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbf6b95571d13ba0c83bd71d794870c6a464b5b3e41902b257694cada9f1328e->leave($__internal_fbf6b95571d13ba0c83bd71d794870c6a464b5b3e41902b257694cada9f1328e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8520c7f87f15124988e35c2dec30ef06214e8fb5ae8c4e8a75abf0b8b07d5476 = $this->env->getExtension("native_profiler");
        $__internal_8520c7f87f15124988e35c2dec30ef06214e8fb5ae8c4e8a75abf0b8b07d5476->enter($__internal_8520c7f87f15124988e35c2dec30ef06214e8fb5ae8c4e8a75abf0b8b07d5476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Admin
";
        
        $__internal_8520c7f87f15124988e35c2dec30ef06214e8fb5ae8c4e8a75abf0b8b07d5476->leave($__internal_8520c7f87f15124988e35c2dec30ef06214e8fb5ae8c4e8a75abf0b8b07d5476_prof);

    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_5bc2c7d9b0504ba824669e1a4bc9250f0cf7d8d89d710d0c8bba6677f3875cf0 = $this->env->getExtension("native_profiler");
        $__internal_5bc2c7d9b0504ba824669e1a4bc9250f0cf7d8d89d710d0c8bba6677f3875cf0->enter($__internal_5bc2c7d9b0504ba824669e1a4bc9250f0cf7d8d89d710d0c8bba6677f3875cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 7
        echo "

<h2>Departement Normale - Submenu - Page en construction </h2>

       
";
        
        $__internal_5bc2c7d9b0504ba824669e1a4bc9250f0cf7d8d89d710d0c8bba6677f3875cf0->leave($__internal_5bc2c7d9b0504ba824669e1a4bc9250f0cf7d8d89d710d0c8bba6677f3875cf0_prof);

    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_0f6ec6fa655c5541fef436afc53b72d8f7b4720fa98928d7c65fb0af73d07e27 = $this->env->getExtension("native_profiler");
        $__internal_0f6ec6fa655c5541fef436afc53b72d8f7b4720fa98928d7c65fb0af73d07e27->enter($__internal_0f6ec6fa655c5541fef436afc53b72d8f7b4720fa98928d7c65fb0af73d07e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 16
        echo "

<h2>Departement - Body Content </h2>

       
";
        
        $__internal_0f6ec6fa655c5541fef436afc53b72d8f7b4720fa98928d7c65fb0af73d07e27->leave($__internal_0f6ec6fa655c5541fef436afc53b72d8f7b4720fa98928d7c65fb0af73d07e27_prof);

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
