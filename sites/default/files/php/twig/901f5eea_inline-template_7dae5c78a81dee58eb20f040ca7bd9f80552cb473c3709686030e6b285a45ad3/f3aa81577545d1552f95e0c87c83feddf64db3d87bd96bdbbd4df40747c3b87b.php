<?php

/* {# inline_template_start #}<code>/block/{block_content}</code>: GET, PATCH, DELETE</br><code>/entity/block_content</code>: POST */
class __TwigTemplate_8f99e1f43e26d55569c71c3dbc8fe5372e6309792664e4854f1d6537a033d83b extends Twig_Template
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
        $__internal_d7436762e6785bb6fcc2dfa4c16400e8560c4b2c9094cf21181fcc4f5e4d605a = $this->env->getExtension("native_profiler");
        $__internal_d7436762e6785bb6fcc2dfa4c16400e8560c4b2c9094cf21181fcc4f5e4d605a->enter($__internal_d7436762e6785bb6fcc2dfa4c16400e8560c4b2c9094cf21181fcc4f5e4d605a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/block/{block_content}</code>: GET, PATCH, DELETE</br><code>/entity/block_content</code>: POST"));

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
        echo "<code>/block/{block_content}</code>: GET, PATCH, DELETE</br><code>/entity/block_content</code>: POST";
        
        $__internal_d7436762e6785bb6fcc2dfa4c16400e8560c4b2c9094cf21181fcc4f5e4d605a->leave($__internal_d7436762e6785bb6fcc2dfa4c16400e8560c4b2c9094cf21181fcc4f5e4d605a_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/block/{block_content}</code>: GET, PATCH, DELETE</br><code>/entity/block_content</code>: POST";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/block/{block_content}</code>: GET, PATCH, DELETE</br><code>/entity/block_content</code>: POST*/
