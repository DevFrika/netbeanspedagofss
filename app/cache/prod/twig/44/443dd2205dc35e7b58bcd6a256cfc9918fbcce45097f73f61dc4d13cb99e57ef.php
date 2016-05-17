<?php

/* PedagogiePedagogieBundle:admin/lieux:updatelieuxlayout.html.twig */
class __TwigTemplate_ce6018402928695fbf1d008d6f1d3dc6257102cec0f822bdfda3ade88185a67d extends Twig_Template
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
        echo "<div id=\"updatelieux";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieux"]) ? $context["lieux"] : null), "id", array()), "html", null, true);
        echo "\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t<header class=\"w3-container\" style=\"padding-top:22px\">
\t\t\t<div class=\"w3-left\">
\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'lieuxlayout')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t</div>
\t\t\t\t<h3 class=\"text-center\"><b><i class=\"material-icons\">class</i> Lieux - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieux"]) ? $context["lieux"] : null), "lieux", array()), "html", null, true);
        echo " </b></h3>
\t\t\t\t
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
\t\t\t\t\t<!-- SHOW ERROR/SUCCESS MESSAGES -->
\t\t\t\t
                <div class=\"lieux-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
               
                <!-- FORM -->
                <form id=\"formlieux";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieux"]) ? $context["lieux"] : null), "id", array()), "html", null, true);
        echo "\" name=\"formlieux";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieux"]) ? $context["lieux"] : null), "id", array()), "html", null, true);
        echo "\"  method=\"POST\" onsubmit=\"updateLieux(event,'formlieux";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieux"]) ? $context["lieux"] : null), "id", array()), "html", null, true);
        echo "')\" >
                 
\t\t\t\t  <!-- Nom lieux -->
                  <div class=\"form-group lieux-form-group\">
                    <label> Nom Lieux </label>
                    <input type=\"text\" name=\"updnomlieux\" class=\"form-control\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieux"]) ? $context["lieux"] : null), "lieux", array()), "html", null, true);
        echo "\">
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  <!-- Code lieux -->
                  <div class=\"form-group lieux-form-group\">
                    <label> Code Lieux </label>
                    <input type=\"text\" name=\"updcodelieux\" class=\"form-control\" placeholder=\"Description de la  lieux\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieux"]) ? $context["lieux"] : null), "code", array()), "html", null, true);
        echo "\">
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t 
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  <input type=\"text\" name=\"updlieuxtag\" value=\"updatelieux\" hidden>
\t\t\t\t  <input type=\"text\" name=\"oldlieuxname\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieux"]) ? $context["lieux"] : null), "id", array()), "html", null, true);
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"updatelieux_url\" value=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("pedagogie_updatelieux");
        echo "\" hidden>
                  <!-- SUBMIT BUTTON -->
                  <button type=\"submit\" class=\"btn btn-success btn-lg btn-block\">
                    Enregistrer <i class=\"glyphicon glyphicon-save\"></i> </button>
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
        return "PedagogiePedagogieBundle:admin/lieux:updatelieuxlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 48,  85 => 47,  74 => 39,  64 => 32,  52 => 27,  28 => 6,  19 => 1,);
    }
}
/* <div id="updatelieux{{ lieux.id}}" class="tabs w3-container w3-section w3-animate-left">*/
/* 		<header class="w3-container" style="padding-top:22px">*/
/* 			<div class="w3-left">*/
/* 				<a href="#" onclick="closeMenu(event, 'lieuxlayout')"  class="w3-btn btn btn-info tablink"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 			</div>*/
/* 				<h3 class="text-center"><b><i class="material-icons">class</i> Lieux - {{ lieux.lieux }} </b></h3>*/
/* 				*/
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
/* 					<!-- SHOW ERROR/SUCCESS MESSAGES -->*/
/* 				*/
/*                 <div class="lieux-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/*                */
/*                 <!-- FORM -->*/
/*                 <form id="formlieux{{ lieux.id }}" name="formlieux{{ lieux.id }}"  method="POST" onsubmit="updateLieux(event,'formlieux{{ lieux.id }}')" >*/
/*                  */
/* 				  <!-- Nom lieux -->*/
/*                   <div class="form-group lieux-form-group">*/
/*                     <label> Nom Lieux </label>*/
/*                     <input type="text" name="updnomlieux" class="form-control" value="{{ lieux.lieux }}">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  <!-- Code lieux -->*/
/*                   <div class="form-group lieux-form-group">*/
/*                     <label> Code Lieux </label>*/
/*                     <input type="text" name="updcodelieux" class="form-control" placeholder="Description de la  lieux" value="{{ lieux.code }}">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				 */
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  <input type="text" name="updlieuxtag" value="updatelieux" hidden>*/
/* 				  <input type="text" name="oldlieuxname" value="{{ lieux.id }}" hidden>*/
/* 				  <input type="text" name="updatelieux_url" value="{{ path('pedagogie_updatelieux') }}" hidden>*/
/*                   <!-- SUBMIT BUTTON -->*/
/*                   <button type="submit" class="btn btn-success btn-lg btn-block">*/
/*                     Enregistrer <i class="glyphicon glyphicon-save"></i> </button>*/
/*                 </form>*/
/*               </div>*/
/* 			  </div>*/
/* 				*/
/* 		*/
/* 	*/
/* 	</div>*/
/* */
