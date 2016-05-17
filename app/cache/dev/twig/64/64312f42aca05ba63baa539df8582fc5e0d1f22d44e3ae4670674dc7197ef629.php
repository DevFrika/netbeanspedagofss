<?php

/* PedagogiePedagogieBundle:template:modulelayout.html.twig */
class __TwigTemplate_49ae80815c446289b080abb0455a0393c04d73c9cf577b59fd0a46ca202a313c extends Twig_Template
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
        $__internal_4d721c8d617d4b073b3916893e939959558bc2bab44713132213e21461a248d2 = $this->env->getExtension("native_profiler");
        $__internal_4d721c8d617d4b073b3916893e939959558bc2bab44713132213e21461a248d2->enter($__internal_4d721c8d617d4b073b3916893e939959558bc2bab44713132213e21461a248d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:template:modulelayout.html.twig"));

        // line 1
        echo "<div id=\"modulelayout\" class=\"w3-container tabs w3-animate-zoom\" style=\"height:80%\">

";
        // line 3
        $this->loadTemplate("PedagogiePedagogieBundle::user/module/addmodulelayout.html.twig", "PedagogiePedagogieBundle:template:modulelayout.html.twig", 3)->display($context);
        // line 4
        echo "
";
        // line 5
        if ( !(null === (isset($context["allmodule"]) ? $context["allmodule"] : $this->getContext($context, "allmodule")))) {
            // line 6
            echo "
\t";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allmodule"]) ? $context["allmodule"] : $this->getContext($context, "allmodule")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["mod"]) {
                // line 8
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::user/module/modalmodulelayout.html.twig", "PedagogiePedagogieBundle:template:modulelayout.html.twig", 8)->display($context);
                // line 9
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::user/module/updatemodulelayout.html.twig", "PedagogiePedagogieBundle:template:modulelayout.html.twig", 9)->display($context);
                // line 10
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::user/module/deletemodulelayout.html.twig", "PedagogiePedagogieBundle:template:modulelayout.html.twig", 10)->display($context);
                // line 11
                echo "\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "\t
";
        }
        // line 14
        echo "
<header class=\"w3-container w3-blue w3-padding\">
\t\t<a href=\"#\" onclick=\"closeMenu(event, 'bodycontent')\"  class=\"w3-btn btn w3-white tablink w3-left\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t<!--\t<a href=\"#\" onclick=\"w3_open()\" class=\"w3-btn btn w3-white tablink\" ><i class=\"fa fa-bars\"></i>  Menu </a> -->
</header>\t

<!-- Sidenav/menu -->

<nav class=\"w3-sidenav w3-card-2 w3-theme-l5 w3-animate-left\" style=\"z-index:3;width:300px;\">
  <div class=\"w3-container w3-row\">
    <div class=\"w3-col s8\">
\t\t<h3 class=\"text-center\"><b><i class=\"material-icons\">class</i> modules </b></h3><br>
    </div>
  </div>
  
\t<a href=\"#\" class=\"tablinkw3-padding-hor-16 w3-hide-large w3-dark-grey w3-hover-black tablink\" onclick=\"w3_close()\" title=\"close menu\"><i class=\"fa fa-remove\"></i>  Close Menu</a>
\t<a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'listemodule','modulelayout')\"><i class=\"fa fa-users\"></i> Liste des modules </a>
\t<a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'listemoduledep','modulelayout')\"><i class=\"fa fa-users\"></i> Liste des modules  par departements </a>
\t<a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'designhelp','modulelayout')\"><i class=\"fa fa-users\"></i> Help Design </a>
\t
\t<a href=\"#\" class=\"w3-padding w3-blue tablink\" data-toggle=\"modal\" data-target=\"#addmodule\" ><i class=\"glyphicon glyphicon-plus\"></i> Ajouter une nouvelle module </a>
\t
 
</nav>


<!-- Overlay effect when opening sidenav on small screens -->
<div class=\"w3-overlay w3-hide-large w3-animate-opacity\" onclick=\"w3_close()\" style=\"cursor:pointer\" title=\"close side menu\"></div>


<!-- !PAGE CONTENT! -->
<div class=\"w3-main\" style=\"margin-left:200px;margin-top:23px;\">

\t<!-- Header -->



   <div class=\"w3-container pull-left\" style=\"margin-left:110px\">
\t\t
\t\t<div id=\"moduleinfo\" class=\"w3-container w3-section userinfo w3-animate-left\">
\t\t
\t\t\t
          <h1> Info Modules </h1>
          
          
           
\t\t</div>
\t\t
\t\t<div id=\"listemodule\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t
\t\t\t";
        // line 64
        if ( !(null === (isset($context["allmodule"]) ? $context["allmodule"] : $this->getContext($context, "allmodule")))) {
            // line 65
            echo "    
\t\t\t<div class=\"section\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allmodule"]) ? $context["allmodule"] : $this->getContext($context, "allmodule")));
            foreach ($context['_seq'] as $context["_key"] => $context["mod"]) {
                // line 69
                echo "        
\t\t\t
\t\t\t\t\t\t<div id=\"fss";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["mod"], "module", array()), "html", null, true);
                echo "\" class=\"col-md-6\">
\t\t\t\t\t\t  <div class=\"col-md-4\">
\t\t\t\t\t\t\t<img src=\"http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png\" class=\"img-responsive\">
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"col-md-15\">
\t\t\t\t\t\t\t<h3>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["mod"], "module", array()), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["mod"], "module", array()), "html", null, true);
                echo "\" > <i class=\"fa fa-eye\"></i> Consulter </a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-green tablink\" onclick=\"openSubMenu(event, 'update";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")), "module", array()), "html", null, true);
                echo "','listemodule','modulelayout')\"><i class=\"fa fa-pencil\"></i>Modifier</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" data-toggle=\"modal\" data-target=\"#del";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["mod"], "module", array()), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t
\t\t\t";
        } else {
            // line 95
            echo "\t\t\t  <h1> Pas de module </h1>
\t\t\t";
        }
        // line 97
        echo "\t
\t
\t</div>
  
           
\t\t
\t\t
\t\t<div id=\"listemoduledep\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t
\t\t";
        // line 106
        if ( !(null === (isset($context["allmodule"]) ? $context["allmodule"] : $this->getContext($context, "allmodule")))) {
            // line 107
            echo "    
\t\t\t<div class=\"section\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allmodule"]) ? $context["allmodule"] : $this->getContext($context, "allmodule")));
            foreach ($context['_seq'] as $context["_key"] => $context["mod"]) {
                // line 111
                echo "        
\t\t\t
\t\t\t\t\t\t<div id=\"fss";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($context["mod"], "module", array()), "html", null, true);
                echo "\" class=\"col-md-6\">
\t\t\t\t\t\t  <div class=\"col-md-4\">
\t\t\t\t\t\t\t<img src=\"http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png\" class=\"img-responsive\">
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"col-md-15\">
\t\t\t\t\t\t\t<h3>";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["mod"], "module", array()), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["mod"], "module", array()), "html", null, true);
                echo "\" > <i class=\"fa fa-eye\"></i> Consulter </a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-green tablink\" onclick=\"openSubMenu(event, 'update";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute($context["mod"], "module", array()), "html", null, true);
                echo "','listemodule','modulelayout')\"><i class=\"fa fa-pencil\"></i>Modifier</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" data-toggle=\"modal\" data-target=\"#del";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["mod"], "module", array()), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t
\t\t\t";
        } else {
            // line 137
            echo "\t\t\t  <h1> Pas de module </h1>
\t\t\t";
        }
        // line 139
        echo "          
           
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
  <!-- End page content -->
</div>



</div>
\t

\t";
        
        $__internal_4d721c8d617d4b073b3916893e939959558bc2bab44713132213e21461a248d2->leave($__internal_4d721c8d617d4b073b3916893e939959558bc2bab44713132213e21461a248d2_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:template:modulelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 139,  265 => 137,  258 => 132,  242 => 122,  238 => 121,  234 => 120,  229 => 118,  221 => 113,  217 => 111,  213 => 110,  208 => 107,  206 => 106,  195 => 97,  191 => 95,  184 => 90,  168 => 80,  164 => 79,  160 => 78,  155 => 76,  147 => 71,  143 => 69,  139 => 68,  134 => 65,  132 => 64,  80 => 14,  76 => 12,  62 => 11,  59 => 10,  56 => 9,  53 => 8,  36 => 7,  33 => 6,  31 => 5,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div id="modulelayout" class="w3-container tabs w3-animate-zoom" style="height:80%">*/
/* */
/* {% include "PedagogiePedagogieBundle::user/module/addmodulelayout.html.twig" %}*/
/* */
/* {% if allmodule is not null %}*/
/* */
/* 	{% for mod in allmodule  %}*/
/* 				{% include "PedagogiePedagogieBundle::user/module/modalmodulelayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::user/module/updatemodulelayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::user/module/deletemodulelayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* <header class="w3-container w3-blue w3-padding">*/
/* 		<a href="#" onclick="closeMenu(event, 'bodycontent')"  class="w3-btn btn w3-white tablink w3-left"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 	<!--	<a href="#" onclick="w3_open()" class="w3-btn btn w3-white tablink" ><i class="fa fa-bars"></i>  Menu </a> -->*/
/* </header>	*/
/* */
/* <!-- Sidenav/menu -->*/
/* */
/* <nav class="w3-sidenav w3-card-2 w3-theme-l5 w3-animate-left" style="z-index:3;width:300px;">*/
/*   <div class="w3-container w3-row">*/
/*     <div class="w3-col s8">*/
/* 		<h3 class="text-center"><b><i class="material-icons">class</i> modules </b></h3><br>*/
/*     </div>*/
/*   </div>*/
/*   */
/* 	<a href="#" class="tablinkw3-padding-hor-16 w3-hide-large w3-dark-grey w3-hover-black tablink" onclick="w3_close()" title="close menu"><i class="fa fa-remove"></i>  Close Menu</a>*/
/* 	<a href="#" class="tablink" onclick="openSubTab(event, 'listemodule','modulelayout')"><i class="fa fa-users"></i> Liste des modules </a>*/
/* 	<a href="#" class="tablink" onclick="openSubTab(event, 'listemoduledep','modulelayout')"><i class="fa fa-users"></i> Liste des modules  par departements </a>*/
/* 	<a href="#" class="tablink" onclick="openSubTab(event, 'designhelp','modulelayout')"><i class="fa fa-users"></i> Help Design </a>*/
/* 	*/
/* 	<a href="#" class="w3-padding w3-blue tablink" data-toggle="modal" data-target="#addmodule" ><i class="glyphicon glyphicon-plus"></i> Ajouter une nouvelle module </a>*/
/* 	*/
/*  */
/* </nav>*/
/* */
/* */
/* <!-- Overlay effect when opening sidenav on small screens -->*/
/* <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu"></div>*/
/* */
/* */
/* <!-- !PAGE CONTENT! -->*/
/* <div class="w3-main" style="margin-left:200px;margin-top:23px;">*/
/* */
/* 	<!-- Header -->*/
/* */
/* */
/* */
/*    <div class="w3-container pull-left" style="margin-left:110px">*/
/* 		*/
/* 		<div id="moduleinfo" class="w3-container w3-section userinfo w3-animate-left">*/
/* 		*/
/* 			*/
/*           <h1> Info Modules </h1>*/
/*           */
/*           */
/*            */
/* 		</div>*/
/* 		*/
/* 		<div id="listemodule" class="tabs w3-container w3-section w3-animate-left">*/
/* 		*/
/* 			{% if allmodule is not null %}*/
/*     */
/* 			<div class="section">*/
/* 				<div class="container">*/
/* 					{% for mod in allmodule  %}*/
/*         */
/* 			*/
/* 						<div id="fss{{ mod.module }}" class="col-md-6">*/
/* 						  <div class="col-md-4">*/
/* 							<img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png" class="img-responsive">*/
/* 						  </div>*/
/* 						  <div class="col-md-15">*/
/* 							<h3>{{ mod.module }}</h3>*/
/* 						*/
/* 								<a class="btn btn-primary" data-toggle="modal" data-target="#{{ mod.module }}" > <i class="fa fa-eye"></i> Consulter </a>*/
/* 								<a class="btn btn-primary w3-green tablink" onclick="openSubMenu(event, 'update{{ mode.module }}','listemodule','modulelayout')"><i class="fa fa-pencil"></i>Modifier</a>*/
/* 								<a class="btn btn-primary w3-red" data-toggle="modal" data-target="#del{{ mod.module }}" ><i class="fa fa-trash"></i>Supprimer</a>*/
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
/* 			  <h1> Pas de module </h1>*/
/* 			{% endif %}*/
/* 	*/
/* 	*/
/* 	</div>*/
/*   */
/*            */
/* 		*/
/* 		*/
/* 		<div id="listemoduledep" class="tabs w3-container w3-section w3-animate-left">*/
/* 		*/
/* 		{% if allmodule is not null %}*/
/*     */
/* 			<div class="section">*/
/* 				<div class="container">*/
/* 					{% for mod in allmodule  %}*/
/*         */
/* 			*/
/* 						<div id="fss{{ mod.module }}" class="col-md-6">*/
/* 						  <div class="col-md-4">*/
/* 							<img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png" class="img-responsive">*/
/* 						  </div>*/
/* 						  <div class="col-md-15">*/
/* 							<h3>{{ mod.module }}</h3>*/
/* 						*/
/* 								<a class="btn btn-primary" data-toggle="modal" data-target="#{{ mod.module }}" > <i class="fa fa-eye"></i> Consulter </a>*/
/* 								<a class="btn btn-primary w3-green tablink" onclick="openSubMenu(event, 'update{{ mod.module }}','listemodule','modulelayout')"><i class="fa fa-pencil"></i>Modifier</a>*/
/* 								<a class="btn btn-primary w3-red" data-toggle="modal" data-target="#del{{ mod.module }}" ><i class="fa fa-trash"></i>Supprimer</a>*/
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
/* 			  <h1> Pas de module </h1>*/
/* 			{% endif %}*/
/*           */
/*            */
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
/*   <!-- End page content -->*/
/* </div>*/
/* */
/* */
/* */
/* </div>*/
/* 	*/
/* */
/* 	*/
