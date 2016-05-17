<?php

/* PedagogiePedagogieBundle:template:updatemodulelayout.html.twig */
class __TwigTemplate_c06229f74c39642a7c7140b35c08fd722d3d5059726d711b0819266835b8a1b2 extends Twig_Template
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
        echo "<div id=\"update";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mod"]) ? $context["mod"] : null), "module", array()), "html", null, true);
        echo "\" class=\"w3-container tabs w3-animate-zoom\">
\t\t<header class=\"w3-container\" style=\"padding-top:22px\">
\t\t\t<div class=\"w3-left\">
\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'modulelayout')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t</div>
\t\t\t\t<h3 class=\"text-center\"><b><i class=\"material-icons\">class</i> Filiere - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mod"]) ? $context["mod"] : null), "module", array()), "html", null, true);
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
               
                <!-- FORM -->
                <form name=\"form";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mod"]) ? $context["mod"] : null), "module", array()), "html", null, true);
        echo "\"  method=\"POST\" onsubmit=\"updateFiliere(event,'form";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mod"]) ? $context["mod"] : null), "module", array()), "html", null, true);
        echo "')\" >
                  <!-- Nom -->
                  <div class=\"form-group\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"updnommodule\" class=\"form-control\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mod"]) ? $context["mod"] : null), "module", array()), "html", null, true);
        echo "\">
                    <span class=\"help-block\"></span>
                  </div>
                  <!-- Password -->
                  <div class=\"form-group\">
                    <label> Departement </label>
                    <input type=\"text\" name=\"upddepmodule\" class=\"form-control\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fil"]) ? $context["fil"] : null), "departement", array()), "departement", array()), "html", null, true);
        echo "\">
\t\t\t\t\t
                    <span class=\"help-block\"></span>
                  </div>
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  <input type=\"text\" name=\"updmodtag\" value=\"updatemod\" hidden>
\t\t\t\t  <input type=\"text\" name=\"oldmodname\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mod"]) ? $context["mod"] : null), "module", array()), "html", null, true);
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"updatefiliere_url\" value=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("pedagogie_updatemodule");
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
        return "PedagogiePedagogieBundle:template:updatemodulelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 42,  82 => 41,  71 => 33,  62 => 27,  53 => 23,  38 => 10,  34 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* <div id="update{{ mod.module  }}" class="w3-container tabs w3-animate-zoom">*/
/* 		<header class="w3-container" style="padding-top:22px">*/
/* 			<div class="w3-left">*/
/* 				<a href="#" onclick="closeMenu(event, 'modulelayout')"  class="w3-btn btn btn-info tablink"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 			</div>*/
/* 				<h3 class="text-center"><b><i class="material-icons">class</i> Filiere - {{ mod.module }} </b></h3>*/
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
/*                */
/*                 <!-- FORM -->*/
/*                 <form name="form{{ mod.module  }}"  method="POST" onsubmit="updateFiliere(event,'form{{ mod.module  }}')" >*/
/*                   <!-- Nom -->*/
/*                   <div class="form-group">*/
/*                     <label> Nom </label>*/
/*                     <input type="text" name="updnommodule" class="form-control" value="{{ mod.module  }}">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                   <!-- Password -->*/
/*                   <div class="form-group">*/
/*                     <label> Departement </label>*/
/*                     <input type="text" name="upddepmodule" class="form-control" value="{{ fil.departement.departement }}">*/
/* 					*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  <input type="text" name="updmodtag" value="updatemod" hidden>*/
/* 				  <input type="text" name="oldmodname" value="{{ mod.module  }}" hidden>*/
/* 				  <input type="text" name="updatefiliere_url" value="{{ path('pedagogie_updatemodule') }}" hidden>*/
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
