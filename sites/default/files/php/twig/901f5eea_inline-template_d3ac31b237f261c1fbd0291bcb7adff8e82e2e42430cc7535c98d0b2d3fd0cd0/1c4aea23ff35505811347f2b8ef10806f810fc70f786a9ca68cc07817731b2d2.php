<?php

/* {# inline_template_start #}<code>/entity/user_role/{user_role}</code>: GET */
class __TwigTemplate_a77cc2c250387e71d867ecf4cb4da67aa028cb16d584806c4502ecb1a78c034b extends Twig_Template
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
        $__internal_d1a61a4f401aaf8e5f8feda57919a196d0a2ab6149691df44cda5255cdb78835 = $this->env->getExtension("native_profiler");
        $__internal_d1a61a4f401aaf8e5f8feda57919a196d0a2ab6149691df44cda5255cdb78835->enter($__internal_d1a61a4f401aaf8e5f8feda57919a196d0a2ab6149691df44cda5255cdb78835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/entity/user_role/{user_role}</code>: GET"));

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
        echo "<code>/entity/user_role/{user_role}</code>: GET";
        
        $__internal_d1a61a4f401aaf8e5f8feda57919a196d0a2ab6149691df44cda5255cdb78835->leave($__internal_d1a61a4f401aaf8e5f8feda57919a196d0a2ab6149691df44cda5255cdb78835_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/user_role/{user_role}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/entity/user_role/{user_role}</code>: GET*/
