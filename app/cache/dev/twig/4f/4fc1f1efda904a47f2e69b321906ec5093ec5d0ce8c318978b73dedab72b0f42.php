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
        $__internal_253e65c73483bdab1c964a4ee8f0b4c2b77c0538bd38fba4efac34f82418e79d = $this->env->getExtension("native_profiler");
        $__internal_253e65c73483bdab1c964a4ee8f0b4c2b77c0538bd38fba4efac34f82418e79d->enter($__internal_253e65c73483bdab1c964a4ee8f0b4c2b77c0538bd38fba4efac34f82418e79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FssWebsiteDepartement/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_253e65c73483bdab1c964a4ee8f0b4c2b77c0538bd38fba4efac34f82418e79d->leave($__internal_253e65c73483bdab1c964a4ee8f0b4c2b77c0538bd38fba4efac34f82418e79d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_33e8c7d625d25558275d4ca58a45a2625f9cd84f4ad6d870758f5d5189b90d02 = $this->env->getExtension("native_profiler");
        $__internal_33e8c7d625d25558275d4ca58a45a2625f9cd84f4ad6d870758f5d5189b90d02->enter($__internal_33e8c7d625d25558275d4ca58a45a2625f9cd84f4ad6d870758f5d5189b90d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement 
";
        
        $__internal_33e8c7d625d25558275d4ca58a45a2625f9cd84f4ad6d870758f5d5189b90d02->leave($__internal_33e8c7d625d25558275d4ca58a45a2625f9cd84f4ad6d870758f5d5189b90d02_prof);

    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_97030a3649ebe5cae49eac98dd78db3da2a73da10614581a7afdd2400aca5701 = $this->env->getExtension("native_profiler");
        $__internal_97030a3649ebe5cae49eac98dd78db3da2a73da10614581a7afdd2400aca5701->enter($__internal_97030a3649ebe5cae49eac98dd78db3da2a73da10614581a7afdd2400aca5701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 7
        echo "

<h2>Departement - Submenu - Page en construction </h2>

       
";
        
        $__internal_97030a3649ebe5cae49eac98dd78db3da2a73da10614581a7afdd2400aca5701->leave($__internal_97030a3649ebe5cae49eac98dd78db3da2a73da10614581a7afdd2400aca5701_prof);

    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_f8d4c14d50dc97548dd761c754225e17b988c87566baa4257226958f0294f989 = $this->env->getExtension("native_profiler");
        $__internal_f8d4c14d50dc97548dd761c754225e17b988c87566baa4257226958f0294f989->enter($__internal_f8d4c14d50dc97548dd761c754225e17b988c87566baa4257226958f0294f989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 16
        echo "

<h2>Departement - Body Content </h2>

       
";
        
        $__internal_f8d4c14d50dc97548dd761c754225e17b988c87566baa4257226958f0294f989->leave($__internal_f8d4c14d50dc97548dd761c754225e17b988c87566baa4257226958f0294f989_prof);

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
