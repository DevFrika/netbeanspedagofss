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
        $__internal_c67ede5255cc8a979a81961ea879ba8290022760fefde2d5c2feeacd20a3785c = $this->env->getExtension("native_profiler");
        $__internal_c67ede5255cc8a979a81961ea879ba8290022760fefde2d5c2feeacd20a3785c->enter($__internal_c67ede5255cc8a979a81961ea879ba8290022760fefde2d5c2feeacd20a3785c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FssWebsiteDepartementBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c67ede5255cc8a979a81961ea879ba8290022760fefde2d5c2feeacd20a3785c->leave($__internal_c67ede5255cc8a979a81961ea879ba8290022760fefde2d5c2feeacd20a3785c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2de4b38d70c06fe8c9739520c82646d6c0c0a520b4011170c34fc74d2dce3e88 = $this->env->getExtension("native_profiler");
        $__internal_2de4b38d70c06fe8c9739520c82646d6c0c0a520b4011170c34fc74d2dce3e88->enter($__internal_2de4b38d70c06fe8c9739520c82646d6c0c0a520b4011170c34fc74d2dce3e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement 
";
        
        $__internal_2de4b38d70c06fe8c9739520c82646d6c0c0a520b4011170c34fc74d2dce3e88->leave($__internal_2de4b38d70c06fe8c9739520c82646d6c0c0a520b4011170c34fc74d2dce3e88_prof);

    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_c4b5fc60dc081bde44609a780d811ac1b861e253df9abc406aab957bdd39f92f = $this->env->getExtension("native_profiler");
        $__internal_c4b5fc60dc081bde44609a780d811ac1b861e253df9abc406aab957bdd39f92f->enter($__internal_c4b5fc60dc081bde44609a780d811ac1b861e253df9abc406aab957bdd39f92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 7
        echo "

<h2>Departement - Submenu - Page en construction </h2>

       
";
        
        $__internal_c4b5fc60dc081bde44609a780d811ac1b861e253df9abc406aab957bdd39f92f->leave($__internal_c4b5fc60dc081bde44609a780d811ac1b861e253df9abc406aab957bdd39f92f_prof);

    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_6f71039b26c4d9d21b16c7c62443aa5922c5193fbd476323bff0ba2089adef30 = $this->env->getExtension("native_profiler");
        $__internal_6f71039b26c4d9d21b16c7c62443aa5922c5193fbd476323bff0ba2089adef30->enter($__internal_6f71039b26c4d9d21b16c7c62443aa5922c5193fbd476323bff0ba2089adef30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 16
        echo "

<h2>Departement - Body Content </h2>

       
";
        
        $__internal_6f71039b26c4d9d21b16c7c62443aa5922c5193fbd476323bff0ba2089adef30->leave($__internal_6f71039b26c4d9d21b16c7c62443aa5922c5193fbd476323bff0ba2089adef30_prof);

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
