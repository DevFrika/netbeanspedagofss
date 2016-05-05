<?php

/* PedagogiePedagogieBundle:admin/emploi:modalemploilayout.html.twig */
class __TwigTemplate_7b04699054cedc4e9b0a438d720db5b1de7b49a2548dc160bdd6ca095bdc4e3b extends Twig_Template
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
        $__internal_3f72e42c3d6e6d7a8538152e0c86d34bb9c5bf4d2bfe3c443ac68b02dbe16d63 = $this->env->getExtension("native_profiler");
        $__internal_3f72e42c3d6e6d7a8538152e0c86d34bb9c5bf4d2bfe3c443ac68b02dbe16d63->enter($__internal_3f72e42c3d6e6d7a8538152e0c86d34bb9c5bf4d2bfe3c443ac68b02dbe16d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:admin/emploi:modalemploilayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-left\" id=\"emp";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "id", array()), "html", null, true);
        echo "\">
\t\t\t\t  <div class=\"modal-dialog modal-lg\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-body\">
\t\t\t\t\t\t<p> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "id", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t\t";
        // line 10
        $this->loadTemplate("PedagogiePedagogieBundle::admin/emploi/emploiclassetemplate.html.twig", "PedagogiePedagogieBundle:admin/emploi:modalemploilayout.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_3f72e42c3d6e6d7a8538152e0c86d34bb9c5bf4d2bfe3c443ac68b02dbe16d63->leave($__internal_3f72e42c3d6e6d7a8538152e0c86d34bb9c5bf4d2bfe3c443ac68b02dbe16d63_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:admin/emploi:modalemploilayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  38 => 10,  34 => 9,  22 => 1,);
    }
}
/* <div class="fade modal text-left" id="emp{{ emp.id }}">*/
/* 				  <div class="modal-dialog modal-lg">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> {{ emp.id }}  </p>*/
/* 						{% include "PedagogiePedagogieBundle::admin/emploi/emploiclassetemplate.html.twig" %}*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
