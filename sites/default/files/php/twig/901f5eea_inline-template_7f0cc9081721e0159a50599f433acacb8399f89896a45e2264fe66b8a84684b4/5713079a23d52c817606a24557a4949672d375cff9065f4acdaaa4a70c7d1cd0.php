<?php

/* {# inline_template_start #}<code>/entity/rdf_mapping/{rdf_mapping}</code>: GET */
class __TwigTemplate_2c7a8d7fa9f03e42fe9af8d483b5204ecd44e2f2e544edf5640ba9354b0bca67 extends Twig_Template
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
        $__internal_8b3f656a142ae7ec680d2182dd0e293e1d3f36502d7215e61da0826d18ce2701 = $this->env->getExtension("native_profiler");
        $__internal_8b3f656a142ae7ec680d2182dd0e293e1d3f36502d7215e61da0826d18ce2701->enter($__internal_8b3f656a142ae7ec680d2182dd0e293e1d3f36502d7215e61da0826d18ce2701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/entity/rdf_mapping/{rdf_mapping}</code>: GET"));

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
        echo "<code>/entity/rdf_mapping/{rdf_mapping}</code>: GET";
        
        $__internal_8b3f656a142ae7ec680d2182dd0e293e1d3f36502d7215e61da0826d18ce2701->leave($__internal_8b3f656a142ae7ec680d2182dd0e293e1d3f36502d7215e61da0826d18ce2701_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/rdf_mapping/{rdf_mapping}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/entity/rdf_mapping/{rdf_mapping}</code>: GET*/
