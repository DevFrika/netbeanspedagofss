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
        $__internal_fe485ae3d60816023792e7ff1eed0c6655861a9ebab1b0b67fca6a76ac0690d2 = $this->env->getExtension("native_profiler");
        $__internal_fe485ae3d60816023792e7ff1eed0c6655861a9ebab1b0b67fca6a76ac0690d2->enter($__internal_fe485ae3d60816023792e7ff1eed0c6655861a9ebab1b0b67fca6a76ac0690d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FssWebsiteDepartementBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe485ae3d60816023792e7ff1eed0c6655861a9ebab1b0b67fca6a76ac0690d2->leave($__internal_fe485ae3d60816023792e7ff1eed0c6655861a9ebab1b0b67fca6a76ac0690d2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_94ce69e87522c7703b15fc4f7156d53726adb7b8ff14fceb6ad41ee4cfdc4809 = $this->env->getExtension("native_profiler");
        $__internal_94ce69e87522c7703b15fc4f7156d53726adb7b8ff14fceb6ad41ee4cfdc4809->enter($__internal_94ce69e87522c7703b15fc4f7156d53726adb7b8ff14fceb6ad41ee4cfdc4809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Departement 
";
        
        $__internal_94ce69e87522c7703b15fc4f7156d53726adb7b8ff14fceb6ad41ee4cfdc4809->leave($__internal_94ce69e87522c7703b15fc4f7156d53726adb7b8ff14fceb6ad41ee4cfdc4809_prof);

    }

    // line 6
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_3c6281e985129aa0be7f72e913a24a4372228efd841a0c23fd46e53acec111b1 = $this->env->getExtension("native_profiler");
        $__internal_3c6281e985129aa0be7f72e913a24a4372228efd841a0c23fd46e53acec111b1->enter($__internal_3c6281e985129aa0be7f72e913a24a4372228efd841a0c23fd46e53acec111b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 7
        echo "

<h2>Departement - Submenu - Page en construction </h2>

       
";
        
        $__internal_3c6281e985129aa0be7f72e913a24a4372228efd841a0c23fd46e53acec111b1->leave($__internal_3c6281e985129aa0be7f72e913a24a4372228efd841a0c23fd46e53acec111b1_prof);

    }

    // line 15
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_29388ef41c65e6aa29a53b7565cfaabb8bce2e8943dbfc9d6c9b07f06a539236 = $this->env->getExtension("native_profiler");
        $__internal_29388ef41c65e6aa29a53b7565cfaabb8bce2e8943dbfc9d6c9b07f06a539236->enter($__internal_29388ef41c65e6aa29a53b7565cfaabb8bce2e8943dbfc9d6c9b07f06a539236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 16
        echo "

<h2>Departement - Body Content </h2>

       
";
        
        $__internal_29388ef41c65e6aa29a53b7565cfaabb8bce2e8943dbfc9d6c9b07f06a539236->leave($__internal_29388ef41c65e6aa29a53b7565cfaabb8bce2e8943dbfc9d6c9b07f06a539236_prof);

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
