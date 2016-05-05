<?php

/* @FssWebsiteDepartement/Default/adminindex.html.twig */
class __TwigTemplate_94f575592f44f4dd60b7d9f21e64e011c380db4a25dc28a9b49d034fc15ae224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "@FssWebsiteDepartement/Default/adminindex.html.twig", 1);
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
        $__internal_b5296c6c0ca1d1faf16dffecb78821e69b47b08de8db8cb9a940f4700a6dcdc1 = $this->env->getExtension("native_profiler");
        $__internal_b5296c6c0ca1d1faf16dffecb78821e69b47b08de8db8cb9a940f4700a6dcdc1->enter($__internal_b5296c6c0ca1d1faf16dffecb78821e69b47b08de8db8cb9a940f4700a6dcdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FssWebsiteDepartement/Default/adminindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5296c6c0ca1d1faf16dffecb78821e69b47b08de8db8cb9a940f4700a6dcdc1->leave($__internal_b5296c6c0ca1d1faf16dffecb78821e69b47b08de8db8cb9a940f4700a6dcdc1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e0108e0367f6cc7de6dbaeafb1f031e5d18c9dff0336147af2a9c4e8cc56ee1 = $this->env->getExtension("native_profiler");
        $__internal_3e0108e0367f6cc7de6dbaeafb1f031e5d18c9dff0336147af2a9c4e8cc56ee1->enter($__internal_3e0108e0367f6cc7de6dbaeafb1f031e5d18c9dff0336147af2a9c4e8cc56ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Admin
";
        
        $__internal_3e0108e0367f6cc7de6dbaeafb1f031e5d18c9dff0336147af2a9c4e8cc56ee1->leave($__internal_3e0108e0367f6cc7de6dbaeafb1f031e5d18c9dff0336147af2a9c4e8cc56ee1_prof);

    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_e5e4a31bd59be54c90054bd86414b55d9d4c35a9f0661b066256534edcea1fd7 = $this->env->getExtension("native_profiler");
        $__internal_e5e4a31bd59be54c90054bd86414b55d9d4c35a9f0661b066256534edcea1fd7->enter($__internal_e5e4a31bd59be54c90054bd86414b55d9d4c35a9f0661b066256534edcea1fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 7
        echo "

<h2>Departement accueil - Submenu admin - Page en construction </h2>

       
";
        
        $__internal_e5e4a31bd59be54c90054bd86414b55d9d4c35a9f0661b066256534edcea1fd7->leave($__internal_e5e4a31bd59be54c90054bd86414b55d9d4c35a9f0661b066256534edcea1fd7_prof);

    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_6898257dfa12bd0feef21782738639099c4dbb7474a77b0deb9e93cd48e5efb0 = $this->env->getExtension("native_profiler");
        $__internal_6898257dfa12bd0feef21782738639099c4dbb7474a77b0deb9e93cd48e5efb0->enter($__internal_6898257dfa12bd0feef21782738639099c4dbb7474a77b0deb9e93cd48e5efb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 16
        echo "

<h2>Departement - Body Content admin </h2>

       
";
        
        $__internal_6898257dfa12bd0feef21782738639099c4dbb7474a77b0deb9e93cd48e5efb0->leave($__internal_6898257dfa12bd0feef21782738639099c4dbb7474a77b0deb9e93cd48e5efb0_prof);

    }

    public function getTemplateName()
    {
        return "@FssWebsiteDepartement/Default/adminindex.html.twig";
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
