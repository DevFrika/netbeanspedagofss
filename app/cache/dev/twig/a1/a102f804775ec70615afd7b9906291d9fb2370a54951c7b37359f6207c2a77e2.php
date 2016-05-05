<?php

/* @PedagogiePedagogie/admin/classe/addclasselayout.html.twig */
class __TwigTemplate_d5e633692bd7cac980acfd63e8955379ba3695a12712e6cb0ad3529d14e91833 extends Twig_Template
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
        $__internal_c9dcbd6789b4804336b48069d2b2baed9d43454545fc6474d2f25b27566be26a = $this->env->getExtension("native_profiler");
        $__internal_c9dcbd6789b4804336b48069d2b2baed9d43454545fc6474d2f25b27566be26a->enter($__internal_c9dcbd6789b4804336b48069d2b2baed9d43454545fc6474d2f25b27566be26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/admin/classe/addclasselayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"addclasse\">
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
               
                
                <!-- FORM -->
                <form id=\"addclasseform\" class=\"form-horizontal cls-form-group\" role=\"form\"   method=\"POST\">
                  
\t\t\t\t  
                  <!-- Departements -->
                  <div class=\"form-group cls-form-group\">
                    <label> Départements </label>
                    <select id=\"addclsdepselect\" onchange=\"clsLoadFiliere(this.value,'addclsfilselect')\" class=\"form-control\">
\t\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : $this->getContext($context, "alldepartement")));
        foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
            // line 29
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
        // line 31
        echo "\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Filieres -->
                  <div class=\"form-group cls-form-group\">
                    <label> Filieres </label>
                    <select id=\"addclsfilselect\" class=\"form-control\">
\t\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Nom de la  Classe -->
                  <div class=\"form-group cls-form-group\">
                    <label> Nom de la Classe  </label>
                    <input type=\"text\" name=\"addnomclasse\" class=\"form-control\" placeholder=\"Nom de la Classe\">
                    <span class=\"help-block\"></span>
                  </div>
                 
                
\t\t\t\t  
\t\t\t\t  <!-- Annnée Classes -->
                  <div class=\"form-group cls-form-group\">
                    <label> Annnée </label>
                    <select id=\"addclsanselect\" class=\"form-control\" >
\t\t\t\t\t\t<option value=\"1\">1 er Année </option>
\t\t\t\t\t\t<option value=\"2\">2 em Année </option>
\t\t\t\t\t\t<option value=\"3\">3 em Année </option>
\t\t\t\t\t</select>
\t\t\t\t\t<span class=\"help-block\"></span>
                  </div>

\t\t\t\t <div class=\"form-group cls-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
\t\t\t\t  
\t\t\t\t  <input type=\"text\" name=\"addclstag\" value=\"addcls\" hidden>
\t\t\t\t  <input type=\"text\" name=\"addclasse_url\" value=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("pedagogie_addclasse");
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"getfil_url\" value=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("pedagogie_getdepfilieres");
        echo "\" hidden>
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
        
        $__internal_c9dcbd6789b4804336b48069d2b2baed9d43454545fc6474d2f25b27566be26a->leave($__internal_c9dcbd6789b4804336b48069d2b2baed9d43454545fc6474d2f25b27566be26a_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/classe/addclasselayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 70,  106 => 69,  66 => 31,  55 => 29,  51 => 28,  22 => 1,);
    }
}
/* <div class="fade modal text-center" id="addclasse">*/
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
/*                */
/*                 */
/*                 <!-- FORM -->*/
/*                 <form id="addclasseform" class="form-horizontal cls-form-group" role="form"   method="POST">*/
/*                   */
/* 				  */
/*                   <!-- Departements -->*/
/*                   <div class="form-group cls-form-group">*/
/*                     <label> Départements </label>*/
/*                     <select id="addclsdepselect" onchange="clsLoadFiliere(this.value,'addclsfilselect')" class="form-control">*/
/* 						{%for dep in alldepartement %}*/
/* 						<option value="{{ dep.id }}">{{ dep.departement}}</option>*/
/* 						{% endfor %}*/
/* 					</select>*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Filieres -->*/
/*                   <div class="form-group cls-form-group">*/
/*                     <label> Filieres </label>*/
/*                     <select id="addclsfilselect" class="form-control">*/
/* 						*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Nom de la  Classe -->*/
/*                   <div class="form-group cls-form-group">*/
/*                     <label> Nom de la Classe  </label>*/
/*                     <input type="text" name="addnomclasse" class="form-control" placeholder="Nom de la Classe">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                  */
/*                 */
/* 				  */
/* 				  <!-- Annnée Classes -->*/
/*                   <div class="form-group cls-form-group">*/
/*                     <label> Annnée </label>*/
/*                     <select id="addclsanselect" class="form-control" >*/
/* 						<option value="1">1 er Année </option>*/
/* 						<option value="2">2 em Année </option>*/
/* 						<option value="3">3 em Année </option>*/
/* 					</select>*/
/* 					<span class="help-block"></span>*/
/*                   </div>*/
/* */
/* 				 <div class="form-group cls-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/* 				  */
/* 				  <input type="text" name="addclstag" value="addcls" hidden>*/
/* 				  <input type="text" name="addclasse_url" value="{{ path('pedagogie_addclasse') }}" hidden>*/
/* 				  <input type="text" name="getfil_url" value="{{ path('pedagogie_getdepfilieres') }}" hidden>*/
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
