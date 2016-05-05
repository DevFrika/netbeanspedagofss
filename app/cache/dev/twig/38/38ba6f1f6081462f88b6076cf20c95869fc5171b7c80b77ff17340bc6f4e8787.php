<?php

/* @PedagogiePedagogie/Default/admin.html.twig */
class __TwigTemplate_40f6dfb2ad7bf313dc6c6e3212d1979658ab4d9d0373d4dd05f805ea3beae0d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'modals' => array($this, 'block_modals'),
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
        $__internal_d94c600ec0cba68e1d2c2fe4db2c81e3bcbf47d4a115a8b160aa9bc846e104e5 = $this->env->getExtension("native_profiler");
        $__internal_d94c600ec0cba68e1d2c2fe4db2c81e3bcbf47d4a115a8b160aa9bc846e104e5->enter($__internal_d94c600ec0cba68e1d2c2fe4db2c81e3bcbf47d4a115a8b160aa9bc846e104e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PedagogiePedagogie/Default/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d94c600ec0cba68e1d2c2fe4db2c81e3bcbf47d4a115a8b160aa9bc846e104e5->leave($__internal_d94c600ec0cba68e1d2c2fe4db2c81e3bcbf47d4a115a8b160aa9bc846e104e5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c8675667f7834c5efaf3f8df5c7c7f4054b77abbc9cbf3a147a8d62b290c3fe = $this->env->getExtension("native_profiler");
        $__internal_1c8675667f7834c5efaf3f8df5c7c7f4054b77abbc9cbf3a147a8d62b290c3fe->enter($__internal_1c8675667f7834c5efaf3f8df5c7c7f4054b77abbc9cbf3a147a8d62b290c3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Pedagogie - Admin
";
        
        $__internal_1c8675667f7834c5efaf3f8df5c7c7f4054b77abbc9cbf3a147a8d62b290c3fe->leave($__internal_1c8675667f7834c5efaf3f8df5c7c7f4054b77abbc9cbf3a147a8d62b290c3fe_prof);

    }

    // line 6
    public function block_modals($context, array $blocks = array())
    {
        $__internal_8b10f9d10326f448c33a18e9c0d5cd9daae2c8cbccfd8d8268a9762653dce423 = $this->env->getExtension("native_profiler");
        $__internal_8b10f9d10326f448c33a18e9c0d5cd9daae2c8cbccfd8d8268a9762653dce423->enter($__internal_8b10f9d10326f448c33a18e9c0d5cd9daae2c8cbccfd8d8268a9762653dce423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modals"));

        // line 7
        echo "
";
        // line 8
        $this->loadTemplate("PedagogiePedagogieBundle::admin/emploi/addemploilayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 8)->display($context);
        // line 9
        echo "
";
        // line 10
        if ( !(null === (isset($context["allemploi"]) ? $context["allemploi"] : $this->getContext($context, "allemploi")))) {
            // line 11
            echo "
\t";
            // line 12
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
                // line 13
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/emploi/modalemploilayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 13)->display($context);
                // line 14
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/emploi/deleteemploilayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 14)->display($context);
                // line 15
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
            // line 16
            echo "\t
";
        }
        // line 18
        echo "

";
        // line 20
        $this->loadTemplate("PedagogiePedagogieBundle::admin/departement/adddepartementlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 20)->display($context);
        // line 21
        echo "
";
        // line 22
        if ( !(null === (isset($context["alldepartement"]) ? $context["alldepartement"] : $this->getContext($context, "alldepartement")))) {
            // line 23
            echo "
\t";
            // line 24
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
                // line 25
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/departement/modaldepartementlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 25)->display($context);
                // line 26
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/departement/deletedepartementlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 26)->display($context);
                // line 27
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
            // line 28
            echo "\t
";
        }
        // line 30
        echo "
";
        // line 31
        $this->loadTemplate("PedagogiePedagogieBundle::admin/filiere/addfilierelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 31)->display($context);
        // line 32
        echo "
";
        // line 33
        if ( !(null === (isset($context["allfiliere"]) ? $context["allfiliere"] : $this->getContext($context, "allfiliere")))) {
            // line 34
            echo "
\t";
            // line 35
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
                // line 36
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/filiere/modalfilierelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 36)->display($context);
                // line 37
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/filiere/deletefilierelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 37)->display($context);
                // line 38
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
            // line 39
            echo "\t
";
        }
        // line 41
        echo "
";
        // line 42
        $this->loadTemplate("PedagogiePedagogieBundle::admin/discipline/adddisciplinelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 42)->display($context);
        // line 43
        echo "
";
        // line 44
        if ( !(null === (isset($context["alldiscipline"]) ? $context["alldiscipline"] : $this->getContext($context, "alldiscipline")))) {
            // line 45
            echo "
\t";
            // line 46
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
                // line 47
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/discipline/modaldisciplinelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 47)->display($context);
                // line 48
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/discipline/deletedisciplinelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 48)->display($context);
                // line 49
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
            // line 50
            echo "\t
";
        }
        // line 52
        echo "


";
        // line 55
        $this->loadTemplate("PedagogiePedagogieBundle::admin/matiere/addmatierelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 55)->display($context);
        // line 56
        echo "
";
        // line 57
        if ( !(null === (isset($context["allmatiere"]) ? $context["allmatiere"] : $this->getContext($context, "allmatiere")))) {
            // line 58
            echo "
\t";
            // line 59
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
                // line 60
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/matiere/modalmatierelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 60)->display($context);
                // line 61
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/matiere/deletematierelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 61)->display($context);
                // line 62
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
            // line 63
            echo "\t
";
        }
        // line 65
        echo "
";
        // line 66
        $this->loadTemplate("PedagogiePedagogieBundle::admin/classe/addclasselayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 66)->display($context);
        // line 67
        echo "
";
        // line 68
        if ( !(null === (isset($context["allclasse"]) ? $context["allclasse"] : $this->getContext($context, "allclasse")))) {
            // line 69
            echo "
\t";
            // line 70
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
                // line 71
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/classe/modalclasselayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 71)->display($context);
                // line 72
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/classe/deleteclasselayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 72)->display($context);
                // line 73
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
            // line 74
            echo "\t
";
        }
        // line 76
        echo "

";
        // line 78
        $this->loadTemplate("PedagogiePedagogieBundle::admin/groupe/addgroupelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 78)->display($context);
        // line 79
        echo "
";
        // line 80
        if ( !(null === (isset($context["allgroupe"]) ? $context["allgroupe"] : $this->getContext($context, "allgroupe")))) {
            // line 81
            echo "
\t";
            // line 82
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
                // line 83
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/groupe/modalgroupelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 83)->display($context);
                // line 84
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/groupe/deletegroupelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 84)->display($context);
                // line 85
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
            // line 86
            echo "\t
";
        }
        // line 88
        echo "

";
        // line 90
        $this->loadTemplate("PedagogiePedagogieBundle::admin/voeux/addvoeuxlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 90)->display($context);
        // line 91
        echo "
";
        // line 92
        if ( !(null === (isset($context["allvoeux"]) ? $context["allvoeux"] : $this->getContext($context, "allvoeux")))) {
            // line 93
            echo "
\t";
            // line 94
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
                // line 95
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/voeux/modalvoeuxlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 95)->display($context);
                // line 96
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/voeux/deletevoeuxlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 96)->display($context);
                // line 97
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
            // line 98
            echo "\t
";
        }
        // line 100
        echo "
";
        // line 101
        $this->loadTemplate("PedagogiePedagogieBundle::admin/devoir/adddevoirlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 101)->display($context);
        // line 102
        echo "
";
        // line 103
        if ( !(null === (isset($context["alldevoir"]) ? $context["alldevoir"] : $this->getContext($context, "alldevoir")))) {
            // line 104
            echo "
\t";
            // line 105
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
                // line 106
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/devoir/modaldevoirlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 106)->display($context);
                // line 107
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/devoir/deletedevoirlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 107)->display($context);
                // line 108
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
            // line 109
            echo "\t
";
        }
        // line 111
        echo "

";
        // line 113
        $this->loadTemplate("PedagogiePedagogieBundle::admin/enseignant/addenseignantlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 113)->display($context);
        // line 114
        echo "
";
        // line 115
        if ( !(null === (isset($context["allenseignant"]) ? $context["allenseignant"] : $this->getContext($context, "allenseignant")))) {
            // line 116
            echo "
\t";
            // line 117
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
                // line 118
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/enseignant/modalenseignantlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 118)->display($context);
                // line 119
                echo "\t\t\t\t";
                $this->loadTemplate("PedagogiePedagogieBundle::admin/enseignant/deleteenseignantlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 119)->display($context);
                // line 120
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
            // line 121
            echo "\t
";
        }
        // line 123
        echo "

  
  
  ";
        
        $__internal_8b10f9d10326f448c33a18e9c0d5cd9daae2c8cbccfd8d8268a9762653dce423->leave($__internal_8b10f9d10326f448c33a18e9c0d5cd9daae2c8cbccfd8d8268a9762653dce423_prof);

    }

    // line 130
    public function block_submenu($context, array $blocks = array())
    {
        $__internal_29edb862043925c58085b6346834e5f303d560b04db840f7f76cd824d9a09d2c = $this->env->getExtension("native_profiler");
        $__internal_29edb862043925c58085b6346834e5f303d560b04db840f7f76cd824d9a09d2c->enter($__internal_29edb862043925c58085b6346834e5f303d560b04db840f7f76cd824d9a09d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenu"));

        // line 131
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
        
        $__internal_29edb862043925c58085b6346834e5f303d560b04db840f7f76cd824d9a09d2c->leave($__internal_29edb862043925c58085b6346834e5f303d560b04db840f7f76cd824d9a09d2c_prof);

    }

    // line 274
    public function block_bodycontent($context, array $blocks = array())
    {
        $__internal_57ee43b626cb67818acbe4a6b41a6e041bc878609fb7e2b7867cb4a28aa49261 = $this->env->getExtension("native_profiler");
        $__internal_57ee43b626cb67818acbe4a6b41a6e041bc878609fb7e2b7867cb4a28aa49261->enter($__internal_57ee43b626cb67818acbe4a6b41a6e041bc878609fb7e2b7867cb4a28aa49261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodycontent"));

        // line 275
        echo "\t\t
\t\t";
        // line 276
        $this->loadTemplate("PedagogiePedagogieBundle::admin/emploi/emploilayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 276)->display($context);
        // line 277
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/departement/departementlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 277)->display($context);
        // line 278
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/filiere/filierelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 278)->display($context);
        // line 279
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/classe/classelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 279)->display($context);
        // line 280
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/groupe/groupelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 280)->display($context);
        // line 281
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/enseignant/enseignantlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 281)->display($context);
        // line 282
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/discipline/disciplinelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 282)->display($context);
        // line 283
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/matiere/matierelayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 283)->display($context);
        // line 284
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/voeux/voeuxlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 284)->display($context);
        // line 285
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/devoir/devoirlayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 285)->display($context);
        // line 286
        echo "\t\t";
        $this->loadTemplate("PedagogiePedagogieBundle::admin/modif/modiflayout.html.twig", "@PedagogiePedagogie/Default/admin.html.twig", 286)->display($context);
        // line 287
        echo "\t
\t";
        
        $__internal_57ee43b626cb67818acbe4a6b41a6e041bc878609fb7e2b7867cb4a28aa49261->leave($__internal_57ee43b626cb67818acbe4a6b41a6e041bc878609fb7e2b7867cb4a28aa49261_prof);

    }

    // line 292
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4e493b9e30b2a49540ae0191863bf5777aa84b25579db228ad2f4c724546395f = $this->env->getExtension("native_profiler");
        $__internal_4e493b9e30b2a49540ae0191863bf5777aa84b25579db228ad2f4c724546395f->enter($__internal_4e493b9e30b2a49540ae0191863bf5777aa84b25579db228ad2f4c724546395f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 293
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t
\t<script type=\"text/javascript\" src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/pedagogie.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/emploihandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/departementhandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/filierehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/classehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/groupehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/enseignanthandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/disciplinehandle.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("includes/js/matierehandle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_4e493b9e30b2a49540ae0191863bf5777aa84b25579db228ad2f4c724546395f->leave($__internal_4e493b9e30b2a49540ae0191863bf5777aa84b25579db228ad2f4c724546395f_prof);

    }

    public function getTemplateName()
    {
        return "@PedagogiePedagogie/Default/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  862 => 303,  858 => 302,  854 => 301,  850 => 300,  846 => 299,  842 => 298,  838 => 297,  834 => 296,  830 => 295,  824 => 293,  818 => 292,  810 => 287,  807 => 286,  804 => 285,  801 => 284,  798 => 283,  795 => 282,  792 => 281,  789 => 280,  786 => 279,  783 => 278,  780 => 277,  778 => 276,  775 => 275,  769 => 274,  621 => 131,  615 => 130,  604 => 123,  600 => 121,  586 => 120,  583 => 119,  580 => 118,  563 => 117,  560 => 116,  558 => 115,  555 => 114,  553 => 113,  549 => 111,  545 => 109,  531 => 108,  528 => 107,  525 => 106,  508 => 105,  505 => 104,  503 => 103,  500 => 102,  498 => 101,  495 => 100,  491 => 98,  477 => 97,  474 => 96,  471 => 95,  454 => 94,  451 => 93,  449 => 92,  446 => 91,  444 => 90,  440 => 88,  436 => 86,  422 => 85,  419 => 84,  416 => 83,  399 => 82,  396 => 81,  394 => 80,  391 => 79,  389 => 78,  385 => 76,  381 => 74,  367 => 73,  364 => 72,  361 => 71,  344 => 70,  341 => 69,  339 => 68,  336 => 67,  334 => 66,  331 => 65,  327 => 63,  313 => 62,  310 => 61,  307 => 60,  290 => 59,  287 => 58,  285 => 57,  282 => 56,  280 => 55,  275 => 52,  271 => 50,  257 => 49,  254 => 48,  251 => 47,  234 => 46,  231 => 45,  229 => 44,  226 => 43,  224 => 42,  221 => 41,  217 => 39,  203 => 38,  200 => 37,  197 => 36,  180 => 35,  177 => 34,  175 => 33,  172 => 32,  170 => 31,  167 => 30,  163 => 28,  149 => 27,  146 => 26,  143 => 25,  126 => 24,  123 => 23,  121 => 22,  118 => 21,  116 => 20,  112 => 18,  108 => 16,  94 => 15,  91 => 14,  88 => 13,  71 => 12,  68 => 11,  66 => 10,  63 => 9,  61 => 8,  58 => 7,  52 => 6,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block title %}*/
/* Pedagogie - Admin*/
/* {% endblock %}*/
/* */
/* {% block modals %}*/
/* */
/* {% include "PedagogiePedagogieBundle::admin/emploi/addemploilayout.html.twig" %}*/
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
/* 		{% include "PedagogiePedagogieBundle::admin/modif/modiflayout.html.twig" %}*/
/* 	*/
/* 	{% endblock %}*/
/*     */
/* */
/* */
/* {% block javascripts %}*/
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
/* {% endblock %}*/
