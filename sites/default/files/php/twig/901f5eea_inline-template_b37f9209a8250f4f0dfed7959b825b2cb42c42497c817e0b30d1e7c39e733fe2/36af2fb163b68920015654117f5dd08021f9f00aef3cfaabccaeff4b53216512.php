<?php

/* {# inline_template_start #}<code>/entity/block/{block}</code>: GET */
class __TwigTemplate_e88048aed31b4b567d2370a77a1d997787092d50c536ef01fc49fefc06c3a1e0 extends Twig_Template
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
        $__internal_1b1482e8fb43e178a20bf6e3108088c1a13d8db3c84ea335ff8f6ee835cd2576 = $this->env->getExtension("native_profiler");
        $__internal_1b1482e8fb43e178a20bf6e3108088c1a13d8db3c84ea335ff8f6ee835cd2576->enter($__internal_1b1482e8fb43e178a20bf6e3108088c1a13d8db3c84ea335ff8f6ee835cd2576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/entity/block/{block}</code>: GET"));

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
        echo "<code>/entity/block/{block}</code>: GET";
        
        $__internal_1b1482e8fb43e178a20bf6e3108088c1a13d8db3c84ea335ff8f6ee835cd2576->leave($__internal_1b1482e8fb43e178a20bf6e3108088c1a13d8db3c84ea335ff8f6ee835cd2576_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/block/{block}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/entity/block/{block}</code>: GET*/
