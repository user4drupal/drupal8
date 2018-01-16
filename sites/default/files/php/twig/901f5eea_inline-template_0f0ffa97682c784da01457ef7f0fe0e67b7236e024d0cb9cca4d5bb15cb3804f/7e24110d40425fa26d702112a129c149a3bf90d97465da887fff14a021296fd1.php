<?php

/* {# inline_template_start #}<code>/entity/image_style/{image_style}</code>: GET */
class __TwigTemplate_3ababd23463ceae027715b4822dc6f5dccee6bae79ec64257e471d70882bc8cc extends Twig_Template
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
        $__internal_1797361d786970c1fb44c61f540c7aa43a39d56b6b33d0c018a61515f2c82cbd = $this->env->getExtension("native_profiler");
        $__internal_1797361d786970c1fb44c61f540c7aa43a39d56b6b33d0c018a61515f2c82cbd->enter($__internal_1797361d786970c1fb44c61f540c7aa43a39d56b6b33d0c018a61515f2c82cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/entity/image_style/{image_style}</code>: GET"));

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
        echo "<code>/entity/image_style/{image_style}</code>: GET";
        
        $__internal_1797361d786970c1fb44c61f540c7aa43a39d56b6b33d0c018a61515f2c82cbd->leave($__internal_1797361d786970c1fb44c61f540c7aa43a39d56b6b33d0c018a61515f2c82cbd_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/image_style/{image_style}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/entity/image_style/{image_style}</code>: GET*/
