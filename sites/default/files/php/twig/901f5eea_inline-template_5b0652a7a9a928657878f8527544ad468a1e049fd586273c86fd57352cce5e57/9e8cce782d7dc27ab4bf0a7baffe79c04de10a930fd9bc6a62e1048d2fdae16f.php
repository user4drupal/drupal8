<?php

/* {# inline_template_start #}<code>/entity/rest_resource_config/{rest_resource_config}</code>: GET */
class __TwigTemplate_f46e1176654d1352a70bef49c10eb3f2b43469086c19cd1de16a082ddfe0fbea extends Twig_Template
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
        $__internal_77571b7bece2cb70e17435b9efdce7a14ab0baebad5fa438129405d8a12c2851 = $this->env->getExtension("native_profiler");
        $__internal_77571b7bece2cb70e17435b9efdce7a14ab0baebad5fa438129405d8a12c2851->enter($__internal_77571b7bece2cb70e17435b9efdce7a14ab0baebad5fa438129405d8a12c2851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/entity/rest_resource_config/{rest_resource_config}</code>: GET"));

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
        echo "<code>/entity/rest_resource_config/{rest_resource_config}</code>: GET";
        
        $__internal_77571b7bece2cb70e17435b9efdce7a14ab0baebad5fa438129405d8a12c2851->leave($__internal_77571b7bece2cb70e17435b9efdce7a14ab0baebad5fa438129405d8a12c2851_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/rest_resource_config/{rest_resource_config}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/entity/rest_resource_config/{rest_resource_config}</code>: GET*/
