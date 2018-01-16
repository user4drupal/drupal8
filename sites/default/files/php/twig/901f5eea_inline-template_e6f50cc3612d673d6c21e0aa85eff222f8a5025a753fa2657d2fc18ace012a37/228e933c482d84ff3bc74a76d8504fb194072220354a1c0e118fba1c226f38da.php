<?php

/* {# inline_template_start #}<code>/entity/field_config/{field_config}</code>: GET */
class __TwigTemplate_d647b4c4bb1283f19bb342a5de90e6a7bcfd25c9462a95786f0901876fbd09b3 extends Twig_Template
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
        $__internal_69a2fe296bdba77d2294e349d4fa30835f55b6527591e8d40062cc4387026715 = $this->env->getExtension("native_profiler");
        $__internal_69a2fe296bdba77d2294e349d4fa30835f55b6527591e8d40062cc4387026715->enter($__internal_69a2fe296bdba77d2294e349d4fa30835f55b6527591e8d40062cc4387026715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/entity/field_config/{field_config}</code>: GET"));

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
        echo "<code>/entity/field_config/{field_config}</code>: GET";
        
        $__internal_69a2fe296bdba77d2294e349d4fa30835f55b6527591e8d40062cc4387026715->leave($__internal_69a2fe296bdba77d2294e349d4fa30835f55b6527591e8d40062cc4387026715_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/field_config/{field_config}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/entity/field_config/{field_config}</code>: GET*/
