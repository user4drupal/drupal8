<?php

/* {# inline_template_start #}<code>/entity/view/{view}</code>: GET */
class __TwigTemplate_baaa570fe84b6bedf938cddb9c316c638dc00c962a8f5de6c83fad82689fba6c extends Twig_Template
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
        $__internal_8667ecdf3c9446cb06fc592a3802dd0743f10cb636fd04adcb44248412e2ec0c = $this->env->getExtension("native_profiler");
        $__internal_8667ecdf3c9446cb06fc592a3802dd0743f10cb636fd04adcb44248412e2ec0c->enter($__internal_8667ecdf3c9446cb06fc592a3802dd0743f10cb636fd04adcb44248412e2ec0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/entity/view/{view}</code>: GET"));

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
        echo "<code>/entity/view/{view}</code>: GET";
        
        $__internal_8667ecdf3c9446cb06fc592a3802dd0743f10cb636fd04adcb44248412e2ec0c->leave($__internal_8667ecdf3c9446cb06fc592a3802dd0743f10cb636fd04adcb44248412e2ec0c_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/view/{view}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/entity/view/{view}</code>: GET*/
