<?php

/* modules/contrib/restui/templates/restui-resource-info.html.twig */
class __TwigTemplate_b5a423fdcb74fa5dfdbc47c88197d73dcbaab01c150ef41bfecf68187fae9453 extends Twig_Template
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
        $__internal_cb91a19a1f5c2e19cec0836a2939f0a9509a3468bcf43f8d580c541b86758af5 = $this->env->getExtension("native_profiler");
        $__internal_cb91a19a1f5c2e19cec0836a2939f0a9509a3468bcf43f8d580c541b86758af5->enter($__internal_cb91a19a1f5c2e19cec0836a2939f0a9509a3468bcf43f8d580c541b86758af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/restui/templates/restui-resource-info.html.twig"));

        $tags = array("if" => 15, "for" => 21);
        $filters = array("join" => 16);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array('join'),
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

        // line 15
        if (((isset($context["granularity"]) ? $context["granularity"] : null) == "resource")) {
            // line 16
            echo "    <p>methods: ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_join_filter($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "methods", array()), ", "), "html", null, true));
            echo "</br>
        formats: ";
            // line 17
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_join_filter($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "formats", array()), ", "), "html", null, true));
            echo "</br>
        authentication: ";
            // line 18
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_join_filter($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "authentication", array()), ", "), "html", null, true));
            echo "
    </p>
";
        } else {
            // line 21
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["configuration"]) ? $context["configuration"] : null));
            foreach ($context['_seq'] as $context["method"] => $context["properties"]) {
                // line 22
                echo "        <p>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["method"], "html", null, true));
                echo "</br>
            formats: ";
                // line 23
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_join_filter($this->getAttribute($context["properties"], "supported_formats", array()), ", "), "html", null, true));
                echo "</br>
            authentication: ";
                // line 24
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_join_filter($this->getAttribute($context["properties"], "supported_auth", array()), ", "), "html", null, true));
                echo "
        </p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['method'], $context['properties'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_cb91a19a1f5c2e19cec0836a2939f0a9509a3468bcf43f8d580c541b86758af5->leave($__internal_cb91a19a1f5c2e19cec0836a2939f0a9509a3468bcf43f8d580c541b86758af5_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/restui/templates/restui-resource-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 24,  73 => 23,  68 => 22,  63 => 21,  57 => 18,  53 => 17,  48 => 16,  46 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for basic administrative info about a REST resource.*/
/*  **/
/*  * Available variables:*/
/*  * - granularity: string REST resource granularity. Either*/
/*  *   \Drupal\rest\RestResourceConfigInterface::METHOD_GRANULARITY or*/
/*  *   \Drupal\rest\RestResourceConfigInterface::RESOURCE_GRANULARITY.*/
/*  * - configuration: array REST resource config.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if granularity == 'resource' %}*/
/*     <p>methods: {{ configuration.methods|join(', ') }}</br>*/
/*         formats: {{ configuration.formats|join(', ') }}</br>*/
/*         authentication: {{ configuration.authentication|join(', ') }}*/
/*     </p>*/
/* {% else %}*/
/*     {% for method, properties in configuration %}*/
/*         <p>{{ method }}</br>*/
/*             formats: {{ properties.supported_formats|join(', ') }}</br>*/
/*             authentication: {{ properties.supported_auth|join(', ') }}*/
/*         </p>*/
/*     {% endfor %}*/
/* {% endif %}*/
/* */
