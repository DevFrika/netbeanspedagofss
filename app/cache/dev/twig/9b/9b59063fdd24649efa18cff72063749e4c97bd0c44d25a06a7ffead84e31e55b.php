<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_7f97ce85a269335628843d43abcb823d88dea968de2c809ec2593f938ecfc7c4 extends Twig_Template
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
        $__internal_faaa63111f40fc68d2416a4b9892dbc3fc48c85508eaf8c82fcc9d8b9eea716d = $this->env->getExtension("native_profiler");
        $__internal_faaa63111f40fc68d2416a4b9892dbc3fc48c85508eaf8c82fcc9d8b9eea716d->enter($__internal_faaa63111f40fc68d2416a4b9892dbc3fc48c85508eaf8c82fcc9d8b9eea716d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_faaa63111f40fc68d2416a4b9892dbc3fc48c85508eaf8c82fcc9d8b9eea716d->leave($__internal_faaa63111f40fc68d2416a4b9892dbc3fc48c85508eaf8c82fcc9d8b9eea716d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
