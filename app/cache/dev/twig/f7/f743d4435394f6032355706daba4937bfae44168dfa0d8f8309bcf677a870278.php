<?php

/* @PedagogiePedagogie/admin/rattrapage/adddevoirlayout.html.twig */
class __TwigTemplate_2b1a5ba148617da5071a270c89fad3199ef3b7e403a8a9806c14438ab4c2f1cf extends Twig_Template
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
        $__internal_4dccad891de13c82d819cc90161fa4097450752ce05adafd7817479fbaad0107 = $this->env->getExtension("native_profiler");
        $__internal_4dccad891de13c82d819cc90161fa4097450752ce05adafd7817479fbaad0107->enter($__internal_4dccad891de13c82d819cc90161fa4097450752ce05adafd7817479fbaad0107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/admin/rattrapage/adddevoirlayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"adddevoir\">
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
\t\t\t\t\t
\t\t\t\t
               
                
                <!-- FORM -->
                <form id=\"adddevoirform\" class=\"form-horizontal\"  method=\"POST\">
                  
\t\t\t\t   <!-- Matieres -->
                  <div class=\"form-group dev-form-group\">
                    <label> Matieres </label>
                    <select id=\"adddevmatselect\" class=\"form-control\" >
\t\t\t\t\t
\t\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allmatiere"]) ? $context["allmatiere"] : $this->getContext($context, "allmatiere")));
        foreach ($context['_seq'] as $context["_key"] => $context["mat"]) {
            // line 29
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
        // line 31
        echo "\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Natures -->
\t\t\t\t  <div class=\"form-group emp-form-group\">
                    <label> Nature </label>
                    <select id=\"adddevnatselect\" class=\"form-control\" >
\t\t\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allnature"]) ? $context["allnature"] : $this->getContext($context, "allnature")));
        foreach ($context['_seq'] as $context["_key"] => $context["nat"]) {
            // line 41
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nat"], "id", array()), "html", null, true);
            echo "\"> Devoir de ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nat"], "description", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
                  <!-- Departements -->
                  <div class=\"form-group dev-form-group\">
                    <label> Départements </label>
                    <select id=\"adddevdepselect\" class=\"form-control\" onchange=\"devLoadFiliere(this.value,'adddevfilselect')\">
\t\t\t\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : $this->getContext($context, "alldepartement")));
        foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
            // line 52
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
        // line 54
        echo "\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Filieres -->
                  <div class=\"form-group dev-form-group\">
                    <label> Filieres </label>
                    <select id=\"adddevfilselect\" class=\"form-control\" onchange=\"devLoadClasse(this.value,'adddevclsselect')\">
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Classes -->
                  <div class=\"form-group dev-form-group\">
                    <label> Classes </label>
                    <select id=\"adddevclsselect\" class=\"form-control\" onchange=\"devLoadGroupe(this.value,'adddevgrpselect')\">
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Groupes -->
                  <div class=\"form-group dev-form-group\">
                    <label> Groupes </label>
                    <select id=\"addempgrpselect\" class=\"form-control\" >
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  
\t\t\t\t  
\t\t\t\t   <!-- Lieux -->
\t\t\t\t  <div class=\"form-group dev-form-group\">
                    <label> Lieux </label>
                    <select id=\"adddevlieuxselect\" class=\"form-control\" onchange=\"empLoadSalle(this.value,'adddevsalselect')\">
\t\t\t\t\t\t";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alllieux"]) ? $context["alllieux"] : $this->getContext($context, "alllieux")));
        foreach ($context['_seq'] as $context["_key"] => $context["lix"]) {
            // line 92
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
        // line 94
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Salles -->
\t\t\t\t  <div class=\"form-group dev-form-group\">
                    <label> Salles </label>
                    <select id=\"addempsalselect\" class=\"form-control\" >
\t\t\t\t\t\t";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allsalle"]) ? $context["allsalle"] : $this->getContext($context, "allsalle")));
        foreach ($context['_seq'] as $context["_key"] => $context["sal"]) {
            // line 103
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
        // line 105
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t   <!-- Jours -->
\t\t\t\t  <div class=\"form-group dev-form-group\">
                    <label> Jours </label>
                    <select id=\"adddevjourselect\" class=\"form-control\" >
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
                  <div class=\" form-group dev-form-group\">
                    <label> Heure Debut </label>
                    <select id=\"adddevhdebselect\" class=\"form-control\">
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
\t\t\t\t\t<select id=\"adddevmindebselect\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"00\">00M</option>
\t\t\t\t\t\t
\t\t\t\t\t\t<option value=\"15\">15M</option>
\t\t\t\t\t\t
\t\t\t\t\t\t<option value=\"30\">30M</option>
\t\t\t\t\t\t
\t\t\t\t\t\t<option value=\"45\">45M</option>
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Heure Fin -->
                  <div class=\"form-group dev-form-group\">
                    <label> Heure Fin </label>
                    <select id=\"adddevhfinselect\" class=\"form-control\">
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
\t\t\t\t\t<select id=\"adddevminfinselect\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"00\">00M</option>
\t\t\t\t\t\t
\t\t\t\t\t\t<option value=\"15\">15M</option>
\t\t\t\t\t\t
\t\t\t\t\t\t<option value=\"30\">30M</option>
\t\t\t\t\t\t
\t\t\t\t\t\t<option value=\"45\">45M</option>
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t     
\t\t\t\t  <!-- SHOW ERROR/SUCCESS MESSAGES -->
\t\t\t\t  <div class=\"dev-form-group\"> 
\t\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t  
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  
\t\t\t\t  <input type=\"text\" name=\"adddevtag\" value=\"addemp\" hidden>
\t\t\t\t  <input type=\"text\" name=\"adddevuserid\" value=\"";
        // line 193
        echo twig_escape_filter($this->env, (isset($context["session_id"]) ? $context["session_id"] : $this->getContext($context, "session_id")), "html", null, true);
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"adddevoir_url\" value=\"";
        // line 194
        echo $this->env->getExtension('routing')->getPath("pedagogie_adddevoir");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getfil_url\" value=\"";
        // line 195
        echo $this->env->getExtension('routing')->getPath("pedagogie_getdepfilieres");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getcls_url\" value=\"";
        // line 196
        echo $this->env->getExtension('routing')->getPath("pedagogie_getfilclasses");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getgrp_url\" value=\"";
        // line 197
        echo $this->env->getExtension('routing')->getPath("pedagogie_getclsgroupes");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getdis_url\" value=\"";
        // line 198
        echo $this->env->getExtension('routing')->getPath("pedagogie_getgrpdisciplines");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getmat_url\" value=\"";
        // line 199
        echo $this->env->getExtension('routing')->getPath("pedagogie_getdismatieres");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getens_url\" value=\"";
        // line 200
        echo $this->env->getExtension('routing')->getPath("pedagogie_getmatenseignants");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getnat_url\" value=\"";
        // line 201
        echo $this->env->getExtension('routing')->getPath("pedagogie_getmatnature");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getsal_url\" value=\"";
        // line 202
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
        
        $__internal_4dccad891de13c82d819cc90161fa4097450752ce05adafd7817479fbaad0107->leave($__internal_4dccad891de13c82d819cc90161fa4097450752ce05adafd7817479fbaad0107_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/rattrapage/adddevoirlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 202,  318 => 201,  314 => 200,  310 => 199,  306 => 198,  302 => 197,  298 => 196,  294 => 195,  290 => 194,  286 => 193,  196 => 105,  185 => 103,  181 => 102,  171 => 94,  160 => 92,  156 => 91,  117 => 54,  106 => 52,  102 => 51,  92 => 43,  81 => 41,  77 => 40,  66 => 31,  55 => 29,  51 => 28,  22 => 1,);
    }
}
/* <div class="fade modal text-center" id="adddevoir">*/
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
/* 					*/
/* 				*/
/*                */
/*                 */
/*                 <!-- FORM -->*/
/*                 <form id="adddevoirform" class="form-horizontal"  method="POST">*/
/*                   */
/* 				   <!-- Matieres -->*/
/*                   <div class="form-group dev-form-group">*/
/*                     <label> Matieres </label>*/
/*                     <select id="adddevmatselect" class="form-control" >*/
/* 					*/
/* 						{%for mat in allmatiere %}*/
/* 						<option value="{{ mat.id }}">{{ mat.matiere }}</option>*/
/* 						{% endfor %}*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Natures -->*/
/* 				  <div class="form-group emp-form-group">*/
/*                     <label> Nature </label>*/
/*                     <select id="adddevnatselect" class="form-control" >*/
/* 						{%for nat in allnature %}*/
/* 						<option value="{{ nat.id }}"> Devoir de {{ nat.description }}</option>*/
/* 						{% endfor %}*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/*                   <!-- Departements -->*/
/*                   <div class="form-group dev-form-group">*/
/*                     <label> Départements </label>*/
/*                     <select id="adddevdepselect" class="form-control" onchange="devLoadFiliere(this.value,'adddevfilselect')">*/
/* 						{%for dep in alldepartement %}*/
/* 						<option value="{{ dep.id }}">{{ dep.departement}}</option>*/
/* 						{% endfor %}*/
/* 					</select>*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Filieres -->*/
/*                   <div class="form-group dev-form-group">*/
/*                     <label> Filieres </label>*/
/*                     <select id="adddevfilselect" class="form-control" onchange="devLoadClasse(this.value,'adddevclsselect')">*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Classes -->*/
/*                   <div class="form-group dev-form-group">*/
/*                     <label> Classes </label>*/
/*                     <select id="adddevclsselect" class="form-control" onchange="devLoadGroupe(this.value,'adddevgrpselect')">*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Groupes -->*/
/*                   <div class="form-group dev-form-group">*/
/*                     <label> Groupes </label>*/
/*                     <select id="addempgrpselect" class="form-control" >*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  */
/* 				  */
/* 				   <!-- Lieux -->*/
/* 				  <div class="form-group dev-form-group">*/
/*                     <label> Lieux </label>*/
/*                     <select id="adddevlieuxselect" class="form-control" onchange="empLoadSalle(this.value,'adddevsalselect')">*/
/* 						{%for lix in alllieux %}*/
/* 						<option value="{{ lix.code }}">{{ lix.lieux }}</option>*/
/* 						{% endfor %}*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Salles -->*/
/* 				  <div class="form-group dev-form-group">*/
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
/* 				  <div class="form-group dev-form-group">*/
/*                     <label> Jours </label>*/
/*                     <select id="adddevjourselect" class="form-control" >*/
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
/*                   <div class=" form-group dev-form-group">*/
/*                     <label> Heure Debut </label>*/
/*                     <select id="adddevhdebselect" class="form-control">*/
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
/* 					<select id="adddevmindebselect" class="form-control">*/
/* 						<option value="00">00M</option>*/
/* 						*/
/* 						<option value="15">15M</option>*/
/* 						*/
/* 						<option value="30">30M</option>*/
/* 						*/
/* 						<option value="45">45M</option>*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Heure Fin -->*/
/*                   <div class="form-group dev-form-group">*/
/*                     <label> Heure Fin </label>*/
/*                     <select id="adddevhfinselect" class="form-control">*/
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
/* 					<select id="adddevminfinselect" class="form-control">*/
/* 						<option value="00">00M</option>*/
/* 						*/
/* 						<option value="15">15M</option>*/
/* 						*/
/* 						<option value="30">30M</option>*/
/* 						*/
/* 						<option value="45">45M</option>*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				     */
/* 				  <!-- SHOW ERROR/SUCCESS MESSAGES -->*/
/* 				  <div class="dev-form-group"> */
/* 						<span class="messages-block"></span>*/
/* 					</div>*/
/* 					*/
/* 					<div class="w3-clear"></div>*/
/* 				  */
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  */
/* 				  <input type="text" name="adddevtag" value="addemp" hidden>*/
/* 				  <input type="text" name="adddevuserid" value="{{ session_id }}" hidden>*/
/* 				  <input type="text" name="adddevoir_url" value="{{ path('pedagogie_adddevoir') }}" hidden>*/
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
