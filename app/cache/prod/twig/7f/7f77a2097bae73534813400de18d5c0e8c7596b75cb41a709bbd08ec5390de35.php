<?php

/* @PedagogiePedagogie/normal/classe/updateclasselayout.html.twig */
class __TwigTemplate_edbf61c4c6c76f223bb0021f698fca7e86bc733f76125e2e8c547e3792354b6a extends Twig_Template
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
        echo "<div id=\"updatecls";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cls"]) ? $context["cls"] : null), "classe", array()), "html", null, true);
        echo "\" class=\"w3-container tabs w3-animate-zoom\">
\t\t<header class=\"w3-container\" style=\"padding-top:22px\">
\t\t\t<div class=\"w3-left\">
\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'classelayout')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t</div>
\t\t\t\t<h3 class=\"text-center\"><b><i class=\"material-icons\">class</i> classe - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cls"]) ? $context["cls"] : null), "classe", array()), "html", null, true);
        echo " </b></h3>
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
                <div class=\"emp-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
               
                <!-- FORM -->
                <form name=\"form";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cls"]) ? $context["cls"] : null), "classe", array()), "html", null, true);
        echo "\"  method=\"POST\" onsubmit=\"updateClasse(event,'form";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cls"]) ? $context["cls"] : null), "classe", array()), "html", null, true);
        echo "')\" >
\t\t\t\t
                  <!-- Departements -->
                  <div class=\"emp-form-group\">
                    <label> Départements </label>
                    <select id=\"depselect\" onchange=\"loadFiliere(this.value,'filselect')\">
\t\t\t\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
            // line 33
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
        // line 35
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
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  
\t\t\t\t  <input type=\"text\" name=\"updemptag\" value=\"updateemp\" hidden>
\t\t\t\t  <input type=\"text\" name=\"oldempname\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cls"]) ? $context["cls"] : null), "classe", array()), "html", null, true);
        echo "\" hidden>
\t\t\t\t   <input type=\"text\" name=\"delclasse_url\" value=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("pedagogie_deleteclasse");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"updateclasse_url\" value=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("pedagogie_updateclasse");
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
        return "@PedagogiePedagogie/normal/classe/updateclasselayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 83,  129 => 82,  125 => 81,  77 => 35,  66 => 33,  62 => 32,  51 => 26,  28 => 6,  19 => 1,);
    }
}
/* <div id="updatecls{{ cls.classe }}" class="w3-container tabs w3-animate-zoom">*/
/* 		<header class="w3-container" style="padding-top:22px">*/
/* 			<div class="w3-left">*/
/* 				<a href="#" onclick="closeMenu(event, 'classelayout')"  class="w3-btn btn btn-info tablink"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 			</div>*/
/* 				<h3 class="text-center"><b><i class="material-icons">class</i> classe - {{ cls.classe }} </b></h3>*/
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
/*                 <form name="form{{ cls.classe }}"  method="POST" onsubmit="updateClasse(event,'form{{ cls.classe }}')" >*/
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
/* */
/* 				  */
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  */
/* 				  <input type="text" name="updemptag" value="updateemp" hidden>*/
/* 				  <input type="text" name="oldempname" value="{{ cls.classe }}" hidden>*/
/* 				   <input type="text" name="delclasse_url" value="{{ path('pedagogie_deleteclasse') }}" hidden>*/
/* 				  <input type="text" name="updateclasse_url" value="{{ path('pedagogie_updateclasse') }}" hidden>*/
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
