<?php

/* ::layout_loginmodal.html.twig */
class __TwigTemplate_6704c8b312e19eda00c269455d888364bd49333aa2fd3efcb7f2c47108ac44c8 extends Twig_Template
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
        echo "<div class=\"fade modal text-center\" id=\"connexion-modal\">
      <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
            <h4 class=\"modal-title\" id=\"myModalLabel\"> Connexion
              <br>
            </h4>
          </div>
          <div class=\"modal-body\">
            ";
        // line 11
        $this->loadTemplate("::layout_loginform.html.twig", "::layout_loginmodal.html.twig", 11)->display($context);
        // line 12
        echo "            
          </div>
        </div>
      </div>
    </div>
\t
    ";
    }

    public function getTemplateName()
    {
        return "::layout_loginmodal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 12,  31 => 11,  19 => 1,);
    }
}
/* <div class="fade modal text-center" id="connexion-modal">*/
/*       <div class="modal-dialog modal-lg">*/
/*         <div class="modal-content">*/
/*           <div class="modal-header">*/
/*             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/*             <h4 class="modal-title" id="myModalLabel"> Connexion*/
/*               <br>*/
/*             </h4>*/
/*           </div>*/
/*           <div class="modal-body">*/
/*             {% include "::layout_loginform.html.twig" %}*/
/*             */
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* 	*/
/*     */
