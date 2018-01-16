<?php

/* {# inline_template_start #}<code>/user/{user}</code>: GET, PATCH, DELETE</br><code>/entity/user</code>: POST */
class __TwigTemplate_07e48e9ecb6e5a8dd6d7e3f87ab2532fbed9e845c2a1bd6117a87e42060057a8 extends Twig_Template
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
        $__internal_03c755ac5c3712a31283ef3cab55c6890ea6d7269c2a0936149323ee7f768ab3 = $this->env->getExtension("native_profiler");
        $__internal_03c755ac5c3712a31283ef3cab55c6890ea6d7269c2a0936149323ee7f768ab3->enter($__internal_03c755ac5c3712a31283ef3cab55c6890ea6d7269c2a0936149323ee7f768ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/user/{user}</code>: GET, PATCH, DELETE</br><code>/entity/user</code>: POST"));

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
        echo "<code>/user/{user}</code>: GET, PATCH, DELETE</br><code>/entity/user</code>: POST";
        
        $__internal_03c755ac5c3712a31283ef3cab55c6890ea6d7269c2a0936149323ee7f768ab3->leave($__internal_03c755ac5c3712a31283ef3cab55c6890ea6d7269c2a0936149323ee7f768ab3_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/user/{user}</code>: GET, PATCH, DELETE</br><code>/entity/user</code>: POST";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/user/{user}</code>: GET, PATCH, DELETE</br><code>/entity/user</code>: POST*/
