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
        $__internal_1f9991d87a2109b711e24dda03484b18565ec87149837bad4ae0e3e378495c81 = $this->env->getExtension("native_profiler");
        $__internal_1f9991d87a2109b711e24dda03484b18565ec87149837bad4ae0e3e378495c81->enter($__internal_1f9991d87a2109b711e24dda03484b18565ec87149837bad4ae0e3e378495c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FssWebsiteDepartement/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f9991d87a2109b711e24dda03484b18565ec87149837bad4ae0e3e378495c81->leave($__internal_1f9991d87a2109b711e24dda03484b18565ec87149837bad4ae0e3e378495c81_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f832060e1a64d5ccc6bb09f0ce1727a189d31cdaade1b9327c8bc4d9a69c2647 = $this->env->getExtension("native_profiler");
        $__internal_f832060e1a64d5ccc6bb09f0ce1727a189d31cdaade1b9327c8bc4d9a69c2647->enter($__internal_f832060e1a64d5ccc6bb09f0ce1727a189d31cdaade1b9327c8bc4d9a69c2647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Admin
";
        
        $__internal_f832060e1a64d5ccc6bb09f0ce1727a189d31cdaade1b9327c8bc4d9a69c2647->leave($__internal_f832060e1a64d5ccc6bb09f0ce1727a189d31cdaade1b9327c8bc4d9a69c2647_prof);

    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_14425c94ceeb12038223b30c223f30fbe049c252ba22b971a0a465b809f3547e = $this->env->getExtension("native_profiler");
        $__internal_14425c94ceeb12038223b30c223f30fbe049c252ba22b971a0a465b809f3547e->enter($__internal_14425c94ceeb12038223b30c223f30fbe049c252ba22b971a0a465b809f3547e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 7
        echo "

<h2>Departement Normale - Submenu - Page en construction </h2>

       
";
        
        $__internal_14425c94ceeb12038223b30c223f30fbe049c252ba22b971a0a465b809f3547e->leave($__internal_14425c94ceeb12038223b30c223f30fbe049c252ba22b971a0a465b809f3547e_prof);

    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_51a3866c8bf7d967bfe7e49f2ed5e58a261786daaaa2a4377d1f61075def25f5 = $this->env->getExtension("native_profiler");
        $__internal_51a3866c8bf7d967bfe7e49f2ed5e58a261786daaaa2a4377d1f61075def25f5->enter($__internal_51a3866c8bf7d967bfe7e49f2ed5e58a261786daaaa2a4377d1f61075def25f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 16
        echo "

<h2>Departement - Body Content </h2>

       
";
        
        $__internal_51a3866c8bf7d967bfe7e49f2ed5e58a261786daaaa2a4377d1f61075def25f5->leave($__internal_51a3866c8bf7d967bfe7e49f2ed5e58a261786daaaa2a4377d1f61075def25f5_prof);

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
