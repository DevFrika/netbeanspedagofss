<?php

/* PedagogiePedagogieBundle::admin/lieux/lieuxlayout.html.twig */
class __TwigTemplate_b354e87f1142ea9d86f9a591c18b218d62195b9ec6a861da03b239c0f2ddfad9 extends Twig_Template
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
        $__internal_3c13dd6ffdd446ee15f8d45b01589c7b4f615e3f55be22bc99e2aad56dfd44a7 = $this->env->getExtension("native_profiler");
        $__internal_3c13dd6ffdd446ee15f8d45b01589c7b4f615e3f55be22bc99e2aad56dfd44a7->enter($__internal_3c13dd6ffdd446ee15f8d45b01589c7b4f615e3f55be22bc99e2aad56dfd44a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle::admin/lieux/lieuxlayout.html.twig"));

        // line 1
        echo "<div class=\"section w3-clear \" style=\"margin-top:-25%;clear:both;\">
\t<div class=\"row\">
\t\t<div id=\"lieuxlayout\" class=\"col-lg-12 container-fluid tabs w3-animate-zoom w3-white\" style=\"height:90%;width:100%;z-index:99;\">

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<header class=\"w3-container w3-blue w3-padding\">
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'bodycontent')\"  class=\"w3-btn btn w3-white tablink w3-left\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t\t\t</header>
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t\t<div class=\"row\">
\t\t\t
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<!-- Sidenav/menu -->
\t\t\t\t\t<nav class=\"w3-card-2 w3-animate-left w3-white\" style=\"width:300px;position:static;\">
\t\t\t\t\t\t<div class=\"w3-container w3-row\">
\t\t\t\t\t\t\t<div class=\"w3-col s4\">
\t\t\t\t\t\t\t\t<h3 class=\"text-center\"><b> <i class=\"material-icons w3-xlarge\">class</i> lieuxs </b></h3><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  
\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"tablinkw3-padding-hor-16 w3-hide-large w3-dark-grey w3-hover-black tablink\" onclick=\"w3_close()\" title=\"close menu\"><i class=\"fa fa-remove\"></i>  Close Menu</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'listelieux','lieuxlayout')\"><i class=\"fa fa-users\"></i> Liste des lieux </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'designhelp','lieuxlayout')\"><i class=\"fa fa-users\"></i> Help Design </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"w3-padding w3-blue tablink\" data-toggle=\"modal\" data-target=\"#addlieux\" ><i class=\"glyphicon glyphicon-plus\"></i> Ajouter un nouveau lieux </a></li>
\t\t\t\t\t\t</ul>\t
\t\t\t\t\t</nav>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t<!-- Overlay effect when opening sidenav on small screens -->
\t\t\t\t\t<div class=\"w3-overlay w3-hide-large w3-animate-opacity\" onclick=\"w3_close()\" style=\"cursor:pointer\" title=\"close side menu\"></div>


\t\t\t\t\t<!-- !PAGE CONTENT! -->
\t\t\t\t\t<div class=\"w3-main\" style=\"margin-top:13px;\">


\t\t\t\t\t\t<div class=\"w3-container w3-left\" >
\t\t\t\t\t\t\t
\t\t
\t\t\t\t\t\t\t<div id=\"lieuxinfo\" class=\"w3-container w3-section userinfo w3-animate-left\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h1> Info lieux </h1>
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"listelieux\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 53
        if ( !(null === (isset($context["alllieux"]) ? $context["alllieux"] : $this->getContext($context, "alllieux")))) {
            // line 54
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alllieux"]) ? $context["alllieux"] : $this->getContext($context, "alllieux")));
            foreach ($context['_seq'] as $context["_key"] => $context["lieux"]) {
                // line 58
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fsslieux";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["lieux"], "id", array()), "html", null, true);
                echo " col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t  <div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["lieux"], "lieux", array()), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#lieux";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["lieux"], "id", array()), "html", null, true);
                echo "\" > <i class=\"fa fa-eye\"></i> Consulter </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-green tablink\" onclick=\"openSubMenu(event, 'updatelieux";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["lieux"], "id", array()), "html", null, true);
                echo "','modiflieux','lieuxlayout')\"><i class=\"fa fa-pencil\"></i>Modifier</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" data-toggle=\"modal\" data-target=\"#dellieux";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["lieux"], "id", array()), "html", null, true);
                echo "\" ><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieux'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        } else {
            // line 82
            echo "\t\t\t\t\t\t\t\t  <h1> Pas de lieux </h1>
\t\t\t\t\t\t\t\t";
        }
        // line 84
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"designhelp\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<header class=\"w3-container w3-blue\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'mainmenu')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t  <div class=\"w3-container\">
\t\t\t\t\t\t\t\t\t\t<h5>Recent Users</h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"w3-ul w3-card-4 w3-white\">
\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t  <li class=\"w3-padding-hor-16\">
\t\t\t\t\t\t\t\t\t\t\t<span onclick=\"this.parentElement.style.display='none'\" class=\"w3-closebtn w3-padding w3-margin-right w3-medium\">x</span>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"img_avatar6.png\" class=\"w3-left w3-circle w3-margin-right\" style=\"width:35px\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"w3-xlarge\">Jane</span><br>
\t\t\t\t\t\t\t\t\t\t  </li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  <hr>

\t\t\t\t\t\t\t\t\t  <div class=\"w3-container\">
\t\t\t\t\t\t\t\t\t\t<h5>Recent Comments</h5>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"w3-row\">
\t\t\t\t\t\t\t\t\t\t  <div class=\"w3-col s2 text-center\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"w3-circle w3-image\" src=\"img_avatar1.png\" style=\"width:96px;height:96px\">
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t  <div class=\"w3-col s10 w3-container\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Bo <span class=\"w3-opacity w3-medium\">Sep 28, 2014, 10:15 PM</span></h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End page content -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>


\t";
        
        $__internal_3c13dd6ffdd446ee15f8d45b01589c7b4f615e3f55be22bc99e2aad56dfd44a7->leave($__internal_3c13dd6ffdd446ee15f8d45b01589c7b4f615e3f55be22bc99e2aad56dfd44a7_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle::admin/lieux/lieuxlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 84,  133 => 82,  126 => 77,  110 => 67,  106 => 66,  102 => 65,  97 => 63,  91 => 60,  87 => 58,  83 => 57,  78 => 54,  76 => 53,  22 => 1,);
    }
}
/* <div class="section w3-clear " style="margin-top:-25%;clear:both;">*/
/* 	<div class="row">*/
/* 		<div id="lieuxlayout" class="col-lg-12 container-fluid tabs w3-animate-zoom w3-white" style="height:90%;width:100%;z-index:99;">*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-md-12">*/
/* 					<header class="w3-container w3-blue w3-padding">*/
/* 							<a href="#" onclick="closeMenu(event, 'bodycontent')"  class="w3-btn btn w3-white tablink w3-left"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 					</header>*/
/* 				</div>*/
/* 			</div>*/
/* 		*/
/* 			<div class="row">*/
/* 			*/
/* 				<div class="col-lg-3">*/
/* 					<!-- Sidenav/menu -->*/
/* 					<nav class="w3-card-2 w3-animate-left w3-white" style="width:300px;position:static;">*/
/* 						<div class="w3-container w3-row">*/
/* 							<div class="w3-col s4">*/
/* 								<h3 class="text-center"><b> <i class="material-icons w3-xlarge">class</i> lieuxs </b></h3><br>*/
/* 							</div>*/
/* 						</div>*/
/* 					  */
/* 						<ul class="nav nav-pills nav-stacked">*/
/* 							<li><a href="#" class="tablinkw3-padding-hor-16 w3-hide-large w3-dark-grey w3-hover-black tablink" onclick="w3_close()" title="close menu"><i class="fa fa-remove"></i>  Close Menu</a></li>*/
/* 							<li><a href="#" class="tablink" onclick="openSubTab(event, 'listelieux','lieuxlayout')"><i class="fa fa-users"></i> Liste des lieux </a></li>*/
/* 							<li><a href="#" class="tablink" onclick="openSubTab(event, 'designhelp','lieuxlayout')"><i class="fa fa-users"></i> Help Design </a></li>*/
/* 							<li><a href="#" class="w3-padding w3-blue tablink" data-toggle="modal" data-target="#addlieux" ><i class="glyphicon glyphicon-plus"></i> Ajouter un nouveau lieux </a></li>*/
/* 						</ul>	*/
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
/* 		*/
/* 							<div id="lieuxinfo" class="w3-container w3-section userinfo w3-animate-left">*/
/* 									*/
/* 								<h1> Info lieux </h1>*/
/* 							 */
/* 							</div>*/
/* 								*/
/* 							<div id="listelieux" class="tabs w3-container w3-section w3-animate-left">*/
/* 								*/
/* 								{% if alllieux is not null %}*/
/* 						*/
/* 								<div class="section">*/
/* 									<div class="container">*/
/* 										{% for lieux in alllieux  %}*/
/* 							*/
/* 								*/
/* 											<div class="fsslieux{{ lieux.id }} col-md-6">*/
/* 											 */
/* 											  <div class="col-md-6">*/
/* 												<h3>{{ lieux.lieux }}</h3>*/
/* 											*/
/* 													<a class="btn btn-primary" data-toggle="modal" data-target="#lieux{{ lieux.id }}" > <i class="fa fa-eye"></i> Consulter </a>*/
/* 													<a class="btn btn-primary w3-green tablink" onclick="openSubMenu(event, 'updatelieux{{ lieux.id }}','modiflieux','lieuxlayout')"><i class="fa fa-pencil"></i>Modifier</a>*/
/* 													<a class="btn btn-primary w3-red" data-toggle="modal" data-target="#dellieux{{ lieux.id }}" ><i class="fa fa-trash"></i>Supprimer</a>*/
/* 												*/
/* 											  </div>*/
/* 											</div>*/
/* 											*/
/* 											*/
/* 										*/
/* 									*/
/* 								  */
/* 										{%endfor%}*/
/* */
/* 									</div>*/
/* 								</div>*/
/* 									*/
/* 								{% else %}*/
/* 								  <h1> Pas de lieux </h1>*/
/* 								{% endif %}*/
/* 							*/
/* 							*/
/* 							</div>*/
/* 								*/
/* 								*/
/* 							<div id="designhelp" class="tabs w3-container w3-section w3-animate-left">*/
/* 								*/
/* 									<header class="w3-container w3-blue">*/
/* 											<a href="#" onclick="closeMenu(event, 'mainmenu')"  class="w3-btn btn btn-info tablink"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 									</header>*/
/* 									*/
/* 									  <div class="w3-container">*/
/* 										<h5>Recent Users</h5>*/
/* 										<ul class="w3-ul w3-card-4 w3-white">*/
/* 										 */
/* 										  <li class="w3-padding-hor-16">*/
/* 											<span onclick="this.parentElement.style.display='none'" class="w3-closebtn w3-padding w3-margin-right w3-medium">x</span>*/
/* 											<img src="img_avatar6.png" class="w3-left w3-circle w3-margin-right" style="width:35px">*/
/* 											<span class="w3-xlarge">Jane</span><br>*/
/* 										  </li>*/
/* 										</ul>*/
/* 									  </div>*/
/* 								  <hr>*/
/* */
/* 									  <div class="w3-container">*/
/* 										<h5>Recent Comments</h5>*/
/* 										*/
/* 										<div class="w3-row">*/
/* 										  <div class="w3-col s2 text-center">*/
/* 											<img class="w3-circle w3-image" src="img_avatar1.png" style="width:96px;height:96px">*/
/* 										  </div>*/
/* 										  <div class="w3-col s10 w3-container">*/
/* 											<h4>Bo <span class="w3-opacity w3-medium">Sep 28, 2014, 10:15 PM</span></h4>*/
/* 											<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>*/
/* 										  </div>*/
/* 										</div>*/
/* 									  </div>*/
/* 								  */
/* 								  */
/* 								*/
/* 								  */
/* 								   */
/* 							</div>*/
/* 								*/
/* 								  */
/* 							</div>*/
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
