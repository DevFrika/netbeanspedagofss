<?php

/* @PedagogiePedagogie/admin/rattrapage/updatedevoirlayout.html.twig */
class __TwigTemplate_27e6a73bc0273acade85f6315480e813f73f642be268f3814e8d45f4cf01023b extends Twig_Template
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
        echo "<div id=\"updatedev";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dev"]) ? $context["dev"] : null), "id", array()), "html", null, true);
        echo "\" class=\"w3-container tabs w3-animate-zoom\">
\t\t<header class=\"w3-container\" style=\"pupding-top:22px\">
\t\t\t<div class=\"w3-left\">
\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'devoirlayout')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t</div>
\t\t\t\t<h3 class=\"text-center\"><b><i class=\"material-icons\">class</i> devoir - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dev"]) ? $context["dev"] : null), "id", array()), "html", null, true);
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
                <div class=\"form-group dev-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
               
                <!-- FORM -->
                <form name=\"upddevform";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dev"]) ? $context["dev"] : null), "id", array()), "html", null, true);
        echo "\" class=\"form-horizontal\" method=\"POST\" onsubmit=\"updatedevoir(event,'upddevform";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dev"]) ? $context["dev"] : null), "id", array()), "html", null, true);
        echo "')\" >
\t\t\t\t
                   <!-- Matieres -->
                  <div class=\"form-group dev-form-group\">
                    <label> Matieres </label>
                    <select id=\"upddevmatselect\" class=\"form-control\" >
\t\t\t\t\t
\t\t\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allmatiere"]) ? $context["allmatiere"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["mat"]) {
            // line 35
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
        // line 37
        echo "\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Natures -->
\t\t\t\t  <div class=\"form-group emp-form-group\">
                    <label> Nature </label>
                    <select id=\"upddevnatselect\" class=\"form-control\" >
\t\t\t\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allnature"]) ? $context["allnature"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["nat"]) {
            // line 47
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
        // line 49
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
                  <!-- Departements -->
                  <div class=\"form-group dev-form-group\">
                    <label> Départements </label>
                    <select id=\"upddevdepselect\" class=\"form-control\" onchange=\"devLoadFiliere(this.value,'upddevfilselect')\">
\t\t\t\t\t\t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
            // line 58
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
        // line 60
        echo "\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Filieres -->
                  <div class=\"form-group dev-form-group\">
                    <label> Filieres </label>
                    <select id=\"upddevfilselect\" class=\"form-control\" onchange=\"devLoadClasse(this.value,'upddevclsselect')\">
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Classes -->
                  <div class=\"form-group dev-form-group\">
                    <label> Classes </label>
                    <select id=\"upddevclsselect\" class=\"form-control\" onchange=\"devLoadGroupe(this.value,'upddevgrpselect')\">
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Groupes -->
                  <div class=\"form-group dev-form-group\">
                    <label> Groupes </label>
                    <select id=\"updempgrpselect\" class=\"form-control\" >
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
                    <select id=\"upddevlieuxselect\" class=\"form-control\" onchange=\"empLoadSalle(this.value,'upddevsalselect')\">
\t\t\t\t\t\t";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alllieux"]) ? $context["alllieux"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lix"]) {
            // line 98
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
        // line 100
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Salles -->
\t\t\t\t  <div class=\"form-group dev-form-group\">
                    <label> Salles </label>
                    <select id=\"updempsalselect\" class=\"form-control\" >
\t\t\t\t\t\t";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allsalle"]) ? $context["allsalle"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["sal"]) {
            // line 109
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
        // line 111
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t   <!-- Jours -->
\t\t\t\t  <div class=\"form-group dev-form-group\">
                    <label> Jours </label>
                    <select id=\"upddevjourselect\" class=\"form-control\" >
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
                    <select id=\"upddevhdebselect\" class=\"form-control\">
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
\t\t\t\t\t<select id=\"upddevmindebselect\" class=\"form-control\">
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
                    <select id=\"upddevhfinselect\" class=\"form-control\">
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
\t\t\t\t\t<select id=\"upddevminfinselect\" class=\"form-control\">
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
\t\t\t\t  
\t\t\t\t  <input type=\"text\" name=\"upddevtag\" value=\"updatedev\" hidden>
\t\t\t\t  <input type=\"text\" name=\"olddevname\" value=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dev"]) ? $context["dev"] : null), "id", array()), "html", null, true);
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"updatedevoir_url\" value=\"";
        // line 201
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
    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/rattrapage/updatedevoirlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 201,  300 => 200,  209 => 111,  198 => 109,  194 => 108,  184 => 100,  173 => 98,  169 => 97,  130 => 60,  119 => 58,  115 => 57,  105 => 49,  94 => 47,  90 => 46,  79 => 37,  68 => 35,  64 => 34,  52 => 27,  28 => 6,  19 => 1,);
    }
}
/* <div id="updatedev{{ dev.id }}" class="w3-container tabs w3-animate-zoom">*/
/* 		<header class="w3-container" style="pupding-top:22px">*/
/* 			<div class="w3-left">*/
/* 				<a href="#" onclick="closeMenu(event, 'devoirlayout')"  class="w3-btn btn btn-info tablink"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 			</div>*/
/* 				<h3 class="text-center"><b><i class="material-icons">class</i> devoir - {{ dev.id }} </b></h3>*/
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
/*                 <div class="form-group dev-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/*                */
/*                 <!-- FORM -->*/
/*                 <form name="upddevform{{ dev.id }}" class="form-horizontal" method="POST" onsubmit="updatedevoir(event,'upddevform{{ dev.id }}')" >*/
/* 				*/
/*                    <!-- Matieres -->*/
/*                   <div class="form-group dev-form-group">*/
/*                     <label> Matieres </label>*/
/*                     <select id="upddevmatselect" class="form-control" >*/
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
/*                     <select id="upddevnatselect" class="form-control" >*/
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
/*                     <select id="upddevdepselect" class="form-control" onchange="devLoadFiliere(this.value,'upddevfilselect')">*/
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
/*                     <select id="upddevfilselect" class="form-control" onchange="devLoadClasse(this.value,'upddevclsselect')">*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Classes -->*/
/*                   <div class="form-group dev-form-group">*/
/*                     <label> Classes </label>*/
/*                     <select id="upddevclsselect" class="form-control" onchange="devLoadGroupe(this.value,'upddevgrpselect')">*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Groupes -->*/
/*                   <div class="form-group dev-form-group">*/
/*                     <label> Groupes </label>*/
/*                     <select id="updempgrpselect" class="form-control" >*/
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
/*                     <select id="upddevlieuxselect" class="form-control" onchange="empLoadSalle(this.value,'upddevsalselect')">*/
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
/*                     <select id="updempsalselect" class="form-control" >*/
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
/*                     <select id="upddevjourselect" class="form-control" >*/
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
/*                     <select id="upddevhdebselect" class="form-control">*/
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
/* 					<select id="upddevmindebselect" class="form-control">*/
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
/*                     <select id="upddevhfinselect" class="form-control">*/
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
/* 					<select id="upddevminfinselect" class="form-control">*/
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
/* 				  */
/* 				  <input type="text" name="upddevtag" value="updatedev" hidden>*/
/* 				  <input type="text" name="olddevname" value="{{ dev.id }}" hidden>*/
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
