<?php

/* PedagogiePedagogieBundle:prof/voeux:deletevoeuxlayout.html.twig */
class __TwigTemplate_07a340a4934319018e6b9bdd4b76dee2898cb719d6119f9a733732b8d4620ef0 extends Twig_Template
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
        $__internal_748491e2be15955400ef062e4a7a24c5649e29b05ccb3ac22ec126006f59872c = $this->env->getExtension("native_profiler");
        $__internal_748491e2be15955400ef062e4a7a24c5649e29b05ccb3ac22ec126006f59872c->enter($__internal_748491e2be15955400ef062e4a7a24c5649e29b05ccb3ac22ec126006f59872c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:prof/voeux:deletevoeuxlayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"delveu";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "voeux", array()), "html", null, true);
        echo "\">
\t\t\t\t  <div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-body\">
\t\t\t\t\t\t<p> Voulez vous reelment supprimer cette voeux ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "voeux", array()), "html", null, true);
        echo "  </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</a>
\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" onclick=\"deleteVoeux(event, '";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "voeux", array()), "html", null, true);
        echo "','#delveu";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "voeux", array()), "html", null, true);
        echo "')\"><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_748491e2be15955400ef062e4a7a24c5649e29b05ccb3ac22ec126006f59872c->leave($__internal_748491e2be15955400ef062e4a7a24c5649e29b05ccb3ac22ec126006f59872c_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:prof/voeux:deletevoeuxlayout.html.twig";
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
/* <div class="fade modal text-center" id="delveu{{ veu.voeux }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> Voulez vous reelment supprimer cette voeux {{ veu.voeux }}  </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Fermer</a>*/
/* 						<a class="btn btn-primary w3-red" onclick="deleteVoeux(event, '{{ veu.voeux }}','#delveu{{ veu.voeux }}')"><i class="fa fa-trash"></i>Supprimer</a>*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
