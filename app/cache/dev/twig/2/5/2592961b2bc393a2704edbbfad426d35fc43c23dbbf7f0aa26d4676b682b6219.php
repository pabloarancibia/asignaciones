<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_2592961b2bc393a2704edbbfad426d35fc43c23dbbf7f0aa26d4676b682b6219 extends Twig_Template
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
        $__internal_177f2d5f153d0f7bdec9e6dda0a43dfba6bf5e6c3483d32527622e9be77953a7 = $this->env->getExtension("native_profiler");
        $__internal_177f2d5f153d0f7bdec9e6dda0a43dfba6bf5e6c3483d32527622e9be77953a7->enter($__internal_177f2d5f153d0f7bdec9e6dda0a43dfba6bf5e6c3483d32527622e9be77953a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_177f2d5f153d0f7bdec9e6dda0a43dfba6bf5e6c3483d32527622e9be77953a7->leave($__internal_177f2d5f153d0f7bdec9e6dda0a43dfba6bf5e6c3483d32527622e9be77953a7_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
