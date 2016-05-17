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
        $__internal_9bcbae3e1b7d01eed4983892427fd92aab93dc2c477a0be7724d78f409b6accc = $this->env->getExtension("native_profiler");
        $__internal_9bcbae3e1b7d01eed4983892427fd92aab93dc2c477a0be7724d78f409b6accc->enter($__internal_9bcbae3e1b7d01eed4983892427fd92aab93dc2c477a0be7724d78f409b6accc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FssWebsiteDepartementBundle:Default:etudiantindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bcbae3e1b7d01eed4983892427fd92aab93dc2c477a0be7724d78f409b6accc->leave($__internal_9bcbae3e1b7d01eed4983892427fd92aab93dc2c477a0be7724d78f409b6accc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef91b7cd7dc2f54671d7cbb0f0b4f8b99c7be2887397ccbcbe81b2a6137b3852 = $this->env->getExtension("native_profiler");
        $__internal_ef91b7cd7dc2f54671d7cbb0f0b4f8b99c7be2887397ccbcbe81b2a6137b3852->enter($__internal_ef91b7cd7dc2f54671d7cbb0f0b4f8b99c7be2887397ccbcbe81b2a6137b3852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Admin
";
        
        $__internal_ef91b7cd7dc2f54671d7cbb0f0b4f8b99c7be2887397ccbcbe81b2a6137b3852->leave($__internal_ef91b7cd7dc2f54671d7cbb0f0b4f8b99c7be2887397ccbcbe81b2a6137b3852_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd3be23d24d5684c6b7a82989277ef43fbdf02a2d347bfefb95f7ec5637efc4d = $this->env->getExtension("native_profiler");
        $__internal_fd3be23d24d5684c6b7a82989277ef43fbdf02a2d347bfefb95f7ec5637efc4d->enter($__internal_fd3be23d24d5684c6b7a82989277ef43fbdf02a2d347bfefb95f7ec5637efc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "


<h2>Departement - Page d'etudiant - Page en construction </h2>

       



";
        
        $__internal_fd3be23d24d5684c6b7a82989277ef43fbdf02a2d347bfefb95f7ec5637efc4d->leave($__internal_fd3be23d24d5684c6b7a82989277ef43fbdf02a2d347bfefb95f7ec5637efc4d_prof);

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
