<?php

/* core/themes/classy/templates/content-edit/node-edit-form.html.twig */
class __TwigTemplate_9d5486f9eadac4e5bd36682661d9a2941adb3ada54a63ce464d057655500c597 extends Twig_Template
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
        $__internal_63e5b46ad0d080006793dd90b48966a25185632588f0b09ed1c470e1bd3b34bf = $this->env->getExtension("native_profiler");
        $__internal_63e5b46ad0d080006793dd90b48966a25185632588f0b09ed1c470e1bd3b34bf->enter($__internal_63e5b46ad0d080006793dd90b48966a25185632588f0b09ed1c470e1bd3b34bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/content-edit/node-edit-form.html.twig"));

        $tags = array();
        $filters = array("without" => 20);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('without'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 18
        echo "<div class=\"layout-node-form clearfix\">
  <div class=\"layout-region layout-region-node-main\">
    ";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["form"]) ? $context["form"] : null), "advanced", "actions"), "html", null, true));
        echo "
  </div>
  <div class=\"layout-region layout-region-node-secondary\">
    ";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "advanced", array()), "html", null, true));
        echo "
  </div>
  <div class=\"layout-region layout-region-node-footer\">
    ";
        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "actions", array()), "html", null, true));
        echo "
  </div>
</div>
";
        
        $__internal_63e5b46ad0d080006793dd90b48966a25185632588f0b09ed1c470e1bd3b34bf->leave($__internal_63e5b46ad0d080006793dd90b48966a25185632588f0b09ed1c470e1bd3b34bf_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content-edit/node-edit-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 26,  56 => 23,  50 => 20,  46 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a node edit form.*/
/*  **/
/*  * Two column template for the node add/edit form.*/
/*  **/
/*  * This template will be used when a node edit form specifies 'node_edit_form'*/
/*  * as its #theme callback.  Otherwise, by default, node add/edit forms will be*/
/*  * themed by form.html.twig.*/
/*  **/
/*  * Available variables:*/
/*  * - form: The node add/edit form.*/
/*  **/
/*  * @see seven_form_node_form_alter()*/
/*  *//* */
/* #}*/
/* <div class="layout-node-form clearfix">*/
/*   <div class="layout-region layout-region-node-main">*/
/*     {{ form|without('advanced', 'actions') }}*/
/*   </div>*/
/*   <div class="layout-region layout-region-node-secondary">*/
/*     {{ form.advanced }}*/
/*   </div>*/
/*   <div class="layout-region layout-region-node-footer">*/
/*     {{ form.actions }}*/
/*   </div>*/
/* </div>*/
/* */
