<?php

/* PedagogiePedagogieBundle:etudiant/devoir:updatedevoirlayout.html.twig */
class __TwigTemplate_1a5da3dbdf1b7554e6b0bc556cb6354f0e71600060a1a3acbe39007793aada02 extends Twig_Template
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
        $__internal_d7a1907f7a481e11df07fa65513f17b8757ef5f8207f26dd12176dd8d7b5974f = $this->env->getExtension("native_profiler");
        $__internal_d7a1907f7a481e11df07fa65513f17b8757ef5f8207f26dd12176dd8d7b5974f->enter($__internal_d7a1907f7a481e11df07fa65513f17b8757ef5f8207f26dd12176dd8d7b5974f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:etudiant/devoir:updatedevoirlayout.html.twig"));

        // line 1
        echo "<div id=\"updatedev";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dev"]) ? $context["dev"] : $this->getContext($context, "dev")), "devoir", array()), "html", null, true);
        echo "\" class=\"w3-container tabs w3-animate-zoom\">
\t\t<header class=\"w3-container\" style=\"padding-top:22px\">
\t\t\t<div class=\"w3-left\">
\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'devoirlayout')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t</div>
\t\t\t\t<h3 class=\"text-center\"><b><i class=\"material-icons\">class</i> devoir - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dev"]) ? $context["dev"] : $this->getContext($context, "dev")), "devoir", array()), "html", null, true);
        echo " </b></h3>
\t\t\t\t
\t\t</header>
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
                <div class=\"dev-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
               
                <!-- FORM -->
                <form name=\"form";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dev"]) ? $context["dev"] : $this->getContext($context, "dev")), "devoir", array()), "html", null, true);
        echo "\"  method=\"POST\" onsubmit=\"updateDevoir(event,'form";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dev"]) ? $context["dev"] : $this->getContext($context, "dev")), "devoir", array()), "html", null, true);
        echo "')\" >
\t\t\t\t
                  <!-- Departements -->
                  <div class=\"dev-form-group\">
                    <label> Départements </label>
                    <select id=\"depselect\" onchange=\"loadFiliere(this.value,'filselect')\">
\t\t\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : $this->getContext($context, "alldepartement")));
        foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
            // line 34
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
        // line 36
        echo "\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Filieres -->
                  <div class=\"dev-form-group\">
                    <label> Filieres </label>
                    <select id=\"filselect\" onchange=\"loadClasse(this.value,'clsselect')\">
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Classes -->
                  <div class=\"dev-form-group\">
                    <label> Classes </label>
                    <select id=\"clsselect\" onchange=\"loadGroupe(this.value,'grpselect')\">
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Groupes -->
                  <div class=\"dev-form-group\">
                    <label> Groupes </label>
                    <select id=\"grpselect\" onchange=\"loadDiscipline(this.value,'disselect')\">
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Disciplines -->
                  <div class=\"dev-form-group\">
                    <label> Disciplines </label>
                    <select id=\"disselect\" onchange=\"loadMatiere(this.value,'matselect')\">
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  
\t\t\t\t  <!-- Matieres -->
                  <div class=\"dev-form-group\">
                    <label> Matieres </label>
                    <select id=\"matselect\" onchange=\"loadEnseignant(this.value,'ensselect')\">
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Enseignant -->
\t\t\t\t  <div class=\"dev-form-group\">
                    <label> Enseignants </label>
                    <select id=\"ensselect\" >
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Salles -->
\t\t\t\t  <div class=\"dev-form-group\">
                    <label> Salles </label>
                    <select id=\"salselect\" >
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Heure Debut -->
                  <div class=\"dev-form-group\">
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
                  <div class=\"dev-form-group\">
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
\t\t\t\t  <input type=\"text\" name=\"upddevtag\" value=\"updatedev\" hidden>
\t\t\t\t  <input type=\"text\" name=\"olddevname\" value=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dev"]) ? $context["dev"] : $this->getContext($context, "dev")), "devoir", array()), "html", null, true);
        echo "\" hidden>
\t\t\t\t   <input type=\"text\" name=\"deldevoir_url\" value=\"";
        // line 178
        echo $this->env->getExtension('routing')->getPath("pedagogie_deletedevoir");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"updatedevoir_url\" value=\"";
        // line 179
        echo $this->env->getExtension('routing')->getPath("pedagogie_updatedevoir");
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
        
        $__internal_d7a1907f7a481e11df07fa65513f17b8757ef5f8207f26dd12176dd8d7b5974f->leave($__internal_d7a1907f7a481e11df07fa65513f17b8757ef5f8207f26dd12176dd8d7b5974f_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:etudiant/devoir:updatedevoirlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 179,  228 => 178,  224 => 177,  81 => 36,  70 => 34,  66 => 33,  55 => 27,  31 => 6,  22 => 1,);
    }
}
/* <div id="updatedev{{ dev.devoir }}" class="w3-container tabs w3-animate-zoom">*/
/* 		<header class="w3-container" style="padding-top:22px">*/
/* 			<div class="w3-left">*/
/* 				<a href="#" onclick="closeMenu(event, 'devoirlayout')"  class="w3-btn btn btn-info tablink"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 			</div>*/
/* 				<h3 class="text-center"><b><i class="material-icons">class</i> devoir - {{ dev.devoir }} </b></h3>*/
/* 				*/
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
/*                 <div class="dev-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/*                */
/*                 <!-- FORM -->*/
/*                 <form name="form{{ dev.devoir }}"  method="POST" onsubmit="updateDevoir(event,'form{{ dev.devoir }}')" >*/
/* 				*/
/*                   <!-- Departements -->*/
/*                   <div class="dev-form-group">*/
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
/*                   <div class="dev-form-group">*/
/*                     <label> Filieres </label>*/
/*                     <select id="filselect" onchange="loadClasse(this.value,'clsselect')">*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Classes -->*/
/*                   <div class="dev-form-group">*/
/*                     <label> Classes </label>*/
/*                     <select id="clsselect" onchange="loadGroupe(this.value,'grpselect')">*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Groupes -->*/
/*                   <div class="dev-form-group">*/
/*                     <label> Groupes </label>*/
/*                     <select id="grpselect" onchange="loadDiscipline(this.value,'disselect')">*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Disciplines -->*/
/*                   <div class="dev-form-group">*/
/*                     <label> Disciplines </label>*/
/*                     <select id="disselect" onchange="loadMatiere(this.value,'matselect')">*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  */
/* 				  <!-- Matieres -->*/
/*                   <div class="dev-form-group">*/
/*                     <label> Matieres </label>*/
/*                     <select id="matselect" onchange="loadEnseignant(this.value,'ensselect')">*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Enseignant -->*/
/* 				  <div class="dev-form-group">*/
/*                     <label> Enseignants </label>*/
/*                     <select id="ensselect" >*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Salles -->*/
/* 				  <div class="dev-form-group">*/
/*                     <label> Salles </label>*/
/*                     <select id="salselect" >*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Heure Debut -->*/
/*                   <div class="dev-form-group">*/
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
/*                   <div class="dev-form-group">*/
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
/* 				  <input type="text" name="upddevtag" value="updatedev" hidden>*/
/* 				  <input type="text" name="olddevname" value="{{ dev.devoir }}" hidden>*/
/* 				   <input type="text" name="deldevoir_url" value="{{ path('pedagogie_deletedevoir') }}" hidden>*/
/* 				  <input type="text" name="updatedevoir_url" value="{{ path('pedagogie_updatedevoir') }}" hidden>*/
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