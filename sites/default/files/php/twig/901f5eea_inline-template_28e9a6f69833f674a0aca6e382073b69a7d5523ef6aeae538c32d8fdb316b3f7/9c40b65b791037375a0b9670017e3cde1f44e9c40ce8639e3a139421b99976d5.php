<?php

/* {# inline_template_start #}<code>/entity/shortcut_set/{shortcut_set}</code>: GET */
class __TwigTemplate_8b6fe49c3884e32b5c811c1ffb1aa2e49a097ab9bcf4b0686e68b09d5847f90f extends Twig_Template
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
        $__internal_b713288569a43452e2b77170fc6e8a4538cc6bdee47c91f64999184f2a07316d = $this->env->getExtension("native_profiler");
        $__internal_b713288569a43452e2b77170fc6e8a4538cc6bdee47c91f64999184f2a07316d->enter($__internal_b713288569a43452e2b77170fc6e8a4538cc6bdee47c91f64999184f2a07316d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/entity/shortcut_set/{shortcut_set}</code>: GET"));

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
        echo "<code>/entity/shortcut_set/{shortcut_set}</code>: GET";
        
        $__internal_b713288569a43452e2b77170fc6e8a4538cc6bdee47c91f64999184f2a07316d->leave($__internal_b713288569a43452e2b77170fc6e8a4538cc6bdee47c91f64999184f2a07316d_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/shortcut_set/{shortcut_set}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/entity/shortcut_set/{shortcut_set}</code>: GET*/
