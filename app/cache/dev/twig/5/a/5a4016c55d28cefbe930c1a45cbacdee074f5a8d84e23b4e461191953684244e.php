<?php

/* PAUserBundle:User:view.html.twig */
class __TwigTemplate_5a4016c55d28cefbe930c1a45cbacdee074f5a8d84e23b4e461191953684244e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PAUserBundle:User:view.html.twig", 1);
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
        $__internal_808832f9b4f8b365888e4551d66b117c79dfacb16e55740ce8519514f6ce1db2 = $this->env->getExtension("native_profiler");
        $__internal_808832f9b4f8b365888e4551d66b117c79dfacb16e55740ce8519514f6ce1db2->enter($__internal_808832f9b4f8b365888e4551d66b117c79dfacb16e55740ce8519514f6ce1db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PAUserBundle:User:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_808832f9b4f8b365888e4551d66b117c79dfacb16e55740ce8519514f6ce1db2->leave($__internal_808832f9b4f8b365888e4551d66b117c79dfacb16e55740ce8519514f6ce1db2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3bc67ad217b9fdf34305b9c50c8353102ca25478664efc5ebe635876222ed46 = $this->env->getExtension("native_profiler");
        $__internal_a3bc67ad217b9fdf34305b9c50c8353102ca25478664efc5ebe635876222ed46->enter($__internal_a3bc67ad217b9fdf34305b9c50c8353102ca25478664efc5ebe635876222ed46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<div class=\"container well\">
\t    <div class=\"col-md-9\">
\t    <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName", array()), "html", null, true);
        echo "</h2>
\t        <br>
\t        <dl>
\t            <dt>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username"), "html", null, true);
        echo "</dt>
\t            <dd>
\t                ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>

\t            <dt>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("First name"), "html", null, true);
        echo "</dt>
\t            <dd>
\t                ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>

\t            <dt>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Last name"), "html", null, true);
        echo "</dt>
\t            <dd>
\t                ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName", array()), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>

\t            <dt>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Email"), "html", null, true);
        echo "</dt>
\t            <dd>
\t                ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>

\t            <dt>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Role"), "html", null, true);
        echo "</dt>
\t            <dd>
                \t";
        // line 40
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "role", array()) == "ROLE_ADMIN")) {
            // line 41
            echo "\t\t\t\t\t\t";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Administrator", array(), "messages");
            // line 42
            echo "\t\t\t\t\t";
        } elseif (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "role", array()) == "ROLE_USER")) {
            // line 43
            echo "\t\t\t\t\t\t";
            echo $this->env->getExtension('translator')->getTranslator()->trans("User", array(), "messages");
            // line 44
            echo "                \t";
        }
        // line 45
        echo "\t                &nbsp;
\t            </dd>
\t            <br>

\t            <dt>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Active"), "html", null, true);
        echo "</dt>
\t            <dd>
                \t";
        // line 51
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "isActive", array()) == 1)) {
            // line 52
            echo "\t\t\t\t\t\t<span class=\"text-success\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Enabled", array(), "messages");
            echo "</span>
\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 53
(isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "isActive", array()) == 0)) {
            // line 54
            echo "\t\t\t\t\t\t<span class=\"text-warning\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Disabled", array(), "messages");
            echo "</span>
                \t";
        }
        // line 56
        echo "\t                &nbsp;
\t            </dd>
\t            <br>

\t            <dt>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created"), "html", null, true);
        echo "</dt>
\t            <dd>
\t                ";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "createdAt", array()), "d-m-Y H:i"), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>

\t            <dt>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Updated"), "html", null, true);
        echo "</dt>
\t            <dd>
\t                ";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "updatedAt", array()), "d-m-Y H:i"), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>
\t        </dl>
\t    </div>
\t    <div class=\"col-md-3\">
\t    \t<h3>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Actions"), "html", null, true);
        echo ":</h3>
\t\t\t<p>
\t\t    \t<a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pa_user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">
\t\t    \t\t<span class=\"glyphicon glyphicon-edit\"></span>
\t\t        \t";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit user"), "html", null, true);
        echo "
\t\t\t\t </a>
\t\t\t</p>
\t\t\t<p>
\t\t\t    ";
        // line 84
        echo twig_include($this->env, $context, "PAUserBundle:User:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "message" => $this->env->getExtension('translator')->trans("Are you sure ?")));
        echo "
\t\t\t</p>
\t    </div>
\t</div>
";
        
        $__internal_a3bc67ad217b9fdf34305b9c50c8353102ca25478664efc5ebe635876222ed46->leave($__internal_a3bc67ad217b9fdf34305b9c50c8353102ca25478664efc5ebe635876222ed46_prof);

    }

    public function getTemplateName()
    {
        return "PAUserBundle:User:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 84,  196 => 80,  191 => 78,  186 => 76,  176 => 69,  171 => 67,  163 => 62,  158 => 60,  152 => 56,  146 => 54,  144 => 53,  139 => 52,  137 => 51,  132 => 49,  126 => 45,  123 => 44,  120 => 43,  117 => 42,  114 => 41,  112 => 40,  107 => 38,  99 => 33,  94 => 31,  86 => 26,  81 => 24,  73 => 19,  68 => 17,  60 => 12,  55 => 10,  47 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
