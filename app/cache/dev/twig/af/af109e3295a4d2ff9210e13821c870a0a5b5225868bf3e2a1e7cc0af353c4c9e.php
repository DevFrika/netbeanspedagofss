<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_933fbd1608193287b6f632f973112f49551bcfa3c4b0c33b2ca69192222a4f60 extends Twig_Template
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
        $__internal_d97f409d6802dd9e3f6260ec44d4cf493970eadf42763a2a1a529883d6da20f2 = $this->env->getExtension("native_profiler");
        $__internal_d97f409d6802dd9e3f6260ec44d4cf493970eadf42763a2a1a529883d6da20f2->enter($__internal_d97f409d6802dd9e3f6260ec44d4cf493970eadf42763a2a1a529883d6da20f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d97f409d6802dd9e3f6260ec44d4cf493970eadf42763a2a1a529883d6da20f2->leave($__internal_d97f409d6802dd9e3f6260ec44d4cf493970eadf42763a2a1a529883d6da20f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
