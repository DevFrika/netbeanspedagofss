<?php

/* PedagogiePedagogieBundle:normal/devoir:deletedevoirlayout.html.twig */
class __TwigTemplate_8adc73054b9076c353fad91f6a5d5db5bba95174edeade27ea7f51fa56493d07 extends Twig_Template
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
        $__internal_8e3f777d6d2de7a2240de46e73cadbaeeb4715957748c9f7ffe871a3b18ec0c0 = $this->env->getExtension("native_profiler");
        $__internal_8e3f777d6d2de7a2240de46e73cadbaeeb4715957748c9f7ffe871a3b18ec0c0->enter($__internal_8e3f777d6d2de7a2240de46e73cadbaeeb4715957748c9f7ffe871a3b18ec0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:normal/devoir:deletedevoirlayout.html.twig"));

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
        
        $__internal_8e3f777d6d2de7a2240de46e73cadbaeeb4715957748c9f7ffe871a3b18ec0c0->leave($__internal_8e3f777d6d2de7a2240de46e73cadbaeeb4715957748c9f7ffe871a3b18ec0c0_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:normal/devoir:deletedevoirlayout.html.twig";
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
