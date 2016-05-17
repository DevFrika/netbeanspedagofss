<?php

/* @FssWebsiteDepartement/Default/adminindexdep.html.twig */
class __TwigTemplate_00c291365b5d84414c026c0b088b9b7d6c64afbb2b89116376c38bb14f380fbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "@FssWebsiteDepartement/Default/adminindexdep.html.twig", 1);
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
        $__internal_e942d4963cd86d933c4b1a5f9eab6a687246feafab909969255190ba2af4827d = $this->env->getExtension("native_profiler");
        $__internal_e942d4963cd86d933c4b1a5f9eab6a687246feafab909969255190ba2af4827d->enter($__internal_e942d4963cd86d933c4b1a5f9eab6a687246feafab909969255190ba2af4827d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FssWebsiteDepartement/Default/adminindexdep.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e942d4963cd86d933c4b1a5f9eab6a687246feafab909969255190ba2af4827d->leave($__internal_e942d4963cd86d933c4b1a5f9eab6a687246feafab909969255190ba2af4827d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_396f5036cedf87209072cca05c8adec5513a5d2f170cfd75ce1726fa0f6bf279 = $this->env->getExtension("native_profiler");
        $__internal_396f5036cedf87209072cca05c8adec5513a5d2f170cfd75ce1726fa0f6bf279->enter($__internal_396f5036cedf87209072cca05c8adec5513a5d2f170cfd75ce1726fa0f6bf279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Normale
";
        
        $__internal_396f5036cedf87209072cca05c8adec5513a5d2f170cfd75ce1726fa0f6bf279->leave($__internal_396f5036cedf87209072cca05c8adec5513a5d2f170cfd75ce1726fa0f6bf279_prof);

    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_d60211be2d2ea6e8a97a02fcd4eb4dfa6ca5f1b223ee8c61cf52ab5b7f8b4cc6 = $this->env->getExtension("native_profiler");
        $__internal_d60211be2d2ea6e8a97a02fcd4eb4dfa6ca5f1b223ee8c61cf52ab5b7f8b4cc6->enter($__internal_d60211be2d2ea6e8a97a02fcd4eb4dfa6ca5f1b223ee8c61cf52ab5b7f8b4cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 7
        echo "

<h2>Departement de ( ??? ) - Submenu admin - Page en construction </h2>

       
";
        
        $__internal_d60211be2d2ea6e8a97a02fcd4eb4dfa6ca5f1b223ee8c61cf52ab5b7f8b4cc6->leave($__internal_d60211be2d2ea6e8a97a02fcd4eb4dfa6ca5f1b223ee8c61cf52ab5b7f8b4cc6_prof);

    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_528a9f4e91b98c074f997f3c3e24702c8f35435472a79e784c593c6da0dd6088 = $this->env->getExtension("native_profiler");
        $__internal_528a9f4e91b98c074f997f3c3e24702c8f35435472a79e784c593c6da0dd6088->enter($__internal_528a9f4e91b98c074f997f3c3e24702c8f35435472a79e784c593c6da0dd6088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 16
        echo "

<h2>Departement - Body Content admin </h2>

       
";
        
        $__internal_528a9f4e91b98c074f997f3c3e24702c8f35435472a79e784c593c6da0dd6088->leave($__internal_528a9f4e91b98c074f997f3c3e24702c8f35435472a79e784c593c6da0dd6088_prof);

    }

    public function getTemplateName()
    {
        return "@FssWebsiteDepartement/Default/adminindexdep.html.twig";
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
/* Departement - Normale*/
/* {% endblock %}*/
/* */
/* {% block submenu %}*/
/* */
/* */
/* <h2>Departement de ( ??? ) - Submenu admin - Page en construction </h2>*/
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
