<?php

/* {# inline_template_start #}<code>/entity/menu/{menu}</code>: GET */
class __TwigTemplate_a016b3298e1cfed8dc1aec73fe30a1fe22029da1701c2d6e9695c8a29844225f extends Twig_Template
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
        $__internal_4b04fe3860916bb18c865ac5c514be8367438264d01343498a97922dfb6c0143 = $this->env->getExtension("native_profiler");
        $__internal_4b04fe3860916bb18c865ac5c514be8367438264d01343498a97922dfb6c0143->enter($__internal_4b04fe3860916bb18c865ac5c514be8367438264d01343498a97922dfb6c0143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/entity/menu/{menu}</code>: GET"));

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
        echo "<code>/entity/menu/{menu}</code>: GET";
        
        $__internal_4b04fe3860916bb18c865ac5c514be8367438264d01343498a97922dfb6c0143->leave($__internal_4b04fe3860916bb18c865ac5c514be8367438264d01343498a97922dfb6c0143_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/menu/{menu}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/entity/menu/{menu}</code>: GET*/
