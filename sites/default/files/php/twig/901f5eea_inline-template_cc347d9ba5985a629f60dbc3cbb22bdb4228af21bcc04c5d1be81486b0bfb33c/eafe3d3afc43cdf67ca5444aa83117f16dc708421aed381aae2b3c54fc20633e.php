<?php

/* {# inline_template_start #}<code>/admin/config/system/mail/{mail_message}</code>: GET */
class __TwigTemplate_6486112b671a8042e898f6bdbbf3372ac9d36823f1a73012a97cf7ce66e081e9 extends Twig_Template
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
        $__internal_b06b37a752ae97041fd14410fbc4b1c4fdabf78a6bd1e53be654e94b47ab299b = $this->env->getExtension("native_profiler");
        $__internal_b06b37a752ae97041fd14410fbc4b1c4fdabf78a6bd1e53be654e94b47ab299b->enter($__internal_b06b37a752ae97041fd14410fbc4b1c4fdabf78a6bd1e53be654e94b47ab299b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/admin/config/system/mail/{mail_message}</code>: GET"));

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
        echo "<code>/admin/config/system/mail/{mail_message}</code>: GET";
        
        $__internal_b06b37a752ae97041fd14410fbc4b1c4fdabf78a6bd1e53be654e94b47ab299b->leave($__internal_b06b37a752ae97041fd14410fbc4b1c4fdabf78a6bd1e53be654e94b47ab299b_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/admin/config/system/mail/{mail_message}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/admin/config/system/mail/{mail_message}</code>: GET*/
