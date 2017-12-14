<?php

/* core/themes/bartik/templates/block--system-branding-block.html.twig */
class __TwigTemplate_1417c71fb62a2656360c7c045a2ac539ba2110cd7a00f69c28221d03ec910700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "core/themes/bartik/templates/block--system-branding-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cee6abd4e1194320364a5b50912a7096d8a4eea8f82fd3b20724e799484fef83 = $this->env->getExtension("native_profiler");
        $__internal_cee6abd4e1194320364a5b50912a7096d8a4eea8f82fd3b20724e799484fef83->enter($__internal_cee6abd4e1194320364a5b50912a7096d8a4eea8f82fd3b20724e799484fef83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/bartik/templates/block--system-branding-block.html.twig"));

        $tags = array("set" => 16, "if" => 18);
        $filters = array("t" => 19);
        $functions = array("path" => 19);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('t'),
                array('path')
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
        $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "site-branding"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cee6abd4e1194320364a5b50912a7096d8a4eea8f82fd3b20724e799484fef83->leave($__internal_cee6abd4e1194320364a5b50912a7096d8a4eea8f82fd3b20724e799484fef83_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_621eb378e1fa8c154bc19965588fa51a3fb57f724765b16ded6f4faf8ed59cf8 = $this->env->getExtension("native_profiler");
        $__internal_621eb378e1fa8c154bc19965588fa51a3fb57f724765b16ded6f4faf8ed59cf8->enter($__internal_621eb378e1fa8c154bc19965588fa51a3fb57f724765b16ded6f4faf8ed59cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "  ";
        if ((isset($context["site_logo"]) ? $context["site_logo"] : null)) {
            // line 19
            echo "    <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\" class=\"site-branding__logo\">
      <img src=\"";
            // line 20
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" />
    </a>
  ";
        }
        // line 23
        echo "  ";
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 24
            echo "    <div class=\"site-branding__text\">
      ";
            // line 25
            if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                // line 26
                echo "        <div class=\"site-branding__name\">
          <a href=\"";
                // line 27
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</a>
        </div>
      ";
            }
            // line 30
            echo "      ";
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 31
                echo "        <div class=\"site-branding__slogan\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "</div>
      ";
            }
            // line 33
            echo "    </div>
  ";
        }
        
        $__internal_621eb378e1fa8c154bc19965588fa51a3fb57f724765b16ded6f4faf8ed59cf8->leave($__internal_621eb378e1fa8c154bc19965588fa51a3fb57f724765b16ded6f4faf8ed59cf8_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 33,  109 => 31,  106 => 30,  96 => 27,  93 => 26,  91 => 25,  88 => 24,  85 => 23,  77 => 20,  70 => 19,  67 => 18,  61 => 17,  54 => 1,  52 => 16,  11 => 1,);
    }
}
/* {% extends "block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Bartik's theme implementation for a branding block.*/
/*  **/
/*  * Each branding element variable (logo, name, slogan) is only available if*/
/*  * enabled in the block configuration.*/
/*  **/
/*  * Available variables:*/
/*  * - site_logo: Logo for site as defined in Appearance or theme settings.*/
/*  * - site_name: Name for site as defined in Site information settings.*/
/*  * - site_slogan: Slogan for site as defined in Site information settings.*/
/*  *//* */
/* #}*/
/* {% set attributes = attributes.addClass('site-branding') %}*/
/* {% block content %}*/
/*   {% if site_logo %}*/
/*     <a href="{{ path('<front>') }}" title="{{ 'Home'|t }}" rel="home" class="site-branding__logo">*/
/*       <img src="{{ site_logo }}" alt="{{ 'Home'|t }}" />*/
/*     </a>*/
/*   {% endif %}*/
/*   {% if site_name or site_slogan %}*/
/*     <div class="site-branding__text">*/
/*       {% if site_name %}*/
/*         <div class="site-branding__name">*/
/*           <a href="{{ path('<front>') }}" title="{{ 'Home'|t }}" rel="home">{{ site_name }}</a>*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if site_slogan %}*/
/*         <div class="site-branding__slogan">{{ site_slogan }}</div>*/
/*       {% endif %}*/
/*     </div>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */