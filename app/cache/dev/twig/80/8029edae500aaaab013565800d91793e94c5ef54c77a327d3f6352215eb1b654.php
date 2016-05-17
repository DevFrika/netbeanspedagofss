<?php

/* @PedagogiePedagogie/admin/classe/classelayout.html.twig */
class __TwigTemplate_70636c345e07aaecadc3d32961f7657a1cd9ac8eecc9bdc6bea17106bd6e05ad extends Twig_Template
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
        $__internal_7c9bba791f4d12d23d555236a6de22e2cc4676704de362b5a193d4e6eec1c248 = $this->env->getExtension("native_profiler");
        $__internal_7c9bba791f4d12d23d555236a6de22e2cc4676704de362b5a193d4e6eec1c248->enter($__internal_7c9bba791f4d12d23d555236a6de22e2cc4676704de362b5a193d4e6eec1c248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/admin/classe/classelayout.html.twig"));

        // line 1
        echo "<div class=\"section w3-clear \" style=\"margin-top:-25%;clear:both;\">
\t<div class=\"row\">
\t\t<div id=\"classelayout\" class=\"col-lg-12 container-fluid tabs w3-animate-zoom w3-white\" style=\"height:90%;width:100%;z-index:99;\">

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<header class=\"w3-container w3-blue w3-padding\">
\t\t\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'bodycontent')\"  class=\"w3-btn btn w3-white tablink w3-left\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t\t\t<!--\t<a href=\"#\" onclick=\"w3_open()\" class=\"w3-btn btn w3-white tablink\" ><i class=\"fa fa-bars\"></i>  Menu </a> -->
\t\t\t\t</header>
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t<div class=\"row\">
\t\t
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<!-- Sidenav/menu -->
\t\t\t\t\t<nav class=\"w3-card-2 w3-animate-left w3-white\">
\t\t\t\t\t  <div class=\"w3-container w3-row\">
\t\t\t\t\t\t<div class=\"w3-col s4\">
\t\t\t\t\t\t\t<h3 class=\"text-center\"><b> <i class=\"glyphicon glyphicon-list-alt w3-xlarge\"></i> Classes </b></h3><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  
\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t<li><a href=\"#\" class=\"tablinkw3-padding-hor-16 w3-hide-large w3-dark-grey w3-hover-black tablink\" onclick=\"w3_close()\" title=\"close menu\"><i class=\"fa fa-remove\"></i>  Close Menu</a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'listeclasse','classelayout')\"><i class=\"fa fa-users\"></i> Liste des classes </a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'listeclassedep','classelayout')\"><i class=\"fa fa-users\"></i> Liste des classes  par departements </a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'designhelp','classelayout')\"><i class=\"fa fa-users\"></i> Help Design </a></li>
\t\t\t\t\t\t<li><a href=\"#\" class=\"w3-padding w3-blue tablink\" data-toggle=\"modal\" data-target=\"#addclasse\" ><i class=\"glyphicon glyphicon-plus\"></i> Ajouter une nouvelle classe </a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t 
\t\t\t\t\t</nav>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t<!-- Overlay effect when opening sidenav on small screens -->
\t\t\t\t\t<div class=\"w3-overlay w3-hide-large w3-animate-opacity\" onclick=\"w3_close()\" style=\"cursor:pointer\" title=\"close side menu\"></div>


\t\t\t\t\t<!-- !PAGE CONTENT! -->
\t\t\t\t\t<div class=\"w3-main\" style=\"margin-top:13px;\">


\t\t\t\t\t\t<div class=\"w3-container w3-left\" >
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"classeinfo\" class=\"w3-container w3-section userinfo w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t  <h1> Info classes </h1>
\t\t\t\t\t\t\t  
\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"listeclasse\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 57
        if ( !(null === (isset($context["allclasse"]) ? $context["allclasse"] : $this->getContext($context, "allclasse")))) {
            // line 58
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allclasse"]) ? $context["allclasse"] : $this->getContext($context, "allclasse")));
            foreach ($context['_seq'] as $context["_key"] => $context["cls"]) {
                // line 62
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fsscls";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["cls"], "id", array()), "html", null, true);
                echo " col-md-3\" >
\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t  <div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["cls"], "classe", array()), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#cls";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["cls"], "id", array()), "html", null, true);
                echo "\" > <i class=\"fa fa-eye\"></i> Consulter </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-green tablink\" onclick=\"openSubMenu(event, 'updatecls";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["cls"], "id", array()), "html", null, true);
                echo "','modifclasse','classelayout')\"><i class=\"fa fa-pencil\"></i>Modifier</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" data-toggle=\"modal\" data-target=\"#delcls";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["cls"], "id", array()), "html", null, true);
                echo "\" ><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cls'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        } else {
            // line 81
            echo "\t\t\t\t\t\t\t\t  <h1> Pas de classe </h1>
\t\t\t\t\t\t\t\t";
        }
        // line 83
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"listeclassedep\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 93
        if ( !(null === (isset($context["alldepartement"]) ? $context["alldepartement"] : $this->getContext($context, "alldepartement")))) {
            // line 94
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : $this->getContext($context, "alldepartement")));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 99
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Departement de ";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "departement", array()), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 103
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["dep"], "classes", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["cls"]) {
                    // line 104
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fsscls";
                    // line 105
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cls"], "id", array()), "html", null, true);
                    echo " col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t  <div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                    // line 108
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cls"], "classe", array()), "html", null, true);
                    echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#cls";
                    // line 110
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cls"], "id", array()), "html", null, true);
                    echo "\" > <i class=\"fa fa-eye\"></i> Consulter </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-green tablink\" onclick=\"openSubMenu(event, 'updatecls";
                    // line 111
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cls"], "id", array()), "html", null, true);
                    echo "','modifclasse','classelayout')\"><i class=\"fa fa-pencil\"></i>Modifier</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" data-toggle=\"modal\" data-target=\"#delcls";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cls"], "id", array()), "html", null, true);
                    echo "\" ><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cls'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        } else {
            // line 126
            echo "\t\t\t\t\t\t\t\t  <h1> Pas de classe </h1>
\t\t\t\t\t\t\t\t";
        }
        // line 128
        echo "\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"designhelp\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<header class=\"w3-container w3-blue\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'mainmenu')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t  <div class=\"w3-container\">
\t\t\t\t\t\t\t\t\t<h5>Recent Users</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"w3-ul w3-card-4 w3-white\">
\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t  <li class=\"w3-padding-hor-16\">
\t\t\t\t\t\t\t\t\t\t<span onclick=\"this.parentElement.style.display='none'\" class=\"w3-closebtn w3-padding w3-margin-right w3-medium\">x</span>
\t\t\t\t\t\t\t\t\t\t<img src=\"img_avatar6.png\" class=\"w3-left w3-circle w3-margin-right\" style=\"width:35px\">
\t\t\t\t\t\t\t\t\t\t<span class=\"w3-xlarge\">Jane</span><br>
\t\t\t\t\t\t\t\t\t  </li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  <hr>

\t\t\t\t\t\t\t\t  <div class=\"w3-container\">
\t\t\t\t\t\t\t\t\t<h5>Recent Comments</h5>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"w3-row\">
\t\t\t\t\t\t\t\t\t  <div class=\"w3-col s2 text-center\">
\t\t\t\t\t\t\t\t\t\t<img class=\"w3-circle w3-image\" src=\"img_avatar1.png\" style=\"width:96px;height:96px\">
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t  <div class=\"w3-col s10 w3-container\">
\t\t\t\t\t\t\t\t\t\t<h4>Bo <span class=\"w3-opacity w3-medium\">Sep 28, 2014, 10:15 PM</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Sed do eiusmod tclsor incididunt ut labore et dolore magna aliqua.</p><br>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t</div>
\t\t\t\t\t  <!-- End page content -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>\t";
        
        $__internal_7c9bba791f4d12d23d555236a6de22e2cc4676704de362b5a193d4e6eec1c248->leave($__internal_7c9bba791f4d12d23d555236a6de22e2cc4676704de362b5a193d4e6eec1c248_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/classe/classelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 128,  222 => 126,  215 => 121,  207 => 118,  195 => 112,  191 => 111,  187 => 110,  182 => 108,  176 => 105,  173 => 104,  169 => 103,  164 => 101,  160 => 99,  156 => 98,  150 => 94,  148 => 93,  136 => 83,  132 => 81,  125 => 76,  113 => 70,  109 => 69,  105 => 68,  100 => 66,  94 => 63,  91 => 62,  87 => 61,  82 => 58,  80 => 57,  22 => 1,);
    }
}
/* <div class="section w3-clear " style="margin-top:-25%;clear:both;">*/
/* 	<div class="row">*/
/* 		<div id="classelayout" class="col-lg-12 container-fluid tabs w3-animate-zoom w3-white" style="height:90%;width:100%;z-index:99;">*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-lg-12">*/
/* 				<header class="w3-container w3-blue w3-padding">*/
/* 						<a href="#" onclick="closeMenu(event, 'bodycontent')"  class="w3-btn btn w3-white tablink w3-left"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 					<!--	<a href="#" onclick="w3_open()" class="w3-btn btn w3-white tablink" ><i class="fa fa-bars"></i>  Menu </a> -->*/
/* 				</header>*/
/* 				</div>*/
/* 			</div>*/
/* 		*/
/* 		<div class="row">*/
/* 		*/
/* 				<div class="col-lg-3">*/
/* 					<!-- Sidenav/menu -->*/
/* 					<nav class="w3-card-2 w3-animate-left w3-white">*/
/* 					  <div class="w3-container w3-row">*/
/* 						<div class="w3-col s4">*/
/* 							<h3 class="text-center"><b> <i class="glyphicon glyphicon-list-alt w3-xlarge"></i> Classes </b></h3><br>*/
/* 						</div>*/
/* 					  </div>*/
/* 					  */
/* 					<ul class="nav nav-pills nav-stacked">*/
/* 						<li><a href="#" class="tablinkw3-padding-hor-16 w3-hide-large w3-dark-grey w3-hover-black tablink" onclick="w3_close()" title="close menu"><i class="fa fa-remove"></i>  Close Menu</a></li>*/
/* 						<li><a href="#" class="tablink" onclick="openSubTab(event, 'listeclasse','classelayout')"><i class="fa fa-users"></i> Liste des classes </a></li>*/
/* 						<li><a href="#" class="tablink" onclick="openSubTab(event, 'listeclassedep','classelayout')"><i class="fa fa-users"></i> Liste des classes  par departements </a></li>*/
/* 						<li><a href="#" class="tablink" onclick="openSubTab(event, 'designhelp','classelayout')"><i class="fa fa-users"></i> Help Design </a></li>*/
/* 						<li><a href="#" class="w3-padding w3-blue tablink" data-toggle="modal" data-target="#addclasse" ><i class="glyphicon glyphicon-plus"></i> Ajouter une nouvelle classe </a></li>*/
/* 					</ul>*/
/* 					 */
/* 					</nav>*/
/* 				</div>*/
/* */
/* 				<div class="col-lg-9">*/
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
/* 							<div id="classeinfo" class="w3-container w3-section userinfo w3-animate-left">*/
/* 							*/
/* 								*/
/* 							  <h1> Info classes </h1>*/
/* 							  */
/* 			*/
/* 							</div>*/
/* 							*/
/* 							<div id="listeclasse" class="tabs w3-container w3-section w3-animate-left">*/
/* 							*/
/* 								{% if allclasse is not null %}*/
/* 						*/
/* 								<div class="section">*/
/* 									<div class="container">*/
/* 										{% for cls in allclasse  %}*/
/* 							*/
/* 											<div class="fsscls{{ cls.id }} col-md-3" >*/
/* 											  */
/* 											  <div class="col-md-8">*/
/* 												<h3>{{ cls.classe }}</h3>*/
/* 											*/
/* 													<a class="btn btn-primary" data-toggle="modal" data-target="#cls{{ cls.id }}" > <i class="fa fa-eye"></i> Consulter </a>*/
/* 													<a class="btn btn-primary w3-green tablink" onclick="openSubMenu(event, 'updatecls{{ cls.id }}','modifclasse','classelayout')"><i class="fa fa-pencil"></i>Modifier</a>*/
/* 													<a class="btn btn-primary w3-red" data-toggle="modal" data-target="#delcls{{ cls.id }}" ><i class="fa fa-trash"></i>Supprimer</a>*/
/* 												*/
/* 											  </div>*/
/* 											</div>*/
/* 											*/
/* 										{%endfor%}*/
/* */
/* 									</div>*/
/* 								</div>*/
/* 									*/
/* 								{% else %}*/
/* 								  <h1> Pas de classe </h1>*/
/* 								{% endif %}*/
/* 						*/
/* 						*/
/* 							</div>*/
/* 							*/
/* 							*/
/* 							   */
/* 							*/
/* 							*/
/* 							<div id="listeclassedep" class="tabs w3-container w3-section w3-animate-left">*/
/* 							*/
/* 							{% if alldepartement is not null %}*/
/* 						*/
/* 								<div class="section">*/
/* 									<div class="container">*/
/* 										*/
/* 										{% for dep in alldepartement  %}*/
/* 							*/
/* 										<div class="row">*/
/* 											<h3>Departement de {{ dep.departement }}</h3>*/
/* 											*/
/* 											{% for cls in dep.classes  %}*/
/* 							*/
/* 											<div class="fsscls{{ cls.id }} col-md-3">*/
/* 											  */
/* 											  <div class="col-md-8">*/
/* 												<h3>{{ cls.classe }}</h3>*/
/* 											*/
/* 													<a class="btn btn-primary" data-toggle="modal" data-target="#cls{{ cls.id }}" > <i class="fa fa-eye"></i> Consulter </a>*/
/* 													<a class="btn btn-primary w3-green tablink" onclick="openSubMenu(event, 'updatecls{{ cls.id }}','modifclasse','classelayout')"><i class="fa fa-pencil"></i>Modifier</a>*/
/* 													<a class="btn btn-primary w3-red" data-toggle="modal" data-target="#delcls{{ cls.id }}" ><i class="fa fa-trash"></i>Supprimer</a>*/
/* 												*/
/* 											  </div>*/
/* 											</div>*/
/* 											*/
/* 											{%endfor%}*/
/* 										*/
/* 										</div>*/
/* 										{%endfor%}*/
/* */
/* 									</div>*/
/* 								</div>*/
/* 									*/
/* 								{% else %}*/
/* 								  <h1> Pas de classe </h1>*/
/* 								{% endif %}*/
/* 							  */
/* 							   */
/* 							</div>*/
/* 							*/
/* 							*/
/* 							*/
/* 							<div id="designhelp" class="tabs w3-container w3-section w3-animate-left">*/
/* 							*/
/* 								<header class="w3-container w3-blue">*/
/* 										<a href="#" onclick="closeMenu(event, 'mainmenu')"  class="w3-btn btn btn-info tablink"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 								</header>*/
/* 								*/
/* 								  <div class="w3-container">*/
/* 									<h5>Recent Users</h5>*/
/* 									<ul class="w3-ul w3-card-4 w3-white">*/
/* 									 */
/* 									  <li class="w3-padding-hor-16">*/
/* 										<span onclick="this.parentElement.style.display='none'" class="w3-closebtn w3-padding w3-margin-right w3-medium">x</span>*/
/* 										<img src="img_avatar6.png" class="w3-left w3-circle w3-margin-right" style="width:35px">*/
/* 										<span class="w3-xlarge">Jane</span><br>*/
/* 									  </li>*/
/* 									</ul>*/
/* 								  </div>*/
/* 							  <hr>*/
/* */
/* 								  <div class="w3-container">*/
/* 									<h5>Recent Comments</h5>*/
/* 									*/
/* 									<div class="w3-row">*/
/* 									  <div class="w3-col s2 text-center">*/
/* 										<img class="w3-circle w3-image" src="img_avatar1.png" style="width:96px;height:96px">*/
/* 									  </div>*/
/* 									  <div class="w3-col s10 w3-container">*/
/* 										<h4>Bo <span class="w3-opacity w3-medium">Sep 28, 2014, 10:15 PM</span></h4>*/
/* 										<p>Sed do eiusmod tclsor incididunt ut labore et dolore magna aliqua.</p><br>*/
/* 									  </div>*/
/* 									</div>*/
/* 								  </div>*/
/* 							  */
/* 							  */
/* 							*/
/* 										*/
/* 							   */
/* 							</div>  */
/* 						</div>*/
/* 					  <!-- End page content -->*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>	*/
