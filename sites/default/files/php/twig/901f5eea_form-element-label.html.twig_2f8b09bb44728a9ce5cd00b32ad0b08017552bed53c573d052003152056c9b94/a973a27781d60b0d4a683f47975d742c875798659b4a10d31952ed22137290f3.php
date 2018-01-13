<?php

/* core/themes/classy/templates/form/form-element-label.html.twig */
class __TwigTemplate_b857725dae076f51d11d8fb319b35192579594b3d627ceb3ccf3c04fdbe09a1a extends Twig_Template
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
        $__internal_8a90df553af41ea486b4070070ec569d11dbe1183e9acba274ee80a95f3f8ef6 = $this->env->getExtension("native_profiler");
        $__internal_8a90df553af41ea486b4070070ec569d11dbe1183e9acba274ee80a95f3f8ef6->enter($__internal_8a90df553af41ea486b4070070ec569d11dbe1183e9acba274ee80a95f3f8ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/form-element-label.html.twig"));

        $tags = array("set" => 16, "if" => 23);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array(),
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

        // line 16
        $context["classes"] = array(0 => (((        // line 17
(isset($context["title_display"]) ? $context["title_display"] : null) == "after")) ? ("option") : ("")), 1 => (((        // line 18
(isset($context["title_display"]) ? $context["title_display"] : null) == "invisible")) ? ("visually-hidden") : ("")), 2 => ((        // line 19
(isset($context["required"]) ? $context["required"] : null)) ? ("js-form-required") : ("")), 3 => ((        // line 20
(isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
        // line 23
        if (( !twig_test_empty((isset($context["title"]) ? $context["title"] : null)) || (isset($context["required"]) ? $context["required"] : null))) {
            // line 24
            echo "<label";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</label>";
        }
        
        $__internal_8a90df553af41ea486b4070070ec569d11dbe1183e9acba274ee80a95f3f8ef6->leave($__internal_8a90df553af41ea486b4070070ec569d11dbe1183e9acba274ee80a95f3f8ef6_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/form-element-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 24,  52 => 23,  50 => 20,  49 => 19,  48 => 18,  47 => 17,  46 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a form element label.*/
/*  **/
/*  * Available variables:*/
/*  * - title: The label's text.*/
/*  * - title_display: Elements title_display setting.*/
/*  * - required: An indicator for whether the associated form element is required.*/
/*  * - attributes: A list of HTML attributes for the label.*/
/*  **/
/*  * @see template_preprocess_form_element_label()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     title_display == 'after' ? 'option',*/
/*     title_display == 'invisible' ? 'visually-hidden',*/
/*     required ? 'js-form-required',*/
/*     required ? 'form-required',*/
/*   ]*/
/* %}*/
/* {% if title is not empty or required -%}*/
/*   <label{{ attributes.addClass(classes) }}>{{ title }}</label>*/
/* {%- endif %}*/
/* */
