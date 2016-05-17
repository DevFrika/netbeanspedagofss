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
        $__internal_f61efad45c78630aac1d802aa3d39ad3a42eb8d441a02641beabea484faf57e2 = $this->env->getExtension("native_profiler");
        $__internal_f61efad45c78630aac1d802aa3d39ad3a42eb8d441a02641beabea484faf57e2->enter($__internal_f61efad45c78630aac1d802aa3d39ad3a42eb8d441a02641beabea484faf57e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f61efad45c78630aac1d802aa3d39ad3a42eb8d441a02641beabea484faf57e2->leave($__internal_f61efad45c78630aac1d802aa3d39ad3a42eb8d441a02641beabea484faf57e2_prof);

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
