<?php

/* core/themes/bartik/templates/block--search-form-block.html.twig */
class __TwigTemplate_7b26fe4dcc8dda3b080e5f34b862d01f035f50e13ec281069ea2bcde99146e6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@classy/block/block--search-form-block.html.twig", "core/themes/bartik/templates/block--search-form-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@classy/block/block--search-form-block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d422b5069089e804db2a1f79e603221f97e4cee87b7f8ed1585b0549d406dd41 = $this->env->getExtension("native_profiler");
        $__internal_d422b5069089e804db2a1f79e603221f97e4cee87b7f8ed1585b0549d406dd41->enter($__internal_d422b5069089e804db2a1f79e603221f97e4cee87b7f8ed1585b0549d406dd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/bartik/templates/block--search-form-block.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d422b5069089e804db2a1f79e603221f97e4cee87b7f8ed1585b0549d406dd41->leave($__internal_d422b5069089e804db2a1f79e603221f97e4cee87b7f8ed1585b0549d406dd41_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_07b7df26f3d7e199d9fa3d3381e839988b4663f944b4c5a47cd20f67839fb16f = $this->env->getExtension("native_profiler");
        $__internal_07b7df26f3d7e199d9fa3d3381e839988b4663f944b4c5a47cd20f67839fb16f->enter($__internal_07b7df26f3d7e199d9fa3d3381e839988b4663f944b4c5a47cd20f67839fb16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "  <div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "content", 1 => "container-inline"), "method"), "html", null, true));
        echo ">
    ";
        // line 21
        $this->displayParentBlock("content", $context, $blocks);
        echo "
  </div>
";
        
        $__internal_07b7df26f3d7e199d9fa3d3381e839988b4663f944b4c5a47cd20f67839fb16f->leave($__internal_07b7df26f3d7e199d9fa3d3381e839988b4663f944b4c5a47cd20f67839fb16f_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/block--search-form-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  64 => 20,  58 => 19,  11 => 1,);
    }
}
/* {% extends "@classy/block/block--search-form-block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Bartik's theme implementation for a search form block. Extends Classy's*/
/*  * search form block template.*/
/*  **/
/*  * Available variables:*/
/*  * - content: The content of this block.*/
/*  * - content_attributes: A list of HTML attributes applied to the main content*/
/*  *   tag that appears in the template.*/
/*  **/
/*  * @see template_preprocess_block()*/
/*  * @see search_preprocess_block()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% block content %}*/
/*   <div{{ content_attributes.addClass('content', 'container-inline') }}>*/
/*     {{ parent() }}*/
/*   </div>*/
/* {% endblock %}*/
/* */
