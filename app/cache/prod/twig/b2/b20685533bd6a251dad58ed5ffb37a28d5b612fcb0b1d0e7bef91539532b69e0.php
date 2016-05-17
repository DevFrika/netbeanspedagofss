<?php

/* PedagogiePedagogieBundle:admin/modif:modiflayout.html.twig */
class __TwigTemplate_89f885c93cb7a3ac950f67757e003dc88206d2318f6f5880f1af9eed7fd6dea6 extends Twig_Template
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
        // line 1
        echo "<div class=\"section w3-clear \" style=\"margin-top:-25%;clear:both;\">
\t<div class=\"row\">
\t\t<div id=\"modiflayout\" class=\"col-lg-12 container-fluid tabs w3-animate-zoom w3-white\" style=\"height:90%;width:100%;z-index:99;\">


\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<header class=\"w3-container w3-blue w3-padding back-button\">
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"closeMenu(event, 'bodycontent')\"  class=\"w3-btn btn w3-white tablink w3-left\"><i class=\"glyphicon glyphicon-menu-left\"></i> Retour </a>
\t\t\t\t\t\t
\t\t\t\t\t</header>
\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t
\t\t\t\t\t<!-- Overlay effect when opening sidenav on small screens -->
\t\t\t\t\t<div class=\"w3-overlay w3-hide-large w3-animate-opacity\" onclick=\"w3_close()\" style=\"cursor:pointer\" title=\"close side menu\"></div>


\t\t\t\t\t<!-- !PAGE CONTENT! -->
\t\t\t\t\t<div class=\"w3-main\" style=\"margin-left:100px;margin-top:5px;\">

\t\t\t\t\t\t<!-- Header -->

\t\t\t\t\t   <div class=\"w3-container pull-left\" style=\"margin-left:10px;width:85%;\">
\t\t\t\t\t   
\t\t\t\t\t\t\t<div id=\"modifemploi\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 33
        if ( !(null === (isset($context["allemploi"]) ? $context["allemploi"] : null))) {
            // line 34
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allemploi"]) ? $context["allemploi"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["emp"]) {
                // line 36
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 37
                $this->loadTemplate("PedagogiePedagogieBundle::admin/emploi/updateemploilayout.html.twig", "PedagogiePedagogieBundle:admin/modif:modiflayout.html.twig", 37)->display($context);
                // line 38
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"modifdepartement\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 46
        if ( !(null === (isset($context["alldepartement"]) ? $context["alldepartement"] : null))) {
            // line 47
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 49
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 50
                $this->loadTemplate("PedagogiePedagogieBundle::admin/departement/updatedepartementlayout.html.twig", "PedagogiePedagogieBundle:admin/modif:modiflayout.html.twig", 50)->display($context);
                // line 51
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"modiffiliere\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 59
        if ( !(null === (isset($context["allfiliere"]) ? $context["allfiliere"] : null))) {
            // line 60
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allfiliere"]) ? $context["allfiliere"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["fil"]) {
                // line 62
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 63
                $this->loadTemplate("PedagogiePedagogieBundle::admin/filiere/updatefilierelayout.html.twig", "PedagogiePedagogieBundle:admin/modif:modiflayout.html.twig", 63)->display($context);
                // line 64
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fil'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"modifclasse\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 72
        if ( !(null === (isset($context["allclasse"]) ? $context["allclasse"] : null))) {
            // line 73
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allclasse"]) ? $context["allclasse"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["cls"]) {
                // line 75
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 76
                $this->loadTemplate("PedagogiePedagogieBundle::admin/classe/updateclasselayout.html.twig", "PedagogiePedagogieBundle:admin/modif:modiflayout.html.twig", 76)->display($context);
                // line 77
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cls'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        }
        // line 81
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"modifgroupe\" class=\"tabs w3-container w3-section w3-animate-left \">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 85
        if ( !(null === (isset($context["allgroupe"]) ? $context["allgroupe"] : null))) {
            // line 86
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allgroupe"]) ? $context["allgroupe"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["grp"]) {
                // line 88
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 89
                $this->loadTemplate("PedagogiePedagogieBundle::admin/groupe/updategroupelayout.html.twig", "PedagogiePedagogieBundle:admin/modif:modiflayout.html.twig", 89)->display($context);
                // line 90
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        }
        // line 94
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"modifenseignant\" class=\"tabs w3-container w3-section w3-animate-left \" >
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 98
        if ( !(null === (isset($context["allenseignant"]) ? $context["allenseignant"] : null))) {
            // line 99
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allenseignant"]) ? $context["allenseignant"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["ens"]) {
                // line 101
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 102
                $this->loadTemplate("PedagogiePedagogieBundle::admin/enseignant/updateenseignantlayout.html.twig", "PedagogiePedagogieBundle:admin/modif:modiflayout.html.twig", 102)->display($context);
                // line 103
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ens'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        }
        // line 107
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"modifdiscipline\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 112
        if ( !(null === (isset($context["alldiscipline"]) ? $context["alldiscipline"] : null))) {
            // line 113
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alldiscipline"]) ? $context["alldiscipline"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["dis"]) {
                // line 115
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 116
                $this->loadTemplate("PedagogiePedagogieBundle::admin/discipline/updatedisciplinelayout.html.twig", "PedagogiePedagogieBundle:admin/modif:modiflayout.html.twig", 116)->display($context);
                // line 117
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dis'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        }
        // line 121
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"modifmatiere\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 125
        if ( !(null === (isset($context["allmatiere"]) ? $context["allmatiere"] : null))) {
            // line 126
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allmatiere"]) ? $context["allmatiere"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["mat"]) {
                // line 128
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 129
                $this->loadTemplate("PedagogiePedagogieBundle::admin/matiere/updatematierelayout.html.twig", "PedagogiePedagogieBundle:admin/modif:modiflayout.html.twig", 129)->display($context);
                // line 130
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        }
        // line 134
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"modifvoeux\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 139
        if ( !(null === (isset($context["allvoeux"]) ? $context["allvoeux"] : null))) {
            // line 140
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allvoeux"]) ? $context["allvoeux"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["veu"]) {
                // line 142
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 143
                $this->loadTemplate("PedagogiePedagogieBundle::admin/voeux/updatevoeuxlayout.html.twig", "PedagogiePedagogieBundle:admin/modif:modiflayout.html.twig", 143)->display($context);
                // line 144
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['veu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        }
        // line 148
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"modifdevoir\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 152
        if ( !(null === (isset($context["alldevoir"]) ? $context["alldevoir"] : null))) {
            // line 153
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alldevoir"]) ? $context["alldevoir"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["dev"]) {
                // line 155
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 156
                $this->loadTemplate("PedagogiePedagogieBundle::admin/devoir/updatedevoirlayout.html.twig", "PedagogiePedagogieBundle:admin/modif:modiflayout.html.twig", 156)->display($context);
                // line 157
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dev'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        }
        // line 161
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"modiflieux\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 165
        if ( !(null === (isset($context["alllieux"]) ? $context["alllieux"] : null))) {
            // line 166
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alllieux"]) ? $context["alllieux"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["lieux"]) {
                // line 168
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 169
                $this->loadTemplate("PedagogiePedagogieBundle::admin/lieux/updatelieuxlayout.html.twig", "PedagogiePedagogieBundle:admin/modif:modiflayout.html.twig", 169)->display($context);
                // line 170
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieux'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        }
        // line 174
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"modifsalle\" class=\"tabs w3-container w3-section w3-animate-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 178
        if ( !(null === (isset($context["allsalle"]) ? $context["allsalle"] : null))) {
            // line 179
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allsalle"]) ? $context["allsalle"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
                // line 181
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 182
                $this->loadTemplate("PedagogiePedagogieBundle::admin/salle/updatesallelayout.html.twig", "PedagogiePedagogieBundle:admin/modif:modiflayout.html.twig", 182)->display($context);
                // line 183
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        }
        // line 187
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t  
\t\t\t\t\t\t</div>
\t\t\t\t\t  <!-- End page content -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:admin/modif:modiflayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  673 => 187,  669 => 185,  654 => 183,  652 => 182,  649 => 181,  632 => 180,  629 => 179,  627 => 178,  621 => 174,  617 => 172,  602 => 170,  600 => 169,  597 => 168,  580 => 167,  577 => 166,  575 => 165,  569 => 161,  565 => 159,  550 => 157,  548 => 156,  545 => 155,  528 => 154,  525 => 153,  523 => 152,  517 => 148,  513 => 146,  498 => 144,  496 => 143,  493 => 142,  476 => 141,  473 => 140,  471 => 139,  464 => 134,  460 => 132,  445 => 130,  443 => 129,  440 => 128,  423 => 127,  420 => 126,  418 => 125,  412 => 121,  408 => 119,  393 => 117,  391 => 116,  388 => 115,  371 => 114,  368 => 113,  366 => 112,  359 => 107,  355 => 105,  340 => 103,  338 => 102,  335 => 101,  318 => 100,  315 => 99,  313 => 98,  307 => 94,  303 => 92,  288 => 90,  286 => 89,  283 => 88,  266 => 87,  263 => 86,  261 => 85,  255 => 81,  251 => 79,  236 => 77,  234 => 76,  231 => 75,  214 => 74,  211 => 73,  209 => 72,  203 => 68,  199 => 66,  184 => 64,  182 => 63,  179 => 62,  162 => 61,  159 => 60,  157 => 59,  151 => 55,  147 => 53,  132 => 51,  130 => 50,  127 => 49,  110 => 48,  107 => 47,  105 => 46,  99 => 42,  95 => 40,  80 => 38,  78 => 37,  75 => 36,  58 => 35,  55 => 34,  53 => 33,  19 => 1,);
    }
}
/* <div class="section w3-clear " style="margin-top:-25%;clear:both;">*/
/* 	<div class="row">*/
/* 		<div id="modiflayout" class="col-lg-12 container-fluid tabs w3-animate-zoom w3-white" style="height:90%;width:100%;z-index:99;">*/
/* */
/* */
/* 			<div class="row">*/
/* 				<div class="col-lg-12">*/
/* 					<header class="w3-container w3-blue w3-padding back-button">*/
/* 							<a href="#" onclick="closeMenu(event, 'bodycontent')"  class="w3-btn btn w3-white tablink w3-left"><i class="glyphicon glyphicon-menu-left"></i> Retour </a>*/
/* 						*/
/* 					</header>*/
/* 				*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="row">*/
/* 			*/
/* 				<div class="col-lg-12">*/
/* 				*/
/* 					<!-- Overlay effect when opening sidenav on small screens -->*/
/* 					<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu"></div>*/
/* */
/* */
/* 					<!-- !PAGE CONTENT! -->*/
/* 					<div class="w3-main" style="margin-left:100px;margin-top:5px;">*/
/* */
/* 						<!-- Header -->*/
/* */
/* 					   <div class="w3-container pull-left" style="margin-left:10px;width:85%;">*/
/* 					   */
/* 							<div id="modifemploi" class="tabs w3-container w3-section w3-animate-left">*/
/* 							*/
/* 								{% if allemploi is not null %}*/
/* 								*/
/* 									{% for emp in allemploi  %}*/
/* 									*/
/* 										{% include "PedagogiePedagogieBundle::admin/emploi/updateemploilayout.html.twig" %}*/
/* 										*/
/* 									{% endfor %}*/
/* 									*/
/* 								{% endif %}*/
/* 							</div>*/
/* 							*/
/* 							<div id="modifdepartement" class="tabs w3-container w3-section w3-animate-left">*/
/* 							*/
/* 								{% if alldepartement is not null %}*/
/* 								*/
/* 									{% for dep in alldepartement  %}*/
/* 									*/
/* 										{% include "PedagogiePedagogieBundle::admin/departement/updatedepartementlayout.html.twig" %}*/
/* 										*/
/* 									{% endfor %}*/
/* 									*/
/* 								{% endif %}*/
/* 							</div>*/
/* 							*/
/* 							<div id="modiffiliere" class="tabs w3-container w3-section w3-animate-left">*/
/* 							*/
/* 								{% if allfiliere is not null %}*/
/* 								*/
/* 									{% for fil in allfiliere  %}*/
/* 									*/
/* 										{% include "PedagogiePedagogieBundle::admin/filiere/updatefilierelayout.html.twig" %}*/
/* 										*/
/* 									{% endfor %}*/
/* 									*/
/* 								{% endif %}*/
/* 							</div>*/
/* 							*/
/* 							<div id="modifclasse" class="tabs w3-container w3-section w3-animate-left">*/
/* 							*/
/* 								{% if allclasse is not null %}*/
/* 								*/
/* 									{% for cls in allclasse  %}*/
/* 									*/
/* 										{% include "PedagogiePedagogieBundle::admin/classe/updateclasselayout.html.twig" %}*/
/* 										*/
/* 									{% endfor %}*/
/* 									*/
/* 								{% endif %}*/
/* 							</div>*/
/* 							*/
/* 							<div id="modifgroupe" class="tabs w3-container w3-section w3-animate-left ">*/
/* 							*/
/* 								{% if allgroupe is not null %}*/
/* 								*/
/* 									{% for grp in allgroupe  %}*/
/* 									*/
/* 										{% include "PedagogiePedagogieBundle::admin/groupe/updategroupelayout.html.twig" %}*/
/* 										*/
/* 									{% endfor %}*/
/* 									*/
/* 								{% endif %}*/
/* 							</div>*/
/* 							*/
/* 							<div id="modifenseignant" class="tabs w3-container w3-section w3-animate-left " >*/
/* 							*/
/* 								{% if allenseignant is not null %}*/
/* 								*/
/* 									{% for ens in allenseignant  %}*/
/* 									*/
/* 										{% include "PedagogiePedagogieBundle::admin/enseignant/updateenseignantlayout.html.twig" %}*/
/* 										*/
/* 									{% endfor %}*/
/* 									*/
/* 								{% endif %}*/
/* 							</div>*/
/* 							*/
/* 							*/
/* 							<div id="modifdiscipline" class="tabs w3-container w3-section w3-animate-left">*/
/* 							*/
/* 								{% if alldiscipline is not null %}*/
/* 								*/
/* 									{% for dis in alldiscipline  %}*/
/* 									*/
/* 										{% include "PedagogiePedagogieBundle::admin/discipline/updatedisciplinelayout.html.twig" %}*/
/* 										*/
/* 									{% endfor %}*/
/* 									*/
/* 								{% endif %}*/
/* 							</div>*/
/* 							*/
/* 							<div id="modifmatiere" class="tabs w3-container w3-section w3-animate-left">*/
/* 							*/
/* 								{% if allmatiere is not null %}*/
/* 								*/
/* 									{% for mat in allmatiere  %}*/
/* 									*/
/* 										{% include "PedagogiePedagogieBundle::admin/matiere/updatematierelayout.html.twig" %}*/
/* 										*/
/* 									{% endfor %}*/
/* 									*/
/* 								{% endif %}*/
/* 							</div>*/
/* 							*/
/* 							*/
/* 							<div id="modifvoeux" class="tabs w3-container w3-section w3-animate-left">*/
/* 							*/
/* 								{% if allvoeux is not null %}*/
/* 								*/
/* 									{% for veu in allvoeux  %}*/
/* 									*/
/* 										{% include "PedagogiePedagogieBundle::admin/voeux/updatevoeuxlayout.html.twig" %}*/
/* 										*/
/* 									{% endfor %}*/
/* 									*/
/* 								{% endif %}*/
/* 							</div>*/
/* 							*/
/* 							<div id="modifdevoir" class="tabs w3-container w3-section w3-animate-left">*/
/* 							*/
/* 								{% if alldevoir is not null %}*/
/* 								*/
/* 									{% for dev in alldevoir  %}*/
/* 									*/
/* 										{% include "PedagogiePedagogieBundle::admin/devoir/updatedevoirlayout.html.twig" %}*/
/* 										*/
/* 									{% endfor %}*/
/* 									*/
/* 								{% endif %}*/
/* 							</div>*/
/* 							*/
/* 							<div id="modiflieux" class="tabs w3-container w3-section w3-animate-left">*/
/* 							*/
/* 								{% if alllieux is not null %}*/
/* 								*/
/* 									{% for lieux in alllieux  %}*/
/* 									*/
/* 										{% include "PedagogiePedagogieBundle::admin/lieux/updatelieuxlayout.html.twig" %}*/
/* 										*/
/* 									{% endfor %}*/
/* 									*/
/* 								{% endif %}*/
/* 							</div>*/
/* 							*/
/* 							<div id="modifsalle" class="tabs w3-container w3-section w3-animate-left">*/
/* 							*/
/* 								{% if allsalle is not null %}*/
/* 								*/
/* 									{% for salle in allsalle  %}*/
/* 									*/
/* 										{% include "PedagogiePedagogieBundle::admin/salle/updatesallelayout.html.twig" %}*/
/* 										*/
/* 									{% endfor %}*/
/* 									*/
/* 								{% endif %}*/
/* 							</div>*/
/* 							*/
/* 						  */
/* 						</div>*/
/* 					  <!-- End page content -->*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
