<?php

/* FssWebsiteDepartementBundle:Default:adminindexdep.html.twig */
class __TwigTemplate_427040547de4f9ca39530e555d520da10175d006eff6ad3a3ca2ffd8cde14643 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FssWebsiteDepartementBundle::layout.html.twig", "FssWebsiteDepartementBundle:Default:adminindexdep.html.twig", 1);
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
        $__internal_41d6d009f07383011e9026b1f604ebc10f9b55c5f362f712ab5a93caf93b33d2 = $this->env->getExtension("native_profiler");
        $__internal_41d6d009f07383011e9026b1f604ebc10f9b55c5f362f712ab5a93caf93b33d2->enter($__internal_41d6d009f07383011e9026b1f604ebc10f9b55c5f362f712ab5a93caf93b33d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FssWebsiteDepartementBundle:Default:adminindexdep.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41d6d009f07383011e9026b1f604ebc10f9b55c5f362f712ab5a93caf93b33d2->leave($__internal_41d6d009f07383011e9026b1f604ebc10f9b55c5f362f712ab5a93caf93b33d2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f819bdce88e25c33ce454d3a39f93f6b9998f13918803b5125faae2bbbb6864 = $this->env->getExtension("native_profiler");
        $__internal_2f819bdce88e25c33ce454d3a39f93f6b9998f13918803b5125faae2bbbb6864->enter($__internal_2f819bdce88e25c33ce454d3a39f93f6b9998f13918803b5125faae2bbbb6864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement - Normale
";
        
        $__internal_2f819bdce88e25c33ce454d3a39f93f6b9998f13918803b5125faae2bbbb6864->leave($__internal_2f819bdce88e25c33ce454d3a39f93f6b9998f13918803b5125faae2bbbb6864_prof);

    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_483840d252fc97da48f94c62d0bb3862b7c47f9300f93d20b6703e8f01efaac4 = $this->env->getExtension("native_profiler");
        $__internal_483840d252fc97da48f94c62d0bb3862b7c47f9300f93d20b6703e8f01efaac4->enter($__internal_483840d252fc97da48f94c62d0bb3862b7c47f9300f93d20b6703e8f01efaac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 7
        echo "

<h2>Departement de ( ??? ) - Submenu admin - Page en construction </h2>

       
";
        
        $__internal_483840d252fc97da48f94c62d0bb3862b7c47f9300f93d20b6703e8f01efaac4->leave($__internal_483840d252fc97da48f94c62d0bb3862b7c47f9300f93d20b6703e8f01efaac4_prof);

    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_df59295957054b565cc28611e5d83c3da26d3633640163e15663096ca655a90f = $this->env->getExtension("native_profiler");
        $__internal_df59295957054b565cc28611e5d83c3da26d3633640163e15663096ca655a90f->enter($__internal_df59295957054b565cc28611e5d83c3da26d3633640163e15663096ca655a90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 16
        echo "

<h2>Departement - Body Content admin </h2>

       
";
        
        $__internal_df59295957054b565cc28611e5d83c3da26d3633640163e15663096ca655a90f->leave($__internal_df59295957054b565cc28611e5d83c3da26d3633640163e15663096ca655a90f_prof);

    }

    public function getTemplateName()
    {
        return "FssWebsiteDepartementBundle:Default:adminindexdep.html.twig";
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
