<?php

/* modules/custom/annonce/templates/annonce.html.twig */
class __TwigTemplate_d891d0365380cf0dbab5bd883ac5166dee185d6d44090a62648ba316c8b59dc5 extends Twig_Template
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
        $__internal_9a423214cf521c9876c864ce4c5eaeb3407b8bc6dbf3ac748e98fc30aecb47fb = $this->env->getExtension("native_profiler");
        $__internal_9a423214cf521c9876c864ce4c5eaeb3407b8bc6dbf3ac748e98fc30aecb47fb->enter($__internal_9a423214cf521c9876c864ce4c5eaeb3407b8bc6dbf3ac748e98fc30aecb47fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/custom/annonce/templates/annonce.html.twig"));

        $tags = array("if" => 19);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 18
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "annonce"), "method"), "html", null, true));
        echo ">
  ";
        // line 19
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 20
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        }
        // line 22
        echo "</div>
";
        
        $__internal_9a423214cf521c9876c864ce4c5eaeb3407b8bc6dbf3ac748e98fc30aecb47fb->leave($__internal_9a423214cf521c9876c864ce4c5eaeb3407b8bc6dbf3ac748e98fc30aecb47fb_prof);

    }

    public function getTemplateName()
    {
        return "modules/custom/annonce/templates/annonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 22,  53 => 20,  51 => 19,  46 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file annonce.html.twig*/
/*  * Default theme implementation to present Annonce data.*/
/*  **/
/*  * This template is used when viewing Annonce pages.*/
/*  **/
/*  **/
/*  * Available variables:*/
/*  * - content: A list of content items. Use 'content' to print all content, or*/
/*  * - attributes: HTML attributes for the container element.*/
/*  **/
/*  * @see template_preprocess_annonce()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div{{ attributes.addClass('annonce') }}>*/
/*   {% if content %}*/
/*     {{- content -}}*/
/*   {% endif %}*/
/* </div>*/
/* */
