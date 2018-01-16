<?php

/* {# inline_template_start #}<code>/entity/filter_format/{filter_format}</code>: GET */
class __TwigTemplate_7f4c636be92ff9f697c1f4520f866c7cd84ada3af0a19da51b3e921d3cf9d100 extends Twig_Template
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
        $__internal_e7b99f919a47373e7fbea7f4c3805b70dfd117c69b2eb7601a4e3cfaadb5d534 = $this->env->getExtension("native_profiler");
        $__internal_e7b99f919a47373e7fbea7f4c3805b70dfd117c69b2eb7601a4e3cfaadb5d534->enter($__internal_e7b99f919a47373e7fbea7f4c3805b70dfd117c69b2eb7601a4e3cfaadb5d534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/entity/filter_format/{filter_format}</code>: GET"));

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
        echo "<code>/entity/filter_format/{filter_format}</code>: GET";
        
        $__internal_e7b99f919a47373e7fbea7f4c3805b70dfd117c69b2eb7601a4e3cfaadb5d534->leave($__internal_e7b99f919a47373e7fbea7f4c3805b70dfd117c69b2eb7601a4e3cfaadb5d534_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/filter_format/{filter_format}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/entity/filter_format/{filter_format}</code>: GET*/
