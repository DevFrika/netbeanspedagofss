<?php

/* @PedagogiePedagogie/normal/devoir/deletedevoirlayout.html.twig */
class __TwigTemplate_48d0b29c5d16c8b99e72cd6b3357af4e013f04bb6c554a0b22a20471f0bbd4f1 extends Twig_Template
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
        $__internal_29f0b00478608881d05f5e4fc7859ba5630f35416780d71bc53f95f2c941e3be = $this->env->getExtension("native_profiler");
        $__internal_29f0b00478608881d05f5e4fc7859ba5630f35416780d71bc53f95f2c941e3be->enter($__internal_29f0b00478608881d05f5e4fc7859ba5630f35416780d71bc53f95f2c941e3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/normal/devoir/deletedevoirlayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"deldev";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dev"]) ? $context["dev"] : $this->getContext($context, "dev")), "devoir", array()), "html", null, true);
        echo "\">
\t\t\t\t  <div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-devmiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-body\">
\t\t\t\t\t\t<p> Voulez vous reelment supprimer ce devoir ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dev"]) ? $context["dev"] : $this->getContext($context, "dev")), "devoir", array()), "html", null, true);
        echo " ?  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-devmiss=\"modal\">Fermer</a>
\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" onclick=\"deleteDevoir(event, '";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dev"]) ? $context["dev"] : $this->getContext($context, "dev")), "devoir", array()), "html", null, true);
        echo "','#deldev";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dev"]) ? $context["dev"] : $this->getContext($context, "dev")), "devoir", array()), "html", null, true);
        echo "')\"><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_29f0b00478608881d05f5e4fc7859ba5630f35416780d71bc53f95f2c941e3be->leave($__internal_29f0b00478608881d05f5e4fc7859ba5630f35416780d71bc53f95f2c941e3be_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/normal/devoir/deletedevoirlayout.html.twig";
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
/* <div class="fade modal text-center" id="deldev{{ dev.devoir }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-devmiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> Voulez vous reelment supprimer ce devoir {{ dev.devoir }} ?  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-devmiss="modal">Fermer</a>*/
/* 						<a class="btn btn-primary w3-red" onclick="deleteDevoir(event, '{{ dev.devoir }}','#deldev{{ dev.devoir }}')"><i class="fa fa-trash"></i>Supprimer</a>*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
