<?php

/* PedagogiePedagogieBundle:admin/lieux:addlieuxlayout.html.twig */
class __TwigTemplate_fdf04f0e131e103d9a155725a78046b6d8a14207d133d1821d4ea749cfedd3fa extends Twig_Template
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
        echo "<div class=\"fade modal text-center\" id=\"addlieux\">
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
                
               
\t\t\t\t
                <!-- FORM -->
                <form class=\"addlieuxform form-horizontal\"  method=\"POST\">
\t\t\t\t
                  <!-- Nom lieux -->
                  <div class=\"form-group lieux-form-group\">
                    <label> Nom Lieux </label>
                    <input type=\"text\" name=\"nomlieux\" class=\"form-control\" placeholder=\"Nom du lieux\">
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Code lieux -->
                  <div class=\"form-group lieux-form-group\">
                    <label> Code Lieux </label>
                    <input type=\"text\" name=\"codelieux\" class=\"form-control\" placeholder=\"Code du lieux\">
                    <span class=\"help-block\"></span>
                  </div>
                 
\t\t\t\t  
\t\t\t\t  
\t\t\t\t   <!-- SHOW ERROR/SUCCESS MESSAGES -->
\t\t\t\t<div class=\"form-group lieux-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
\t\t\t\t  
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  
\t\t\t\t  <input type=\"text\" name=\"addlieuxtag\" value=\"addlieux\" hidden>
\t\t\t\t  <input type=\"text\" name=\"addlieux_url\" value=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("pedagogie_addlieux");
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
    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:admin/lieux:addlieuxlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 47,  19 => 1,);
    }
}
/* <div class="fade modal text-center" id="addlieux">*/
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
/*                */
/* 				*/
/*                 <!-- FORM -->*/
/*                 <form class="addlieuxform form-horizontal"  method="POST">*/
/* 				*/
/*                   <!-- Nom lieux -->*/
/*                   <div class="form-group lieux-form-group">*/
/*                     <label> Nom Lieux </label>*/
/*                     <input type="text" name="nomlieux" class="form-control" placeholder="Nom du lieux">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Code lieux -->*/
/*                   <div class="form-group lieux-form-group">*/
/*                     <label> Code Lieux </label>*/
/*                     <input type="text" name="codelieux" class="form-control" placeholder="Code du lieux">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                  */
/* 				  */
/* 				  */
/* 				   <!-- SHOW ERROR/SUCCESS MESSAGES -->*/
/* 				<div class="form-group lieux-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/* 				  */
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  */
/* 				  <input type="text" name="addlieuxtag" value="addlieux" hidden>*/
/* 				  <input type="text" name="addlieux_url" value="{{ path('pedagogie_addlieux') }}" hidden>*/
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
