<?php

/* layout_signinform.html.twig */
class __TwigTemplate_b220e023f525a936ea561c5a66c9785ce34b2f04deda62c0e74facb90c31c473 extends Twig_Template
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
        $__internal_1355e8eb22da633b6bc015979bedd84701f75e6e086473d1b42d1477c3e53945 = $this->env->getExtension("native_profiler");
        $__internal_1355e8eb22da633b6bc015979bedd84701f75e6e086473d1b42d1477c3e53945->enter($__internal_1355e8eb22da633b6bc015979bedd84701f75e6e086473d1b42d1477c3e53945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout_signinform.html.twig"));

        // line 1
        echo "<div id=\"container\" class=\"container-fluid text-center\">
              <div class=\"col-md-10 col-md-offset-1\">
                <!-- PAGE TITLE -->
                
                  
                
                <!-- SHOW ERROR/SUCCESS MESSAGES -->
                <div id=\"register_messages\"></div>
                <!-- FORM -->
                <form id=\"inscriptionform\" method=\"POST\">
\t\t\t\t
\t\t\t\t<!-- Family Name -->
                  <div id=\"reg_username-group\" class=\"form-group\">
                    <label> Nom </label>
                    <input type=\"text\" name=\"reg_famname\" class=\"form-control\" placeholder=\" \"> 
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t
\t\t\t\t<!-- Surname -->
                  <div id=\"reg_username-group\" class=\"form-group\">
                    <label> Prénom </label>
                    <input type=\"text\" name=\"reg_surname\" class=\"form-control\" placeholder=\" \"> 
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t
\t\t\t\t<!-- Username -->
                  <div id=\"reg_username-group\" class=\"form-group\">
                    <label> Username </label>
                    <input type=\"text\" name=\"reg_username\" class=\"form-control\" placeholder=\" \"> 
                    <span class=\"help-block\"></span>
                  </div>
\t\t\t\t  
                  <!-- E-mail -->
                  <div id=\"reg_email-group\" class=\"form-group\">
                    <label> E-mail </label>
                    <input type=\"email\" name=\"reg_email\" class=\"form-control\" placeholder=\"\">
                    <span class=\"help-block\"></span>
                  </div>
                  
\t\t\t\t  <!-- Password -->
                  <div id=\"reg_password-group\" class=\"form-group\">
                    <label> Password </label>
                    <input type=\"password\" name=\"reg_password\" class=\"form-control\" placeholder=\"\">
                    <span class=\"help-block\"></span>
                  </div>
                  
\t\t\t\t  <span class=\"ajax_wait\" align=\"center\">
                    <!--don't delete this span class=\"ajax_wait\"-->
                  </span>
\t\t\t\t  <input type=\"text\" name=\"reg_tag\" value=\"register\" hidden>
\t\t\t\t  <input type=\"text\" name=\"register_url\" value=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("user_signin");
        echo "\" hidden>
                  <!-- SUBMIT BUTTON -->
                  <button type=\"submit\" class=\"btn btn-success btn-lg btn-block\">
                    <i class=\"glyphicon glyphicon-user\"></i> S'inscrire </button>
                </form>
              </div>
            </div>";
        
        $__internal_1355e8eb22da633b6bc015979bedd84701f75e6e086473d1b42d1477c3e53945->leave($__internal_1355e8eb22da633b6bc015979bedd84701f75e6e086473d1b42d1477c3e53945_prof);

    }

    public function getTemplateName()
    {
        return "layout_signinform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 51,  22 => 1,);
    }
}
/* <div id="container" class="container-fluid text-center">*/
/*               <div class="col-md-10 col-md-offset-1">*/
/*                 <!-- PAGE TITLE -->*/
/*                 */
/*                   */
/*                 */
/*                 <!-- SHOW ERROR/SUCCESS MESSAGES -->*/
/*                 <div id="register_messages"></div>*/
/*                 <!-- FORM -->*/
/*                 <form id="inscriptionform" method="POST">*/
/* 				*/
/* 				<!-- Family Name -->*/
/*                   <div id="reg_username-group" class="form-group">*/
/*                     <label> Nom </label>*/
/*                     <input type="text" name="reg_famname" class="form-control" placeholder=" "> */
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				*/
/* 				<!-- Surname -->*/
/*                   <div id="reg_username-group" class="form-group">*/
/*                     <label> Prénom </label>*/
/*                     <input type="text" name="reg_surname" class="form-control" placeholder=" "> */
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				*/
/* 				<!-- Username -->*/
/*                   <div id="reg_username-group" class="form-group">*/
/*                     <label> Username </label>*/
/*                     <input type="text" name="reg_username" class="form-control" placeholder=" "> */
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/* 				  */
/*                   <!-- E-mail -->*/
/*                   <div id="reg_email-group" class="form-group">*/
/*                     <label> E-mail </label>*/
/*                     <input type="email" name="reg_email" class="form-control" placeholder="">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                   */
/* 				  <!-- Password -->*/
/*                   <div id="reg_password-group" class="form-group">*/
/*                     <label> Password </label>*/
/*                     <input type="password" name="reg_password" class="form-control" placeholder="">*/
/*                     <span class="help-block"></span>*/
/*                   </div>*/
/*                   */
/* 				  <span class="ajax_wait" align="center">*/
/*                     <!--don't delete this span class="ajax_wait"-->*/
/*                   </span>*/
/* 				  <input type="text" name="reg_tag" value="register" hidden>*/
/* 				  <input type="text" name="register_url" value="{{ path('user_signin') }}" hidden>*/
/*                   <!-- SUBMIT BUTTON -->*/
/*                   <button type="submit" class="btn btn-success btn-lg btn-block">*/
/*                     <i class="glyphicon glyphicon-user"></i> S'inscrire </button>*/
/*                 </form>*/
/*               </div>*/
/*             </div>*/
