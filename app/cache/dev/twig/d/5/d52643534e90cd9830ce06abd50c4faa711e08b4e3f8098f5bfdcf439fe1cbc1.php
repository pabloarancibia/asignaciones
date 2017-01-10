<?php

/* PAUserBundle:User:index.html.twig */
class __TwigTemplate_d52643534e90cd9830ce06abd50c4faa711e08b4e3f8098f5bfdcf439fe1cbc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PAUserBundle:User:index.html.twig", 1);
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
        $__internal_393e84a64708b94eb2aaa845ae4b9f4bda6918aea3a3e7ee449a7e553d28aeb4 = $this->env->getExtension("native_profiler");
        $__internal_393e84a64708b94eb2aaa845ae4b9f4bda6918aea3a3e7ee449a7e553d28aeb4->enter($__internal_393e84a64708b94eb2aaa845ae4b9f4bda6918aea3a3e7ee449a7e553d28aeb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PAUserBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_393e84a64708b94eb2aaa845ae4b9f4bda6918aea3a3e7ee449a7e553d28aeb4->leave($__internal_393e84a64708b94eb2aaa845ae4b9f4bda6918aea3a3e7ee449a7e553d28aeb4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_33c85153df59887973dcf2509173ab703e6e1808baf6fca2f8e7034f2d85dd69 = $this->env->getExtension("native_profiler");
        $__internal_33c85153df59887973dcf2509173ab703e6e1808baf6fca2f8e7034f2d85dd69->enter($__internal_33c85153df59887973dcf2509173ab703e6e1808baf6fca2f8e7034f2d85dd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    
    ";
        // line 7
        echo "\t<div class=\"progress no-border hidden\" id=\"delete-progress\">
\t\t<div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
\t\t\t<span class=\"sr-only\">Loading...</span>
\t\t</div>
\t</div>    
    
    ";
        // line 13
        echo twig_include($this->env, $context, "PAUserBundle:User:messages/success.html.twig");
        echo "
    ";
        // line 14
        echo twig_include($this->env, $context, "PAUserBundle:User:messages/danger.html.twig");
        echo "
\t<div class=\"container\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"page-header margin-none\">
\t\t\t\t<h2 class=\"padding-none\">USUARIOS</h2>
\t\t\t</div>
\t\t\t<div class=\"table-responsive\">
\t\t\t";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("Total Records:", array(), "messages");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "
\t\t\t
\t\t\t";
        // line 24
        echo "\t\t\t<form method=\"get\" action=\"\" class=\"form-inline\" role=\"search\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"text\" name=\"query\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "query"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search user"), "html", null, true);
        echo "\" required />
\t\t\t\t</div>
\t\t\t\t<input type=\"submit\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search"), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t</form>
\t\t\t";
        // line 30
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 31
            echo "\t\t\t\t<h2> No search results </h2>
\t\t\t";
        }
        // line 33
        echo "\t\t\t
\t\t\t";
        // line 34
        if (twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 35
            echo "\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
                            <th>";
            // line 38
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Username"), "u.username");
            echo "</th>
                            <th>";
            // line 39
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("First Name"), "u.firstname");
            echo "</th>
                            <th>";
            // line 40
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Last Name"), "u.lastname");
            echo "</th>
                            <th>";
            // line 41
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("E-Mail"), "u.email");
            echo "</th>
                            <th>";
            // line 42
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Rol"), "u.role");
            echo "</th>
                            <th>";
            // line 43
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Created"), "u.createdAt");
            echo "</th>
                            <th>";
            // line 44
            echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Updated"), "u.updatedAt");
            echo "</th>
                            ";
            // line 46
            echo "                            ";
            // line 47
            echo "                            ";
            // line 48
            echo "                            ";
            // line 49
            echo "                            ";
            // line 50
            echo "                            ";
            // line 51
            echo "                            <th>Acciones</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t        ";
            // line 55
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 56
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\">
                                <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "</td>
                                <td>
                                    ";
                // line 62
                if (($this->getAttribute($context["user"], "role", array()) == "ROLE_ADMIN")) {
                    // line 63
                    echo "                                        <strong>Administrator</strong>
                                    ";
                } elseif (($this->getAttribute(                // line 64
$context["user"], "role", array()) == "ROLE_USER")) {
                    // line 65
                    echo "                                        <strong>User</strong>
                                    ";
                }
                // line 67
                echo "                                </td>
                                <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "createdAt", array()), "d-m-Y H:i"), "html", null, true);
                echo "</td>
                                <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "updatedAt", array()), "d-m-Y H:i"), "html", null, true);
                echo "</td>
\t\t\t\t                <td class=\"actions\">
\t\t\t                        <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pa_user_view", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">
\t\t\t                             ";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("View"), "html", null, true);
                echo "
\t\t\t                        </a>

\t\t\t                        <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pa_user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">
\t\t\t                           ";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit"), "html", null, true);
                echo "
\t\t\t                        </a>

\t\t\t                        <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
\t\t\t                           ";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete"), "html", null, true);
                echo "
\t\t\t                        </a>
\t\t\t\t                </td>
                            </tr>
\t\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
        }
        // line 88
        echo "\t\t\t\t";
        // line 89
        echo "\t\t\t\t<div class=\"navigation\">
\t\t\t\t\t";
        // line 90
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<p>
\t\t";
        // line 98
        echo twig_include($this->env, $context, "PAUserBundle:User:forms/form.html.twig", array("form" => (isset($context["delete_form_ajax"]) ? $context["delete_form_ajax"] : $this->getContext($context, "delete_form_ajax")), "message" => $this->env->getExtension('translator')->trans("Are you sure ?"), "id" => "form-delete", "with_submit" => false));
        echo "
\t\t
\t</p>
";
        
        $__internal_33c85153df59887973dcf2509173ab703e6e1808baf6fca2f8e7034f2d85dd69->leave($__internal_33c85153df59887973dcf2509173ab703e6e1808baf6fca2f8e7034f2d85dd69_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f8f468dab3bca515e032db1bc2752c923e7a8d476b9ec28fa9a530646a3215f4 = $this->env->getExtension("native_profiler");
        $__internal_f8f468dab3bca515e032db1bc2752c923e7a8d476b9ec28fa9a530646a3215f4->enter($__internal_f8f468dab3bca515e032db1bc2752c923e7a8d476b9ec28fa9a530646a3215f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pauser/js/delete-user.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_f8f468dab3bca515e032db1bc2752c923e7a8d476b9ec28fa9a530646a3215f4->leave($__internal_f8f468dab3bca515e032db1bc2752c923e7a8d476b9ec28fa9a530646a3215f4_prof);

    }

    public function getTemplateName()
    {
        return "PAUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 104,  271 => 103,  265 => 102,  254 => 98,  243 => 90,  240 => 89,  238 => 88,  233 => 85,  222 => 80,  215 => 76,  211 => 75,  205 => 72,  201 => 71,  196 => 69,  192 => 68,  189 => 67,  185 => 65,  183 => 64,  180 => 63,  178 => 62,  173 => 60,  169 => 59,  165 => 58,  161 => 57,  156 => 56,  152 => 55,  146 => 51,  144 => 50,  142 => 49,  140 => 48,  138 => 47,  136 => 46,  132 => 44,  128 => 43,  124 => 42,  120 => 41,  116 => 40,  112 => 39,  108 => 38,  103 => 35,  101 => 34,  98 => 33,  94 => 31,  92 => 30,  87 => 28,  80 => 26,  76 => 24,  69 => 21,  59 => 14,  55 => 13,  47 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
