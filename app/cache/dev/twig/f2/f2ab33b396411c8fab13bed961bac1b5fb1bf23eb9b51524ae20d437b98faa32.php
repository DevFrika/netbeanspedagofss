<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ae9b8743ea2e0feb292e052b2d904afecd882827535e07285dc034d6246fd428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f72f1a2350ce68fa21cf6c491a2fd32772da4364b367a610bc1da36513fe034 = $this->env->getExtension("native_profiler");
        $__internal_4f72f1a2350ce68fa21cf6c491a2fd32772da4364b367a610bc1da36513fe034->enter($__internal_4f72f1a2350ce68fa21cf6c491a2fd32772da4364b367a610bc1da36513fe034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f72f1a2350ce68fa21cf6c491a2fd32772da4364b367a610bc1da36513fe034->leave($__internal_4f72f1a2350ce68fa21cf6c491a2fd32772da4364b367a610bc1da36513fe034_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f550e326e72a6eb4ae0c19026687008047728749b2af8069ebc4ff0c5984e3f2 = $this->env->getExtension("native_profiler");
        $__internal_f550e326e72a6eb4ae0c19026687008047728749b2af8069ebc4ff0c5984e3f2->enter($__internal_f550e326e72a6eb4ae0c19026687008047728749b2af8069ebc4ff0c5984e3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f550e326e72a6eb4ae0c19026687008047728749b2af8069ebc4ff0c5984e3f2->leave($__internal_f550e326e72a6eb4ae0c19026687008047728749b2af8069ebc4ff0c5984e3f2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_55b9ccfe08e8f4ac940cae48867b3fd5f0261fc64a02a79636f323c334fb0600 = $this->env->getExtension("native_profiler");
        $__internal_55b9ccfe08e8f4ac940cae48867b3fd5f0261fc64a02a79636f323c334fb0600->enter($__internal_55b9ccfe08e8f4ac940cae48867b3fd5f0261fc64a02a79636f323c334fb0600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_55b9ccfe08e8f4ac940cae48867b3fd5f0261fc64a02a79636f323c334fb0600->leave($__internal_55b9ccfe08e8f4ac940cae48867b3fd5f0261fc64a02a79636f323c334fb0600_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0be3d789bf80df2b8089649aa6a32affbeaa3f4a0314dc5c616e3936b2b2145 = $this->env->getExtension("native_profiler");
        $__internal_b0be3d789bf80df2b8089649aa6a32affbeaa3f4a0314dc5c616e3936b2b2145->enter($__internal_b0be3d789bf80df2b8089649aa6a32affbeaa3f4a0314dc5c616e3936b2b2145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b0be3d789bf80df2b8089649aa6a32affbeaa3f4a0314dc5c616e3936b2b2145->leave($__internal_b0be3d789bf80df2b8089649aa6a32affbeaa3f4a0314dc5c616e3936b2b2145_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
