<?php

/* @PedagogiePedagogie/admin/rattrapage/devoirlayout.html.twig */
class __TwigTemplate_f752982e35d1a5b5d9b3f1d6657906ca1cd694686eeeb759b28000eefe6107c8 extends Twig_Template
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
        echo "<div class=\"section w3-clear \" style=\"margin-top:-25%;clear:both;\">
\t<div class=\"row\">
\t\t<div id=\"devoirlayout\" class=\"col-lg-12 container-fluid tabs w3-animate-zoom w3-white\" style=\"height:90%;width:100%;z-index:99;\">

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
\t\t\t\t\t\t\t\t<h3 class=\"text-center\"><b> <i class=\"glyphicon glyphicon-calendar w3-xlarge\"></i> Devoirs </b></h3><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  
\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"tablinkw3-padding-hor-16 w3-hide-large w3-dark-grey w3-hover-black tablink\" onclick=\"w3_close()\" title=\"close menu\"><i class=\"fa fa-remove\"></i>  Close Menu</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'listedevoirfil','devoirlayout')\"><i class=\"fa fa-users\"></i> Liste des Devoirs par Filiere </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'listedevoirgrp','devoirlayout')\"><i class=\"fa fa-users\"></i> Liste des Devoirs par Groupe </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'listedevoirsal','devoirlayout')\"><i class=\"fa fa-users\"></i> Liste des Devoirs par Salle </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'listedevoirens','devoirlayout')\"><i class=\"fa fa-users\"></i> Liste des Devoirs par Enseignant </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'listedevoirdep','devoirlayout')\"><i class=\"fa fa-users\"></i> Liste des Devoirs  par Departements </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'designhelp','devoirlayout')\"><i class=\"fa fa-users\"></i> Help Design </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"w3-padding w3-blue tablink\" onclick=\"OpenEmpModal(event,'";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["session_id"]) ? $context["session_id"] : null), "html", null, true);
        echo "')\" ><i class=\"glyphicon glyphicon-plus\"></i> Ajouter un nouveau devoir </a></li>
\t\t\t\t\t\t\t<!-- <li><a href=\"#\" class=\"w3-padding w3-blue tablink\" data-toggle=\"modal\" data-target=\"#adddevoir\" ><i class=\"glyphicon glyphicon-plus\"></i> Ajouter un nouveau devoir </a></li> -->
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
\t\t\t\t\t\t\t<div id=\"devoirinfo\" class=\"w3-container w3-section userinfo w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t  <h1> Info Devoirs </h1>
\t\t\t\t\t\t\t  
\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"listedevoirfil\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 61
        if ( !(null === (isset($context["alldevoir"]) ? $context["alldevoir"] : null))) {
            // line 62
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allfiliere"]) ? $context["allfiliere"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["fil"]) {
                // line 66
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 67
                if (( !(null === $this->getAttribute($context["fil"], "devoirs", array())) && ($this->getAttribute($this->getAttribute($context["fil"], "devoirs", array()), "count", array()) > 0))) {
                    // line 68
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fssdevfil";
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" onclick=\"LoadDevFil('";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "id", array()), "html", null, true);
                    echo "')\" > <i class=\"fa fa-eye\"></i> Consulter </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 80
                echo "\t\t
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fil'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        } else {
            // line 87
            echo "\t\t\t\t\t\t\t\t  <h1> Pas de devoir pour les filieres </h1>
\t\t\t\t\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"listedevoirgrp\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 95
        if ( !(null === (isset($context["alldevoir"]) ? $context["alldevoir"] : null))) {
            // line 96
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allgroupe"]) ? $context["allgroupe"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["grp"]) {
                // line 100
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 101
                if (( !(null === $this->getAttribute($context["grp"], "devoirs", array())) && ($this->getAttribute($this->getAttribute($context["grp"], "devoirs", array()), "count", array()) > 0))) {
                    // line 102
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fssdevgrp";
                    // line 103
                    echo twig_escape_filter($this->env, $this->getAttribute($context["grp"], "id", array()), "html", null, true);
                    echo " col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                    // line 105
                    echo twig_escape_filter($this->env, $this->getAttribute($context["grp"], "groupe", array()), "html", null, true);
                    echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" onclick=\"LoadDEVGrp('";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getAttribute($context["grp"], "id", array()), "html", null, true);
                    echo "')\" > <i class=\"fa fa-eye\"></i> Consulter </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 114
                echo "\t\t
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        } else {
            // line 121
            echo "\t\t\t\t\t\t\t\t  <h1> Pas de devoir pour les groupes </h1>
\t\t\t\t\t\t\t\t";
        }
        // line 123
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t <div id=\"listeDevoirsal\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 130
        if ( !(null === (isset($context["alldevoir"]) ? $context["alldevoir"] : null))) {
            // line 131
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allsalle"]) ? $context["allsalle"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
                // line 135
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 136
                if (( !(null === $this->getAttribute($context["salle"], "devoirs", array())) && ($this->getAttribute($this->getAttribute($context["salle"], "devoirs", array()), "count", array()) > 0))) {
                    // line 137
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fssdevsal";
                    // line 140
                    echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "id", array()), "html", null, true);
                    echo " col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                    // line 142
                    echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "salle", array()), "html", null, true);
                    echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" onclick=\"LoadDevSal('";
                    // line 146
                    echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "id", array()), "html", null, true);
                    echo "')\" > <i class=\"fa fa-eye\"></i> Consulter </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 151
                echo "\t\t
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        } else {
            // line 158
            echo "\t\t\t\t\t\t\t\t  <h1> Pas d'devoir pour les salles </h1>
\t\t\t\t\t\t\t\t";
        }
        // line 160
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"listedevoirens\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 166
        if ( !(null === (isset($context["alldevoir"]) ? $context["alldevoir"] : null))) {
            // line 167
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allenseignant"]) ? $context["allenseignant"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ens"]) {
                // line 171
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 172
                if (( !(null === $this->getAttribute($context["ens"], "devoirs", array())) && ($this->getAttribute($this->getAttribute($context["ens"], "devoirs", array()), "count", array()) > 0))) {
                    // line 173
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fssdevens";
                    // line 174
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "id", array()), "html", null, true);
                    echo " col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                    // line 176
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "enseignant", array()), "html", null, true);
                    echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" onclick=\"LoadDevEns('";
                    // line 180
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "id", array()), "html", null, true);
                    echo "')\" > <i class=\"fa fa-eye\"></i> Consulter </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 185
                echo "\t\t
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ens'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        } else {
            // line 192
            echo "\t\t\t\t\t\t\t\t  <h1> Pas de devoir </h1>
\t\t\t\t\t\t\t\t";
        }
        // line 194
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"listedevoirdep\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 200
        if ( !(null === (isset($context["alldevoir"]) ? $context["alldevoir"] : null))) {
            // line 201
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 205
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alldevoir"]) ? $context["alldevoir"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["dev"]) {
                // line 206
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fssemp";
                // line 207
                echo twig_escape_filter($this->env, $this->getAttribute($context["dev"], "id", array()), "html", null, true);
                echo " col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t  <div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t\t  <div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 212
                echo twig_escape_filter($this->env, $this->getAttribute($context["dev"], "id", array()), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#dev";
                // line 214
                echo twig_escape_filter($this->env, $this->getAttribute($context["dev"], "id", array()), "html", null, true);
                echo "\" > <i class=\"fa fa-eye\"></i> Consulter </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-green tablink\" onclick=\"openSubMenu(event, 'updatedev";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute($context["dev"], "id", array()), "html", null, true);
                echo "','modifdevoir','devoirlayout')\"><i class=\"fa fa-pencil\"></i>Modifier</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" data-toggle=\"modal\" data-target=\"#deldev";
                // line 216
                echo twig_escape_filter($this->env, $this->getAttribute($context["dev"], "id", array()), "html", null, true);
                echo "\" ><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dev'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        } else {
            // line 227
            echo "\t\t\t\t\t\t\t\t  <h1> Pas de devoir </h1>
\t\t\t\t\t\t\t\t";
        }
        // line 229
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
    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/rattrapage/devoirlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 229,  406 => 227,  399 => 222,  387 => 216,  383 => 215,  379 => 214,  374 => 212,  366 => 207,  363 => 206,  359 => 205,  353 => 201,  351 => 200,  343 => 194,  339 => 192,  332 => 187,  325 => 185,  316 => 180,  309 => 176,  304 => 174,  301 => 173,  299 => 172,  296 => 171,  292 => 170,  287 => 167,  285 => 166,  277 => 160,  273 => 158,  266 => 153,  259 => 151,  250 => 146,  243 => 142,  238 => 140,  233 => 137,  231 => 136,  228 => 135,  224 => 134,  219 => 131,  217 => 130,  208 => 123,  204 => 121,  197 => 116,  190 => 114,  181 => 109,  174 => 105,  169 => 103,  166 => 102,  164 => 101,  161 => 100,  157 => 99,  152 => 96,  150 => 95,  142 => 89,  138 => 87,  131 => 82,  124 => 80,  115 => 75,  108 => 71,  103 => 69,  100 => 68,  98 => 67,  95 => 66,  91 => 65,  86 => 62,  84 => 61,  53 => 33,  19 => 1,);
    }
}
/* <div class="section w3-clear " style="margin-top:-25%;clear:both;">*/
/* 	<div class="row">*/
/* 		<div id="devoirlayout" class="col-lg-12 container-fluid tabs w3-animate-zoom w3-white" style="height:90%;width:100%;z-index:99;">*/
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
/* 								<h3 class="text-center"><b> <i class="glyphicon glyphicon-calendar w3-xlarge"></i> Devoirs </b></h3><br>*/
/* 							</div>*/
/* 						</div>*/
/* 					  */
/* 						<ul class="nav nav-pills nav-stacked">*/
/* 							<li><a href="#" class="tablinkw3-padding-hor-16 w3-hide-large w3-dark-grey w3-hover-black tablink" onclick="w3_close()" title="close menu"><i class="fa fa-remove"></i>  Close Menu</a></li>*/
/* 							<li><a href="#" class="tablink" onclick="openSubTab(event, 'listedevoirfil','devoirlayout')"><i class="fa fa-users"></i> Liste des Devoirs par Filiere </a></li>*/
/* 							<li><a href="#" class="tablink" onclick="openSubTab(event, 'listedevoirgrp','devoirlayout')"><i class="fa fa-users"></i> Liste des Devoirs par Groupe </a></li>*/
/* 							<li><a href="#" class="tablink" onclick="openSubTab(event, 'listedevoirsal','devoirlayout')"><i class="fa fa-users"></i> Liste des Devoirs par Salle </a></li>*/
/* 							<li><a href="#" class="tablink" onclick="openSubTab(event, 'listedevoirens','devoirlayout')"><i class="fa fa-users"></i> Liste des Devoirs par Enseignant </a></li>*/
/* 							<li><a href="#" class="tablink" onclick="openSubTab(event, 'listedevoirdep','devoirlayout')"><i class="fa fa-users"></i> Liste des Devoirs  par Departements </a></li>*/
/* 							<li><a href="#" class="tablink" onclick="openSubTab(event, 'designhelp','devoirlayout')"><i class="fa fa-users"></i> Help Design </a></li>*/
/* 							<li><a href="#" class="w3-padding w3-blue tablink" onclick="OpenEmpModal(event,'{{ session_id }}')" ><i class="glyphicon glyphicon-plus"></i> Ajouter un nouveau devoir </a></li>*/
/* 							<!-- <li><a href="#" class="w3-padding w3-blue tablink" data-toggle="modal" data-target="#adddevoir" ><i class="glyphicon glyphicon-plus"></i> Ajouter un nouveau devoir </a></li> -->*/
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
/* 							<div id="devoirinfo" class="w3-container w3-section userinfo w3-animate-left">*/
/* 							*/
/* 								*/
/* 							  <h1> Info Devoirs </h1>*/
/* 							  */
/* 			*/
/* 							</div>*/
/* 							*/
/* 							<div id="listedevoirfil" class="tabs w3-container w3-section w3-animate-left">*/
/* 							*/
/* 								{% if alldevoir is not null %}*/
/* 						*/
/* 								<div class="section">*/
/* 									<div class="container">*/
/* 										{% for fil in allfiliere  %}*/
/* 										*/
/* 												{% if fil.devoirs is not null and fil.devoirs.count > 0 %}*/
/* 												*/
/* 														<div class="fssdevfil{{ fil.id }} col-md-4">*/
/* 															<div class="col-md-4">*/
/* 																<h3>{{ fil.filiere }}</h3>*/
/* 															</div>*/
/* 															<div class="col-md-8">*/
/* 															*/
/* 																<a class="btn btn-primary" onclick="LoadDevFil('{{ fil.id }}')" > <i class="fa fa-eye"></i> Consulter </a>*/
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
/* 								  <h1> Pas de devoir pour les filieres </h1>*/
/* 								{% endif %}*/
/* 						*/
/* 						*/
/* 							</div>*/
/* 							*/
/* 							<div id="listedevoirgrp" class="tabs w3-container w3-section w3-animate-left">*/
/* 							*/
/* 								{% if alldevoir is not null %}*/
/* 						*/
/* 								<div class="section">*/
/* 									<div class="container">*/
/* 										{% for grp in allgroupe  %}*/
/* 										*/
/* 												{% if grp.devoirs is not null and grp.devoirs.count > 0 %}*/
/* 												*/
/* 														<div class="fssdevgrp{{ grp.id }} col-md-4">*/
/* 															<div class="col-md-4">*/
/* 																<h3>{{ grp.groupe }}</h3>*/
/* 															</div>*/
/* 															<div class="col-md-8">*/
/* 															*/
/* 																<a class="btn btn-primary" onclick="LoadDEVGrp('{{ grp.id }}')" > <i class="fa fa-eye"></i> Consulter </a>*/
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
/* 								  <h1> Pas de devoir pour les groupes </h1>*/
/* 								{% endif %}*/
/* 						*/
/* 						*/
/* 							</div>*/
/* 							*/
/* 							*/
/* 							 <div id="listeDevoirsal" class="tabs w3-container w3-section w3-animate-left">*/
/* 							*/
/* 								{% if alldevoir is not null %}*/
/* 						*/
/* 								<div class="section">*/
/* 									<div class="container">*/
/* 										{% for salle in allsalle  %}*/
/* 										*/
/* 												{% if salle.devoirs is not null and salle.devoirs.count > 0 %}*/
/* 												*/
/* 													*/
/* 							*/
/* 														<div class="fssdevsal{{ salle.id }} col-md-4">*/
/* 															<div class="col-md-4">*/
/* 																<h3>{{ salle.salle }}</h3>*/
/* 															</div>*/
/* 															<div class="col-md-8">*/
/* 															*/
/* 																<a class="btn btn-primary" onclick="LoadDevSal('{{ salle.id }}')" > <i class="fa fa-eye"></i> Consulter </a>*/
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
/* 								  <h1> Pas d'devoir pour les salles </h1>*/
/* 								{% endif %}*/
/* 						*/
/* 						*/
/* 							</div>*/
/* 							*/
/* 							<div id="listedevoirens" class="tabs w3-container w3-section w3-animate-left">*/
/* 							*/
/* 								{% if alldevoir is not null %}*/
/* 						*/
/* 								<div class="section">*/
/* 									<div class="container">*/
/* 										{% for ens in allenseignant  %}*/
/* 										*/
/* 												{% if ens.devoirs is not null and ens.devoirs.count > 0 %}*/
/* 												*/
/* 														<div class="fssdevens{{ ens.id }} col-md-4">*/
/* 															<div class="col-md-4">*/
/* 																<h3>{{ ens.enseignant }}</h3>*/
/* 															</div>*/
/* 															<div class="col-md-8">*/
/* 															*/
/* 																<a class="btn btn-primary" onclick="LoadDevEns('{{ ens.id }}')" > <i class="fa fa-eye"></i> Consulter </a>*/
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
/* 								  <h1> Pas de devoir </h1>*/
/* 								{% endif %}*/
/* 						*/
/* 						*/
/* 							</div>*/
/* 							*/
/* 							<div id="listedevoirdep" class="tabs w3-container w3-section w3-animate-left">*/
/* 							*/
/* 							{% if alldevoir is not null %}*/
/* 						*/
/* 								<div class="section">*/
/* 									<div class="container">*/
/* 										*/
/* 										{% for dev in alldevoir  %}*/
/* 							*/
/* 											<div class="fssemp{{ dev.id }} col-md-8">*/
/* 											  <div class="col-md-4">*/
/* 												<img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png" class="img-responsive">*/
/* 											  </div>*/
/* 											  <div class="col-md-8">*/
/* 												<h3>{{ dev.id }}</h3>*/
/* 											*/
/* 													<a class="btn btn-primary" data-toggle="modal" data-target="#dev{{ dev.id }}" > <i class="fa fa-eye"></i> Consulter </a>*/
/* 													<a class="btn btn-primary w3-green tablink" onclick="openSubMenu(event, 'updatedev{{ dev.id }}','modifdevoir','devoirlayout')"><i class="fa fa-pencil"></i>Modifier</a>*/
/* 													<a class="btn btn-primary w3-red" data-toggle="modal" data-target="#deldev{{ dev.id }}" ><i class="fa fa-trash"></i>Supprimer</a>*/
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
/* 								  <h1> Pas de devoir </h1>*/
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
