<?php

/* @PedagogiePedagogie/admin/salle/deletesallelayout.html.twig */
class __TwigTemplate_4ca32048fddebaaad3d435f6fc41fad303bc672a2d9d76aae3116002785c0321 extends Twig_Template
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
        $__internal_183c671db0e7b9f14ac215e13a5bfedcdf60c1929848cd5d6e28f554a6628d75 = $this->env->getExtension("native_profiler");
        $__internal_183c671db0e7b9f14ac215e13a5bfedcdf60c1929848cd5d6e28f554a6628d75->enter($__internal_183c671db0e7b9f14ac215e13a5bfedcdf60c1929848cd5d6e28f554a6628d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/admin/salle/deletesallelayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"delsalle";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["salle"]) ? $context["salle"] : $this->getContext($context, "salle")), "id", array()), "html", null, true);
        echo "\">
\t\t\t\t  <div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-body\">
\t\t\t\t\t\t<p> Voulez vous reelment supprimer cette Salle ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["salle"]) ? $context["salle"] : $this->getContext($context, "salle")), "salle", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</a>
\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" onclick=\"deleteSalle(event, '";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["salle"]) ? $context["salle"] : $this->getContext($context, "salle")), "id", array()), "html", null, true);
        echo "','#delsalle";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["salle"]) ? $context["salle"] : $this->getContext($context, "salle")), "id", array()), "html", null, true);
        echo "')\"><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_183c671db0e7b9f14ac215e13a5bfedcdf60c1929848cd5d6e28f554a6628d75->leave($__internal_183c671db0e7b9f14ac215e13a5bfedcdf60c1929848cd5d6e28f554a6628d75_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/salle/deletesallelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 13,  34 => 9,  22 => 1,);
    }
}
/* <div class="fade modal text-center" id="delsalle{{ salle.id }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> Voulez vous reelment supprimer cette Salle {{ salle.salle }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Fermer</a>*/
/* 						<a class="btn btn-primary w3-red" onclick="deleteSalle(event, '{{ salle.id }}','#delsalle{{ salle.id }}')"><i class="fa fa-trash"></i>Supprimer</a>*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
