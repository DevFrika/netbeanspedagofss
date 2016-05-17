<?php

/* PedagogiePedagogieBundle:prof/filiere:addfilierelayout.html.twig */
class __TwigTemplate_005e41d96afd4462dab2b70d61437691aa5cc3befc3e9d062718b001d7404f68 extends Twig_Template
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
        $__internal_fd9c64fdff6123f04d9b85c56c068e7b2b6fa246d75eb140d429b5af89959e23 = $this->env->getExtension("native_profiler");
        $__internal_fd9c64fdff6123f04d9b85c56c068e7b2b6fa246d75eb140d429b5af89959e23->enter($__internal_fd9c64fdff6123f04d9b85c56c068e7b2b6fa246d75eb140d429b5af89959e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:prof/filiere:addfilierelayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"addfiliere\">
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
\t\t\t\t<div class=\"fil-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
\t\t\t\t
                <!-- FORM -->
                <form class=\"addfiliereform\"  method=\"POST\">
\t\t\t\t
                  <!-- Nom Filiere -->
                  <div class=\"fil-form-group\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"nomfiliere\" class=\"form-control\" placeholder=\"Nom de la filiere\">
                    <span class=\"help-block\"></span>
                  </div>
                 
\t\t\t\t  <!-- Departements -->
                  <div class=\"fil-form-group\">
                    <label> Départements </label>
                    <select id=\"fildepselect\">
\t\t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : $this->getContext($context, "alldepartement")));
        foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
            // line 36
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
        // line 38
        echo "\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  
\t\t\t\t  <input type=\"text\" name=\"addfiltag\" value=\"addfil\" hidden>
\t\t\t\t  <input type=\"text\" name=\"addfiliere_url\" value=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("pedagogie_addfiliere");
        echo "\" hidden>
\t\t\t\t  
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
        
        $__internal_fd9c64fdff6123f04d9b85c56c068e7b2b6fa246d75eb140d429b5af89959e23->leave($__internal_fd9c64fdff6123f04d9b85c56c068e7b2b6fa246d75eb140d429b5af89959e23_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:prof/filiere:addfilierelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 47,  73 => 38,  62 => 36,  58 => 35,  22 => 1,);
    }
}
/* <div class="fade modal text-center" id="addfiliere">*/
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
/* 				<div class="fil-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/* 				*/
/*                 <!-- FORM -->*/
/*                 <form class="addfiliereform"  method="POST">*/
/* 				*/
/*                   <!-- Nom Filiere -->*/
/*                   <div class="fil-form-group">*/
/*                     <label> Nom </label>*/
/*                     <input type="text" name="nomfiliere" class="form-control" placeholder="Nom de la filiere">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                  */
/* 				  <!-- Departements -->*/
/*                   <div class="fil-form-group">*/
/*                     <label> Départements </label>*/
/*                     <select id="fildepselect">*/
/* 						{%for dep in alldepartement %}*/
/* 						<option value="{{dep.departement}}">{{dep.departement}}</option>*/
/* 						{% endfor %}*/
/* 					</select>*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  */
/* 				  <input type="text" name="addfiltag" value="addfil" hidden>*/
/* 				  <input type="text" name="addfiliere_url" value="{{ path('pedagogie_addfiliere') }}" hidden>*/
/* 				  */
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
