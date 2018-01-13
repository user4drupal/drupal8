<?php

/* core/themes/seven/templates/menu-local-tasks.html.twig */
class __TwigTemplate_ab6dfb32214301e63e84a2f3452d3d7bcfa4f6a035ae3535400d8e79c4fb7ace extends Twig_Template
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
        $__internal_643ce16d244e5ca5643c1e316431009fa39beacfcab3dc2fe5fc2c3937b296a6 = $this->env->getExtension("native_profiler");
        $__internal_643ce16d244e5ca5643c1e316431009fa39beacfcab3dc2fe5fc2c3937b296a6->enter($__internal_643ce16d244e5ca5643c1e316431009fa39beacfcab3dc2fe5fc2c3937b296a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/seven/templates/menu-local-tasks.html.twig"));

        $tags = array("if" => 16);
        $filters = array("t" => 17);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        // line 16
        if ((isset($context["primary"]) ? $context["primary"] : null)) {
            // line 17
            echo "  <h2 id=\"primary-tabs-title\" class=\"visually-hidden\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Primary tabs")));
            echo "</h2>
  <nav role=\"navigation\" class=\"is-horizontal is-collapsible\" aria-labelledby=\"primary-tabs-title\" data-drupal-nav-tabs>
    <button class=\"reset-appearance tabs__tab tabs__trigger\" aria-label=\"";
            // line 19
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Primary tabs display toggle")));
            echo "\" data-drupal-nav-tabs-trigger>&bull;&bull;&bull;</button>
    <ul class=\"tabs primary clearfix\" data-drupal-nav-tabs-target>";
            // line 20
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["primary"]) ? $context["primary"] : null), "html", null, true));
            echo "</ul>
  </nav>
";
        }
        // line 23
        if ((isset($context["secondary"]) ? $context["secondary"] : null)) {
            // line 24
            echo "  <h2 id=\"secondary-tabs-title\" class=\"visually-hidden\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Secondary tabs")));
            echo "</h2>
  <nav role=\"navigation\" class=\"is-horizontal\" aria-labelledby=\"secondary-tabs-title\" data-drupal-nav-tabs>
    <ul class=\"tabs secondary clearfix\">";
            // line 26
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["secondary"]) ? $context["secondary"] : null), "html", null, true));
            echo "</ul>
  </nav>
";
        }
        
        $__internal_643ce16d244e5ca5643c1e316431009fa39beacfcab3dc2fe5fc2c3937b296a6->leave($__internal_643ce16d244e5ca5643c1e316431009fa39beacfcab3dc2fe5fc2c3937b296a6_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 26,  66 => 24,  64 => 23,  58 => 20,  54 => 19,  48 => 17,  46 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Seven theme implementation to display primary and secondary local tasks.*/
/*  **/
/*  * Available variables:*/
/*  * - primary: HTML list items representing primary tasks.*/
/*  * - secondary: HTML list items representing primary tasks.*/
/*  **/
/*  * Each item in these variables (primary and secondary) can be individually*/
/*  * themed in menu-local-task.html.twig.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if primary %}*/
/*   <h2 id="primary-tabs-title" class="visually-hidden">{{ 'Primary tabs'|t }}</h2>*/
/*   <nav role="navigation" class="is-horizontal is-collapsible" aria-labelledby="primary-tabs-title" data-drupal-nav-tabs>*/
/*     <button class="reset-appearance tabs__tab tabs__trigger" aria-label="{{ 'Primary tabs display toggle'|t }}" data-drupal-nav-tabs-trigger>&bull;&bull;&bull;</button>*/
/*     <ul class="tabs primary clearfix" data-drupal-nav-tabs-target>{{ primary }}</ul>*/
/*   </nav>*/
/* {% endif %}*/
/* {% if secondary %}*/
/*   <h2 id="secondary-tabs-title" class="visually-hidden">{{ 'Secondary tabs'|t }}</h2>*/
/*   <nav role="navigation" class="is-horizontal" aria-labelledby="secondary-tabs-title" data-drupal-nav-tabs>*/
/*     <ul class="tabs secondary clearfix">{{ secondary }}</ul>*/
/*   </nav>*/
/* {% endif %}*/
/* */
