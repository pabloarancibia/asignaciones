<?php

/* PAUserBundle:Task:index.html.twig */
class __TwigTemplate_048aef316530629d37797bdfcb7f0e9a0beaa902d6b912f5c4bebdb3062efa30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PAUserBundle:Task:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b7999d622f81cb9b76bd4de7283d514891d8b9b82da089d8b4b32e488bbacf7 = $this->env->getExtension("native_profiler");
        $__internal_9b7999d622f81cb9b76bd4de7283d514891d8b9b82da089d8b4b32e488bbacf7->enter($__internal_9b7999d622f81cb9b76bd4de7283d514891d8b9b82da089d8b4b32e488bbacf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PAUserBundle:Task:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b7999d622f81cb9b76bd4de7283d514891d8b9b82da089d8b4b32e488bbacf7->leave($__internal_9b7999d622f81cb9b76bd4de7283d514891d8b9b82da089d8b4b32e488bbacf7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c12bbab646b0a6b9fe415bc9c7914dd056dfc562f3bcbf3100851d400ae1961d = $this->env->getExtension("native_profiler");
        $__internal_c12bbab646b0a6b9fe415bc9c7914dd056dfc562f3bcbf3100851d400ae1961d->enter($__internal_c12bbab646b0a6b9fe415bc9c7914dd056dfc562f3bcbf3100851d400ae1961d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t
    ";
        // line 6
        echo twig_include($this->env, $context, "PAUserBundle:Task:messages/success.html.twig");
        echo "
    
\t<div class=\"container\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"page-header margin-none\">
\t\t\t\t<h2 class=\"padding-none\">Tasks</h2>
\t\t\t</div>
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<p>
\t\t\t\t    Total records: <span id=\"total\"> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo " </span>
\t\t\t\t</p>
\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>";
        // line 20
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Titulo", "t.title");
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 21
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Fecha", "t.createdAt");
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 22
        echo "Usuario";
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 23
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "t.status");
        echo "</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 28
            echo "\t\t\t\t            <tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t                <td>
\t\t\t\t                \t<a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pa_task_view", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
            echo "</a>
\t\t\t\t                </td>
\t\t\t\t                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "createdAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
\t\t\t\t                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["task"], "user", array()), "fullName", array()), "html", null, true);
            echo "</td>
\t\t\t\t                <td>
\t\t\t\t                \t";
            // line 35
            if (($this->getAttribute($context["task"], "status", array()) == 0)) {
                // line 36
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-time text-danger\" title=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Espera", array(), "messages");
                echo "\" id=\"glyphicon-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
                echo "\"></span>
\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 37
$context["task"], "status", array()) == 1)) {
                // line 38
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-ok text-success\" title=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Finalizado", array(), "messages");
                echo "\"></span>
\t\t\t\t                \t";
            }
            // line 40
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t            </tr>
\t\t\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
        // line 46
        echo "\t\t\t<div class=\"navigation\">
\t\t\t    ";
        // line 47
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_c12bbab646b0a6b9fe415bc9c7914dd056dfc562f3bcbf3100851d400ae1961d->leave($__internal_c12bbab646b0a6b9fe415bc9c7914dd056dfc562f3bcbf3100851d400ae1961d_prof);

    }

    public function getTemplateName()
    {
        return "PAUserBundle:Task:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 47,  140 => 46,  136 => 43,  128 => 40,  122 => 38,  120 => 37,  113 => 36,  111 => 35,  106 => 33,  102 => 32,  95 => 30,  89 => 28,  85 => 27,  78 => 23,  74 => 22,  70 => 21,  66 => 20,  58 => 15,  46 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
