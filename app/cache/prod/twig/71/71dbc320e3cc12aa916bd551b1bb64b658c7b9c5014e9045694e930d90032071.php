<?php

/* ::layout.html.twig */
class __TwigTemplate_eb590a7eafcb6e7d0fb923bf4f136ccdba795c801cba71c9fa925792752c49fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'modals' => array($this, 'block_modals'),
            'buttonlogin' => array($this, 'block_buttonlogin'),
            'buttonsignin' => array($this, 'block_buttonsignin'),
            'usermessages' => array($this, 'block_usermessages'),
            'body' => array($this, 'block_body'),
            'submenu' => array($this, 'block_submenu'),
            'bodycontent' => array($this, 'block_bodycontent'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
  
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    
\t";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "   
    <title> ";
        // line 30
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
\t
  </head>
  
  <body data-spy=\"scroll\" style=\"padding-top:40px;width:100%;height:100%;\">
  
\t<div id=\"sitecontent\" class=\"section w3-white\">
  
\t\t<div id=\"row_modal\" class=\"row\" style=\"margin-left:1%;width:98%;\">
\t\t\t<div id=\"modalfss\">
\t\t\t";
        // line 40
        $this->displayBlock('modals', $context, $blocks);
        // line 44
        echo "\t\t\t</div>
\t\t</div>\t\t
\t
\t\t<div id=\"row_header\" class=\"row w3-top\" style=\"margin-left:1%;width:98%;\">
\t\t\t<div id=\"headerfss\" class=\"navbar navbar-fixed-top w3-theme w3-left-align w3-grey\" style=\"z-index:50;height:70px;margin-bottom:1px;margin-top:1px;width:100%;\" role=\"navigation\">

\t\t\t  <div class=\"container w3-right\" style=\"z-index:50;\">
\t\t\t\t\t  <div class=\"navbar-header\" style=\"z-index:50;\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-ex-collapse\" style=\"z-index:50;\">
\t\t\t\t\t\t  <span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t
\t\t\t\t\t  </div>

\t\t\t  
\t\t\t\t<!--     
\t\t\t\t  <div class=\"logo\"><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" border=\"0\"></a></div>
\t\t\t\t  <div id=\"banner\"><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/images/header.jpg"), "html", null, true);
        echo "\" alt=\"PM\"></div>
\t\t\t\t-->
\t\t\t 
\t\t\t  <div class=\"collapse navbar-collapse\" id=\"navbar-ex-collapse\" style=\"z-index:50;\"> 
\t\t\t 
\t\t\t\t<ul class=\" nav navbar-nav nav-pills\">
\t\t\t\t<li class=\"\" style=\"height:90px;\"> 
\t\t\t\t\t\t<a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"w3-btn w3-blue w3-round w3-ripple btn btn-default navbar-btn\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "MENU_HOME", array(), "array"), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-home\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t\t<li> <span class=\"qmdivider qmdividery\"></span></li>
\t\t\t\t\t\t  
\t\t\t\t<li class=\"w3-dropdown-hover\" style=\"height:90px;\">
\t\t\t\t\t\t<a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("departement_homepage");
        echo "\" class=\"w3-btn w3-blue w3-round w3-ripple btn btn-default navbar-btn\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "MENU_DEPARTEMENTS", array(), "array"), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-education\"></i> </a>
\t\t\t\t\t\t<div id=\"Demo\" class=\"w3-dropdown-content w3-animate-zoom\">
\t\t\t\t\t\t\t";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
            echo " 
\t\t\t\t\t\t  <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departement_dep", array("id" => $this->getAttribute($context["dep"], "id", array()))), "html", null, true);
            echo "\" > ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "departement", array()), "html", null, true);
            echo " </a>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t
\t\t\t\t</li>
\t\t\t\t\t\t<li> <span class=\"qmdivider qmdividery\"></span></li>
\t\t\t\t<li class=\"\" style=\"height:90px;\">
\t\t\t\t\t\t<a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("pedagogie_pedagogie_homepage");
        echo "\" class=\"w3-btn w3-blue w3-round w3-ripple btn btn-default navbar-btn\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "MENU_PEDAGOGIE", array(), "array"), "html", null, true);
        echo "<i class=\"glyphicon glyphicon-book\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t\t<li> <span class=\"qmdivider qmdividery\"></span></li>
\t\t\t\t\t\t   
\t\t\t\t\t\t  ";
        // line 90
        if ((array_key_exists("session_id", $context) && ((isset($context["session_id"]) ? $context["session_id"] : null) != null))) {
            // line 91
            echo "\t\t\t\t\t<li class=\"\" style=\"height:90px;\">
\t\t\t\t\t\t<a class=\"w3-btn w3-blue  w3-round w3-ripple btn btn-default navbar-btn\" href=\"User\">  Mon Espace <span class=\"caret\"></span> </a>
\t\t\t\t\t</li>
\t\t\t\t\t\t<li> <span class=\"qmdivider qmdividery\"></span></li>
\t\t\t\t<li class=\"\" style=\"height:90px;\">
\t\t\t\t\t\t<a href=\"";
            // line 96
            echo $this->env->getExtension('routing')->getPath("user_logout");
            echo "\" class=\"w3-btn w3-blue  w3-round w3-ripple btn btn-default navbar-btn\"> Se Déconnecter <i class=\"glyphicon glyphicon-log-out\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t   
\t\t\t\t\t\t<li> <span class=\"qmdivider qmdividery\"></span></li>
\t\t\t\t\t\t  ";
        } else {
            // line 101
            echo "\t\t\t\t\t\t  
\t\t\t\t\t\t  ";
            // line 102
            $this->displayBlock('buttonlogin', $context, $blocks);
            // line 108
            echo "\t\t\t\t\t\t  
\t\t\t\t\t\t  ";
            // line 109
            $this->displayBlock('buttonsignin', $context, $blocks);
            // line 115
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t   ";
        }
        // line 117
        echo "\t\t\t\t\t\t   
\t\t\t\t\t<li>\t\t  
\t\t\t\t\t\t\t<div class=\"w3-dropdown-hover pull-right navbar-btn page-scroll\">
\t\t\t\t\t\t\t  <button class=\"w3-btn w3-blue\"> ";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "LNG", array(), "array"), "html", null, true);
        echo " </button>
\t\t\t\t\t\t\t  <div id=\"Demo\" class=\"w3-dropdown-content w3-animate-zoom\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 122
        echo $this->env->getExtension('routing')->getPath("homepage", array("fss_lang" => "fr"));
        echo "\">Français <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("languages/fr.png"), "html", null, true);
        echo "\" alt=\"Francais\" ></a>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 123
        echo $this->env->getExtension('routing')->getPath("homepage", array("fss_lang" => "en"));
        echo "\">English <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("languages/en.png"), "html", null, true);
        echo "\" alt=\"Anglais\" ></a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</li>          
\t\t\t\t\t\t  <li> <span class=\"qmdivider qmdividery\"></span></li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<div class=\"col-xs-3\">
\t\t\t\t\t<span id=\"date_time\"></span>
\t\t\t\t</div>
\t\t\t  
\t\t\t </div>
\t\t\t 
\t\t\t<div id=\"flashnews\">
\t\t\t\t\t
\t\t\t </div>
\t\t\t  
\t\t\t  

\t\t\t  
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t <!--
\t\t\t\t\t<div class=\"btn-group btn-group-sm-1 pull-right\" role=\"group\" aria-label=\"user-button\" id=\"userbutton\" >
\t\t\t\t <div class=\"input-group \" id=\"facsearchzone\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Chercher ...\">
\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t  <button class=\"btn btn-default\" type=\"button\">Go !</button>
\t\t\t\t\t</span>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t-->
\t\t\t\t<div id=\"usermessages\" class=\"col-xs-3 w3-section row col-xs-offset-4\" style=\"display:none;z-index:990;margin-bottom:10px;\" >
\t\t\t\t";
        // line 156
        $this->displayBlock('usermessages', $context, $blocks);
        // line 159
        echo "\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t  </div>
\t\t</div>
\t
\t\t<div id=\"row_body\" class=\"row w3-clear\" style=\"margin-left:1%;width:98%;clear:both;margin-top:-3%;margin-bottom:20%;\">
\t\t\t<div class=\"section container-fluid w3-white\" style=\"clear:both;width:100%;\">
\t\t\t";
        // line 168
        $this->displayBlock('body', $context, $blocks);
        // line 217
        echo "\t\t\t</div>
\t\t</div>
\t
\t
\t\t<div id=\"row_footer\" class=\"row\" style=\"margin-left:1%;width:98%;position:relative;bottom:0;clear:both;margin-bottom:0;\">
\t\t\t<footer class=\"col-lg-12 container-fluid w3-bottom w3-grey\" style=\"height:10%;\">
\t\t\t";
        // line 223
        $this->displayBlock('footer', $context, $blocks);
        // line 262
        echo "\t\t\t</footer>
\t\t</div>
\t
\t</div>
\t
\t";
        // line 267
        $this->displayBlock('javascripts', $context, $blocks);
        // line 327
        echo "\t
  </body>
  
 
</html>
";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "\t\t
\t\t<!-- Frameworks CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/css/w3.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t
\t\t<!-- Custom CSS -->
\t\t<!-- <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/css/freelancer.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">-->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" /> 
        <!-- <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/css/pm.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/css/menu.css"), "html", null, true);
        echo "\" type=\"text/css\" /> -->
\t\t
\t\t<!-- Custom Fonts -->
                <!-- <link rel=\"stylesheet\" href=\"http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css\">-->
\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
                <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t<!-- <link href=\"http://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">-->
\t\t<!-- <link href=\"http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">-->

\t\t
\t";
    }

    // line 30
    public function block_title($context, array $blocks = array())
    {
        echo " Pedago ";
    }

    // line 40
    public function block_modals($context, array $blocks = array())
    {
        // line 41
        echo "\t\t\t";
        $this->loadTemplate("::layout_loginmodal.html.twig", "::layout.html.twig", 41)->display($context);
        // line 42
        echo "\t\t\t";
        $this->loadTemplate("::layout_signinmodal.html.twig", "::layout.html.twig", 42)->display($context);
        // line 43
        echo "\t\t\t";
    }

    // line 102
    public function block_buttonlogin($context, array $blocks = array())
    {
        // line 103
        echo "\t\t\t\t<li class=\"\" >
\t\t\t\t\t\t<a class=\"w3-btn w3-blue  w3-round w3-ripple btn btn-default navbar-btn\" role=\"button\" data-target=\"#connexion-modal\" data-toggle=\"modal\">Se Connecter \t<i class=\"glyphicon glyphicon-log-in\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t\t<li> <span class=\"qmdivider qmdividery\"></span></li>
\t\t\t\t\t\t  ";
    }

    // line 109
    public function block_buttonsignin($context, array $blocks = array())
    {
        // line 110
        echo "\t\t\t\t\t<li class=\"\" style=\"height:90px;\">
\t\t\t\t\t\t<a class=\"w3-btn w3-blue w3-round w3-ripple btn btn-default navbar-btn\" role=\"button\" data-target=\"#inscription-modal\" data-toggle=\"modal\"> S'Inscrire \t<i class=\"glyphicon glyphicon-user\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t\t<li> <span class=\"qmdivider qmdividery\"></span></li>
\t\t\t\t\t\t  ";
    }

    // line 156
    public function block_usermessages($context, array $blocks = array())
    {
        // line 157
        echo "\t\t\t\t\t\t   
\t\t\t\t
\t\t\t\t";
    }

    // line 168
    public function block_body($context, array $blocks = array())
    {
        // line 169
        echo "\t\t\t
\t\t\t
\t\t\t\t<!-- Loader -->
\t\t\t\t<div class=\"row\" id=\"loadermodal\" style=\"z-index:9999;display:none;position:fixed;top:13%;clear:both\">
\t\t\t\t\t<div class=\"col-md-12\" style=\"z-index:9999;\">
\t\t\t
\t\t\t\t\t\t<div id=\"fssloader\" style=\"margin-top:15px;\"> </div>
\t\t\t\t\t\t<div id=\"loadertext\" class=\"text-info\"> </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"submenu\" class=\"row container-fluid w3-grey\" style=\"margin-left:0%;width:100%;margin-bottom:2px;margin-top:2px;clear:both;\">
\t\t\t\t\t\t\t";
        // line 184
        $this->displayBlock('submenu', $context, $blocks);
        // line 202
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"bodycontent\" class=\"row container-fluid w3-white\" style=\"margin-left:0%;width:100%;clear:both;height:100%;\">
\t\t\t\t\t\t\t";
        // line 210
        $this->displayBlock('bodycontent', $context, $blocks);
        // line 214
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t";
    }

    // line 184
    public function block_submenu($context, array $blocks = array())
    {
        // line 185
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-xs-2 w3-container menubtn\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"tablink \" onclick=\"openMenu(event, 'emploilayout')\">
\t\t\t\t\t\t\t\t\t  <div class=\"w3-container w3-teal w3-padding-hor-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"w3-left\"><i class=\"glyphicon glyphicon-calendar w3-xlarge\"></i></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"w3-right\">
\t\t\t\t\t\t\t\t\t\t  <h3>??</h3>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t\t\t\t\t\t<h4> Emploi du temps </h4>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t </a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t";
    }

    // line 210
    public function block_bodycontent($context, array $blocks = array())
    {
        // line 211
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t";
    }

    // line 223
    public function block_footer($context, array $blocks = array())
    {
        // line 224
        echo "\t
\t
\t\t\t  <div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t  <div class=\"col-sm-5\">
\t\t\t\t\t\t\t<span id=\"copyright\">
\t\t\t\t\t\t\t\tCopyright &copy; 2016 <a href=\"#\">Faculté des Sciences de Sfax </a>
\t\t\t\t\t\t\t</span>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"col-sm-5\">
\t\t\t\t\t<p class=\"text-info text-right\">
\t\t\t\t\t  <br>
\t\t\t\t\t  <br>
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t  <div class=\"col-md-12 hidden-lg hidden-md hidden-sm text-left\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-3x fa-fw fa-instagram text-info\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-3x fa-fw fa-twitter text-info\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-3x fa-fw fa-facebook text-info\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-3x fa-fw fa-github text-infro\"></i></a>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t  <div class=\"col-md-12 hidden-xs text-right\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-3x fa-fw fa-instagram text-info\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-3x fa-fw fa-twitter text-info\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-3x fa-fw fa-facebook text-info\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-3x fa-fw fa-github text-info\"></i></a>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t  
\t\t\t
\t\t\t
\t
\t\t\t";
    }

    // line 267
    public function block_javascripts($context, array $blocks = array())
    {
        // line 268
        echo "\t\t";
        // line 269
        echo "\t\t
\t\t<!-- Frameworks JavaScript -->
\t\t<script type=\"text/javascript\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<!-- Custom Theme JavaScript -->
\t\t<script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/freelancer.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/magic.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<!-- Plugin JavaScript -->
\t\t<script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>
\t\t<script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/cbpAnimatedHeader.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- Contact Form JavaScript -->
\t\t<script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/jqBootstrapValidation.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/contact_me.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t<!--[if lt IE 9]>
\t\t\t<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t\t\t<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->
\t\t
\t\t<script type=\"text/javascript\">
\t\tfunction date_time(id)
{
        date = new Date;
        year = date.getFullYear();
        month = date.getMonth();
        months = new Array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');
        d = date.getDate();
        day = date.getDay();
        days = new Array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
        h = date.getHours();
        if(h<10)
        {
                h = \"0\"+h;
        }
        m = date.getMinutes();
        if(m<10)
        {
                m = \"0\"+m;
        }
        s = date.getSeconds();
        if(s<10)
        {
                s = \"0\"+s;
        }
        result = ''+days[day]+' , le '+d+' '+months[month]+' '+year+' '+h+':'+m+':'+s;
        document.getElementById(id).innerHTML = result;
        setTimeout('date_time(\"'+id+'\");','1000');
        return true;
}
\t\twindow.onload = date_time('date_time');
\t\t</script>
\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  530 => 285,  526 => 284,  520 => 281,  516 => 280,  509 => 276,  505 => 275,  499 => 272,  495 => 271,  491 => 269,  489 => 268,  486 => 267,  445 => 224,  442 => 223,  436 => 211,  433 => 210,  413 => 185,  410 => 184,  404 => 214,  402 => 210,  392 => 202,  390 => 184,  373 => 169,  370 => 168,  364 => 157,  361 => 156,  353 => 110,  350 => 109,  342 => 103,  339 => 102,  335 => 43,  332 => 42,  329 => 41,  326 => 40,  320 => 30,  310 => 23,  302 => 18,  298 => 17,  294 => 16,  290 => 15,  284 => 12,  280 => 11,  276 => 9,  273 => 8,  264 => 327,  262 => 267,  255 => 262,  253 => 223,  245 => 217,  243 => 168,  232 => 159,  230 => 156,  192 => 123,  186 => 122,  181 => 120,  176 => 117,  172 => 115,  170 => 109,  167 => 108,  165 => 102,  162 => 101,  154 => 96,  147 => 91,  145 => 90,  136 => 86,  129 => 81,  119 => 79,  113 => 78,  106 => 76,  96 => 71,  86 => 64,  80 => 63,  59 => 44,  57 => 40,  44 => 30,  41 => 29,  39 => 8,  30 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html>*/
/*   */
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     */
/* 	{% block stylesheets %}*/
/* 		*/
/* 		<!-- Frameworks CSS -->*/
/* 		<link rel="stylesheet" href="{{ asset('includes/css/bootstrap.css') }}" type="text/css" />*/
/* 		<link rel="stylesheet" href="{{ asset('includes/css/w3.css') }}" type="text/css" />*/
/* 		*/
/* 		<!-- Custom CSS -->*/
/* 		<!-- <link href="{{ asset('includes/css/freelancer.css') }}" rel="stylesheet">-->*/
/* 		<link rel="stylesheet" href="{{ asset('includes/css/style.css') }}" type="text/css" /> */
/*         <!-- <link rel="stylesheet" href="{{ asset('includes/css/pm.css') }}" type="text/css" />*/
/*         <link rel="stylesheet" href="{{ asset('includes/css/menu.css') }}" type="text/css" /> -->*/
/* 		*/
/* 		<!-- Custom Fonts -->*/
/*                 <!-- <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">-->*/
/* 		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">*/
/*                 <link rel="stylesheet" href="{{ asset('includes/css/font-awesome.min.css') }}" type="text/css" />*/
/* 		<!-- <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">-->*/
/* 		<!-- <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">-->*/
/* */
/* 		*/
/* 	{% endblock %}*/
/*    */
/*     <title> {% block title %} Pedago {% endblock %} </title>*/
/* 	*/
/*   </head>*/
/*   */
/*   <body data-spy="scroll" style="padding-top:40px;width:100%;height:100%;">*/
/*   */
/* 	<div id="sitecontent" class="section w3-white">*/
/*   */
/* 		<div id="row_modal" class="row" style="margin-left:1%;width:98%;">*/
/* 			<div id="modalfss">*/
/* 			{% block modals %}*/
/* 			{% include "::layout_loginmodal.html.twig" %}*/
/* 			{% include "::layout_signinmodal.html.twig" %}*/
/* 			{% endblock %}*/
/* 			</div>*/
/* 		</div>		*/
/* 	*/
/* 		<div id="row_header" class="row w3-top" style="margin-left:1%;width:98%;">*/
/* 			<div id="headerfss" class="navbar navbar-fixed-top w3-theme w3-left-align w3-grey" style="z-index:50;height:70px;margin-bottom:1px;margin-top:1px;width:100%;" role="navigation">*/
/* */
/* 			  <div class="container w3-right" style="z-index:50;">*/
/* 					  <div class="navbar-header" style="z-index:50;">*/
/* 						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse" style="z-index:50;">*/
/* 						  <span class="sr-only">Toggle navigation</span>*/
/* 						  <span class="icon-bar"></span>*/
/* 						  <span class="icon-bar"></span>*/
/* 						  <span class="icon-bar"></span>*/
/* 						</button>*/
/* 						*/
/* 					  </div>*/
/* */
/* 			  */
/* 				<!--     */
/* 				  <div class="logo"><a href="{{ path('homepage') }}"><img src="{{ asset('includes/images/logo.png') }}" alt="logo" border="0"></a></div>*/
/* 				  <div id="banner"><img src="{{ asset('includes/images/header.jpg') }}" alt="PM"></div>*/
/* 				-->*/
/* 			 */
/* 			  <div class="collapse navbar-collapse" id="navbar-ex-collapse" style="z-index:50;"> */
/* 			 */
/* 				<ul class=" nav navbar-nav nav-pills">*/
/* 				<li class="" style="height:90px;"> */
/* 						<a href="{{ path('homepage') }}" class="w3-btn w3-blue w3-round w3-ripple btn btn-default navbar-btn"> {{ lang['MENU_HOME'] }} <i class="glyphicon glyphicon-home"></i></a>*/
/* 					</li>*/
/* 						<li> <span class="qmdivider qmdividery"></span></li>*/
/* 						  */
/* 				<li class="w3-dropdown-hover" style="height:90px;">*/
/* 						<a href="{{ path('departement_homepage') }}" class="w3-btn w3-blue w3-round w3-ripple btn btn-default navbar-btn"> {{ lang['MENU_DEPARTEMENTS'] }} <i class="glyphicon glyphicon-education"></i> </a>*/
/* 						<div id="Demo" class="w3-dropdown-content w3-animate-zoom">*/
/* 							{% for dep in alldepartement %} */
/* 						  <a href="{{ path('departement_dep',{'id': dep.id })}}" > {{ dep.departement }} </a>*/
/* 							{% endfor %}*/
/* 						</div>  */
/* 							*/
/* 				</li>*/
/* 						<li> <span class="qmdivider qmdividery"></span></li>*/
/* 				<li class="" style="height:90px;">*/
/* 						<a href="{{ path('pedagogie_pedagogie_homepage') }}" class="w3-btn w3-blue w3-round w3-ripple btn btn-default navbar-btn"> {{ lang['MENU_PEDAGOGIE'] }}<i class="glyphicon glyphicon-book"></i></a>*/
/* 					</li>*/
/* 						<li> <span class="qmdivider qmdividery"></span></li>*/
/* 						   */
/* 						  {% if session_id is defined and session_id != null %}*/
/* 					<li class="" style="height:90px;">*/
/* 						<a class="w3-btn w3-blue  w3-round w3-ripple btn btn-default navbar-btn" href="User">  Mon Espace <span class="caret"></span> </a>*/
/* 					</li>*/
/* 						<li> <span class="qmdivider qmdividery"></span></li>*/
/* 				<li class="" style="height:90px;">*/
/* 						<a href="{{ path('user_logout') }}" class="w3-btn w3-blue  w3-round w3-ripple btn btn-default navbar-btn"> Se Déconnecter <i class="glyphicon glyphicon-log-out"></i></a>*/
/* 					</li>*/
/* 					   */
/* 						<li> <span class="qmdivider qmdividery"></span></li>*/
/* 						  {% else %}*/
/* 						  */
/* 						  {% block buttonlogin %}*/
/* 				<li class="" >*/
/* 						<a class="w3-btn w3-blue  w3-round w3-ripple btn btn-default navbar-btn" role="button" data-target="#connexion-modal" data-toggle="modal">Se Connecter 	<i class="glyphicon glyphicon-log-in"></i></a>*/
/* 					</li>*/
/* 						<li> <span class="qmdivider qmdividery"></span></li>*/
/* 						  {% endblock %}*/
/* 						  */
/* 						  {% block buttonsignin %}*/
/* 					<li class="" style="height:90px;">*/
/* 						<a class="w3-btn w3-blue w3-round w3-ripple btn btn-default navbar-btn" role="button" data-target="#inscription-modal" data-toggle="modal"> S'Inscrire 	<i class="glyphicon glyphicon-user"></i></a>*/
/* 					</li>*/
/* 						<li> <span class="qmdivider qmdividery"></span></li>*/
/* 						  {% endblock %}*/
/* 						*/
/* 						   {% endif %}*/
/* 						   */
/* 					<li>		  */
/* 							<div class="w3-dropdown-hover pull-right navbar-btn page-scroll">*/
/* 							  <button class="w3-btn w3-blue"> {{ lang['LNG'] }} </button>*/
/* 							  <div id="Demo" class="w3-dropdown-content w3-animate-zoom">*/
/* 								<a href="{{ path('homepage',{'fss_lang':'fr'}) }}">Français <img src="{{ asset('languages/fr.png') }}" alt="Francais" ></a>*/
/* 								<a href="{{ path('homepage',{'fss_lang':'en'}) }}">English <img src="{{ asset('languages/en.png') }}" alt="Anglais" ></a>*/
/* 							  </div>*/
/* 							</div>*/
/* 					</li>          */
/* 						  <li> <span class="qmdivider qmdividery"></span></li>*/
/* 				</ul>*/
/* 				*/
/* 				<div class="col-xs-3">*/
/* 					<span id="date_time"></span>*/
/* 				</div>*/
/* 			  */
/* 			 </div>*/
/* 			 */
/* 			<div id="flashnews">*/
/* 					*/
/* 			 </div>*/
/* 			  */
/* 			  */
/* */
/* 			  */
/* 					</div>*/
/* 					*/
/* 					 <!--*/
/* 					<div class="btn-group btn-group-sm-1 pull-right" role="group" aria-label="user-button" id="userbutton" >*/
/* 				 <div class="input-group " id="facsearchzone">*/
/* 					<input type="text" class="form-control" placeholder="Chercher ...">*/
/* 					<span class="input-group-btn">*/
/* 					  <button class="btn btn-default" type="button">Go !</button>*/
/* 					</span>*/
/* 				  </div>*/
/* 				</div>*/
/* 			-->*/
/* 				<div id="usermessages" class="col-xs-3 w3-section row col-xs-offset-4" style="display:none;z-index:990;margin-bottom:10px;" >*/
/* 				{% block usermessages %}*/
/* 						   */
/* 				*/
/* 				{% endblock %}	*/
/* 				</div>*/
/* 				*/
/* 				*/
/* 			  </div>*/
/* 		</div>*/
/* 	*/
/* 		<div id="row_body" class="row w3-clear" style="margin-left:1%;width:98%;clear:both;margin-top:-3%;margin-bottom:20%;">*/
/* 			<div class="section container-fluid w3-white" style="clear:both;width:100%;">*/
/* 			{% block body %}*/
/* 			*/
/* 			*/
/* 				<!-- Loader -->*/
/* 				<div class="row" id="loadermodal" style="z-index:9999;display:none;position:fixed;top:13%;clear:both">*/
/* 					<div class="col-md-12" style="z-index:9999;">*/
/* 			*/
/* 						<div id="fssloader" style="margin-top:15px;"> </div>*/
/* 						<div id="loadertext" class="text-info"> </div>*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				*/
/* 					*/
/* 						*/
/* 							<div id="submenu" class="row container-fluid w3-grey" style="margin-left:0%;width:100%;margin-bottom:2px;margin-top:2px;clear:both;">*/
/* 							{% block submenu %}*/
/* 							*/
/* 							*/
/* 								<div class="col-xs-2 w3-container menubtn">*/
/* 									<a href="#" class="tablink " onclick="openMenu(event, 'emploilayout')">*/
/* 									  <div class="w3-container w3-teal w3-padding-hor-1">*/
/* 										<div class="w3-left"><i class="glyphicon glyphicon-calendar w3-xlarge"></i></div>*/
/* 										<div class="w3-right">*/
/* 										  <h3>??</h3>*/
/* 										</div>*/
/* 										<div class="w3-clear"></div>*/
/* 										<h4> Emploi du temps </h4>*/
/* 									  </div>*/
/* 									 </a>*/
/* 								</div>*/
/* 							*/
/* 						*/
/* 							{% endblock %}*/
/* 							</div>*/
/* 						*/
/* 					*/
/* 				*/
/* 				*/
/* 				*/
/* 						*/
/* 							<div id="bodycontent" class="row container-fluid w3-white" style="margin-left:0%;width:100%;clear:both;height:100%;">*/
/* 							{% block bodycontent %}*/
/* 							*/
/* 						*/
/* 							{% endblock %}*/
/* 							</div>*/
/* 				*/
/* 			{% endblock %}*/
/* 			</div>*/
/* 		</div>*/
/* 	*/
/* 	*/
/* 		<div id="row_footer" class="row" style="margin-left:1%;width:98%;position:relative;bottom:0;clear:both;margin-bottom:0;">*/
/* 			<footer class="col-lg-12 container-fluid w3-bottom w3-grey" style="height:10%;">*/
/* 			{% block footer %}*/
/* 	*/
/* 	*/
/* 			  <div class="container">*/
/* 				<div class="row">*/
/* 				  <div class="col-sm-5">*/
/* 							<span id="copyright">*/
/* 								Copyright &copy; 2016 <a href="#">Faculté des Sciences de Sfax </a>*/
/* 							</span>*/
/* 				  </div>*/
/* 				  <div class="col-sm-5">*/
/* 					<p class="text-info text-right">*/
/* 					  <br>*/
/* 					  <br>*/
/* 					</p>*/
/* 					<div class="row">*/
/* 					  <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">*/
/* 						<a href="#"><i class="fa fa-3x fa-fw fa-instagram text-info"></i></a>*/
/* 						<a href="#"><i class="fa fa-3x fa-fw fa-twitter text-info"></i></a>*/
/* 						<a href="#"><i class="fa fa-3x fa-fw fa-facebook text-info"></i></a>*/
/* 						<a href="#"><i class="fa fa-3x fa-fw fa-github text-infro"></i></a>*/
/* 					  </div>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 					  <div class="col-md-12 hidden-xs text-right">*/
/* 						<a href="#"><i class="fa fa-3x fa-fw fa-instagram text-info"></i></a>*/
/* 						<a href="#"><i class="fa fa-3x fa-fw fa-twitter text-info"></i></a>*/
/* 						<a href="#"><i class="fa fa-3x fa-fw fa-facebook text-info"></i></a>*/
/* 						<a href="#"><i class="fa fa-3x fa-fw fa-github text-info"></i></a>*/
/* 					  </div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 		  */
/* 			*/
/* 			*/
/* 	*/
/* 			{% endblock %}*/
/* 			</footer>*/
/* 		</div>*/
/* 	*/
/* 	</div>*/
/* 	*/
/* 	{% block javascripts %}*/
/* 		{# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/* 		*/
/* 		<!-- Frameworks JavaScript -->*/
/* 		<script type="text/javascript" src="{{ asset('includes/js/jquery.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('includes/js/bootstrap.min.js') }}"></script>*/
/* 		*/
/* 		<!-- Custom Theme JavaScript -->*/
/* 		<script src="{{ asset('includes/js/freelancer.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('includes/js/magic.js') }}"></script>*/
/* 		*/
/* 		<!-- Plugin JavaScript -->*/
/* 		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>*/
/* 		<script src="{{ asset('includes/js/classie.js') }}"></script>*/
/* 		<script src="{{ asset('includes/js/cbpAnimatedHeader.js') }}"></script>*/
/* */
/* 		<!-- Contact Form JavaScript -->*/
/* 		<script src="{{ asset('includes/js/jqBootstrapValidation.js') }}"></script>*/
/* 		<script src="{{ asset('includes/js/contact_me.js') }}"></script>*/
/* */
/* 		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/* 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/* 		<!--[if lt IE 9]>*/
/* 			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/* 			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/* 		<![endif]-->*/
/* 		*/
/* 		<script type="text/javascript">*/
/* 		function date_time(id)*/
/* {*/
/*         date = new Date;*/
/*         year = date.getFullYear();*/
/*         month = date.getMonth();*/
/*         months = new Array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');*/
/*         d = date.getDate();*/
/*         day = date.getDay();*/
/*         days = new Array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');*/
/*         h = date.getHours();*/
/*         if(h<10)*/
/*         {*/
/*                 h = "0"+h;*/
/*         }*/
/*         m = date.getMinutes();*/
/*         if(m<10)*/
/*         {*/
/*                 m = "0"+m;*/
/*         }*/
/*         s = date.getSeconds();*/
/*         if(s<10)*/
/*         {*/
/*                 s = "0"+s;*/
/*         }*/
/*         result = ''+days[day]+' , le '+d+' '+months[month]+' '+year+' '+h+':'+m+':'+s;*/
/*         document.getElementById(id).innerHTML = result;*/
/*         setTimeout('date_time("'+id+'");','1000');*/
/*         return true;*/
/* }*/
/* 		window.onload = date_time('date_time');*/
/* 		</script>*/
/* 	{% endblock %}*/
/* 	*/
/*   </body>*/
/*   */
/*  */
/* </html>*/
/* */