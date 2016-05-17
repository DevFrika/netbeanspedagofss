<?php

/* @FssWebsiteDepartement/Default/adminindex.html.twig */
class __TwigTemplate_94f575592f44f4dd60b7d9f21e64e011c380db4a25dc28a9b49d034fc15ae224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "@FssWebsiteDepartement/Default/adminindex.html.twig", 1);
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
        $__internal_b449d98ea8cf1f6faf534dad2c35891072ed8ef6f37ed3c42ddb3ddb620de538 = $this->env->getExtension("native_profiler");
        $__internal_b449d98ea8cf1f6faf534dad2c35891072ed8ef6f37ed3c42ddb3ddb620de538->enter($__internal_b449d98ea8cf1f6faf534dad2c35891072ed8ef6f37ed3c42ddb3ddb620de538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FssWebsiteDepartement/Default/adminindex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b449d98ea8cf1f6faf534dad2c35891072ed8ef6f37ed3c42ddb3ddb620de538->leave($__internal_b449d98ea8cf1f6faf534dad2c35891072ed8ef6f37ed3c42ddb3ddb620de538_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2fd116eca2b03b694409ffd41b47351b9fc30dfd295c7268531069230b294530 = $this->env->getExtension("native_profiler");
        $__internal_2fd116eca2b03b694409ffd41b47351b9fc30dfd295c7268531069230b294530->enter($__internal_2fd116eca2b03b694409ffd41b47351b9fc30dfd295c7268531069230b294530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Admin
";
        
        $__internal_2fd116eca2b03b694409ffd41b47351b9fc30dfd295c7268531069230b294530->leave($__internal_2fd116eca2b03b694409ffd41b47351b9fc30dfd295c7268531069230b294530_prof);

    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_d98a0a4b45784ffd1f243708c73d7d91a41fa339001421d1a133344f88c4d57a = $this->env->getExtension("native_profiler");
        $__internal_d98a0a4b45784ffd1f243708c73d7d91a41fa339001421d1a133344f88c4d57a->enter($__internal_d98a0a4b45784ffd1f243708c73d7d91a41fa339001421d1a133344f88c4d57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 7
        echo "

<h2>Departement accueil - Submenu admin - Page en construction </h2>

       
";
        
        $__internal_d98a0a4b45784ffd1f243708c73d7d91a41fa339001421d1a133344f88c4d57a->leave($__internal_d98a0a4b45784ffd1f243708c73d7d91a41fa339001421d1a133344f88c4d57a_prof);

    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_3585fed0dda6a257b8aacecd4ecee2e549034500d5e7f1ad60718034b2ff0985 = $this->env->getExtension("native_profiler");
        $__internal_3585fed0dda6a257b8aacecd4ecee2e549034500d5e7f1ad60718034b2ff0985->enter($__internal_3585fed0dda6a257b8aacecd4ecee2e549034500d5e7f1ad60718034b2ff0985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 16
        echo "

<h2>Departement - Body Content admin </h2>

       
";
        
        $__internal_3585fed0dda6a257b8aacecd4ecee2e549034500d5e7f1ad60718034b2ff0985->leave($__internal_3585fed0dda6a257b8aacecd4ecee2e549034500d5e7f1ad60718034b2ff0985_prof);

    }

    public function getTemplateName()
    {
        return "@FssWebsiteDepartement/Default/adminindex.html.twig";
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
