<?php

/* PedagogiePedagogieBundle::admin/lieux/deletelieuxlayout.html.twig */
class __TwigTemplate_77fff99f7ab8c824da719372646865b52b766cdb637f7903fffbd95f9a2287ab extends Twig_Template
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
        $__internal_c2117761d7520d7165eed1abc8fad2ed1e201ebbd8747a7d8566432bc493f25e = $this->env->getExtension("native_profiler");
        $__internal_c2117761d7520d7165eed1abc8fad2ed1e201ebbd8747a7d8566432bc493f25e->enter($__internal_c2117761d7520d7165eed1abc8fad2ed1e201ebbd8747a7d8566432bc493f25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle::admin/lieux/deletelieuxlayout.html.twig"));

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
        
        $__internal_c2117761d7520d7165eed1abc8fad2ed1e201ebbd8747a7d8566432bc493f25e->leave($__internal_c2117761d7520d7165eed1abc8fad2ed1e201ebbd8747a7d8566432bc493f25e_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle::admin/lieux/deletelieuxlayout.html.twig";
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
