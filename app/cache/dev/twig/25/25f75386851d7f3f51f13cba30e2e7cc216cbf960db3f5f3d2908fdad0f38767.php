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
        $__internal_c6609a30787e0ad1eca07da080c03441cce8af506b3747963e8e7f21cdcfaa2d = $this->env->getExtension("native_profiler");
        $__internal_c6609a30787e0ad1eca07da080c03441cce8af506b3747963e8e7f21cdcfaa2d->enter($__internal_c6609a30787e0ad1eca07da080c03441cce8af506b3747963e8e7f21cdcfaa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FssWebsiteDepartement/Default/profindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6609a30787e0ad1eca07da080c03441cce8af506b3747963e8e7f21cdcfaa2d->leave($__internal_c6609a30787e0ad1eca07da080c03441cce8af506b3747963e8e7f21cdcfaa2d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_fef8ea97e6d0967ef522392e6b8b4c5ef3f9fedc87048b657b1c82f69d84ec7b = $this->env->getExtension("native_profiler");
        $__internal_fef8ea97e6d0967ef522392e6b8b4c5ef3f9fedc87048b657b1c82f69d84ec7b->enter($__internal_fef8ea97e6d0967ef522392e6b8b4c5ef3f9fedc87048b657b1c82f69d84ec7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Admin
";
        
        $__internal_fef8ea97e6d0967ef522392e6b8b4c5ef3f9fedc87048b657b1c82f69d84ec7b->leave($__internal_fef8ea97e6d0967ef522392e6b8b4c5ef3f9fedc87048b657b1c82f69d84ec7b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5d2bf11dd495327027e5e6706b603a5e8736f5eef15d5d9191a554c521298cf = $this->env->getExtension("native_profiler");
        $__internal_d5d2bf11dd495327027e5e6706b603a5e8736f5eef15d5d9191a554c521298cf->enter($__internal_d5d2bf11dd495327027e5e6706b603a5e8736f5eef15d5d9191a554c521298cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "


<h2>Departement - Page prof - Page en construction </h2>

       



";
        
        $__internal_d5d2bf11dd495327027e5e6706b603a5e8736f5eef15d5d9191a554c521298cf->leave($__internal_d5d2bf11dd495327027e5e6706b603a5e8736f5eef15d5d9191a554c521298cf_prof);

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
