<?php

/* PedagogiePedagogieBundle:normal/emploi:deleteemploilayout.html.twig */
class __TwigTemplate_ad035a1a51d176dc3c3561b372dd8fc3eed130c7dedc7107454eaaf781eb19ff extends Twig_Template
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
        $__internal_1283785f2e87d89d1a9ada1bcdd16082b0caca27c0f8943df1a1718190acb0f8 = $this->env->getExtension("native_profiler");
        $__internal_1283785f2e87d89d1a9ada1bcdd16082b0caca27c0f8943df1a1718190acb0f8->enter($__internal_1283785f2e87d89d1a9ada1bcdd16082b0caca27c0f8943df1a1718190acb0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:normal/emploi:deleteemploilayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"delemp";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "id", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-empmiss=\"modal\">Fermer</a>
\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" onclick=\"deleteEmploi(event, '";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "id", array()), "html", null, true);
        echo "','#delemp";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "id", array()), "html", null, true);
        echo "')\"><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_1283785f2e87d89d1a9ada1bcdd16082b0caca27c0f8943df1a1718190acb0f8->leave($__internal_1283785f2e87d89d1a9ada1bcdd16082b0caca27c0f8943df1a1718190acb0f8_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:normal/emploi:deleteemploilayout.html.twig";
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
