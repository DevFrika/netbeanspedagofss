<?php

/* @PedagogiePedagogie/etudiant/voeux/addvoeuxlayout.html.twig */
class __TwigTemplate_07116e75e0d7867f49f5f510a82f9c6e764ca531c97e8f540f7f29430fda5d3a extends Twig_Template
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
        $__internal_b0943a0a3ecb5264e3adba0f004008010fe0e861d1054fa333463195c0867748 = $this->env->getExtension("native_profiler");
        $__internal_b0943a0a3ecb5264e3adba0f004008010fe0e861d1054fa333463195c0867748->enter($__internal_b0943a0a3ecb5264e3adba0f004008010fe0e861d1054fa333463195c0867748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/etudiant/voeux/addvoeuxlayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"addvoeux\">
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
                <!-- SHOW ERROR/SUCCESS MESSAGES -->
\t\t\t\t
                <div class=\"veu-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
\t\t\t\t
                <!-- FORM -->
                <form class=\"addvoeuxform\"  method=\"POST\">
                  <!-- Nom -->
                  <div class=\"veu-form-group\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"nomvoeux\" class=\"form-control\" placeholder=\"Nom de la voeux\">
                    <span class=\"help-block\"></span>
                  </div>
                  <!-- Password -->
                  <div class=\"veu-form-group\">
                    <label> Departement </label>
                    <input type=\"text\" name=\"depvoeux\" class=\"form-control\" >
\t\t\t\t\t
                    <span class=\"help-block\"></span>
                  </div>
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  <input type=\"text\" name=\"addveutag\" value=\"addveu\" hidden>
\t\t\t\t  <input type=\"text\" name=\"addvoeux_url\" value=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("pedagogie_addvoeux");
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
        
        $__internal_b0943a0a3ecb5264e3adba0f004008010fe0e861d1054fa333463195c0867748->leave($__internal_b0943a0a3ecb5264e3adba0f004008010fe0e861d1054fa333463195c0867748_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/etudiant/voeux/addvoeuxlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 41,  22 => 1,);
    }
}
/* <div class="fade modal text-center" id="addvoeux">*/
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
/*                 <!-- SHOW ERROR/SUCCESS MESSAGES -->*/
/* 				*/
/*                 <div class="veu-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/* 				*/
/*                 <!-- FORM -->*/
/*                 <form class="addvoeuxform"  method="POST">*/
/*                   <!-- Nom -->*/
/*                   <div class="veu-form-group">*/
/*                     <label> Nom </label>*/
/*                     <input type="text" name="nomvoeux" class="form-control" placeholder="Nom de la voeux">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                   <!-- Password -->*/
/*                   <div class="veu-form-group">*/
/*                     <label> Departement </label>*/
/*                     <input type="text" name="depvoeux" class="form-control" >*/
/* 					*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  <input type="text" name="addveutag" value="addveu" hidden>*/
/* 				  <input type="text" name="addvoeux_url" value="{{ path('pedagogie_addvoeux') }}" hidden>*/
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
