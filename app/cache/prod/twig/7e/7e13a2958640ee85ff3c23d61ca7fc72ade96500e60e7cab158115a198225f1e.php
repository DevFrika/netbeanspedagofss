<?php

/* @PedagogiePedagogie/normal/groupe/deletegroupelayout.html.twig */
class __TwigTemplate_0b3f5a066d4847863e919fdf49d6e8f63f086ac450c8480ebdc9dbc8fdeb3e7f extends Twig_Template
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
        // line 1
        echo "<div class=\"fade modal text-center\" id=\"delgrp";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : null), "groupe", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : null), "groupe", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</a>
\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" onclick=\"deleteGroupe(event, '";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : null), "groupe", array()), "html", null, true);
        echo "','#delgrp";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : null), "groupe", array()), "html", null, true);
        echo "')\"><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/normal/groupe/deletegroupelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  31 => 9,  19 => 1,);
    }
}
/* <div class="fade modal text-center" id="delgrp{{ grp.groupe }}">*/
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
/* 						<a class="btn btn-primary w3-red" onclick="deleteGroupe(event, '{{ grp.groupe }}','#delgrp{{ grp.groupe }}')"><i class="fa fa-trash"></i>Supprimer</a>*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/