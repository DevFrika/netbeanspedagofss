<?php

/* FssWebsiteDepartementBundle:Default:profindex.html.twig */
class __TwigTemplate_79fb73034bb7be053c9c6a6dfb326202c4af5e1ce1ed1226f7d6218c5917907a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "FssWebsiteDepartementBundle:Default:profindex.html.twig", 1);
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
        $__internal_b56a9bbd457f71ed231f7ac9aa2ae6efe4f9cec53ae7179edfa177895fc22a6d = $this->env->getExtension("native_profiler");
        $__internal_b56a9bbd457f71ed231f7ac9aa2ae6efe4f9cec53ae7179edfa177895fc22a6d->enter($__internal_b56a9bbd457f71ed231f7ac9aa2ae6efe4f9cec53ae7179edfa177895fc22a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FssWebsiteDepartementBundle:Default:profindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b56a9bbd457f71ed231f7ac9aa2ae6efe4f9cec53ae7179edfa177895fc22a6d->leave($__internal_b56a9bbd457f71ed231f7ac9aa2ae6efe4f9cec53ae7179edfa177895fc22a6d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_040a645616189a7a57bf3974f8d0f6be798b5d7069e2117cabd8298bd6033085 = $this->env->getExtension("native_profiler");
        $__internal_040a645616189a7a57bf3974f8d0f6be798b5d7069e2117cabd8298bd6033085->enter($__internal_040a645616189a7a57bf3974f8d0f6be798b5d7069e2117cabd8298bd6033085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Admin
";
        
        $__internal_040a645616189a7a57bf3974f8d0f6be798b5d7069e2117cabd8298bd6033085->leave($__internal_040a645616189a7a57bf3974f8d0f6be798b5d7069e2117cabd8298bd6033085_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_16f42b1956d164a1d2f5ee66cdfee39bace661960aa58a2375a8ddd7ff6d1055 = $this->env->getExtension("native_profiler");
        $__internal_16f42b1956d164a1d2f5ee66cdfee39bace661960aa58a2375a8ddd7ff6d1055->enter($__internal_16f42b1956d164a1d2f5ee66cdfee39bace661960aa58a2375a8ddd7ff6d1055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "


<h2>Departement - Page prof - Page en construction </h2>

       



";
        
        $__internal_16f42b1956d164a1d2f5ee66cdfee39bace661960aa58a2375a8ddd7ff6d1055->leave($__internal_16f42b1956d164a1d2f5ee66cdfee39bace661960aa58a2375a8ddd7ff6d1055_prof);

    }

    public function getTemplateName()
    {
        return "FssWebsiteDepartementBundle:Default:profindex.html.twig";
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
