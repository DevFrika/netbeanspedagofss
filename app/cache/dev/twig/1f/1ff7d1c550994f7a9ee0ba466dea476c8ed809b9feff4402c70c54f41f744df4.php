<?php

/* @PedagogiePedagogie/admin/matiere/updatematierelayout.html.twig */
class __TwigTemplate_d786017154b0391ee55f4af9b74b125ca8699d08e93bc2499e2c9db231db8dac extends Twig_Template
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
        $__internal_7822fbeb76b3e48f730356d35a472cc163794783ecb9e884e3e2fe6214a1fb73 = $this->env->getExtension("native_profiler");
        $__internal_7822fbeb76b3e48f730356d35a472cc163794783ecb9e884e3e2fe6214a1fb73->enter($__internal_7822fbeb76b3e48f730356d35a472cc163794783ecb9e884e3e2fe6214a1fb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/admin/matiere/updatematierelayout.html.twig"));

        // line 1
        echo "<div id=\"updatemat";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")), "matiere", array()), "html", null, true);
        echo "\" class=\"w3-container tabs w3-animate-zoom\">
\t\t<header class=\"w3-container\" style=\"padding-top:22px\">
\t\t\t<div class=\"w3-left\">
\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'matierelayout')\"  class=\"w3-btn btn btn-info tablink\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t</div>
\t\t\t\t<h3 class=\"text-center\"><b><i class=\"material-icons\">class</i> matiere - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")), "matiere", array()), "html", null, true);
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
                <div class=\"mat-form-group\"> 
\t\t\t\t\t<span class=\"messages-block\"></span>
\t\t\t\t</div>
               
                <!-- FORM -->
                <form name=\"form";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")), "matiere", array()), "html", null, true);
        echo "\"  method=\"POST\" onsubmit=\"updateMatiere(event,'form";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")), "matiere", array()), "html", null, true);
        echo "')\" >
                  <!-- Nom -->
                  <div class=\"mat-form-group\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"updnommatiere\" class=\"form-control\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")), "matiere", array()), "html", null, true);
        echo "\">
                    <span class=\"help-block\"></span>
                  </div>
                  <!-- Password -->
                  <div class=\"mat-form-group\">
                    <label> Departement </label>
                    <input type=\"text\" name=\"upddepmatiere\" class=\"form-control\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")), "matiere", array()), "html", null, true);
        echo "\">
\t\t\t\t\t
                    <span class=\"help-block\"></span>
                  </div>
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  <input type=\"text\" name=\"updmattag\" value=\"updatemat\" hidden>
\t\t\t\t  <input type=\"text\" name=\"oldmatname\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")), "matiere", array()), "html", null, true);
        echo "\" hidden>
\t\t\t\t  <input type=\"text\" name=\"updatematiere_url\" value=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("pedagogie_updatematiere");
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
        
        $__internal_7822fbeb76b3e48f730356d35a472cc163794783ecb9e884e3e2fe6214a1fb73->leave($__internal_7822fbeb76b3e48f730356d35a472cc163794783ecb9e884e3e2fe6214a1fb73_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/admin/matiere/updatematierelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 46,  84 => 45,  73 => 37,  64 => 31,  55 => 27,  31 => 6,  22 => 1,);
    }
}
/* <div id="updatemat{{ mat.matiere }}" class="w3-container tabs w3-animate-zoom">*/
/* 		<header class="w3-container" style="padding-top:22px">*/
/* 			<div class="w3-left">*/
/* 				<a href="#" onclick="closeMenu(event, 'matierelayout')"  class="w3-btn btn btn-info tablink"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 			</div>*/
/* 				<h3 class="text-center"><b><i class="material-icons">class</i> matiere - {{ mat.matiere }} </b></h3>*/
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
/*                 <div class="mat-form-group"> */
/* 					<span class="messages-block"></span>*/
/* 				</div>*/
/*                */
/*                 <!-- FORM -->*/
/*                 <form name="form{{ mat.matiere }}"  method="POST" onsubmit="updateMatiere(event,'form{{ mat.matiere }}')" >*/
/*                   <!-- Nom -->*/
/*                   <div class="mat-form-group">*/
/*                     <label> Nom </label>*/
/*                     <input type="text" name="updnommatiere" class="form-control" value="{{ mat.matiere }}">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                   <!-- Password -->*/
/*                   <div class="mat-form-group">*/
/*                     <label> Departement </label>*/
/*                     <input type="text" name="upddepmatiere" class="form-control" value="{{ mat.matiere }}">*/
/* 					*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  <input type="text" name="updmattag" value="updatemat" hidden>*/
/* 				  <input type="text" name="oldmatname" value="{{ mat.matiere }}" hidden>*/
/* 				  <input type="text" name="updatematiere_url" value="{{ path('pedagogie_updatematiere') }}" hidden>*/
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
