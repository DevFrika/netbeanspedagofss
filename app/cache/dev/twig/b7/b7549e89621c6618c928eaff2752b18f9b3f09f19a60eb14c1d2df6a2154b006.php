<?php

/* FssWebsiteDepartementBundle:Default:etudiantindex.html.twig */
class __TwigTemplate_00100623bb08d10aee52747781073469932952af95b328de910fc230f2825356 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "FssWebsiteDepartementBundle:Default:etudiantindex.html.twig", 1);
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
        $__internal_5512e47c117c744d830354c58d7dc549de8c215aff3fee8bb1273b7e297fd099 = $this->env->getExtension("native_profiler");
        $__internal_5512e47c117c744d830354c58d7dc549de8c215aff3fee8bb1273b7e297fd099->enter($__internal_5512e47c117c744d830354c58d7dc549de8c215aff3fee8bb1273b7e297fd099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FssWebsiteDepartementBundle:Default:etudiantindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5512e47c117c744d830354c58d7dc549de8c215aff3fee8bb1273b7e297fd099->leave($__internal_5512e47c117c744d830354c58d7dc549de8c215aff3fee8bb1273b7e297fd099_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a67905f8c40f577d738d15c9bc3807a2c7294becba6313edabce87b3bd12e24 = $this->env->getExtension("native_profiler");
        $__internal_0a67905f8c40f577d738d15c9bc3807a2c7294becba6313edabce87b3bd12e24->enter($__internal_0a67905f8c40f577d738d15c9bc3807a2c7294becba6313edabce87b3bd12e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Admin
";
        
        $__internal_0a67905f8c40f577d738d15c9bc3807a2c7294becba6313edabce87b3bd12e24->leave($__internal_0a67905f8c40f577d738d15c9bc3807a2c7294becba6313edabce87b3bd12e24_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d2b373ff15c5dcf529ef5a6964843c487308bf0c5fab6fb1968e705c13ea5b5 = $this->env->getExtension("native_profiler");
        $__internal_2d2b373ff15c5dcf529ef5a6964843c487308bf0c5fab6fb1968e705c13ea5b5->enter($__internal_2d2b373ff15c5dcf529ef5a6964843c487308bf0c5fab6fb1968e705c13ea5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "


<h2>Departement - Page d'etudiant - Page en construction </h2>

       



";
        
        $__internal_2d2b373ff15c5dcf529ef5a6964843c487308bf0c5fab6fb1968e705c13ea5b5->leave($__internal_2d2b373ff15c5dcf529ef5a6964843c487308bf0c5fab6fb1968e705c13ea5b5_prof);

    }

    public function getTemplateName()
    {
        return "FssWebsiteDepartementBundle:Default:etudiantindex.html.twig";
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
/* <h2>Departement - Page d'etudiant - Page en construction </h2>*/
/* */
/*        */
/* */
/* */
/* */
/* {% endblock %}*/
