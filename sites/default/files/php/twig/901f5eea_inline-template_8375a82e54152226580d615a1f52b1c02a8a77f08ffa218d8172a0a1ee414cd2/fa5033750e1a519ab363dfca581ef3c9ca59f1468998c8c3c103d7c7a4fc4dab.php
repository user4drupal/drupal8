<?php

/* {# inline_template_start #}<code>/admin/structure/log_type/{log_type}</code>: GET */
class __TwigTemplate_32d0b955b3e55d5fc82a6279df07b8617a9535c378f8f2bb416857e7014ca4cd extends Twig_Template
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
        $__internal_559b9c3360416036fb6c3d50b3544411f8e7337950cd74d0db8db4d28baa6628 = $this->env->getExtension("native_profiler");
        $__internal_559b9c3360416036fb6c3d50b3544411f8e7337950cd74d0db8db4d28baa6628->enter($__internal_559b9c3360416036fb6c3d50b3544411f8e7337950cd74d0db8db4d28baa6628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/admin/structure/log_type/{log_type}</code>: GET"));

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
        echo "<code>/admin/structure/log_type/{log_type}</code>: GET";
        
        $__internal_559b9c3360416036fb6c3d50b3544411f8e7337950cd74d0db8db4d28baa6628->leave($__internal_559b9c3360416036fb6c3d50b3544411f8e7337950cd74d0db8db4d28baa6628_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/admin/structure/log_type/{log_type}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/admin/structure/log_type/{log_type}</code>: GET*/
