<?php

/* PAUserBundle:Task:custom.html.twig */
class __TwigTemplate_19f1ef2ac9b1ef54c899cceacb4ed3d9cfe60f21f57f095700edc63fb221d534 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PAUserBundle:Task:custom.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87bd03d8318f5b6639a8a63f71e5bf30c17f80fbcf4eacdfa68f47bcfc20184e = $this->env->getExtension("native_profiler");
        $__internal_87bd03d8318f5b6639a8a63f71e5bf30c17f80fbcf4eacdfa68f47bcfc20184e->enter($__internal_87bd03d8318f5b6639a8a63f71e5bf30c17f80fbcf4eacdfa68f47bcfc20184e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PAUserBundle:Task:custom.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87bd03d8318f5b6639a8a63f71e5bf30c17f80fbcf4eacdfa68f47bcfc20184e->leave($__internal_87bd03d8318f5b6639a8a63f71e5bf30c17f80fbcf4eacdfa68f47bcfc20184e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a66ce06cb5bada00ffe869caec6fb71089434d31064efa658a6e08a99d8b208 = $this->env->getExtension("native_profiler");
        $__internal_7a66ce06cb5bada00ffe869caec6fb71089434d31064efa658a6e08a99d8b208->enter($__internal_7a66ce06cb5bada00ffe869caec6fb71089434d31064efa658a6e08a99d8b208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

\t";
        // line 6
        echo twig_include($this->env, $context, "PAUserBundle:Task:messages/success.html.twig");
        echo "
\t";
        // line 7
        echo twig_include($this->env, $context, "PAUserBundle:Task:messages/warning.html.twig");
        echo "

\t<div class=\"container\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"page-header margin-none\">
\t\t\t\t<h2 class=\"padding-none\">Tasks</h2>
\t\t\t</div>
\t\t\t";
        // line 14
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 15
            echo "\t\t\t\t<h3>No hay tareas</h3>
\t\t\t";
        }
        // line 17
        echo "\t\t\t";
        if (twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 18
            echo "\t\t\t<div class=\"table-responsive\">
\t\t\t\t<p>
\t\t\t\t    Total: <span id=\"total\"> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
            echo " </span>
\t\t\t\t</p>
\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>";
            // line 25
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Titulo", "t.title");
            echo "</th>
\t\t\t\t\t\t\t<th>";
            // line 26
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Fecha", "t.createdAt");
            echo "</th>
\t\t\t\t\t\t\t<th>";
            // line 27
            echo "Usuario";
            echo "</th>
\t\t\t\t\t\t\t<th>";
            // line 28
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Estado", "t.status");
            echo "</th>
\t\t\t\t\t\t\t<th>Acciones</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t        ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 34
                echo "\t\t\t\t            <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t                <td>
\t\t\t\t                \t<a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pa_task_view", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
                echo "</a>
\t\t\t\t                </td>
\t\t\t\t                <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "createdAt", array()), "d-m-Y H:i"), "html", null, true);
                echo "</td>
\t\t\t\t                <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["task"], "user", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["task"], "user", array()), "lastName", array()), "html", null, true);
                echo "</td>
\t\t\t\t                <td>
\t\t\t\t                \t";
                // line 41
                if (($this->getAttribute($context["task"], "status", array()) == 0)) {
                    // line 42
                    echo "\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-time text-danger\" title=\"En Espera\" id=\"glyphicon-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
                    echo "\"></span>
\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 43
$context["task"], "status", array()) == 1)) {
                    // line 44
                    echo "\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-ok text-success\" title=\"Finalizada\"></span>
\t\t\t\t                \t";
                }
                // line 46
                echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t\t    <a href=\"#\" class=\"btn btn-sm btn-success btn-process\" id=\"button-";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t        Finalizar
\t\t\t\t\t\t\t\t    </a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t            </tr>
\t\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
            // line 57
            echo "\t\t\t<div class=\"navigation\">
\t\t\t    ";
            // line 58
            echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            echo "
\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 62
        echo "\t\t</div>
\t</div>
\t
\t";
        // line 65
        echo twig_include($this->env, $context, "PAUserBundle:User:forms/form.html.twig", array("form" => (isset($context["update_form"]) ? $context["update_form"] : $this->getContext($context, "update_form")), "id" => "form-update", "with_submit" => false, "message" => null));
        echo "
\t
";
        
        $__internal_7a66ce06cb5bada00ffe869caec6fb71089434d31064efa658a6e08a99d8b208->leave($__internal_7a66ce06cb5bada00ffe869caec6fb71089434d31064efa658a6e08a99d8b208_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_67c811fff4ce096e7d171bd76e7ce463b924f52f7c629ecc5a0168f374942f88 = $this->env->getExtension("native_profiler");
        $__internal_67c811fff4ce096e7d171bd76e7ce463b924f52f7c629ecc5a0168f374942f88->enter($__internal_67c811fff4ce096e7d171bd76e7ce463b924f52f7c629ecc5a0168f374942f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pauser/js/task-process.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_67c811fff4ce096e7d171bd76e7ce463b924f52f7c629ecc5a0168f374942f88->leave($__internal_67c811fff4ce096e7d171bd76e7ce463b924f52f7c629ecc5a0168f374942f88_prof);

    }

    public function getTemplateName()
    {
        return "PAUserBundle:Task:custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 71,  194 => 70,  188 => 69,  178 => 65,  173 => 62,  166 => 58,  163 => 57,  159 => 54,  147 => 48,  143 => 46,  139 => 44,  137 => 43,  132 => 42,  130 => 41,  123 => 39,  119 => 38,  112 => 36,  106 => 34,  102 => 33,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  74 => 20,  70 => 18,  67 => 17,  63 => 15,  61 => 14,  51 => 7,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
