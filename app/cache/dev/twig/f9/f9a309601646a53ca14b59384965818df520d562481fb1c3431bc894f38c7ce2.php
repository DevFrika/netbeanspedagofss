<?php

/* @PedagogiePedagogie/etudiant/discipline/modaldisciplinelayout.html.twig */
class __TwigTemplate_be17cc9e1bab26a09814b652b5d6589c85ee8c40eccce5f419979d7c032e00de extends Twig_Template
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
        $__internal_8ab25aab084607b37444460d65150d2a9c75d59016a5ae0e87714cfcac4a319c = $this->env->getExtension("native_profiler");
        $__internal_8ab25aab084607b37444460d65150d2a9c75d59016a5ae0e87714cfcac4a319c->enter($__internal_8ab25aab084607b37444460d65150d2a9c75d59016a5ae0e87714cfcac4a319c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/etudiant/discipline/modaldisciplinelayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"dis";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dis"]) ? $context["dis"] : $this->getContext($context, "dis")), "discipline", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dis"]) ? $context["dis"] : $this->getContext($context, "dis")), "discipline", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_8ab25aab084607b37444460d65150d2a9c75d59016a5ae0e87714cfcac4a319c->leave($__internal_8ab25aab084607b37444460d65150d2a9c75d59016a5ae0e87714cfcac4a319c_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/etudiant/discipline/modaldisciplinelayout.html.twig";
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
/* <div class="fade modal text-center" id="dis{{ dis.discipline }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> {{ dis.discipline }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
