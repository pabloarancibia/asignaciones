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
        $__internal_d35f59d0f3fa7100b1e72499024339df8dfeb493735925c97db1c3f08882c0ae = $this->env->getExtension("native_profiler");
        $__internal_d35f59d0f3fa7100b1e72499024339df8dfeb493735925c97db1c3f08882c0ae->enter($__internal_d35f59d0f3fa7100b1e72499024339df8dfeb493735925c97db1c3f08882c0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PAUserBundle:Task:messages/success.html.twig"));

        // line 1
        echo " ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 2
            echo "    \t<div class=\"alert alert-success\" role=\"alert\">
    \t\t<div class=\"container\">";
            // line 3
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
    \t</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d35f59d0f3fa7100b1e72499024339df8dfeb493735925c97db1c3f08882c0ae->leave($__internal_d35f59d0f3fa7100b1e72499024339df8dfeb493735925c97db1c3f08882c0ae_prof);

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
        return array (  30 => 3,  27 => 2,  22 => 1,);
    }
}
