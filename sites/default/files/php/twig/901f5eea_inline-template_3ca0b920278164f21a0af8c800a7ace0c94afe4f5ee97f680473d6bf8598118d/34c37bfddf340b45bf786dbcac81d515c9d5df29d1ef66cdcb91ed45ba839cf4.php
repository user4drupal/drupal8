<?php

/* {# inline_template_start #}<code>/entity/entity_view_mode/{entity_view_mode}</code>: GET */
class __TwigTemplate_a3b6abe95ffda0afadc6ee69e5ffab8add0f01d3244f54639d44dbce995c9881 extends Twig_Template
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
        $__internal_38911382c88b2d168700d7b431c23f1bba23f3314d05d7d4e576a117fef5329e = $this->env->getExtension("native_profiler");
        $__internal_38911382c88b2d168700d7b431c23f1bba23f3314d05d7d4e576a117fef5329e->enter($__internal_38911382c88b2d168700d7b431c23f1bba23f3314d05d7d4e576a117fef5329e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/entity/entity_view_mode/{entity_view_mode}</code>: GET"));

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

        // line 1
        echo "<code>/entity/entity_view_mode/{entity_view_mode}</code>: GET";
        
        $__internal_38911382c88b2d168700d7b431c23f1bba23f3314d05d7d4e576a117fef5329e->leave($__internal_38911382c88b2d168700d7b431c23f1bba23f3314d05d7d4e576a117fef5329e_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/entity_view_mode/{entity_view_mode}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/entity/entity_view_mode/{entity_view_mode}</code>: GET*/
