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
        $__internal_b25a16058ef7e93d43d730dca935da5710797a1a5a12a484f6d36abd3817752f = $this->env->getExtension("native_profiler");
        $__internal_b25a16058ef7e93d43d730dca935da5710797a1a5a12a484f6d36abd3817752f->enter($__internal_b25a16058ef7e93d43d730dca935da5710797a1a5a12a484f6d36abd3817752f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/admin/enseignant/addenseignantlayout.html.twig"));

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
                  <div id=\"ens_username-group\" class=\"form-group ens-form-group\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"ens_famname\" class=\"form-control\" placeholder=\" \"> 
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t
\t\t\t\t<!-- Surname -->
                  <div id=\"ens_username-group\" class=\"form-group ens-form-group\">
                    <label> Prénom </label>
                    <input type=\"text\" name=\"ens_surname\" class=\"form-control\" placeholder=\" \"> 
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t
\t\t\t\t<!-- Username -->
                  <div id=\"ens_username-group\" class=\"form-group ens-form-group\">
                    <label> Username </label>
                    <input type=\"text\" name=\"ens_username\" class=\"form-control\" placeholder=\" \"> 
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
                  <!-- E-mail -->
                  <div id=\"ens_email-group\" class=\"form-group ens-form-group\">
                    <label> E-mail </label>
                    <input type=\"email\" name=\"ens_email\" class=\"form-control\" placeholder=\"\">
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
                  <!-- Departements -->
                  <div class=\"form-group ens-form-group\">
                    <label> Départements </label>
                    <select id=\"ensdepselect\" class=\"form-control\" onchange=\"ensLoadDiscipline(this.value,'ensdisselect')\">
\t\t\t\t\t\t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : $this->getContext($context, "alldepartement")));
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
\t\t\t\t  
                  <!-- Disciplines -->
                  <div class=\"form-group ens-form-group\">
                    <label> Disciplines </label>
                    <select id=\"ensdisselect\" class=\"form-control\" onchange=\"ensLoadMatiere(this.value,'ensmatselect')\">
\t\t\t\t\t\t";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alldiscipline"]) ? $context["alldiscipline"] : $this->getContext($context, "alldiscipline")));
        foreach ($context['_seq'] as $context["_key"] => $context["dis"]) {
            // line 70
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
        // line 72
        echo "\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Matiere -->
                  <div class=\"form-group ens-form-group\">
                    <label> Matiere </label>
                    <select id=\"ensmatselect\" class=\"form-control\" >
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
        echo "\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Situations -->
                  <div class=\"form-group ens-form-group\">
                    <label> Situation </label>
                    <select id=\"enssitselect\" class=\"form-control\" >
\t\t\t\t\t\t";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allsituation"]) ? $context["allsituation"] : $this->getContext($context, "allsituation")));
        foreach ($context['_seq'] as $context["_key"] => $context["sit"]) {
            // line 92
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
        // line 94
        echo "\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Grade -->
                  <div class=\"form-group ens-form-group\">
                    <label> Grade </label>
                    <select id=\"ensgrdselect\" class=\"form-control\">
\t\t\t\t\t\t";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allgrade"]) ? $context["allgrade"] : $this->getContext($context, "allgrade")));
        foreach ($context['_seq'] as $context["_key"] => $context["grd"]) {
            // line 103
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
        // line 105
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
        // line 115
        echo $this->env->getExtension('routing')->getPath("pedagogie_getdepdisciplines");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"ensregister_url\" value=\"";
        // line 116
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
        
        $__internal_b25a16058ef7e93d43d730dca935da5710797a1a5a12a484f6d36abd3817752f->leave($__internal_b25a16058ef7e93d43d730dca935da5710797a1a5a12a484f6d36abd3817752f_prof);

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
        return array (  212 => 116,  208 => 115,  196 => 105,  185 => 103,  181 => 102,  171 => 94,  160 => 92,  156 => 91,  146 => 83,  135 => 81,  131 => 80,  121 => 72,  110 => 70,  106 => 69,  95 => 60,  84 => 58,  80 => 57,  22 => 1,);
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
/*                   <div id="ens_username-group" class="form-group ens-form-group">*/
/*                     <label> Nom </label>*/
/*                     <input type="text" name="ens_famname" class="form-control" placeholder=" "> */
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				*/
/* 				<!-- Surname -->*/
/*                   <div id="ens_username-group" class="form-group ens-form-group">*/
/*                     <label> Prénom </label>*/
/*                     <input type="text" name="ens_surname" class="form-control" placeholder=" "> */
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				*/
/* 				<!-- Username -->*/
/*                   <div id="ens_username-group" class="form-group ens-form-group">*/
/*                     <label> Username </label>*/
/*                     <input type="text" name="ens_username" class="form-control" placeholder=" "> */
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/*                   <!-- E-mail -->*/
/*                   <div id="ens_email-group" class="form-group ens-form-group">*/
/*                     <label> E-mail </label>*/
/*                     <input type="email" name="ens_email" class="form-control" placeholder="">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/*                   <!-- Departements -->*/
/*                   <div class="form-group ens-form-group">*/
/*                     <label> Départements </label>*/
/*                     <select id="ensdepselect" class="form-control" onchange="ensLoadDiscipline(this.value,'ensdisselect')">*/
/* 						{%for dep in alldepartement %}*/
/* 						<option value="{{ dep.id }}">{{ dep.departement}}</option>*/
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
