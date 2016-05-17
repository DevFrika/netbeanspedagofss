<?php

/* PedagogiePedagogieBundle:admin/groupe:updategroupelayout.html.twig */
class __TwigTemplate_afc49c5c646e4ab9e5a9a7572a3920bde4af65d95be7a21b96da537672a866b6 extends Twig_Template
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
        echo "<div id=\"updategrp";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : null), "id", array()), "html", null, true);
        echo "\" class=\"w3-container tabs w3-animate-zoom\">

\t\t<header class=\"w3-container\" style=\"padding-top:22px\">
\t\t\t<div class=\"w3-left\">
\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'groupelayout')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t</div>
\t\t\t\t<h3 class=\"text-center\"><b><i class=\"material-icons\">class</i> groupe - ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : null), "groupe", array()), "html", null, true);
        echo " </b></h3>
\t\t\t\t";
        // line 8
        if (((array_key_exists("session_id", $context) && ((isset($context["session_id"]) ? $context["session_id"] : null) != null)) && ((isset($context["typeuser"]) ? $context["typeuser"] : null) == "admin"))) {
            // line 9
            echo "\t\t\t
\t\t\t\t";
        }
        // line 11
        echo "\t\t</header>
\t\t

\t\t<div class=\"w3-clear\"></div>
\t\t
\t\t<div class=\"container-fluid text-center\">
\t\t
              <div class=\"col-sm-10 col-md-offset-1\" >
                <!-- PAGE TITLE -->
                
                  <h4>
                    <span ></span> </h4>
\t\t\t\t\t
               
                <!-- FORM -->
                <form name=\"updgrpform";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : null), "id", array()), "html", null, true);
        echo "\"  method=\"POST\" onsubmit=\"updateGroupe(event,'updgrpform";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : null), "id", array()), "html", null, true);
        echo "','";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : null), "id", array()), "html", null, true);
        echo "')\" >
                 
\t\t\t\t <div class=\"form-group grp-form-group\">
                    <label> Département du groupe </label>
                    <select id=\"updgrpdepselect";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : null), "id", array()), "html", null, true);
        echo "\" class=\"form-control\" onchange=\"grpLoadFiliere(this.value,'updfilgrpselect";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : null), "id", array()), "html", null, true);
        echo "')\">
\t\t\t\t\t\t<option value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grp"]) ? $context["grp"] : null), "departement", array()), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grp"]) ? $context["grp"] : null), "departement", array()), "departement", array()), "html", null, true);
        echo "</option>
\t\t\t\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
            // line 33
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["grp"]) ? $context["grp"] : null), "departement", array()), "id", array()) != $this->getAttribute($context["dep"], "id", array()))) {
                // line 34
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "departement", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Filieres -->
                  <div class=\"form-group grp-form-group\">
                    <label> Filieres du groupe </label>
                    <select id=\"updgrpfilselect";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : null), "id", array()), "html", null, true);
        echo "\" class=\"form-control\" onchange=\"grpLoadClasse(this.value,'updclsgrpselect";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : null), "id", array()), "html", null, true);
        echo "')\">
\t\t\t\t\t\t<option value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grp"]) ? $context["grp"] : null), "filiere", array()), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grp"]) ? $context["grp"] : null), "filiere", array()), "filiere", array()), "html", null, true);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Classes -->
                  <div class=\"form-group grp-form-group\">
                    <label> Classe du groupe </label>
                    <select id=\"updgrpclsselect";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : null), "id", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grp"]) ? $context["grp"] : null), "classe", array()), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["grp"]) ? $context["grp"] : null), "classe", array()), "classe", array()), "html", null, true);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t
                  <!-- Nom -->
                  <div class=\"form-group grp-form-group\">
                    <label> Nom du Groupe </label>
                    <input type=\"text\" name=\"updnomgroupe\" class=\"form-control\" placeholder=\"Nom du groupe\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : null), "groupe", array()), "html", null, true);
        echo "\">
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t
\t\t\t\t
\t\t\t<!-- SHOW ERROR/SUCCESS MESSAGES -->
\t\t\t\t
                <div class=\"form-group grp-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t  <input type=\"text\" name=\"updgrptag\" value=\"updategrp\" hidden>
\t\t\t\t  <input type=\"text\" name=\"oldgrpname\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grp"]) ? $context["grp"] : null), "groupe", array()), "html", null, true);
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getfil_url\" value=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("pedagogie_getdepfilieres");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getcls_url\" value=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("pedagogie_getfilclasses");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"updategroupe_url\" value=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("pedagogie_updategroupe");
        echo "\" hidden>
                  <!-- SUBMIT BUTTON -->
                  <button type=\"submit\" class=\"btn btn-success btn-lg btn-block\">
                    Enregistrer <i class=\"glyphicon glyphicon-save\"></i> </button>
                </form>
\t\t\t\t
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
        return "PedagogiePedagogieBundle:admin/groupe:updategroupelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 77,  168 => 76,  164 => 75,  160 => 74,  145 => 62,  132 => 54,  128 => 53,  115 => 45,  109 => 44,  100 => 37,  94 => 36,  86 => 34,  83 => 33,  79 => 32,  73 => 31,  67 => 30,  56 => 26,  39 => 11,  35 => 9,  33 => 8,  29 => 7,  19 => 1,);
    }
}
/* <div id="updategrp{{ grp.id }}" class="w3-container tabs w3-animate-zoom">*/
/* */
/* 		<header class="w3-container" style="padding-top:22px">*/
/* 			<div class="w3-left">*/
/* 				<a href="#" onclick="closeMenu(event, 'groupelayout')"  class="w3-btn btn btn-info tablink"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 			</div>*/
/* 				<h3 class="text-center"><b><i class="material-icons">class</i> groupe - {{ grp.groupe }} </b></h3>*/
/* 				{% if session_id is defined and session_id != null and typeuser == "admin" %}*/
/* 			*/
/* 				{% endif %}*/
/* 		</header>*/
/* 		*/
/* */
/* 		<div class="w3-clear"></div>*/
/* 		*/
/* 		<div class="container-fluid text-center">*/
/* 		*/
/*               <div class="col-sm-10 col-md-offset-1" >*/
/*                 <!-- PAGE TITLE -->*/
/*                 */
/*                   <h4>*/
/*                     <span ></span> </h4>*/
/* 					*/
/*                */
/*                 <!-- FORM -->*/
/*                 <form name="updgrpform{{ grp.id }}"  method="POST" onsubmit="updateGroupe(event,'updgrpform{{ grp.id }}','{{ grp.id }}')" >*/
/*                  */
/* 				 <div class="form-group grp-form-group">*/
/*                     <label> Département du groupe </label>*/
/*                     <select id="updgrpdepselect{{ grp.id }}" class="form-control" onchange="grpLoadFiliere(this.value,'updfilgrpselect{{ grp.id }}')">*/
/* 						<option value="{{ grp.departement.id }}">{{ grp.departement.departement}}</option>*/
/* 						{%for dep in alldepartement %}*/
/* 							{% if grp.departement.id != dep.id %}*/
/* 							<option value="{{ dep.id }}">{{ dep.departement}}</option>*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 					</select>*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Filieres -->*/
/*                   <div class="form-group grp-form-group">*/
/*                     <label> Filieres du groupe </label>*/
/*                     <select id="updgrpfilselect{{ grp.id }}" class="form-control" onchange="grpLoadClasse(this.value,'updclsgrpselect{{ grp.id }}')">*/
/* 						<option value="{{ grp.filiere.id }}">{{ grp.filiere.filiere }}</option>*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Classes -->*/
/*                   <div class="form-group grp-form-group">*/
/*                     <label> Classe du groupe </label>*/
/*                     <select id="updgrpclsselect{{ grp.id }}" class="form-control">*/
/* 						<option value="{{ grp.classe.id }}">{{ grp.classe.classe }}</option>*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				*/
/*                   <!-- Nom -->*/
/*                   <div class="form-group grp-form-group">*/
/*                     <label> Nom du Groupe </label>*/
/*                     <input type="text" name="updnomgroupe" class="form-control" placeholder="Nom du groupe" value="{{ grp.groupe }}">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				*/
/* 				*/
/* 			<!-- SHOW ERROR/SUCCESS MESSAGES -->*/
/* 				*/
/*                 <div class="form-group grp-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/* 				*/
/* 				  <input type="text" name="updgrptag" value="updategrp" hidden>*/
/* 				  <input type="text" name="oldgrpname" value="{{ grp.groupe }}" hidden>*/
/* 				  <input type="text" name="getfil_url" value="{{ path('pedagogie_getdepfilieres') }}" hidden>*/
/* 				  <input type="text" name="getcls_url" value="{{ path('pedagogie_getfilclasses') }}" hidden>*/
/* 				  <input type="text" name="updategroupe_url" value="{{ path('pedagogie_updategroupe') }}" hidden>*/
/*                   <!-- SUBMIT BUTTON -->*/
/*                   <button type="submit" class="btn btn-success btn-lg btn-block">*/
/*                     Enregistrer <i class="glyphicon glyphicon-save"></i> </button>*/
/*                 </form>*/
/* 				*/
/*               </div>*/
/* 			  </div>*/
/* 				*/
/* 		*/
/* 	*/
/* 	</div>*/
/* */
