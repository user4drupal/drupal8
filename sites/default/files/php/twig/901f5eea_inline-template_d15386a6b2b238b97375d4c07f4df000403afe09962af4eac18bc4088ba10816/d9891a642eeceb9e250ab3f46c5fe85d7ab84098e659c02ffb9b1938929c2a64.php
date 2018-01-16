<?php

/* {# inline_template_start #}<code>/entity/taxonomy_vocabulary/{taxonomy_vocabulary}</code>: GET */
class __TwigTemplate_92831dfce2682d5c4ef5f4e90811a2d556f56101fffe3b0be8444fa5398204d0 extends Twig_Template
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
        $__internal_fc033bfb8279c709549551ee8e54bc7b07d3eae41b3ae66a62bd91644d89bf82 = $this->env->getExtension("native_profiler");
        $__internal_fc033bfb8279c709549551ee8e54bc7b07d3eae41b3ae66a62bd91644d89bf82->enter($__internal_fc033bfb8279c709549551ee8e54bc7b07d3eae41b3ae66a62bd91644d89bf82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/entity/taxonomy_vocabulary/{taxonomy_vocabulary}</code>: GET"));

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
        echo "<code>/entity/taxonomy_vocabulary/{taxonomy_vocabulary}</code>: GET";
        
        $__internal_fc033bfb8279c709549551ee8e54bc7b07d3eae41b3ae66a62bd91644d89bf82->leave($__internal_fc033bfb8279c709549551ee8e54bc7b07d3eae41b3ae66a62bd91644d89bf82_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/taxonomy_vocabulary/{taxonomy_vocabulary}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/entity/taxonomy_vocabulary/{taxonomy_vocabulary}</code>: GET*/
