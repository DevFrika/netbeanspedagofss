<?php

/* ::base.html.twig */
class __TwigTemplate_216c79e068216dcacf810f166b726d5a1419111ecde7cb0696b22c8ab475f2a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca58bc68ae30f5aeb79d790c8a524e7852df5713abdefd930dedc9a47f3a531d = $this->env->getExtension("native_profiler");
        $__internal_ca58bc68ae30f5aeb79d790c8a524e7852df5713abdefd930dedc9a47f3a531d->enter($__internal_ca58bc68ae30f5aeb79d790c8a524e7852df5713abdefd930dedc9a47f3a531d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ca58bc68ae30f5aeb79d790c8a524e7852df5713abdefd930dedc9a47f3a531d->leave($__internal_ca58bc68ae30f5aeb79d790c8a524e7852df5713abdefd930dedc9a47f3a531d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_514ad9b11b06ce10894a31193afd36d2acf5bd1e456d29c0179b82bea3d06c11 = $this->env->getExtension("native_profiler");
        $__internal_514ad9b11b06ce10894a31193afd36d2acf5bd1e456d29c0179b82bea3d06c11->enter($__internal_514ad9b11b06ce10894a31193afd36d2acf5bd1e456d29c0179b82bea3d06c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_514ad9b11b06ce10894a31193afd36d2acf5bd1e456d29c0179b82bea3d06c11->leave($__internal_514ad9b11b06ce10894a31193afd36d2acf5bd1e456d29c0179b82bea3d06c11_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6bdea83c65897e7a5f9595159d37b7bf497f3b71285739b65b960e4fda28b84d = $this->env->getExtension("native_profiler");
        $__internal_6bdea83c65897e7a5f9595159d37b7bf497f3b71285739b65b960e4fda28b84d->enter($__internal_6bdea83c65897e7a5f9595159d37b7bf497f3b71285739b65b960e4fda28b84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6bdea83c65897e7a5f9595159d37b7bf497f3b71285739b65b960e4fda28b84d->leave($__internal_6bdea83c65897e7a5f9595159d37b7bf497f3b71285739b65b960e4fda28b84d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dea633c1d9e10904717f2a0cbf170ae936a514b5eab22992fc2dc86b6d0ca040 = $this->env->getExtension("native_profiler");
        $__internal_dea633c1d9e10904717f2a0cbf170ae936a514b5eab22992fc2dc86b6d0ca040->enter($__internal_dea633c1d9e10904717f2a0cbf170ae936a514b5eab22992fc2dc86b6d0ca040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dea633c1d9e10904717f2a0cbf170ae936a514b5eab22992fc2dc86b6d0ca040->leave($__internal_dea633c1d9e10904717f2a0cbf170ae936a514b5eab22992fc2dc86b6d0ca040_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_51e55ae05cfc4a6c9c748eaff4f6ea084cfacecb35c2e0cccdb0267fa7c284a5 = $this->env->getExtension("native_profiler");
        $__internal_51e55ae05cfc4a6c9c748eaff4f6ea084cfacecb35c2e0cccdb0267fa7c284a5->enter($__internal_51e55ae05cfc4a6c9c748eaff4f6ea084cfacecb35c2e0cccdb0267fa7c284a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_51e55ae05cfc4a6c9c748eaff4f6ea084cfacecb35c2e0cccdb0267fa7c284a5->leave($__internal_51e55ae05cfc4a6c9c748eaff4f6ea084cfacecb35c2e0cccdb0267fa7c284a5_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
