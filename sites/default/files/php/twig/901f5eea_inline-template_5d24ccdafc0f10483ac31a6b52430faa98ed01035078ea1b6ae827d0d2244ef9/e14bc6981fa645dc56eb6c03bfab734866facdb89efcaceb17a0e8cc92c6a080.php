<?php

/* {# inline_template_start #}<code>/entity/entity_form_mode/{entity_form_mode}</code>: GET */
class __TwigTemplate_72042ed76cc0aab1647f652ae05aee565022e6b78c8269ba3c9428d4f88c67b4 extends Twig_Template
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
        $__internal_624fb88a779f528f48b2df0bdb0a5f1e1a0fad3da2cc2200c7ff1b436db7bfd6 = $this->env->getExtension("native_profiler");
        $__internal_624fb88a779f528f48b2df0bdb0a5f1e1a0fad3da2cc2200c7ff1b436db7bfd6->enter($__internal_624fb88a779f528f48b2df0bdb0a5f1e1a0fad3da2cc2200c7ff1b436db7bfd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/entity/entity_form_mode/{entity_form_mode}</code>: GET"));

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
        echo "<code>/entity/entity_form_mode/{entity_form_mode}</code>: GET";
        
        $__internal_624fb88a779f528f48b2df0bdb0a5f1e1a0fad3da2cc2200c7ff1b436db7bfd6->leave($__internal_624fb88a779f528f48b2df0bdb0a5f1e1a0fad3da2cc2200c7ff1b436db7bfd6_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/entity_form_mode/{entity_form_mode}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/entity/entity_form_mode/{entity_form_mode}</code>: GET*/
