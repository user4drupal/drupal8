<?php

/* @classy/block/block--search-form-block.html.twig */
class __TwigTemplate_3656b64d48dbb442070d01a4a92df669aca7ba2f1656acc991361836a5a52645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2186333c092da8b086852d3ac320de897b2370685d1fad5f1006445676a73e81 = $this->env->getExtension("native_profiler");
        $__internal_2186333c092da8b086852d3ac320de897b2370685d1fad5f1006445676a73e81->enter($__internal_2186333c092da8b086852d3ac320de897b2370685d1fad5f1006445676a73e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@classy/block/block--search-form-block.html.twig"));

        $tags = array("set" => 30, "if" => 38, "block" => 42);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
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

        // line 30
        $context["classes"] = array(0 => "block", 1 => "block-search", 2 => "container-inline");
        // line 36
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 37
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 38
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 39
            echo "    <h2";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 41
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
  ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "</div>
";
        
        $__internal_2186333c092da8b086852d3ac320de897b2370685d1fad5f1006445676a73e81->leave($__internal_2186333c092da8b086852d3ac320de897b2370685d1fad5f1006445676a73e81_prof);

    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        $__internal_304367e122c14ad76bd82c52b6fb78637af763aa9cd5170807b37a0f7bf72deb = $this->env->getExtension("native_profiler");
        $__internal_304367e122c14ad76bd82c52b6fb78637af763aa9cd5170807b37a0f7bf72deb->enter($__internal_304367e122c14ad76bd82c52b6fb78637af763aa9cd5170807b37a0f7bf72deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 43
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
  ";
        
        $__internal_304367e122c14ad76bd82c52b6fb78637af763aa9cd5170807b37a0f7bf72deb->leave($__internal_304367e122c14ad76bd82c52b6fb78637af763aa9cd5170807b37a0f7bf72deb_prof);

    }

    public function getTemplateName()
    {
        return "@classy/block/block--search-form-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 43,  83 => 42,  75 => 45,  73 => 42,  68 => 41,  60 => 39,  58 => 38,  54 => 37,  49 => 36,  47 => 30,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for the search form block.*/
/*  **/
/*  * Available variables:*/
/*  * - plugin_id: The ID of the block implementation.*/
/*  * - label: The configured label of the block if visible.*/
/*  * - configuration: A list of the block's configuration values, including:*/
/*  *   - label: The configured label for the block.*/
/*  *   - label_display: The display settings for the label.*/
/*  *   - provider: The module or other provider that provided this block plugin.*/
/*  *   - Block plugin specific settings will also be stored here.*/
/*  * - content: The content of this block.*/
/*  * - attributes: A list HTML attributes populated by modules, intended to*/
/*  *   be added to the main container tag of this template. Includes:*/
/*  *   - id: A valid HTML ID and guaranteed unique.*/
/*  * - title_attributes: Same as attributes, except applied to the main title*/
/*  *   tag that appears in the template.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * @see template_preprocess_block()*/
/*  * @see search_preprocess_block()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'block',*/
/*     'block-search',*/
/*     'container-inline',*/
/*   ]*/
/* %}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*   {{ title_prefix }}*/
/*   {% if label %}*/
/*     <h2{{ title_attributes }}>{{ label }}</h2>*/
/*   {% endif %}*/
/*   {{ title_suffix }}*/
/*   {% block content %}*/
/*     {{ content }}*/
/*   {% endblock %}*/
/* </div>*/
/* */
