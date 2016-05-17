<?php

/* @PedagogiePedagogie/template/updatemodulelayout.html.twig */
class __TwigTemplate_50affa485ebd7b0e9c5aadf0031fb29ed2dcc88e71d681599f0fd22a86b0d4fd extends Twig_Template
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
        $__internal_f2deb7342fa94b86b52b8046181cb7f3968d305a0c0dd52836c1da7e3567bfc4 = $this->env->getExtension("native_profiler");
        $__internal_f2deb7342fa94b86b52b8046181cb7f3968d305a0c0dd52836c1da7e3567bfc4->enter($__internal_f2deb7342fa94b86b52b8046181cb7f3968d305a0c0dd52836c1da7e3567bfc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/template/updatemodulelayout.html.twig"));

        // line 1
        echo "<div id=\"update";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mod"]) ? $context["mod"] : $this->getContext($context, "mod")), "module", array()), "html", null, true);
        echo "\" class=\"w3-container tabs w3-animate-zoom\">
\t\t<header class=\"w3-container\" style=\"padding-top:22px\">
\t\t\t<div class=\"w3-left\">
\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'modulelayout')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t</div>
\t\t\t\t<h3 class=\"text-center\"><b><i class=\"material-icons\">class</i> Filiere - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mod"]) ? $context["mod"] : $this->getContext($context, "mod")), "module", array()), "html", null, true);
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
               
                <!-- FORM -->
                <form name=\"form";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mod"]) ? $context["mod"] : $this->getContext($context, "mod")), "module", array()), "html", null, true);
        echo "\"  method=\"POST\" onsubmit=\"updateFiliere(event,'form";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mod"]) ? $context["mod"] : $this->getContext($context, "mod")), "module", array()), "html", null, true);
        echo "')\" >
                  <!-- Nom -->
                  <div class=\"form-group\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"updnommodule\" class=\"form-control\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mod"]) ? $context["mod"] : $this->getContext($context, "mod")), "module", array()), "html", null, true);
        echo "\">
                    <span class=\"help-block\"></span>
                  </div>
                  <!-- Password -->
                  <div class=\"form-group\">
                    <label> Departement </label>
                    <input type=\"text\" name=\"upddepmodule\" class=\"form-control\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fil"]) ? $context["fil"] : $this->getContext($context, "fil")), "departement", array()), "departement", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mod"]) ? $context["mod"] : $this->getContext($context, "mod")), "module", array()), "html", null, true);
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
        
        $__internal_f2deb7342fa94b86b52b8046181cb7f3968d305a0c0dd52836c1da7e3567bfc4->leave($__internal_f2deb7342fa94b86b52b8046181cb7f3968d305a0c0dd52836c1da7e3567bfc4_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/template/updatemodulelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 42,  85 => 41,  74 => 33,  65 => 27,  56 => 23,  41 => 10,  37 => 8,  35 => 7,  31 => 6,  22 => 1,);
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
