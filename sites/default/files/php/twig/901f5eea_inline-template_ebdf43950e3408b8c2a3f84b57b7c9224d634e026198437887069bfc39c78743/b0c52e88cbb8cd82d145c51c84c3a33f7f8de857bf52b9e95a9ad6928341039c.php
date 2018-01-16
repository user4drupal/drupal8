<?php

/* {# inline_template_start #}<code>/comment/{comment}</code>: GET, PATCH, DELETE</br><code>/entity/comment</code>: POST */
class __TwigTemplate_ea212a792e6b48c44291aaddcb91fca85750c3af6b6bc2c35612e509812ad12f extends Twig_Template
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
        $__internal_052a9800a7dfd9b31f628c6a936c290c1ca527fa726bdaa14d7edc4188b44b06 = $this->env->getExtension("native_profiler");
        $__internal_052a9800a7dfd9b31f628c6a936c290c1ca527fa726bdaa14d7edc4188b44b06->enter($__internal_052a9800a7dfd9b31f628c6a936c290c1ca527fa726bdaa14d7edc4188b44b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<code>/comment/{comment}</code>: GET, PATCH, DELETE</br><code>/entity/comment</code>: POST"));

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
        echo "<code>/comment/{comment}</code>: GET, PATCH, DELETE</br><code>/entity/comment</code>: POST";
        
        $__internal_052a9800a7dfd9b31f628c6a936c290c1ca527fa726bdaa14d7edc4188b44b06->leave($__internal_052a9800a7dfd9b31f628c6a936c290c1ca527fa726bdaa14d7edc4188b44b06_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/comment/{comment}</code>: GET, PATCH, DELETE</br><code>/entity/comment</code>: POST";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<code>/comment/{comment}</code>: GET, PATCH, DELETE</br><code>/entity/comment</code>: POST*/
