<?php

/* @PedagogiePedagogie/admin/emploi/modalemploilayout.html.twig */
class __TwigTemplate_3f88fe436699295a6e6f3adfd2e2ff75553fa7563f3d6138196e7e286d93e884 extends Twig_Template
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
        echo "<div class=\"fade modal text-left\" id=\"emp";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "jours", array()), "jour", array()), "html", null, true);
        echo " </td>
\t\t\t\t\t\t\t\t<td> ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "getHeureDebut", array()), "H:i"), "html", null, true);
        echo " </td>
\t\t\t\t\t\t\t\t<td> ";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "getHeureFin", array()), "H:i"), "html", null, true);
        echo " </td>
\t\t\t\t\t\t\t\t<td> ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "matiere", array()), "matiere", array()), "html", null, true);
        echo " </td>
\t\t\t\t\t\t\t\t<td> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "salles", array()), "salle", array()), "html", null, true);
        echo " </td>
\t\t\t\t\t\t\t\t<td> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "enseignants", array()), "enseignant", array()), "html", null, true);
        echo " </td>
\t\t\t\t\t\t\t\t<td> ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "groupes", array()), "groupe", array()), "html", null, true);
        echo " </td>
\t\t\t\t\t\t\t\t<td> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "natures", array()), "nature", array()), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/emploi/modalemploilayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 32,  71 => 31,  67 => 30,  63 => 29,  59 => 28,  55 => 27,  51 => 26,  47 => 25,  19 => 1,);
    }
}
/* <div class="fade modal text-left" id="emp{{ emp.id }}">*/
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
/* 								<td> {{ emp.jours.jour }} </td>*/
/* 								<td> {{ emp.getHeureDebut|date('H:i') }} </td>*/
/* 								<td> {{ emp.getHeureFin|date('H:i') }} </td>*/
/* 								<td> {{ emp.matiere.matiere }} </td>*/
/* 								<td> {{ emp.salles.salle }} </td>*/
/* 								<td> {{ emp.enseignants.enseignant }} </td>*/
/* 								<td> {{ emp.groupes.groupe }} </td>*/
/* 								<td> {{ emp.natures.nature }} </td>*/
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
