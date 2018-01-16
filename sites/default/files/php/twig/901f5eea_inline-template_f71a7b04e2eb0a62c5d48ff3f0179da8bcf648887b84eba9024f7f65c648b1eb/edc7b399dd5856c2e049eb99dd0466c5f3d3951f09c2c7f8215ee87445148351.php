<?php

/* {# inline_template_start #}<code>/entity/block_content_type/{block_content_type}</code>: GET */
class __TwigTemplate_f6869591fcac06938ac6597189cbda1c1371e6744f306b26e9b03af3b443e33a extends Twig_Template
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
        $__internal_2fd672826bc7aced256d60dec1b1130ee80be09a46c8ae37e8b378ae4e641897 = $this->env->getExtension("native_profiler");
        $__internal_2fd672826bc7aced256d60dec1b1130ee80be09a46c8ae37e8b378ae4e641897->enter($__internal_2fd672826bc7aced256d60dec1b1130ee80be09a46c8ae37e8b378ae4e641897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/entity/block_content_type/{block_content_type}</code>: GET"));

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
        echo "<code>/entity/block_content_type/{block_content_type}</code>: GET";
        
        $__internal_2fd672826bc7aced256d60dec1b1130ee80be09a46c8ae37e8b378ae4e641897->leave($__internal_2fd672826bc7aced256d60dec1b1130ee80be09a46c8ae37e8b378ae4e641897_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/block_content_type/{block_content_type}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/entity/block_content_type/{block_content_type}</code>: GET*/
