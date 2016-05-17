<?php

/* PedagogiePedagogieBundle:prof/emploi:deleteemploilayout.html.twig */
class __TwigTemplate_afceb74d70ae4c243789efd29511977cbe0a8d65bbebdabaa5de63ab432c7943 extends Twig_Template
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
        echo "<div class=\"fade modal text-center\" id=\"delemp";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "id", array()), "html", null, true);
        echo "\">
\t\t\t\t  <div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-empmiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-body\">
\t\t\t\t\t\t<p> Voulez vous reelment supprimer cette emploi ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "id", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-empmiss=\"modal\">Fermer</a>
\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" onclick=\"deleteEmploi(event, '";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "id", array()), "html", null, true);
        echo "','#delemp";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "id", array()), "html", null, true);
        echo "')\"><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:prof/emploi:deleteemploilayout.html.twig";
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
/* <div class="fade modal text-center" id="delemp{{ emp.id }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-empmiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> Voulez vous reelment supprimer cette emploi {{ emp.id }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-empmiss="modal">Fermer</a>*/
/* 						<a class="btn btn-primary w3-red" onclick="deleteEmploi(event, '{{ emp.id }}','#delemp{{ emp.id }}')"><i class="fa fa-trash"></i>Supprimer</a>*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
