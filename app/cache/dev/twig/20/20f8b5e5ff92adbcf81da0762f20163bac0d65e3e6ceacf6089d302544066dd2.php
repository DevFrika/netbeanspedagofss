<?php

/* @PedagoFssUser/Default/admin.html.twig */
class __TwigTemplate_fc7ae454d17ed63148b492c829bc204538d9c501eecdbeb2c0acc024db59c410 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@PedagoFssUser/Default/admin.html.twig", 1);
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
        $__internal_6f09385045c4d27db66009dcb05b7fde69951a4e726ee224670089c7be28b484 = $this->env->getExtension("native_profiler");
        $__internal_6f09385045c4d27db66009dcb05b7fde69951a4e726ee224670089c7be28b484->enter($__internal_6f09385045c4d27db66009dcb05b7fde69951a4e726ee224670089c7be28b484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagoFssUser/Default/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f09385045c4d27db66009dcb05b7fde69951a4e726ee224670089c7be28b484->leave($__internal_6f09385045c4d27db66009dcb05b7fde69951a4e726ee224670089c7be28b484_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d165af8e349ba338bff9e82e9594ac9a9f148464429d3214f7d1c10ccaa1747d = $this->env->getExtension("native_profiler");
        $__internal_d165af8e349ba338bff9e82e9594ac9a9f148464429d3214f7d1c10ccaa1747d->enter($__internal_d165af8e349ba338bff9e82e9594ac9a9f148464429d3214f7d1c10ccaa1747d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Utilisateur - Admin
";
        
        $__internal_d165af8e349ba338bff9e82e9594ac9a9f148464429d3214f7d1c10ccaa1747d->leave($__internal_d165af8e349ba338bff9e82e9594ac9a9f148464429d3214f7d1c10ccaa1747d_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e4f187ca62b96d2a8a30c19f02ae524c9901be2df8fa5d6476fb88eff1d14eb = $this->env->getExtension("native_profiler");
        $__internal_3e4f187ca62b96d2a8a30c19f02ae524c9901be2df8fa5d6476fb88eff1d14eb->enter($__internal_3e4f187ca62b96d2a8a30c19f02ae524c9901be2df8fa5d6476fb88eff1d14eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("PedagoFssUserBundle::default/dashboardadmin.html.twig", "@PedagoFssUser/Default/admin.html.twig", 40)->display($context);
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
        
        $__internal_3e4f187ca62b96d2a8a30c19f02ae524c9901be2df8fa5d6476fb88eff1d14eb->leave($__internal_3e4f187ca62b96d2a8a30c19f02ae524c9901be2df8fa5d6476fb88eff1d14eb_prof);

    }

    public function getTemplateName()
    {
        return "@PedagoFssUser/Default/admin.html.twig";
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
