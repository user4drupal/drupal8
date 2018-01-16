<?php

/* {# inline_template_start #}<code>/entity/action/{action}</code>: GET */
class __TwigTemplate_692e77efc85b3c3a5e6ff97c8528e2ce11b8601b53b398e135f07187b6a3d1dd extends Twig_Template
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
        $__internal_ee2d912de96d60df0044b65de20052be96159009b03ec66803113a8be720134f = $this->env->getExtension("native_profiler");
        $__internal_ee2d912de96d60df0044b65de20052be96159009b03ec66803113a8be720134f->enter($__internal_ee2d912de96d60df0044b65de20052be96159009b03ec66803113a8be720134f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/entity/action/{action}</code>: GET"));

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
        echo "<code>/entity/action/{action}</code>: GET";
        
        $__internal_ee2d912de96d60df0044b65de20052be96159009b03ec66803113a8be720134f->leave($__internal_ee2d912de96d60df0044b65de20052be96159009b03ec66803113a8be720134f_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/action/{action}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/entity/action/{action}</code>: GET*/
