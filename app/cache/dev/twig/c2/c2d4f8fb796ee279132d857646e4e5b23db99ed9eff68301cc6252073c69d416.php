<?php

/* @PedagogiePedagogie/admin/lieux/deletelieuxlayout.html.twig */
class __TwigTemplate_db02c8b1bdb0a089019c6377f8aa573a823b308f94660113df5fbf0bd99210ec extends Twig_Template
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
        $__internal_371ecbe9ec9619550e9788a9003e4bceb687dba3eb7a6715147ead64dc386f2c = $this->env->getExtension("native_profiler");
        $__internal_371ecbe9ec9619550e9788a9003e4bceb687dba3eb7a6715147ead64dc386f2c->enter($__internal_371ecbe9ec9619550e9788a9003e4bceb687dba3eb7a6715147ead64dc386f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/admin/lieux/deletelieuxlayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"dellieux";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieux"]) ? $context["lieux"] : $this->getContext($context, "lieux")), "id", array()), "html", null, true);
        echo "\">
\t\t\t\t  <div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-body\">
\t\t\t\t\t\t<p> Voulez vous reelment supprimer ce Lieux ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieux"]) ? $context["lieux"] : $this->getContext($context, "lieux")), "lieux", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</a>
\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" onclick=\"deleteLieux(event, '";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieux"]) ? $context["lieux"] : $this->getContext($context, "lieux")), "id", array()), "html", null, true);
        echo "','#dellieux";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieux"]) ? $context["lieux"] : $this->getContext($context, "lieux")), "id", array()), "html", null, true);
        echo "')\"><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_371ecbe9ec9619550e9788a9003e4bceb687dba3eb7a6715147ead64dc386f2c->leave($__internal_371ecbe9ec9619550e9788a9003e4bceb687dba3eb7a6715147ead64dc386f2c_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/lieux/deletelieuxlayout.html.twig";
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
/* <div class="fade modal text-center" id="dellieux{{ lieux.id }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> Voulez vous reelment supprimer ce Lieux {{ lieux.lieux }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Fermer</a>*/
/* 						<a class="btn btn-primary w3-red" onclick="deleteLieux(event, '{{ lieux.id }}','#dellieux{{ lieux.id }}')"><i class="fa fa-trash"></i>Supprimer</a>*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
