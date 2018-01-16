<?php

/* {# inline_template_start #}<code>/entity/field_storage_config/{field_storage_config}</code>: GET */
class __TwigTemplate_74f744b4eed1569d5a7cec63f0b60b53e526abe29e99515c441c307494545772 extends Twig_Template
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
        $__internal_80220bfea5f24b48a09e450d43a223e019c53faa481b725814382e2a3831c36f = $this->env->getExtension("native_profiler");
        $__internal_80220bfea5f24b48a09e450d43a223e019c53faa481b725814382e2a3831c36f->enter($__internal_80220bfea5f24b48a09e450d43a223e019c53faa481b725814382e2a3831c36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/entity/field_storage_config/{field_storage_config}</code>: GET"));

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
        echo "<code>/entity/field_storage_config/{field_storage_config}</code>: GET";
        
        $__internal_80220bfea5f24b48a09e450d43a223e019c53faa481b725814382e2a3831c36f->leave($__internal_80220bfea5f24b48a09e450d43a223e019c53faa481b725814382e2a3831c36f_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/field_storage_config/{field_storage_config}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/entity/field_storage_config/{field_storage_config}</code>: GET*/
