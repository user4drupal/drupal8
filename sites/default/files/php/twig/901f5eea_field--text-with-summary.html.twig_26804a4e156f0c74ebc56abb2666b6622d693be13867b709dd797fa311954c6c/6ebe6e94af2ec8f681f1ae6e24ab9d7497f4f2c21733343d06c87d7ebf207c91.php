<?php

/* core/themes/classy/templates/field/field--text-with-summary.html.twig */
class __TwigTemplate_54947a3e4e13a5237957ee2c77a80b77886e67e6e9d5f23aa11fb6ca9d6eac32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("field--text.html.twig", "core/themes/classy/templates/field/field--text-with-summary.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "field--text.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b14426670dba0dd158054bb1239efdcff0ea192a74e6266b93e3cc675d982bed = $this->env->getExtension("native_profiler");
        $__internal_b14426670dba0dd158054bb1239efdcff0ea192a74e6266b93e3cc675d982bed->enter($__internal_b14426670dba0dd158054bb1239efdcff0ea192a74e6266b93e3cc675d982bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/field/field--text-with-summary.html.twig"));

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
        
        $__internal_b14426670dba0dd158054bb1239efdcff0ea192a74e6266b93e3cc675d982bed->leave($__internal_b14426670dba0dd158054bb1239efdcff0ea192a74e6266b93e3cc675d982bed_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/field/field--text-with-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends "field--text.html.twig" %}*/
/* */
