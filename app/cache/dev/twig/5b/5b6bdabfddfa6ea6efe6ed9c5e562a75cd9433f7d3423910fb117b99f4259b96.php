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
        $__internal_e598d60edbc734e0adb5a920379fe8b41be90c437fa631570e7b709bc5d83f4a = $this->env->getExtension("native_profiler");
        $__internal_e598d60edbc734e0adb5a920379fe8b41be90c437fa631570e7b709bc5d83f4a->enter($__internal_e598d60edbc734e0adb5a920379fe8b41be90c437fa631570e7b709bc5d83f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e598d60edbc734e0adb5a920379fe8b41be90c437fa631570e7b709bc5d83f4a->leave($__internal_e598d60edbc734e0adb5a920379fe8b41be90c437fa631570e7b709bc5d83f4a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_752bdfc29b0317d4ded9fca39d0dbf1cb948e9575a2495cc64125cfa71dca7e7 = $this->env->getExtension("native_profiler");
        $__internal_752bdfc29b0317d4ded9fca39d0dbf1cb948e9575a2495cc64125cfa71dca7e7->enter($__internal_752bdfc29b0317d4ded9fca39d0dbf1cb948e9575a2495cc64125cfa71dca7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_752bdfc29b0317d4ded9fca39d0dbf1cb948e9575a2495cc64125cfa71dca7e7->leave($__internal_752bdfc29b0317d4ded9fca39d0dbf1cb948e9575a2495cc64125cfa71dca7e7_prof);

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
