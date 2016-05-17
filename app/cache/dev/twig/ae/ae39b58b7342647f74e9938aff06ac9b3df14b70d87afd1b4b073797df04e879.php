<?php

/* FssWebsiteDepartementBundle:Default:adminindex.html.twig */
class __TwigTemplate_7f9a4b062dbe5e5c486198694781da3d8057da046b7ecc4f47efb40c441a810f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "FssWebsiteDepartementBundle:Default:adminindex.html.twig", 1);
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
        $__internal_911c4b162ce6f536750aa33633c748ca61395bc31a4ef8dc91393599a0da19c0 = $this->env->getExtension("native_profiler");
        $__internal_911c4b162ce6f536750aa33633c748ca61395bc31a4ef8dc91393599a0da19c0->enter($__internal_911c4b162ce6f536750aa33633c748ca61395bc31a4ef8dc91393599a0da19c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FssWebsiteDepartementBundle:Default:adminindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_911c4b162ce6f536750aa33633c748ca61395bc31a4ef8dc91393599a0da19c0->leave($__internal_911c4b162ce6f536750aa33633c748ca61395bc31a4ef8dc91393599a0da19c0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_74f4e32c8d2588a24329c494a1c6aa9a795f21b23cafb3ee84620332230aa8be = $this->env->getExtension("native_profiler");
        $__internal_74f4e32c8d2588a24329c494a1c6aa9a795f21b23cafb3ee84620332230aa8be->enter($__internal_74f4e32c8d2588a24329c494a1c6aa9a795f21b23cafb3ee84620332230aa8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Admin
";
        
        $__internal_74f4e32c8d2588a24329c494a1c6aa9a795f21b23cafb3ee84620332230aa8be->leave($__internal_74f4e32c8d2588a24329c494a1c6aa9a795f21b23cafb3ee84620332230aa8be_prof);

    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_8c831e9734f4cafdd4bf36ccb899b825077f5697cee6a96430d911af3c3bdbe3 = $this->env->getExtension("native_profiler");
        $__internal_8c831e9734f4cafdd4bf36ccb899b825077f5697cee6a96430d911af3c3bdbe3->enter($__internal_8c831e9734f4cafdd4bf36ccb899b825077f5697cee6a96430d911af3c3bdbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 7
        echo "

<h2>Departement accueil - Submenu admin - Page en construction </h2>

       
";
        
        $__internal_8c831e9734f4cafdd4bf36ccb899b825077f5697cee6a96430d911af3c3bdbe3->leave($__internal_8c831e9734f4cafdd4bf36ccb899b825077f5697cee6a96430d911af3c3bdbe3_prof);

    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_7290632f41bb2f8a8f3d54e3dc7de628ad414ba1cdcc6ea58e70fbd4c8f6a029 = $this->env->getExtension("native_profiler");
        $__internal_7290632f41bb2f8a8f3d54e3dc7de628ad414ba1cdcc6ea58e70fbd4c8f6a029->enter($__internal_7290632f41bb2f8a8f3d54e3dc7de628ad414ba1cdcc6ea58e70fbd4c8f6a029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 16
        echo "

<h2>Departement - Body Content admin </h2>

       
";
        
        $__internal_7290632f41bb2f8a8f3d54e3dc7de628ad414ba1cdcc6ea58e70fbd4c8f6a029->leave($__internal_7290632f41bb2f8a8f3d54e3dc7de628ad414ba1cdcc6ea58e70fbd4c8f6a029_prof);

    }

    public function getTemplateName()
    {
        return "FssWebsiteDepartementBundle:Default:adminindex.html.twig";
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
