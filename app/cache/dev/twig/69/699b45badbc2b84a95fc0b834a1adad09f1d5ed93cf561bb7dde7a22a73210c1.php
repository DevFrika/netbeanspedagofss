<?php

/* @PedagogiePedagogie/admin/devoir/devoirlayout.html.twig */
class __TwigTemplate_704ad10b337c401e90dd241b11b5507f1aed246aab86629b7fe7a7aa777f4de1 extends Twig_Template
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
        $__internal_7fc300bc1023220c97b9c883ef58d8640cf5d27732b4b15ec2386bfbf2a40e28 = $this->env->getExtension("native_profiler");
        $__internal_7fc300bc1023220c97b9c883ef58d8640cf5d27732b4b15ec2386bfbf2a40e28->enter($__internal_7fc300bc1023220c97b9c883ef58d8640cf5d27732b4b15ec2386bfbf2a40e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/admin/devoir/devoirlayout.html.twig"));

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
\t\t\t\t\t\t\t\t<h3 class=\"text-center\"><b> <i class=\"glyphicon glyphicon-calendar w3-xlarge\"></i> devoirs </b></h3><br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  
\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"tablinkw3-padding-hor-16 w3-hide-large w3-dark-grey w3-hover-black tablink\" onclick=\"w3_close()\" title=\"close menu\"><i class=\"fa fa-remove\"></i>  Close Menu</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'listedevoirfil','devoirlayout')\"><i class=\"fa fa-users\"></i> Liste des devoirs par Filiere </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'listedevoirgrp','devoirlayout')\"><i class=\"fa fa-users\"></i> Liste des devoirs par Groupe </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'listedevoirsal','devoirlayout')\"><i class=\"fa fa-users\"></i> Liste des devoirs par Salle </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'listedevoirens','devoirlayout')\"><i class=\"fa fa-users\"></i> Liste des devoirs par Enseignant </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'listedevoirdep','devoirlayout')\"><i class=\"fa fa-users\"></i> Liste des devoirs </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"tablink\" onclick=\"openSubTab(event, 'designhelp','devoirlayout')\"><i class=\"fa fa-users\"></i> Help Design </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"w3-padding w3-blue tablink\" onclick=\"OpendevModal(event,'";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["session_id"]) ? $context["session_id"] : $this->getContext($context, "session_id")), "html", null, true);
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
\t\t\t\t\t\t\t  <h1> Info devoirs </h1>
\t\t\t\t\t\t\t  
\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"listedevoirfil\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 61
        if ( !(null === (isset($context["alldevoir"]) ? $context["alldevoir"] : $this->getContext($context, "alldevoir")))) {
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" onclick=\"LoaddevFil('";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "id", array()), "html", null, true);
                    echo "','graphique')\" > <i class=\"fa fa-eye\"></i> Consulter devoir Graphique </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" onclick=\"LoaddevFil('";
                    // line 76
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "id", array()), "html", null, true);
                    echo "','liste')\" > <i class=\"fa fa-eye\"></i> Consulter devoir Liste </a>
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
            echo "\t\t\t\t\t\t\t\t  <h1> Pas d'devoir pour les filieres </h1>
\t\t\t\t\t\t\t\t";
        }
        // line 90
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"listedevoirgrp\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 96
        if ( !(null === (isset($context["alldevoir"]) ? $context["alldevoir"] : $this->getContext($context, "alldevoir")))) {
            // line 97
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allgroupe"]) ? $context["allgroupe"] : $this->getContext($context, "allgroupe")));
            foreach ($context['_seq'] as $context["_key"] => $context["grp"]) {
                // line 101
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 102
                if (( !(null === $this->getAttribute($context["grp"], "devoirs", array())) && ($this->getAttribute($this->getAttribute($context["grp"], "devoirs", array()), "count", array()) > 0))) {
                    // line 103
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fssdevgrp";
                    // line 104
                    echo twig_escape_filter($this->env, $this->getAttribute($context["grp"], "id", array()), "html", null, true);
                    echo " col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute($context["grp"], "groupe", array()), "html", null, true);
                    echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" onclick=\"LoaddevGrp('";
                    // line 110
                    echo twig_escape_filter($this->env, $this->getAttribute($context["grp"], "id", array()), "html", null, true);
                    echo "','graphique')\" > <i class=\"fa fa-eye\"></i> Consulter devoir Graphique </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" onclick=\"LoaddevGrp('";
                    // line 111
                    echo twig_escape_filter($this->env, $this->getAttribute($context["grp"], "id", array()), "html", null, true);
                    echo "','liste')\" > <i class=\"fa fa-eye\"></i> Consulter devoir Liste </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 116
                echo "\t\t
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        } else {
            // line 123
            echo "\t\t\t\t\t\t\t\t  <h1> Pas d'devoir pour les groupes </h1>
\t\t\t\t\t\t\t\t";
        }
        // line 125
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t <div id=\"listedevoirsal\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 132
        if ( !(null === (isset($context["alldevoir"]) ? $context["alldevoir"] : $this->getContext($context, "alldevoir")))) {
            // line 133
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allsalle"]) ? $context["allsalle"] : $this->getContext($context, "allsalle")));
            foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
                // line 137
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 138
                if (( !(null === $this->getAttribute($context["salle"], "devoirs", array())) && ($this->getAttribute($this->getAttribute($context["salle"], "devoirs", array()), "count", array()) > 0))) {
                    // line 139
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fssdevsal";
                    // line 142
                    echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "id", array()), "html", null, true);
                    echo " col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                    // line 144
                    echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "salle", array()), "html", null, true);
                    echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" onclick=\"LoaddevSal('";
                    // line 148
                    echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "id", array()), "html", null, true);
                    echo "','graphique')\" > <i class=\"fa fa-eye\"></i> Consulter devoir Graphique </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" onclick=\"LoaddevSal('";
                    // line 149
                    echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "id", array()), "html", null, true);
                    echo "','liste')\" > <i class=\"fa fa-eye\"></i> Consulter devoir Liste </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 154
                echo "\t\t
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        } else {
            // line 161
            echo "\t\t\t\t\t\t\t\t  <h1> Pas d'devoir pour les salles </h1>
\t\t\t\t\t\t\t\t";
        }
        // line 163
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"listedevoirens\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 169
        if ( !(null === (isset($context["alldevoir"]) ? $context["alldevoir"] : $this->getContext($context, "alldevoir")))) {
            // line 170
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t";
            // line 173
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allenseignant"]) ? $context["allenseignant"] : $this->getContext($context, "allenseignant")));
            foreach ($context['_seq'] as $context["_key"] => $context["ens"]) {
                // line 174
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 175
                if (( !(null === $this->getAttribute($context["ens"], "devoirs", array())) && ($this->getAttribute($this->getAttribute($context["ens"], "devoirs", array()), "count", array()) > 0))) {
                    // line 176
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fssdevens";
                    // line 177
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "id", array()), "html", null, true);
                    echo " col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                    // line 179
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "enseignant", array()), "html", null, true);
                    echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" onclick=\"LoaddevEns('";
                    // line 183
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "id", array()), "html", null, true);
                    echo "','graphique')\" > <i class=\"fa fa-eye\"></i> Consulter devoir Graphique </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" onclick=\"LoaddevEns('";
                    // line 184
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ens"], "id", array()), "html", null, true);
                    echo "','liste')\" > <i class=\"fa fa-eye\"></i> Consulter devoir Liste </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 189
                echo "\t\t
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ens'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        } else {
            // line 196
            echo "\t\t\t\t\t\t\t\t  <h1> Pas de devoir </h1>
\t\t\t\t\t\t\t\t";
        }
        // line 198
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"listedevoirdep\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 204
        if ( !(null === (isset($context["alldevoir"]) ? $context["alldevoir"] : $this->getContext($context, "alldevoir")))) {
            // line 205
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 209
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : $this->getContext($context, "alldepartement")));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 210
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\" data-toggle=\"collapse\" data-target=\"#depdevcol";
                // line 213
                echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "id", array()), "html", null, true);
                echo "\" aria-expanded=\"false\" aria-controls=\"depdevcol";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\tListe devoir ";
                // line 214
                echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "departement", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"depdevcol";
                // line 217
                echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Filiere</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Groupe</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Matiere</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 229
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["dep"], "devoirs", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["dev"]) {
                    // line 230
                    echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"fssdev";
                    // line 231
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dev"], "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 233
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dev"], "filieres", array()), "filiere", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 234
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dev"], "groupes", array()), "groupe", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 235
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dev"], "matiere", array()), "matiere", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#dev";
                    // line 237
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dev"], "id", array()), "html", null, true);
                    echo "\" > <i class=\"fa fa-eye\"></i> Consulter </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-green tablink\" onclick=\"openSubMenu(event, 'updatedev";
                    // line 238
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dev"], "id", array()), "html", null, true);
                    echo "','modifdevoir','devoirlayout')\"><i class=\"fa fa-pencil\"></i>Modifier</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary w3-red\" data-toggle=\"modal\" data-target=\"#deldev";
                    // line 239
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dev"], "id", array()), "html", null, true);
                    echo "\" ><i class=\"fa fa-trash\"></i>Supprimer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dev'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 243
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 254
            echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        } else {
            // line 259
            echo "\t\t\t\t\t\t\t\t  <h1> Pas de devoir </h1>
\t\t\t\t\t\t\t\t";
        }
        // line 261
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
\t\t\t\t\t\t\t\t\t\t\t<p>Sed do eiusmod tdevor incididunt ut labore et dolore magna aliqua.</p><br>
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
        
        $__internal_7fc300bc1023220c97b9c883ef58d8640cf5d27732b4b15ec2386bfbf2a40e28->leave($__internal_7fc300bc1023220c97b9c883ef58d8640cf5d27732b4b15ec2386bfbf2a40e28_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/devoir/devoirlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 261,  480 => 259,  473 => 254,  457 => 243,  447 => 239,  443 => 238,  439 => 237,  434 => 235,  430 => 234,  426 => 233,  421 => 231,  418 => 230,  414 => 229,  399 => 217,  393 => 214,  387 => 213,  382 => 210,  378 => 209,  372 => 205,  370 => 204,  362 => 198,  358 => 196,  351 => 191,  344 => 189,  335 => 184,  331 => 183,  324 => 179,  319 => 177,  316 => 176,  314 => 175,  311 => 174,  307 => 173,  302 => 170,  300 => 169,  292 => 163,  288 => 161,  281 => 156,  274 => 154,  265 => 149,  261 => 148,  254 => 144,  249 => 142,  244 => 139,  242 => 138,  239 => 137,  235 => 136,  230 => 133,  228 => 132,  219 => 125,  215 => 123,  208 => 118,  201 => 116,  192 => 111,  188 => 110,  181 => 106,  176 => 104,  173 => 103,  171 => 102,  168 => 101,  164 => 100,  159 => 97,  157 => 96,  149 => 90,  145 => 88,  138 => 83,  131 => 81,  122 => 76,  118 => 75,  111 => 71,  106 => 69,  103 => 68,  101 => 67,  98 => 66,  94 => 65,  89 => 62,  87 => 61,  56 => 33,  22 => 1,);
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
/* 								<h3 class="text-center"><b> <i class="glyphicon glyphicon-calendar w3-xlarge"></i> devoirs </b></h3><br>*/
/* 							</div>*/
/* 						</div>*/
/* 					  */
/* 						<ul class="nav nav-pills nav-stacked">*/
/* 							<li><a href="#" class="tablinkw3-padding-hor-16 w3-hide-large w3-dark-grey w3-hover-black tablink" onclick="w3_close()" title="close menu"><i class="fa fa-remove"></i>  Close Menu</a></li>*/
/* 							<li><a href="#" class="tablink" onclick="openSubTab(event, 'listedevoirfil','devoirlayout')"><i class="fa fa-users"></i> Liste des devoirs par Filiere </a></li>*/
/* 							<li><a href="#" class="tablink" onclick="openSubTab(event, 'listedevoirgrp','devoirlayout')"><i class="fa fa-users"></i> Liste des devoirs par Groupe </a></li>*/
/* 							<li><a href="#" class="tablink" onclick="openSubTab(event, 'listedevoirsal','devoirlayout')"><i class="fa fa-users"></i> Liste des devoirs par Salle </a></li>*/
/* 							<li><a href="#" class="tablink" onclick="openSubTab(event, 'listedevoirens','devoirlayout')"><i class="fa fa-users"></i> Liste des devoirs par Enseignant </a></li>*/
/* 							<li><a href="#" class="tablink" onclick="openSubTab(event, 'listedevoirdep','devoirlayout')"><i class="fa fa-users"></i> Liste des devoirs </a></li>*/
/* 							<li><a href="#" class="tablink" onclick="openSubTab(event, 'designhelp','devoirlayout')"><i class="fa fa-users"></i> Help Design </a></li>*/
/* 							<li><a href="#" class="w3-padding w3-blue tablink" onclick="OpendevModal(event,'{{ session_id }}')" ><i class="glyphicon glyphicon-plus"></i> Ajouter un nouveau devoir </a></li>*/
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
/* 							  <h1> Info devoirs </h1>*/
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
/* 																<a class="btn btn-primary" onclick="LoaddevFil('{{ fil.id }}','graphique')" > <i class="fa fa-eye"></i> Consulter devoir Graphique </a>*/
/* 																<a class="btn btn-primary" onclick="LoaddevFil('{{ fil.id }}','liste')" > <i class="fa fa-eye"></i> Consulter devoir Liste </a>*/
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
/* 								  <h1> Pas d'devoir pour les filieres </h1>*/
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
/* 														<div class="fssdevgrp{{ grp.id }} col-md-6">*/
/* 															<div class="col-md-4">*/
/* 																<h3>{{ grp.groupe }}</h3>*/
/* 															</div>*/
/* 															<div class="col-md-8">*/
/* 															*/
/* 																<a class="btn btn-primary" onclick="LoaddevGrp('{{ grp.id }}','graphique')" > <i class="fa fa-eye"></i> Consulter devoir Graphique </a>*/
/* 																<a class="btn btn-primary" onclick="LoaddevGrp('{{ grp.id }}','liste')" > <i class="fa fa-eye"></i> Consulter devoir Liste </a>*/
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
/* 								  <h1> Pas d'devoir pour les groupes </h1>*/
/* 								{% endif %}*/
/* 						*/
/* 						*/
/* 							</div>*/
/* 							*/
/* 							*/
/* 							 <div id="listedevoirsal" class="tabs w3-container w3-section w3-animate-left">*/
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
/* 														<div class="fssdevsal{{ salle.id }} col-md-6">*/
/* 															<div class="col-md-4">*/
/* 																<h3>{{ salle.salle }}</h3>*/
/* 															</div>*/
/* 															<div class="col-md-8">*/
/* 															*/
/* 																<a class="btn btn-primary" onclick="LoaddevSal('{{ salle.id }}','graphique')" > <i class="fa fa-eye"></i> Consulter devoir Graphique </a>*/
/* 																<a class="btn btn-primary" onclick="LoaddevSal('{{ salle.id }}','liste')" > <i class="fa fa-eye"></i> Consulter devoir Liste </a>*/
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
/* 																<a class="btn btn-primary" onclick="LoaddevEns('{{ ens.id }}','graphique')" > <i class="fa fa-eye"></i> Consulter devoir Graphique </a>*/
/* 																<a class="btn btn-primary" onclick="LoaddevEns('{{ ens.id }}','liste')" > <i class="fa fa-eye"></i> Consulter devoir Liste </a>*/
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
/* 										{% for dep in alldepartement  %}*/
/* 										*/
/* 										<div class="row">*/
/* 										*/
/* 											<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#depdevcol{{ dep.id }}" aria-expanded="false" aria-controls="depdevcol{{ dep.id }}">*/
/* 												Liste devoir {{ dep.departement }}*/
/* 											</button>*/
/* 											*/
/* 											<div class="collapse" id="depdevcol{{ dep.id }}">*/
/* 											*/
/* 											<table>*/
/* 												<thead>*/
/* 													<tr>*/
/* 														<th>Filiere</th>*/
/* 														<th>Groupe</th>*/
/* 														<th>Matiere</th>*/
/* 														<th>Action</th>*/
/* 													</tr>*/
/* 												</thead>*/
/* 												<tbody>*/
/* 											{% for dev in dep.devoirs  %}*/
/* 											*/
/* 												<tr class="fssdev{{ dev.id }}">*/
/* 												*/
/* 													<td>{{ dev.filieres.filiere }}</td>*/
/* 													<td>{{ dev.groupes.groupe }}</td>*/
/* 													<td>{{ dev.matiere.matiere }}</td>*/
/* 													<td>												*/
/* 															<a class="btn btn-primary" data-toggle="modal" data-target="#dev{{ dev.id }}" > <i class="fa fa-eye"></i> Consulter </a>*/
/* 															<a class="btn btn-primary w3-green tablink" onclick="openSubMenu(event, 'updatedev{{ dev.id }}','modifdevoir','devoirlayout')"><i class="fa fa-pencil"></i>Modifier</a>*/
/* 															<a class="btn btn-primary w3-red" data-toggle="modal" data-target="#deldev{{ dev.id }}" ><i class="fa fa-trash"></i>Supprimer</a>*/
/* 													</td>*/
/* 												</tr>*/
/* 											{%endfor%}*/
/* 												</tbody>*/
/* 											</table>*/
/* 											*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 										*/
/* 										<br>*/
/* 										<div class="w3-clear"></div>*/
/* 											*/
/* 										{%endfor%}*/
/* 										*/
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
/* 											<p>Sed do eiusmod tdevor incididunt ut labore et dolore magna aliqua.</p><br>*/
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
