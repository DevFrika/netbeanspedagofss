<?php

/* PedagogiePedagogieBundle:admin/voeux:addvoeuxlayout.html.twig */
class __TwigTemplate_9f49d3e7eb68b85565192af0054ae51e3a1d6e9d3f0ce408fcd679caa4d82312 extends Twig_Template
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
        $__internal_d8e6ff2b3305ae60e833fbd999cd4c7ff3536044099360495d42fddb27bc2c39 = $this->env->getExtension("native_profiler");
        $__internal_d8e6ff2b3305ae60e833fbd999cd4c7ff3536044099360495d42fddb27bc2c39->enter($__internal_d8e6ff2b3305ae60e833fbd999cd4c7ff3536044099360495d42fddb27bc2c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:admin/voeux:addvoeuxlayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"addvoeux\">
\t<div class=\"modal-dialog modal-lg\">
\t\t<div class=\"modal-content\">
\t\t
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div  class=\"container-fluid text-center\">
\t\t\t\t\t<div class=\"col-sm-10 col-md-offset-1\" >
            
\t\t\t\t\t\t<!-- FORM -->
\t\t\t\t\t\t<form id=\"addvoeuxform\" class=\"form-horizontal\"  method=\"POST\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t  <!-- Departements -->
\t\t\t\t\t\t\t\t\t\t  <div class=\"form-group veu-form-group col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t<label> Départements </label>
\t\t\t\t\t\t\t\t\t\t\t<select id=\"addveudepselect\" class=\"form-control\" onchange=\"veuLoadFiliere(this.value,'addveufilselect')\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : $this->getContext($context, "alldepartement")));
        foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
            // line 26
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "departement", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\"></span>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t  <!-- Filieres -->
\t\t\t\t\t\t\t\t\t\t  <div class=\"form-group veu-form-group col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t<label> Filieres </label>
\t\t\t\t\t\t\t\t\t\t\t<select id=\"addveufilselect\" class=\"form-control\" onchange=\"veuLoadClasse(this.value,'addveuclsselect')\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\"></span>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t  <!-- Classes -->
\t\t\t\t\t\t\t\t\t\t  <div class=\"form-group veu-form-group col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t<label> Classes </label>
\t\t\t\t\t\t\t\t\t\t\t<select id=\"addveuclsselect\" class=\"form-control\" onchange=\"veuLoadGroupe(this.value,'addveugrpselect')\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\"></span>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t  <!-- Groupes -->
\t\t\t\t\t\t\t\t\t\t  <div class=\"form-group veu-form-group col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t<label> Groupes </label>
\t\t\t\t\t\t\t\t\t\t\t<select id=\"addveugrpselect\" class=\"form-control\" onchange=\"veuLoadDiscipline(this.value,'addveudisselect')\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\"></span>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t   <!-- Année de debut -->
\t\t\t\t\t\t\t\t\t\t  <div class=\"form-group veu-form-group col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t<label> Année de debut </label>
\t\t\t\t\t\t\t\t\t\t\t<select id=\"yearselect\" class=\"form-control\"> 
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(twig_date_converter($this->env), "format", array(0 => "Y"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(twig_date_converter($this->env), "format", array(0 => "Y"), "method"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env), "modify", array(0 => "+1 years"), "method"), "format", array(0 => "Y"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env), "modify", array(0 => "+1 years"), "method"), "format", array(0 => "Y"), "method"), "html", null, true);
        echo "</option>  
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env), "modify", array(0 => "+2 years"), "method"), "format", array(0 => "Y"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env), "modify", array(0 => "+2 years"), "method"), "format", array(0 => "Y"), "method"), "html", null, true);
        echo "</option>  
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env), "modify", array(0 => "+3 years"), "method"), "format", array(0 => "Y"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env), "modify", array(0 => "+3 years"), "method"), "format", array(0 => "Y"), "method"), "html", null, true);
        echo "</option>  
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env), "modify", array(0 => "+4 years"), "method"), "format", array(0 => "Y"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env), "modify", array(0 => "+4 years"), "method"), "format", array(0 => "Y"), "method"), "html", null, true);
        echo "</option>  
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\"></span>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t   <!-- Semestre -->
\t\t\t\t\t\t\t\t\t\t  <div class=\"form-group veu-form-group col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t<label> Semestre </label>
\t\t\t\t\t\t\t\t\t\t\t<select id=\"smtselect\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allsemestre"]) ? $context["allsemestre"] : $this->getContext($context, "allsemestre")));
        foreach ($context['_seq'] as $context["_key"] => $context["smt"]) {
            // line 82
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["smt"], "code", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["smt"], "semestre", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\"></span>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t   <!-- Lieux -->
\t\t\t\t\t\t\t\t\t\t  <div class=\"form-group veu-form-group col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t<label> Lieux </label>
\t\t\t\t\t\t\t\t\t\t\t<select id=\"addveulieuxselect\" class=\"form-control\" onchange=\"veuLoadSalle(this.value,'addveusalselect')\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alllieux"]) ? $context["alllieux"] : $this->getContext($context, "alllieux")));
        foreach ($context['_seq'] as $context["_key"] => $context["lix"]) {
            // line 93
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lix"], "code", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lix"], "lieux", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lix'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\"></span>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t  <!-- Salles -->
\t\t\t\t\t\t\t\t\t\t  <div class=\"form-group veu-form-group col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t<label> Salles </label>
\t\t\t\t\t\t\t\t\t\t\t<select id=\"addveusalselect\" class=\"form-control\" >
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allsalle"]) ? $context["allsalle"] : $this->getContext($context, "allsalle")));
        foreach ($context['_seq'] as $context["_key"] => $context["sal"]) {
            // line 104
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sal"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sal"], "salle", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\"></span>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t   <!-- Jours -->
\t\t\t\t\t\t\t\t\t\t  <div class=\"form-group veu-form-group col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t<label> Jours </label>
\t\t\t\t\t\t\t\t\t\t\t<select id=\"addveujourselect\" class=\"form-control\" >
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Lundi</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Mardi</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Mercredi</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">Jeudi</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">Vendredi</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">Samedi</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\">Dimanche</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\"></span>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t  <!-- Heure Debut -->
\t\t\t\t\t\t\t\t\t\t  <div class=\" form-group veu-form-group col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t<label> Heure Debut </label>
\t\t\t\t\t\t\t\t\t\t\t<select id=\"addveuhdebselect\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"08\">08H</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"09\">09H</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"10\">10H</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11H</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"12\">12H</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13H</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"14\">14H</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"15\">15H</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"16\">16H</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17H</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"18\">18H</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<select id=\"addveumindebselect\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"00\">00M</option>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"15\">15M</option>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"30\">30M</option>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"45\">45M</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\"></span>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t  <!-- Heure Fin -->
\t\t\t\t\t\t\t\t\t\t  <div class=\"form-group veu-form-group col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t<label> Heure Fin </label>
\t\t\t\t\t\t\t\t\t\t\t<select id=\"addveuhfinselect\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"08\">08H</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"09\">09H</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"10\">10H</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11H</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"12\">12H</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13H</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"14\">14H</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"15\">15H</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"16\">16H</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17H</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"18\">18H</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<select id=\"addveuminfinselect\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"00\">00M</option>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"15\">15M</option>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"30\">30M</option>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"45\">45M</option>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\"></span>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t   <!-- Periodicite -->
\t\t\t\t\t\t\t\t\t\t  <div class=\"form-group veu-form-group col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t<label> Periode </label>
\t\t\t\t\t\t\t\t\t\t\t<select id=\"prdselect\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allperiode"]) ? $context["allperiode"] : $this->getContext($context, "allperiode")));
        foreach ($context['_seq'] as $context["_key"] => $context["prd"]) {
            // line 191
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prd"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prd"], "periode", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\"></span>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t  <!-- Disciplines -->
\t\t\t\t\t\t\t\t\t\t  <div class=\"form-group veu-form-group col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t<label> Disciplines </label>
\t\t\t\t\t\t\t\t\t\t\t<select id=\"addveudisselect\" class=\"form-control\" onchange=\"veuLoadMatiere(this.value,'addveumatselect')\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alldiscipline"]) ? $context["alldiscipline"] : $this->getContext($context, "alldiscipline")));
        foreach ($context['_seq'] as $context["_key"] => $context["dis"]) {
            // line 207
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dis"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dis"], "discipline", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\"></span>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t  <!-- Matieres -->
\t\t\t\t\t\t\t\t\t\t  <div class=\"form-group veu-form-group col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t<label> Matieres </label>
\t\t\t\t\t\t\t\t\t\t\t<select id=\"addveumatselect\" class=\"form-control\" onchange=\"veuLoadEnseignant(this.value,'addveuensselect')\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allmatiere"]) ? $context["allmatiere"] : $this->getContext($context, "allmatiere")));
        foreach ($context['_seq'] as $context["_key"] => $context["mat"]) {
            // line 221
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mat"], "matiere", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\"></span>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t  <!-- Enseignant -->
\t\t\t\t\t\t\t\t\t\t  <div id=\"veuadd_ens\" class=\"form-group veu-form-group col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t<label> Enseignants </label>
\t\t\t\t\t\t\t\t\t\t\t<select id=\"addveuensselect\" class=\"form-control\" >
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\"></span>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t  <!-- Natures -->
\t\t\t\t\t\t\t\t\t\t  <div class=\"form-group veu-form-group col-xs-3\">
\t\t\t\t\t\t\t\t\t\t\t<label> Nature </label>
\t\t\t\t\t\t\t\t\t\t\t<select id=\"natselect\" class=\"form-control\" >
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 241
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allnature"]) ? $context["allnature"] : $this->getContext($context, "allnature")));
        foreach ($context['_seq'] as $context["_key"] => $context["nat"]) {
            // line 242
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nat"], "description", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\"></span>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<!-- SHOW ERROR/SUCCESS MESSAGES -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group veu-form-group\"> 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"addveutag\" value=\"addveu\" hidden>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"addveuuserid\" value=\"";
        // line 263
        echo twig_escape_filter($this->env, (isset($context["session_id"]) ? $context["session_id"] : $this->getContext($context, "session_id")), "html", null, true);
        echo "\" hidden>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"addvoeux_url\" value=\"";
        // line 264
        echo $this->env->getExtension('routing')->getPath("pedagogie_addvoeux");
        echo "\" hidden>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"getfil_url\" value=\"";
        // line 265
        echo $this->env->getExtension('routing')->getPath("pedagogie_getdepfilieres");
        echo "\" hidden>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"getcls_url\" value=\"";
        // line 266
        echo $this->env->getExtension('routing')->getPath("pedagogie_getfilclasses");
        echo "\" hidden>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"getgrp_url\" value=\"";
        // line 267
        echo $this->env->getExtension('routing')->getPath("pedagogie_getclsgroupes");
        echo "\" hidden>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"getdis_url\" value=\"";
        // line 268
        echo $this->env->getExtension('routing')->getPath("pedagogie_getgrpdisciplines");
        echo "\" hidden>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"getmat_url\" value=\"";
        // line 269
        echo $this->env->getExtension('routing')->getPath("pedagogie_getdismatieres");
        echo "\" hidden>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"getens_url\" value=\"";
        // line 270
        echo $this->env->getExtension('routing')->getPath("pedagogie_getmatenseignants");
        echo "\" hidden>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"getnat_url\" value=\"";
        // line 271
        echo $this->env->getExtension('routing')->getPath("pedagogie_getmatnature");
        echo "\" hidden>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"getsal_url\" value=\"";
        // line 272
        echo $this->env->getExtension('routing')->getPath("pedagogie_getlixsalles");
        echo "\" hidden>
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t\t\t\t\t\t<!-- SUBMIT BUTTON -->
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success \"><i class=\"fa fa-save\"></i> Enregistrer </button>\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t  
\t\t</div>
\t</div>
</div>";
        
        $__internal_d8e6ff2b3305ae60e833fbd999cd4c7ff3536044099360495d42fddb27bc2c39->leave($__internal_d8e6ff2b3305ae60e833fbd999cd4c7ff3536044099360495d42fddb27bc2c39_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:admin/voeux:addvoeuxlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 272,  455 => 271,  451 => 270,  447 => 269,  443 => 268,  439 => 267,  435 => 266,  431 => 265,  427 => 264,  423 => 263,  402 => 244,  391 => 242,  387 => 241,  367 => 223,  356 => 221,  352 => 220,  339 => 209,  328 => 207,  324 => 206,  309 => 193,  298 => 191,  294 => 190,  208 => 106,  197 => 104,  193 => 103,  183 => 95,  172 => 93,  168 => 92,  158 => 84,  147 => 82,  143 => 81,  128 => 71,  122 => 70,  116 => 69,  110 => 68,  104 => 67,  63 => 28,  52 => 26,  48 => 25,  22 => 1,);
    }
}
/* <div class="fade modal text-center" id="addvoeux">*/
/* 	<div class="modal-dialog modal-lg">*/
/* 		<div class="modal-content">*/
/* 		*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 			</div>*/
/* 			*/
/* 			<div class="modal-body">*/
/* 				<div  class="container-fluid text-center">*/
/* 					<div class="col-sm-10 col-md-offset-1" >*/
/*             */
/* 						<!-- FORM -->*/
/* 						<form id="addvoeuxform" class="form-horizontal"  method="POST">*/
/* 							<div class="row">*/
/* 								<div class="container">*/
/* 									<div class="col-lg-10">*/
/* 										<div class="row">*/
/* 									*/
/* 										  <!-- Departements -->*/
/* 										  <div class="form-group veu-form-group col-xs-3">*/
/* 											<label> Départements </label>*/
/* 											<select id="addveudepselect" class="form-control" onchange="veuLoadFiliere(this.value,'addveufilselect')">*/
/* 												{%for dep in alldepartement %}*/
/* 												<option value="{{ dep.id }}">{{ dep.departement}}</option>*/
/* 												{% endfor %}*/
/* 											</select>*/
/* 											<span class="help-block"></span>*/
/* 										  </div>*/
/* 										  */
/* 										  <!-- Filieres -->*/
/* 										  <div class="form-group veu-form-group col-xs-3">*/
/* 											<label> Filieres </label>*/
/* 											<select id="addveufilselect" class="form-control" onchange="veuLoadClasse(this.value,'addveuclsselect')">*/
/* 												*/
/* 											</select>*/
/* 											<span class="help-block"></span>*/
/* 										  </div>*/
/* 										  */
/* 										  <!-- Classes -->*/
/* 										  <div class="form-group veu-form-group col-xs-3">*/
/* 											<label> Classes </label>*/
/* 											<select id="addveuclsselect" class="form-control" onchange="veuLoadGroupe(this.value,'addveugrpselect')">*/
/* 												*/
/* 											</select>*/
/* 											<span class="help-block"></span>*/
/* 										  </div>*/
/* 										  */
/* 										  <!-- Groupes -->*/
/* 										  <div class="form-group veu-form-group col-xs-3">*/
/* 											<label> Groupes </label>*/
/* 											<select id="addveugrpselect" class="form-control" onchange="veuLoadDiscipline(this.value,'addveudisselect')">*/
/* 												*/
/* 											</select>*/
/* 											<span class="help-block"></span>*/
/* 										  </div>*/
/* 										  */
/* 										</div>*/
/* 						  */
/* 										<div class="row">*/
/* 													*/
/* 										   <!-- Année de debut -->*/
/* 										  <div class="form-group veu-form-group col-xs-3">*/
/* 											<label> Année de debut </label>*/
/* 											<select id="yearselect" class="form-control"> */
/* 												<option value="{{ date().format('Y') }}">{{ date().format('Y') }}</option>*/
/* 												<option value="{{ date().modify("+1 years").format('Y') }}">{{ date().modify("+1 years").format('Y') }}</option>  */
/* 												<option value="{{ date().modify("+2 years").format('Y') }}">{{ date().modify("+2 years").format('Y') }}</option>  */
/* 												<option value="{{ date().modify("+3 years").format('Y') }}">{{ date().modify("+3 years").format('Y') }}</option>  */
/* 												<option value="{{ date().modify("+4 years").format('Y') }}">{{ date().modify("+4 years").format('Y') }}</option>  */
/* 												*/
/* 											</select>*/
/* 											<span class="help-block"></span>*/
/* 										  </div>*/
/* 										  */
/* 										   <!-- Semestre -->*/
/* 										  <div class="form-group veu-form-group col-xs-3">*/
/* 											<label> Semestre </label>*/
/* 											<select id="smtselect" class="form-control">*/
/* 												{%for smt in allsemestre %}*/
/* 												<option value="{{ smt.code }}">{{ smt.semestre }}</option>*/
/* 												{% endfor %}*/
/* 											</select>*/
/* 											<span class="help-block"></span>*/
/* 										  </div>*/
/* 										  */
/* 										   <!-- Lieux -->*/
/* 										  <div class="form-group veu-form-group col-xs-3">*/
/* 											<label> Lieux </label>*/
/* 											<select id="addveulieuxselect" class="form-control" onchange="veuLoadSalle(this.value,'addveusalselect')">*/
/* 												{%for lix in alllieux %}*/
/* 												<option value="{{ lix.code }}">{{ lix.lieux }}</option>*/
/* 												{% endfor %}*/
/* 											</select>*/
/* 											<span class="help-block"></span>*/
/* 										  </div>*/
/* 										  */
/* 										  <!-- Salles -->*/
/* 										  <div class="form-group veu-form-group col-xs-3">*/
/* 											<label> Salles </label>*/
/* 											<select id="addveusalselect" class="form-control" >*/
/* 												{%for sal in allsalle %}*/
/* 												<option value="{{ sal.id }}">{{ sal.salle }}</option>*/
/* 												{% endfor %}*/
/* 											</select>*/
/* 											<span class="help-block"></span>*/
/* 										  </div>*/
/* 										  */
/* 										</div> */
/* 									*/
/* 										<div class="row">*/
/* 													*/
/* 										   <!-- Jours -->*/
/* 										  <div class="form-group veu-form-group col-xs-3">*/
/* 											<label> Jours </label>*/
/* 											<select id="addveujourselect" class="form-control" >*/
/* 												<option value="1">Lundi</option>*/
/* 												<option value="2">Mardi</option>*/
/* 												<option value="3">Mercredi</option>*/
/* 												<option value="4">Jeudi</option>*/
/* 												<option value="5">Vendredi</option>*/
/* 												<option value="6">Samedi</option>*/
/* 												<option value="7">Dimanche</option>*/
/* 											</select>*/
/* 											<span class="help-block"></span>*/
/* 										  </div>*/
/* 										  */
/* 										  <!-- Heure Debut -->*/
/* 										  <div class=" form-group veu-form-group col-xs-3">*/
/* 											<label> Heure Debut </label>*/
/* 											<select id="addveuhdebselect" class="form-control">*/
/* 												<option value="08">08H</option>*/
/* 												<option value="09">09H</option>*/
/* 												<option value="10">10H</option>*/
/* 												<option value="11">11H</option>*/
/* 												<option value="12">12H</option>*/
/* 												<option value="13">13H</option>*/
/* 												<option value="14">14H</option>*/
/* 												<option value="15">15H</option>*/
/* 												<option value="16">16H</option>*/
/* 												<option value="17">17H</option>*/
/* 												<option value="18">18H</option>*/
/* 											</select>*/
/* 											<select id="addveumindebselect" class="form-control">*/
/* 												<option value="00">00M</option>*/
/* 												*/
/* 												<option value="15">15M</option>*/
/* 												*/
/* 												<option value="30">30M</option>*/
/* 												*/
/* 												<option value="45">45M</option>*/
/* 											</select>*/
/* 											<span class="help-block"></span>*/
/* 										  </div>*/
/* 										  */
/* 										  <!-- Heure Fin -->*/
/* 										  <div class="form-group veu-form-group col-xs-3">*/
/* 											<label> Heure Fin </label>*/
/* 											<select id="addveuhfinselect" class="form-control">*/
/* 												<option value="08">08H</option>*/
/* 												<option value="09">09H</option>*/
/* 												<option value="10">10H</option>*/
/* 												<option value="11">11H</option>*/
/* 												<option value="12">12H</option>*/
/* 												<option value="13">13H</option>*/
/* 												<option value="14">14H</option>*/
/* 												<option value="15">15H</option>*/
/* 												<option value="16">16H</option>*/
/* 												<option value="17">17H</option>*/
/* 												<option value="18">18H</option>*/
/* 											</select>*/
/* 											<select id="addveuminfinselect" class="form-control">*/
/* 												<option value="00">00M</option>*/
/* 												*/
/* 												<option value="15">15M</option>*/
/* 												*/
/* 												<option value="30">30M</option>*/
/* 												*/
/* 												<option value="45">45M</option>*/
/* 												*/
/* 											</select>*/
/* 											<span class="help-block"></span>*/
/* 										  </div>*/
/* 										  */
/* 										   <!-- Periodicite -->*/
/* 										  <div class="form-group veu-form-group col-xs-3">*/
/* 											<label> Periode </label>*/
/* 											<select id="prdselect" class="form-control">*/
/* 												{%for prd in allperiode %}*/
/* 												<option value="{{ prd.id }}">{{ prd.periode }}</option>*/
/* 												{% endfor %}*/
/* 											</select>*/
/* 											<span class="help-block"></span>*/
/* 										  </div>*/
/* 										  */
/* 										</div>*/
/* 										*/
/* 										<div class="row">*/
/* 													*/
/* 										  <!-- Disciplines -->*/
/* 										  <div class="form-group veu-form-group col-xs-3">*/
/* 											<label> Disciplines </label>*/
/* 											<select id="addveudisselect" class="form-control" onchange="veuLoadMatiere(this.value,'addveumatselect')">*/
/* 											*/
/* 												{%for dis in alldiscipline %}*/
/* 												<option value="{{ dis.id }}">{{ dis.discipline }}</option>*/
/* 												{% endfor %}*/
/* 												*/
/* 											</select>*/
/* 											<span class="help-block"></span>*/
/* 										  </div>*/
/* 										  */
/* 										  */
/* 										  <!-- Matieres -->*/
/* 										  <div class="form-group veu-form-group col-xs-3">*/
/* 											<label> Matieres </label>*/
/* 											<select id="addveumatselect" class="form-control" onchange="veuLoadEnseignant(this.value,'addveuensselect')">*/
/* 											*/
/* 												{%for mat in allmatiere %}*/
/* 												<option value="{{ mat.id }}">{{ mat.matiere }}</option>*/
/* 												{% endfor %}*/
/* 												*/
/* 											</select>*/
/* 											<span class="help-block"></span>*/
/* 										  </div>*/
/* 										  */
/* 										  <!-- Enseignant -->*/
/* 										  <div id="veuadd_ens" class="form-group veu-form-group col-xs-3">*/
/* 											<label> Enseignants </label>*/
/* 											<select id="addveuensselect" class="form-control" >*/
/* 												*/
/* 											</select>*/
/* 											<span class="help-block"></span>*/
/* 										  </div>*/
/* 										  */
/* 										  <!-- Natures -->*/
/* 										  <div class="form-group veu-form-group col-xs-3">*/
/* 											<label> Nature </label>*/
/* 											<select id="natselect" class="form-control" >*/
/* 												{%for nat in allnature %}*/
/* 												<option value="{{ nat.id }}">{{ nat.description }}</option>*/
/* 												{% endfor %}*/
/* 											</select>*/
/* 											<span class="help-block"></span>*/
/* 										  </div>*/
/* 							  */
/* 										</div>*/
/* 										*/
/* 										<div class="w3-clear"></div>*/
/* 										*/
/* 										<div class="row">*/
/* 											*/
/* 											<!-- SHOW ERROR/SUCCESS MESSAGES -->*/
/* 											<div class="form-group veu-form-group"> */
/* 												<span class="messages-block"></span>*/
/* 											</div>*/
/* 											*/
/* 										</div>*/
/* 							*/
/* 						  */
/* 										<input type="text" name="addveutag" value="addveu" hidden>*/
/* 										<input type="text" name="addveuuserid" value="{{ session_id }}" hidden>*/
/* 										<input type="text" name="addvoeux_url" value="{{ path('pedagogie_addvoeux') }}" hidden>*/
/* 										<input type="text" name="getfil_url" value="{{ path('pedagogie_getdepfilieres') }}" hidden>*/
/* 										<input type="text" name="getcls_url" value="{{ path('pedagogie_getfilclasses') }}" hidden>*/
/* 										<input type="text" name="getgrp_url" value="{{ path('pedagogie_getclsgroupes') }}" hidden>*/
/* 										<input type="text" name="getdis_url" value="{{ path('pedagogie_getgrpdisciplines') }}" hidden>*/
/* 										<input type="text" name="getmat_url" value="{{ path('pedagogie_getdismatieres') }}" hidden>*/
/* 										<input type="text" name="getens_url" value="{{ path('pedagogie_getmatenseignants') }}" hidden>*/
/* 										<input type="text" name="getnat_url" value="{{ path('pedagogie_getmatnature') }}" hidden>*/
/* 										<input type="text" name="getsal_url" value="{{ path('pedagogie_getlixsalles') }}" hidden>*/
/* 							  */
/* 								*/
/* 							*/
/* 										<div class="modal-footer">*/
/* 											<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 											<!-- SUBMIT BUTTON -->*/
/* 											<button type="submit" class="btn btn-success "><i class="fa fa-save"></i> Enregistrer </button>		*/
/* 										</div>*/
/* 							*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</form>*/
/* 				*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>	  */
/* 		</div>*/
/* 	</div>*/
/* </div>*/
