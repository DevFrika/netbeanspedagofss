<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_71a6dae9addd1329c4650b3da505f0cd78ba67b45a5bea4869a8ab1a197c9c2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ada0abd6556f3444800b58177d1b64a9e60b121abf514c45e6b9340d7ebccf1e = $this->env->getExtension("native_profiler");
        $__internal_ada0abd6556f3444800b58177d1b64a9e60b121abf514c45e6b9340d7ebccf1e->enter($__internal_ada0abd6556f3444800b58177d1b64a9e60b121abf514c45e6b9340d7ebccf1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_ada0abd6556f3444800b58177d1b64a9e60b121abf514c45e6b9340d7ebccf1e->leave($__internal_ada0abd6556f3444800b58177d1b64a9e60b121abf514c45e6b9340d7ebccf1e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
