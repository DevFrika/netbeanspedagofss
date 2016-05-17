<?php

/* PedagogiePedagogieBundle:admin/devoir:listedevoirgroupetemplate.html.twig */
class __TwigTemplate_18b86889dedaed8ae7f630d4b451e078ac395af3c40dff5b9da1e6d52a4fb1a8 extends Twig_Template
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
        $__internal_070e47b7abe2a9508e7489a35fa865d669d702b0b7d29c90e5aa8ae4c857e22a = $this->env->getExtension("native_profiler");
        $__internal_070e47b7abe2a9508e7489a35fa865d669d702b0b7d29c90e5aa8ae4c857e22a->enter($__internal_070e47b7abe2a9508e7489a35fa865d669d702b0b7d29c90e5aa8ae4c857e22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:admin/devoir:listedevoirgroupetemplate.html.twig"));

        // line 1
        echo "﻿<style>
<!-- Frameworks CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/css/w3.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t
\t\t<!-- Custom CSS -->
\t\t<!-- <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/css/freelancer.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">-->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" /> 
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />

</style>
\t<div class=\"row\">
\t\t<div  class=\"container-fluid text-center \">
            <div class=\"col-sm-10\">
\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<div class=\"col-md-4 pull-left text-center\">
\t\t\t\t\t\t\t\t<p> <strong> REPUBLIQUE TUNISIENNE </strong> </p>
\t\t\t\t\t\t\t\t<p> MINISTERE DE L'ENSEIGNEMENT SUPERIEURE ET DE LA RECHERCHE </p>
\t\t\t\t\t\t\t\t<p> <strong> UNIVERSITE DE SFAX </strong> </p>
\t\t\t\t\t\t\t\t<p> FACULTE DES SCIENCES DE SFAX </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  
\t\t\t\t\t\t\t<div class=\"col-md-3 text-center\">
\t\t\t\t\t\t\t\t<h4 class=\"text-center lead\">EMPLOI DU TEMPS </h4>
\t\t\t\t\t\t\t\t<h5 class=\"text-center \"> ";
        // line 28
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["listeemp"]) ? $context["listeemp"] : $this->getContext($context, "listeemp")), 0, array(), "array"), "semestre", array()), "code", array()) == "S1")) {
            echo " 1er Semestre ";
        } else {
            echo " 2eme Semestre ";
        }
        echo " </h5>
\t\t\t\t\t\t\t\t<h5 class=\"text-center\"> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["listeemp"]) ? $context["listeemp"] : $this->getContext($context, "listeemp")), 0, array(), "array"), "groupes", array()), "groupe", array()), "html", null, true);
        echo " </h5>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t\t\t\t\t<p> Annee Universitaire : ";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listeemp"]) ? $context["listeemp"] : $this->getContext($context, "listeemp")), 0, array(), "array"), "getHeureDebut", array()), "Y"), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listeemp"]) ? $context["listeemp"] : $this->getContext($context, "listeemp")), 0, array(), "array"), "getHeureFin", array()), "Y"), "html", null, true);
        echo "  </p>
\t\t\t\t\t\t\t\t<h5 > Departement : ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["listeemp"]) ? $context["listeemp"] : $this->getContext($context, "listeemp")), 0, array(), "array"), "departements", array()), "departement", array()), "html", null, true);
        echo "    </h5>
\t\t\t\t\t\t\t\t<h5 > Filiere : ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["listeemp"]) ? $context["listeemp"] : $this->getContext($context, "listeemp")), 0, array(), "array"), "filieres", array()), "filiere", array()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["listeemp"]) ? $context["listeemp"] : $this->getContext($context, "listeemp")), 0, array(), "array"), "classes", array()), "annee", array()), "html", null, true);
        echo " année </h5>
\t\t\t\t\t\t\t\t<h5> ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(twig_date_converter($this->env), "format", array(0 => "d/m/Y"), "method"), "html", null, true);
        echo " </h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t 
\t\t\t <br>
\t\t\t 
\t\t\t  
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"col-lg-11\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<table class=\"table table-bordered table-striped table-condensed\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t<th> Horaire </th>
\t\t\t\t\t\t\t\t\t\t<th> Matiere </th>
\t\t\t\t\t\t\t\t\t\t<th> Nature </th>
\t\t\t\t\t\t\t\t\t\t<th> Module </th>
\t\t\t\t\t\t\t\t\t\t<th> Salle </th>
\t\t\t\t\t\t\t\t\t\t<th> Periode </th>
\t\t\t\t\t\t\t\t\t\t<th> Enseignant </th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeemp"]) ? $context["listeemp"] : $this->getContext($context, "listeemp")));
        foreach ($context['_seq'] as $context["_key"] => $context["emp"]) {
            // line 67
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t<td class=\" text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h5> ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "jours", array()), "jour", array()), "html", null, true);
            echo " </h5>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"w3-green\">  ";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["emp"], "getHeureDebut", array()), "H:i"), "html", null, true);
            echo "  </span>
\t\t\t\t\t\t\t\t\t\t\t</h5>\t
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"> ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "matiere", array()), "matiere", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"> ";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "natures", array()), "description", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">  </td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"> ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "salles", array()), "salle", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"> ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "semestre", array()), "semestre", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"> ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "enseignants", array()), "enseignant", array()), "html", null, true);
            echo "  </td>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t  
\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
 ";
        
        $__internal_070e47b7abe2a9508e7489a35fa865d669d702b0b7d29c90e5aa8ae4c857e22a->leave($__internal_070e47b7abe2a9508e7489a35fa865d669d702b0b7d29c90e5aa8ae4c857e22a_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:admin/devoir:listedevoirgroupetemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 89,  171 => 84,  167 => 83,  163 => 82,  158 => 80,  154 => 79,  148 => 76,  140 => 71,  134 => 67,  130 => 66,  97 => 36,  91 => 35,  87 => 34,  81 => 33,  74 => 29,  66 => 28,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* ﻿<style>*/
/* <!-- Frameworks CSS -->*/
/* 		<link rel="stylesheet" href="{{ asset('includes/css/bootstrap.css') }}" type="text/css" />*/
/* 		<link rel="stylesheet" href="{{ asset('includes/css/w3.css') }}" type="text/css" />*/
/* 		*/
/* 		<!-- Custom CSS -->*/
/* 		<!-- <link href="{{ asset('includes/css/freelancer.css') }}" rel="stylesheet">-->*/
/* 		<link rel="stylesheet" href="{{ asset('includes/css/style.css') }}" type="text/css" /> */
/*         <link rel="stylesheet" href="{{ asset('includes/css/font-awesome.min.css') }}" type="text/css" />*/
/* */
/* </style>*/
/* 	<div class="row">*/
/* 		<div  class="container-fluid text-center ">*/
/*             <div class="col-sm-10">*/
/* 			*/
/* 				<div class="row">*/
/* 					<div class="container">*/
/* 						<div class="col-lg-12">*/
/* 							<div class="col-md-4 pull-left text-center">*/
/* 								<p> <strong> REPUBLIQUE TUNISIENNE </strong> </p>*/
/* 								<p> MINISTERE DE L'ENSEIGNEMENT SUPERIEURE ET DE LA RECHERCHE </p>*/
/* 								<p> <strong> UNIVERSITE DE SFAX </strong> </p>*/
/* 								<p> FACULTE DES SCIENCES DE SFAX </p>*/
/* 							</div>*/
/* 						  */
/* 							<div class="col-md-3 text-center">*/
/* 								<h4 class="text-center lead">EMPLOI DU TEMPS </h4>*/
/* 								<h5 class="text-center "> {% if listeemp[0].semestre.code == "S1"  %} 1er Semestre {% else %} 2eme Semestre {% endif %} </h5>*/
/* 								<h5 class="text-center"> {{ listeemp[0].groupes.groupe }} </h5>*/
/* 								*/
/* 							</div>*/
/* 							<div class="col-md-4 text-center">*/
/* 								<p> Annee Universitaire : {{ listeemp[0].getHeureDebut|date('Y') }} / {{ listeemp[0].getHeureFin|date('Y') }}  </p>*/
/* 								<h5 > Departement : {{ listeemp[0].departements.departement }}    </h5>*/
/* 								<h5 > Filiere : {{ listeemp[0].filieres.filiere }}  {{ listeemp[0].classes.annee }} année </h5>*/
/* 								<h5> {{ date().format('d/m/Y') }} </h5>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			 */
/* 			 <br>*/
/* 			 */
/* 			  */
/* 				<div class="row">*/
/* 					<div class="container">*/
/* 						<div class="col-lg-11">*/
/* 						*/
/* 							<table class="table table-bordered table-striped table-condensed">*/
/* 							*/
/* 								<thead>*/
/* 									<tr>*/
/* 										 */
/* 										<th> Horaire </th>*/
/* 										<th> Matiere </th>*/
/* 										<th> Nature </th>*/
/* 										<th> Module </th>*/
/* 										<th> Salle </th>*/
/* 										<th> Periode </th>*/
/* 										<th> Enseignant </th>*/
/* 									</tr>*/
/* 								</thead>*/
/* 								*/
/* 								<tbody>*/
/* 						  */
/* 									{% for emp in listeemp %}*/
/* 									*/
/* 									<tr>*/
/* 									  */
/* 										<td class=" text-center">*/
/* 											<h5> {{ emp.jours.jour }} </h5>*/
/* 										</td>*/
/* 										*/
/* 										<td class="text-center">*/
/* 											<h5 class="text-center">*/
/* 												<span class="w3-green">  {{ emp.getHeureDebut|date('H:i') }}  </span>*/
/* 											</h5>	*/
/* 										</td>*/
/* 										<td class="text-center"> {{ emp.matiere.matiere }} </td>*/
/* 										<td class="text-center"> {{ emp.natures.description }} </td>*/
/* 										<td class="text-center">  </td>*/
/* 										<td class="text-center"> {{ emp.salles.salle }} </td>*/
/* 										<td class="text-center"> {{ emp.semestre.semestre }} </td>*/
/* 										<td class="text-center"> {{ emp.enseignants.enseignant }}  </td>*/
/* 											*/
/* 									</tr>*/
/* 									*/
/* 									{% endfor %}*/
/* 									*/
/* 									*/
/* 						  */
/* 								</tbody>*/
/* 							</table>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			  */
/* 				*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/*  */
