<?php

/* @PedagogiePedagogie/prof/classe/deleteclasselayout.html.twig */
class __TwigTemplate_3b2b259c34157bbfc3caaa4d03a36420e082861f5968de3cd063ea717aec60d2 extends Twig_Template
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
        $__internal_ca6d9d1da350eea22aec3076cd37651b012793e38478c7eef9b09936641d9348 = $this->env->getExtension("native_profiler");
        $__internal_ca6d9d1da350eea22aec3076cd37651b012793e38478c7eef9b09936641d9348->enter($__internal_ca6d9d1da350eea22aec3076cd37651b012793e38478c7eef9b09936641d9348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/prof/classe/deleteclasselayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"delcls";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cls"]) ? $context["cls"] : $this->getContext($context, "cls")), "classe", array()), "html", null, true);
        echo "\">
\t\t\t\t  <div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-clsmiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-body\">
\t\t\t\t\t\t<p> Voulez vous reelment supprimer cette classe ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cls"]) ? $context["cls"] : $this->getContext($context, "cls")), "classe", array()), "html", null, true);
        echo " ? </p>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-clsmiss=\"modal\">Fermer</a>
\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" onclick=\"deleteClasse(event, '";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cls"]) ? $context["cls"] : $this->getContext($context, "cls")), "classe", array()), "html", null, true);
        echo "','#delcls";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cls"]) ? $context["cls"] : $this->getContext($context, "cls")), "classe", array()), "html", null, true);
        echo "')\"><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_ca6d9d1da350eea22aec3076cd37651b012793e38478c7eef9b09936641d9348->leave($__internal_ca6d9d1da350eea22aec3076cd37651b012793e38478c7eef9b09936641d9348_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/prof/classe/deleteclasselayout.html.twig";
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
/* <div class="fade modal text-center" id="delcls{{ cls.classe }}">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-clsmiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<p> Voulez vous reelment supprimer cette classe {{ cls.classe }} ? </p>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-clsmiss="modal">Fermer</a>*/
/* 						<a class="btn btn-primary w3-red" onclick="deleteClasse(event, '{{ cls.classe }}','#delcls{{ cls.classe }}')"><i class="fa fa-trash"></i>Supprimer</a>*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
