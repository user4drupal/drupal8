<?php

/* {# inline_template_start #}<code>/entity/node_type/{node_type}</code>: GET */
class __TwigTemplate_617443f8ab4f3214af3b17bac4e417afcc83722edd8c0f40e72040a599e34ada extends Twig_Template
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
        $__internal_46e60bad95f226145671744ab830bb8a4fb8351f24f5d4e21c466d816febc11d = $this->env->getExtension("native_profiler");
        $__internal_46e60bad95f226145671744ab830bb8a4fb8351f24f5d4e21c466d816febc11d->enter($__internal_46e60bad95f226145671744ab830bb8a4fb8351f24f5d4e21c466d816febc11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/entity/node_type/{node_type}</code>: GET"));

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
        echo "<code>/entity/node_type/{node_type}</code>: GET";
        
        $__internal_46e60bad95f226145671744ab830bb8a4fb8351f24f5d4e21c466d816febc11d->leave($__internal_46e60bad95f226145671744ab830bb8a4fb8351f24f5d4e21c466d816febc11d_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/node_type/{node_type}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/entity/node_type/{node_type}</code>: GET*/
