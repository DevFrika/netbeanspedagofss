<?php

/* @PedagogiePedagogie/admin/matiere/addmatierelayout.html.twig */
class __TwigTemplate_7b756c30cea6e8b24dd3ac97f161727afb5619c326c17fca134440f68b5bffd4 extends Twig_Template
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
        $__internal_2180c2c4dc88f9abc00c3c8951d5940a1725e101469272628c3b26babed165f1 = $this->env->getExtension("native_profiler");
        $__internal_2180c2c4dc88f9abc00c3c8951d5940a1725e101469272628c3b26babed165f1->enter($__internal_2180c2c4dc88f9abc00c3c8951d5940a1725e101469272628c3b26babed165f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/admin/matiere/addmatierelayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"addmatiere\">
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
                
                <!-- SHOW ERROR/SUCCESS MESSAGES -->
\t\t\t\t
                <div class=\"mat-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
\t\t\t\t
                <!-- FORM -->
                <form class=\"addmatiereform\"  method=\"POST\">
\t\t\t\t
                 <!-- Nom -->
                  <div class=\"form-group dis-form-group\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"nommatiere\" class=\"form-control\" placeholder=\"Nom de la matiere\">
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  
\t\t\t\t   <!-- Departements -->
                  <div class=\"form-group dis-form-group\">
                    <label> Départements </label>
                    <select id=\"depmatselect\" class=\"form-control\" onchange=\"matLoadFiliere(this.value,'fildisselect')\" >
\t\t\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : $this->getContext($context, "alldepartement")));
        foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
            // line 38
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
        // line 40
        echo "\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Filieres -->
                  <div class=\"form-group dis-form-group\">
                    <label> Filieres </label>
                    <select id=\"filmatselect\" class=\"form-control\" >
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Disciplines -->
                  <div class=\"form-group dis-form-group\">
                    <label> Disciplines </label>
                    <select id=\"dismatselect\" class=\"form-control\" >
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  <input type=\"text\" name=\"addmattag\" value=\"addmat\" hidden>
\t\t\t\t  <input type=\"text\" name=\"addmatiere_url\" value=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("pedagogie_addmatiere");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getfilmat_url\" value=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("pedagogie_getdepfilieres");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getmatdis_url\" value=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("pedagogie_getfildisciplines");
        echo "\" hidden>
                  <div class=\"modal-footer\">
\t\t\t\t\t\t<a class=\"btn btn-default\" data-dismiss=\"modal\">Close</a>
\t\t\t\t\t\t<!-- SUBMIT BUTTON -->
                  <button type=\"submit\" class=\"btn btn-success \"><i class=\"fa fa-plus\"></i> Enregistrer </button>
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
        
        $__internal_2180c2c4dc88f9abc00c3c8951d5940a1725e101469272628c3b26babed165f1->leave($__internal_2180c2c4dc88f9abc00c3c8951d5940a1725e101469272628c3b26babed165f1_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/matiere/addmatierelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 68,  107 => 67,  103 => 66,  75 => 40,  64 => 38,  60 => 37,  22 => 1,);
    }
}
/* <div class="fade modal text-center" id="addmatiere">*/
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
/*                 */
/*                 <!-- SHOW ERROR/SUCCESS MESSAGES -->*/
/* 				*/
/*                 <div class="mat-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/* 				*/
/*                 <!-- FORM -->*/
/*                 <form class="addmatiereform"  method="POST">*/
/* 				*/
/*                  <!-- Nom -->*/
/*                   <div class="form-group dis-form-group">*/
/*                     <label> Nom </label>*/
/*                     <input type="text" name="nommatiere" class="form-control" placeholder="Nom de la matiere">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  */
/* 				   <!-- Departements -->*/
/*                   <div class="form-group dis-form-group">*/
/*                     <label> Départements </label>*/
/*                     <select id="depmatselect" class="form-control" onchange="matLoadFiliere(this.value,'fildisselect')" >*/
/* 						{%for dep in alldepartement %}*/
/* 						<option value="{{ dep.departement }}">{{ dep.departement}}</option>*/
/* 						{% endfor %}*/
/* 					</select>*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Filieres -->*/
/*                   <div class="form-group dis-form-group">*/
/*                     <label> Filieres </label>*/
/*                     <select id="filmatselect" class="form-control" >*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Disciplines -->*/
/*                   <div class="form-group dis-form-group">*/
/*                     <label> Disciplines </label>*/
/*                     <select id="dismatselect" class="form-control" >*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  <input type="text" name="addmattag" value="addmat" hidden>*/
/* 				  <input type="text" name="addmatiere_url" value="{{ path('pedagogie_addmatiere') }}" hidden>*/
/* 				  <input type="text" name="getfilmat_url" value="{{ path('pedagogie_getdepfilieres') }}" hidden>*/
/* 				  <input type="text" name="getmatdis_url" value="{{ path('pedagogie_getfildisciplines') }}" hidden>*/
/*                   <div class="modal-footer">*/
/* 						<a class="btn btn-default" data-dismiss="modal">Close</a>*/
/* 						<!-- SUBMIT BUTTON -->*/
/*                   <button type="submit" class="btn btn-success "><i class="fa fa-plus"></i> Enregistrer </button>*/
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
