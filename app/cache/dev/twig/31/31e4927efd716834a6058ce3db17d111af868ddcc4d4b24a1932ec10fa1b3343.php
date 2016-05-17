<?php

/* PedagogiePedagogieBundle:prof/enseignant:enseignantlayout.html.twig */
class __TwigTemplate_0662579f1b4b62d6dff782c8171bf7c9682851e35395771a36b94adc0cff4280 extends Twig_Template
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
        $__internal_ba6e07ce154414e05374aa99702668fc74f0fed8ba79d7269114c8feb0de4592 = $this->env->getExtension("native_profiler");
        $__internal_ba6e07ce154414e05374aa99702668fc74f0fed8ba79d7269114c8feb0de4592->enter($__internal_ba6e07ce154414e05374aa99702668fc74f0fed8ba79d7269114c8feb0de4592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:prof/enseignant:enseignantlayout.html.twig"));

        // line 1
        echo "<div class=\"section w3-clear\" style=\"margin-top:-2%;margin-left:1%;clear:both;\">
\t<div class=\"w3-row\">
\t\t<div id=\"enseignantlayout\" class=\"col-lg-10 container-fluid tabs w3-animate-zoom\" style=\"height:90%;width:100%;z-index:99;\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t<header class=\"w3-container w3-blue w3-padding\">
\t\t\t\t\t<a href=\"#\" onclick=\"closensenu(event, 'bodycontent')\"  class=\"w3-btn btn w3-white tablink w3-left\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t\t
\t\t\t</header>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"row\">
\t\t
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<!-- Sidenav/menu -->
\t\t\t\t<nav class=\"w3-card-2 w3-animate-left w3-white\" style=\"width:300px;position:static;border: 3px solid #73AD21;\">
\t\t\t\t  <div class=\"w3-container w3-row\">
\t\t\t\t\t<div class=\"w3-col s4\">
\t\t\t\t\t\t<h3 class=\"text-center\"><b><i class=\"material-icons\">class</i> enseignants </b></h3><br>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t<li><a href=\"#\" class=\"tablinkw3-padding-hor-16 w3-hide-large w3-dark-grey w3-hover-black tablink\" onclick=\"w3_close()\" title=\"close menu\"><i class=\"fa fa-rensove\"></i>  Close Menu</a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"opensubTab(event, 'listeenseignant','enseignantlayout')\"><i class=\"fa fa-users\"></i> Liste des enseignants </a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"opensubTab(event, 'listeenseignantdep','enseignantlayout')\"><i class=\"fa fa-users\"></i> Liste des enseignants  par departensents </a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"opensubTab(event, 'designhelp','enseignantlayout')\"><i class=\"fa fa-users\"></i> Help Design </a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"w3-padding w3-blue tablink\" data-toggle=\"modal\" data-target=\"#addenseignant\" ><i class=\"glyphicon glyphicon-plus\"></i> Ajouter une nouvelle enseignant </a></li>
\t\t\t\t</ul>
\t\t\t\t 
\t\t\t\t</nav>
\t\t\t</div>

\t\t\t<div class=\"col-md-9\">
\t\t\t\t<!-- Overlay effect when opening sidenav on small screens -->
\t\t\t\t<div class=\"w3-overlay w3-hide-large w3-animate-opacity\" onclick=\"w3_close()\" style=\"cursor:pointer\" title=\"close side menu\"></div>


\t\t\t\t<!-- !PAGE CONTENT! -->
\t\t\t\t<div class=\"w3-main\" style=\"margin-top:13px;\">


\t\t\t\t\t<div class=\"w3-container w3-left\" >
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"enseignantinfo\" class=\"w3-container w3-section userinfo w3-animate-left\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t  <h1> Info enseignants </h1>
\t\t\t\t\t\t  
\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"listeenseignant\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 57
        if ( !(null === (isset($context["allenseignant"]) ? $context["allenseignant"] : $this->getContext($context, "allenseignant")))) {
            // line 58
            echo "\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allenseignant"]) ? $context["allenseignant"] : $this->getContext($context, "allenseignant")));
            foreach ($context['_seq'] as $context["_key"] => $context["ens"]) {
                // line 62
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div id=\"fss";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "enseignant", array()), "html", null, true);
                echo "\" class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t  <div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t  <div class=\"col-md-15\">
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "enseignant", array()), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#ens";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "enseignant", array()), "html", null, true);
                echo "\" > <i class=\"fa fa-eye\"></i> Consulter </a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-green tablink\" onclick=\"opensubMenu(event, 'updateens";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "enseignant", array()), "html", null, true);
                echo "','modifenseignant','enseignantlayout')\"><i class=\"fa fa-pencil\"></i>Modifier</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" data-toggle=\"modal\" data-target=\"#delens";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "enseignant", array()), "html", null, true);
                echo "\" ><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ens'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        } else {
            // line 83
            echo "\t\t\t\t\t\t\t  <h1> Pas de enseignant </h1>
\t\t\t\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t   
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"listeenseignantdep\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 95
        if ( !(null === (isset($context["allenseignant"]) ? $context["allenseignant"] : $this->getContext($context, "allenseignant")))) {
            // line 96
            echo "\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allenseignant"]) ? $context["allenseignant"] : $this->getContext($context, "allenseignant")));
            foreach ($context['_seq'] as $context["_key"] => $context["ens"]) {
                // line 101
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div id=\"fss";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "enseignant", array()), "html", null, true);
                echo "\" class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t  <div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t  <div class=\"col-md-15\">
\t\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "enseignant", array()), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#ens";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "enseignant", array()), "html", null, true);
                echo "\" > <i class=\"fa fa-eye\"></i> Consulter </a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-green tablink\" onclick=\"opensubMenu(event, 'updateens";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "enseignant", array()), "html", null, true);
                echo "','modifenseignant','enseignantlayout')\"><i class=\"fa fa-pencil\"></i>Modifier</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" data-toggle=\"modal\" data-target=\"#delens";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "enseignant", array()), "html", null, true);
                echo "\" ><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ens'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        } else {
            // line 122
            echo "\t\t\t\t\t\t\t  <h1> Pas de enseignant </h1>
\t\t\t\t\t\t\t";
        }
        // line 124
        echo "\t\t\t\t\t\t  
\t\t\t\t\t\t   
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"designhelp\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<header class=\"w3-container w3-blue\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"closensenu(event, 'mainmenu')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t  <div class=\"w3-container\">
\t\t\t\t\t\t\t\t<h5>Recent Users</h5>
\t\t\t\t\t\t\t\t<ul class=\"w3-ul w3-card-4 w3-white\">
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t  <li class=\"w3-padding-hor-16\">
\t\t\t\t\t\t\t\t\t<span onclick=\"this.parentElensent.style.display='none'\" class=\"w3-closebtn w3-padding w3-margin-right w3-medium\">x</span>
\t\t\t\t\t\t\t\t\t<img src=\"img_avatar6.png\" class=\"w3-left w3-circle w3-margin-right\" style=\"width:35px\">
\t\t\t\t\t\t\t\t\t<span class=\"w3-xlarge\">Jane</span><br>
\t\t\t\t\t\t\t\t  </li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <hr>

\t\t\t\t\t\t\t  <div class=\"w3-container\">
\t\t\t\t\t\t\t\t<h5>Recent Comments</h5>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"w3-row\">
\t\t\t\t\t\t\t\t  <div class=\"w3-col s2 text-center\">
\t\t\t\t\t\t\t\t\t<img class=\"w3-circle w3-image\" src=\"img_avatar1.png\" style=\"width:96px;height:96px\">
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  <div class=\"w3-col s10 w3-container\">
\t\t\t\t\t\t\t\t\t<h4>Bo <span class=\"w3-opacity w3-medium\">Sep 28, 2014, 10:15 PM</span></h4>
\t\t\t\t\t\t\t\t\t<p>Sed do eiusmod tensor incididunt ut labore et dolore magna aliqua.</p><br>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  
\t\t\t\t\t\t  
\t\t\t\t\t\t
\t\t\t\t\t\t  
\t\t\t\t\t\t   
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t  
\t\t\t\t\t</div>
\t\t\t\t  <!-- End page content -->
\t\t\t\t</div>

\t\t\t</div>

\t\t</div>
\t</div>
</div>
\t

\t";
        
        $__internal_ba6e07ce154414e05374aa99702668fc74f0fed8ba79d7269114c8feb0de4592->leave($__internal_ba6e07ce154414e05374aa99702668fc74f0fed8ba79d7269114c8feb0de4592_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:prof/enseignant:enseignantlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 124,  205 => 122,  198 => 117,  186 => 111,  182 => 110,  178 => 109,  173 => 107,  165 => 102,  162 => 101,  158 => 100,  152 => 96,  150 => 95,  138 => 85,  134 => 83,  127 => 78,  115 => 72,  111 => 71,  107 => 70,  102 => 68,  94 => 63,  91 => 62,  87 => 61,  82 => 58,  80 => 57,  22 => 1,);
    }
}
/* <div class="section w3-clear" style="margin-top:-2%;margin-left:1%;clear:both;">*/
/* 	<div class="w3-row">*/
/* 		<div id="enseignantlayout" class="col-lg-10 container-fluid tabs w3-animate-zoom" style="height:90%;width:100%;z-index:99;">*/
/* */
/* 		<div class="row">*/
/* 			<div class="col-md-12">*/
/* 			<header class="w3-container w3-blue w3-padding">*/
/* 					<a href="#" onclick="closensenu(event, 'bodycontent')"  class="w3-btn btn w3-white tablink w3-left"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 				*/
/* 			</header>*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 		<div class="row">*/
/* 		*/
/* 			<div class="col-md-3">*/
/* 				<!-- Sidenav/menu -->*/
/* 				<nav class="w3-card-2 w3-animate-left w3-white" style="width:300px;position:static;border: 3px solid #73AD21;">*/
/* 				  <div class="w3-container w3-row">*/
/* 					<div class="w3-col s4">*/
/* 						<h3 class="text-center"><b><i class="material-icons">class</i> enseignants </b></h3><br>*/
/* 					</div>*/
/* 				  </div>*/
/* 				  */
/* 				<ul class="nav nav-pills nav-stacked">*/
/* 					<li><a href="#" class="tablinkw3-padding-hor-16 w3-hide-large w3-dark-grey w3-hover-black tablink" onclick="w3_close()" title="close menu"><i class="fa fa-rensove"></i>  Close Menu</a></li>*/
/* 					<li><a href="#" class="tablink" onclick="opensubTab(event, 'listeenseignant','enseignantlayout')"><i class="fa fa-users"></i> Liste des enseignants </a></li>*/
/* 					<li><a href="#" class="tablink" onclick="opensubTab(event, 'listeenseignantdep','enseignantlayout')"><i class="fa fa-users"></i> Liste des enseignants  par departensents </a></li>*/
/* 					<li><a href="#" class="tablink" onclick="opensubTab(event, 'designhelp','enseignantlayout')"><i class="fa fa-users"></i> Help Design </a></li>*/
/* 					<li><a href="#" class="w3-padding w3-blue tablink" data-toggle="modal" data-target="#addenseignant" ><i class="glyphicon glyphicon-plus"></i> Ajouter une nouvelle enseignant </a></li>*/
/* 				</ul>*/
/* 				 */
/* 				</nav>*/
/* 			</div>*/
/* */
/* 			<div class="col-md-9">*/
/* 				<!-- Overlay effect when opening sidenav on small screens -->*/
/* 				<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu"></div>*/
/* */
/* */
/* 				<!-- !PAGE CONTENT! -->*/
/* 				<div class="w3-main" style="margin-top:13px;">*/
/* */
/* */
/* 					<div class="w3-container w3-left" >*/
/* 						*/
/* 						<div id="enseignantinfo" class="w3-container w3-section userinfo w3-animate-left">*/
/* 						*/
/* 							*/
/* 						  <h1> Info enseignants </h1>*/
/* 						  */
/* 		*/
/* 						</div>*/
/* 						*/
/* 						<div id="listeenseignant" class="tabs w3-container w3-section w3-animate-left">*/
/* 						*/
/* 							{% if allenseignant is not null %}*/
/* 					*/
/* 							<div class="section">*/
/* 								<div class="container">*/
/* 									{% for ens in allenseignant  %}*/
/* 						*/
/* 										<div id="fss{{ ens.enseignant }}" class="col-md-8">*/
/* 										  <div class="col-md-4">*/
/* 											<img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png" class="img-responsive">*/
/* 										  </div>*/
/* 										  <div class="col-md-15">*/
/* 											<h3>{{ ens.enseignant }}</h3>*/
/* 										*/
/* 												<a class="btn btn-primary" data-toggle="modal" data-target="#ens{{ ens.enseignant }}" > <i class="fa fa-eye"></i> Consulter </a>*/
/* 												<a class="btn btn-primary w3-green tablink" onclick="opensubMenu(event, 'updateens{{ ens.enseignant }}','modifenseignant','enseignantlayout')"><i class="fa fa-pencil"></i>Modifier</a>*/
/* 												<a class="btn btn-primary w3-red" data-toggle="modal" data-target="#delens{{ ens.enseignant }}" ><i class="fa fa-trash"></i>Supprimer</a>*/
/* 											*/
/* 										  </div>*/
/* 										</div>*/
/* 										*/
/* 									{%endfor%}*/
/* */
/* 								</div>*/
/* 							</div>*/
/* 								*/
/* 							{% else %}*/
/* 							  <h1> Pas de enseignant </h1>*/
/* 							{% endif %}*/
/* 					*/
/* 					*/
/* 						</div>*/
/* 						*/
/* 						*/
/* 						   */
/* 						*/
/* 						*/
/* 						<div id="listeenseignantdep" class="tabs w3-container w3-section w3-animate-left">*/
/* 						*/
/* 						{% if allenseignant is not null %}*/
/* 					*/
/* 							<div class="section">*/
/* 								<div class="container">*/
/* 									*/
/* 									{% for ens in allenseignant  %}*/
/* 						*/
/* 										<div id="fss{{ ens.enseignant }}" class="col-md-8">*/
/* 										  <div class="col-md-4">*/
/* 											<img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png" class="img-responsive">*/
/* 										  </div>*/
/* 										  <div class="col-md-15">*/
/* 											<h3>{{ ens.enseignant }}</h3>*/
/* 										*/
/* 												<a class="btn btn-primary" data-toggle="modal" data-target="#ens{{ ens.enseignant }}" > <i class="fa fa-eye"></i> Consulter </a>*/
/* 												<a class="btn btn-primary w3-green tablink" onclick="opensubMenu(event, 'updateens{{ ens.enseignant }}','modifenseignant','enseignantlayout')"><i class="fa fa-pencil"></i>Modifier</a>*/
/* 												<a class="btn btn-primary w3-red" data-toggle="modal" data-target="#delens{{ ens.enseignant }}" ><i class="fa fa-trash"></i>Supprimer</a>*/
/* 											*/
/* 										  </div>*/
/* 										</div>*/
/* 										*/
/* 									{%endfor%}*/
/* */
/* 								</div>*/
/* 							</div>*/
/* 								*/
/* 							{% else %}*/
/* 							  <h1> Pas de enseignant </h1>*/
/* 							{% endif %}*/
/* 						  */
/* 						   */
/* 						</div>*/
/* 						*/
/* 						*/
/* 						*/
/* 						<div id="designhelp" class="tabs w3-container w3-section w3-animate-left">*/
/* 						*/
/* 							<header class="w3-container w3-blue">*/
/* 									<a href="#" onclick="closensenu(event, 'mainmenu')"  class="w3-btn btn btn-info tablink"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 							</header>*/
/* 							*/
/* 							  <div class="w3-container">*/
/* 								<h5>Recent Users</h5>*/
/* 								<ul class="w3-ul w3-card-4 w3-white">*/
/* 								 */
/* 								  <li class="w3-padding-hor-16">*/
/* 									<span onclick="this.parentElensent.style.display='none'" class="w3-closebtn w3-padding w3-margin-right w3-medium">x</span>*/
/* 									<img src="img_avatar6.png" class="w3-left w3-circle w3-margin-right" style="width:35px">*/
/* 									<span class="w3-xlarge">Jane</span><br>*/
/* 								  </li>*/
/* 								</ul>*/
/* 							  </div>*/
/* 						  <hr>*/
/* */
/* 							  <div class="w3-container">*/
/* 								<h5>Recent Comments</h5>*/
/* 								*/
/* 								<div class="w3-row">*/
/* 								  <div class="w3-col s2 text-center">*/
/* 									<img class="w3-circle w3-image" src="img_avatar1.png" style="width:96px;height:96px">*/
/* 								  </div>*/
/* 								  <div class="w3-col s10 w3-container">*/
/* 									<h4>Bo <span class="w3-opacity w3-medium">Sep 28, 2014, 10:15 PM</span></h4>*/
/* 									<p>Sed do eiusmod tensor incididunt ut labore et dolore magna aliqua.</p><br>*/
/* 								  </div>*/
/* 								</div>*/
/* 							  </div>*/
/* 						  */
/* 						  */
/* 						*/
/* 						  */
/* 						   */
/* 						</div>*/
/* 						*/
/* 						  */
/* 					</div>*/
/* 				  <!-- End page content -->*/
/* 				</div>*/
/* */
/* 			</div>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* 	*/
/* */
/* 	*/
