<?php

/* core/themes/seven/templates/block--local-actions-block.html.twig */
class __TwigTemplate_a69cc980d6d9c39e8c0d01419c843bc1c679e277cc4a542f01d80012224764b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@block/block.html.twig", "core/themes/seven/templates/block--local-actions-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@block/block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_817f65ea746a8cb93d1505ce9a5e704dc07d092536df5db1ac8d57ebc76d19df = $this->env->getExtension("native_profiler");
        $__internal_817f65ea746a8cb93d1505ce9a5e704dc07d092536df5db1ac8d57ebc76d19df->enter($__internal_817f65ea746a8cb93d1505ce9a5e704dc07d092536df5db1ac8d57ebc76d19df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/seven/templates/block--local-actions-block.html.twig"));

        $tags = array("if" => 9);
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_817f65ea746a8cb93d1505ce9a5e704dc07d092536df5db1ac8d57ebc76d19df->leave($__internal_817f65ea746a8cb93d1505ce9a5e704dc07d092536df5db1ac8d57ebc76d19df_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_37bac0186470081e96e8cd9689fd1d18dd5fffd037355be84688fbcea583aa46 = $this->env->getExtension("native_profiler");
        $__internal_37bac0186470081e96e8cd9689fd1d18dd5fffd037355be84688fbcea583aa46->enter($__internal_37bac0186470081e96e8cd9689fd1d18dd5fffd037355be84688fbcea583aa46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 10
            echo "    <ul class=\"action-links\">
      ";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </ul>
  ";
        }
        
        $__internal_37bac0186470081e96e8cd9689fd1d18dd5fffd037355be84688fbcea583aa46->leave($__internal_37bac0186470081e96e8cd9689fd1d18dd5fffd037355be84688fbcea583aa46_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/block--local-actions-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }
}
/* {% extends "@block/block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for local actions (primary admin actions.)*/
/*  *//* */
/* #}*/
/* {% block content %}*/
/*   {% if content %}*/
/*     <ul class="action-links">*/
/*       {{ content }}*/
/*     </ul>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
