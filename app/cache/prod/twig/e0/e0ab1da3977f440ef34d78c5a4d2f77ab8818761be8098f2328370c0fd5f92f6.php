<?php

/* @PedagogiePedagogie/etudiant/emploi/updateemploilayout.html.twig */
class __TwigTemplate_32e3d6d6924f9010dc5024a5c1b18a20f46a262de4c41c271500ff6013ac8655 extends Twig_Template
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
        echo "<div id=\"update";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "id", array()), "html", null, true);
        echo "\" class=\"w3-container tabs w3-animate-zoom\">
\t\t<header class=\"w3-container\" style=\"padding-top:22px\">
\t\t\t<div class=\"w3-left\">
\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'emploilayout')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t</div>
\t\t\t\t<h3 class=\"text-center\"><b><i class=\"material-icons\">class</i> emploi - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "id", array()), "html", null, true);
        echo " </b></h3>
\t\t\t\t";
        // line 7
        if (((array_key_exists("session_id", $context) && ((isset($context["session_id"]) ? $context["session_id"] : null) != null)) && ((isset($context["typeuser"]) ? $context["typeuser"] : null) == "admin"))) {
            // line 8
            echo "\t\t\t
\t\t\t\t";
        }
        // line 10
        echo "\t\t</header>
\t\t

\t\t<div class=\"w3-clear\"></div>
\t\t
\t\t<div class=\"container-fluid text-center\">
              <div class=\"col-sm-10 col-md-offset-1\" >
                <!-- PAGE TITLE -->
                
                  <h4>
                    <span ></span> </h4>
\t\t\t\t\t
\t\t\t\t\t<!-- SHOW ERROR/SUCCESS MESSAGES -->
\t\t\t\t
                <div class=\"emp-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
               
                <!-- FORM -->
                <form name=\"form";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "id", array()), "html", null, true);
        echo "\"  method=\"POST\" onsubmit=\"updateEmploi(event,'form";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "id", array()), "html", null, true);
        echo "')\" >
\t\t\t\t
                  <!-- Departements -->
                  <div class=\"emp-form-group\">
                    <label> Départements </label>
                    <select id=\"depselect\" onchange=\"loadFiliere(this.value,'filselect')\">
\t\t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
            // line 36
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "departement", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "departement", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Filieres -->
                  <div class=\"emp-form-group\">
                    <label> Filieres </label>
                    <select id=\"filselect\" onchange=\"loadClasse(this.value,'clsselect')\">
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Classes -->
                  <div class=\"emp-form-group\">
                    <label> Classes </label>
                    <select id=\"clsselect\" onchange=\"loadGroupe(this.value,'grpselect')\">
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Groupes -->
                  <div class=\"emp-form-group\">
                    <label> Groupes </label>
                    <select id=\"grpselect\" onchange=\"loadDiscipline(this.value,'disselect')\">
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Disciplines -->
                  <div class=\"emp-form-group\">
                    <label> Disciplines </label>
                    <select id=\"disselect\" onchange=\"loadMatiere(this.value,'matselect')\">
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  
\t\t\t\t  <!-- Matieres -->
                  <div class=\"emp-form-group\">
                    <label> Matieres </label>
                    <select id=\"matselect\" onchange=\"loadEnseignant(this.value,'ensselect')\">
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Enseignant -->
\t\t\t\t  <div class=\"emp-form-group\">
                    <label> Enseignants </label>
                    <select id=\"ensselect\" >
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Salles -->
\t\t\t\t  <div class=\"emp-form-group\">
                    <label> Salles </label>
                    <select id=\"salselect\" >
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Heure Debut -->
                  <div class=\"emp-form-group\">
                    <label> Heure Debut </label>
                    <select id=\"hdebselect\">
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
\t\t\t\t\t<select id=\"mindebselect\">
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
                  <div class=\"emp-form-group\">
                    <label> Heure Fin </label>
                    <select id=\"hfinselect\">
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
\t\t\t\t\t<select id=\"minfinselect\">
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
\t\t\t\t  
\t\t\t\t  
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  
\t\t\t\t  <input type=\"text\" name=\"updemptag\" value=\"updateemp\" hidden>
\t\t\t\t  <input type=\"text\" name=\"oldempname\" value=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : null), "id", array()), "html", null, true);
        echo "\" hidden>
\t\t\t\t   <input type=\"text\" name=\"delemploi_url\" value=\"";
        // line 180
        echo $this->env->getExtension('routing')->getPath("pedagogie_deleteemploi");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"updateemploi_url\" value=\"";
        // line 181
        echo $this->env->getExtension('routing')->getPath("pedagogie_updateemploi");
        echo "\" hidden>
                  <!-- SUBMIT BUTTON -->
                  <button type=\"submit\" class=\"btn btn-success btn-lg btn-block\">
                    Enregistrer Les modifications <i class=\"glyphicon glyphicon-save\"></i> </button>
\t\t\t\t\t
                </form>
              </div>
\t\t\t  </div>
\t\t\t\t
\t\t
\t
\t</div>
";
    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/etudiant/emploi/updateemploilayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 181,  232 => 180,  228 => 179,  85 => 38,  74 => 36,  70 => 35,  59 => 29,  38 => 10,  34 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* <div id="update{{ emp.id }}" class="w3-container tabs w3-animate-zoom">*/
/* 		<header class="w3-container" style="padding-top:22px">*/
/* 			<div class="w3-left">*/
/* 				<a href="#" onclick="closeMenu(event, 'emploilayout')"  class="w3-btn btn btn-info tablink"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 			</div>*/
/* 				<h3 class="text-center"><b><i class="material-icons">class</i> emploi - {{ emp.id }} </b></h3>*/
/* 				{% if session_id is defined and session_id != null and typeuser == "admin" %}*/
/* 			*/
/* 				{% endif %}*/
/* 		</header>*/
/* 		*/
/* */
/* 		<div class="w3-clear"></div>*/
/* 		*/
/* 		<div class="container-fluid text-center">*/
/*               <div class="col-sm-10 col-md-offset-1" >*/
/*                 <!-- PAGE TITLE -->*/
/*                 */
/*                   <h4>*/
/*                     <span ></span> </h4>*/
/* 					*/
/* 					<!-- SHOW ERROR/SUCCESS MESSAGES -->*/
/* 				*/
/*                 <div class="emp-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/*                */
/*                 <!-- FORM -->*/
/*                 <form name="form{{ emp.id }}"  method="POST" onsubmit="updateEmploi(event,'form{{ emp.id }}')" >*/
/* 				*/
/*                   <!-- Departements -->*/
/*                   <div class="emp-form-group">*/
/*                     <label> Départements </label>*/
/*                     <select id="depselect" onchange="loadFiliere(this.value,'filselect')">*/
/* 						{%for dep in alldepartement %}*/
/* 						<option value="{{ dep.departement }}">{{ dep.departement}}</option>*/
/* 						{% endfor %}*/
/* 					</select>*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Filieres -->*/
/*                   <div class="emp-form-group">*/
/*                     <label> Filieres </label>*/
/*                     <select id="filselect" onchange="loadClasse(this.value,'clsselect')">*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Classes -->*/
/*                   <div class="emp-form-group">*/
/*                     <label> Classes </label>*/
/*                     <select id="clsselect" onchange="loadGroupe(this.value,'grpselect')">*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Groupes -->*/
/*                   <div class="emp-form-group">*/
/*                     <label> Groupes </label>*/
/*                     <select id="grpselect" onchange="loadDiscipline(this.value,'disselect')">*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Disciplines -->*/
/*                   <div class="emp-form-group">*/
/*                     <label> Disciplines </label>*/
/*                     <select id="disselect" onchange="loadMatiere(this.value,'matselect')">*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  */
/* 				  <!-- Matieres -->*/
/*                   <div class="emp-form-group">*/
/*                     <label> Matieres </label>*/
/*                     <select id="matselect" onchange="loadEnseignant(this.value,'ensselect')">*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Enseignant -->*/
/* 				  <div class="emp-form-group">*/
/*                     <label> Enseignants </label>*/
/*                     <select id="ensselect" >*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Salles -->*/
/* 				  <div class="emp-form-group">*/
/*                     <label> Salles </label>*/
/*                     <select id="salselect" >*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Heure Debut -->*/
/*                   <div class="emp-form-group">*/
/*                     <label> Heure Debut </label>*/
/*                     <select id="hdebselect">*/
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
/* 					<select id="mindebselect">*/
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
/*                   <div class="emp-form-group">*/
/*                     <label> Heure Fin </label>*/
/*                     <select id="hfinselect">*/
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
/* 					<select id="minfinselect">*/
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
/* 				  */
/* 				  */
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  */
/* 				  <input type="text" name="updemptag" value="updateemp" hidden>*/
/* 				  <input type="text" name="oldempname" value="{{ emp.id }}" hidden>*/
/* 				   <input type="text" name="delemploi_url" value="{{ path('pedagogie_deleteemploi') }}" hidden>*/
/* 				  <input type="text" name="updateemploi_url" value="{{ path('pedagogie_updateemploi') }}" hidden>*/
/*                   <!-- SUBMIT BUTTON -->*/
/*                   <button type="submit" class="btn btn-success btn-lg btn-block">*/
/*                     Enregistrer Les modifications <i class="glyphicon glyphicon-save"></i> </button>*/
/* 					*/
/*                 </form>*/
/*               </div>*/
/* 			  </div>*/
/* 				*/
/* 		*/
/* 	*/
/* 	</div>*/
/* */
