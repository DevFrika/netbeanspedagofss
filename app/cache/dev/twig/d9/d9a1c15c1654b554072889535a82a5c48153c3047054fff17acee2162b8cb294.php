<?php

/* @PedagogiePedagogie/admin/voeux/deletevoeuxlayout.html.twig */
class __TwigTemplate_4633094362a5efe3a0616e7225afece5d0251d0fe9264f85e03616b53277ebdf extends Twig_Template
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
        $__internal_403c11f53a452c6cff8116c0d7e693b7bb4c0f2b138b7b20c3b2e23750298721 = $this->env->getExtension("native_profiler");
        $__internal_403c11f53a452c6cff8116c0d7e693b7bb4c0f2b138b7b20c3b2e23750298721->enter($__internal_403c11f53a452c6cff8116c0d7e693b7bb4c0f2b138b7b20c3b2e23750298721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/admin/voeux/deletevoeuxlayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"delveu";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "id", array()), "html", null, true);
        echo "\">
\t\t\t\t  <div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-body\">
\t\t\t\t\t\t<p> Voulez vous reelment supprimer ce voeux ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "id", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</a>
\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" onclick=\"deleteVoeux(event, '";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "id", array()), "html", null, true);
        echo "','#delveu";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "id", array()), "html", null, true);
        echo "')\"><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_403c11f53a452c6cff8116c0d7e693b7bb4c0f2b138b7b20c3b2e23750298721->leave($__internal_403c11f53a452c6cff8116c0d7e693b7bb4c0f2b138b7b20c3b2e23750298721_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/voeux/deletevoeuxlayout.html.twig";
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
/* <div class="fade modal text-center" id="delveu{{ veu.id }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> Voulez vous reelment supprimer ce voeux {{ veu.id }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Fermer</a>*/
/* 						<a class="btn btn-primary w3-red" onclick="deleteVoeux(event, '{{ veu.id }}','#delveu{{ veu.id }}')"><i class="fa fa-trash"></i>Supprimer</a>*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
