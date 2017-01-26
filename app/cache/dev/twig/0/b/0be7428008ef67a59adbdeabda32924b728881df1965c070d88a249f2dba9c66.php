<?php

/* PAUserBundle:Task:messages/warning.html.twig */
class __TwigTemplate_0be7428008ef67a59adbdeabda32924b728881df1965c070d88a249f2dba9c66 extends Twig_Template
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
        $__internal_856f5f7625cad98735d2ce50b226b9aea93a54eba54ac5ff5adb1a938d989c00 = $this->env->getExtension("native_profiler");
        $__internal_856f5f7625cad98735d2ce50b226b9aea93a54eba54ac5ff5adb1a938d989c00->enter($__internal_856f5f7625cad98735d2ce50b226b9aea93a54eba54ac5ff5adb1a938d989c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PAUserBundle:Task:messages/warning.html.twig"));

        // line 1
        if ( !array_key_exists("flashMessage", $context)) {
            // line 2
            echo "\t<div class=\"alert alert-warning hidden\" id=\"message-warning\" role=\"alert\">
\t\t<div class=\"container\"><span id=\"user-message-warning\"></span></div>
\t</div>
";
        }
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 7
            echo "\t<div class=\"alert alert-warning\" role=\"alert\">
\t\t<div class=\"container\">";
            // line 8
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_856f5f7625cad98735d2ce50b226b9aea93a54eba54ac5ff5adb1a938d989c00->leave($__internal_856f5f7625cad98735d2ce50b226b9aea93a54eba54ac5ff5adb1a938d989c00_prof);

    }

    public function getTemplateName()
    {
        return "PAUserBundle:Task:messages/warning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  34 => 7,  30 => 6,  24 => 2,  22 => 1,);
    }
}
