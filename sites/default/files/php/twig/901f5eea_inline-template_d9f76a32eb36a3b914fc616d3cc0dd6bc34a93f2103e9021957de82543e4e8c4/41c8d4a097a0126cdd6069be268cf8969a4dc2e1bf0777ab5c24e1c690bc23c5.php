<?php

/* {# inline_template_start #}<code>/entity/comment_type/{comment_type}</code>: GET */
class __TwigTemplate_fbedfc735f05a10fce710971e1f2587d015b191112cc2953d916bd7d5cf6a042 extends Twig_Template
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
        $__internal_dd070321d9f74324082ed35cf7e796ee9a80168d59a9cb3a163beb12f0c7f222 = $this->env->getExtension("native_profiler");
        $__internal_dd070321d9f74324082ed35cf7e796ee9a80168d59a9cb3a163beb12f0c7f222->enter($__internal_dd070321d9f74324082ed35cf7e796ee9a80168d59a9cb3a163beb12f0c7f222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/entity/comment_type/{comment_type}</code>: GET"));

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
        echo "<code>/entity/comment_type/{comment_type}</code>: GET";
        
        $__internal_dd070321d9f74324082ed35cf7e796ee9a80168d59a9cb3a163beb12f0c7f222->leave($__internal_dd070321d9f74324082ed35cf7e796ee9a80168d59a9cb3a163beb12f0c7f222_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/comment_type/{comment_type}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/entity/comment_type/{comment_type}</code>: GET*/
