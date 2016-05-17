<?php

/* @PedagogiePedagogie/admin/voeux/modalvoeuxlayout.html.twig */
class __TwigTemplate_81420ab53ce543527654046b64ac263edb92440966c613e7e7fae0b0d3782d3e extends Twig_Template
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
        $__internal_9ed7d1b353353d5b76c890630bc27ba0cee48bb932a64064ac8278d8aa638dae = $this->env->getExtension("native_profiler");
        $__internal_9ed7d1b353353d5b76c890630bc27ba0cee48bb932a64064ac8278d8aa638dae->enter($__internal_9ed7d1b353353d5b76c890630bc27ba0cee48bb932a64064ac8278d8aa638dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/admin/voeux/modalvoeuxlayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-left\" id=\"veu";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "id", array()), "html", null, true);
        echo "\">
\t\t\t\t  <div class=\"modal-dialog modal-lg\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-body\">
\t\t\t\t\t\t<table>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th> Jours </th>
\t\t\t\t\t\t\t\t<th> Heure Debut </th>
\t\t\t\t\t\t\t\t<th> Heure Fin </th>
\t\t\t\t\t\t\t\t<th> Matiere </th>
\t\t\t\t\t\t\t\t<th> Salle </th>
\t\t\t\t\t\t\t\t<th> Professeur </th>
\t\t\t\t\t\t\t\t<th> Groupe </th>
\t\t\t\t\t\t\t\t<th> Nature </th>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td> ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "jours", array()), "jour", array()), "html", null, true);
        echo " </td>
\t\t\t\t\t\t\t\t<td> ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "getHeureDebut", array()), "H:i"), "html", null, true);
        echo " </td>
\t\t\t\t\t\t\t\t<td> ";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "getHeureFin", array()), "H:i"), "html", null, true);
        echo " </td>
\t\t\t\t\t\t\t\t<td> ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "matiere", array()), "matiere", array()), "html", null, true);
        echo " </td>
\t\t\t\t\t\t\t\t<td> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "salles", array()), "salle", array()), "html", null, true);
        echo " </td>
\t\t\t\t\t\t\t\t<td> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "enseignants", array()), "enseignant", array()), "html", null, true);
        echo " </td>
\t\t\t\t\t\t\t\t<td> ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "groupes", array()), "groupe", array()), "html", null, true);
        echo " </td>
\t\t\t\t\t\t\t\t<td> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "natures", array()), "nature", array()), "html", null, true);
        echo " </td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_9ed7d1b353353d5b76c890630bc27ba0cee48bb932a64064ac8278d8aa638dae->leave($__internal_9ed7d1b353353d5b76c890630bc27ba0cee48bb932a64064ac8278d8aa638dae_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/voeux/modalvoeuxlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 32,  74 => 31,  70 => 30,  66 => 29,  62 => 28,  58 => 27,  54 => 26,  50 => 25,  22 => 1,);
    }
}
/* <div class="fade modal text-left" id="veu{{ veu.id }}">*/
/* 				  <div class="modal-dialog modal-lg">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<table>*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<th> Jours </th>*/
/* 								<th> Heure Debut </th>*/
/* 								<th> Heure Fin </th>*/
/* 								<th> Matiere </th>*/
/* 								<th> Salle </th>*/
/* 								<th> Professeur </th>*/
/* 								<th> Groupe </th>*/
/* 								<th> Nature </th>*/
/* 								*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody>*/
/* 							<tr>*/
/* 								<td> {{ veu.jours.jour }} </td>*/
/* 								<td> {{ veu.getHeureDebut|date('H:i') }} </td>*/
/* 								<td> {{ veu.getHeureFin|date('H:i') }} </td>*/
/* 								<td> {{ veu.matiere.matiere }} </td>*/
/* 								<td> {{ veu.salles.salle }} </td>*/
/* 								<td> {{ veu.enseignants.enseignant }} </td>*/
/* 								<td> {{ veu.groupes.groupe }} </td>*/
/* 								<td> {{ veu.natures.nature }} </td>*/
/* 								*/
/* 							</tr>*/
/* 						</tbody>*/
/* 						</table>*/
/* 					  </div>*/
/* 					  <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
