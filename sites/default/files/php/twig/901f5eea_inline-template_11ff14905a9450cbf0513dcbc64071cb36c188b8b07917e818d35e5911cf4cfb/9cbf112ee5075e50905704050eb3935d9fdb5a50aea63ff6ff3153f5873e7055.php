<?php

/* {# inline_template_start #}{% trans %}{{ date }} by {{ username }}{% endtrans %}{% if message %}<p class="revision-log">{{ message }}</p>{% endif %} */
class __TwigTemplate_d1dcac4d53475c967f915eaf29024c1f662d50857ebe0a311956741387a31e54 extends Twig_Template
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
        $__internal_1f2a505ac1b1bf013bcbeb6c614dd3f5b8793031687686208e228bf897f83bed = $this->env->getExtension("native_profiler");
        $__internal_1f2a505ac1b1bf013bcbeb6c614dd3f5b8793031687686208e228bf897f83bed->enter($__internal_1f2a505ac1b1bf013bcbeb6c614dd3f5b8793031687686208e228bf897f83bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}{% trans %}{{ date }} by {{ username }}{% endtrans %}{% if message %}<p class=\"revision-log\">{{ message }}</p>{% endif %}"));

        $tags = array("trans" => 1, "if" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('trans', 'if'),
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
        echo t("@date by @username", array("@date" => (isset($context["date"]) ? $context["date"] : null), "@username" => (isset($context["username"]) ? $context["username"] : null), ));
        if ((isset($context["message"]) ? $context["message"] : null)) {
            echo "<p class=\"revision-log\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true));
            echo "</p>";
        }
        
        $__internal_1f2a505ac1b1bf013bcbeb6c614dd3f5b8793031687686208e228bf897f83bed->leave($__internal_1f2a505ac1b1bf013bcbeb6c614dd3f5b8793031687686208e228bf897f83bed_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{% trans %}{{ date }} by {{ username }}{% endtrans %}{% if message %}<p class=\"revision-log\">{{ message }}</p>{% endif %}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}{% trans %}{{ date }} by {{ username }}{% endtrans %}{% if message %}<p class="revision-log">{{ message }}</p>{% endif %}*/
