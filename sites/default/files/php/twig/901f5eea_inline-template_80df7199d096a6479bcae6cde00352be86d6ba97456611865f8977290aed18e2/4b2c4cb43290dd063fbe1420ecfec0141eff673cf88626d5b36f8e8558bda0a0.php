<?php

/* {# inline_template_start #}<code>/entity/editor/{editor}</code>: GET */
class __TwigTemplate_9f2b01a8f09a3bc2f30d5846e4e043fac4d09a51dd58d1e6cc5fcb1600faf5e8 extends Twig_Template
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
        $__internal_8159a29adc2da8730c9acbd82611689af9256d5c7cdf32a3723ef995a5999476 = $this->env->getExtension("native_profiler");
        $__internal_8159a29adc2da8730c9acbd82611689af9256d5c7cdf32a3723ef995a5999476->enter($__internal_8159a29adc2da8730c9acbd82611689af9256d5c7cdf32a3723ef995a5999476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/entity/editor/{editor}</code>: GET"));

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
        echo "<code>/entity/editor/{editor}</code>: GET";
        
        $__internal_8159a29adc2da8730c9acbd82611689af9256d5c7cdf32a3723ef995a5999476->leave($__internal_8159a29adc2da8730c9acbd82611689af9256d5c7cdf32a3723ef995a5999476_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/editor/{editor}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/entity/editor/{editor}</code>: GET*/
