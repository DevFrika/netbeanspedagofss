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
        $__internal_c3729a3c8e97fd357a4abd5a7193dd4e6184ff5e948c1eea9a2a1f55c256889e = $this->env->getExtension("native_profiler");
        $__internal_c3729a3c8e97fd357a4abd5a7193dd4e6184ff5e948c1eea9a2a1f55c256889e->enter($__internal_c3729a3c8e97fd357a4abd5a7193dd4e6184ff5e948c1eea9a2a1f55c256889e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FssWebsiteDepartement/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3729a3c8e97fd357a4abd5a7193dd4e6184ff5e948c1eea9a2a1f55c256889e->leave($__internal_c3729a3c8e97fd357a4abd5a7193dd4e6184ff5e948c1eea9a2a1f55c256889e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c58d805dd20915f04352ece16cc5646ebbcf670c01ab8995a66ca46ada475449 = $this->env->getExtension("native_profiler");
        $__internal_c58d805dd20915f04352ece16cc5646ebbcf670c01ab8995a66ca46ada475449->enter($__internal_c58d805dd20915f04352ece16cc5646ebbcf670c01ab8995a66ca46ada475449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement 
";
        
        $__internal_c58d805dd20915f04352ece16cc5646ebbcf670c01ab8995a66ca46ada475449->leave($__internal_c58d805dd20915f04352ece16cc5646ebbcf670c01ab8995a66ca46ada475449_prof);

    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_f727c44b45984bb018df97d08c53fa133f10092abc563375bfba688a06e74486 = $this->env->getExtension("native_profiler");
        $__internal_f727c44b45984bb018df97d08c53fa133f10092abc563375bfba688a06e74486->enter($__internal_f727c44b45984bb018df97d08c53fa133f10092abc563375bfba688a06e74486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 7
        echo "

<h2>Departement - Submenu - Page en construction </h2>

       
";
        
        $__internal_f727c44b45984bb018df97d08c53fa133f10092abc563375bfba688a06e74486->leave($__internal_f727c44b45984bb018df97d08c53fa133f10092abc563375bfba688a06e74486_prof);

    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_36f55fdcfe280e81684619da61331563faf70a5b3c97fab9d72e2082cce34df9 = $this->env->getExtension("native_profiler");
        $__internal_36f55fdcfe280e81684619da61331563faf70a5b3c97fab9d72e2082cce34df9->enter($__internal_36f55fdcfe280e81684619da61331563faf70a5b3c97fab9d72e2082cce34df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 16
        echo "

<h2>Departement - Body Content </h2>

       
";
        
        $__internal_36f55fdcfe280e81684619da61331563faf70a5b3c97fab9d72e2082cce34df9->leave($__internal_36f55fdcfe280e81684619da61331563faf70a5b3c97fab9d72e2082cce34df9_prof);

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
