<?php

/* @PedagogiePedagogie/admin/groupe/deletegroupelayout.html.twig */
class __TwigTemplate_b083a3e5d814ca087180310a4e536d844bca8f9e60ae58b4bcf7d2f2668c4b90 extends Twig_Template
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
        $__internal_24adce783cd4692d149682e898e1f57be508168e33532a109ea5b0bc2f74cb1e = $this->env->getExtension("native_profiler");
        $__internal_24adce783cd4692d149682e898e1f57be508168e33532a109ea5b0bc2f74cb1e->enter($__internal_24adce783cd4692d149682e898e1f57be508168e33532a109ea5b0bc2f74cb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/admin/groupe/deletegroupelayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"delgrp";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : $this->getContext($context, "grp")), "id", array()), "html", null, true);
        echo "\">
\t\t\t\t  <div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-body\">
\t\t\t\t\t\t<p> Voulez vous reelment supprimer cette groupe ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : $this->getContext($context, "grp")), "groupe", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</a>
\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" onclick=\"deleteGroupe(event, '";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : $this->getContext($context, "grp")), "id", array()), "html", null, true);
        echo "','#delgrp";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : $this->getContext($context, "grp")), "id", array()), "html", null, true);
        echo "')\"><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_24adce783cd4692d149682e898e1f57be508168e33532a109ea5b0bc2f74cb1e->leave($__internal_24adce783cd4692d149682e898e1f57be508168e33532a109ea5b0bc2f74cb1e_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/groupe/deletegroupelayout.html.twig";
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
/* <div class="fade modal text-center" id="delgrp{{ grp.id }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> Voulez vous reelment supprimer cette groupe {{ grp.groupe }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Fermer</a>*/
/* 						<a class="btn btn-primary w3-red" onclick="deleteGroupe(event, '{{ grp.id }}','#delgrp{{ grp.id }}')"><i class="fa fa-trash"></i>Supprimer</a>*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
