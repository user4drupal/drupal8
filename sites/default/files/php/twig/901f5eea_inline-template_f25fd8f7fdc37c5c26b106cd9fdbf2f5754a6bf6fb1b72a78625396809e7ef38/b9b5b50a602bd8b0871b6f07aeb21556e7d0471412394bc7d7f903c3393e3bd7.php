<?php

/* {# inline_template_start #}<code>/log/{log}</code>: GET, PATCH, DELETE</br><code>/entity/log</code>: POST */
class __TwigTemplate_5023f005aff725ec382315c9acc1a68f164b4e6ed1f829a7b8701e1db8786fa2 extends Twig_Template
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
        $__internal_ee956253851075743d6158c3300ab70be67df8f043fe0259c4724c055c797c54 = $this->env->getExtension("native_profiler");
        $__internal_ee956253851075743d6158c3300ab70be67df8f043fe0259c4724c055c797c54->enter($__internal_ee956253851075743d6158c3300ab70be67df8f043fe0259c4724c055c797c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/log/{log}</code>: GET, PATCH, DELETE</br><code>/entity/log</code>: POST"));

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
        echo "<code>/log/{log}</code>: GET, PATCH, DELETE</br><code>/entity/log</code>: POST";
        
        $__internal_ee956253851075743d6158c3300ab70be67df8f043fe0259c4724c055c797c54->leave($__internal_ee956253851075743d6158c3300ab70be67df8f043fe0259c4724c055c797c54_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/log/{log}</code>: GET, PATCH, DELETE</br><code>/entity/log</code>: POST";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/log/{log}</code>: GET, PATCH, DELETE</br><code>/entity/log</code>: POST*/
