<?php

/* {# inline_template_start #}<code>/entity/base_field_override/{base_field_override}</code>: GET */
class __TwigTemplate_043f9ed5c4cf10c4b782b1edaf13eeb1ac9d1287028966c09dc713f2a785e8ef extends Twig_Template
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
        $__internal_6701148b8d6c0865237d6ae2189d05f2751bc24f99079ad43a155ebf197476b9 = $this->env->getExtension("native_profiler");
        $__internal_6701148b8d6c0865237d6ae2189d05f2751bc24f99079ad43a155ebf197476b9->enter($__internal_6701148b8d6c0865237d6ae2189d05f2751bc24f99079ad43a155ebf197476b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/entity/base_field_override/{base_field_override}</code>: GET"));

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
        echo "<code>/entity/base_field_override/{base_field_override}</code>: GET";
        
        $__internal_6701148b8d6c0865237d6ae2189d05f2751bc24f99079ad43a155ebf197476b9->leave($__internal_6701148b8d6c0865237d6ae2189d05f2751bc24f99079ad43a155ebf197476b9_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/base_field_override/{base_field_override}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/entity/base_field_override/{base_field_override}</code>: GET*/
