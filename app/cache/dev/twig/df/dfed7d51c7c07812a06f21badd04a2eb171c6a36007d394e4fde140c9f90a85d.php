<?php

/* @PedagogiePedagogie/template/user.html.twig */
class __TwigTemplate_a76d221136d273feb0ede4b1f41f77dd1a774d71dc5f1194ca8d6c65806ae5fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@PedagogiePedagogie/template/user.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'submenu' => array($this, 'block_submenu'),
            'bodycontent' => array($this, 'block_bodycontent'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd84da72b813dc6601c68b37929e67f1652abc8ab09bfa28d02f43c776e7bec3 = $this->env->getExtension("native_profiler");
        $__internal_bd84da72b813dc6601c68b37929e67f1652abc8ab09bfa28d02f43c776e7bec3->enter($__internal_bd84da72b813dc6601c68b37929e67f1652abc8ab09bfa28d02f43c776e7bec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/template/user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd84da72b813dc6601c68b37929e67f1652abc8ab09bfa28d02f43c776e7bec3->leave($__internal_bd84da72b813dc6601c68b37929e67f1652abc8ab09bfa28d02f43c776e7bec3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_90fecf89f94f3e7f54ab53577b6464365e202063dd099eb6f57070057df85756 = $this->env->getExtension("native_profiler");
        $__internal_90fecf89f94f3e7f54ab53577b6464365e202063dd099eb6f57070057df85756->enter($__internal_90fecf89f94f3e7f54ab53577b6464365e202063dd099eb6f57070057df85756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Pedagogie - Admin
";
        
        $__internal_90fecf89f94f3e7f54ab53577b6464365e202063dd099eb6f57070057df85756->leave($__internal_90fecf89f94f3e7f54ab53577b6464365e202063dd099eb6f57070057df85756_prof);

    }

    // line 7
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_b404cebe5cd87f374fe2d2ae9c8680a309206ec6d450ac1b06243a931e57687a = $this->env->getExtension("native_profiler");
        $__internal_b404cebe5cd87f374fe2d2ae9c8680a309206ec6d450ac1b06243a931e57687a->enter($__internal_b404cebe5cd87f374fe2d2ae9c8680a309206ec6d450ac1b06243a931e57687a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 8
        echo "        <div class=\"col-xs-2 w3-container menubtn\">
            <a href=\"#\" class=\"tablink \" onclick=\"openMenu(event, 'emploilayout')\">
              <div class=\"w3-container w3-teal w3-padding-hor-1\">
                <div class=\"w3-left\"><i class=\"glyphicon glyphicon-calendar w3-xlarge\"></i></div>
                <div class=\"w3-right\">
                  <h3>??</h3>
                </div>
                <div class=\"w3-clear\"></div>
                <h4> Emploi du temps </h4>
              </div>
             </a>
        </div>
        
    
        
        <div class=\"col-xs-2 w3-container menubtn\">
            <a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'departementlayout')\">
              <div class=\"w3-container w3-red w3-padding-hor-10\">
                <div class=\"w3-left\"><i class=\"glyphicon glyphicon-education w3-xlarge\"></i></div>
                <div class=\"w3-right\">
                  <h3>??</h3>
                </div>
                <div class=\"w3-clear\"></div>
                <h4> Départements </h4>
              </div>
            </a>
        </div>
        
        
        
        <div class=\"col-xs-2 w3-container menubtn\">
            <a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'filierelayout')\">
              <div class=\"w3-container w3-blue w3-padding-hor-10\">
                <div class=\"w3-left\"><i class=\"material-icons w3-xlarge\">class</i></div>
                <div class=\"w3-right\">
                  <h3>??</h3>
                </div>
                <div class=\"w3-clear\"></div>
                <h4> Filieres </h4>
              </div>
            </a>
        </div>
        
        
        
        <div class=\"col-xs-2 w3-container menubtn\">
            <a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'groupelayout')\">
              <div class=\"w3-container w3-blue-grey w3-padding-hor-10\">
                <div class=\"w3-left\"><i class=\"fa fa-group w3-xlarge\"></i></div>
                <div class=\"w3-right\">
                  <h3>??</h3>
                </div>
                <div class=\"w3-clear\"></div>
                <h4> Groupes </h4>
              </div>
            </a>
        </div>
        
        
        <div class=\"col-xs-2 w3-container menubtn\">
            <a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'disciplinelayout')\">
              <div class=\"w3-container w3-light-blue w3-padding-hor-10\">
                <div class=\"w3-left\"><i class=\"material-icons w3-xlarge\">library_books</i></div>
                <div class=\"w3-right\">
                  <h3>??</h3>
                </div>
                <div class=\"w3-clear\"></div>
                <h4> Disciplines </h4>
              </div>
            </a>
        </div>
       
        
        
        <div class=\"col-xs-2 w3-container menubtn\">
            <a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'matierelayout')\">
              <div class=\"w3-container w3-dark-grey w3-padding-hor-10\">
                <div class=\"w3-left\"><i class=\"fa fa-list-alt w3-xlarge\"></i></div>
                <div class=\"w3-right\">
                  <h3>??</h3>
                </div>
                <div class=\"w3-clear\"></div>
                <h4> Matieres </h4>
              </div>
            </a>
        </div>
        
        
    
\t
\t";
        
        $__internal_b404cebe5cd87f374fe2d2ae9c8680a309206ec6d450ac1b06243a931e57687a->leave($__internal_b404cebe5cd87f374fe2d2ae9c8680a309206ec6d450ac1b06243a931e57687a_prof);

    }

    // line 100
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_59fdb6b4f7c64ca06af486b43f9e002b567170bdc76899a1fa06b01f4b59086e = $this->env->getExtension("native_profiler");
        $__internal_59fdb6b4f7c64ca06af486b43f9e002b567170bdc76899a1fa06b01f4b59086e->enter($__internal_59fdb6b4f7c64ca06af486b43f9e002b567170bdc76899a1fa06b01f4b59086e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 101
        echo "\t\t
\t\t";
        // line 102
        $this->loadTemplate("PedagogiePedagogieBundle::admin/emploi/emploilayout.html.twig", "@PedagogiePedagogie/template/user.html.twig", 102)->display($context);
        // line 103
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/departement/departementlayout.html.twig", "@PedagogiePedagogie/template/user.html.twig", 103)->display($context);
        // line 104
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/filiere/filierelayout.html.twig", "@PedagogiePedagogie/template/user.html.twig", 104)->display($context);
        // line 105
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/groupe/groupelayout.html.twig", "@PedagogiePedagogie/template/user.html.twig", 105)->display($context);
        // line 106
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/discipline/disciplinelayout.html.twig", "@PedagogiePedagogie/template/user.html.twig", 106)->display($context);
        // line 107
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/matiere/matierelayout.html.twig", "@PedagogiePedagogie/template/user.html.twig", 107)->display($context);
        // line 108
        echo "\t
\t";
        
        $__internal_59fdb6b4f7c64ca06af486b43f9e002b567170bdc76899a1fa06b01f4b59086e->leave($__internal_59fdb6b4f7c64ca06af486b43f9e002b567170bdc76899a1fa06b01f4b59086e_prof);

    }

    // line 113
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f5015471ad3ef38dddedf269b32bf0162a97db5f7dd7625be42bfc688bbce23b = $this->env->getExtension("native_profiler");
        $__internal_f5015471ad3ef38dddedf269b32bf0162a97db5f7dd7625be42bfc688bbce23b->enter($__internal_f5015471ad3ef38dddedf269b32bf0162a97db5f7dd7625be42bfc688bbce23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 114
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/pedagogie.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f5015471ad3ef38dddedf269b32bf0162a97db5f7dd7625be42bfc688bbce23b->leave($__internal_f5015471ad3ef38dddedf269b32bf0162a97db5f7dd7625be42bfc688bbce23b_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/template/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 115,  194 => 114,  188 => 113,  180 => 108,  177 => 107,  174 => 106,  171 => 105,  168 => 104,  165 => 103,  163 => 102,  160 => 101,  154 => 100,  57 => 8,  51 => 7,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block title %}*/
/* Pedagogie - Admin*/
/* {% endblock %}*/
/* */
/* */
/*     {% block submenu %}*/
/*         <div class="col-xs-2 w3-container menubtn">*/
/*             <a href="#" class="tablink " onclick="openMenu(event, 'emploilayout')">*/
/*               <div class="w3-container w3-teal w3-padding-hor-1">*/
/*                 <div class="w3-left"><i class="glyphicon glyphicon-calendar w3-xlarge"></i></div>*/
/*                 <div class="w3-right">*/
/*                   <h3>??</h3>*/
/*                 </div>*/
/*                 <div class="w3-clear"></div>*/
/*                 <h4> Emploi du temps </h4>*/
/*               </div>*/
/*              </a>*/
/*         </div>*/
/*         */
/*     */
/*         */
/*         <div class="col-xs-2 w3-container menubtn">*/
/*             <a href="#" class="tablink" onclick="openMenu(event, 'departementlayout')">*/
/*               <div class="w3-container w3-red w3-padding-hor-10">*/
/*                 <div class="w3-left"><i class="glyphicon glyphicon-education w3-xlarge"></i></div>*/
/*                 <div class="w3-right">*/
/*                   <h3>??</h3>*/
/*                 </div>*/
/*                 <div class="w3-clear"></div>*/
/*                 <h4> Départements </h4>*/
/*               </div>*/
/*             </a>*/
/*         </div>*/
/*         */
/*         */
/*         */
/*         <div class="col-xs-2 w3-container menubtn">*/
/*             <a href="#" class="tablink" onclick="openMenu(event, 'filierelayout')">*/
/*               <div class="w3-container w3-blue w3-padding-hor-10">*/
/*                 <div class="w3-left"><i class="material-icons w3-xlarge">class</i></div>*/
/*                 <div class="w3-right">*/
/*                   <h3>??</h3>*/
/*                 </div>*/
/*                 <div class="w3-clear"></div>*/
/*                 <h4> Filieres </h4>*/
/*               </div>*/
/*             </a>*/
/*         </div>*/
/*         */
/*         */
/*         */
/*         <div class="col-xs-2 w3-container menubtn">*/
/*             <a href="#" class="tablink" onclick="openMenu(event, 'groupelayout')">*/
/*               <div class="w3-container w3-blue-grey w3-padding-hor-10">*/
/*                 <div class="w3-left"><i class="fa fa-group w3-xlarge"></i></div>*/
/*                 <div class="w3-right">*/
/*                   <h3>??</h3>*/
/*                 </div>*/
/*                 <div class="w3-clear"></div>*/
/*                 <h4> Groupes </h4>*/
/*               </div>*/
/*             </a>*/
/*         </div>*/
/*         */
/*         */
/*         <div class="col-xs-2 w3-container menubtn">*/
/*             <a href="#" class="tablink" onclick="openMenu(event, 'disciplinelayout')">*/
/*               <div class="w3-container w3-light-blue w3-padding-hor-10">*/
/*                 <div class="w3-left"><i class="material-icons w3-xlarge">library_books</i></div>*/
/*                 <div class="w3-right">*/
/*                   <h3>??</h3>*/
/*                 </div>*/
/*                 <div class="w3-clear"></div>*/
/*                 <h4> Disciplines </h4>*/
/*               </div>*/
/*             </a>*/
/*         </div>*/
/*        */
/*         */
/*         */
/*         <div class="col-xs-2 w3-container menubtn">*/
/*             <a href="#" class="tablink" onclick="openMenu(event, 'matierelayout')">*/
/*               <div class="w3-container w3-dark-grey w3-padding-hor-10">*/
/*                 <div class="w3-left"><i class="fa fa-list-alt w3-xlarge"></i></div>*/
/*                 <div class="w3-right">*/
/*                   <h3>??</h3>*/
/*                 </div>*/
/*                 <div class="w3-clear"></div>*/
/*                 <h4> Matieres </h4>*/
/*               </div>*/
/*             </a>*/
/*         </div>*/
/*         */
/*         */
/*     */
/* 	*/
/* 	{% endblock %}*/
/* 	*/
/* 	{% block bodycontent %}*/
/* 		*/
/* 		{% include "PedagogiePedagogieBundle::admin/emploi/emploilayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/departement/departementlayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/filiere/filierelayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/groupe/groupelayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/discipline/disciplinelayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/matiere/matierelayout.html.twig" %}*/
/* 	*/
/* 	{% endblock %}*/
/*     */
/* */
/* */
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/pedagogie.js') }}"></script>*/
/* {% endblock %}*/
