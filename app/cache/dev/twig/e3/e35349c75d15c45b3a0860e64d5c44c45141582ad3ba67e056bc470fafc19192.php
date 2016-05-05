<?php

/* @PedagogiePedagogie/admin/voeux/updatevoeuxlayout.html.twig */
class __TwigTemplate_ed291e7fe5b5f7aa2c2a004e4761612c33e1660927b1946756434531b3241da8 extends Twig_Template
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
        $__internal_85689e9c0f8eab18bc47438e84ab0e77795dd01fc003462990a76e4565199606 = $this->env->getExtension("native_profiler");
        $__internal_85689e9c0f8eab18bc47438e84ab0e77795dd01fc003462990a76e4565199606->enter($__internal_85689e9c0f8eab18bc47438e84ab0e77795dd01fc003462990a76e4565199606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/admin/voeux/updatevoeuxlayout.html.twig"));

        // line 1
        echo "<div id=\"updateveu";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "voeux", array()), "html", null, true);
        echo "\" class=\"w3-container tabs w3-animate-zoom\">
\t\t<header class=\"w3-container\" style=\"padding-top:22px\">
\t\t\t<div class=\"w3-left\">
\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'voeuxlayout')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t</div>
\t\t\t\t<h3 class=\"text-center\"><b><i class=\"material-icons\">class</i> voeux - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "voeux", array()), "html", null, true);
        echo " </b></h3>
\t\t\t\t";
        // line 7
        if (((array_key_exists("session_id", $context) && ((isset($context["session_id"]) ? $context["session_id"] : $this->getContext($context, "session_id")) != null)) && ((isset($context["typeuser"]) ? $context["typeuser"] : $this->getContext($context, "typeuser")) == "admin"))) {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "voeux", array()), "html", null, true);
        echo "\"  method=\"POST\" onsubmit=\"updateVoeux(event,'form";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "voeux", array()), "html", null, true);
        echo "')\" >
                  <!-- Nom -->
                  <div class=\"veu-form-group\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"updnomvoeux\" class=\"form-control\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "voeux", array()), "html", null, true);
        echo "\">
                    <span class=\"help-block\"></span>
                  </div>
                  <!-- Password -->
                  <div class=\"veu-form-group\">
                    <label> Departement </label>
                    <input type=\"text\" name=\"upddepvoeux\" class=\"form-control\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "departement", array()), "departement", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["veu"]) ? $context["veu"] : $this->getContext($context, "veu")), "voeux", array()), "html", null, true);
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
        
        $__internal_85689e9c0f8eab18bc47438e84ab0e77795dd01fc003462990a76e4565199606->leave($__internal_85689e9c0f8eab18bc47438e84ab0e77795dd01fc003462990a76e4565199606_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/voeux/updatevoeuxlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 48,  91 => 47,  80 => 39,  71 => 33,  62 => 29,  41 => 10,  37 => 8,  35 => 7,  31 => 6,  22 => 1,);
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
