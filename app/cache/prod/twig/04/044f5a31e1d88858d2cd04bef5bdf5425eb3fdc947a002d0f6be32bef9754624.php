<?php

/* PedagogiePedagogieBundle:admin/classe:updateclasselayout.html.twig */
class __TwigTemplate_54158f25272976b77e5aab1776cecb8fd0463fd50f04b50c1756ce19a2858a9e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cls"]) ? $context["cls"] : null), "id", array()), "html", null, true);
        echo "\" class=\"tabs w3-container w3-section w3-animate-left \">
\t\t<header class=\"w3-container\" style=\"padding-top:22px\">
\t\t\t<div class=\"w3-left\">
\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'classelayout')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t</div>
\t\t\t\t<h3 class=\"text-center\"><b><i class=\"material-icons\">class</i> Classe - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cls"]) ? $context["cls"] : null), "classe", array()), "html", null, true);
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
\t\t\t\t
               
                <!-- FORM -->
                <form name=\"formclsupd";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cls"]) ? $context["cls"] : null), "id", array()), "html", null, true);
        echo "\" class=\"form-horizontal cls-form-group\" role=\"form\" method=\"POST\" onsubmit=\"updateClasse(event,'formclsupd";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cls"]) ? $context["cls"] : null), "id", array()), "html", null, true);
        echo "','";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cls"]) ? $context["cls"] : null), "id", array()), "html", null, true);
        echo "')\" >
\t\t\t\t
                  <!-- Departements -->
                  <div class=\"form-group cls-form-group\">
                    <label> Département de la classe  </label>
                    <select id=\"updclsdepselect";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cls"]) ? $context["cls"] : null), "id", array()), "html", null, true);
        echo "\" class=\"form-control\" onchange=\"clsLoadFiliere(this.value,'updfilclsselect";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cls"]) ? $context["cls"] : null), "id", array()), "html", null, true);
        echo "')\" >
\t\t\t\t\t\t<option value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cls"]) ? $context["cls"] : null), "departement", array()), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cls"]) ? $context["cls"] : null), "departement", array()), "departement", array()), "html", null, true);
        echo "</option>
\t\t\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
            // line 30
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["cls"]) ? $context["cls"] : null), "departement", array()), "id", array()) != $this->getAttribute($context["dep"], "id", array()))) {
                // line 31
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "departement", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "departement", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            // line 33
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Filieres -->
                  <div class=\"form-group cls-form-group\">
                    <label> Filieres </label>
                    <select id=\"updclsfilselect";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cls"]) ? $context["cls"] : null), "id", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cls"]) ? $context["cls"] : null), "filiere", array()), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cls"]) ? $context["cls"] : null), "filiere", array()), "filiere", array()), "html", null, true);
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Nom de la  Classe -->
                  <div class=\"form-group cls-form-group\">
                    <label> Nom de la Classe  </label>
                    <input type=\"text\" name=\"updnomclasse\" class=\"form-control\" placeholder=\"Nom de la Classe\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cls"]) ? $context["cls"] : null), "classe", array()), "html", null, true);
        echo "\">
                    <span class=\"help-block\"></span>
                  </div>
                 
                
\t\t\t\t  
\t\t\t\t  <!-- Annnée Classes -->
                  <div class=\"form-group cls-form-group\">
                    <label> Annnée </label>
                    <select id=\"updclsanselect";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cls"]) ? $context["cls"] : null), "id", array()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"1\">1 er Année </option>
\t\t\t\t\t\t<option value=\"2\">2 em Année </option>
\t\t\t\t\t\t<option value=\"3\">3 em Année </option>
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>

\t\t\t\t  
                \t<!-- SHOW ERROR/SUCCESS MESSAGES -->
\t\t\t\t
                <div class=\"form-group cls-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
\t\t\t\t  
\t\t\t\t  <input type=\"text\" name=\"getfil_url\" value=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("pedagogie_getdepfilieres");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"updclstag\" value=\"updatecls\" hidden>
\t\t\t\t  <input type=\"text\" name=\"oldclsname\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cls"]) ? $context["cls"] : null), "classe", array()), "html", null, true);
        echo "\" hidden>
\t\t\t\t   <input type=\"text\" name=\"delclasse_url\" value=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("pedagogie_deleteclasse");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"updateclasse_url\" value=\"";
        // line 78
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
        return "PedagogiePedagogieBundle:admin/classe:updateclasselayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 78,  157 => 77,  153 => 76,  148 => 74,  130 => 59,  118 => 50,  105 => 42,  101 => 41,  92 => 34,  86 => 33,  78 => 31,  75 => 30,  71 => 29,  65 => 28,  59 => 27,  47 => 22,  28 => 6,  19 => 1,);
    }
}
/* <div id="updatecls{{ cls.id }}" class="tabs w3-container w3-section w3-animate-left ">*/
/* 		<header class="w3-container" style="padding-top:22px">*/
/* 			<div class="w3-left">*/
/* 				<a href="#" onclick="closeMenu(event, 'classelayout')"  class="w3-btn btn btn-info tablink"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 			</div>*/
/* 				<h3 class="text-center"><b><i class="material-icons">class</i> Classe - {{ cls.classe }} </b></h3>*/
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
/* 				*/
/*                */
/*                 <!-- FORM -->*/
/*                 <form name="formclsupd{{ cls.id }}" class="form-horizontal cls-form-group" role="form" method="POST" onsubmit="updateClasse(event,'formclsupd{{ cls.id }}','{{ cls.id }}')" >*/
/* 				*/
/*                   <!-- Departements -->*/
/*                   <div class="form-group cls-form-group">*/
/*                     <label> Département de la classe  </label>*/
/*                     <select id="updclsdepselect{{ cls.id }}" class="form-control" onchange="clsLoadFiliere(this.value,'updfilclsselect{{ cls.id}}')" >*/
/* 						<option value="{{ cls.departement.id }}">{{ cls.departement.departement }}</option>*/
/* 						{%for dep in alldepartement %}*/
/* 							{% if cls.departement.id != dep.id %}*/
/* 							<option value="{{ dep.departement }}">{{ dep.departement}}</option>*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 					</select>*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Filieres -->*/
/*                   <div class="form-group cls-form-group">*/
/*                     <label> Filieres </label>*/
/*                     <select id="updclsfilselect{{ cls.id }}" class="form-control">*/
/* 						<option value="{{ cls.filiere.id }}">{{ cls.filiere.filiere }}</option>*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Nom de la  Classe -->*/
/*                   <div class="form-group cls-form-group">*/
/*                     <label> Nom de la Classe  </label>*/
/*                     <input type="text" name="updnomclasse" class="form-control" placeholder="Nom de la Classe" value="{{ cls.classe }}">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                  */
/*                 */
/* 				  */
/* 				  <!-- Annnée Classes -->*/
/*                   <div class="form-group cls-form-group">*/
/*                     <label> Annnée </label>*/
/*                     <select id="updclsanselect{{ cls.id }}" class="form-control">*/
/* 						<option value="1">1 er Année </option>*/
/* 						<option value="2">2 em Année </option>*/
/* 						<option value="3">3 em Année </option>*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* */
/* 				  */
/*                 	<!-- SHOW ERROR/SUCCESS MESSAGES -->*/
/* 				*/
/*                 <div class="form-group cls-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/* 				  */
/* 				  <input type="text" name="getfil_url" value="{{ path('pedagogie_getdepfilieres') }}" hidden>*/
/* 				  <input type="text" name="updclstag" value="updatecls" hidden>*/
/* 				  <input type="text" name="oldclsname" value="{{ cls.classe }}" hidden>*/
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