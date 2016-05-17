<?php

/* @PedagogiePedagogie/admin/salle/addsallelayout.html.twig */
class __TwigTemplate_0b7751cdf7ae92a3671f3ded2a4bfbb41392c99f63b3550b8ce489a973164959 extends Twig_Template
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
        $__internal_bd04fd8bb2a95487bf5c5760402cf3ea5c3c8a743d74f71f0ac160bf0af2ba23 = $this->env->getExtension("native_profiler");
        $__internal_bd04fd8bb2a95487bf5c5760402cf3ea5c3c8a743d74f71f0ac160bf0af2ba23->enter($__internal_bd04fd8bb2a95487bf5c5760402cf3ea5c3c8a743d74f71f0ac160bf0af2ba23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/admin/salle/addsallelayout.html.twig"));

        // line 1
        echo "<div class=\"fade modal text-center\" id=\"addsalle\">
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
                <form class=\"addsalleform form-horizontal\"  method=\"POST\">
\t\t\t\t
                  <!-- Nom salle -->
                  <div class=\"form-group salle-form-group\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"nomsalle\" class=\"form-control\" value=\"\">
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Lieux de la  salle -->
                  <div class=\"form-group salle-form-group\">
                   <label> Lieux </label>
                    <select id=\"sallelieuxselect\" class=\"form-control\">
\t\t\t\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alllieux"]) ? $context["alllieux"] : $this->getContext($context, "alllieux")));
        foreach ($context['_seq'] as $context["_key"] => $context["lix"]) {
            // line 33
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lix"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lix"], "lieux", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lix'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t\t\t</select>
                    <span class=\"help-block\"></span>
                  </div>
                 
\t\t\t\t  <!-- Capacité salle -->
                  <div class=\"form-group salle-form-group\">
                    <label> Capacité  </label>
                    <input type=\"text\" name=\"capsalle\" class=\"form-control\" value=\"\">
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t   <!-- Audio salle -->
                  <div class=\"form-group salle-form-group\">
                    <label> Audio  </label>
\t\t\t\t\t<input type=\"radio\" name=\"audiosalle\" value=\"1\" checked=\"checked\"> Oui </input>
\t\t\t\t\t<input type=\"radio\" name=\"audiosalle\" value=\"0\"> Non </input>
\t\t\t\t  <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Retro salle -->
                  <div class=\"form-group salle-form-group\">
                    <label> Retro  </label>
\t\t\t\t\t<input type=\"radio\" name=\"retrosalle\" value=\"1\" checked=\"checked\"> Oui </input>
\t\t\t\t\t<input type=\"radio\" name=\"retrosalle\" value=\"0\"> Non </input>
\t\t\t\t  <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  
\t\t\t\t   <!-- SHOW ERROR/SUCCESS MESSAGES -->
\t\t\t\t<div class=\"form-group salle-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
\t\t\t\t  
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  
\t\t\t\t  <input type=\"text\" name=\"addsalletag\" value=\"addsalle\" hidden>
\t\t\t\t  <input type=\"text\" name=\"addsalle_url\" value=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("pedagogie_addsalle");
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
        
        $__internal_bd04fd8bb2a95487bf5c5760402cf3ea5c3c8a743d74f71f0ac160bf0af2ba23->leave($__internal_bd04fd8bb2a95487bf5c5760402cf3ea5c3c8a743d74f71f0ac160bf0af2ba23_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/salle/addsallelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 73,  70 => 35,  59 => 33,  55 => 32,  22 => 1,);
    }
}
/* <div class="fade modal text-center" id="addsalle">*/
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
/*                 <form class="addsalleform form-horizontal"  method="POST">*/
/* 				*/
/*                   <!-- Nom salle -->*/
/*                   <div class="form-group salle-form-group">*/
/*                     <label> Nom </label>*/
/*                     <input type="text" name="nomsalle" class="form-control" value="">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Lieux de la  salle -->*/
/*                   <div class="form-group salle-form-group">*/
/*                    <label> Lieux </label>*/
/*                     <select id="sallelieuxselect" class="form-control">*/
/* 						{%for lix in alllieux %}*/
/* 						<option value="{{lix.id}}">{{lix.lieux}}</option>*/
/* 						{% endfor %}*/
/* 					</select>*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                  */
/* 				  <!-- Capacité salle -->*/
/*                   <div class="form-group salle-form-group">*/
/*                     <label> Capacité  </label>*/
/*                     <input type="text" name="capsalle" class="form-control" value="">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				   <!-- Audio salle -->*/
/*                   <div class="form-group salle-form-group">*/
/*                     <label> Audio  </label>*/
/* 					<input type="radio" name="audiosalle" value="1" checked="checked"> Oui </input>*/
/* 					<input type="radio" name="audiosalle" value="0"> Non </input>*/
/* 				  <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Retro salle -->*/
/*                   <div class="form-group salle-form-group">*/
/*                     <label> Retro  </label>*/
/* 					<input type="radio" name="retrosalle" value="1" checked="checked"> Oui </input>*/
/* 					<input type="radio" name="retrosalle" value="0"> Non </input>*/
/* 				  <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  */
/* 				   <!-- SHOW ERROR/SUCCESS MESSAGES -->*/
/* 				<div class="form-group salle-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/* 				  */
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  */
/* 				  <input type="text" name="addsalletag" value="addsalle" hidden>*/
/* 				  <input type="text" name="addsalle_url" value="{{ path('pedagogie_addsalle') }}" hidden>*/
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
