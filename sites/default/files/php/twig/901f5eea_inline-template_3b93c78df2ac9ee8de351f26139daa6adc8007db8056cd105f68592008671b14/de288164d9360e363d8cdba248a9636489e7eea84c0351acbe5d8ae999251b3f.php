<?php

/* {# inline_template_start #}<code>/taxonomy/term/{taxonomy_term}</code>: GET, PATCH, DELETE</br><code>/entity/taxonomy_term</code>: POST */
class __TwigTemplate_f440e548a121d6cf30f1ea8de8bcf876619b45fc41360c4a241bbad4c586c899 extends Twig_Template
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
        $__internal_affd09dd752b608e95716646edfb5ea05e62d945215f51ea7f3c4f9e06bcda1c = $this->env->getExtension("native_profiler");
        $__internal_affd09dd752b608e95716646edfb5ea05e62d945215f51ea7f3c4f9e06bcda1c->enter($__internal_affd09dd752b608e95716646edfb5ea05e62d945215f51ea7f3c4f9e06bcda1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/taxonomy/term/{taxonomy_term}</code>: GET, PATCH, DELETE</br><code>/entity/taxonomy_term</code>: POST"));

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
        echo "<code>/taxonomy/term/{taxonomy_term}</code>: GET, PATCH, DELETE</br><code>/entity/taxonomy_term</code>: POST";
        
        $__internal_affd09dd752b608e95716646edfb5ea05e62d945215f51ea7f3c4f9e06bcda1c->leave($__internal_affd09dd752b608e95716646edfb5ea05e62d945215f51ea7f3c4f9e06bcda1c_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/taxonomy/term/{taxonomy_term}</code>: GET, PATCH, DELETE</br><code>/entity/taxonomy_term</code>: POST";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/taxonomy/term/{taxonomy_term}</code>: GET, PATCH, DELETE</br><code>/entity/taxonomy_term</code>: POST*/
