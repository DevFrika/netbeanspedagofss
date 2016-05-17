<?php

/* PedagoFssUserBundle:Default:admin.html.twig */
class __TwigTemplate_db25ae1e925bf2d0a19d1f1861c322b9f6691c09700f655c0a8f871cb1418a94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PedagoFssUserBundle:Default:admin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0413bd07265c21b482e405cd66f504ea9b5b2375fc0545273c2a2bcaa1a6f759 = $this->env->getExtension("native_profiler");
        $__internal_0413bd07265c21b482e405cd66f504ea9b5b2375fc0545273c2a2bcaa1a6f759->enter($__internal_0413bd07265c21b482e405cd66f504ea9b5b2375fc0545273c2a2bcaa1a6f759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagoFssUserBundle:Default:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0413bd07265c21b482e405cd66f504ea9b5b2375fc0545273c2a2bcaa1a6f759->leave($__internal_0413bd07265c21b482e405cd66f504ea9b5b2375fc0545273c2a2bcaa1a6f759_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_92c238bed2d57e087bf32969ab684924a17157c5303fed25ed8c6a2133772d66 = $this->env->getExtension("native_profiler");
        $__internal_92c238bed2d57e087bf32969ab684924a17157c5303fed25ed8c6a2133772d66->enter($__internal_92c238bed2d57e087bf32969ab684924a17157c5303fed25ed8c6a2133772d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Utilisateur - Admin
";
        
        $__internal_92c238bed2d57e087bf32969ab684924a17157c5303fed25ed8c6a2133772d66->leave($__internal_92c238bed2d57e087bf32969ab684924a17157c5303fed25ed8c6a2133772d66_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a3480d6feeb77b5acfc0eeb79eacdd24a13d170ca6711015e765b64bdccbf9f = $this->env->getExtension("native_profiler");
        $__internal_3a3480d6feeb77b5acfc0eeb79eacdd24a13d170ca6711015e765b64bdccbf9f->enter($__internal_3a3480d6feeb77b5acfc0eeb79eacdd24a13d170ca6711015e765b64bdccbf9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "

<nav class=\"w3-sidenav w3-dark-white w3-card-2 w3-animate-left\" style=\"display:none\">
  <a href=\"javascript:void(0)\" onclick=\"w3_close()\" class=\"w3-closenav w3-large\">Fermer<i class=\"glyphicon glyphicon-remove\"></i> </a>
  <a href=\"#\" class=\"tablink\" onclick=\"openTabs(event, 'documents')\">Gerer 1 <i class=\"glyphicon glyphicon-book\"></i></a>
  <a href=\"#\" class=\"tablink\" onclick=\"openTabs(event, 'index')\"> Gerer 2 <i class=\"glyphicon glyphicon-list-alt\"></i></a>\t\t
  <a href=\"#\" class=\"tablink\" onclick=\"openTabs(event, 'construct')\"> Gerer 3 <i class=\"glyphicon glyphicon-list-alt\"></i>  </a>
  <a href=\"#\" class=\"tablink\" onclick=\"openTabs(event, 'dashboard')\">Dashboard <i class=\"glyphicon glyphicon-th-list\"></i></a>
</nav>

<div id=\"main\">

<header class=\"w3-container w3-blue\">
  <span class=\"w3-opennav w3-xlarge pull-left\" onclick=\"w3_open()\">&#9776;</span>
  <h1> ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "MENU_ESPACE", array(), "array"), "html", null, true);
        echo " </h1>
  
</header>


<div class=\"w3-container pull-left\" style=\"margin-left:130px\">

    <div id=\"userinfo\" class=\"w3-container userinfo w3-animate-left\">
        
        <h2> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "USER_WELCOME", array(), "array"), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["nomuser"]) ? $context["nomuser"] : $this->getContext($context, "nomuser")), "html", null, true);
        echo " </h2>
          
          
          
          
           
    </div>
    
  
       
        ";
        // line 40
        $this->loadTemplate("PedagoFssUserBundle::default/dashboardadmin.html.twig", "PedagoFssUserBundle:Default:admin.html.twig", 40)->display($context);
        // line 41
        echo "        
   
        
    
        <div id=\"documents\" class=\"w3-container tabs w3-animate-left col-md-8\" >
            
            <div class=\"row\">
          <div class=\"col-md-8\">
            <h2 class=\"text-center\">\${maplangue[\"MyDocs\"]}</h2>
    
        <button type=\"button\" id=\"button-adddoc\" class=\"center-block text-center btn btn-sm btn-success\" role=\"button\" data-target=\"#adddoc-modal\" data-toggle=\"modal\">
        \${maplangue[\"AddDoc\"]} <i class=\"glyphicon glyphicon-plus\"></i></button>
        
          </div>
        </div>
            <br>
            
                
                
           
            
            
        </div>
            
            

        
  <div id=\"index\" class=\"w3-container tabs w3-animate-opacity\">
  
    
  </div>

  <div id=\"construct\" class=\"w3-container tabs w3-animate-zoom\">
    
      
 
<a href=\"#\" onclick=\"openTabs(event, 'buildindex')\"  class=\"w3-btn btn btn-info tablink\"> Const Admin </a>


        
    
     
    
   </div>
   


  

</div>



</div>
       



";
        
        $__internal_3a3480d6feeb77b5acfc0eeb79eacdd24a13d170ca6711015e765b64bdccbf9f->leave($__internal_3a3480d6feeb77b5acfc0eeb79eacdd24a13d170ca6711015e765b64bdccbf9f_prof);

    }

    public function getTemplateName()
    {
        return "PedagoFssUserBundle:Default:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 41,  98 => 40,  83 => 30,  71 => 21,  55 => 7,  49 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block title %}*/
/* Utilisateur - Admin*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* <nav class="w3-sidenav w3-dark-white w3-card-2 w3-animate-left" style="display:none">*/
/*   <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-large">Fermer<i class="glyphicon glyphicon-remove"></i> </a>*/
/*   <a href="#" class="tablink" onclick="openTabs(event, 'documents')">Gerer 1 <i class="glyphicon glyphicon-book"></i></a>*/
/*   <a href="#" class="tablink" onclick="openTabs(event, 'index')"> Gerer 2 <i class="glyphicon glyphicon-list-alt"></i></a>		*/
/*   <a href="#" class="tablink" onclick="openTabs(event, 'construct')"> Gerer 3 <i class="glyphicon glyphicon-list-alt"></i>  </a>*/
/*   <a href="#" class="tablink" onclick="openTabs(event, 'dashboard')">Dashboard <i class="glyphicon glyphicon-th-list"></i></a>*/
/* </nav>*/
/* */
/* <div id="main">*/
/* */
/* <header class="w3-container w3-blue">*/
/*   <span class="w3-opennav w3-xlarge pull-left" onclick="w3_open()">&#9776;</span>*/
/*   <h1> {{ lang['MENU_ESPACE'] }} </h1>*/
/*   */
/* </header>*/
/* */
/* */
/* <div class="w3-container pull-left" style="margin-left:130px">*/
/* */
/*     <div id="userinfo" class="w3-container userinfo w3-animate-left">*/
/*         */
/*         <h2> {{ lang['USER_WELCOME'] }}  {{ nomuser }} </h2>*/
/*           */
/*           */
/*           */
/*           */
/*            */
/*     </div>*/
/*     */
/*   */
/*        */
/*         {% include "PedagoFssUserBundle::default/dashboardadmin.html.twig" %}*/
/*         */
/*    */
/*         */
/*     */
/*         <div id="documents" class="w3-container tabs w3-animate-left col-md-8" >*/
/*             */
/*             <div class="row">*/
/*           <div class="col-md-8">*/
/*             <h2 class="text-center">${maplangue["MyDocs"]}</h2>*/
/*     */
/*         <button type="button" id="button-adddoc" class="center-block text-center btn btn-sm btn-success" role="button" data-target="#adddoc-modal" data-toggle="modal">*/
/*         ${maplangue["AddDoc"]} <i class="glyphicon glyphicon-plus"></i></button>*/
/*         */
/*           </div>*/
/*         </div>*/
/*             <br>*/
/*             */
/*                 */
/*                 */
/*            */
/*             */
/*             */
/*         </div>*/
/*             */
/*             */
/* */
/*         */
/*   <div id="index" class="w3-container tabs w3-animate-opacity">*/
/*   */
/*     */
/*   </div>*/
/* */
/*   <div id="construct" class="w3-container tabs w3-animate-zoom">*/
/*     */
/*       */
/*  */
/* <a href="#" onclick="openTabs(event, 'buildindex')"  class="w3-btn btn btn-info tablink"> Const Admin </a>*/
/* */
/* */
/*         */
/*     */
/*      */
/*     */
/*    </div>*/
/*    */
/* */
/* */
/*   */
/* */
/* </div>*/
/* */
/* */
/* */
/* </div>*/
/*        */
/* */
/* */
/* */
/* {% endblock %}*/
