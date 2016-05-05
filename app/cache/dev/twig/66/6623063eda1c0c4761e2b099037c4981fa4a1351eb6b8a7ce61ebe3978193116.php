<?php

/* WebProfilerBundle:Collector:translation.html.twig */
class __TwigTemplate_7699d2dba4bc1712b87a2b0d3fef7abb4227df52d03830ed403ee723352c14bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:translation.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd280bfa8ff28a198516d06aee1ef6e804d426b7ce1bcd3ead2f384575e51b98 = $this->env->getExtension("native_profiler");
        $__internal_bd280bfa8ff28a198516d06aee1ef6e804d426b7ce1bcd3ead2f384575e51b98->enter($__internal_bd280bfa8ff28a198516d06aee1ef6e804d426b7ce1bcd3ead2f384575e51b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:translation.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd280bfa8ff28a198516d06aee1ef6e804d426b7ce1bcd3ead2f384575e51b98->leave($__internal_bd280bfa8ff28a198516d06aee1ef6e804d426b7ce1bcd3ead2f384575e51b98_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_245eb1ee733d1005381df749c6f9e146cff9063f9c117fc15fb8f8ea1a58ed70 = $this->env->getExtension("native_profiler");
        $__internal_245eb1ee733d1005381df749c6f9e146cff9063f9c117fc15fb8f8ea1a58ed70->enter($__internal_245eb1ee733d1005381df749c6f9e146cff9063f9c117fc15fb8f8ea1a58ed70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messages", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/translation.svg");
            echo "
            ";
            // line 9
            $context["status_color"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array())) ? ("red") : ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array())) ? ("yellow") : (""))));
            // line 10
            echo "            ";
            $context["error_count"] = ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array()) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array()));
            // line 11
            echo "            <span class=\"sf-toolbar-value\">";
            echo twig_escape_filter($this->env, (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count"))) ? ((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count"))) : ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdefines", array()))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
        ";
            // line 14
            ob_start();
            // line 15
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Missing messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 17
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array())) ? ("red") : (""));
            echo "\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array()), "html", null, true);
            echo "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Fallback messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 24
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array())) ? ("yellow") : (""));
            echo "\">
                    ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array()), "html", null, true);
            echo "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Defined messages</b>
                <span class=\"sf-toolbar-status\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdefines", array()), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 34
            echo "
        ";
            // line 35
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "status" => (isset($context["status_color"]) ? $context["status_color"] : $this->getContext($context, "status_color"))));
            echo "
    ";
        }
        
        $__internal_245eb1ee733d1005381df749c6f9e146cff9063f9c117fc15fb8f8ea1a58ed70->leave($__internal_245eb1ee733d1005381df749c6f9e146cff9063f9c117fc15fb8f8ea1a58ed70_prof);

    }

    // line 39
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dcb127fa73f5489e05e341e922cfed8b19ce849f72bbbca1d36f657fbc972dee = $this->env->getExtension("native_profiler");
        $__internal_dcb127fa73f5489e05e341e922cfed8b19ce849f72bbbca1d36f657fbc972dee->enter($__internal_dcb127fa73f5489e05e341e922cfed8b19ce849f72bbbca1d36f657fbc972dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 40
        echo "    <span class=\"label label-status-";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array())) ? ("error") : ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array())) ? ("warning") : (""))));
        echo " ";
        echo ((twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messages", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 41
        echo twig_include($this->env, $context, "@WebProfiler/Icon/translation.svg");
        echo "</span>
        <strong>Translation</strong>
        ";
        // line 43
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array()) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array()))) {
            // line 44
            echo "            ";
            $context["error_count"] = ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array()) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array()));
            // line 45
            echo "            <span class=\"count\">
                <span>";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 49
        echo "    </span>
";
        
        $__internal_dcb127fa73f5489e05e341e922cfed8b19ce849f72bbbca1d36f657fbc972dee->leave($__internal_dcb127fa73f5489e05e341e922cfed8b19ce849f72bbbca1d36f657fbc972dee_prof);

    }

    // line 52
    public function block_panel($context, array $blocks = array())
    {
        $__internal_004212c4f637f4f8efcec8409f3ba21bbcff4a2a6f2f4487126c8b52a1e3abe6 = $this->env->getExtension("native_profiler");
        $__internal_004212c4f637f4f8efcec8409f3ba21bbcff4a2a6f2f4487126c8b52a1e3abe6->enter($__internal_004212c4f637f4f8efcec8409f3ba21bbcff4a2a6f2f4487126c8b52a1e3abe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 53
        echo "    ";
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messages", array()))) {
            // line 54
            echo "        <h2>Translations</h2>
        <div class=\"empty\">
            <p>No translations have been called.</p>
        </div>
    ";
        } else {
            // line 59
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_004212c4f637f4f8efcec8409f3ba21bbcff4a2a6f2f4487126c8b52a1e3abe6->leave($__internal_004212c4f637f4f8efcec8409f3ba21bbcff4a2a6f2f4487126c8b52a1e3abe6_prof);

    }

    // line 63
    public function block_panelContent($context, array $blocks = array())
    {
        $__internal_4b2a8ed4900d185d4f8e934b4f0f811a61852d731ba37632a9ed0815f0c4d1d4 = $this->env->getExtension("native_profiler");
        $__internal_4b2a8ed4900d185d4f8e934b4f0f811a61852d731ba37632a9ed0815f0c4d1d4->enter($__internal_4b2a8ed4900d185d4f8e934b4f0f811a61852d731ba37632a9ed0815f0c4d1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        // line 64
        echo "    <h2>Translation Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdefines", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Defined messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countFallbacks", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Fallback messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countMissings", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Missing messages</span>
        </div>
    </div>

    <h2>Translation Messages</h2>

    ";
        // line 86
        echo "    ";
        list($context["messages_defined"], $context["messages_missing"], $context["messages_fallback"]) =         array(array(), array(), array());
        // line 87
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "messages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 88
            echo "        ";
            if (($this->getAttribute($context["message"], "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_DEFINED"))) {
                // line 89
                echo "            ";
                $context["messages_defined"] = twig_array_merge((isset($context["messages_defined"]) ? $context["messages_defined"] : $this->getContext($context, "messages_defined")), array(0 => $context["message"]));
                // line 90
                echo "        ";
            } elseif (($this->getAttribute($context["message"], "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_MISSING"))) {
                // line 91
                echo "            ";
                $context["messages_missing"] = twig_array_merge((isset($context["messages_missing"]) ? $context["messages_missing"] : $this->getContext($context, "messages_missing")), array(0 => $context["message"]));
                // line 92
                echo "        ";
            } elseif (($this->getAttribute($context["message"], "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK"))) {
                // line 93
                echo "            ";
                $context["messages_fallback"] = twig_array_merge((isset($context["messages_fallback"]) ? $context["messages_fallback"] : $this->getContext($context, "messages_fallback")), array(0 => $context["message"]));
                // line 94
                echo "        ";
            }
            // line 95
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Defined <span class=\"badge\">";
        // line 99
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["messages_defined"]) ? $context["messages_defined"] : $this->getContext($context, "messages_defined"))), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are correctly translated into the given locale.
                </p>

                ";
        // line 106
        if (twig_test_empty((isset($context["messages_defined"]) ? $context["messages_defined"] : $this->getContext($context, "messages_defined")))) {
            // line 107
            echo "                    <div class=\"empty\">
                        <p>None of the used translation messages are defined for the given locale.</p>
                    </div>
                ";
        } else {
            // line 111
            echo "                    ";
            echo $context["helper"]->getrender_table((isset($context["messages_defined"]) ? $context["messages_defined"] : $this->getContext($context, "messages_defined")));
            echo "
                ";
        }
        // line 113
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Fallback <span class=\"badge\">";
        // line 117
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["messages_fallback"]) ? $context["messages_fallback"] : $this->getContext($context, "messages_fallback"))), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale
                    but Symfony found them in the fallback locale catalog.
                </p>

                ";
        // line 125
        if (twig_test_empty((isset($context["messages_fallback"]) ? $context["messages_fallback"] : $this->getContext($context, "messages_fallback")))) {
            // line 126
            echo "                    <div class=\"empty\">
                        <p>No fallback translation messages were used.</p>
                    </div>
                ";
        } else {
            // line 130
            echo "                    ";
            echo $context["helper"]->getrender_table((isset($context["messages_fallback"]) ? $context["messages_fallback"] : $this->getContext($context, "messages_fallback")));
            echo "
                ";
        }
        // line 132
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Missing <span class=\"badge\">";
        // line 136
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["messages_missing"]) ? $context["messages_missing"] : $this->getContext($context, "messages_missing"))), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale and cannot
                    be found in the fallback locales. Add them to the translation
                    catalogue to avoid Symfony outputting untranslated contents.
                </p>

                ";
        // line 145
        if (twig_test_empty((isset($context["messages_missing"]) ? $context["messages_missing"] : $this->getContext($context, "messages_missing")))) {
            // line 146
            echo "                    <div class=\"empty\">
                        <p>There are no messages of this category.</p>
                    </div>
                ";
        } else {
            // line 150
            echo "                    ";
            echo $context["helper"]->getrender_table((isset($context["messages_missing"]) ? $context["messages_missing"] : $this->getContext($context, "messages_missing")));
            echo "
                ";
        }
        // line 152
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_4b2a8ed4900d185d4f8e934b4f0f811a61852d731ba37632a9ed0815f0c4d1d4->leave($__internal_4b2a8ed4900d185d4f8e934b4f0f811a61852d731ba37632a9ed0815f0c4d1d4_prof);

    }

    // line 157
    public function getrender_table($__messages__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "messages" => $__messages__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_6091d00257d6496011056635be9519dcc2f29f184d62e49549077f7392db1024 = $this->env->getExtension("native_profiler");
            $__internal_6091d00257d6496011056635be9519dcc2f29f184d62e49549077f7392db1024->enter($__internal_6091d00257d6496011056635be9519dcc2f29f184d62e49549077f7392db1024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 158
            echo "    <table>
        <thead>
            <tr>
                <th>Locale</th>
                <th>Domain</th>
                <th>Times used</th>
                <th>Message ID</th>
                <th>Message Preview</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 170
                echo "            <tr>
                <td class=\"font-normal text-small\">";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "locale", array()), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small text-bold\">";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "domain", array()), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small\">";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "count", array()), "html", null, true);
                echo "</td>
                <td>
                    ";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
                echo "

                    ";
                // line 177
                if ( !(null === $this->getAttribute($context["message"], "transChoiceNumber", array()))) {
                    // line 178
                    echo "                        <small class=\"newline\">(pluralization is used)</small>
                    ";
                }
                // line 180
                echo "
                    ";
                // line 181
                if ((twig_length_filter($this->env, $this->getAttribute($context["message"], "parameters", array())) > 0)) {
                    // line 182
                    echo "                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-";
                    // line 184
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" class=\"hidden\">
                            ";
                    // line 185
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["message"], "parameters", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["parameters"]) {
                        // line 186
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('profiler')->dumpValue($context["parameters"]), "html", null, true);
                        echo "
                                ";
                        // line 187
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            echo "<br />";
                        }
                        // line 188
                        echo "                            ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameters'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 189
                    echo "                        </div>
                    ";
                }
                // line 191
                echo "                </td>
                <td>";
                // line 192
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "translation", array()), "html", null, true);
                echo "</td>
            </tr>
        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            echo "        </tbody>
    </table>
";
            
            $__internal_6091d00257d6496011056635be9519dcc2f29f184d62e49549077f7392db1024->leave($__internal_6091d00257d6496011056635be9519dcc2f29f184d62e49549077f7392db1024_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 195,  498 => 192,  495 => 191,  491 => 189,  477 => 188,  473 => 187,  468 => 186,  451 => 185,  447 => 184,  441 => 182,  439 => 181,  436 => 180,  432 => 178,  430 => 177,  425 => 175,  420 => 173,  416 => 172,  412 => 171,  409 => 170,  392 => 169,  379 => 158,  364 => 157,  354 => 152,  348 => 150,  342 => 146,  340 => 145,  328 => 136,  322 => 132,  316 => 130,  310 => 126,  308 => 125,  297 => 117,  291 => 113,  285 => 111,  279 => 107,  277 => 106,  267 => 99,  262 => 96,  256 => 95,  253 => 94,  250 => 93,  247 => 92,  244 => 91,  241 => 90,  238 => 89,  235 => 88,  230 => 87,  227 => 86,  217 => 78,  209 => 73,  201 => 68,  195 => 64,  189 => 63,  178 => 59,  171 => 54,  168 => 53,  162 => 52,  154 => 49,  148 => 46,  145 => 45,  142 => 44,  140 => 43,  135 => 41,  128 => 40,  122 => 39,  112 => 35,  109 => 34,  103 => 31,  94 => 25,  90 => 24,  81 => 18,  77 => 17,  73 => 15,  71 => 14,  68 => 13,  62 => 11,  59 => 10,  57 => 9,  52 => 8,  49 => 7,  46 => 6,  40 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% import _self as helper %}*/
/* */
/* {% block toolbar %}*/
/*     {% if collector.messages|length %}*/
/*         {% set icon %}*/
/*             {{ include('@WebProfiler/Icon/translation.svg') }}*/
/*             {% set status_color = collector.countMissings ? 'red' : collector.countFallbacks ? 'yellow' %}*/
/*             {% set error_count = collector.countMissings + collector.countFallbacks %}*/
/*             <span class="sf-toolbar-value">{{ error_count ?: collector.countdefines }}</span>*/
/*         {% endset %}*/
/* */
/*         {% set text %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Missing messages</b>*/
/*                 <span class="sf-toolbar-status sf-toolbar-status-{{ collector.countMissings ? 'red' }}">*/
/*                     {{ collector.countMissings }}*/
/*                 </span>*/
/*             </div>*/
/* */
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Fallback messages</b>*/
/*                 <span class="sf-toolbar-status sf-toolbar-status-{{ collector.countFallbacks ? 'yellow' }}">*/
/*                     {{ collector.countFallbacks }}*/
/*                 </span>*/
/*             </div>*/
/* */
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Defined messages</b>*/
/*                 <span class="sf-toolbar-status">{{ collector.countdefines }}</span>*/
/*             </div>*/
/*         {% endset %}*/
/* */
/*         {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label label-status-{{ collector.countMissings ? 'error' : collector.countFallbacks ? 'warning' }} {{ collector.messages is empty ? 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/translation.svg') }}</span>*/
/*         <strong>Translation</strong>*/
/*         {% if collector.countMissings or collector.countFallbacks %}*/
/*             {% set error_count = collector.countMissings + collector.countFallbacks %}*/
/*             <span class="count">*/
/*                 <span>{{ error_count }}</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {% if collector.messages is empty %}*/
/*         <h2>Translations</h2>*/
/*         <div class="empty">*/
/*             <p>No translations have been called.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         {{ block('panelContent') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block panelContent %}*/
/*     <h2>Translation Metrics</h2>*/
/* */
/*     <div class="metrics">*/
/*         <div class="metric">*/
/*             <span class="value">{{ collector.countdefines }}</span>*/
/*             <span class="label">Defined messages</span>*/
/*         </div>*/
/* */
/*         <div class="metric">*/
/*             <span class="value">{{ collector.countFallbacks }}</span>*/
/*             <span class="label">Fallback messages</span>*/
/*         </div>*/
/* */
/*         <div class="metric">*/
/*             <span class="value">{{ collector.countMissings }}</span>*/
/*             <span class="label">Missing messages</span>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <h2>Translation Messages</h2>*/
/* */
/*     {# sort translation messages in groups #}*/
/*     {% set messages_defined, messages_missing, messages_fallback = [], [], [] %}*/
/*     {% for message in collector.messages %}*/
/*         {% if message.state == constant('Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_DEFINED') %}*/
/*             {% set messages_defined = messages_defined|merge([message]) %}*/
/*         {% elseif message.state == constant('Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_MISSING') %}*/
/*             {% set messages_missing = messages_missing|merge([message]) %}*/
/*         {% elseif message.state == constant('Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK') %}*/
/*             {% set messages_fallback = messages_fallback|merge([message]) %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     <div class="sf-tabs">*/
/*         <div class="tab">*/
/*             <h3 class="tab-title">Defined <span class="badge">{{ messages_defined|length }}</span></h3>*/
/* */
/*             <div class="tab-content">*/
/*                 <p class="help">*/
/*                     These messages are correctly translated into the given locale.*/
/*                 </p>*/
/* */
/*                 {% if messages_defined is empty %}*/
/*                     <div class="empty">*/
/*                         <p>None of the used translation messages are defined for the given locale.</p>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     {{ helper.render_table(messages_defined) }}*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="tab">*/
/*             <h3 class="tab-title">Fallback <span class="badge">{{ messages_fallback|length }}</span></h3>*/
/* */
/*             <div class="tab-content">*/
/*                 <p class="help">*/
/*                     These messages are not available for the given locale*/
/*                     but Symfony found them in the fallback locale catalog.*/
/*                 </p>*/
/* */
/*                 {% if messages_fallback is empty %}*/
/*                     <div class="empty">*/
/*                         <p>No fallback translation messages were used.</p>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     {{ helper.render_table(messages_fallback) }}*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="tab">*/
/*             <h3 class="tab-title">Missing <span class="badge">{{ messages_missing|length }}</span></h3>*/
/* */
/*             <div class="tab-content">*/
/*                 <p class="help">*/
/*                     These messages are not available for the given locale and cannot*/
/*                     be found in the fallback locales. Add them to the translation*/
/*                     catalogue to avoid Symfony outputting untranslated contents.*/
/*                 </p>*/
/* */
/*                 {% if messages_missing is empty %}*/
/*                     <div class="empty">*/
/*                         <p>There are no messages of this category.</p>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     {{ helper.render_table(messages_missing) }}*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% macro render_table(messages) %}*/
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Locale</th>*/
/*                 <th>Domain</th>*/
/*                 <th>Times used</th>*/
/*                 <th>Message ID</th>*/
/*                 <th>Message Preview</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for message in messages %}*/
/*             <tr>*/
/*                 <td class="font-normal text-small">{{ message.locale }}</td>*/
/*                 <td class="font-normal text-small text-bold">{{ message.domain }}</td>*/
/*                 <td class="font-normal text-small">{{ message.count }}</td>*/
/*                 <td>*/
/*                     {{ message.id }}*/
/* */
/*                     {% if message.transChoiceNumber is not null %}*/
/*                         <small class="newline">(pluralization is used)</small>*/
/*                     {% endif %}*/
/* */
/*                     {% if message.parameters|length > 0 %}*/
/*                         <button class="btn-link newline text-small sf-toggle" data-toggle-selector="#parameters-{{ loop.index }}" data-toggle-alt-content="Hide parameters">Show parameters</button>*/
/* */
/*                         <div id="parameters-{{ loop.index }}" class="hidden">*/
/*                             {% for parameters in message.parameters %}*/
/*                                 {{ profiler_dump(parameters) }}*/
/*                                 {% if not loop.last %}<br />{% endif %}*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 </td>*/
/*                 <td>{{ message.translation }}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endmacro %}*/
/* */
