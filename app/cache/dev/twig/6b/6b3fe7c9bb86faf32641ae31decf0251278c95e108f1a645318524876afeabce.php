<?php

/* @FssWebsiteDepartement/Default/index.html.twig */
class __TwigTemplate_3757e7c06bbf47ab0f2772d5a7f63483393fdde75b97abf44988d2a581bbd54e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "@FssWebsiteDepartement/Default/index.html.twig", 1);
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
        $__internal_f1f39dbf2b884493d56c82a7d3fdb16363be293fe1c4e6f419e64e574b3b45d5 = $this->env->getExtension("native_profiler");
        $__internal_f1f39dbf2b884493d56c82a7d3fdb16363be293fe1c4e6f419e64e574b3b45d5->enter($__internal_f1f39dbf2b884493d56c82a7d3fdb16363be293fe1c4e6f419e64e574b3b45d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FssWebsiteDepartement/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1f39dbf2b884493d56c82a7d3fdb16363be293fe1c4e6f419e64e574b3b45d5->leave($__internal_f1f39dbf2b884493d56c82a7d3fdb16363be293fe1c4e6f419e64e574b3b45d5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1a344b4f85a9330d71d212e5811a53f81e081a1c99c968d52ad0681eee5dcce = $this->env->getExtension("native_profiler");
        $__internal_b1a344b4f85a9330d71d212e5811a53f81e081a1c99c968d52ad0681eee5dcce->enter($__internal_b1a344b4f85a9330d71d212e5811a53f81e081a1c99c968d52ad0681eee5dcce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Admin
";
        
        $__internal_b1a344b4f85a9330d71d212e5811a53f81e081a1c99c968d52ad0681eee5dcce->leave($__internal_b1a344b4f85a9330d71d212e5811a53f81e081a1c99c968d52ad0681eee5dcce_prof);

    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_8110201ce7319a9ba0dfbc1a73cdf31602c13d6de070f26053de9af354a45346 = $this->env->getExtension("native_profiler");
        $__internal_8110201ce7319a9ba0dfbc1a73cdf31602c13d6de070f26053de9af354a45346->enter($__internal_8110201ce7319a9ba0dfbc1a73cdf31602c13d6de070f26053de9af354a45346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 7
        echo "

<h2>Departement Normale - Submenu - Page en construction </h2>

       
";
        
        $__internal_8110201ce7319a9ba0dfbc1a73cdf31602c13d6de070f26053de9af354a45346->leave($__internal_8110201ce7319a9ba0dfbc1a73cdf31602c13d6de070f26053de9af354a45346_prof);

    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_8b59187a419faef03935c554317e4323450fc2962b4dc9b2a731adf07acdcb36 = $this->env->getExtension("native_profiler");
        $__internal_8b59187a419faef03935c554317e4323450fc2962b4dc9b2a731adf07acdcb36->enter($__internal_8b59187a419faef03935c554317e4323450fc2962b4dc9b2a731adf07acdcb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 16
        echo "

<h2>Departement - Body Content </h2>

       
";
        
        $__internal_8b59187a419faef03935c554317e4323450fc2962b4dc9b2a731adf07acdcb36->leave($__internal_8b59187a419faef03935c554317e4323450fc2962b4dc9b2a731adf07acdcb36_prof);

    }

    public function getTemplateName()
    {
        return "@FssWebsiteDepartement/Default/index.html.twig";
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
