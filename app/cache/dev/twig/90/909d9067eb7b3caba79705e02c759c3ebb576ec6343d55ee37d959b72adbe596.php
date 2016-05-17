<?php

/* ::layout_loginform.html.twig */
class __TwigTemplate_8a4709fb8c7768cdc4529c81eeda7194ed926921cd0f95fdef78851246a6702c extends Twig_Template
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
        $__internal_69940b2a85218cc7dc75e2cb48bb30e686555b263ab649c5c0d8e225bb04aa28 = $this->env->getExtension("native_profiler");
        $__internal_69940b2a85218cc7dc75e2cb48bb30e686555b263ab649c5c0d8e225bb04aa28->enter($__internal_69940b2a85218cc7dc75e2cb48bb30e686555b263ab649c5c0d8e225bb04aa28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout_loginform.html.twig"));

        // line 1
        echo "<div id=\"container\" class=\"container-fluid text-center\">
              <div class=\"col-sm-10 col-md-offset-1\" >
                <!-- PAGE TITLE -->
                
                  <h4>
                    <span ></span> </h4>
                
                <!-- SHOW ERROR/SUCCESS MESSAGES -->
                <div id=\"login_messages\">
\t\t\t\t\t<span class=\"help-block\"></span>
\t\t\t\t</div>
\t\t\t\t
                <!-- FORM -->
                <form id=\"connexionform\" method=\"POST\">
\t\t\t\t
                  <!-- E-mail -->
                  <div id=\"email-group\" class=\"form-group\">
                    <label> E-mail </label>
                    <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"e-mail...\">
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
                  <!-- Password -->
                  <div id=\"password-group\" class=\"form-group\">
                    <label></label>
                    <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"password...\">
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
\t\t\t\t  
                  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  <input type=\"text\" name=\"tag\" value=\"login\" hidden>
\t\t\t\t  <input type=\"text\" name=\"login_url\" value=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("user_login");
        echo "\" hidden>
                  <!-- SUBMIT BUTTON -->
                  <button type=\"submit\" class=\"btn btn-success btn-lg btn-block\">
                    <i class=\"glyphicon glyphicon-log-in\"></i> Connexion </button>
                </form>
              </div>
\t\t\t  </div>";
        
        $__internal_69940b2a85218cc7dc75e2cb48bb30e686555b263ab649c5c0d8e225bb04aa28->leave($__internal_69940b2a85218cc7dc75e2cb48bb30e686555b263ab649c5c0d8e225bb04aa28_prof);

    }

    public function getTemplateName()
    {
        return "::layout_loginform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 35,  22 => 1,);
    }
}
/* <div id="container" class="container-fluid text-center">*/
/*               <div class="col-sm-10 col-md-offset-1" >*/
/*                 <!-- PAGE TITLE -->*/
/*                 */
/*                   <h4>*/
/*                     <span ></span> </h4>*/
/*                 */
/*                 <!-- SHOW ERROR/SUCCESS MESSAGES -->*/
/*                 <div id="login_messages">*/
/* 					<span class="help-block"></span>*/
/* 				</div>*/
/* 				*/
/*                 <!-- FORM -->*/
/*                 <form id="connexionform" method="POST">*/
/* 				*/
/*                   <!-- E-mail -->*/
/*                   <div id="email-group" class="form-group">*/
/*                     <label> E-mail </label>*/
/*                     <input type="email" name="email" class="form-control" placeholder="e-mail...">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/*                   <!-- Password -->*/
/*                   <div id="password-group" class="form-group">*/
/*                     <label></label>*/
/*                     <input type="password" name="password" class="form-control" placeholder="password...">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/* 				  */
/*                   <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  <input type="text" name="tag" value="login" hidden>*/
/* 				  <input type="text" name="login_url" value="{{ path('user_login') }}" hidden>*/
/*                   <!-- SUBMIT BUTTON -->*/
/*                   <button type="submit" class="btn btn-success btn-lg btn-block">*/
/*                     <i class="glyphicon glyphicon-log-in"></i> Connexion </button>*/
/*                 </form>*/
/*               </div>*/
/* 			  </div>*/
