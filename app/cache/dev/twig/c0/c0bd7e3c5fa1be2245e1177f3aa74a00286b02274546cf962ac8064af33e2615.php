<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_11bf69247312f9fe15623529983000cf83aa7c56344c9ac8319a88a5d2e1848f extends Twig_Template
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
        $__internal_b5d1394946a698c9fea32bf59d17d1c56a1d7a40b5e3d24e220ce0f2cd43f4c8 = $this->env->getExtension("native_profiler");
        $__internal_b5d1394946a698c9fea32bf59d17d1c56a1d7a40b5e3d24e220ce0f2cd43f4c8->enter($__internal_b5d1394946a698c9fea32bf59d17d1c56a1d7a40b5e3d24e220ce0f2cd43f4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b5d1394946a698c9fea32bf59d17d1c56a1d7a40b5e3d24e220ce0f2cd43f4c8->leave($__internal_b5d1394946a698c9fea32bf59d17d1c56a1d7a40b5e3d24e220ce0f2cd43f4c8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
