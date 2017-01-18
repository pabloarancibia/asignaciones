<?php

/* PAUserBundle:Task:messages/success.html.twig */
class __TwigTemplate_9695d395e373d0b8c77e22b8e9eaa7687a6bb253834d883ef864f3440aaf148a extends Twig_Template
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
        $__internal_02b20c7f4a57a5ba8390c57615cf578d67da013360091dcfe1fc7fb8dc892c48 = $this->env->getExtension("native_profiler");
        $__internal_02b20c7f4a57a5ba8390c57615cf578d67da013360091dcfe1fc7fb8dc892c48->enter($__internal_02b20c7f4a57a5ba8390c57615cf578d67da013360091dcfe1fc7fb8dc892c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PAUserBundle:Task:messages/success.html.twig"));

        // line 1
        echo " ";
        if ( !array_key_exists("flashMessage", $context)) {
            // line 2
            echo "     <div class\"alert alert-success hidden\" id=\"message\" role=\"alert\">
         <div class=\"container\">
              <span id=\"user-message\"></span>
         </div>
     </div>
 ";
        }
        // line 8
        echo "
 ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "    \t<div class=\"alert alert-success\" role=\"alert\">
    \t\t<div class=\"container\">";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
    \t</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_02b20c7f4a57a5ba8390c57615cf578d67da013360091dcfe1fc7fb8dc892c48->leave($__internal_02b20c7f4a57a5ba8390c57615cf578d67da013360091dcfe1fc7fb8dc892c48_prof);

    }

    public function getTemplateName()
    {
        return "PAUserBundle:Task:messages/success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  40 => 10,  36 => 9,  33 => 8,  25 => 2,  22 => 1,);
    }
}
