<?php

/* @webprofiler/Collector/devel.html.twig */
class __TwigTemplate_dc120774f72f34e8edeb7a14aeffa0aadd2535786a1e890534139d7ba4171285 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3228431a5fabfa8e82757655b342ce258cbc4ff2124247aa518ff18e0ebd5d8b = $this->env->getExtension("native_profiler");
        $__internal_3228431a5fabfa8e82757655b342ce258cbc4ff2124247aa518ff18e0ebd5d8b->enter($__internal_3228431a5fabfa8e82757655b342ce258cbc4ff2124247aa518ff18e0ebd5d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/devel.html.twig"));

        $tags = array("block" => 1, "set" => 2, "spaceless" => 10, "for" => 11);
        $filters = array("t" => 3, "default" => 20);
        $functions = array("url" => 3);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'set', 'spaceless', 'for'),
                array('t', 'default'),
                array('url')
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
        $this->displayBlock('toolbar', $context, $blocks);
        
        $__internal_3228431a5fabfa8e82757655b342ce258cbc4ff2124247aa518ff18e0ebd5d8b->leave($__internal_3228431a5fabfa8e82757655b342ce258cbc4ff2124247aa518ff18e0ebd5d8b_prof);

    }

    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_28669e53351c7dc3d164d298079e66c736e2c3569858229c1108c521ef3a0238 = $this->env->getExtension("native_profiler");
        $__internal_28669e53351c7dc3d164d298079e66c736e2c3569858229c1108c521ef3a0238->enter($__internal_28669e53351c7dc3d164d298079e66c736e2c3569858229c1108c521ef3a0238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getUrl("devel.admin_settings")));
        echo "\" title=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Devel menu")));
        echo "\">
            <img width=\"26\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "title", array()), "html", null, true));
        echo "\"
                 src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "icon", array()), "html", null, true));
        echo "\"/>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        ob_start();
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "links", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "            <div class=\"sf-toolbar-info-piece\">
                <span>";
            // line 13
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["item"], "html", null, true));
            echo "</span>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 17
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 18
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>

";
        
        $__internal_28669e53351c7dc3d164d298079e66c736e2c3569858229c1108c521ef3a0238->leave($__internal_28669e53351c7dc3d164d298079e66c736e2c3569858229c1108c521ef3a0238_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/devel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  118 => 21,  114 => 20,  110 => 18,  107 => 17,  104 => 16,  95 => 13,  92 => 12,  87 => 11,  84 => 10,  82 => 9,  79 => 8,  73 => 5,  69 => 4,  62 => 3,  59 => 2,  47 => 1,);
    }
}
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*         <a href="{{ url("devel.admin_settings") }}" title="{{ 'Devel menu'|t }}">*/
/*             <img width="26" height="28" alt="{{ collector.title }}"*/
/*                  src="data:image/png;base64,{{ collector.icon }}"/>*/
/*         </a>*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*     {% spaceless %}*/
/*         {% for item in collector.links %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <span>{{ item }}</span>*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endspaceless %}*/
/*     {% endset %}*/
/* */
/*     <div class="sf-toolbar-block">*/
/*         <div class="sf-toolbar-icon">{{ icon|default('') }}</div>*/
/*         <div class="sf-toolbar-info">{{ text|default('') }}</div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
