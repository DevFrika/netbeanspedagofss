<?php

/* PedagogiePedagogieBundle::admin/emploi/emploilayout.html.twig */
class __TwigTemplate_e6c664200b34c123e25db3fef38062d1da430d7e02a7fbfa402c674d7c824523 extends Twig_Template
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
        $__internal_354db962a4720cac03b050d4719157e10e5602f12ac28e30bda844e415b453bc = $this->env->getExtension("native_profiler");
        $__internal_354db962a4720cac03b050d4719157e10e5602f12ac28e30bda844e415b453bc->enter($__internal_354db962a4720cac03b050d4719157e10e5602f12ac28e30bda844e415b453bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle::admin/emploi/emploilayout.html.twig"));

        // line 1
        echo "<div class=\"section w3-clear \" style=\"margin-top:-25%;clear:both;\">
\t<div class=\"row\">
\t\t<div id=\"emploilayout\" class=\"col-lg-12 container-fluid tabs w3-animate-zoom w3-white\" style=\"height:90%;width:100%;z-index:99;\">

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<header class=\"w3-container w3-blue w3-padding\">
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'bodycontent')\" class=\"w3-btn btn w3-white tablink w3-left\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t\t\t\t
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
\t\t\t\t\t\t\t\t<h3 class=\"text-center\"><b> <i class=\"glyphicon glyphicon-calendar w3-xlarge\"></i> Emplois </b></h3><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  
\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"tablinkw3-padding-hor-16 w3-hide-large w3-dark-grey w3-hover-black tablink\" onclick=\"w3_close()\" title=\"close menu\"><i class=\"fa fa-remove\"></i>  Close Menu</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'listeemploifil','emploilayout')\"><i class=\"fa fa-users\"></i> Liste des Emplois par Filiere </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'listeemploigrp','emploilayout')\"><i class=\"fa fa-users\"></i> Liste des Emplois par Groupe </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'listeemploisal','emploilayout')\"><i class=\"fa fa-users\"></i> Liste des Emplois par Salle </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'listeemploiens','emploilayout')\"><i class=\"fa fa-users\"></i> Liste des Emplois par Enseignant </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'listeemploidep','emploilayout')\"><i class=\"fa fa-users\"></i> Liste des Emplois </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'designhelp','emploilayout')\"><i class=\"fa fa-users\"></i> Help Design </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"w3-padding w3-blue tablink\" onclick=\"OpenEmpModal(event,'";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["session_id"]) ? $context["session_id"] : $this->getContext($context, "session_id")), "html", null, true);
        echo "')\" ><i class=\"glyphicon glyphicon-plus\"></i> Ajouter un nouveau Emploi </a></li>
\t\t\t\t\t\t\t<!-- <li><a href=\"#\" class=\"w3-padding w3-blue tablink\" data-toggle=\"modal\" data-target=\"#addemploi\" ><i class=\"glyphicon glyphicon-plus\"></i> Ajouter un nouveau Emploi </a></li> -->
\t\t\t\t\t\t</ul>
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
\t\t\t\t\t\t\t<div id=\"emploiinfo\" class=\"w3-container w3-section userinfo w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t  <h1> Info emplois </h1>
\t\t\t\t\t\t\t  
\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"listeemploifil\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 61
        if ( !(null === (isset($context["allemploi"]) ? $context["allemploi"] : $this->getContext($context, "allemploi")))) {
            // line 62
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allfiliere"]) ? $context["allfiliere"] : $this->getContext($context, "allfiliere")));
            foreach ($context['_seq'] as $context["_key"] => $context["fil"]) {
                // line 66
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 67
                if (( !(null === $this->getAttribute($context["fil"], "emplois", array())) && ($this->getAttribute($this->getAttribute($context["fil"], "emplois", array()), "count", array()) > 0))) {
                    // line 68
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fssempfil";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "id", array()), "html", null, true);
                    echo " col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "filiere", array()), "html", null, true);
                    echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" onclick=\"LoadEmpFil('";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "id", array()), "html", null, true);
                    echo "','graphique','false')\" > <i class=\"fa fa-eye\"></i> Consulter Emploi Graphique </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" onclick=\"LoadEmpFil('";
                    // line 76
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "id", array()), "html", null, true);
                    echo "','liste','false')\" > <i class=\"fa fa-eye\"></i> Consulter Emploi Liste </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 81
                echo "\t\t
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fil'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        } else {
            // line 88
            echo "\t\t\t\t\t\t\t\t  <h1> Pas d'emploi pour les filieres </h1>
\t\t\t\t\t\t\t\t";
        }
        // line 90
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"listeemploigrp\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 96
        if ( !(null === (isset($context["allemploi"]) ? $context["allemploi"] : $this->getContext($context, "allemploi")))) {
            // line 97
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-group\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : $this->getContext($context, "alldepartement")));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 103
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\" role=\"tab\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"w3-btn w3-blue w3-round\" type=\"button\" data-toggle=\"collapse\" data-target=\"#depgrpempcol";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "id", array()), "html", null, true);
                echo "\" aria-expanded=\"false\" aria-controls=\"depgrpempcol";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "departement", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-collapse collapse w3-card-8\" id=\"depgrpempcol";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-group\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 116
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["dep"], "filieres", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["fil"]) {
                    // line 117
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\" role=\"tab\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"w3-btn w3-white\" type=\"button\" data-toggle=\"collapse\" data-target=\"#filgrpempcol";
                    // line 121
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "id", array()), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "id", array()), "html", null, true);
                    echo "\" aria-expanded=\"false\" aria-controls=\"filgrpempcol";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "id", array()), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    // line 122
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "filiere", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-collapse collapse w3-card-8\" id=\"filgrpempcol";
                    // line 126
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "id", array()), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-group\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 130
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["fil"], "classes", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["cls"]) {
                        // line 131
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\" role=\"tab\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"w3-btn \" type=\"button\" data-toggle=\"collapse\" data-target=\"#clsgrpempcol";
                        // line 136
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "id", array()), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "id", array()), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["cls"], "id", array()), "html", null, true);
                        echo "\" aria-expanded=\"false\" aria-controls=\"clsgrpempcol";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "id", array()), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "id", array()), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["cls"], "id", array()), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                        // line 137
                        echo twig_escape_filter($this->env, $this->getAttribute($context["cls"], "classe", array()), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-collapse collapse w3-card-8\" id=\"clsgrpempcol";
                        // line 141
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "id", array()), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "id", array()), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["cls"], "id", array()), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 146
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cls"], "groupes", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["grp"]) {
                            // line 147
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"w3-btn w3-light-blue\" type=\"button\" data-toggle=\"collapse\" data-target=\"#grpempcol";
                            // line 150
                            echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "id", array()), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "id", array()), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["cls"], "id", array()), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["grp"], "id", array()), "html", null, true);
                            echo "\" aria-expanded=\"false\" aria-controls=\"grpempcol";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "id", array()), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "id", array()), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["cls"], "id", array()), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["grp"], "id", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tListe des Emplois du groupe  ";
                            // line 151
                            echo twig_escape_filter($this->env, $this->getAttribute($context["grp"], "groupe", array()), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse w3-card-8\" id=\"grpempcol";
                            // line 154
                            echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "id", array()), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "id", array()), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["cls"], "id", array()), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["grp"], "id", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 156
                            if (( !(null === $this->getAttribute($context["grp"], "emplois", array())) && ($this->getAttribute($this->getAttribute($context["grp"], "emplois", array()), "count", array()) > 0))) {
                                // line 157
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fssempgrp";
                                // line 158
                                echo twig_escape_filter($this->env, $this->getAttribute($context["grp"], "id", array()), "html", null, true);
                                echo " col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                                // line 161
                                echo twig_escape_filter($this->env, $this->getAttribute($context["grp"], "groupe", array()), "html", null, true);
                                echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" onclick=\"LoadEmpGrp('";
                                // line 165
                                echo twig_escape_filter($this->env, $this->getAttribute($context["grp"], "id", array()), "html", null, true);
                                echo "','graphique','false')\" > <i class=\"fa fa-eye\"></i> Consulter Emploi Graphique </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" onclick=\"LoadEmpGrp('";
                                // line 166
                                echo twig_escape_filter($this->env, $this->getAttribute($context["grp"], "id", array()), "html", null, true);
                                echo "','liste','false')\" > <i class=\"fa fa-eye\"></i> Consulter Emploi Liste </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Filiere</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Groupe</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Matiere</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 182
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["grp"], "emplois", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["emp"]) {
                                    // line 183
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"fssemp";
                                    // line 184
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["emp"], "id", array()), "html", null, true);
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                                    // line 186
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "filieres", array()), "filiere", array()), "html", null, true);
                                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                                    // line 187
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "groupes", array()), "groupe", array()), "html", null, true);
                                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                                    // line 188
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "matiere", array()), "matiere", array()), "html", null, true);
                                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#emp";
                                    // line 190
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["emp"], "id", array()), "html", null, true);
                                    echo "\" > <i class=\"fa fa-eye\"></i> Consulter </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-green tablink\" onclick=\"openSubMenu(event, 'updateemp";
                                    // line 191
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["emp"], "id", array()), "html", null, true);
                                    echo "','modifemploi','emploilayout')\"><i class=\"fa fa-pencil\"></i>Modifier</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" data-toggle=\"modal\" data-target=\"#delemp";
                                    // line 192
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["emp"], "id", array()), "html", null, true);
                                    echo "\" ><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emp'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 196
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 203
                            echo "\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grp'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 210
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cls'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 217
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fil'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 222
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        } else {
            // line 235
            echo "\t\t\t\t\t\t\t\t  <h1> Pas d'emploi pour les groupes </h1>
\t\t\t\t\t\t\t\t";
        }
        // line 237
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t <div id=\"listeemploisal\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 244
        if ( !(null === (isset($context["allemploi"]) ? $context["allemploi"] : $this->getContext($context, "allemploi")))) {
            // line 245
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t";
            // line 248
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allsalle"]) ? $context["allsalle"] : $this->getContext($context, "allsalle")));
            foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
                // line 249
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"row\" >
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\" data-toggle=\"collapse\" data-target=\"#salempcol";
                // line 252
                echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "id", array()), "html", null, true);
                echo "\" aria-expanded=\"false\" aria-controls=\"salempcol";
                echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\tListe des Emplois de la salle  ";
                // line 253
                echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "salle", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse w3-card-8\" id=\"salempcol";
                // line 256
                echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 258
                if (( !(null === $this->getAttribute($context["salle"], "emplois", array())) && ($this->getAttribute($this->getAttribute($context["salle"], "emplois", array()), "count", array()) > 0))) {
                    // line 259
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fssempsal";
                    // line 262
                    echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "id", array()), "html", null, true);
                    echo " col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                    // line 265
                    echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "salle", array()), "html", null, true);
                    echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" onclick=\"LoadEmpSal('";
                    // line 269
                    echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "id", array()), "html", null, true);
                    echo "','graphique','false')\" > <i class=\"fa fa-eye\"></i> Consulter Emploi Graphique </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" onclick=\"LoadEmpSal('";
                    // line 270
                    echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "id", array()), "html", null, true);
                    echo "','liste','false')\" > <i class=\"fa fa-eye\"></i> Consulter Emploi Liste </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Filiere</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Groupe</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Matiere</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 286
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["salle"], "emplois", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["emp"]) {
                        // line 287
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"fssemp";
                        // line 288
                        echo twig_escape_filter($this->env, $this->getAttribute($context["emp"], "id", array()), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                        // line 290
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "filieres", array()), "filiere", array()), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                        // line 291
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "groupes", array()), "groupe", array()), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                        // line 292
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "matiere", array()), "matiere", array()), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#emp";
                        // line 294
                        echo twig_escape_filter($this->env, $this->getAttribute($context["emp"], "id", array()), "html", null, true);
                        echo "\" > <i class=\"fa fa-eye\"></i> Consulter </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-green tablink\" onclick=\"openSubMenu(event, 'updateemp";
                        // line 295
                        echo twig_escape_filter($this->env, $this->getAttribute($context["emp"], "id", array()), "html", null, true);
                        echo "','modifemploi','emploilayout')\"><i class=\"fa fa-pencil\"></i>Modifier</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" data-toggle=\"modal\" data-target=\"#delemp";
                        // line 296
                        echo twig_escape_filter($this->env, $this->getAttribute($context["emp"], "id", array()), "html", null, true);
                        echo "\" ><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emp'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 300
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 307
                echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 315
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        } else {
            // line 320
            echo "\t\t\t\t\t\t\t\t  <h1> Pas d'emploi pour les salles </h1>
\t\t\t\t\t\t\t\t";
        }
        // line 322
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"listeemploiens\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 328
        if ( !(null === (isset($context["allemploi"]) ? $context["allemploi"] : $this->getContext($context, "allemploi")))) {
            // line 329
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t";
            // line 333
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allenseignant"]) ? $context["allenseignant"] : $this->getContext($context, "allenseignant")));
            foreach ($context['_seq'] as $context["_key"] => $context["ens"]) {
                // line 334
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"row\" >
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ensempcol";
                // line 338
                echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "id", array()), "html", null, true);
                echo "\" aria-expanded=\"false\" aria-controls=\"ensempcol";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\tListe des Emplois de ";
                // line 339
                echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "enseignant", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse w3-card-8\" id=\"ensempcol";
                // line 342
                echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 344
                if (( !(null === $this->getAttribute($context["ens"], "emplois", array())) && ($this->getAttribute($this->getAttribute($context["ens"], "emplois", array()), "count", array()) > 0))) {
                    // line 345
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fssempens";
                    // line 346
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "id", array()), "html", null, true);
                    echo " col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                    // line 349
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "enseignant", array()), "html", null, true);
                    echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"w3-btn btn btn-primary\" onclick=\"LoadEmpEns('";
                    // line 354
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "id", array()), "html", null, true);
                    echo "','graphique','false')\" > <i class=\"fa fa-eye\"></i> Consulter Emploi Graphique </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"w3-btn btn btn-primary\" onclick=\"LoadEmpEns('";
                    // line 355
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "id", array()), "html", null, true);
                    echo "','liste','false')\" > <i class=\"fa fa-eye\"></i> Consulter Emploi Liste </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Filiere</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Groupe</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Matiere</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 371
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ens"], "emplois", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["emp"]) {
                        // line 372
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"fssemp";
                        // line 373
                        echo twig_escape_filter($this->env, $this->getAttribute($context["emp"], "id", array()), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                        // line 375
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "filieres", array()), "filiere", array()), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                        // line 376
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "groupes", array()), "groupe", array()), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                        // line 377
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "matiere", array()), "matiere", array()), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#emp";
                        // line 379
                        echo twig_escape_filter($this->env, $this->getAttribute($context["emp"], "id", array()), "html", null, true);
                        echo "\" > <i class=\"fa fa-eye\"></i> Consulter </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-green tablink\" onclick=\"openSubMenu(event, 'updateemp";
                        // line 380
                        echo twig_escape_filter($this->env, $this->getAttribute($context["emp"], "id", array()), "html", null, true);
                        echo "','modifemploi','emploilayout')\"><i class=\"fa fa-pencil\"></i>Modifier</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" data-toggle=\"modal\" data-target=\"#delemp";
                        // line 381
                        echo twig_escape_filter($this->env, $this->getAttribute($context["emp"], "id", array()), "html", null, true);
                        echo "\" ><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emp'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 385
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 393
                echo "\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ens'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 400
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        } else {
            // line 405
            echo "\t\t\t\t\t\t\t\t  <h1> Pas de emploi </h1>
\t\t\t\t\t\t\t\t";
        }
        // line 407
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"listeemploidep\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 413
        if ( !(null === (isset($context["allemploi"]) ? $context["allemploi"] : $this->getContext($context, "allemploi")))) {
            // line 414
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 418
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : $this->getContext($context, "alldepartement")));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 419
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\" data-toggle=\"collapse\" data-target=\"#depempcol";
                // line 422
                echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "id", array()), "html", null, true);
                echo "\" aria-expanded=\"false\" aria-controls=\"depempcol";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\tListe Emploi ";
                // line 423
                echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "departement", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"depempcol";
                // line 426
                echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Filiere</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Groupe</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Matiere</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 438
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["dep"], "emplois", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["emp"]) {
                    // line 439
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"fssemp";
                    // line 440
                    echo twig_escape_filter($this->env, $this->getAttribute($context["emp"], "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 442
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "filieres", array()), "filiere", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 443
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "groupes", array()), "groupe", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 444
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "matiere", array()), "matiere", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#emp";
                    // line 446
                    echo twig_escape_filter($this->env, $this->getAttribute($context["emp"], "id", array()), "html", null, true);
                    echo "\" > <i class=\"fa fa-eye\"></i> Consulter </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-green tablink\" onclick=\"openSubMenu(event, 'updateemp";
                    // line 447
                    echo twig_escape_filter($this->env, $this->getAttribute($context["emp"], "id", array()), "html", null, true);
                    echo "','modifemploi','emploilayout')\"><i class=\"fa fa-pencil\"></i>Modifier</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" data-toggle=\"modal\" data-target=\"#delemp";
                    // line 448
                    echo twig_escape_filter($this->env, $this->getAttribute($context["emp"], "id", array()), "html", null, true);
                    echo "\" ><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emp'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 452
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 462
            echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        } else {
            // line 467
            echo "\t\t\t\t\t\t\t\t  <h1> Pas de emploi </h1>
\t\t\t\t\t\t\t\t";
        }
        // line 469
        echo "\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div id=\"designhelp\" class=\"tabs w3-container w3-section w3-animate-left\">
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
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t  
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End page content -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_354db962a4720cac03b050d4719157e10e5602f12ac28e30bda844e415b453bc->leave($__internal_354db962a4720cac03b050d4719157e10e5602f12ac28e30bda844e415b453bc_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle::admin/emploi/emploilayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  917 => 469,  913 => 467,  906 => 462,  891 => 452,  881 => 448,  877 => 447,  873 => 446,  868 => 444,  864 => 443,  860 => 442,  855 => 440,  852 => 439,  848 => 438,  833 => 426,  827 => 423,  821 => 422,  816 => 419,  812 => 418,  806 => 414,  804 => 413,  796 => 407,  792 => 405,  785 => 400,  773 => 393,  762 => 385,  752 => 381,  748 => 380,  744 => 379,  739 => 377,  735 => 376,  731 => 375,  726 => 373,  723 => 372,  719 => 371,  700 => 355,  696 => 354,  688 => 349,  682 => 346,  679 => 345,  677 => 344,  672 => 342,  666 => 339,  660 => 338,  654 => 334,  650 => 333,  644 => 329,  642 => 328,  634 => 322,  630 => 320,  623 => 315,  610 => 307,  600 => 300,  590 => 296,  586 => 295,  582 => 294,  577 => 292,  573 => 291,  569 => 290,  564 => 288,  561 => 287,  557 => 286,  538 => 270,  534 => 269,  527 => 265,  521 => 262,  516 => 259,  514 => 258,  509 => 256,  503 => 253,  497 => 252,  492 => 249,  488 => 248,  483 => 245,  481 => 244,  472 => 237,  468 => 235,  460 => 229,  448 => 222,  438 => 217,  426 => 210,  414 => 203,  404 => 196,  394 => 192,  390 => 191,  386 => 190,  381 => 188,  377 => 187,  373 => 186,  368 => 184,  365 => 183,  361 => 182,  342 => 166,  338 => 165,  331 => 161,  325 => 158,  322 => 157,  320 => 156,  309 => 154,  303 => 151,  285 => 150,  280 => 147,  276 => 146,  264 => 141,  257 => 137,  243 => 136,  236 => 131,  232 => 130,  223 => 126,  216 => 122,  206 => 121,  200 => 117,  196 => 116,  188 => 111,  181 => 107,  175 => 106,  170 => 103,  166 => 102,  159 => 97,  157 => 96,  149 => 90,  145 => 88,  138 => 83,  131 => 81,  122 => 76,  118 => 75,  111 => 71,  106 => 69,  103 => 68,  101 => 67,  98 => 66,  94 => 65,  89 => 62,  87 => 61,  56 => 33,  22 => 1,);
    }
}
/* <div class="section w3-clear " style="margin-top:-25%;clear:both;">*/
/* 	<div class="row">*/
/* 		<div id="emploilayout" class="col-lg-12 container-fluid tabs w3-animate-zoom w3-white" style="height:90%;width:100%;z-index:99;">*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-md-12">*/
/* 					<header class="w3-container w3-blue w3-padding">*/
/* 							<a href="#" onclick="closeMenu(event, 'bodycontent')" class="w3-btn btn w3-white tablink w3-left"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 						*/
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
/* 								<h3 class="text-center"><b> <i class="glyphicon glyphicon-calendar w3-xlarge"></i> Emplois </b></h3><br>*/
/* 							</div>*/
/* 						</div>*/
/* 					  */
/* 						<ul class="nav nav-pills nav-stacked">*/
/* 							<li><a href="#" class="tablinkw3-padding-hor-16 w3-hide-large w3-dark-grey w3-hover-black tablink" onclick="w3_close()" title="close menu"><i class="fa fa-remove"></i>  Close Menu</a></li>*/
/* 							<li><a href="#" class="tablink" onclick="openSubTab(event, 'listeemploifil','emploilayout')"><i class="fa fa-users"></i> Liste des Emplois par Filiere </a></li>*/
/* 							<li><a href="#" class="tablink" onclick="openSubTab(event, 'listeemploigrp','emploilayout')"><i class="fa fa-users"></i> Liste des Emplois par Groupe </a></li>*/
/* 							<li><a href="#" class="tablink" onclick="openSubTab(event, 'listeemploisal','emploilayout')"><i class="fa fa-users"></i> Liste des Emplois par Salle </a></li>*/
/* 							<li><a href="#" class="tablink" onclick="openSubTab(event, 'listeemploiens','emploilayout')"><i class="fa fa-users"></i> Liste des Emplois par Enseignant </a></li>*/
/* 							<li><a href="#" class="tablink" onclick="openSubTab(event, 'listeemploidep','emploilayout')"><i class="fa fa-users"></i> Liste des Emplois </a></li>*/
/* 							<li><a href="#" class="tablink" onclick="openSubTab(event, 'designhelp','emploilayout')"><i class="fa fa-users"></i> Help Design </a></li>*/
/* 							<li><a href="#" class="w3-padding w3-blue tablink" onclick="OpenEmpModal(event,'{{ session_id }}')" ><i class="glyphicon glyphicon-plus"></i> Ajouter un nouveau Emploi </a></li>*/
/* 							<!-- <li><a href="#" class="w3-padding w3-blue tablink" data-toggle="modal" data-target="#addemploi" ><i class="glyphicon glyphicon-plus"></i> Ajouter un nouveau Emploi </a></li> -->*/
/* 						</ul>*/
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
/* 							<div id="emploiinfo" class="w3-container w3-section userinfo w3-animate-left">*/
/* 							*/
/* 								*/
/* 							  <h1> Info emplois </h1>*/
/* 							  */
/* 			*/
/* 							</div>*/
/* 							*/
/* 							<div id="listeemploifil" class="tabs w3-container w3-section w3-animate-left">*/
/* 							*/
/* 								{% if allemploi is not null %}*/
/* 						*/
/* 								<div class="section">*/
/* 									<div class="container">*/
/* 										{% for fil in allfiliere  %}*/
/* 										*/
/* 												{% if fil.emplois is not null and fil.emplois.count > 0 %}*/
/* 												*/
/* 														<div class="fssempfil{{ fil.id }} col-md-4">*/
/* 															<div class="col-md-4">*/
/* 																<h3>{{ fil.filiere }}</h3>*/
/* 															</div>*/
/* 															<div class="col-md-8">*/
/* 															*/
/* 																<a class="btn btn-primary" onclick="LoadEmpFil('{{ fil.id }}','graphique','false')" > <i class="fa fa-eye"></i> Consulter Emploi Graphique </a>*/
/* 																<a class="btn btn-primary" onclick="LoadEmpFil('{{ fil.id }}','liste','false')" > <i class="fa fa-eye"></i> Consulter Emploi Liste </a>*/
/* 																*/
/* 															</div>*/
/* 														</div>*/
/* 												*/
/* 												{% endif %}		*/
/* 										{% endfor %}*/
/* */
/* 									</div>*/
/* 								</div>*/
/* 									*/
/* 								{% else %}*/
/* 								  <h1> Pas d'emploi pour les filieres </h1>*/
/* 								{% endif %}*/
/* 						*/
/* 						*/
/* 							</div>*/
/* 							*/
/* 							<div id="listeemploigrp" class="tabs w3-container w3-section w3-animate-left">*/
/* 							*/
/* 								{% if allemploi is not null %}*/
/* 						*/
/* 								<div class="section">*/
/* 									<div class="container">*/
/* 										<div class="panel-group" role="tablist" aria-multiselectable="true">*/
/* 									*/
/* 											{% for dep in alldepartement  %}*/
/* 											<div class="panel panel-default">*/
/* 										*/
/* 												<div class="panel-heading" role="tab" >*/
/* 													<button class="w3-btn w3-blue w3-round" type="button" data-toggle="collapse" data-target="#depgrpempcol{{ dep.id }}" aria-expanded="false" aria-controls="depgrpempcol{{ dep.id }}">*/
/* 																 {{ dep.departement }}*/
/* 													</button>*/
/* 												</div>*/
/* 										*/
/* 												<div class="panel-collapse collapse w3-card-8" id="depgrpempcol{{ dep.id }}">*/
/* 													<div class="panel-body">*/
/* 														*/
/* 														<div class="panel-group" role="tablist" aria-multiselectable="true">*/
/* 														*/
/* 														{% for fil in dep.filieres  %}*/
/* 														*/
/* 														<div class="panel panel-default">*/
/* 										*/
/* 															<div class="panel-heading" role="tab" >*/
/* 																<button class="w3-btn w3-white" type="button" data-toggle="collapse" data-target="#filgrpempcol{{ dep.id }}_{{ fil.id }}" aria-expanded="false" aria-controls="filgrpempcol{{ dep.id }}_{{ fil.id }}">*/
/* 																				 {{ fil.filiere }}*/
/* 																</button>*/
/* 															</div>*/
/* 															*/
/* 														<div class="panel-collapse collapse w3-card-8" id="filgrpempcol{{ dep.id }}_{{ fil.id }}">*/
/* 															<div class="panel-body">*/
/* 															*/
/* 																<div class="panel-group" role="tablist" aria-multiselectable="true">*/
/* 														{% for cls in fil.classes  %}*/
/* 														*/
/* 														<div class="panel panel-default">*/
/* 										*/
/* 															<div class="panel-heading" role="tab" >*/
/* 															*/
/* 																<button class="w3-btn " type="button" data-toggle="collapse" data-target="#clsgrpempcol{{ dep.id }}_{{ fil.id }}_{{ cls.id }}" aria-expanded="false" aria-controls="clsgrpempcol{{ dep.id }}_{{ fil.id }}_{{ cls.id }}">*/
/* 																				 {{ cls.classe }}*/
/* 																</button>*/
/* 															</div>*/
/* 															*/
/* 														<div class="panel-collapse collapse w3-card-8" id="clsgrpempcol{{ dep.id }}_{{ fil.id }}_{{ cls.id }}">*/
/* 																<div class="panel-body">*/
/* 															*/
/* 																*/
/* 																*/
/* 															{% for grp in cls.groupes  %}*/
/* 															*/
/* 																<div class="row" >*/
/* 																*/
/* 																	<button class="w3-btn w3-light-blue" type="button" data-toggle="collapse" data-target="#grpempcol{{ dep.id }}_{{ fil.id }}_{{ cls.id }}_{{ grp.id }}" aria-expanded="false" aria-controls="grpempcol{{ dep.id }}_{{ fil.id }}_{{ cls.id }}_{{ grp.id }}">*/
/* 																		Liste des Emplois du groupe  {{ grp.groupe }}*/
/* 																	</button>*/
/* 																*/
/* 																	<div class="collapse w3-card-8" id="grpempcol{{ dep.id }}_{{ fil.id }}_{{ cls.id }}_{{ grp.id }}">*/
/* 																	*/
/* 																	{% if grp.emplois is not null and grp.emplois.count > 0 %}*/
/* 																	*/
/* 																			<div class="fssempgrp{{ grp.id }} col-md-12">*/
/* 																			*/
/* 																				<div class="row col-md-4">*/
/* 																					<h3>{{ grp.groupe }}</h3>*/
/* 																				</div>*/
/* 																				<div class="row col-md-8">*/
/* 																				*/
/* 																					<a class="btn btn-primary" onclick="LoadEmpGrp('{{ grp.id }}','graphique','false')" > <i class="fa fa-eye"></i> Consulter Emploi Graphique </a>*/
/* 																					<a class="btn btn-primary" onclick="LoadEmpGrp('{{ grp.id }}','liste','false')" > <i class="fa fa-eye"></i> Consulter Emploi Liste </a>*/
/* 																					*/
/* 																				</div>*/
/* 																				*/
/* 																				<div class="row col-md-12">*/
/* 																				*/
/* 																					<table>*/
/* 																						<thead>*/
/* 																							<tr>*/
/* 																								<th>Filiere</th>*/
/* 																								<th>Groupe</th>*/
/* 																								<th>Matiere</th>*/
/* 																								<th>Action</th>*/
/* 																							</tr>*/
/* 																						</thead>*/
/* 																						<tbody>*/
/* 																					{% for emp in grp.emplois  %}*/
/* 																					*/
/* 																						<tr class="fssemp{{ emp.id }}">*/
/* 																						*/
/* 																							<td>{{ emp.filieres.filiere }}</td>*/
/* 																							<td>{{ emp.groupes.groupe }}</td>*/
/* 																							<td>{{ emp.matiere.matiere }}</td>*/
/* 																							<td>												*/
/* 																									<a class="btn btn-primary" data-toggle="modal" data-target="#emp{{ emp.id }}" > <i class="fa fa-eye"></i> Consulter </a>*/
/* 																									<a class="btn btn-primary w3-green tablink" onclick="openSubMenu(event, 'updateemp{{ emp.id }}','modifemploi','emploilayout')"><i class="fa fa-pencil"></i>Modifier</a>*/
/* 																									<a class="btn btn-primary w3-red" data-toggle="modal" data-target="#delemp{{ emp.id }}" ><i class="fa fa-trash"></i>Supprimer</a>*/
/* 																							</td>*/
/* 																						</tr>*/
/* 																					{%endfor%}*/
/* 																						</tbody>*/
/* 																					</table>*/
/* 																	*/
/* 																				</div>*/
/* 																				*/
/* 																			</div>*/
/* 																	*/
/* 																	{% endif %}		*/
/* 																		*/
/* 																	*/
/* 																	</div>*/
/* 																	</div>*/
/* 																*/
/* 															{% endfor %}*/
/* 														*/
/* 															*/
/* 															*/
/* 														</div>	*/
/* 														</div>	*/
/* 														</div>	*/
/* 														{% endfor %}*/
/* 														</div>*/
/* 														</div>	*/
/* 														</div>	*/
/* 														</div>	*/
/* 														{% endfor %}*/
/* 														*/
/* 													*/
/* 										</div>*/
/* 										</div>*/
/* 										</div>*/
/* 										</div>	*/
/* 										{% endfor %}*/
/* 										*/
/* 									</div>*/
/* 									</div>*/
/* 								</div>*/
/* 									*/
/* 								{% else %}*/
/* 								  <h1> Pas d'emploi pour les groupes </h1>*/
/* 								{% endif %}*/
/* 						*/
/* 						*/
/* 							</div>*/
/* 							*/
/* 							*/
/* 							 <div id="listeemploisal" class="tabs w3-container w3-section w3-animate-left">*/
/* 							*/
/* 								{% if allemploi is not null %}*/
/* 						*/
/* 								<div class="section">*/
/* 									<div class="container">*/
/* 										{% for salle in allsalle  %}*/
/* 										*/
/* 										<div class="row" >*/
/* 										*/
/* 											<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#salempcol{{ salle.id }}" aria-expanded="false" aria-controls="salempcol{{ salle.id }}">*/
/* 												Liste des Emplois de la salle  {{ salle.salle }}*/
/* 											</button>*/
/* 											*/
/* 											<div class="collapse w3-card-8" id="salempcol{{ salle.id }}">*/
/* 											*/
/* 												{% if salle.emplois is not null and salle.emplois.count > 0 %}*/
/* 												*/
/* 													*/
/* 							*/
/* 														<div class="fssempsal{{ salle.id }} col-md-12">*/
/* 														*/
/* 															<div class="row col-md-4">*/
/* 																<h3>{{ salle.salle }}</h3>*/
/* 															</div>*/
/* 															<div class="row col-md-8">*/
/* 															*/
/* 																<a class="btn btn-primary" onclick="LoadEmpSal('{{ salle.id }}','graphique','false')" > <i class="fa fa-eye"></i> Consulter Emploi Graphique </a>*/
/* 																<a class="btn btn-primary" onclick="LoadEmpSal('{{ salle.id }}','liste','false')" > <i class="fa fa-eye"></i> Consulter Emploi Liste </a>*/
/* 																*/
/* 															</div>*/
/* 															*/
/* 															<div class="row col-md-12">*/
/* 															*/
/* 																<table>*/
/* 																	<thead>*/
/* 																		<tr>*/
/* 																			<th>Filiere</th>*/
/* 																			<th>Groupe</th>*/
/* 																			<th>Matiere</th>*/
/* 																			<th>Action</th>*/
/* 																		</tr>*/
/* 																	</thead>*/
/* 																	<tbody>*/
/* 																{% for emp in salle.emplois  %}*/
/* 																*/
/* 																	<tr class="fssemp{{ emp.id }}">*/
/* 																	*/
/* 																		<td>{{ emp.filieres.filiere }}</td>*/
/* 																		<td>{{ emp.groupes.groupe }}</td>*/
/* 																		<td>{{ emp.matiere.matiere }}</td>*/
/* 																		<td>												*/
/* 																				<a class="btn btn-primary" data-toggle="modal" data-target="#emp{{ emp.id }}" > <i class="fa fa-eye"></i> Consulter </a>*/
/* 																				<a class="btn btn-primary w3-green tablink" onclick="openSubMenu(event, 'updateemp{{ emp.id }}','modifemploi','emploilayout')"><i class="fa fa-pencil"></i>Modifier</a>*/
/* 																				<a class="btn btn-primary w3-red" data-toggle="modal" data-target="#delemp{{ emp.id }}" ><i class="fa fa-trash"></i>Supprimer</a>*/
/* 																		</td>*/
/* 																	</tr>*/
/* 																{%endfor%}*/
/* 																	</tbody>*/
/* 																</table>*/
/* 												*/
/* 															</div>*/
/* 															*/
/* 														</div>*/
/* 												*/
/* 												{% endif %}	*/
/* 												*/
/* 											</div>*/
/* 										</div>*/
/* 										*/
/* 										<br>*/
/* 										*/
/* 										{% endfor %}*/
/* */
/* 									</div>*/
/* 								</div>*/
/* 									*/
/* 								{% else %}*/
/* 								  <h1> Pas d'emploi pour les salles </h1>*/
/* 								{% endif %}*/
/* 						*/
/* 						*/
/* 							</div>*/
/* 							*/
/* 							<div id="listeemploiens" class="tabs w3-container w3-section w3-animate-left">*/
/* 							*/
/* 								{% if allemploi is not null %}*/
/* 						*/
/* 								<div class="section">*/
/* 									<div class="container">*/
/* 										<div class="row">*/
/* 										{% for ens in allenseignant  %}*/
/* 										*/
/* 										*/
/* 										<div class="row" >*/
/* 										*/
/* 											<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#ensempcol{{ ens.id }}" aria-expanded="false" aria-controls="ensempcol{{ ens.id }}">*/
/* 												Liste des Emplois de {{ ens.enseignant }}*/
/* 											</button>*/
/* 											*/
/* 											<div class="collapse w3-card-8" id="ensempcol{{ ens.id }}">*/
/* 											*/
/* 												{% if ens.emplois is not null and ens.emplois.count > 0 %}*/
/* 												*/
/* 														<div class="fssempens{{ ens.id }} col-md-12">*/
/* 														*/
/* 															<div class="row col-md-4">*/
/* 																<h3>{{ ens.enseignant }}</h3>*/
/* 															</div>*/
/* 															*/
/* 															<div class="row col-md-8">*/
/* 															*/
/* 																<a class="w3-btn btn btn-primary" onclick="LoadEmpEns('{{ ens.id }}','graphique','false')" > <i class="fa fa-eye"></i> Consulter Emploi Graphique </a>*/
/* 																<a class="w3-btn btn btn-primary" onclick="LoadEmpEns('{{ ens.id }}','liste','false')" > <i class="fa fa-eye"></i> Consulter Emploi Liste </a>*/
/* 																*/
/* 															</div>*/
/* 															*/
/* 															<div class="row col-md-12">*/
/* 															*/
/* 															<table>*/
/* 																<thead>*/
/* 																	<tr>*/
/* 																		<th>Filiere</th>*/
/* 																		<th>Groupe</th>*/
/* 																		<th>Matiere</th>*/
/* 																		<th>Action</th>*/
/* 																	</tr>*/
/* 																</thead>*/
/* 																<tbody>*/
/* 															{% for emp in ens.emplois  %}*/
/* 															*/
/* 																<tr class="fssemp{{ emp.id }}">*/
/* 																*/
/* 																	<td>{{ emp.filieres.filiere }}</td>*/
/* 																	<td>{{ emp.groupes.groupe }}</td>*/
/* 																	<td>{{ emp.matiere.matiere }}</td>*/
/* 																	<td>												*/
/* 																			<a class="btn btn-primary" data-toggle="modal" data-target="#emp{{ emp.id }}" > <i class="fa fa-eye"></i> Consulter </a>*/
/* 																			<a class="btn btn-primary w3-green tablink" onclick="openSubMenu(event, 'updateemp{{ emp.id }}','modifemploi','emploilayout')"><i class="fa fa-pencil"></i>Modifier</a>*/
/* 																			<a class="btn btn-primary w3-red" data-toggle="modal" data-target="#delemp{{ emp.id }}" ><i class="fa fa-trash"></i>Supprimer</a>*/
/* 																	</td>*/
/* 																</tr>*/
/* 															{%endfor%}*/
/* 																</tbody>*/
/* 															</table>*/
/* 												*/
/* 															</div>*/
/* 															*/
/* 														</div>*/
/* 											*/
/* 											*/
/* 												{% endif %}		*/
/* 											</div>*/
/* 										</div>*/
/* 										*/
/* 										<br>*/
/* 										*/
/* 										{% endfor %}*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 									*/
/* 								{% else %}*/
/* 								  <h1> Pas de emploi </h1>*/
/* 								{% endif %}*/
/* 						*/
/* 						*/
/* 							</div>*/
/* 							*/
/* 							<div id="listeemploidep" class="tabs w3-container w3-section w3-animate-left">*/
/* 							*/
/* 							{% if allemploi is not null %}*/
/* 						*/
/* 								<div class="section">*/
/* 									<div class="container">*/
/* 										*/
/* 										{% for dep in alldepartement  %}*/
/* 										*/
/* 										<div class="row">*/
/* 										*/
/* 											<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#depempcol{{ dep.id }}" aria-expanded="false" aria-controls="depempcol{{ dep.id }}">*/
/* 												Liste Emploi {{ dep.departement }}*/
/* 											</button>*/
/* 											*/
/* 											<div class="collapse" id="depempcol{{ dep.id }}">*/
/* 											*/
/* 												<table>*/
/* 													<thead>*/
/* 														<tr>*/
/* 															<th>Filiere</th>*/
/* 															<th>Groupe</th>*/
/* 															<th>Matiere</th>*/
/* 															<th>Action</th>*/
/* 														</tr>*/
/* 													</thead>*/
/* 													<tbody>*/
/* 												{% for emp in dep.emplois  %}*/
/* 												*/
/* 													<tr class="fssemp{{ emp.id }}">*/
/* 													*/
/* 														<td>{{ emp.filieres.filiere }}</td>*/
/* 														<td>{{ emp.groupes.groupe }}</td>*/
/* 														<td>{{ emp.matiere.matiere }}</td>*/
/* 														<td>												*/
/* 																<a class="btn btn-primary" data-toggle="modal" data-target="#emp{{ emp.id }}" > <i class="fa fa-eye"></i> Consulter </a>*/
/* 																<a class="btn btn-primary w3-green tablink" onclick="openSubMenu(event, 'updateemp{{ emp.id }}','modifemploi','emploilayout')"><i class="fa fa-pencil"></i>Modifier</a>*/
/* 																<a class="btn btn-primary w3-red" data-toggle="modal" data-target="#delemp{{ emp.id }}" ><i class="fa fa-trash"></i>Supprimer</a>*/
/* 														</td>*/
/* 													</tr>*/
/* 												{%endfor%}*/
/* 													</tbody>*/
/* 												</table>*/
/* 											*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 										*/
/* 										<br>*/
/* 										*/
/* 										{%endfor%}*/
/* 										*/
/* 									</div>*/
/* 								</div>*/
/* 									*/
/* 								{% else %}*/
/* 								  <h1> Pas de emploi </h1>*/
/* 								{% endif %}*/
/* 							  */
/* 							   */
/* 							</div>*/
/* 							*/
/* 							*/
/* 							*/
/* 								<div id="designhelp" class="tabs w3-container w3-section w3-animate-left">*/
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
/* 								</div>*/
/* 							*/
/* 							  */
/* 						</div>*/
/* 						<!-- End page content -->*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
