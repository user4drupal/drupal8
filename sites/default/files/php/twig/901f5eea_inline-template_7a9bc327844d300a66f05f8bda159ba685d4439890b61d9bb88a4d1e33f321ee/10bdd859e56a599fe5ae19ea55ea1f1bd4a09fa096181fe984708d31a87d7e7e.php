<?php

/* {# inline_template_start #}<code>/entity/file/{file}</code>: GET, PATCH, DELETE</br><code>/entity/file</code>: POST */
class __TwigTemplate_231b7bd113b836bf7cced2b26f0894ebbd73f34d4646d161fd9f7c55873d9acd extends Twig_Template
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
        $__internal_310e8409819edee2220b77d5e7b5b15713c11e2fa2b01f217d2483136eb9e4ca = $this->env->getExtension("native_profiler");
        $__internal_310e8409819edee2220b77d5e7b5b15713c11e2fa2b01f217d2483136eb9e4ca->enter($__internal_310e8409819edee2220b77d5e7b5b15713c11e2fa2b01f217d2483136eb9e4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/entity/file/{file}</code>: GET, PATCH, DELETE</br><code>/entity/file</code>: POST"));

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
        echo "<code>/entity/file/{file}</code>: GET, PATCH, DELETE</br><code>/entity/file</code>: POST";
        
        $__internal_310e8409819edee2220b77d5e7b5b15713c11e2fa2b01f217d2483136eb9e4ca->leave($__internal_310e8409819edee2220b77d5e7b5b15713c11e2fa2b01f217d2483136eb9e4ca_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/file/{file}</code>: GET, PATCH, DELETE</br><code>/entity/file</code>: POST";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/entity/file/{file}</code>: GET, PATCH, DELETE</br><code>/entity/file</code>: POST*/
