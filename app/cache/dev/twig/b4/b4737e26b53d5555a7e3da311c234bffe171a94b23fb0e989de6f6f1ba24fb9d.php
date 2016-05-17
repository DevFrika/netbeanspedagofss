<?php

/* FssWebsiteDepartementBundle::layout.html.twig */
class __TwigTemplate_0f7914acd7e3e59c3884ac03504c73f48c87aaeb1506acbd44be52f4bff8229d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "FssWebsiteDepartementBundle::layout.html.twig", 1);
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
        $__internal_d8d64ebe0536155fff7b47a763c1040c4e2ba94cd8f690748457720024bd81bc = $this->env->getExtension("native_profiler");
        $__internal_d8d64ebe0536155fff7b47a763c1040c4e2ba94cd8f690748457720024bd81bc->enter($__internal_d8d64ebe0536155fff7b47a763c1040c4e2ba94cd8f690748457720024bd81bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FssWebsiteDepartementBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8d64ebe0536155fff7b47a763c1040c4e2ba94cd8f690748457720024bd81bc->leave($__internal_d8d64ebe0536155fff7b47a763c1040c4e2ba94cd8f690748457720024bd81bc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ce66ca1168727e8fe35294042a70d31a86768f6d4e1e6342861d2c87facbcaa = $this->env->getExtension("native_profiler");
        $__internal_8ce66ca1168727e8fe35294042a70d31a86768f6d4e1e6342861d2c87facbcaa->enter($__internal_8ce66ca1168727e8fe35294042a70d31a86768f6d4e1e6342861d2c87facbcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement 
";
        
        $__internal_8ce66ca1168727e8fe35294042a70d31a86768f6d4e1e6342861d2c87facbcaa->leave($__internal_8ce66ca1168727e8fe35294042a70d31a86768f6d4e1e6342861d2c87facbcaa_prof);

    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_6dd0fb460a3c4ac5a7ef75aff403708facdb54d05ba1679c23e869b46eccb403 = $this->env->getExtension("native_profiler");
        $__internal_6dd0fb460a3c4ac5a7ef75aff403708facdb54d05ba1679c23e869b46eccb403->enter($__internal_6dd0fb460a3c4ac5a7ef75aff403708facdb54d05ba1679c23e869b46eccb403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 7
        echo "

<h2>Departement - Submenu - Page en construction </h2>

       
";
        
        $__internal_6dd0fb460a3c4ac5a7ef75aff403708facdb54d05ba1679c23e869b46eccb403->leave($__internal_6dd0fb460a3c4ac5a7ef75aff403708facdb54d05ba1679c23e869b46eccb403_prof);

    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_c8b1cf57a53bcb5d1a4bdea3c6759857635705aa24f036ce4a62ed868d2e4cae = $this->env->getExtension("native_profiler");
        $__internal_c8b1cf57a53bcb5d1a4bdea3c6759857635705aa24f036ce4a62ed868d2e4cae->enter($__internal_c8b1cf57a53bcb5d1a4bdea3c6759857635705aa24f036ce4a62ed868d2e4cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 16
        echo "

<h2>Departement - Body Content </h2>

       
";
        
        $__internal_c8b1cf57a53bcb5d1a4bdea3c6759857635705aa24f036ce4a62ed868d2e4cae->leave($__internal_c8b1cf57a53bcb5d1a4bdea3c6759857635705aa24f036ce4a62ed868d2e4cae_prof);

    }

    public function getTemplateName()
    {
        return "FssWebsiteDepartementBundle::layout.html.twig";
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
