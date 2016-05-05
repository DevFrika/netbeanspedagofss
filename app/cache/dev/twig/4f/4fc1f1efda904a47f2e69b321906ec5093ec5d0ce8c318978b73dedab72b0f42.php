<?php

/* @FssWebsiteDepartement/layout.html.twig */
class __TwigTemplate_5030b5344be0b9243e5ad14c33c07856b3e33b3356c141d2c84b74845622b110 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@FssWebsiteDepartement/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'submenu' => array($this, 'block_submenu'),
            'bodycontent' => array($this, 'block_bodycontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9725bfba356d468a5ec074703dacb1680b2173ed9bb7346a55d448c8e207d1c1 = $this->env->getExtension("native_profiler");
        $__internal_9725bfba356d468a5ec074703dacb1680b2173ed9bb7346a55d448c8e207d1c1->enter($__internal_9725bfba356d468a5ec074703dacb1680b2173ed9bb7346a55d448c8e207d1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FssWebsiteDepartement/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9725bfba356d468a5ec074703dacb1680b2173ed9bb7346a55d448c8e207d1c1->leave($__internal_9725bfba356d468a5ec074703dacb1680b2173ed9bb7346a55d448c8e207d1c1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2991891db744d376e21107af623ba3716000210edfbbebe85f856eef4e82ce9f = $this->env->getExtension("native_profiler");
        $__internal_2991891db744d376e21107af623ba3716000210edfbbebe85f856eef4e82ce9f->enter($__internal_2991891db744d376e21107af623ba3716000210edfbbebe85f856eef4e82ce9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement 
";
        
        $__internal_2991891db744d376e21107af623ba3716000210edfbbebe85f856eef4e82ce9f->leave($__internal_2991891db744d376e21107af623ba3716000210edfbbebe85f856eef4e82ce9f_prof);

    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_65d96ae5323989a20a19b8fdf069a42f8a6a33cbfd279a654cdc0f754008ce16 = $this->env->getExtension("native_profiler");
        $__internal_65d96ae5323989a20a19b8fdf069a42f8a6a33cbfd279a654cdc0f754008ce16->enter($__internal_65d96ae5323989a20a19b8fdf069a42f8a6a33cbfd279a654cdc0f754008ce16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 7
        echo "

<h2>Departement - Submenu - Page en construction </h2>

       
";
        
        $__internal_65d96ae5323989a20a19b8fdf069a42f8a6a33cbfd279a654cdc0f754008ce16->leave($__internal_65d96ae5323989a20a19b8fdf069a42f8a6a33cbfd279a654cdc0f754008ce16_prof);

    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_f255bcfa3dce5a5a6b5405b6e561dccf5982f8f91c0af0f5eb341209ec983ed8 = $this->env->getExtension("native_profiler");
        $__internal_f255bcfa3dce5a5a6b5405b6e561dccf5982f8f91c0af0f5eb341209ec983ed8->enter($__internal_f255bcfa3dce5a5a6b5405b6e561dccf5982f8f91c0af0f5eb341209ec983ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 16
        echo "

<h2>Departement - Body Content </h2>

       
";
        
        $__internal_f255bcfa3dce5a5a6b5405b6e561dccf5982f8f91c0af0f5eb341209ec983ed8->leave($__internal_f255bcfa3dce5a5a6b5405b6e561dccf5982f8f91c0af0f5eb341209ec983ed8_prof);

    }

    public function getTemplateName()
    {
        return "@FssWebsiteDepartement/layout.html.twig";
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
/* {% extends "::layout.html.twig" %}*/
/* {% block title %}*/
/* Departement */
/* {% endblock %}*/
/* */
/* {% block submenu %}*/
/* */
/* */
/* <h2>Departement - Submenu - Page en construction </h2>*/
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
