<?php

/* @PedagoFssUser/Default/etudiant.html.twig */
class __TwigTemplate_61e85163c98265d5ec7484904659f9cd39c9d595a2f7ff963b96875721fa90bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@PedagoFssUser/Default/etudiant.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_146a7d0d70c852f4ebb1ed2d1c8c8ee3caf812722db8b161d28e432f62c7ccbd = $this->env->getExtension("native_profiler");
        $__internal_146a7d0d70c852f4ebb1ed2d1c8c8ee3caf812722db8b161d28e432f62c7ccbd->enter($__internal_146a7d0d70c852f4ebb1ed2d1c8c8ee3caf812722db8b161d28e432f62c7ccbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagoFssUser/Default/etudiant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_146a7d0d70c852f4ebb1ed2d1c8c8ee3caf812722db8b161d28e432f62c7ccbd->leave($__internal_146a7d0d70c852f4ebb1ed2d1c8c8ee3caf812722db8b161d28e432f62c7ccbd_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_28c67c80401db9b8686ea2994324eaebb071970dc023990dc364db0d3f2e0ee2 = $this->env->getExtension("native_profiler");
        $__internal_28c67c80401db9b8686ea2994324eaebb071970dc023990dc364db0d3f2e0ee2->enter($__internal_28c67c80401db9b8686ea2994324eaebb071970dc023990dc364db0d3f2e0ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Utilisateur - Etudiant
";
        
        $__internal_28c67c80401db9b8686ea2994324eaebb071970dc023990dc364db0d3f2e0ee2->leave($__internal_28c67c80401db9b8686ea2994324eaebb071970dc023990dc364db0d3f2e0ee2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c82a57d9c4a4a136723cf651ca3de9e7dcc595902fc723b4027a71cc18131819 = $this->env->getExtension("native_profiler");
        $__internal_c82a57d9c4a4a136723cf651ca3de9e7dcc595902fc723b4027a71cc18131819->enter($__internal_c82a57d9c4a4a136723cf651ca3de9e7dcc595902fc723b4027a71cc18131819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2>Utilisateur - Page Etudiant </h2>

<p>
Page en construction
</p>

";
        
        $__internal_c82a57d9c4a4a136723cf651ca3de9e7dcc595902fc723b4027a71cc18131819->leave($__internal_c82a57d9c4a4a136723cf651ca3de9e7dcc595902fc723b4027a71cc18131819_prof);

    }

    public function getTemplateName()
    {
        return "@PedagoFssUser/Default/etudiant.html.twig";
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
/* {% extends "::layout.html.twig" %}*/
/* {% block title %}*/
/* Utilisateur - Etudiant*/
/* {% endblock %}*/
/* {% block body %}*/
/* <h2>Utilisateur - Page Etudiant </h2>*/
/* */
/* <p>*/
/* Page en construction*/
/* </p>*/
/* */
/* {% endblock %}*/
