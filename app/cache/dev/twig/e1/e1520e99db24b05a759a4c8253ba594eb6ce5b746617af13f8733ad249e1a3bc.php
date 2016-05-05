<?php

/* layout.html.twig */
class __TwigTemplate_af0bb4a736a2b63741b6d6ebc2e4988c9cf9a7079686176f9c63517316e20ba6 extends Twig_Template
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
        $__internal_90a3c9c228031ebbde38549fa7c317f9755e540264357c14615eb1f24ab3ff6d = $this->env->getExtension("native_profiler");
        $__internal_90a3c9c228031ebbde38549fa7c317f9755e540264357c14615eb1f24ab3ff6d->enter($__internal_90a3c9c228031ebbde38549fa7c317f9755e540264357c14615eb1f24ab3ff6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
  
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    
\t";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "   
    <title> ";
        // line 35
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
\t
  </head>
  
  <body data-spy=\"scroll\" style=\"padding-top:40px;width:100%;height:100%;\">
  
\t<div id=\"sitecontent\" class=\"section w3-white\">
  
\t\t<div id=\"row_modal\" class=\"row\" style=\"margin-left:1%;width:98%;\">
\t\t\t<div id=\"modalfss\">
\t\t\t";
        // line 45
        $this->displayBlock('modals', $context, $blocks);
        // line 49
        echo "\t\t\t</div>
\t\t</div>\t\t
\t
\t\t<div id=\"row_header\" class=\"row w3-top\" style=\"margin-left:1%;width:98%;\">
\t\t\t<div id=\"headerfss\" class=\"navbar navbar-fixed-top w3-theme w3-left-align w3-light-grey\" style=\"z-index:50;height:70px;margin-bottom:1px;margin-top:1px;width:100%;\" role=\"navigation\">

\t\t\t  <div class=\"container w3-right\" style=\"z-index:50;\">
\t\t\t\t\t  <div class=\"navbar-header\" style=\"z-index:50;\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-ex-collapse\">
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
        // line 68
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" border=\"0\"></a></div>
\t\t\t\t  <div id=\"banner\"><img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/images/header.jpg"), "html", null, true);
        echo "\" alt=\"PM\"></div>
\t\t\t\t-->
\t\t\t 
\t\t\t  <div class=\"collapse navbar-collapse\" id=\"navbar-ex-collapse\" style=\"z-index:50;\"> 
\t\t\t 
\t\t\t\t<ul class=\" nav navbar-nav nav-pills\">
\t\t\t\t<li class=\"\" style=\"height:90px;\"> 
\t\t\t\t\t\t<a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"w3-btn w3-blue w3-round w3-ripple btn btn-default navbar-btn\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "MENU_HOME", array(), "array"), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-home\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t\t<li> <span class=\"qmdivider qmdividery\"></span></li>
\t\t\t\t\t\t  
\t\t\t\t<li class=\"w3-dropdown-hover\" style=\"height:90px;\">
\t\t\t\t\t\t<a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("departement_homepage");
        echo "\" class=\"w3-btn w3-blue w3-round w3-ripple btn btn-default navbar-btn\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "MENU_DEPARTEMENTS", array(), "array"), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-education\"></i> </a>
\t\t\t\t\t\t<div id=\"Demo\" class=\"w3-dropdown-content w3-animate-zoom\">
\t\t\t\t\t\t\t";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : $this->getContext($context, "alldepartement")));
        foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
            echo " 
\t\t\t\t\t\t  <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departement_dep", array("id" => $this->getAttribute($context["dep"], "id", array()))), "html", null, true);
            echo "\" > ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dep"], "departement", array()), "html", null, true);
            echo " </a>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t
\t\t\t\t</li>
\t\t\t\t\t\t<li> <span class=\"qmdivider qmdividery\"></span></li>
\t\t\t\t<li class=\"\" style=\"height:90px;\">
\t\t\t\t\t\t<a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("pedagogie_pedagogie_homepage");
        echo "\" class=\"w3-btn w3-blue w3-round w3-ripple btn btn-default navbar-btn\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "MENU_PEDAGOGIE", array(), "array"), "html", null, true);
        echo "<i class=\"glyphicon glyphicon-book\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t\t<li> <span class=\"qmdivider qmdividery\"></span></li>
\t\t\t\t\t\t   
\t\t\t\t\t\t  ";
        // line 95
        if ((array_key_exists("session_id", $context) && ((isset($context["session_id"]) ? $context["session_id"] : $this->getContext($context, "session_id")) != null))) {
            // line 96
            echo "\t\t\t\t\t<li class=\"\" style=\"height:90px;\">
\t\t\t\t\t\t<a class=\"w3-btn w3-blue  w3-round w3-ripple btn btn-default navbar-btn\" href=\"User\">  Mon Espace <span class=\"caret\"></span> </a>
\t\t\t\t\t</li>
\t\t\t\t\t\t<li> <span class=\"qmdivider qmdividery\"></span></li>
\t\t\t\t<li class=\"\" style=\"height:90px;\">
\t\t\t\t\t\t<a href=\"";
            // line 101
            echo $this->env->getExtension('routing')->getPath("user_logout");
            echo "\" class=\"w3-btn w3-blue  w3-round w3-ripple btn btn-default navbar-btn\"> Se Déconnecter <i class=\"glyphicon glyphicon-log-out\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t   
\t\t\t\t\t\t<li> <span class=\"qmdivider qmdividery\"></span></li>
\t\t\t\t\t\t  ";
        } else {
            // line 106
            echo "\t\t\t\t\t\t  
\t\t\t\t\t\t  ";
            // line 107
            $this->displayBlock('buttonlogin', $context, $blocks);
            // line 113
            echo "\t\t\t\t\t\t  
\t\t\t\t\t\t  ";
            // line 114
            $this->displayBlock('buttonsignin', $context, $blocks);
            // line 120
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t   ";
        }
        // line 122
        echo "\t\t\t\t\t\t   
\t\t\t\t\t<li>\t\t  
\t\t\t\t\t\t\t<div class=\"w3-dropdown-hover pull-right navbar-btn page-scroll\">
\t\t\t\t\t\t\t  <button class=\"w3-btn w3-blue\"> ";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "LNG", array(), "array"), "html", null, true);
        echo " </button>
\t\t\t\t\t\t\t  <div id=\"Demo\" class=\"w3-dropdown-content w3-animate-zoom\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("homepage", array("fss_lang" => "fr"));
        echo "\">Français <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("languages/fr.png"), "html", null, true);
        echo "\" alt=\"Francais\" ></a>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("homepage", array("fss_lang" => "en"));
        echo "\">English <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("languages/en.png"), "html", null, true);
        echo "\" alt=\"Anglais\" ></a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</li>          
\t\t\t\t\t\t  <li> <span class=\"qmdivider qmdividery\"></span></li>
\t\t\t\t</ul>
\t\t\t  
\t\t\t </div>
\t\t\t 
\t\t\t\t<div id=\"flashnews\">
\t\t\t\t\t
\t\t\t  </div>
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
        // line 157
        $this->displayBlock('usermessages', $context, $blocks);
        // line 160
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
        // line 169
        $this->displayBlock('body', $context, $blocks);
        // line 218
        echo "\t\t\t</div>
\t\t</div>
\t
\t
\t\t<div id=\"row_footer\" class=\"row\" style=\"margin-left:1%;width:98%;position:relative;bottom:0;clear:both;margin-bottom:0;\">
\t\t\t<footer class=\"col-lg-12 container-fluid w3-light-blue w3-bottom \" style=\"height:10%;\">
\t\t\t";
        // line 224
        $this->displayBlock('footer', $context, $blocks);
        // line 263
        echo "\t\t\t</footer>
\t\t</div>
\t
\t</div>
\t
\t";
        // line 268
        $this->displayBlock('javascripts', $context, $blocks);
        // line 289
        echo "\t
  </body>
  
 
</html>
";
        
        $__internal_90a3c9c228031ebbde38549fa7c317f9755e540264357c14615eb1f24ab3ff6d->leave($__internal_90a3c9c228031ebbde38549fa7c317f9755e540264357c14615eb1f24ab3ff6d_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b7017f94f89acb449e5212f3736cc36139cb08245eb33d3ac66463b16dbf9e4d = $this->env->getExtension("native_profiler");
        $__internal_b7017f94f89acb449e5212f3736cc36139cb08245eb33d3ac66463b16dbf9e4d->enter($__internal_b7017f94f89acb449e5212f3736cc36139cb08245eb33d3ac66463b16dbf9e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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

\t\t<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t<!--[if lt IE 9]>
\t\t\t<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t\t\t<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->
\t";
        
        $__internal_b7017f94f89acb449e5212f3736cc36139cb08245eb33d3ac66463b16dbf9e4d->leave($__internal_b7017f94f89acb449e5212f3736cc36139cb08245eb33d3ac66463b16dbf9e4d_prof);

    }

    // line 35
    public function block_title($context, array $blocks = array())
    {
        $__internal_de7310f932aa50b1b862f6388914ed3c67706fb5676a248aceffbf96018107c1 = $this->env->getExtension("native_profiler");
        $__internal_de7310f932aa50b1b862f6388914ed3c67706fb5676a248aceffbf96018107c1->enter($__internal_de7310f932aa50b1b862f6388914ed3c67706fb5676a248aceffbf96018107c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Pedago ";
        
        $__internal_de7310f932aa50b1b862f6388914ed3c67706fb5676a248aceffbf96018107c1->leave($__internal_de7310f932aa50b1b862f6388914ed3c67706fb5676a248aceffbf96018107c1_prof);

    }

    // line 45
    public function block_modals($context, array $blocks = array())
    {
        $__internal_db8d875e2300729f4e9a48083026b4906fafab4fa75fb368d5c94e24d08babfd = $this->env->getExtension("native_profiler");
        $__internal_db8d875e2300729f4e9a48083026b4906fafab4fa75fb368d5c94e24d08babfd->enter($__internal_db8d875e2300729f4e9a48083026b4906fafab4fa75fb368d5c94e24d08babfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modals"));

        // line 46
        echo "\t\t\t";
        $this->loadTemplate("::layout_loginmodal.html.twig", "layout.html.twig", 46)->display($context);
        // line 47
        echo "\t\t\t";
        $this->loadTemplate("::layout_signinmodal.html.twig", "layout.html.twig", 47)->display($context);
        // line 48
        echo "\t\t\t";
        
        $__internal_db8d875e2300729f4e9a48083026b4906fafab4fa75fb368d5c94e24d08babfd->leave($__internal_db8d875e2300729f4e9a48083026b4906fafab4fa75fb368d5c94e24d08babfd_prof);

    }

    // line 107
    public function block_buttonlogin($context, array $blocks = array())
    {
        $__internal_acaa34ad0c3bcc186e2eef895381d4054c0f19b6562b7d61569f2d7a99f7633e = $this->env->getExtension("native_profiler");
        $__internal_acaa34ad0c3bcc186e2eef895381d4054c0f19b6562b7d61569f2d7a99f7633e->enter($__internal_acaa34ad0c3bcc186e2eef895381d4054c0f19b6562b7d61569f2d7a99f7633e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "buttonlogin"));

        // line 108
        echo "\t\t\t\t<li class=\"\" >
\t\t\t\t\t\t<a class=\"w3-btn w3-blue  w3-round w3-ripple btn btn-default navbar-btn\" role=\"button\" data-target=\"#connexion-modal\" data-toggle=\"modal\">Se Connecter \t<i class=\"glyphicon glyphicon-log-in\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t\t<li> <span class=\"qmdivider qmdividery\"></span></li>
\t\t\t\t\t\t  ";
        
        $__internal_acaa34ad0c3bcc186e2eef895381d4054c0f19b6562b7d61569f2d7a99f7633e->leave($__internal_acaa34ad0c3bcc186e2eef895381d4054c0f19b6562b7d61569f2d7a99f7633e_prof);

    }

    // line 114
    public function block_buttonsignin($context, array $blocks = array())
    {
        $__internal_ce29500f0a6ea77a2b2630a1fd3f5d406897bbae5f635e07100ef6044098aa13 = $this->env->getExtension("native_profiler");
        $__internal_ce29500f0a6ea77a2b2630a1fd3f5d406897bbae5f635e07100ef6044098aa13->enter($__internal_ce29500f0a6ea77a2b2630a1fd3f5d406897bbae5f635e07100ef6044098aa13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "buttonsignin"));

        // line 115
        echo "\t\t\t\t\t<li class=\"\" style=\"height:90px;\">
\t\t\t\t\t\t<a class=\"w3-btn w3-blue w3-round w3-ripple btn btn-default navbar-btn\" role=\"button\" data-target=\"#inscription-modal\" data-toggle=\"modal\"> S'Inscrire \t<i class=\"glyphicon glyphicon-user\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t\t<li> <span class=\"qmdivider qmdividery\"></span></li>
\t\t\t\t\t\t  ";
        
        $__internal_ce29500f0a6ea77a2b2630a1fd3f5d406897bbae5f635e07100ef6044098aa13->leave($__internal_ce29500f0a6ea77a2b2630a1fd3f5d406897bbae5f635e07100ef6044098aa13_prof);

    }

    // line 157
    public function block_usermessages($context, array $blocks = array())
    {
        $__internal_7dc0a626d942e1aa9ed1ed35882b19ff48a02e0a36cfb15ff8fb1c86d8850b0b = $this->env->getExtension("native_profiler");
        $__internal_7dc0a626d942e1aa9ed1ed35882b19ff48a02e0a36cfb15ff8fb1c86d8850b0b->enter($__internal_7dc0a626d942e1aa9ed1ed35882b19ff48a02e0a36cfb15ff8fb1c86d8850b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "usermessages"));

        // line 158
        echo "\t\t\t\t\t\t   
\t\t\t\t
\t\t\t\t";
        
        $__internal_7dc0a626d942e1aa9ed1ed35882b19ff48a02e0a36cfb15ff8fb1c86d8850b0b->leave($__internal_7dc0a626d942e1aa9ed1ed35882b19ff48a02e0a36cfb15ff8fb1c86d8850b0b_prof);

    }

    // line 169
    public function block_body($context, array $blocks = array())
    {
        $__internal_4462291fdcd9534f57afefe9bda67aa6959a5a6fcbfcb7f9a7d8e27d104b7e89 = $this->env->getExtension("native_profiler");
        $__internal_4462291fdcd9534f57afefe9bda67aa6959a5a6fcbfcb7f9a7d8e27d104b7e89->enter($__internal_4462291fdcd9534f57afefe9bda67aa6959a5a6fcbfcb7f9a7d8e27d104b7e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 170
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
\t\t\t\t\t\t\t<div id=\"submenu\" class=\"row container-fluid w3-light-grey\" style=\"margin-left:0%;width:100%;margin-bottom:2px;margin-top:2px;clear:both;\">
\t\t\t\t\t\t\t";
        // line 185
        $this->displayBlock('submenu', $context, $blocks);
        // line 203
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"bodycontent\" class=\"row container-fluid w3-white\" style=\"margin-left:0%;width:100%;clear:both;height:100%;\">
\t\t\t\t\t\t\t";
        // line 211
        $this->displayBlock('bodycontent', $context, $blocks);
        // line 215
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t";
        
        $__internal_4462291fdcd9534f57afefe9bda67aa6959a5a6fcbfcb7f9a7d8e27d104b7e89->leave($__internal_4462291fdcd9534f57afefe9bda67aa6959a5a6fcbfcb7f9a7d8e27d104b7e89_prof);

    }

    // line 185
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_662c5324df2c1c84e8ebf8b448a1c515689a2df940f2533d9a138d3b8e96511f = $this->env->getExtension("native_profiler");
        $__internal_662c5324df2c1c84e8ebf8b448a1c515689a2df940f2533d9a138d3b8e96511f->enter($__internal_662c5324df2c1c84e8ebf8b448a1c515689a2df940f2533d9a138d3b8e96511f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 186
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
        
        $__internal_662c5324df2c1c84e8ebf8b448a1c515689a2df940f2533d9a138d3b8e96511f->leave($__internal_662c5324df2c1c84e8ebf8b448a1c515689a2df940f2533d9a138d3b8e96511f_prof);

    }

    // line 211
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_42f8e0d2691f9283e9610de238f69ae3e9e4fcfc5984a90e7821db7edf3b9772 = $this->env->getExtension("native_profiler");
        $__internal_42f8e0d2691f9283e9610de238f69ae3e9e4fcfc5984a90e7821db7edf3b9772->enter($__internal_42f8e0d2691f9283e9610de238f69ae3e9e4fcfc5984a90e7821db7edf3b9772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 212
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        
        $__internal_42f8e0d2691f9283e9610de238f69ae3e9e4fcfc5984a90e7821db7edf3b9772->leave($__internal_42f8e0d2691f9283e9610de238f69ae3e9e4fcfc5984a90e7821db7edf3b9772_prof);

    }

    // line 224
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f04902c6bccb9ffd5dda39c56a3e3981743913771b81347f0f43aa2445bd81c8 = $this->env->getExtension("native_profiler");
        $__internal_f04902c6bccb9ffd5dda39c56a3e3981743913771b81347f0f43aa2445bd81c8->enter($__internal_f04902c6bccb9ffd5dda39c56a3e3981743913771b81347f0f43aa2445bd81c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 225
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
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-3x fa-fw fa-instagram text-inverse\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-3x fa-fw fa-twitter text-inverse\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-3x fa-fw fa-facebook text-inverse\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-3x fa-fw fa-github text-inverse\"></i></a>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t  <div class=\"col-md-12 hidden-xs text-right\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-3x fa-fw fa-instagram text-inverse\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-3x fa-fw fa-twitter text-inverse\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-3x fa-fw fa-facebook text-inverse\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-3x fa-fw fa-github text-inverse\"></i></a>
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
        
        $__internal_f04902c6bccb9ffd5dda39c56a3e3981743913771b81347f0f43aa2445bd81c8->leave($__internal_f04902c6bccb9ffd5dda39c56a3e3981743913771b81347f0f43aa2445bd81c8_prof);

    }

    // line 268
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d512a1a59313bc05580d2e4d629421542a2df2920af961db6eba2a32e0f3e161 = $this->env->getExtension("native_profiler");
        $__internal_d512a1a59313bc05580d2e4d629421542a2df2920af961db6eba2a32e0f3e161->enter($__internal_d512a1a59313bc05580d2e4d629421542a2df2920af961db6eba2a32e0f3e161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 269
        echo "\t\t";
        // line 270
        echo "\t\t
\t\t<!-- Frameworks JavaScript -->
\t\t<script type=\"text/javascript\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<!-- Plugin JavaScript -->
\t\t<script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>
\t\t<script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/classie.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/cbpAnimatedHeader.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- Contact Form JavaScript -->
\t\t<script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/jqBootstrapValidation.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/contact_me.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- Custom Theme JavaScript -->
\t\t<script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/freelancer.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/magic.js"), "html", null, true);
        echo "\"></script>
\t\t
\t";
        
        $__internal_d512a1a59313bc05580d2e4d629421542a2df2920af961db6eba2a32e0f3e161->leave($__internal_d512a1a59313bc05580d2e4d629421542a2df2920af961db6eba2a32e0f3e161_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  600 => 286,  596 => 285,  590 => 282,  586 => 281,  580 => 278,  576 => 277,  569 => 273,  565 => 272,  561 => 270,  559 => 269,  553 => 268,  509 => 225,  503 => 224,  494 => 212,  488 => 211,  465 => 186,  459 => 185,  450 => 215,  448 => 211,  438 => 203,  436 => 185,  419 => 170,  413 => 169,  404 => 158,  398 => 157,  387 => 115,  381 => 114,  370 => 108,  364 => 107,  357 => 48,  354 => 47,  351 => 46,  345 => 45,  333 => 35,  315 => 23,  307 => 18,  303 => 17,  299 => 16,  295 => 15,  289 => 12,  285 => 11,  281 => 9,  275 => 8,  263 => 289,  261 => 268,  254 => 263,  252 => 224,  244 => 218,  242 => 169,  231 => 160,  229 => 157,  195 => 128,  189 => 127,  184 => 125,  179 => 122,  175 => 120,  173 => 114,  170 => 113,  168 => 107,  165 => 106,  157 => 101,  150 => 96,  148 => 95,  139 => 91,  132 => 86,  122 => 84,  116 => 83,  109 => 81,  99 => 76,  89 => 69,  83 => 68,  62 => 49,  60 => 45,  47 => 35,  44 => 34,  42 => 8,  33 => 1,);
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
/* 		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/* 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/* 		<!--[if lt IE 9]>*/
/* 			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/* 			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/* 		<![endif]-->*/
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
/* 			<div id="headerfss" class="navbar navbar-fixed-top w3-theme w3-left-align w3-light-grey" style="z-index:50;height:70px;margin-bottom:1px;margin-top:1px;width:100%;" role="navigation">*/
/* */
/* 			  <div class="container w3-right" style="z-index:50;">*/
/* 					  <div class="navbar-header" style="z-index:50;">*/
/* 						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">*/
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
/* 			  */
/* 			 </div>*/
/* 			 */
/* 				<div id="flashnews">*/
/* 					*/
/* 			  </div>*/
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
/* 							<div id="submenu" class="row container-fluid w3-light-grey" style="margin-left:0%;width:100%;margin-bottom:2px;margin-top:2px;clear:both;">*/
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
/* 			<footer class="col-lg-12 container-fluid w3-light-blue w3-bottom " style="height:10%;">*/
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
/* 						<a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>*/
/* 						<a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>*/
/* 						<a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>*/
/* 						<a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>*/
/* 					  </div>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 					  <div class="col-md-12 hidden-xs text-right">*/
/* 						<a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>*/
/* 						<a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>*/
/* 						<a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>*/
/* 						<a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>*/
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
/* 		<!-- Plugin JavaScript -->*/
/* 		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>*/
/* 		<script src="{{ asset('includes/js/classie.js') }}"></script>*/
/* 		<script src="{{ asset('includes/js/cbpAnimatedHeader.js') }}"></script>*/
/* */
/* 		<!-- Contact Form JavaScript -->*/
/* 		<script src="{{ asset('includes/js/jqBootstrapValidation.js') }}"></script>*/
/* 		<script src="{{ asset('includes/js/contact_me.js') }}"></script>*/
/* */
/* 		<!-- Custom Theme JavaScript -->*/
/* 		<script src="{{ asset('includes/js/freelancer.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('includes/js/magic.js') }}"></script>*/
/* 		*/
/* 	{% endblock %}*/
/* 	*/
/*   </body>*/
/*   */
/*  */
/* </html>*/
/* */
