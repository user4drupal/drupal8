<?php

/* {# inline_template_start #}<code>/entity/entity_view_display/{entity_view_display}</code>: GET */
class __TwigTemplate_d1dee4e31e2eacb5ce486bc9c604ffa05b2b2aec881c2917bcc3aa22d9b5747c extends Twig_Template
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
        $__internal_0545628a1420ddad190a0feaf7f09c69ddad84eb42c229af64ba639760c31561 = $this->env->getExtension("native_profiler");
        $__internal_0545628a1420ddad190a0feaf7f09c69ddad84eb42c229af64ba639760c31561->enter($__internal_0545628a1420ddad190a0feaf7f09c69ddad84eb42c229af64ba639760c31561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/entity/entity_view_display/{entity_view_display}</code>: GET"));

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
        echo "<code>/entity/entity_view_display/{entity_view_display}</code>: GET";
        
        $__internal_0545628a1420ddad190a0feaf7f09c69ddad84eb42c229af64ba639760c31561->leave($__internal_0545628a1420ddad190a0feaf7f09c69ddad84eb42c229af64ba639760c31561_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/entity_view_display/{entity_view_display}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/entity/entity_view_display/{entity_view_display}</code>: GET*/
