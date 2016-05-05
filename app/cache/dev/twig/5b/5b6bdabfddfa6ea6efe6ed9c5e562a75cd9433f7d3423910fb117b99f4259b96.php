<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_032e336a5f058c2fb1b6e9902ef69b144b4cf0efbebf55c9ed11eca49938ab5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de09453b5f12b87435e19a8608772ed9b35deeac24fbaa2c757965bc19e4e6b7 = $this->env->getExtension("native_profiler");
        $__internal_de09453b5f12b87435e19a8608772ed9b35deeac24fbaa2c757965bc19e4e6b7->enter($__internal_de09453b5f12b87435e19a8608772ed9b35deeac24fbaa2c757965bc19e4e6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_de09453b5f12b87435e19a8608772ed9b35deeac24fbaa2c757965bc19e4e6b7->leave($__internal_de09453b5f12b87435e19a8608772ed9b35deeac24fbaa2c757965bc19e4e6b7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e91ef8e6f4ca2d1b6c2533eef086392185d585ac0096fe50edefcb35a4fd15d3 = $this->env->getExtension("native_profiler");
        $__internal_e91ef8e6f4ca2d1b6c2533eef086392185d585ac0096fe50edefcb35a4fd15d3->enter($__internal_e91ef8e6f4ca2d1b6c2533eef086392185d585ac0096fe50edefcb35a4fd15d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e91ef8e6f4ca2d1b6c2533eef086392185d585ac0096fe50edefcb35a4fd15d3->leave($__internal_e91ef8e6f4ca2d1b6c2533eef086392185d585ac0096fe50edefcb35a4fd15d3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
