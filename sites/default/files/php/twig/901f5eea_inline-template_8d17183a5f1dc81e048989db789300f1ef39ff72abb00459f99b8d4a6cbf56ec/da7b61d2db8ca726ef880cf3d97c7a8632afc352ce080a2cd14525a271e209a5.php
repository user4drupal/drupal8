<?php

/* {# inline_template_start #}<code>/dblog/{id}</code>: GET */
class __TwigTemplate_f33c2b6f64c469dd730c4dd7929d649656735fb9a974963d8bd6c6c993424be9 extends Twig_Template
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
        $__internal_448c30f1e6d0c14527dbe03454f7cd2bf1d4d8ac65c9f73fccebc368c511b24d = $this->env->getExtension("native_profiler");
        $__internal_448c30f1e6d0c14527dbe03454f7cd2bf1d4d8ac65c9f73fccebc368c511b24d->enter($__internal_448c30f1e6d0c14527dbe03454f7cd2bf1d4d8ac65c9f73fccebc368c511b24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/dblog/{id}</code>: GET"));

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
        echo "<code>/dblog/{id}</code>: GET";
        
        $__internal_448c30f1e6d0c14527dbe03454f7cd2bf1d4d8ac65c9f73fccebc368c511b24d->leave($__internal_448c30f1e6d0c14527dbe03454f7cd2bf1d4d8ac65c9f73fccebc368c511b24d_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/dblog/{id}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/dblog/{id}</code>: GET*/
