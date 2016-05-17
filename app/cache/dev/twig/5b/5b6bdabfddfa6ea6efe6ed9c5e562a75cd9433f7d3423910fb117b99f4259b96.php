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
        $__internal_528483d5a3e69c05eefac80b2e8a516c42254a9e108322679eeb9bf052837bda = $this->env->getExtension("native_profiler");
        $__internal_528483d5a3e69c05eefac80b2e8a516c42254a9e108322679eeb9bf052837bda->enter($__internal_528483d5a3e69c05eefac80b2e8a516c42254a9e108322679eeb9bf052837bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_528483d5a3e69c05eefac80b2e8a516c42254a9e108322679eeb9bf052837bda->leave($__internal_528483d5a3e69c05eefac80b2e8a516c42254a9e108322679eeb9bf052837bda_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_262a8a198aa61eb014fd47fd3ce6a89708154d7b30859135bbba5dee0d430343 = $this->env->getExtension("native_profiler");
        $__internal_262a8a198aa61eb014fd47fd3ce6a89708154d7b30859135bbba5dee0d430343->enter($__internal_262a8a198aa61eb014fd47fd3ce6a89708154d7b30859135bbba5dee0d430343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_262a8a198aa61eb014fd47fd3ce6a89708154d7b30859135bbba5dee0d430343->leave($__internal_262a8a198aa61eb014fd47fd3ce6a89708154d7b30859135bbba5dee0d430343_prof);

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
