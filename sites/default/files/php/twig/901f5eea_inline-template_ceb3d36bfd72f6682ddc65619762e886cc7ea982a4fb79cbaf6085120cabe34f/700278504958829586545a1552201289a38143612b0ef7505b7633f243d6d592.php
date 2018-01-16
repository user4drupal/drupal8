<?php

/* {# inline_template_start #}<code>/entity/date_format/{date_format}</code>: GET */
class __TwigTemplate_831dd62a904ec9bde98acd5422519eae9bd320dcfb1cd707079adacdd672fdc7 extends Twig_Template
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
        $__internal_a964fdc6dbf30104c0b2d019cdbc0177b5b18973621c7e23f77d0755a704830e = $this->env->getExtension("native_profiler");
        $__internal_a964fdc6dbf30104c0b2d019cdbc0177b5b18973621c7e23f77d0755a704830e->enter($__internal_a964fdc6dbf30104c0b2d019cdbc0177b5b18973621c7e23f77d0755a704830e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/entity/date_format/{date_format}</code>: GET"));

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
        echo "<code>/entity/date_format/{date_format}</code>: GET";
        
        $__internal_a964fdc6dbf30104c0b2d019cdbc0177b5b18973621c7e23f77d0755a704830e->leave($__internal_a964fdc6dbf30104c0b2d019cdbc0177b5b18973621c7e23f77d0755a704830e_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/date_format/{date_format}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/entity/date_format/{date_format}</code>: GET*/
