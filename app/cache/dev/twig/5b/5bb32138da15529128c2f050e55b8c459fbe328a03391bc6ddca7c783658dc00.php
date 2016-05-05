<?php

/* @PedagogiePedagogie/admin/emploi/addemploilayout.html.twig */
class __TwigTemplate_db34ee43a77aaa32849e539e7dbf6aabcc8755e8d8f1a4ab8bf2a2f7d4c416c8 extends Twig_Template
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
        $__internal_615f8a0974951a3e2c5f4e5529e3930cd1cd66062aecd4def0b36988762c567c = $this->env->getExtension("native_profiler");
        $__internal_615f8a0974951a3e2c5f4e5529e3930cd1cd66062aecd4def0b36988762c567c->enter($__internal_615f8a0974951a3e2c5f4e5529e3930cd1cd66062aecd4def0b36988762c567c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/admin/emploi/addemploilayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"addemploi\">
\t\t\t\t  <div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"modal-body\">
\t\t\t\t\t\t<div id=\"container\" class=\"container-fluid text-center\">
              <div class=\"col-sm-10 col-md-offset-1\" >
                <!-- PAGE TITLE -->
                
                  <h4>
                    <span ></span> </h4>
\t\t\t\t\t
\t\t\t\t\t<!-- SHOW ERROR/SUCCESS MESSAGES -->
\t\t\t\t
               
                
                <!-- FORM -->
                <form id=\"addemploiform\" class=\"form-horizontal\"  method=\"POST\">
                  
                  <!-- Departements -->
                  <div class=\"form-group emp-form-group\">
                    <label> Départements </label>
                    <select id=\"addempdepselect\" class=\"form-control\" onchange=\"empLoadFiliere(this.value,'addempfilselect')\">
\t\t\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : $this->getContext($context, "alldepartement")));
        foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
            // line 28
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "departement", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Filieres -->
                  <div class=\"form-group emp-form-group\">
                    <label> Filieres </label>
                    <select id=\"addempfilselect\" class=\"form-control\" onchange=\"empLoadClasse(this.value,'addempclsselect')\">
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Classes -->
                  <div class=\"form-group emp-form-group\">
                    <label> Classes </label>
                    <select id=\"addempclsselect\" class=\"form-control\" onchange=\"empLoadGroupe(this.value,'addempgrpselect')\">
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Groupes -->
                  <div class=\"form-group emp-form-group\">
                    <label> Groupes </label>
                    <select id=\"addempgrpselect\" class=\"form-control\" onchange=\"empLoadDiscipline(this.value,'addempdisselect')\">
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Disciplines -->
                  <div class=\"form-group emp-form-group\">
                    <label> Disciplines </label>
                    <select id=\"addempdisselect\" class=\"form-control\" onchange=\"empLoadMatiere(this.value,'addempmatselect')\">
\t\t\t\t\t
\t\t\t\t\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alldiscipline"]) ? $context["alldiscipline"] : $this->getContext($context, "alldiscipline")));
        foreach ($context['_seq'] as $context["_key"] => $context["dis"]) {
            // line 67
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dis"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dis"], "discipline", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  
\t\t\t\t  <!-- Matieres -->
                  <div class=\"form-group emp-form-group\">
                    <label> Matieres </label>
                    <select id=\"addempmatselect\" class=\"form-control\" onchange=\"empLoadEnseignant(this.value,'addempensselect')\">
\t\t\t\t\t
\t\t\t\t\t\t";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allmatiere"]) ? $context["allmatiere"] : $this->getContext($context, "allmatiere")));
        foreach ($context['_seq'] as $context["_key"] => $context["mat"]) {
            // line 81
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mat"], "matiere", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Enseignant -->
\t\t\t\t  <div class=\"form-group emp-form-group\">
                    <label> Enseignants </label>
                    <select id=\"addempensselect\" class=\"form-control\" >
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Natures -->
\t\t\t\t  <div class=\"form-group emp-form-group\">
                    <label> Nature </label>
                    <select id=\"natselect\" class=\"form-control\" >
\t\t\t\t\t\t";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allnature"]) ? $context["allnature"] : $this->getContext($context, "allnature")));
        foreach ($context['_seq'] as $context["_key"] => $context["nat"]) {
            // line 102
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nat"], "description", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  
\t\t\t\t   <!-- Lieux -->
\t\t\t\t  <div class=\"form-group emp-form-group\">
                    <label> Lieux </label>
                    <select id=\"addemplieuxselect\" class=\"form-control\" onchange=\"empLoadSalle(this.value,'addempsalselect')\">
\t\t\t\t\t\t";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alllieux"]) ? $context["alllieux"] : $this->getContext($context, "alllieux")));
        foreach ($context['_seq'] as $context["_key"] => $context["lix"]) {
            // line 114
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lix"], "code", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lix"], "lieux", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lix'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Salles -->
\t\t\t\t  <div class=\"form-group emp-form-group\">
                    <label> Salles </label>
                    <select id=\"addempsalselect\" class=\"form-control\" >
\t\t\t\t\t\t";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allsalle"]) ? $context["allsalle"] : $this->getContext($context, "allsalle")));
        foreach ($context['_seq'] as $context["_key"] => $context["sal"]) {
            // line 125
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sal"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sal"], "salle", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t   <!-- Jours -->
\t\t\t\t  <div class=\"form-group emp-form-group\">
                    <label> Jours </label>
                    <select id=\"addempjourselect\" class=\"form-control\" >
\t\t\t\t\t\t<option value=\"1\">Lundi</option>
\t\t\t\t\t\t<option value=\"2\">Mardi</option>
\t\t\t\t\t\t<option value=\"3\">Mercredi</option>
\t\t\t\t\t\t<option value=\"4\">Jeudi</option>
\t\t\t\t\t\t<option value=\"5\">Vendredi</option>
\t\t\t\t\t\t<option value=\"6\">Samedi</option>
\t\t\t\t\t\t<option value=\"7\">Dimanche</option>
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Heure Debut -->
                  <div class=\" form-group emp-form-group\">
                    <label> Heure Debut </label>
                    <select id=\"addemphdebselect\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"08\">08H</option>
\t\t\t\t\t\t<option value=\"09\">09H</option>
\t\t\t\t\t\t<option value=\"10\">10H</option>
\t\t\t\t\t\t<option value=\"11\">11H</option>
\t\t\t\t\t\t<option value=\"12\">12H</option>
\t\t\t\t\t\t<option value=\"13\">13H</option>
\t\t\t\t\t\t<option value=\"14\">14H</option>
\t\t\t\t\t\t<option value=\"15\">15H</option>
\t\t\t\t\t\t<option value=\"16\">16H</option>
\t\t\t\t\t\t<option value=\"17\">17H</option>
\t\t\t\t\t\t<option value=\"18\">18H</option>
\t\t\t\t\t</select>
\t\t\t\t\t<select id=\"addempmindebselect\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"00\">00M</option>
\t\t\t\t\t\t<option value=\"05\">05M</option>
\t\t\t\t\t\t<option value=\"10\">10M</option>
\t\t\t\t\t\t<option value=\"15\">15M</option>
\t\t\t\t\t\t<option value=\"20\">20M</option>
\t\t\t\t\t\t<option value=\"25\">25M</option>
\t\t\t\t\t\t<option value=\"30\">30M</option>
\t\t\t\t\t\t<option value=\"35\">35M</option>
\t\t\t\t\t\t<option value=\"40\">40M</option>
\t\t\t\t\t\t<option value=\"45\">45M</option>
\t\t\t\t\t\t<option value=\"50\">50M</option>
\t\t\t\t\t\t<option value=\"55\">55M</option>
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Heure Fin -->
                  <div class=\"form-group emp-form-group\">
                    <label> Heure Fin </label>
                    <select id=\"addemphfinselect\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"08\">08H</option>
\t\t\t\t\t\t<option value=\"09\">09H</option>
\t\t\t\t\t\t<option value=\"10\">10H</option>
\t\t\t\t\t\t<option value=\"11\">11H</option>
\t\t\t\t\t\t<option value=\"12\">12H</option>
\t\t\t\t\t\t<option value=\"13\">13H</option>
\t\t\t\t\t\t<option value=\"14\">14H</option>
\t\t\t\t\t\t<option value=\"15\">15H</option>
\t\t\t\t\t\t<option value=\"16\">16H</option>
\t\t\t\t\t\t<option value=\"17\">17H</option>
\t\t\t\t\t\t<option value=\"18\">18H</option>
\t\t\t\t\t</select>
\t\t\t\t\t<select id=\"addempminfinselect\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"00\">00M</option>
\t\t\t\t\t\t<option value=\"05\">05M</option>
\t\t\t\t\t\t<option value=\"10\">10M</option>
\t\t\t\t\t\t<option value=\"15\">15M</option>
\t\t\t\t\t\t<option value=\"20\">20M</option>
\t\t\t\t\t\t<option value=\"25\">25M</option>
\t\t\t\t\t\t<option value=\"30\">30M</option>
\t\t\t\t\t\t<option value=\"35\">35M</option>
\t\t\t\t\t\t<option value=\"40\">40M</option>
\t\t\t\t\t\t<option value=\"45\">45M</option>
\t\t\t\t\t\t<option value=\"50\">50M</option>
\t\t\t\t\t\t<option value=\"55\">55M</option>
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <div class=\"emp-form-group\"> 
\t\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t  
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  
\t\t\t\t  <input type=\"text\" name=\"addemptag\" value=\"addemp\" hidden>
\t\t\t\t  <input type=\"text\" name=\"addemploi_url\" value=\"";
        // line 223
        echo $this->env->getExtension('routing')->getPath("pedagogie_addemploi");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getfil_url\" value=\"";
        // line 224
        echo $this->env->getExtension('routing')->getPath("pedagogie_getdepfilieres");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getcls_url\" value=\"";
        // line 225
        echo $this->env->getExtension('routing')->getPath("pedagogie_getfilclasses");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getgrp_url\" value=\"";
        // line 226
        echo $this->env->getExtension('routing')->getPath("pedagogie_getclsgroupes");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getdis_url\" value=\"";
        // line 227
        echo $this->env->getExtension('routing')->getPath("pedagogie_getgrpdisciplines");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getmat_url\" value=\"";
        // line 228
        echo $this->env->getExtension('routing')->getPath("pedagogie_getdismatieres");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getens_url\" value=\"";
        // line 229
        echo $this->env->getExtension('routing')->getPath("pedagogie_getmatenseignants");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getnat_url\" value=\"";
        // line 230
        echo $this->env->getExtension('routing')->getPath("pedagogie_getmatnature");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getsal_url\" value=\"";
        // line 231
        echo $this->env->getExtension('routing')->getPath("pedagogie_getlixsalles");
        echo "\" hidden>
\t\t\t\t  
\t\t\t\t\t
\t\t\t\t
                  <div class=\"modal-footer\">
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t<!-- SUBMIT BUTTON -->
                  <button type=\"submit\" class=\"btn btn-success \"><i class=\"fa fa-save\"></i> Enregistrer </button>
\t\t\t\t\t
\t\t\t\t\t  </div>
                  
                </form>
\t\t\t\t
\t\t\t\t
\t\t\t\t
              </div>
\t\t\t  </div>
\t\t\t\t\t  </div>
\t\t\t\t\t  
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_615f8a0974951a3e2c5f4e5529e3930cd1cd66062aecd4def0b36988762c567c->leave($__internal_615f8a0974951a3e2c5f4e5529e3930cd1cd66062aecd4def0b36988762c567c_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/emploi/addemploilayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 231,  358 => 230,  354 => 229,  350 => 228,  346 => 227,  342 => 226,  338 => 225,  334 => 224,  330 => 223,  232 => 127,  221 => 125,  217 => 124,  207 => 116,  196 => 114,  192 => 113,  181 => 104,  170 => 102,  166 => 101,  146 => 83,  135 => 81,  131 => 80,  118 => 69,  107 => 67,  103 => 66,  65 => 30,  54 => 28,  50 => 27,  22 => 1,);
    }
}
/* <div class="fade modal text-center" id="addemploi">*/
/* 				  <div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 					  <div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/* 						*/
/* 					  </div>*/
/* 					  <div class="modal-body">*/
/* 						<div id="container" class="container-fluid text-center">*/
/*               <div class="col-sm-10 col-md-offset-1" >*/
/*                 <!-- PAGE TITLE -->*/
/*                 */
/*                   <h4>*/
/*                     <span ></span> </h4>*/
/* 					*/
/* 					<!-- SHOW ERROR/SUCCESS MESSAGES -->*/
/* 				*/
/*                */
/*                 */
/*                 <!-- FORM -->*/
/*                 <form id="addemploiform" class="form-horizontal"  method="POST">*/
/*                   */
/*                   <!-- Departements -->*/
/*                   <div class="form-group emp-form-group">*/
/*                     <label> Départements </label>*/
/*                     <select id="addempdepselect" class="form-control" onchange="empLoadFiliere(this.value,'addempfilselect')">*/
/* 						{%for dep in alldepartement %}*/
/* 						<option value="{{ dep.id }}">{{ dep.departement}}</option>*/
/* 						{% endfor %}*/
/* 					</select>*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Filieres -->*/
/*                   <div class="form-group emp-form-group">*/
/*                     <label> Filieres </label>*/
/*                     <select id="addempfilselect" class="form-control" onchange="empLoadClasse(this.value,'addempclsselect')">*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Classes -->*/
/*                   <div class="form-group emp-form-group">*/
/*                     <label> Classes </label>*/
/*                     <select id="addempclsselect" class="form-control" onchange="empLoadGroupe(this.value,'addempgrpselect')">*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Groupes -->*/
/*                   <div class="form-group emp-form-group">*/
/*                     <label> Groupes </label>*/
/*                     <select id="addempgrpselect" class="form-control" onchange="empLoadDiscipline(this.value,'addempdisselect')">*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Disciplines -->*/
/*                   <div class="form-group emp-form-group">*/
/*                     <label> Disciplines </label>*/
/*                     <select id="addempdisselect" class="form-control" onchange="empLoadMatiere(this.value,'addempmatselect')">*/
/* 					*/
/* 						{%for dis in alldiscipline %}*/
/* 						<option value="{{ dis.id }}">{{ dis.discipline }}</option>*/
/* 						{% endfor %}*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  */
/* 				  <!-- Matieres -->*/
/*                   <div class="form-group emp-form-group">*/
/*                     <label> Matieres </label>*/
/*                     <select id="addempmatselect" class="form-control" onchange="empLoadEnseignant(this.value,'addempensselect')">*/
/* 					*/
/* 						{%for mat in allmatiere %}*/
/* 						<option value="{{ mat.id }}">{{ mat.matiere }}</option>*/
/* 						{% endfor %}*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Enseignant -->*/
/* 				  <div class="form-group emp-form-group">*/
/*                     <label> Enseignants </label>*/
/*                     <select id="addempensselect" class="form-control" >*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Natures -->*/
/* 				  <div class="form-group emp-form-group">*/
/*                     <label> Nature </label>*/
/*                     <select id="natselect" class="form-control" >*/
/* 						{%for nat in allnature %}*/
/* 						<option value="{{ nat.id }}">{{ nat.description }}</option>*/
/* 						{% endfor %}*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  */
/* 				   <!-- Lieux -->*/
/* 				  <div class="form-group emp-form-group">*/
/*                     <label> Lieux </label>*/
/*                     <select id="addemplieuxselect" class="form-control" onchange="empLoadSalle(this.value,'addempsalselect')">*/
/* 						{%for lix in alllieux %}*/
/* 						<option value="{{ lix.code }}">{{ lix.lieux }}</option>*/
/* 						{% endfor %}*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Salles -->*/
/* 				  <div class="form-group emp-form-group">*/
/*                     <label> Salles </label>*/
/*                     <select id="addempsalselect" class="form-control" >*/
/* 						{%for sal in allsalle %}*/
/* 						<option value="{{ sal.id }}">{{ sal.salle }}</option>*/
/* 						{% endfor %}*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				   <!-- Jours -->*/
/* 				  <div class="form-group emp-form-group">*/
/*                     <label> Jours </label>*/
/*                     <select id="addempjourselect" class="form-control" >*/
/* 						<option value="1">Lundi</option>*/
/* 						<option value="2">Mardi</option>*/
/* 						<option value="3">Mercredi</option>*/
/* 						<option value="4">Jeudi</option>*/
/* 						<option value="5">Vendredi</option>*/
/* 						<option value="6">Samedi</option>*/
/* 						<option value="7">Dimanche</option>*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Heure Debut -->*/
/*                   <div class=" form-group emp-form-group">*/
/*                     <label> Heure Debut </label>*/
/*                     <select id="addemphdebselect" class="form-control">*/
/* 						<option value="08">08H</option>*/
/* 						<option value="09">09H</option>*/
/* 						<option value="10">10H</option>*/
/* 						<option value="11">11H</option>*/
/* 						<option value="12">12H</option>*/
/* 						<option value="13">13H</option>*/
/* 						<option value="14">14H</option>*/
/* 						<option value="15">15H</option>*/
/* 						<option value="16">16H</option>*/
/* 						<option value="17">17H</option>*/
/* 						<option value="18">18H</option>*/
/* 					</select>*/
/* 					<select id="addempmindebselect" class="form-control">*/
/* 						<option value="00">00M</option>*/
/* 						<option value="05">05M</option>*/
/* 						<option value="10">10M</option>*/
/* 						<option value="15">15M</option>*/
/* 						<option value="20">20M</option>*/
/* 						<option value="25">25M</option>*/
/* 						<option value="30">30M</option>*/
/* 						<option value="35">35M</option>*/
/* 						<option value="40">40M</option>*/
/* 						<option value="45">45M</option>*/
/* 						<option value="50">50M</option>*/
/* 						<option value="55">55M</option>*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Heure Fin -->*/
/*                   <div class="form-group emp-form-group">*/
/*                     <label> Heure Fin </label>*/
/*                     <select id="addemphfinselect" class="form-control">*/
/* 						<option value="08">08H</option>*/
/* 						<option value="09">09H</option>*/
/* 						<option value="10">10H</option>*/
/* 						<option value="11">11H</option>*/
/* 						<option value="12">12H</option>*/
/* 						<option value="13">13H</option>*/
/* 						<option value="14">14H</option>*/
/* 						<option value="15">15H</option>*/
/* 						<option value="16">16H</option>*/
/* 						<option value="17">17H</option>*/
/* 						<option value="18">18H</option>*/
/* 					</select>*/
/* 					<select id="addempminfinselect" class="form-control">*/
/* 						<option value="00">00M</option>*/
/* 						<option value="05">05M</option>*/
/* 						<option value="10">10M</option>*/
/* 						<option value="15">15M</option>*/
/* 						<option value="20">20M</option>*/
/* 						<option value="25">25M</option>*/
/* 						<option value="30">30M</option>*/
/* 						<option value="35">35M</option>*/
/* 						<option value="40">40M</option>*/
/* 						<option value="45">45M</option>*/
/* 						<option value="50">50M</option>*/
/* 						<option value="55">55M</option>*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <div class="emp-form-group"> */
/* 						<span class="messages-block"></span>*/
/* 					</div>*/
/* 					*/
/* 					<div class="w3-clear"></div>*/
/* 				  */
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  */
/* 				  <input type="text" name="addemptag" value="addemp" hidden>*/
/* 				  <input type="text" name="addemploi_url" value="{{ path('pedagogie_addemploi') }}" hidden>*/
/* 				  <input type="text" name="getfil_url" value="{{ path('pedagogie_getdepfilieres') }}" hidden>*/
/* 				  <input type="text" name="getcls_url" value="{{ path('pedagogie_getfilclasses') }}" hidden>*/
/* 				  <input type="text" name="getgrp_url" value="{{ path('pedagogie_getclsgroupes') }}" hidden>*/
/* 				  <input type="text" name="getdis_url" value="{{ path('pedagogie_getgrpdisciplines') }}" hidden>*/
/* 				  <input type="text" name="getmat_url" value="{{ path('pedagogie_getdismatieres') }}" hidden>*/
/* 				  <input type="text" name="getens_url" value="{{ path('pedagogie_getmatenseignants') }}" hidden>*/
/* 				  <input type="text" name="getnat_url" value="{{ path('pedagogie_getmatnature') }}" hidden>*/
/* 				  <input type="text" name="getsal_url" value="{{ path('pedagogie_getlixsalles') }}" hidden>*/
/* 				  */
/* 					*/
/* 				*/
/*                   <div class="modal-footer">*/
/* 					<div class="w3-clear"></div>*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						<!-- SUBMIT BUTTON -->*/
/*                   <button type="submit" class="btn btn-success "><i class="fa fa-save"></i> Enregistrer </button>*/
/* 					*/
/* 					  </div>*/
/*                   */
/*                 </form>*/
/* 				*/
/* 				*/
/* 				*/
/*               </div>*/
/* 			  </div>*/
/* 					  </div>*/
/* 					  */
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
