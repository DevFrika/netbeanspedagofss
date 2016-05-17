<?php

/* PedagogiePedagogieBundle:prof/discipline:updatedisciplinelayout.html.twig */
class __TwigTemplate_0ab7b38fa38d3aaa4e647b946d10004c6e2a3e9e406e90d159cbaccd79a11c91 extends Twig_Template
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
        echo "<div id=\"updatedis";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dis"]) ? $context["dis"] : null), "discipline", array()), "html", null, true);
        echo "\" class=\"w3-container tabs w3-animate-zoom\">
\t\t<header class=\"w3-container\" style=\"padding-top:22px\">
\t\t\t<div class=\"w3-left\">
\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'disciplinelayout')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t</div>
\t\t\t\t<h3 class=\"text-center\"><b><i class=\"material-icons\">class</i> discipline - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dis"]) ? $context["dis"] : null), "discipline", array()), "html", null, true);
        echo " </b></h3>
\t\t\t\t
\t\t</header>
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
                <div class=\"dis-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
               
                <!-- FORM -->
                <form name=\"form";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dis"]) ? $context["dis"] : null), "discipline", array()), "html", null, true);
        echo "\"  method=\"POST\" onsubmit=\"updateDiscipline(event,'form";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dis"]) ? $context["dis"] : null), "discipline", array()), "html", null, true);
        echo "')\" >
                  <!-- Nom -->
                  <div class=\"dis-form-group\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"updnomdiscipline\" class=\"form-control\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dis"]) ? $context["dis"] : null), "discipline", array()), "html", null, true);
        echo "\">
                    <span class=\"help-block\"></span>
                  </div>
                  <!-- Password -->
                  <div class=\"dis-form-group\">
                    <label> Departement </label>
                    <input type=\"text\" name=\"upddepdiscipline\" class=\"form-control\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dis"]) ? $context["dis"] : null), "discipline", array()), "html", null, true);
        echo "\">
\t\t\t\t\t
                    <span class=\"help-block\"></span>
                  </div>
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  <input type=\"text\" name=\"upddistag\" value=\"updatedis\" hidden>
\t\t\t\t  <input type=\"text\" name=\"olddisname\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dis"]) ? $context["dis"] : null), "discipline", array()), "html", null, true);
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"updatediscipline_url\" value=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("pedagogie_updatediscipline");
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
        return "PedagogiePedagogieBundle:prof/discipline:updatedisciplinelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 46,  81 => 45,  70 => 37,  61 => 31,  52 => 27,  28 => 6,  19 => 1,);
    }
}
/* <div id="updatedis{{ dis.discipline }}" class="w3-container tabs w3-animate-zoom">*/
/* 		<header class="w3-container" style="padding-top:22px">*/
/* 			<div class="w3-left">*/
/* 				<a href="#" onclick="closeMenu(event, 'disciplinelayout')"  class="w3-btn btn btn-info tablink"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 			</div>*/
/* 				<h3 class="text-center"><b><i class="material-icons">class</i> discipline - {{ dis.discipline }} </b></h3>*/
/* 				*/
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
/*                 <div class="dis-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/*                */
/*                 <!-- FORM -->*/
/*                 <form name="form{{ dis.discipline }}"  method="POST" onsubmit="updateDiscipline(event,'form{{ dis.discipline }}')" >*/
/*                   <!-- Nom -->*/
/*                   <div class="dis-form-group">*/
/*                     <label> Nom </label>*/
/*                     <input type="text" name="updnomdiscipline" class="form-control" value="{{ dis.discipline }}">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                   <!-- Password -->*/
/*                   <div class="dis-form-group">*/
/*                     <label> Departement </label>*/
/*                     <input type="text" name="upddepdiscipline" class="form-control" value="{{ dis.discipline }}">*/
/* 					*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  <input type="text" name="upddistag" value="updatedis" hidden>*/
/* 				  <input type="text" name="olddisname" value="{{ dis.discipline }}" hidden>*/
/* 				  <input type="text" name="updatediscipline_url" value="{{ path('pedagogie_updatediscipline') }}" hidden>*/
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
