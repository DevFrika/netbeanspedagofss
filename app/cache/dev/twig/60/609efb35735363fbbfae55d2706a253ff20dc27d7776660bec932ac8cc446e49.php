<?php

/* PedagogiePedagogieBundle:etudiant/enseignant:modalenseignantlayout.html.twig */
class __TwigTemplate_569472423d829006be197f11c23ddd9132bd768f6f2b3a943446818b52e7dbc9 extends Twig_Template
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
        $__internal_1abe66c68839e959220925c9a5ebe155d1c98db6732a1e2be8f000b6108d40c5 = $this->env->getExtension("native_profiler");
        $__internal_1abe66c68839e959220925c9a5ebe155d1c98db6732a1e2be8f000b6108d40c5->enter($__internal_1abe66c68839e959220925c9a5ebe155d1c98db6732a1e2be8f000b6108d40c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:etudiant/enseignant:modalenseignantlayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"ens";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "enseignant", array()), "html", null, true);
        echo "\">
\t\t\t\t  <div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-body\">
\t\t\t\t\t\t<p> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "enseignant", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_1abe66c68839e959220925c9a5ebe155d1c98db6732a1e2be8f000b6108d40c5->leave($__internal_1abe66c68839e959220925c9a5ebe155d1c98db6732a1e2be8f000b6108d40c5_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:etudiant/enseignant:modalenseignantlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  22 => 1,);
    }
}
/* <div class="fade modal text-center" id="ens{{ ens.enseignant }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> {{ ens.enseignant }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
