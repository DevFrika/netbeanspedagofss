<?php

/* PedagogiePedagogieBundle:admin/voeux:grphvoeuxgroupetemplate.html.twig */
class __TwigTemplate_5a12ed36648d05a7bfd3edab567d3637b95eb34363a79b08dfa02e700f3bf405 extends Twig_Template
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
        $__internal_02d6a6593153710e5cc8b8c430ef119499b15e05f282890dd3c8c58327281bb5 = $this->env->getExtension("native_profiler");
        $__internal_02d6a6593153710e5cc8b8c430ef119499b15e05f282890dd3c8c58327281bb5->enter($__internal_02d6a6593153710e5cc8b8c430ef119499b15e05f282890dd3c8c58327281bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:admin/voeux:grphvoeuxgroupetemplate.html.twig"));

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
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t<td class=\"col-xs-1 text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h3> Lundi </h3>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeemp"]) ? $context["listeemp"] : $this->getContext($context, "listeemp")));
        foreach ($context['_seq'] as $context["_key"] => $context["emp"]) {
            // line 66
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
            // line 67
            if (($this->getAttribute($this->getAttribute($context["emp"], "jours", array()), "id", array()) == 1)) {
                // line 68
                echo "\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-xs-2 text-center\">
\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"w3-green\">  ";
                // line 71
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["emp"], "getHeureDebut", array()), "H:i"), "html", null, true);
                echo "  </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"w3-red\">  ";
                // line 72
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["emp"], "getHeureFin", array()), "H:i"), "html", null, true);
                echo "  </span>
\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<h5> ";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "matiere", array()), "matiere", array()), "html", null, true);
                echo " </h5>
\t\t\t\t\t\t\t\t\t\t\t\t<h5> ";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "enseignants", array()), "enseignant", array()), "html", null, true);
                echo " </h5>
\t\t\t\t\t\t\t\t\t\t\t\t<h5> ";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "salles", array()), "salle", array()), "html", null, true);
                echo " </h5>
\t\t\t\t\t\t\t\t\t\t\t\t<h5> ";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "natures", array()), "description", array()), "html", null, true);
                echo " </h5>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 81
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t<td class=\"col-xs-1 text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h3> Mardi </h3>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeemp"]) ? $context["listeemp"] : $this->getContext($context, "listeemp")));
        foreach ($context['_seq'] as $context["_key"] => $context["emp"]) {
            // line 93
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
            // line 94
            if (($this->getAttribute($this->getAttribute($context["emp"], "jours", array()), "id", array()) == 2)) {
                // line 95
                echo "\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-xs-2 text-center\">
\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"w3-green\">  ";
                // line 98
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["emp"], "getHeureDebut", array()), "H:i"), "html", null, true);
                echo "  </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"w3-red\">  ";
                // line 99
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["emp"], "getHeureFin", array()), "H:i"), "html", null, true);
                echo "  </span>
\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<h5> ";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "matiere", array()), "matiere", array()), "html", null, true);
                echo " </h5>
\t\t\t\t\t\t\t\t\t\t\t\t<h5> ";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "enseignants", array()), "enseignant", array()), "html", null, true);
                echo " </h5>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<h5> ";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "salles", array()), "salle", array()), "html", null, true);
                echo " </h5>
\t\t\t\t\t\t\t\t\t\t\t\t<h5> ";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "natures", array()), "description", array()), "html", null, true);
                echo " </h5>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 108
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t<td class=\"col-xs-1 text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h3> Mercredi </h3>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeemp"]) ? $context["listeemp"] : $this->getContext($context, "listeemp")));
        foreach ($context['_seq'] as $context["_key"] => $context["emp"]) {
            // line 120
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
            // line 121
            if (($this->getAttribute($this->getAttribute($context["emp"], "jours", array()), "id", array()) == 3)) {
                // line 122
                echo "\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-xs-2 text-center\">
\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"w3-green\">  ";
                // line 125
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["emp"], "getHeureDebut", array()), "H:i"), "html", null, true);
                echo "  </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"w3-red\">  ";
                // line 126
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["emp"], "getHeureFin", array()), "H:i"), "html", null, true);
                echo "  </span>
\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<h5> ";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "matiere", array()), "matiere", array()), "html", null, true);
                echo " </h5> 
\t\t\t\t\t\t\t\t\t\t\t\t<h5> ";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "enseignants", array()), "enseignant", array()), "html", null, true);
                echo " </h5>
\t\t\t\t\t\t\t\t\t\t\t\t<h5> ";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "salles", array()), "salle", array()), "html", null, true);
                echo " </h5>
\t\t\t\t\t\t\t\t\t\t\t\t<h5> ";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "natures", array()), "description", array()), "html", null, true);
                echo " </h5>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 135
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t<td class=\"col-xs-1 text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h3> Jeudi </h3>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeemp"]) ? $context["listeemp"] : $this->getContext($context, "listeemp")));
        foreach ($context['_seq'] as $context["_key"] => $context["emp"]) {
            // line 147
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
            // line 148
            if (($this->getAttribute($this->getAttribute($context["emp"], "jours", array()), "id", array()) == 4)) {
                // line 149
                echo "\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-xs-2 text-center\">
\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"w3-green\">  ";
                // line 152
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["emp"], "getHeureDebut", array()), "H:i"), "html", null, true);
                echo "  </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"w3-red\">  ";
                // line 153
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["emp"], "getHeureFin", array()), "H:i"), "html", null, true);
                echo "  </span>
\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<h5> ";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "matiere", array()), "matiere", array()), "html", null, true);
                echo " </h5> 
\t\t\t\t\t\t\t\t\t\t\t\t<h5> ";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "enseignants", array()), "enseignant", array()), "html", null, true);
                echo " </h5>
\t\t\t\t\t\t\t\t\t\t\t\t<h5> ";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "salles", array()), "salle", array()), "html", null, true);
                echo " </h5>
\t\t\t\t\t\t\t\t\t\t\t\t<h5> ";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "natures", array()), "description", array()), "html", null, true);
                echo " </h5>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 162
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t<td class=\"col-xs-1 text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h3> Vendredi </h3>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeemp"]) ? $context["listeemp"] : $this->getContext($context, "listeemp")));
        foreach ($context['_seq'] as $context["_key"] => $context["emp"]) {
            // line 175
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
            // line 176
            if (($this->getAttribute($this->getAttribute($context["emp"], "jours", array()), "id", array()) == 5)) {
                // line 177
                echo "\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-xs-2 text-center\">
\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"w3-green\">  ";
                // line 180
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["emp"], "getHeureDebut", array()), "H:i"), "html", null, true);
                echo "  </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"w3-red\">  ";
                // line 181
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["emp"], "getHeureFin", array()), "H:i"), "html", null, true);
                echo "  </span>
\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<h5> ";
                // line 184
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "matiere", array()), "matiere", array()), "html", null, true);
                echo " </h5>
\t\t\t\t\t\t\t\t\t\t\t\t<h5> ";
                // line 185
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "enseignants", array()), "enseignant", array()), "html", null, true);
                echo " </h5>
\t\t\t\t\t\t\t\t\t\t\t\t<h5> ";
                // line 186
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "salles", array()), "salle", array()), "html", null, true);
                echo " </h5>
\t\t\t\t\t\t\t\t\t\t\t\t<h5> ";
                // line 187
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "natures", array()), "description", array()), "html", null, true);
                echo " </h5>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 190
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t<td class=\"col-xs-1 text-center\">
\t\t\t\t\t\t\t\t\t\t\t<h3> Samedi </h3>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeemp"]) ? $context["listeemp"] : $this->getContext($context, "listeemp")));
        foreach ($context['_seq'] as $context["_key"] => $context["emp"]) {
            // line 203
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
            // line 204
            if (($this->getAttribute($this->getAttribute($context["emp"], "jours", array()), "id", array()) == 6)) {
                // line 205
                echo "\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-xs-2 text-center\">
\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"w3-green\">  ";
                // line 208
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["emp"], "getHeureDebut", array()), "H:i"), "html", null, true);
                echo "  </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"w3-red\">  ";
                // line 209
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["emp"], "getHeureFin", array()), "H:i"), "html", null, true);
                echo "  </span>
\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<h5> ";
                // line 212
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "matiere", array()), "matiere", array()), "html", null, true);
                echo " </h5>
\t\t\t\t\t\t\t\t\t\t\t\t<h5> ";
                // line 213
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "enseignants", array()), "enseignant", array()), "html", null, true);
                echo " </h5>
\t\t\t\t\t\t\t\t\t\t\t\t<h5> ";
                // line 214
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "salles", array()), "salle", array()), "html", null, true);
                echo " </h5>
\t\t\t\t\t\t\t\t\t\t\t\t<h5> ";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emp"], "natures", array()), "description", array()), "html", null, true);
                echo " </h5>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 218
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</tr>
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
        
        $__internal_02d6a6593153710e5cc8b8c430ef119499b15e05f282890dd3c8c58327281bb5->leave($__internal_02d6a6593153710e5cc8b8c430ef119499b15e05f282890dd3c8c58327281bb5_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:admin/voeux:grphvoeuxgroupetemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 220,  473 => 218,  467 => 215,  463 => 214,  459 => 213,  455 => 212,  449 => 209,  445 => 208,  440 => 205,  438 => 204,  435 => 203,  431 => 202,  419 => 192,  412 => 190,  406 => 187,  402 => 186,  398 => 185,  394 => 184,  388 => 181,  384 => 180,  379 => 177,  377 => 176,  374 => 175,  370 => 174,  358 => 164,  351 => 162,  345 => 159,  341 => 158,  337 => 157,  333 => 156,  327 => 153,  323 => 152,  318 => 149,  316 => 148,  313 => 147,  309 => 146,  298 => 137,  291 => 135,  285 => 132,  281 => 131,  277 => 130,  273 => 129,  267 => 126,  263 => 125,  258 => 122,  256 => 121,  253 => 120,  249 => 119,  238 => 110,  231 => 108,  225 => 105,  221 => 104,  217 => 103,  213 => 102,  207 => 99,  203 => 98,  198 => 95,  196 => 94,  193 => 93,  189 => 92,  178 => 83,  171 => 81,  165 => 78,  161 => 77,  157 => 76,  153 => 75,  147 => 72,  143 => 71,  138 => 68,  136 => 67,  133 => 66,  129 => 65,  97 => 36,  91 => 35,  87 => 34,  81 => 33,  74 => 29,  66 => 28,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
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
/* 										*/
/* 									</tr>*/
/* 								</thead>*/
/* 								*/
/* 								<tbody>*/
/* 						  */
/* 									<tr>*/
/* 									  */
/* 										<td class="col-xs-1 text-center">*/
/* 											<h3> Lundi </h3>*/
/* 										</td>*/
/* 										*/
/* 										{% for emp in listeemp %}*/
/* 											*/
/* 											{% if  emp.jours.id == 1 %}*/
/* 											<td class="col-xs-2 text-center">*/
/* 											  */
/* 												<h5 class="text-center">*/
/* 													<span class="w3-green">  {{ emp.getHeureDebut|date('H:i') }}  </span>*/
/* 													<span class="w3-red">  {{ emp.getHeureFin|date('H:i') }}  </span>*/
/* 												</h5>*/
/* 												*/
/* 												<h5> {{ emp.matiere.matiere }} </h5>*/
/* 												<h5> {{ emp.enseignants.enseignant }} </h5>*/
/* 												<h5> {{ emp.salles.salle }} </h5>*/
/* 												<h5> {{ emp.natures.description }} </h5>*/
/* 											</td>*/
/* 											{% endif %}*/
/* 											*/
/* 									   {% endfor %}*/
/* 									   */
/* 									</tr>*/
/* 									  */
/* 									<tr>*/
/* 									  */
/* 										<td class="col-xs-1 text-center">*/
/* 											<h3> Mardi </h3>*/
/* 										</td>*/
/* 										*/
/* 										{% for emp in listeemp %}*/
/* 											*/
/* 											{% if  emp.jours.id == 2 %}*/
/* 											<td class="col-xs-2 text-center">*/
/* 											  */
/* 												<h5 class="text-center">*/
/* 													<span class="w3-green">  {{ emp.getHeureDebut|date('H:i') }}  </span>*/
/* 													<span class="w3-red">  {{ emp.getHeureFin|date('H:i') }}  </span>*/
/* 												</h5>*/
/* 												*/
/* 												<h5> {{ emp.matiere.matiere }} </h5>*/
/* 												<h5> {{ emp.enseignants.enseignant }} </h5>												*/
/* 												<h5> {{ emp.salles.salle }} </h5>*/
/* 												<h5> {{ emp.natures.description }} </h5>*/
/* 											</td>*/
/* 											{% endif %}*/
/* 											*/
/* 									   {% endfor %}*/
/* 									   */
/* 									</tr>*/
/* 									  */
/* 									<tr>*/
/* 									  */
/* 										<td class="col-xs-1 text-center">*/
/* 											<h3> Mercredi </h3>*/
/* 										</td>*/
/* 										*/
/* 										{% for emp in listeemp %}*/
/* 											*/
/* 											{% if  emp.jours.id == 3 %}*/
/* 											<td class="col-xs-2 text-center">*/
/* 											  */
/* 												<h5 class="text-center">*/
/* 													<span class="w3-green">  {{ emp.getHeureDebut|date('H:i') }}  </span>*/
/* 													<span class="w3-red">  {{ emp.getHeureFin|date('H:i') }}  </span>*/
/* 												</h5>*/
/* 												*/
/* 												<h5> {{ emp.matiere.matiere }} </h5> */
/* 												<h5> {{ emp.enseignants.enseignant }} </h5>*/
/* 												<h5> {{ emp.salles.salle }} </h5>*/
/* 												<h5> {{ emp.natures.description }} </h5>*/
/* 											</td>*/
/* 											{% endif %}*/
/* 											*/
/* 									   {% endfor %}*/
/* 										*/
/* 									</tr>*/
/* 									  */
/* 									<tr>*/
/* 									  */
/* 										<td class="col-xs-1 text-center">*/
/* 											<h3> Jeudi </h3>*/
/* 										</td>*/
/* 										*/
/* 										{% for emp in listeemp %}*/
/* 											*/
/* 											{% if  emp.jours.id == 4 %}*/
/* 											<td class="col-xs-2 text-center">*/
/* 											  */
/* 												<h5 class="text-center">*/
/* 													<span class="w3-green">  {{ emp.getHeureDebut|date('H:i') }}  </span>*/
/* 													<span class="w3-red">  {{ emp.getHeureFin|date('H:i') }}  </span>*/
/* 												</h5>*/
/* 												*/
/* 												<h5> {{ emp.matiere.matiere }} </h5> */
/* 												<h5> {{ emp.enseignants.enseignant }} </h5>*/
/* 												<h5> {{ emp.salles.salle }} </h5>*/
/* 												<h5> {{ emp.natures.description }} </h5>*/
/* 											</td>*/
/* 											{% endif %}*/
/* 											*/
/* 									   {% endfor %}*/
/* 										*/
/* 										*/
/* 									</tr>*/
/* 									  */
/* 									<tr>*/
/* 									  */
/* 										<td class="col-xs-1 text-center">*/
/* 											<h3> Vendredi </h3>*/
/* 										</td>*/
/* 										*/
/* 										{% for emp in listeemp %}*/
/* 											*/
/* 											{% if  emp.jours.id == 5 %}*/
/* 											<td class="col-xs-2 text-center">*/
/* 											  */
/* 												<h5 class="text-center">*/
/* 													<span class="w3-green">  {{ emp.getHeureDebut|date('H:i') }}  </span>*/
/* 													<span class="w3-red">  {{ emp.getHeureFin|date('H:i') }}  </span>*/
/* 												</h5>*/
/* 												*/
/* 												<h5> {{ emp.matiere.matiere }} </h5>*/
/* 												<h5> {{ emp.enseignants.enseignant }} </h5>*/
/* 												<h5> {{ emp.salles.salle }} </h5>*/
/* 												<h5> {{ emp.natures.description }} </h5>*/
/* 											</td>*/
/* 											{% endif %}*/
/* 											*/
/* 									   {% endfor %}*/
/* 										*/
/* 										*/
/* 									</tr>*/
/* 									  */
/* 									<tr>*/
/* 									  */
/* 										<td class="col-xs-1 text-center">*/
/* 											<h3> Samedi </h3>*/
/* 										</td>*/
/* 										*/
/* 										{% for emp in listeemp %}*/
/* 											*/
/* 											{% if  emp.jours.id == 6 %}*/
/* 											<td class="col-xs-2 text-center">*/
/* 											  */
/* 												<h5 class="text-center">*/
/* 													<span class="w3-green">  {{ emp.getHeureDebut|date('H:i') }}  </span>*/
/* 													<span class="w3-red">  {{ emp.getHeureFin|date('H:i') }}  </span>*/
/* 												</h5>*/
/* 												*/
/* 												<h5> {{ emp.matiere.matiere }} </h5>*/
/* 												<h5> {{ emp.enseignants.enseignant }} </h5>*/
/* 												<h5> {{ emp.salles.salle }} </h5>*/
/* 												<h5> {{ emp.natures.description }} </h5>*/
/* 											</td>*/
/* 											{% endif %}*/
/* 											*/
/* 									   {% endfor %}*/
/* 										*/
/* 										*/
/* 									</tr>*/
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
