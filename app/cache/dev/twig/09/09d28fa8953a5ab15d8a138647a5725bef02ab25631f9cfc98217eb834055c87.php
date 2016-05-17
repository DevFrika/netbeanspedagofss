<?php

/* PedagogiePedagogieBundle:Default:admin.html.twig */
class __TwigTemplate_4d9138f492f9e03457e46abc2b71de76afa127d8d652697ed332014a746d01a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'modals' => array($this, 'block_modals'),
            'submenu' => array($this, 'block_submenu'),
            'bodycontent' => array($this, 'block_bodycontent'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2089eeb465871966a78756648812d7d5c65bef32b88668c88269feeee48437a5 = $this->env->getExtension("native_profiler");
        $__internal_2089eeb465871966a78756648812d7d5c65bef32b88668c88269feeee48437a5->enter($__internal_2089eeb465871966a78756648812d7d5c65bef32b88668c88269feeee48437a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PedagogiePedagogieBundle:Default:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2089eeb465871966a78756648812d7d5c65bef32b88668c88269feeee48437a5->leave($__internal_2089eeb465871966a78756648812d7d5c65bef32b88668c88269feeee48437a5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_51c0eb96aea1a894502f64da991bd0a50c67aa2bc97653c3edc452aecc65d828 = $this->env->getExtension("native_profiler");
        $__internal_51c0eb96aea1a894502f64da991bd0a50c67aa2bc97653c3edc452aecc65d828->enter($__internal_51c0eb96aea1a894502f64da991bd0a50c67aa2bc97653c3edc452aecc65d828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Pedagogie - Admin
";
        
        $__internal_51c0eb96aea1a894502f64da991bd0a50c67aa2bc97653c3edc452aecc65d828->leave($__internal_51c0eb96aea1a894502f64da991bd0a50c67aa2bc97653c3edc452aecc65d828_prof);

    }

    // line 6
    public function block_modals($context, array $blocks = array())
    {
        $__internal_5764dc1eb3463e48daea93f36cdfcb2bd57a9efb26c23ef4bf9faa54dd4a0238 = $this->env->getExtension("native_profiler");
        $__internal_5764dc1eb3463e48daea93f36cdfcb2bd57a9efb26c23ef4bf9faa54dd4a0238->enter($__internal_5764dc1eb3463e48daea93f36cdfcb2bd57a9efb26c23ef4bf9faa54dd4a0238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modals"));

        // line 7
        echo "

";
        // line 9
        $this->loadTemplate("PedagogiePedagogieBundle::admin/emploi/addemploilayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 9)->display($context);
        // line 10
        $this->loadTemplate("PedagogiePedagogieBundle::admin/emploi/emploitemplatelayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 10)->display($context);
        // line 11
        echo "
";
        // line 12
        if ( !(null === (isset($context["allemploi"]) ? $context["allemploi"] : $this->getContext($context, "allemploi")))) {
            // line 13
            echo "
\t";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allemploi"]) ? $context["allemploi"] : $this->getContext($context, "allemploi")));
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
                // line 15
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/emploi/modalemploilayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 15)->display($context);
                // line 16
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/emploi/deleteemploilayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 16)->display($context);
                // line 17
                echo "\t";
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
            // line 18
            echo "\t
";
        }
        // line 20
        echo "

";
        // line 22
        $this->loadTemplate("PedagogiePedagogieBundle::admin/departement/adddepartementlayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 22)->display($context);
        // line 23
        echo "
";
        // line 24
        if ( !(null === (isset($context["alldepartement"]) ? $context["alldepartement"] : $this->getContext($context, "alldepartement")))) {
            // line 25
            echo "
\t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alldepartement"]) ? $context["alldepartement"] : $this->getContext($context, "alldepartement")));
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
                // line 27
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/departement/modaldepartementlayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 27)->display($context);
                // line 28
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/departement/deletedepartementlayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 28)->display($context);
                // line 29
                echo "\t";
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
            // line 30
            echo "\t
";
        }
        // line 32
        echo "
";
        // line 33
        $this->loadTemplate("PedagogiePedagogieBundle::admin/filiere/addfilierelayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 33)->display($context);
        // line 34
        echo "
";
        // line 35
        if ( !(null === (isset($context["allfiliere"]) ? $context["allfiliere"] : $this->getContext($context, "allfiliere")))) {
            // line 36
            echo "
\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allfiliere"]) ? $context["allfiliere"] : $this->getContext($context, "allfiliere")));
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
                // line 38
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/filiere/modalfilierelayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 38)->display($context);
                // line 39
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/filiere/deletefilierelayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 39)->display($context);
                // line 40
                echo "\t";
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
            // line 41
            echo "\t
";
        }
        // line 43
        echo "
";
        // line 44
        $this->loadTemplate("PedagogiePedagogieBundle::admin/discipline/adddisciplinelayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 44)->display($context);
        // line 45
        echo "
";
        // line 46
        if ( !(null === (isset($context["alldiscipline"]) ? $context["alldiscipline"] : $this->getContext($context, "alldiscipline")))) {
            // line 47
            echo "
\t";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alldiscipline"]) ? $context["alldiscipline"] : $this->getContext($context, "alldiscipline")));
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
                // line 49
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/discipline/modaldisciplinelayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 49)->display($context);
                // line 50
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/discipline/deletedisciplinelayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 50)->display($context);
                // line 51
                echo "\t";
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
            // line 52
            echo "\t
";
        }
        // line 54
        echo "


";
        // line 57
        $this->loadTemplate("PedagogiePedagogieBundle::admin/matiere/addmatierelayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 57)->display($context);
        // line 58
        echo "
";
        // line 59
        if ( !(null === (isset($context["allmatiere"]) ? $context["allmatiere"] : $this->getContext($context, "allmatiere")))) {
            // line 60
            echo "
\t";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allmatiere"]) ? $context["allmatiere"] : $this->getContext($context, "allmatiere")));
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
                // line 62
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/matiere/modalmatierelayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 62)->display($context);
                // line 63
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/matiere/deletematierelayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 63)->display($context);
                // line 64
                echo "\t";
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
            // line 65
            echo "\t
";
        }
        // line 67
        echo "
";
        // line 68
        $this->loadTemplate("PedagogiePedagogieBundle::admin/classe/addclasselayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 68)->display($context);
        // line 69
        echo "
";
        // line 70
        if ( !(null === (isset($context["allclasse"]) ? $context["allclasse"] : $this->getContext($context, "allclasse")))) {
            // line 71
            echo "
\t";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allclasse"]) ? $context["allclasse"] : $this->getContext($context, "allclasse")));
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
                // line 73
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/classe/modalclasselayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 73)->display($context);
                // line 74
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/classe/deleteclasselayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 74)->display($context);
                // line 75
                echo "\t";
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
            // line 76
            echo "\t
";
        }
        // line 78
        echo "

";
        // line 80
        $this->loadTemplate("PedagogiePedagogieBundle::admin/groupe/addgroupelayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 80)->display($context);
        // line 81
        echo "
";
        // line 82
        if ( !(null === (isset($context["allgroupe"]) ? $context["allgroupe"] : $this->getContext($context, "allgroupe")))) {
            // line 83
            echo "
\t";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allgroupe"]) ? $context["allgroupe"] : $this->getContext($context, "allgroupe")));
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
                // line 85
                echo "\t\t\t\t
\t\t\t\t";
                // line 86
                $this->loadTemplate("PedagogiePedagogieBundle::admin/groupe/modalgroupelayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 86)->display($context);
                // line 87
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/groupe/deletegroupelayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 87)->display($context);
                // line 88
                echo "\t";
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
            // line 89
            echo "\t
";
        }
        // line 91
        echo "

";
        // line 93
        $this->loadTemplate("PedagogiePedagogieBundle::admin/voeux/addvoeuxlayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 93)->display($context);
        // line 94
        echo "
";
        // line 95
        if ( !(null === (isset($context["allvoeux"]) ? $context["allvoeux"] : $this->getContext($context, "allvoeux")))) {
            // line 96
            echo "
\t";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allvoeux"]) ? $context["allvoeux"] : $this->getContext($context, "allvoeux")));
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
                // line 98
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/voeux/modalvoeuxlayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 98)->display($context);
                // line 99
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/voeux/deletevoeuxlayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 99)->display($context);
                // line 100
                echo "\t";
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
            // line 101
            echo "\t
";
        }
        // line 103
        echo "
";
        // line 104
        $this->loadTemplate("PedagogiePedagogieBundle::admin/devoir/adddevoirlayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 104)->display($context);
        // line 105
        echo "
";
        // line 106
        if ( !(null === (isset($context["alldevoir"]) ? $context["alldevoir"] : $this->getContext($context, "alldevoir")))) {
            // line 107
            echo "
\t";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alldevoir"]) ? $context["alldevoir"] : $this->getContext($context, "alldevoir")));
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
                // line 109
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/devoir/modaldevoirlayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 109)->display($context);
                // line 110
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/devoir/deletedevoirlayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 110)->display($context);
                // line 111
                echo "\t";
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
            // line 112
            echo "\t
";
        }
        // line 114
        echo "

";
        // line 116
        $this->loadTemplate("PedagogiePedagogieBundle::admin/enseignant/addenseignantlayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 116)->display($context);
        // line 117
        echo "
";
        // line 118
        if ( !(null === (isset($context["allenseignant"]) ? $context["allenseignant"] : $this->getContext($context, "allenseignant")))) {
            // line 119
            echo "
\t";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allenseignant"]) ? $context["allenseignant"] : $this->getContext($context, "allenseignant")));
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
                // line 121
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/enseignant/modalenseignantlayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 121)->display($context);
                // line 122
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/enseignant/deleteenseignantlayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 122)->display($context);
                // line 123
                echo "\t";
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
            // line 124
            echo "\t
";
        }
        // line 126
        echo "

";
        // line 128
        $this->loadTemplate("PedagogiePedagogieBundle::admin/lieux/addlieuxlayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 128)->display($context);
        // line 129
        echo "
";
        // line 130
        if ( !(null === (isset($context["alllieux"]) ? $context["alllieux"] : $this->getContext($context, "alllieux")))) {
            // line 131
            echo "
\t";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alllieux"]) ? $context["alllieux"] : $this->getContext($context, "alllieux")));
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
                // line 133
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/lieux/modallieuxlayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 133)->display($context);
                // line 134
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/lieux/deletelieuxlayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 134)->display($context);
                // line 135
                echo "\t";
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
            // line 136
            echo "\t
";
        }
        // line 138
        echo "
";
        // line 139
        $this->loadTemplate("PedagogiePedagogieBundle::admin/salle/addsallelayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 139)->display($context);
        // line 140
        echo "
";
        // line 141
        if ( !(null === (isset($context["allsalle"]) ? $context["allsalle"] : $this->getContext($context, "allsalle")))) {
            // line 142
            echo "
\t";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allsalle"]) ? $context["allsalle"] : $this->getContext($context, "allsalle")));
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
                // line 144
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/salle/modalsallelayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 144)->display($context);
                // line 145
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/salle/deletesallelayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 145)->display($context);
                // line 146
                echo "\t";
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
            // line 147
            echo "\t
";
        }
        // line 149
        echo "  
  
  ";
        
        $__internal_5764dc1eb3463e48daea93f36cdfcb2bd57a9efb26c23ef4bf9faa54dd4a0238->leave($__internal_5764dc1eb3463e48daea93f36cdfcb2bd57a9efb26c23ef4bf9faa54dd4a0238_prof);

    }

    // line 154
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_23be095de3cdc856739be8daad4e3ec27c4da5899265ee16b389cc128d00aceb = $this->env->getExtension("native_profiler");
        $__internal_23be095de3cdc856739be8daad4e3ec27c4da5899265ee16b389cc128d00aceb->enter($__internal_23be095de3cdc856739be8daad4e3ec27c4da5899265ee16b389cc128d00aceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 155
        echo "\t
        <div class=\"row\">
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<a href=\"#\" class=\"tablink \" onclick=\"openMenu(event, 'emploilayout')\">
\t\t\t\t  <div class=\"w3-round w3-section w3-container w3-blue w3-hover-white w3-padding-hor-1\">
\t\t\t\t\t<div class=\"w3-left\"><i class=\"glyphicon glyphicon-calendar w3-xlarge\"></i></div>
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t<h4> Emploi du temps </h4>
\t\t\t\t  </div>
\t\t\t\t </a>
\t\t\t</div>
\t\t\t
\t\t
\t\t\t
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'departementlayout')\">
\t\t\t\t  <div class=\"w3-round w3-section w3-container w3-blue w3-hover-white w3-padding-hor-10\">
\t\t\t\t\t<div class=\"w3-left\"><i class=\"glyphicon glyphicon-education w3-xlarge\"></i></div>
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t<h4> Départements </h4>
\t\t\t\t  </div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t
\t\t\t<div class=\"col-xs-2 \">
\t\t\t\t<a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'filierelayout')\">
\t\t\t\t  <div class=\"w3-round w3-section w3-container w3-blue w3-hover-teal w3-padding-hor-10\">
\t\t\t\t\t<div class=\"w3-left\"><i class=\"material-icons w3-xlarge\">class</i></div>
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t<h4> Filieres </h4>
\t\t\t\t  </div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-xs-2 \">
\t\t\t\t<a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'classelayout')\">
\t\t\t\t  <div class=\"w3-round w3-section w3-container w3-blue w3-hover-teal w3-padding-hor-10\">
\t\t\t\t\t<div class=\"w3-left\"><i class=\"glyphicon glyphicon-list-alt w3-xlarge\"></i></div>
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t<h4> Classes </h4>
\t\t\t\t  </div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'groupelayout')\">
\t\t\t\t  <div class=\"w3-round w3-section w3-container w3-blue w3-hover-cyan w3-padding-hor-10\">
\t\t\t\t\t<div class=\"w3-left\"><i class=\"fa fa-group w3-xlarge\"></i></div>
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t<h4> Groupes </h4>
\t\t\t\t  </div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"col-xs-2 \">
\t\t\t\t<a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'enseignantlayout')\">
\t\t\t\t  <div class=\"w3-round w3-section w3-container w3-blue w3-hover-cyan w3-padding-hor-10\">
\t\t\t\t\t<div class=\"w3-left\"><i class=\"glyphicon glyphicon-user w3-xlarge\"></i></div>
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t<h4> Enseignants </h4>
\t\t\t\t  </div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t\t
\t\t<div class=\"row\">
\t\t\t
\t\t\t<div class=\"col-xs-2 \">
\t\t\t\t<a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'disciplinelayout')\">
\t\t\t\t  <div class=\"w3-round w3-section w3-container w3-blue w3-hover-khaki w3-padding-hor-10\">
\t\t\t\t\t<div class=\"w3-left\"><i class=\"material-icons w3-xlarge\">library_books</i></div>
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t<h4> Disciplines </h4>
\t\t\t\t  </div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-xs-2 \">
\t\t\t\t<a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'matierelayout')\">
\t\t\t\t  <div class=\"w3-round w3-section w3-container w3-blue w3-hover-khaki w3-padding-hor-10\">
\t\t\t\t\t<div class=\"w3-left\"><i class=\"fa fa-list-alt w3-xlarge\"></i></div>
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t<h4> Matieres </h4>
\t\t\t\t  </div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-xs-2 \">
\t\t\t\t<a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'voeuxlayout')\">
\t\t\t\t  <div class=\"w3-round w3-section w3-container w3-blue w3-hover-aqua w3-padding-hor-10\">
\t\t\t\t\t<div class=\"w3-left\"><i class=\"glyphicon glyphicon-star w3-xlarge\"></i></div>
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t<h4> Voeux </h4>
\t\t\t\t  </div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'devoirlayout')\">
\t\t\t\t  <div class=\"w3-round w3-section w3-container w3-blue w3-hover-aqua w3-padding-hor-10\">
\t\t\t\t\t<div class=\"w3-left\"><i class=\"glyphicon glyphicon-book w3-xlarge\"></i><i class=\"glyphicon glyphicon-text-background w3-xlarge\"></i></div>
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t<h4> Devoirs </h4>
\t\t\t\t  </div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'lieuxlayout')\">
\t\t\t\t  <div class=\"w3-round w3-section w3-container w3-blue w3-hover-red w3-padding-hor-10\">
\t\t\t\t\t<div class=\"w3-left\"><i class=\"glyphicon glyphicon-book w3-xlarge\"></i><i class=\"glyphicon glyphicon-text-background w3-xlarge\"></i></div>
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t<h4> Lieux </h4>
\t\t\t\t  </div>
\t\t\t\t</a>
\t\t\t</div>
\t\t
\t\t
\t\t
\t\t
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<a href=\"#\" class=\"tablink\" onclick=\"openMenu(event, 'sallelayout')\">
\t\t\t\t  <div class=\"w3-round w3-section w3-container w3-blue w3-hover-red w3-padding-hor-10\">
\t\t\t\t\t<div class=\"w3-left\"><i class=\"glyphicon glyphicon-book w3-xlarge\"></i><i class=\"glyphicon glyphicon-text-background w3-xlarge\"></i></div>
\t\t\t\t\t<div class=\"w3-clear\"></div>
\t\t\t\t\t<h4> Salles  </h4>
\t\t\t\t  </div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t";
        
        $__internal_23be095de3cdc856739be8daad4e3ec27c4da5899265ee16b389cc128d00aceb->leave($__internal_23be095de3cdc856739be8daad4e3ec27c4da5899265ee16b389cc128d00aceb_prof);

    }

    // line 298
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_5f710b4d7f4c10e7f20d145b533850215b6efe814c8de7c5db2ca002525822b4 = $this->env->getExtension("native_profiler");
        $__internal_5f710b4d7f4c10e7f20d145b533850215b6efe814c8de7c5db2ca002525822b4->enter($__internal_5f710b4d7f4c10e7f20d145b533850215b6efe814c8de7c5db2ca002525822b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 299
        echo "\t\t
\t\t";
        // line 300
        $this->loadTemplate("PedagogiePedagogieBundle::admin/emploi/emploilayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 300)->display($context);
        // line 301
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/departement/departementlayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 301)->display($context);
        // line 302
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/filiere/filierelayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 302)->display($context);
        // line 303
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/classe/classelayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 303)->display($context);
        // line 304
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/groupe/groupelayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 304)->display($context);
        // line 305
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/enseignant/enseignantlayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 305)->display($context);
        // line 306
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/discipline/disciplinelayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 306)->display($context);
        // line 307
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/matiere/matierelayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 307)->display($context);
        // line 308
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/voeux/voeuxlayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 308)->display($context);
        // line 309
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/devoir/devoirlayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 309)->display($context);
        // line 310
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/lieux/lieuxlayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 310)->display($context);
        // line 311
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/salle/sallelayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 311)->display($context);
        // line 312
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/modif/modiflayout.html.twig", "PedagogiePedagogieBundle:Default:admin.html.twig", 312)->display($context);
        // line 313
        echo "\t
\t";
        
        $__internal_5f710b4d7f4c10e7f20d145b533850215b6efe814c8de7c5db2ca002525822b4->leave($__internal_5f710b4d7f4c10e7f20d145b533850215b6efe814c8de7c5db2ca002525822b4_prof);

    }

    // line 316
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b95cb505c86a4aced8139cfe2f031d8297e78f7eca8923b240f64ca812723541 = $this->env->getExtension("native_profiler");
        $__internal_b95cb505c86a4aced8139cfe2f031d8297e78f7eca8923b240f64ca812723541->enter($__internal_b95cb505c86a4aced8139cfe2f031d8297e78f7eca8923b240f64ca812723541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 317
        echo "\t
\t";
        
        $__internal_b95cb505c86a4aced8139cfe2f031d8297e78f7eca8923b240f64ca812723541->leave($__internal_b95cb505c86a4aced8139cfe2f031d8297e78f7eca8923b240f64ca812723541_prof);

    }

    // line 321
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_26c5b8278092c716d5f7174a691912f2ea602b919cb59d5c1e86b8d881c6885e = $this->env->getExtension("native_profiler");
        $__internal_26c5b8278092c716d5f7174a691912f2ea602b919cb59d5c1e86b8d881c6885e->enter($__internal_26c5b8278092c716d5f7174a691912f2ea602b919cb59d5c1e86b8d881c6885e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 322
        echo "
\t";
        // line 323
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t
\t<script type=\"text/javascript\" src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/pedagogie.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/emploihandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/departementhandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/filierehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/classehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/groupehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/enseignanthandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/disciplinehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/matierehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/lieuxhandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/sallehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/devoirhandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/voeuxhandle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_26c5b8278092c716d5f7174a691912f2ea602b919cb59d5c1e86b8d881c6885e->leave($__internal_26c5b8278092c716d5f7174a691912f2ea602b919cb59d5c1e86b8d881c6885e_prof);

    }

    public function getTemplateName()
    {
        return "PedagogiePedagogieBundle:Default:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1013 => 337,  1009 => 336,  1005 => 335,  1001 => 334,  997 => 333,  993 => 332,  989 => 331,  985 => 330,  981 => 329,  977 => 328,  973 => 327,  969 => 326,  965 => 325,  960 => 323,  957 => 322,  951 => 321,  943 => 317,  937 => 316,  929 => 313,  926 => 312,  923 => 311,  920 => 310,  917 => 309,  914 => 308,  911 => 307,  908 => 306,  905 => 305,  902 => 304,  899 => 303,  896 => 302,  893 => 301,  891 => 300,  888 => 299,  882 => 298,  734 => 155,  728 => 154,  719 => 149,  715 => 147,  701 => 146,  698 => 145,  695 => 144,  678 => 143,  675 => 142,  673 => 141,  670 => 140,  668 => 139,  665 => 138,  661 => 136,  647 => 135,  644 => 134,  641 => 133,  624 => 132,  621 => 131,  619 => 130,  616 => 129,  614 => 128,  610 => 126,  606 => 124,  592 => 123,  589 => 122,  586 => 121,  569 => 120,  566 => 119,  564 => 118,  561 => 117,  559 => 116,  555 => 114,  551 => 112,  537 => 111,  534 => 110,  531 => 109,  514 => 108,  511 => 107,  509 => 106,  506 => 105,  504 => 104,  501 => 103,  497 => 101,  483 => 100,  480 => 99,  477 => 98,  460 => 97,  457 => 96,  455 => 95,  452 => 94,  450 => 93,  446 => 91,  442 => 89,  428 => 88,  425 => 87,  423 => 86,  420 => 85,  403 => 84,  400 => 83,  398 => 82,  395 => 81,  393 => 80,  389 => 78,  385 => 76,  371 => 75,  368 => 74,  365 => 73,  348 => 72,  345 => 71,  343 => 70,  340 => 69,  338 => 68,  335 => 67,  331 => 65,  317 => 64,  314 => 63,  311 => 62,  294 => 61,  291 => 60,  289 => 59,  286 => 58,  284 => 57,  279 => 54,  275 => 52,  261 => 51,  258 => 50,  255 => 49,  238 => 48,  235 => 47,  233 => 46,  230 => 45,  228 => 44,  225 => 43,  221 => 41,  207 => 40,  204 => 39,  201 => 38,  184 => 37,  181 => 36,  179 => 35,  176 => 34,  174 => 33,  171 => 32,  167 => 30,  153 => 29,  150 => 28,  147 => 27,  130 => 26,  127 => 25,  125 => 24,  122 => 23,  120 => 22,  116 => 20,  112 => 18,  98 => 17,  95 => 16,  92 => 15,  75 => 14,  72 => 13,  70 => 12,  67 => 11,  65 => 10,  63 => 9,  59 => 7,  53 => 6,  45 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block title %}*/
/* Pedagogie - Admin*/
/* {% endblock %}*/
/* */
/* {% block modals %}*/
/* */
/* */
/* {% include "PedagogiePedagogieBundle::admin/emploi/addemploilayout.html.twig" %}*/
/* {% include "PedagogiePedagogieBundle::admin/emploi/emploitemplatelayout.html.twig" %}*/
/* */
/* {% if allemploi is not null %}*/
/* */
/* 	{% for emp in allemploi  %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/emploi/modalemploilayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/emploi/deleteemploilayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* */
/* {% include "PedagogiePedagogieBundle::admin/departement/adddepartementlayout.html.twig" %}*/
/* */
/* {% if alldepartement is not null %}*/
/* */
/* 	{% for dep in alldepartement  %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/departement/modaldepartementlayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/departement/deletedepartementlayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* {% include "PedagogiePedagogieBundle::admin/filiere/addfilierelayout.html.twig" %}*/
/* */
/* {% if allfiliere is not null %}*/
/* */
/* 	{% for fil in allfiliere  %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/filiere/modalfilierelayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/filiere/deletefilierelayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* {% include "PedagogiePedagogieBundle::admin/discipline/adddisciplinelayout.html.twig" %}*/
/* */
/* {% if alldiscipline is not null %}*/
/* */
/* 	{% for dis in alldiscipline  %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/discipline/modaldisciplinelayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/discipline/deletedisciplinelayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* */
/* */
/* {% include "PedagogiePedagogieBundle::admin/matiere/addmatierelayout.html.twig" %}*/
/* */
/* {% if allmatiere is not null %}*/
/* */
/* 	{% for mat in allmatiere  %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/matiere/modalmatierelayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/matiere/deletematierelayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* {% include "PedagogiePedagogieBundle::admin/classe/addclasselayout.html.twig" %}*/
/* */
/* {% if allclasse is not null %}*/
/* */
/* 	{% for cls in allclasse  %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/classe/modalclasselayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/classe/deleteclasselayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* */
/* {% include "PedagogiePedagogieBundle::admin/groupe/addgroupelayout.html.twig" %}*/
/* */
/* {% if allgroupe is not null %}*/
/* */
/* 	{% for grp in allgroupe  %}*/
/* 				*/
/* 				{% include "PedagogiePedagogieBundle::admin/groupe/modalgroupelayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/groupe/deletegroupelayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* */
/* {% include "PedagogiePedagogieBundle::admin/voeux/addvoeuxlayout.html.twig" %}*/
/* */
/* {% if allvoeux is not null %}*/
/* */
/* 	{% for veu in allvoeux  %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/voeux/modalvoeuxlayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/voeux/deletevoeuxlayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* {% include "PedagogiePedagogieBundle::admin/devoir/adddevoirlayout.html.twig" %}*/
/* */
/* {% if alldevoir is not null %}*/
/* */
/* 	{% for dev in alldevoir  %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/devoir/modaldevoirlayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/devoir/deletedevoirlayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* */
/* {% include "PedagogiePedagogieBundle::admin/enseignant/addenseignantlayout.html.twig" %}*/
/* */
/* {% if allenseignant is not null %}*/
/* */
/* 	{% for ens in allenseignant  %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/enseignant/modalenseignantlayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/enseignant/deleteenseignantlayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* */
/* {% include "PedagogiePedagogieBundle::admin/lieux/addlieuxlayout.html.twig" %}*/
/* */
/* {% if alllieux is not null %}*/
/* */
/* 	{% for lieux in alllieux  %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/lieux/modallieuxlayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/lieux/deletelieuxlayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/* */
/* {% include "PedagogiePedagogieBundle::admin/salle/addsallelayout.html.twig" %}*/
/* */
/* {% if allsalle is not null %}*/
/* */
/* 	{% for salle in allsalle  %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/salle/modalsallelayout.html.twig" %}*/
/* 				{% include "PedagogiePedagogieBundle::admin/salle/deletesallelayout.html.twig" %}*/
/* 	{% endfor %}*/
/* 	*/
/* {% endif %}*/
/*   */
/*   */
/*   {% endblock %}*/
/* */
/* */
/*     {% block submenu %}*/
/* 	*/
/*         <div class="row">*/
/* 			<div class="col-xs-2">*/
/* 				<a href="#" class="tablink " onclick="openMenu(event, 'emploilayout')">*/
/* 				  <div class="w3-round w3-section w3-container w3-blue w3-hover-white w3-padding-hor-1">*/
/* 					<div class="w3-left"><i class="glyphicon glyphicon-calendar w3-xlarge"></i></div>*/
/* 					<div class="w3-clear"></div>*/
/* 					<h4> Emploi du temps </h4>*/
/* 				  </div>*/
/* 				 </a>*/
/* 			</div>*/
/* 			*/
/* 		*/
/* 			*/
/* 			<div class="col-xs-2">*/
/* 				<a href="#" class="tablink" onclick="openMenu(event, 'departementlayout')">*/
/* 				  <div class="w3-round w3-section w3-container w3-blue w3-hover-white w3-padding-hor-10">*/
/* 					<div class="w3-left"><i class="glyphicon glyphicon-education w3-xlarge"></i></div>*/
/* 					<div class="w3-clear"></div>*/
/* 					<h4> Départements </h4>*/
/* 				  </div>*/
/* 				</a>*/
/* 			</div>*/
/* 			*/
/* 			*/
/* 			*/
/* 			<div class="col-xs-2 ">*/
/* 				<a href="#" class="tablink" onclick="openMenu(event, 'filierelayout')">*/
/* 				  <div class="w3-round w3-section w3-container w3-blue w3-hover-teal w3-padding-hor-10">*/
/* 					<div class="w3-left"><i class="material-icons w3-xlarge">class</i></div>*/
/* 					<div class="w3-clear"></div>*/
/* 					<h4> Filieres </h4>*/
/* 				  </div>*/
/* 				</a>*/
/* 			</div>*/
/* 			*/
/* 			<div class="col-xs-2 ">*/
/* 				<a href="#" class="tablink" onclick="openMenu(event, 'classelayout')">*/
/* 				  <div class="w3-round w3-section w3-container w3-blue w3-hover-teal w3-padding-hor-10">*/
/* 					<div class="w3-left"><i class="glyphicon glyphicon-list-alt w3-xlarge"></i></div>*/
/* 					<div class="w3-clear"></div>*/
/* 					<h4> Classes </h4>*/
/* 				  </div>*/
/* 				</a>*/
/* 			</div>*/
/* 			*/
/* 			<div class="col-xs-2">*/
/* 				<a href="#" class="tablink" onclick="openMenu(event, 'groupelayout')">*/
/* 				  <div class="w3-round w3-section w3-container w3-blue w3-hover-cyan w3-padding-hor-10">*/
/* 					<div class="w3-left"><i class="fa fa-group w3-xlarge"></i></div>*/
/* 					<div class="w3-clear"></div>*/
/* 					<h4> Groupes </h4>*/
/* 				  </div>*/
/* 				</a>*/
/* 			</div>*/
/* 			*/
/* 			*/
/* 			<div class="col-xs-2 ">*/
/* 				<a href="#" class="tablink" onclick="openMenu(event, 'enseignantlayout')">*/
/* 				  <div class="w3-round w3-section w3-container w3-blue w3-hover-cyan w3-padding-hor-10">*/
/* 					<div class="w3-left"><i class="glyphicon glyphicon-user w3-xlarge"></i></div>*/
/* 					<div class="w3-clear"></div>*/
/* 					<h4> Enseignants </h4>*/
/* 				  </div>*/
/* 				</a>*/
/* 			</div>*/
/* 			*/
/* 		</div>*/
/* 			*/
/* 		<div class="row">*/
/* 			*/
/* 			<div class="col-xs-2 ">*/
/* 				<a href="#" class="tablink" onclick="openMenu(event, 'disciplinelayout')">*/
/* 				  <div class="w3-round w3-section w3-container w3-blue w3-hover-khaki w3-padding-hor-10">*/
/* 					<div class="w3-left"><i class="material-icons w3-xlarge">library_books</i></div>*/
/* 					<div class="w3-clear"></div>*/
/* 					<h4> Disciplines </h4>*/
/* 				  </div>*/
/* 				</a>*/
/* 			</div>*/
/* 			*/
/* 			<div class="col-xs-2 ">*/
/* 				<a href="#" class="tablink" onclick="openMenu(event, 'matierelayout')">*/
/* 				  <div class="w3-round w3-section w3-container w3-blue w3-hover-khaki w3-padding-hor-10">*/
/* 					<div class="w3-left"><i class="fa fa-list-alt w3-xlarge"></i></div>*/
/* 					<div class="w3-clear"></div>*/
/* 					<h4> Matieres </h4>*/
/* 				  </div>*/
/* 				</a>*/
/* 			</div>*/
/* 			*/
/* 			<div class="col-xs-2 ">*/
/* 				<a href="#" class="tablink" onclick="openMenu(event, 'voeuxlayout')">*/
/* 				  <div class="w3-round w3-section w3-container w3-blue w3-hover-aqua w3-padding-hor-10">*/
/* 					<div class="w3-left"><i class="glyphicon glyphicon-star w3-xlarge"></i></div>*/
/* 					<div class="w3-clear"></div>*/
/* 					<h4> Voeux </h4>*/
/* 				  </div>*/
/* 				</a>*/
/* 			</div>*/
/* 			*/
/* 			<div class="col-xs-2">*/
/* 				<a href="#" class="tablink" onclick="openMenu(event, 'devoirlayout')">*/
/* 				  <div class="w3-round w3-section w3-container w3-blue w3-hover-aqua w3-padding-hor-10">*/
/* 					<div class="w3-left"><i class="glyphicon glyphicon-book w3-xlarge"></i><i class="glyphicon glyphicon-text-background w3-xlarge"></i></div>*/
/* 					<div class="w3-clear"></div>*/
/* 					<h4> Devoirs </h4>*/
/* 				  </div>*/
/* 				</a>*/
/* 			</div>*/
/* 			*/
/* 			<div class="col-xs-2">*/
/* 				<a href="#" class="tablink" onclick="openMenu(event, 'lieuxlayout')">*/
/* 				  <div class="w3-round w3-section w3-container w3-blue w3-hover-red w3-padding-hor-10">*/
/* 					<div class="w3-left"><i class="glyphicon glyphicon-book w3-xlarge"></i><i class="glyphicon glyphicon-text-background w3-xlarge"></i></div>*/
/* 					<div class="w3-clear"></div>*/
/* 					<h4> Lieux </h4>*/
/* 				  </div>*/
/* 				</a>*/
/* 			</div>*/
/* 		*/
/* 		*/
/* 		*/
/* 		*/
/* 			<div class="col-xs-2">*/
/* 				<a href="#" class="tablink" onclick="openMenu(event, 'sallelayout')">*/
/* 				  <div class="w3-round w3-section w3-container w3-blue w3-hover-red w3-padding-hor-10">*/
/* 					<div class="w3-left"><i class="glyphicon glyphicon-book w3-xlarge"></i><i class="glyphicon glyphicon-text-background w3-xlarge"></i></div>*/
/* 					<div class="w3-clear"></div>*/
/* 					<h4> Salles  </h4>*/
/* 				  </div>*/
/* 				</a>*/
/* 			</div>*/
/* 			*/
/* 		</div>*/
/* 		*/
/* 		*/
/* 		*/
/* 		*/
/* 		*/
/* 		*/
/* 	{% endblock %}*/
/* 	*/
/* 	{% block bodycontent %}*/
/* 		*/
/* 		{% include "PedagogiePedagogieBundle::admin/emploi/emploilayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/departement/departementlayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/filiere/filierelayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/classe/classelayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/groupe/groupelayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/enseignant/enseignantlayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/discipline/disciplinelayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/matiere/matierelayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/voeux/voeuxlayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/devoir/devoirlayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/lieux/lieuxlayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/salle/sallelayout.html.twig" %}*/
/* 		{% include "PedagogiePedagogieBundle::admin/modif/modiflayout.html.twig" %}*/
/* 	*/
/* 	{% endblock %}*/
/*     */
/* 	{% block footer %}*/
/* 	*/
/* 	{% endblock %}*/
/* */
/* */
/* {% block javascripts %}*/
/* */
/* 	{{ parent() }}*/
/* 	*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/pedagogie.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/emploihandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/departementhandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/filierehandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/classehandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/groupehandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/enseignanthandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/disciplinehandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/matierehandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/lieuxhandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/sallehandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/devoirhandle.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('includes/js/voeuxhandle.js') }}"></script>*/
/* {% endblock %}*/
