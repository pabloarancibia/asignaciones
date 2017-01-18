<?php

/* PAUserBundle:User:messages/success.html.twig */
class __TwigTemplate_ee6f7cd2b08ec45779a894dd1acde28fea380cf767e3f7b171880435d8bacdb6 extends Twig_Template
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
        $__internal_03f6a8d7467967ea82771b400ed55347032defbfbd7bcf2a458d8c947481ea5c = $this->env->getExtension("native_profiler");
        $__internal_03f6a8d7467967ea82771b400ed55347032defbfbd7bcf2a458d8c947481ea5c->enter($__internal_03f6a8d7467967ea82771b400ed55347032defbfbd7bcf2a458d8c947481ea5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PAUserBundle:User:messages/success.html.twig"));

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
        
        $__internal_03f6a8d7467967ea82771b400ed55347032defbfbd7bcf2a458d8c947481ea5c->leave($__internal_03f6a8d7467967ea82771b400ed55347032defbfbd7bcf2a458d8c947481ea5c_prof);

    }

    public function getTemplateName()
    {
        return "PAUserBundle:User:messages/success.html.twig";
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
