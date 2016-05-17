<?php

/* @PedagogiePedagogie/admin/rattrapage/deletedevoirlayout.html.twig */
class __TwigTemplate_fb9718e9e451a8b89300fbb72b195bbffb8539ca2d9a8403f11a8cff8daef12f extends Twig_Template
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
        echo "<div class=\"fade modal text-center\" id=\"deldev";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dev"]) ? $context["dev"] : null), "id", array()), "html", null, true);
        echo "\">
\t\t\t\t  <div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-body\">
\t\t\t\t\t\t<p> Voulez vous reelment supprimer ce devoir  ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dev"]) ? $context["dev"] : null), "id", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</a>
\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" onclick=\"deleteDevoir(event, '";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dev"]) ? $context["dev"] : null), "id", array()), "html", null, true);
        echo "','#deldev";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dev"]) ? $context["dev"] : null), "id", array()), "html", null, true);
        echo "')\"><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/rattrapage/deletedevoirlayout.html.twig";
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
/* <div class="fade modal text-center" id="deldev{{ dev.id }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> Voulez vous reelment supprimer ce devoir  {{ dev.id }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Fermer</a>*/
/* 						<a class="btn btn-primary w3-red" onclick="deleteDevoir(event, '{{ dev.id }}','#deldev{{ dev.id }}')"><i class="fa fa-trash"></i>Supprimer</a>*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
