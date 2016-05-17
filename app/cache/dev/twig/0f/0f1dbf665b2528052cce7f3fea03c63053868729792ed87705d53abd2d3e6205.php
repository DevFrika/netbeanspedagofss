<?php

/* @PedagogiePedagogie/etudiant/filiere/filierelayout.html.twig */
class __TwigTemplate_20b239e7ce0d966134c1e53c2af0d8b4a2a4ad525fcee1a080e3609a799a18f5 extends Twig_Template
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
        $__internal_f873f103d5e344f28147440a0d6f91a33724ec230a9a2fa5c43ebf875c240dd7 = $this->env->getExtension("native_profiler");
        $__internal_f873f103d5e344f28147440a0d6f91a33724ec230a9a2fa5c43ebf875c240dd7->enter($__internal_f873f103d5e344f28147440a0d6f91a33724ec230a9a2fa5c43ebf875c240dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/etudiant/filiere/filierelayout.html.twig"));

        // line 1
        echo "<div class=\"section w3-clear\" style=\"margin-top:-25%;margin-left:1%;clear:both;\">
\t<div class=\"w3-row\">
\t\t<div id=\"filierelayout\" class=\"col-lg-10 container-fluid tabs w3-animate-zoom\" style=\"height:90%;width:100%;z-index:99;\">

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<header class=\"w3-container w3-blue w3-padding\">
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'bodycontent')\"  class=\"w3-btn btn w3-white tablink w3-left\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t\t\t\t
\t\t\t\t\t</header>
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t\t<div class=\"row\">
\t\t\t
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<!-- Sidenav/menu -->
\t\t\t\t\t<nav class=\"w3-card-2 w3-animate-left w3-white\" style=\"width:300px;position:static;\">
\t\t\t\t\t  <div class=\"w3-container w3-row\">
\t\t\t\t\t\t<div class=\"w3-col s4\">
\t\t\t\t\t\t\t<h3 class=\"text-center\"><b><i class=\"material-icons\">class</i> Emplois </b></h3><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  
\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t<li><a href=\"#\" class=\"tablinkw3-padding-hor-16 w3-hide-large w3-dark-grey w3-hover-black tablink\" onclick=\"w3_close()\" title=\"close menu\"><i class=\"fa fa-remove\"></i>  Close Menu</a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'listefiliere','filierelayout')\"><i class=\"fa fa-users\"></i> Liste des Filieres </a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'listefilieredep','filierelayout')\"><i class=\"fa fa-users\"></i> Liste des Filieres  par departements </a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'designhelp','filierelayout')\"><i class=\"fa fa-users\"></i> Help Design </a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"w3-padding w3-blue tablink\" data-toggle=\"modal\" data-target=\"#addfiliere\" ><i class=\"glyphicon glyphicon-plus\"></i> Ajouter une nouvelle Filiere </a></li>
\t\t\t\t\t</ul>\t
</nav>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t<!-- Overlay effect when opening sidenav on small screens -->
\t\t\t\t\t<div class=\"w3-overlay w3-hide-large w3-animate-opacity\" onclick=\"w3_close()\" style=\"cursor:pointer\" title=\"close side menu\"></div>


\t\t\t\t\t<!-- !PAGE CONTENT! -->
\t\t\t\t\t<div class=\"w3-main\" style=\"margin-top:13px;\">


\t\t\t\t\t\t<div class=\"w3-container w3-left\" >
\t\t\t\t\t\t\t
\t\t
\t\t<div id=\"filiereinfo\" class=\"w3-container w3-section userinfo w3-animate-left\">
\t\t
\t\t\t
          <h1> Info Filieres </h1>
          
          
           
\t\t</div>
\t\t
\t\t<div id=\"listefiliere\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t
\t\t\t";
        // line 58
        if ( !(null === (isset($context["allfiliere"]) ? $context["allfiliere"] : $this->getContext($context, "allfiliere")))) {
            // line 59
            echo "    
\t\t\t<div class=\"section\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allfiliere"]) ? $context["allfiliere"] : $this->getContext($context, "allfiliere")));
            foreach ($context['_seq'] as $context["_key"] => $context["fil"]) {
                // line 63
                echo "        
\t\t\t
\t\t\t\t\t\t<div id=\"fss";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "filiere", array()), "html", null, true);
                echo "\" class=\"col-md-6\">
\t\t\t\t\t\t  <div class=\"col-md-4\">
\t\t\t\t\t\t\t<img src=\"http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png\" class=\"img-responsive\">
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"col-md-15\">
\t\t\t\t\t\t\t<h3>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "filiere", array()), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#fil";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "filiere", array()), "html", null, true);
                echo "\" > <i class=\"fa fa-eye\"></i> Consulter </a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-green tablink\" onclick=\"openSubMenu(event, 'updatefil";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "filiere", array()), "html", null, true);
                echo "','modiffiliere','filierelayout')\"><i class=\"fa fa-pencil\"></i>Modifier</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" data-toggle=\"modal\" data-target=\"#delfil";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "filiere", array()), "html", null, true);
                echo "\" ><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t
\t\t\t  
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fil'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t
\t\t\t";
        } else {
            // line 89
            echo "\t\t\t  <h1> Pas de filiere </h1>
\t\t\t";
        }
        // line 91
        echo "\t
\t
\t</div>
\t

           
\t\t
\t\t
\t\t<div id=\"listefilieredep\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t
\t\t";
        // line 101
        if ( !(null === (isset($context["alldepartement"]) ? $context["alldepartement"] : $this->getContext($context, "alldepartement")))) {
            // line 102
            echo "    
\t\t\t<div class=\"section\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allfiliere"]) ? $context["allfiliere"] : $this->getContext($context, "allfiliere")));
            foreach ($context['_seq'] as $context["_key"] => $context["fil"]) {
                // line 106
                echo "        
\t\t\t
\t\t\t\t\t\t<div id=\"fss";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "filiere", array()), "html", null, true);
                echo "\" class=\"col-md-6\">
\t\t\t\t\t\t  <div class=\"col-md-4\">
\t\t\t\t\t\t\t<img src=\"http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png\" class=\"img-responsive\">
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"col-md-15\">
\t\t\t\t\t\t\t<h3>";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "filiere", array()), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#fil";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "filiere", array()), "html", null, true);
                echo "\" > <i class=\"fa fa-eye\"></i> Consulter </a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-green tablink\" onclick=\"openSubMenu(event, 'updatefil";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "filiere", array()), "html", null, true);
                echo "','modiffiliere','filierelayout')\"><i class=\"fa fa-pencil\"></i>Modifier</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" data-toggle=\"modal\" data-target=\"#delfil";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "filiere", array()), "html", null, true);
                echo "\" ><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t
\t\t\t  
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fil'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "\t\t\t\t\t

\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t
\t\t\t";
        } else {
            // line 133
            echo "\t\t\t  <h1> Pas de filiere </h1>
\t\t\t";
        }
        // line 135
        echo "\t\t\t
\t\t</div>
\t\t
\t\t
\t\t
\t\t<div id=\"designhelp\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t
\t\t\t<header class=\"w3-container w3-blue\">
\t\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'mainmenu')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t</header>
\t\t\t
\t\t\t  <div class=\"w3-container\">
\t\t\t\t<h5>Recent Users</h5>
\t\t\t\t<ul class=\"w3-ul w3-card-4 w3-white\">
\t\t\t\t 
\t\t\t\t  <li class=\"w3-padding-hor-16\">
\t\t\t\t\t<span onclick=\"this.parentElement.style.display='none'\" class=\"w3-closebtn w3-padding w3-margin-right w3-medium\">x</span>
\t\t\t\t\t<img src=\"img_avatar6.png\" class=\"w3-left w3-circle w3-margin-right\" style=\"width:35px\">
\t\t\t\t\t<span class=\"w3-xlarge\">Jane</span><br>
\t\t\t\t  </li>
\t\t\t\t</ul>
\t\t\t  </div>
\t\t  <hr>

\t\t\t  <div class=\"w3-container\">
\t\t\t\t<h5>Recent Comments</h5>
\t\t\t\t
\t\t\t\t<div class=\"w3-row\">
\t\t\t\t  <div class=\"w3-col s2 text-center\">
\t\t\t\t\t<img class=\"w3-circle w3-image\" src=\"img_avatar1.png\" style=\"width:96px;height:96px\">
\t\t\t\t  </div>
\t\t\t\t  <div class=\"w3-col s10 w3-container\">
\t\t\t\t\t<h4>Bo <span class=\"w3-opacity w3-medium\">Sep 28, 2014, 10:15 PM</span></h4>
\t\t\t\t\t<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t  
          
\t\t
          
           
\t\t</div>
\t\t
\t\t  
\t</div>
\t\t\t\t\t\t<!-- End page content -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>


\t";
        
        $__internal_f873f103d5e344f28147440a0d6f91a33724ec230a9a2fa5c43ebf875c240dd7->leave($__internal_f873f103d5e344f28147440a0d6f91a33724ec230a9a2fa5c43ebf875c240dd7_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/etudiant/filiere/filierelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 135,  216 => 133,  208 => 127,  192 => 117,  188 => 116,  184 => 115,  179 => 113,  171 => 108,  167 => 106,  163 => 105,  158 => 102,  156 => 101,  144 => 91,  140 => 89,  133 => 84,  117 => 74,  113 => 73,  109 => 72,  104 => 70,  96 => 65,  92 => 63,  88 => 62,  83 => 59,  81 => 58,  22 => 1,);
    }
}
/* <div class="section w3-clear" style="margin-top:-25%;margin-left:1%;clear:both;">*/
/* 	<div class="w3-row">*/
/* 		<div id="filierelayout" class="col-lg-10 container-fluid tabs w3-animate-zoom" style="height:90%;width:100%;z-index:99;">*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-md-12">*/
/* 					<header class="w3-container w3-blue w3-padding">*/
/* 							<a href="#" onclick="closeMenu(event, 'bodycontent')"  class="w3-btn btn w3-white tablink w3-left"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 						*/
/* 					</header>*/
/* 				</div>*/
/* 			</div>*/
/* 		*/
/* 			<div class="row">*/
/* 			*/
/* 				<div class="col-md-3">*/
/* 					<!-- Sidenav/menu -->*/
/* 					<nav class="w3-card-2 w3-animate-left w3-white" style="width:300px;position:static;">*/
/* 					  <div class="w3-container w3-row">*/
/* 						<div class="w3-col s4">*/
/* 							<h3 class="text-center"><b><i class="material-icons">class</i> Emplois </b></h3><br>*/
/* 						</div>*/
/* 					  </div>*/
/* 					  */
/* 					<ul class="nav nav-pills nav-stacked">*/
/* 						<li><a href="#" class="tablinkw3-padding-hor-16 w3-hide-large w3-dark-grey w3-hover-black tablink" onclick="w3_close()" title="close menu"><i class="fa fa-remove"></i>  Close Menu</a></li>*/
/* 						<li><a href="#" class="tablink" onclick="openSubTab(event, 'listefiliere','filierelayout')"><i class="fa fa-users"></i> Liste des Filieres </a></li>*/
/* 						<li><a href="#" class="tablink" onclick="openSubTab(event, 'listefilieredep','filierelayout')"><i class="fa fa-users"></i> Liste des Filieres  par departements </a></li>*/
/* 						<li><a href="#" class="tablink" onclick="openSubTab(event, 'designhelp','filierelayout')"><i class="fa fa-users"></i> Help Design </a></li>*/
/* 						<li><a href="#" class="w3-padding w3-blue tablink" data-toggle="modal" data-target="#addfiliere" ><i class="glyphicon glyphicon-plus"></i> Ajouter une nouvelle Filiere </a></li>*/
/* 					</ul>	*/
/* </nav>*/
/* 				</div>*/
/* */
/* 				<div class="col-md-9">*/
/* 					<!-- Overlay effect when opening sidenav on small screens -->*/
/* 					<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu"></div>*/
/* */
/* */
/* 					<!-- !PAGE CONTENT! -->*/
/* 					<div class="w3-main" style="margin-top:13px;">*/
/* */
/* */
/* 						<div class="w3-container w3-left" >*/
/* 							*/
/* 		*/
/* 		<div id="filiereinfo" class="w3-container w3-section userinfo w3-animate-left">*/
/* 		*/
/* 			*/
/*           <h1> Info Filieres </h1>*/
/*           */
/*           */
/*            */
/* 		</div>*/
/* 		*/
/* 		<div id="listefiliere" class="tabs w3-container w3-section w3-animate-left">*/
/* 		*/
/* 			{% if allfiliere is not null %}*/
/*     */
/* 			<div class="section">*/
/* 				<div class="container">*/
/* 					{% for fil in allfiliere  %}*/
/*         */
/* 			*/
/* 						<div id="fss{{ fil.filiere }}" class="col-md-6">*/
/* 						  <div class="col-md-4">*/
/* 							<img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png" class="img-responsive">*/
/* 						  </div>*/
/* 						  <div class="col-md-15">*/
/* 							<h3>{{ fil.filiere }}</h3>*/
/* 						*/
/* 								<a class="btn btn-primary" data-toggle="modal" data-target="#fil{{ fil.filiere }}" > <i class="fa fa-eye"></i> Consulter </a>*/
/* 								<a class="btn btn-primary w3-green tablink" onclick="openSubMenu(event, 'updatefil{{ fil.filiere }}','modiffiliere','filierelayout')"><i class="fa fa-pencil"></i>Modifier</a>*/
/* 								<a class="btn btn-primary w3-red" data-toggle="modal" data-target="#delfil{{ fil.filiere }}" ><i class="fa fa-trash"></i>Supprimer</a>*/
/* 							*/
/* 						  </div>*/
/* 						</div>*/
/* 						*/
/* 						*/
/* 					*/
/* 				*/
/* 			  */
/* 					{%endfor%}*/
/* */
/* 				</div>*/
/* 			</div>*/
/* 				*/
/* 			{% else %}*/
/* 			  <h1> Pas de filiere </h1>*/
/* 			{% endif %}*/
/* 	*/
/* 	*/
/* 	</div>*/
/* 	*/
/* */
/*            */
/* 		*/
/* 		*/
/* 		<div id="listefilieredep" class="tabs w3-container w3-section w3-animate-left">*/
/* 		*/
/* 		{% if alldepartement is not null %}*/
/*     */
/* 			<div class="section">*/
/* 				<div class="container">*/
/* 					{% for fil in allfiliere  %}*/
/*         */
/* 			*/
/* 						<div id="fss{{ fil.filiere }}" class="col-md-6">*/
/* 						  <div class="col-md-4">*/
/* 							<img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png" class="img-responsive">*/
/* 						  </div>*/
/* 						  <div class="col-md-15">*/
/* 							<h3>{{ fil.filiere }}</h3>*/
/* 						*/
/* 								<a class="btn btn-primary" data-toggle="modal" data-target="#fil{{ fil.filiere }}" > <i class="fa fa-eye"></i> Consulter </a>*/
/* 								<a class="btn btn-primary w3-green tablink" onclick="openSubMenu(event, 'updatefil{{ fil.filiere }}','modiffiliere','filierelayout')"><i class="fa fa-pencil"></i>Modifier</a>*/
/* 								<a class="btn btn-primary w3-red" data-toggle="modal" data-target="#delfil{{ fil.filiere }}" ><i class="fa fa-trash"></i>Supprimer</a>*/
/* 							*/
/* 						  </div>*/
/* 						</div>*/
/* 						*/
/* 						*/
/* 					*/
/* 				*/
/* 			  */
/* 					{%endfor%}*/
/* 					*/
/* */
/* 				</div>*/
/* 			</div>*/
/* 				*/
/* 			{% else %}*/
/* 			  <h1> Pas de filiere </h1>*/
/* 			{% endif %}*/
/* 			*/
/* 		</div>*/
/* 		*/
/* 		*/
/* 		*/
/* 		<div id="designhelp" class="tabs w3-container w3-section w3-animate-left">*/
/* 		*/
/* 			<header class="w3-container w3-blue">*/
/* 					<a href="#" onclick="closeMenu(event, 'mainmenu')"  class="w3-btn btn btn-info tablink"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 			</header>*/
/* 			*/
/* 			  <div class="w3-container">*/
/* 				<h5>Recent Users</h5>*/
/* 				<ul class="w3-ul w3-card-4 w3-white">*/
/* 				 */
/* 				  <li class="w3-padding-hor-16">*/
/* 					<span onclick="this.parentElement.style.display='none'" class="w3-closebtn w3-padding w3-margin-right w3-medium">x</span>*/
/* 					<img src="img_avatar6.png" class="w3-left w3-circle w3-margin-right" style="width:35px">*/
/* 					<span class="w3-xlarge">Jane</span><br>*/
/* 				  </li>*/
/* 				</ul>*/
/* 			  </div>*/
/* 		  <hr>*/
/* */
/* 			  <div class="w3-container">*/
/* 				<h5>Recent Comments</h5>*/
/* 				*/
/* 				<div class="w3-row">*/
/* 				  <div class="w3-col s2 text-center">*/
/* 					<img class="w3-circle w3-image" src="img_avatar1.png" style="width:96px;height:96px">*/
/* 				  </div>*/
/* 				  <div class="w3-col s10 w3-container">*/
/* 					<h4>Bo <span class="w3-opacity w3-medium">Sep 28, 2014, 10:15 PM</span></h4>*/
/* 					<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 		  */
/*           */
/* 		*/
/*           */
/*            */
/* 		</div>*/
/* 		*/
/* 		  */
/* 	</div>*/
/* 						<!-- End page content -->*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* */
/* 	*/
