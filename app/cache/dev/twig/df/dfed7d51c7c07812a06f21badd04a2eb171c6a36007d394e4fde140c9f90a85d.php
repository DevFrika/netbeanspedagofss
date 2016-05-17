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
        $__internal_5d66db41b4eb239d0c47425daf8bca587aca6f8e616a7f8e632935ba1597e2c4 = $this->env->getExtension("native_profiler");
        $__internal_5d66db41b4eb239d0c47425daf8bca587aca6f8e616a7f8e632935ba1597e2c4->enter($__internal_5d66db41b4eb239d0c47425daf8bca587aca6f8e616a7f8e632935ba1597e2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/template/user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d66db41b4eb239d0c47425daf8bca587aca6f8e616a7f8e632935ba1597e2c4->leave($__internal_5d66db41b4eb239d0c47425daf8bca587aca6f8e616a7f8e632935ba1597e2c4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9b790517e99306d8845b8c19fcb72270c6b68f75974daa3465dc12cd335967b = $this->env->getExtension("native_profiler");
        $__internal_b9b790517e99306d8845b8c19fcb72270c6b68f75974daa3465dc12cd335967b->enter($__internal_b9b790517e99306d8845b8c19fcb72270c6b68f75974daa3465dc12cd335967b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Pedagogie - Admin
";
        
        $__internal_b9b790517e99306d8845b8c19fcb72270c6b68f75974daa3465dc12cd335967b->leave($__internal_b9b790517e99306d8845b8c19fcb72270c6b68f75974daa3465dc12cd335967b_prof);

    }

    // line 7
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_a8d9565d76f7e02d135919c9e200f5445e64294614ac0744a71d67ebb44163fb = $this->env->getExtension("native_profiler");
        $__internal_a8d9565d76f7e02d135919c9e200f5445e64294614ac0744a71d67ebb44163fb->enter($__internal_a8d9565d76f7e02d135919c9e200f5445e64294614ac0744a71d67ebb44163fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

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
        
        $__internal_a8d9565d76f7e02d135919c9e200f5445e64294614ac0744a71d67ebb44163fb->leave($__internal_a8d9565d76f7e02d135919c9e200f5445e64294614ac0744a71d67ebb44163fb_prof);

    }

    // line 100
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_9726d7cffab8b712de4f23595a6183cff86f0b16f02f64d9f44333b3b5f2f0d5 = $this->env->getExtension("native_profiler");
        $__internal_9726d7cffab8b712de4f23595a6183cff86f0b16f02f64d9f44333b3b5f2f0d5->enter($__internal_9726d7cffab8b712de4f23595a6183cff86f0b16f02f64d9f44333b3b5f2f0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

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
        
        $__internal_9726d7cffab8b712de4f23595a6183cff86f0b16f02f64d9f44333b3b5f2f0d5->leave($__internal_9726d7cffab8b712de4f23595a6183cff86f0b16f02f64d9f44333b3b5f2f0d5_prof);

    }

    // line 113
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_16a56316d5597679f339e7a2a6e5968197716eed38f76a3e5eb59fa78740f2f5 = $this->env->getExtension("native_profiler");
        $__internal_16a56316d5597679f339e7a2a6e5968197716eed38f76a3e5eb59fa78740f2f5->enter($__internal_16a56316d5597679f339e7a2a6e5968197716eed38f76a3e5eb59fa78740f2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 114
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/pedagogie.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_16a56316d5597679f339e7a2a6e5968197716eed38f76a3e5eb59fa78740f2f5->leave($__internal_16a56316d5597679f339e7a2a6e5968197716eed38f76a3e5eb59fa78740f2f5_prof);

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
