<?php

/* {# inline_template_start #}<code>/entity/search_page/{search_page}</code>: GET */
class __TwigTemplate_1c914303c9cd40d210b6d9bb70744f57474da7f998309513eac30141762ead53 extends Twig_Template
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
        $__internal_6c1d5fbe196ca4915c4c63c578ed4e7945a2a5131d0b7630f638a43202c3acfd = $this->env->getExtension("native_profiler");
        $__internal_6c1d5fbe196ca4915c4c63c578ed4e7945a2a5131d0b7630f638a43202c3acfd->enter($__internal_6c1d5fbe196ca4915c4c63c578ed4e7945a2a5131d0b7630f638a43202c3acfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/entity/search_page/{search_page}</code>: GET"));

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
        echo "<code>/entity/search_page/{search_page}</code>: GET";
        
        $__internal_6c1d5fbe196ca4915c4c63c578ed4e7945a2a5131d0b7630f638a43202c3acfd->leave($__internal_6c1d5fbe196ca4915c4c63c578ed4e7945a2a5131d0b7630f638a43202c3acfd_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/search_page/{search_page}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/entity/search_page/{search_page}</code>: GET*/
