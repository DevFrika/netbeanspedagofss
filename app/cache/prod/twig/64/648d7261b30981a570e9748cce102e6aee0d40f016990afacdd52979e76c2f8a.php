<?php

/* @PedagogiePedagogie/normal/voeux/updatevoeuxlayout.html.twig */
class __TwigTemplate_269f83992d96cc83f6fa029c67836040c8fb434747b719bfd20be816ce61bab8 extends Twig_Template
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
        echo "<div id=\"updateveu";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : null), "voeux", array()), "html", null, true);
        echo "\" class=\"w3-container tabs w3-animate-zoom\">
\t\t<header class=\"w3-container\" style=\"padding-top:22px\">
\t\t\t<div class=\"w3-left\">
\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'voeuxlayout')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t</div>
\t\t\t\t<h3 class=\"text-center\"><b><i class=\"material-icons\">class</i> voeux - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : null), "voeux", array()), "html", null, true);
        echo " </b></h3>
\t\t\t\t";
        // line 7
        if (((array_key_exists("session_id", $context) && ((isset($context["session_id"]) ? $context["session_id"] : null) != null)) && ((isset($context["typeuser"]) ? $context["typeuser"] : null) == "admin"))) {
            // line 8
            echo "\t\t\t
\t\t\t\t";
        }
        // line 10
        echo "\t\t</header>
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
                <div class=\"veu-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
               
                <!-- FORM -->
                <form name=\"form";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : null), "voeux", array()), "html", null, true);
        echo "\"  method=\"POST\" onsubmit=\"updateVoeux(event,'form";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : null), "voeux", array()), "html", null, true);
        echo "')\" >
                  <!-- Nom -->
                  <div class=\"veu-form-group\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"updnomvoeux\" class=\"form-control\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : null), "voeux", array()), "html", null, true);
        echo "\">
                    <span class=\"help-block\"></span>
                  </div>
                  <!-- Password -->
                  <div class=\"veu-form-group\">
                    <label> Departement </label>
                    <input type=\"text\" name=\"upddepvoeux\" class=\"form-control\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["veu"]) ? $context["veu"] : null), "departement", array()), "departement", array()), "html", null, true);
        echo "\">
\t\t\t\t\t
                    <span class=\"help-block\"></span>
                  </div>
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  <input type=\"text\" name=\"updveutag\" value=\"updateveu\" hidden>
\t\t\t\t  <input type=\"text\" name=\"oldveuname\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : null), "voeux", array()), "html", null, true);
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"updatevoeux_url\" value=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("pedagogie_updatevoeux");
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
        return "@PedagogiePedagogie/normal/voeux/updatevoeuxlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 48,  88 => 47,  77 => 39,  68 => 33,  59 => 29,  38 => 10,  34 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* <div id="updateveu{{ veu.voeux }}" class="w3-container tabs w3-animate-zoom">*/
/* 		<header class="w3-container" style="padding-top:22px">*/
/* 			<div class="w3-left">*/
/* 				<a href="#" onclick="closeMenu(event, 'voeuxlayout')"  class="w3-btn btn btn-info tablink"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 			</div>*/
/* 				<h3 class="text-center"><b><i class="material-icons">class</i> voeux - {{ veu.voeux }} </b></h3>*/
/* 				{% if session_id is defined and session_id != null and typeuser == "admin" %}*/
/* 			*/
/* 				{% endif %}*/
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
/*                 <div class="veu-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/*                */
/*                 <!-- FORM -->*/
/*                 <form name="form{{ veu.voeux }}"  method="POST" onsubmit="updateVoeux(event,'form{{ veu.voeux }}')" >*/
/*                   <!-- Nom -->*/
/*                   <div class="veu-form-group">*/
/*                     <label> Nom </label>*/
/*                     <input type="text" name="updnomvoeux" class="form-control" value="{{ veu.voeux }}">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                   <!-- Password -->*/
/*                   <div class="veu-form-group">*/
/*                     <label> Departement </label>*/
/*                     <input type="text" name="upddepvoeux" class="form-control" value="{{ veu.departement.departement }}">*/
/* 					*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  <input type="text" name="updveutag" value="updateveu" hidden>*/
/* 				  <input type="text" name="oldveuname" value="{{ veu.voeux }}" hidden>*/
/* 				  <input type="text" name="updatevoeux_url" value="{{ path('pedagogie_updatevoeux') }}" hidden>*/
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