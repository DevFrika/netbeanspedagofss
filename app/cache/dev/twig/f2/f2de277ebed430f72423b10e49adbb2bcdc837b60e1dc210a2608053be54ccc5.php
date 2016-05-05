<?php

/* @FssWebsiteDepartement/Default/profindexdep.html.twig */
class __TwigTemplate_3cb03432614dcce712ad6a7a1de1e819420b79ccafb6da989eb42ffc2e96eee2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "@FssWebsiteDepartement/Default/profindexdep.html.twig", 1);
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
        $__internal_08bb1beda2b29857734e5cf4bee3b25405e81b8d7b2ec5a2d791b71056cec2c5 = $this->env->getExtension("native_profiler");
        $__internal_08bb1beda2b29857734e5cf4bee3b25405e81b8d7b2ec5a2d791b71056cec2c5->enter($__internal_08bb1beda2b29857734e5cf4bee3b25405e81b8d7b2ec5a2d791b71056cec2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FssWebsiteDepartement/Default/profindexdep.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08bb1beda2b29857734e5cf4bee3b25405e81b8d7b2ec5a2d791b71056cec2c5->leave($__internal_08bb1beda2b29857734e5cf4bee3b25405e81b8d7b2ec5a2d791b71056cec2c5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6dfd687d95800fa039f932fc4419179e1f0179f5eb435c5a246e2a029ce19f60 = $this->env->getExtension("native_profiler");
        $__internal_6dfd687d95800fa039f932fc4419179e1f0179f5eb435c5a246e2a029ce19f60->enter($__internal_6dfd687d95800fa039f932fc4419179e1f0179f5eb435c5a246e2a029ce19f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Normale
";
        
        $__internal_6dfd687d95800fa039f932fc4419179e1f0179f5eb435c5a246e2a029ce19f60->leave($__internal_6dfd687d95800fa039f932fc4419179e1f0179f5eb435c5a246e2a029ce19f60_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fe78253bdbba07befc591a3bd52dd23d9265d303a2e824e734d548ecf885628 = $this->env->getExtension("native_profiler");
        $__internal_9fe78253bdbba07befc591a3bd52dd23d9265d303a2e824e734d548ecf885628->enter($__internal_9fe78253bdbba07befc591a3bd52dd23d9265d303a2e824e734d548ecf885628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


<h2>Departement - Page quelconque prof - Page en construction </h2>

       



";
        
        $__internal_9fe78253bdbba07befc591a3bd52dd23d9265d303a2e824e734d548ecf885628->leave($__internal_9fe78253bdbba07befc591a3bd52dd23d9265d303a2e824e734d548ecf885628_prof);

    }

    public function getTemplateName()
    {
        return "@FssWebsiteDepartement/Default/profindexdep.html.twig";
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
/* <h2>Departement - Page quelconque prof - Page en construction </h2>*/
/* */
/*        */
/* */
/* */
/* */
/* {% endblock %}*/
