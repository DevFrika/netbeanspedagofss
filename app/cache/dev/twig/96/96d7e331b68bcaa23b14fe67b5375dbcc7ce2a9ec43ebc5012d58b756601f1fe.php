<?php

/* @PedagogiePedagogie/admin/enseignant/addenseignantlayout.html.twig */
class __TwigTemplate_c54b3d326e75e357ca3b20ccc79dbc7c9875b7a447082884d0327ba6770f25ba extends Twig_Template
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
        $__internal_4dc49e23248047c29051b90e2aec6f21cf01be4db65a719f7d782732e6a35ed3 = $this->env->getExtension("native_profiler");
        $__internal_4dc49e23248047c29051b90e2aec6f21cf01be4db65a719f7d782732e6a35ed3->enter($__internal_4dc49e23248047c29051b90e2aec6f21cf01be4db65a719f7d782732e6a35ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/admin/enseignant/addenseignantlayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"addenseignant\">
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
                <div class=\"ens-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
                
                <!-- FORM -->
                <form id=\"addenseignantform\" class=\"form-horizontal ens-form-group\" role=\"form\"  method=\"POST\" >
                 
\t\t\t\t\t<!-- Family Name -->
                  <div class=\"form-group ens-form-group\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"ens_famname\" class=\"form-control\" placeholder=\" \"> 
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t
\t\t\t\t<!-- Surname -->
                  <div class=\"form-group ens-form-group\">
                    <label> Prénom </label>
                    <input type=\"text\" name=\"ens_surname\" class=\"form-control\" placeholder=\" \"> 
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t
\t\t\t\t<!-- Username -->
                  <div class=\"form-group ens-form-group\">
                    <label> Username </label>
                    <input type=\"text\" name=\"ens_username\" class=\"form-control\" placeholder=\" \"> 
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
                  <!-- E-mail -->
                  <div class=\"form-group ens-form-group\">
                    <label> E-mail </label>
                    <input type=\"email\" name=\"ens_email\" class=\"form-control\" placeholder=\"\">
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t   <!--  Code -->
                  <div class=\"form-group ens-form-group\">
                    <label> E-mail </label>
                    <input type=\"text\" name=\"code\" class=\"form-control\" placeholder=\"\">
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t   <!-- Telephone -->
                  <div id=\"ens_email-group\" class=\"form-group ens-form-group\">
                    <label> E-mail </label>
                    <input type=\"text\" name=\"ens_telephone\" class=\"form-control\" placeholder=\"\">
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
                  <!-- Departements -->
                  <div class=\"form-group ens-form-group\">
                    <label> Départements </label>
                    <select id=\"ensdepselect\" class=\"form-control\" onchange=\"ensLoadDiscipline(this.value,'ensdisselect')\">
\t\t\t\t\t\t";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : $this->getContext($context, "alldepartement")));
        foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
            // line 72
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
        // line 74
        echo "\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  
                  <!-- Disciplines -->
                  <div class=\"form-group ens-form-group\">
                    <label> Disciplines </label>
                    <select id=\"ensdisselect\" class=\"form-control\" onchange=\"ensLoadMatiere(this.value,'ensmatselect')\">
\t\t\t\t\t\t";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alldiscipline"]) ? $context["alldiscipline"] : $this->getContext($context, "alldiscipline")));
        foreach ($context['_seq'] as $context["_key"] => $context["dis"]) {
            // line 84
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
        // line 86
        echo "\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Matiere -->
                  <div class=\"form-group ens-form-group\">
                    <label> Matiere </label>
                    <select id=\"ensmatselect\" class=\"form-control\" >
\t\t\t\t\t\t";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allmatiere"]) ? $context["allmatiere"] : $this->getContext($context, "allmatiere")));
        foreach ($context['_seq'] as $context["_key"] => $context["mat"]) {
            // line 95
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
        // line 97
        echo "\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Situations -->
                  <div class=\"form-group ens-form-group\">
                    <label> Situation </label>
                    <select id=\"enssitselect\" class=\"form-control\" >
\t\t\t\t\t\t";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allsituation"]) ? $context["allsituation"] : $this->getContext($context, "allsituation")));
        foreach ($context['_seq'] as $context["_key"] => $context["sit"]) {
            // line 106
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sit"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sit"], "situations", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Grade -->
                  <div class=\"form-group ens-form-group\">
                    <label> Grade </label>
                    <select id=\"ensgrdselect\" class=\"form-control\">
\t\t\t\t\t\t";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allgrade"]) ? $context["allgrade"] : $this->getContext($context, "allgrade")));
        foreach ($context['_seq'] as $context["_key"] => $context["grd"]) {
            // line 117
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["grd"], "code", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["grd"], "grades", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  
\t\t\t\t  <input type=\"text\" name=\"addenstag\" value=\"addens\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getdepdis_url\" value=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("pedagogie_getdepdisciplines");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"ensregister_url\" value=\"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("pedagogie_addenseignant");
        echo "\" hidden>
\t\t\t\t  
                  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t<!-- SUBMIT BUTTON -->
                  <button type=\"submit\" class=\"btn btn-success \"><i class=\"fa fa-save\"></i> Enregistrer </button>
\t\t\t\t\t
\t\t\t\t\t  </div>
                  
                </form>
              </div>
\t\t\t  </div>
\t\t\t\t\t  </div>
\t\t\t\t\t  
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>";
        
        $__internal_4dc49e23248047c29051b90e2aec6f21cf01be4db65a719f7d782732e6a35ed3->leave($__internal_4dc49e23248047c29051b90e2aec6f21cf01be4db65a719f7d782732e6a35ed3_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/enseignant/addenseignantlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 130,  222 => 129,  210 => 119,  199 => 117,  195 => 116,  185 => 108,  174 => 106,  170 => 105,  160 => 97,  149 => 95,  145 => 94,  135 => 86,  124 => 84,  120 => 83,  109 => 74,  98 => 72,  94 => 71,  22 => 1,);
    }
}
/* <div class="fade modal text-center" id="addenseignant">*/
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
/*                 <div class="ens-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/*                 */
/*                 <!-- FORM -->*/
/*                 <form id="addenseignantform" class="form-horizontal ens-form-group" role="form"  method="POST" >*/
/*                  */
/* 					<!-- Family Name -->*/
/*                   <div class="form-group ens-form-group">*/
/*                     <label> Nom </label>*/
/*                     <input type="text" name="ens_famname" class="form-control" placeholder=" "> */
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				*/
/* 				<!-- Surname -->*/
/*                   <div class="form-group ens-form-group">*/
/*                     <label> Prénom </label>*/
/*                     <input type="text" name="ens_surname" class="form-control" placeholder=" "> */
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				*/
/* 				<!-- Username -->*/
/*                   <div class="form-group ens-form-group">*/
/*                     <label> Username </label>*/
/*                     <input type="text" name="ens_username" class="form-control" placeholder=" "> */
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/*                   <!-- E-mail -->*/
/*                   <div class="form-group ens-form-group">*/
/*                     <label> E-mail </label>*/
/*                     <input type="email" name="ens_email" class="form-control" placeholder="">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				   <!--  Code -->*/
/*                   <div class="form-group ens-form-group">*/
/*                     <label> E-mail </label>*/
/*                     <input type="text" name="code" class="form-control" placeholder="">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				   <!-- Telephone -->*/
/*                   <div id="ens_email-group" class="form-group ens-form-group">*/
/*                     <label> E-mail </label>*/
/*                     <input type="text" name="ens_telephone" class="form-control" placeholder="">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/*                   <!-- Departements -->*/
/*                   <div class="form-group ens-form-group">*/
/*                     <label> Départements </label>*/
/*                     <select id="ensdepselect" class="form-control" onchange="ensLoadDiscipline(this.value,'ensdisselect')">*/
/* 						{%for dep in alldepartement %}*/
/* 						<option value="{{ dep.id }}">{{ dep.departement }}</option>*/
/* 						{% endfor %}*/
/* 					</select>*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  */
/*                   <!-- Disciplines -->*/
/*                   <div class="form-group ens-form-group">*/
/*                     <label> Disciplines </label>*/
/*                     <select id="ensdisselect" class="form-control" onchange="ensLoadMatiere(this.value,'ensmatselect')">*/
/* 						{%for dis in alldiscipline %}*/
/* 						<option value="{{ dis.id }}">{{ dis.discipline }}</option>*/
/* 						{% endfor %}*/
/* 					</select>*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Matiere -->*/
/*                   <div class="form-group ens-form-group">*/
/*                     <label> Matiere </label>*/
/*                     <select id="ensmatselect" class="form-control" >*/
/* 						{%for mat in allmatiere %}*/
/* 						<option value="{{ mat.id }}">{{ mat.matiere }}</option>*/
/* 						{% endfor %}*/
/* 					</select>*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Situations -->*/
/*                   <div class="form-group ens-form-group">*/
/*                     <label> Situation </label>*/
/*                     <select id="enssitselect" class="form-control" >*/
/* 						{%for sit in allsituation %}*/
/* 						<option value="{{ sit.id }}">{{ sit.situations }}</option>*/
/* 						{% endfor %}*/
/* 					</select>*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Grade -->*/
/*                   <div class="form-group ens-form-group">*/
/*                     <label> Grade </label>*/
/*                     <select id="ensgrdselect" class="form-control">*/
/* 						{%for grd in allgrade %}*/
/* 						<option value="{{ grd.code }}">{{ grd.grades }}</option>*/
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
/* 				  <input type="text" name="addenstag" value="addens" hidden>*/
/* 				  <input type="text" name="getdepdis_url" value="{{ path('pedagogie_getdepdisciplines') }}" hidden>*/
/* 				  <input type="text" name="ensregister_url" value="{{ path('pedagogie_addenseignant') }}" hidden>*/
/* 				  */
/*                   <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						<!-- SUBMIT BUTTON -->*/
/*                   <button type="submit" class="btn btn-success "><i class="fa fa-save"></i> Enregistrer </button>*/
/* 					*/
/* 					  </div>*/
/*                   */
/*                 </form>*/
/*               </div>*/
/* 			  </div>*/
/* 					  </div>*/
/* 					  */
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
