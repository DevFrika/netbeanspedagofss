<?php

/* FssWebsiteDepartementBundle:Default:etudiantindexdep.html.twig */
class __TwigTemplate_e51b455db3c3d70ea7fc220292b35ed7f2158166fb9b70479eb00e9f75e2e8c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "FssWebsiteDepartementBundle:Default:etudiantindexdep.html.twig", 1);
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
        $__internal_ffaca1c678846410d9cc9f3223e8689c50dd23e3cba1268f571a903c87141d94 = $this->env->getExtension("native_profiler");
        $__internal_ffaca1c678846410d9cc9f3223e8689c50dd23e3cba1268f571a903c87141d94->enter($__internal_ffaca1c678846410d9cc9f3223e8689c50dd23e3cba1268f571a903c87141d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FssWebsiteDepartementBundle:Default:etudiantindexdep.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffaca1c678846410d9cc9f3223e8689c50dd23e3cba1268f571a903c87141d94->leave($__internal_ffaca1c678846410d9cc9f3223e8689c50dd23e3cba1268f571a903c87141d94_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b0213870b3b800449697c23a6f4f2cdd08a51f6f9df1f47375ecc764643245f = $this->env->getExtension("native_profiler");
        $__internal_1b0213870b3b800449697c23a6f4f2cdd08a51f6f9df1f47375ecc764643245f->enter($__internal_1b0213870b3b800449697c23a6f4f2cdd08a51f6f9df1f47375ecc764643245f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Normale
";
        
        $__internal_1b0213870b3b800449697c23a6f4f2cdd08a51f6f9df1f47375ecc764643245f->leave($__internal_1b0213870b3b800449697c23a6f4f2cdd08a51f6f9df1f47375ecc764643245f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_221bf2900d908dcfc7b3ff475744756b6d4e8ecbfcdb93ea4253c1918455555e = $this->env->getExtension("native_profiler");
        $__internal_221bf2900d908dcfc7b3ff475744756b6d4e8ecbfcdb93ea4253c1918455555e->enter($__internal_221bf2900d908dcfc7b3ff475744756b6d4e8ecbfcdb93ea4253c1918455555e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


<h2>Departement - Page quelconque etudiant - Page en construction </h2>

       



";
        
        $__internal_221bf2900d908dcfc7b3ff475744756b6d4e8ecbfcdb93ea4253c1918455555e->leave($__internal_221bf2900d908dcfc7b3ff475744756b6d4e8ecbfcdb93ea4253c1918455555e_prof);

    }

    public function getTemplateName()
    {
        return "FssWebsiteDepartementBundle:Default:etudiantindexdep.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "FssWebsiteDepartementBundle::layout.html.twig" %}*/
/* {% block title %}*/
/* Departement - Normale*/
/* {% endblock %}*/
/* {% block body %}*/
/* */
/* */
/* */
/* <h2>Departement - Page quelconque etudiant - Page en construction </h2>*/
/* */
/*        */
/* */
/* */
/* */
/* {% endblock %}*/
