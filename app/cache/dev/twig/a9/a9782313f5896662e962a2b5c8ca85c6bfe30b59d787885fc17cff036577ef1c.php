<?php

/* @PedagogiePedagogie/admin/enseignant/updateenseignantlayout.html.twig */
class __TwigTemplate_6497f088de0d8d48a50b54d86bbd0a1da0ae016a82c3feb52f4ac9e983888d4d extends Twig_Template
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
        $__internal_1990d5665ad4f2d234553b48fababdd9a47666d28ddd33a012fbb90c9a729a33 = $this->env->getExtension("native_profiler");
        $__internal_1990d5665ad4f2d234553b48fababdd9a47666d28ddd33a012fbb90c9a729a33->enter($__internal_1990d5665ad4f2d234553b48fababdd9a47666d28ddd33a012fbb90c9a729a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/admin/enseignant/updateenseignantlayout.html.twig"));

        // line 1
        echo "<div id=\"updateens";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "id", array()), "html", null, true);
        echo "\" class=\"tabs w3-container w3-section w3-animate-left w3-teal\" >
\t\t<header class=\"w3-container\" style=\"padding-top:22px\">
\t\t\t<div class=\"w3-left\">
\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'enseignantlayout')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t</div>
\t\t\t\t<h3 class=\"text-center\"><b><i class=\"material-icons\">class</i> enseignant - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "enseignant", array()), "html", null, true);
        echo " </b></h3>
\t\t</header>
\t\t

\t\t<div class=\"w3-clear\"></div>
\t\t
\t\t<div class=\"container-fluid text-center\">
              <div class=\"col-lg-10 col-md-offset-1\" >
                <!-- PAGE TITLE -->
                
                  <h4>
                    <span ></span> </h4>
\t\t\t\t\t
\t\t\t\t\t<!-- SHOW ERROR/SUCCESS MESSAGES -->
\t\t\t\t
                <div class=\" form-groupens-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
               
                <!-- FORM -->
                <form class=\"form-horizontal ens-form-group\" name=\"form";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "enseignant", array()), "html", null, true);
        echo "\"  method=\"POST\" onsubmit=\"updateEnseignant(event,'form";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "enseignant", array()), "html", null, true);
        echo "','";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "id", array()), "html", null, true);
        echo "')\" role=\"form\">
\t\t\t\t
                  <!-- Family Name -->
                  <div id=\"ens_username-group\" class=\"form-group ens-form-group\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"updens_famname\" class=\"form-control\" placeholder=\" \" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "utilisateur", array()), "nom", array()), "html", null, true);
        echo "\"> 
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t
\t\t\t\t<!-- Surname -->
                  <div id=\"ens_username-group\" class=\"form-group ens-form-group\">
                    <label> Prénom </label>
                    <input type=\"text\" name=\"updens_surname\" class=\"form-control\" placeholder=\" \" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "utilisateur", array()), "prenom", array()), "html", null, true);
        echo "\"> 
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t
\t\t\t\t<!-- Username -->
                  <div id=\"ens_username-group\" class=\"form-group ens-form-group\">
                    <label> Username </label>
                    <input type=\"text\" name=\"updens_username\" class=\"form-control\"  placeholder=\" \" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "utilisateur", array()), "username", array()), "html", null, true);
        echo "\"> 
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
                  <!-- E-mail -->
                  <div id=\"ens_email-group\" class=\"form-group ens-form-group\">
                    <label> E-mail </label>
                    <input type=\"email\" name=\"updens_email\" class=\"form-control\" placeholder=\" \" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "utilisateur", array()), "email", array()), "html", null, true);
        echo "\" >
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
                  <!-- Departements -->
                  <div class=\"form-group ens-form-group\">
                    <label> Départements </label>
                    <select id=\"updensdepselect";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "id", array()), "html", null, true);
        echo "\" class=\"form-control\" >
\t\t\t\t\t<option value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "departement", array()), "departement", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "departement", array()), "departement", array()), "html", null, true);
        echo "</option>
\t\t\t\t\t\t";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : $this->getContext($context, "alldepartement")));
        foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
            // line 62
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["dep"], "departement", array()) != $this->getAttribute($this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "departement", array()), "departement", array()))) {
                // line 63
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "departement", array()), "html", null, true);
                echo "\" > ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "departement", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Situations -->
                  <div class=\"form-group ens-form-group\">
                    <label> Situation </label>
                    <select id=\"updenssitselect";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "id", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t\t<option value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "situation", array()), "situations", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "situation", array()), "situations", array()), "html", null, true);
        echo "</option>
\t\t\t\t\t\t";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allsituation"]) ? $context["allsituation"] : $this->getContext($context, "allsituation")));
        foreach ($context['_seq'] as $context["_key"] => $context["sit"]) {
            // line 76
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["sit"], "situations", array()) != $this->getAttribute($this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "situation", array()), "situations", array()))) {
                // line 77
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sit"], "situations", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sit"], "situations", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            // line 79
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Grade -->
                  <div class=\"form-group ens-form-group\">
                    <label> Grade </label>
                    <select id=\"updensgrdselect";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "id", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "grade", array()), "code", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "grade", array()), "grades", array()), "html", null, true);
        echo "</option>
\t\t\t\t\t\t";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allgrade"]) ? $context["allgrade"] : $this->getContext($context, "allgrade")));
        foreach ($context['_seq'] as $context["_key"] => $context["grd"]) {
            // line 90
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["grd"], "grades", array()) != $this->getAttribute($this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "grade", array()), "grades", array()))) {
                // line 91
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["grd"], "code", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["grd"], "grades", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            // line 93
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  
\t\t\t\t 
\t\t\t\t  <input type=\"text\" name=\"updenstag\" value=\"updateens\" hidden>
\t\t\t\t  <input type=\"text\" name=\"oldensname\" value=\" ";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ens"]) ? $context["ens"] : $this->getContext($context, "ens")), "id", array()), "html", null, true);
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"updateenseignant_url\" value=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("pedagogie_updateenseignant");
        echo "\" hidden>
\t\t\t\t  
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
        
        $__internal_1990d5665ad4f2d234553b48fababdd9a47666d28ddd33a012fbb90c9a729a33->leave($__internal_1990d5665ad4f2d234553b48fababdd9a47666d28ddd33a012fbb90c9a729a33_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/enseignant/updateenseignantlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 106,  230 => 105,  217 => 94,  211 => 93,  203 => 91,  200 => 90,  196 => 89,  190 => 88,  186 => 87,  177 => 80,  171 => 79,  163 => 77,  160 => 76,  156 => 75,  150 => 74,  146 => 73,  137 => 66,  131 => 65,  123 => 63,  120 => 62,  116 => 61,  110 => 60,  106 => 59,  96 => 52,  86 => 45,  76 => 38,  66 => 31,  54 => 26,  31 => 6,  22 => 1,);
    }
}
/* <div id="updateens{{ ens.id }}" class="tabs w3-container w3-section w3-animate-left w3-teal" >*/
/* 		<header class="w3-container" style="padding-top:22px">*/
/* 			<div class="w3-left">*/
/* 				<a href="#" onclick="closeMenu(event, 'enseignantlayout')"  class="w3-btn btn btn-info tablink"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 			</div>*/
/* 				<h3 class="text-center"><b><i class="material-icons">class</i> enseignant - {{ ens.enseignant }} </b></h3>*/
/* 		</header>*/
/* 		*/
/* */
/* 		<div class="w3-clear"></div>*/
/* 		*/
/* 		<div class="container-fluid text-center">*/
/*               <div class="col-lg-10 col-md-offset-1" >*/
/*                 <!-- PAGE TITLE -->*/
/*                 */
/*                   <h4>*/
/*                     <span ></span> </h4>*/
/* 					*/
/* 					<!-- SHOW ERROR/SUCCESS MESSAGES -->*/
/* 				*/
/*                 <div class=" form-groupens-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/*                */
/*                 <!-- FORM -->*/
/*                 <form class="form-horizontal ens-form-group" name="form{{ ens.enseignant }}"  method="POST" onsubmit="updateEnseignant(event,'form{{ ens.enseignant }}','{{ ens.id }}')" role="form">*/
/* 				*/
/*                   <!-- Family Name -->*/
/*                   <div id="ens_username-group" class="form-group ens-form-group">*/
/*                     <label> Nom </label>*/
/*                     <input type="text" name="updens_famname" class="form-control" placeholder=" " value="{{ ens.utilisateur.nom }}"> */
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				*/
/* 				<!-- Surname -->*/
/*                   <div id="ens_username-group" class="form-group ens-form-group">*/
/*                     <label> Prénom </label>*/
/*                     <input type="text" name="updens_surname" class="form-control" placeholder=" " value="{{ ens.utilisateur.prenom }}"> */
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				*/
/* 				<!-- Username -->*/
/*                   <div id="ens_username-group" class="form-group ens-form-group">*/
/*                     <label> Username </label>*/
/*                     <input type="text" name="updens_username" class="form-control"  placeholder=" " value="{{ ens.utilisateur.username }}"> */
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/*                   <!-- E-mail -->*/
/*                   <div id="ens_email-group" class="form-group ens-form-group">*/
/*                     <label> E-mail </label>*/
/*                     <input type="email" name="updens_email" class="form-control" placeholder=" " value="{{ ens.utilisateur.email }}" >*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/*                   <!-- Departements -->*/
/*                   <div class="form-group ens-form-group">*/
/*                     <label> Départements </label>*/
/*                     <select id="updensdepselect{{ ens.id }}" class="form-control" >*/
/* 					<option value="{{ ens.departement.departement  }}">{{ ens.departement.departement  }}</option>*/
/* 						{%for dep in alldepartement %}*/
/* 							{% if dep.departement != ens.departement.departement  %}*/
/* 							<option value="{{ dep.departement }}" > {{ dep.departement}}</option>*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 					</select>*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Situations -->*/
/*                   <div class="form-group ens-form-group">*/
/*                     <label> Situation </label>*/
/*                     <select id="updenssitselect{{ ens.id }}" class="form-control">*/
/* 					<option value="{{ ens.situation.situations }}">{{ ens.situation.situations }}</option>*/
/* 						{%for sit in allsituation %}*/
/* 							{% if sit.situations != ens.situation.situations  %}*/
/* 							<option value="{{ sit.situations }}">{{ sit.situations }}</option>*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 					</select>*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Grade -->*/
/*                   <div class="form-group ens-form-group">*/
/*                     <label> Grade </label>*/
/*                     <select id="updensgrdselect{{ ens.id }}" class="form-control">*/
/* 						<option value="{{ ens.grade.code }}">{{ ens.grade.grades }}</option>*/
/* 						{%for grd in allgrade %}*/
/* 							{% if grd.grades != ens.grade.grades  %}*/
/* 							<option value="{{ grd.code }}">{{ grd.grades }}</option>*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 					</select>*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  */
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  */
/* 				 */
/* 				  <input type="text" name="updenstag" value="updateens" hidden>*/
/* 				  <input type="text" name="oldensname" value=" {{ ens.id }}" hidden>*/
/* 				  <input type="text" name="updateenseignant_url" value="{{ path('pedagogie_updateenseignant') }}" hidden>*/
/* 				  */
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
