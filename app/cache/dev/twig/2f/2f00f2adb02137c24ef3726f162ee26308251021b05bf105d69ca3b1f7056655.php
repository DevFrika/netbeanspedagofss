<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_667c3e42ae7f1fa572c3d31b3b4e6a13b5e56f9bb1be7627fc3aa098527858cb extends Twig_Template
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
        $__internal_f407ad5eec8d347eff928fab92a7ddddca500108721b5b6c8c66cb6a94c4686c = $this->env->getExtension("native_profiler");
        $__internal_f407ad5eec8d347eff928fab92a7ddddca500108721b5b6c8c66cb6a94c4686c->enter($__internal_f407ad5eec8d347eff928fab92a7ddddca500108721b5b6c8c66cb6a94c4686c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f407ad5eec8d347eff928fab92a7ddddca500108721b5b6c8c66cb6a94c4686c->leave($__internal_f407ad5eec8d347eff928fab92a7ddddca500108721b5b6c8c66cb6a94c4686c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
