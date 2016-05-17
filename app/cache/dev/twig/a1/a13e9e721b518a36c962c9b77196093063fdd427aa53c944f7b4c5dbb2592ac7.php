<?php

/* PedagogiePedagogieBundle:admin/emploi:listeemploigroupetemplate.html.twig */
class __TwigTemplate_af74a92b445654cbab8ece6dfa8bf2aa4b07053d95f388e35636f6ec755fa678 extends Twig_Template
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
        $__internal_a1b49a26774ad64ada6725dee429ea6f8f310263db91cc823248a18f8de87a43 = $this->env->getExtension("native_profiler");
        $__internal_a1b49a26774ad64ada6725dee429ea6f8f310263db91cc823248a18f8de87a43->enter($__internal_a1b49a26774ad64ada6725dee429ea6f8f310263db91cc823248a18f8de87a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:admin/emploi:listeemploigroupetemplate.html.twig"));

        // line 1
        echo "﻿
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
        // line 18
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["listeemp"]) ? $context["listeemp"] : $this->getContext($context, "listeemp")), 0, array(), "array"), "semestre", array()), "code", array()) == "S1")) {
            echo " 1er Semestre ";
        } else {
            echo " 2eme Semestre ";
        }
        echo " </h5>
\t\t\t\t\t\t\t\t<h5 class=\"text-center\"> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["listeemp"]) ? $context["listeemp"] : $this->getContext($context, "listeemp")), 0, array(), "array"), "groupes", array()), "groupe", array()), "html", null, true);
        echo " </h5>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t\t\t\t\t<p> Annee Universitaire : ";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listeemp"]) ? $context["listeemp"] : $this->getContext($context, "listeemp")), 0, array(), "array"), "getHeureDebut", array()), "Y"), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listeemp"]) ? $context["listeemp"] : $this->getContext($context, "listeemp")), 0, array(), "array"), "getHeureFin", array()), "Y"), "html", null, true);
        echo "  </p>
\t\t\t\t\t\t\t\t<h5 > Departement : ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["listeemp"]) ? $context["listeemp"] : $this->getContext($context, "listeemp")), 0, array(), "array"), "departements", array()), "departement", array()), "html", null, true);
        echo "    </h5>
\t\t\t\t\t\t\t\t<h5 > Filiere : ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["listeemp"]) ? $context["listeemp"] : $this->getContext($context, "listeemp")), 0, array(), "array"), "filieres", array()), "filiere", array()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["listeemp"]) ? $context["listeemp"] : $this->getContext($context, "listeemp")), 0, array(), "array"), "classes", array()), "annee", array()), "html", null, true);
        echo " année </h5>
\t\t\t\t\t\t\t\t<h5> ";
        // line 26
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
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeemp"]) ? $context["listeemp"] : $this->getContext($context, "listeemp")));
        foreach ($context['_seq'] as $context["_key"] => $context["emp"]) {
            // line 57
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t<td class=\" text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h5> ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "jours", array()), "jour", array()), "html", null, true);
            echo " </h5>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"w3-green\">  ";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["emp"], "getHeureDebut", array()), "H:i"), "html", null, true);
            echo "  </span>
\t\t\t\t\t\t\t\t\t\t\t</h5>\t
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"> ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "matiere", array()), "matiere", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"> ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "natures", array()), "description", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">  </td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"> ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "salles", array()), "salle", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"> ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "semestre", array()), "semestre", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"> ";
            // line 74
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
        // line 79
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
        
        $__internal_a1b49a26774ad64ada6725dee429ea6f8f310263db91cc823248a18f8de87a43->leave($__internal_a1b49a26774ad64ada6725dee429ea6f8f310263db91cc823248a18f8de87a43_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:admin/emploi:listeemploigroupetemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 79,  146 => 74,  142 => 73,  138 => 72,  133 => 70,  129 => 69,  123 => 66,  115 => 61,  109 => 57,  105 => 56,  72 => 26,  66 => 25,  62 => 24,  56 => 23,  49 => 19,  41 => 18,  22 => 1,);
    }
}
/* ﻿*/
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
