<?php

/* core/themes/classy/templates/content-edit/filter-guidelines.html.twig */
class __TwigTemplate_cd699b2c92f1e16ead7fc7a27808c20fb555de983d3309bd1ebdfb89a1ce9350 extends Twig_Template
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
        $__internal_3fc318f56cb6c1756202e6af81064a17b18d02e54d2d1df60a01dffeb697d83f = $this->env->getExtension("native_profiler");
        $__internal_3fc318f56cb6c1756202e6af81064a17b18d02e54d2d1df60a01dffeb697d83f->enter($__internal_3fc318f56cb6c1756202e6af81064a17b18d02e54d2d1df60a01dffeb697d83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/content-edit/filter-guidelines.html.twig"));

        $tags = array("set" => 21);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
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

        // line 21
        $context["classes"] = array(0 => "filter-guidelines-item", 1 => ("filter-guidelines-" . $this->getAttribute(        // line 23
(isset($context["format"]) ? $context["format"] : null), "id", array())));
        // line 26
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  <h4 class=\"label\">";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["format"]) ? $context["format"] : null), "label", array()), "html", null, true));
        echo "</h4>
  ";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tips"]) ? $context["tips"] : null), "html", null, true));
        echo "
</div>
";
        
        $__internal_3fc318f56cb6c1756202e6af81064a17b18d02e54d2d1df60a01dffeb697d83f->leave($__internal_3fc318f56cb6c1756202e6af81064a17b18d02e54d2d1df60a01dffeb697d83f_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content-edit/filter-guidelines.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 28,  54 => 27,  49 => 26,  47 => 23,  46 => 21,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for guidelines for a text format.*/
/*  **/
/*  * Available variables:*/
/*  * - format: Contains information about the current text format, including the*/
/*  *   following:*/
/*  *   - name: The name of the text format, potentially unsafe and needs to be*/
/*  *     escaped.*/
/*  *   - format: The machine name of the text format, e.g. 'basic_html'.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  * - tips: Descriptions and a CSS ID in the form of 'module-name/filter-id'*/
/*  *   (only used when 'long' is TRUE) for each filter in one or more text*/
/*  *   formats.*/
/*  **/
/*  * @see template_preprocess_filter_tips()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'filter-guidelines-item',*/
/*     'filter-guidelines-' ~ format.id,*/
/*   ]*/
/* %}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*   <h4 class="label">{{ format.label }}</h4>*/
/*   {{ tips }}*/
/* </div>*/
/* */
