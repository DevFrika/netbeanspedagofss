<?php

/* @PedagogiePedagogie/admin/devoir/modaldevoirlayout.html.twig */
class __TwigTemplate_522c69809143294c6191027cdbd2369af9cf2a74dc067fb0be7a7c53a2470673 extends Twig_Template
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
        $__internal_eb429c9becc6bdaac78b0bf421e45417bb0cceecacaec5df78017c47e4365b85 = $this->env->getExtension("native_profiler");
        $__internal_eb429c9becc6bdaac78b0bf421e45417bb0cceecacaec5df78017c47e4365b85->enter($__internal_eb429c9becc6bdaac78b0bf421e45417bb0cceecacaec5df78017c47e4365b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/admin/devoir/modaldevoirlayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-left\" id=\"dev";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dev"]) ? $context["dev"] : $this->getContext($context, "dev")), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dev"]) ? $context["dev"] : $this->getContext($context, "dev")), "jours", array()), "jour", array()), "html", null, true);
        echo " </td>
\t\t\t\t\t\t\t\t<td> ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dev"]) ? $context["dev"] : $this->getContext($context, "dev")), "getHeureDebut", array()), "H:i"), "html", null, true);
        echo " </td>
\t\t\t\t\t\t\t\t<td> ";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dev"]) ? $context["dev"] : $this->getContext($context, "dev")), "getHeureFin", array()), "H:i"), "html", null, true);
        echo " </td>
\t\t\t\t\t\t\t\t<td> ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dev"]) ? $context["dev"] : $this->getContext($context, "dev")), "matiere", array()), "matiere", array()), "html", null, true);
        echo " </td>
\t\t\t\t\t\t\t\t<td> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dev"]) ? $context["dev"] : $this->getContext($context, "dev")), "salles", array()), "salle", array()), "html", null, true);
        echo " </td>
\t\t\t\t\t\t\t\t<td> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dev"]) ? $context["dev"] : $this->getContext($context, "dev")), "enseignants", array()), "enseignant", array()), "html", null, true);
        echo " </td>
\t\t\t\t\t\t\t\t<td> ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dev"]) ? $context["dev"] : $this->getContext($context, "dev")), "groupes", array()), "groupe", array()), "html", null, true);
        echo " </td>
\t\t\t\t\t\t\t\t<td> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dev"]) ? $context["dev"] : $this->getContext($context, "dev")), "natures", array()), "nature", array()), "html", null, true);
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
        
        $__internal_eb429c9becc6bdaac78b0bf421e45417bb0cceecacaec5df78017c47e4365b85->leave($__internal_eb429c9becc6bdaac78b0bf421e45417bb0cceecacaec5df78017c47e4365b85_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/devoir/modaldevoirlayout.html.twig";
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
/* <div class="fade modal text-left" id="dev{{ dev.id }}">*/
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
/* 								<td> {{ dev.jours.jour }} </td>*/
/* 								<td> {{ dev.getHeureDebut|date('H:i') }} </td>*/
/* 								<td> {{ dev.getHeureFin|date('H:i') }} </td>*/
/* 								<td> {{ dev.matiere.matiere }} </td>*/
/* 								<td> {{ dev.salles.salle }} </td>*/
/* 								<td> {{ dev.enseignants.enseignant }} </td>*/
/* 								<td> {{ dev.groupes.groupe }} </td>*/
/* 								<td> {{ dev.natures.nature }} </td>*/
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
