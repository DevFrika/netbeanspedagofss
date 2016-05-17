<?php

/* @PedagogiePedagogie/etudiant/discipline/deletedisciplinelayout.html.twig */
class __TwigTemplate_d92df0a53954ee6fa90e39a32cb42a59902215fa4db5edbf539614539047472b extends Twig_Template
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
        $__internal_0e016060f462537b9a7289e6bcf08f00b97a1438182110cb03b7026fbef5ed14 = $this->env->getExtension("native_profiler");
        $__internal_0e016060f462537b9a7289e6bcf08f00b97a1438182110cb03b7026fbef5ed14->enter($__internal_0e016060f462537b9a7289e6bcf08f00b97a1438182110cb03b7026fbef5ed14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/etudiant/discipline/deletedisciplinelayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"deldis";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dis"]) ? $context["dis"] : $this->getContext($context, "dis")), "discipline", array()), "html", null, true);
        echo "\">
\t\t\t\t  <div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-body\">
\t\t\t\t\t\t<p> Voulez vous reelment supprimer cette discipline ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dis"]) ? $context["dis"] : $this->getContext($context, "dis")), "discipline", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</a>
\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" onclick=\"deleteDiscipline(event, '";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dis"]) ? $context["dis"] : $this->getContext($context, "dis")), "discipline", array()), "html", null, true);
        echo "','#deldis";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dis"]) ? $context["dis"] : $this->getContext($context, "dis")), "discipline", array()), "html", null, true);
        echo "')\"><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_0e016060f462537b9a7289e6bcf08f00b97a1438182110cb03b7026fbef5ed14->leave($__internal_0e016060f462537b9a7289e6bcf08f00b97a1438182110cb03b7026fbef5ed14_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/etudiant/discipline/deletedisciplinelayout.html.twig";
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
/* <div class="fade modal text-center" id="deldis{{ dis.discipline }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> Voulez vous reelment supprimer cette discipline {{ dis.discipline }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Fermer</a>*/
/* 						<a class="btn btn-primary w3-red" onclick="deleteDiscipline(event, '{{ dis.discipline }}','#deldis{{ dis.discipline }}')"><i class="fa fa-trash"></i>Supprimer</a>*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
