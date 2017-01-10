<?php

/* PAUserBundle:Task:view.html.twig */
class __TwigTemplate_3c79c733e2e8d3e2ba2b47316e804f08932cdf69217ec3a30266c0d039b21319 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PAUserBundle:Task:view.html.twig", 1);
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
        $__internal_72fb4d6b158dcc9006e6f8dd75fd43b8e4eadccf18248f162c143b42697f52dd = $this->env->getExtension("native_profiler");
        $__internal_72fb4d6b158dcc9006e6f8dd75fd43b8e4eadccf18248f162c143b42697f52dd->enter($__internal_72fb4d6b158dcc9006e6f8dd75fd43b8e4eadccf18248f162c143b42697f52dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PAUserBundle:Task:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72fb4d6b158dcc9006e6f8dd75fd43b8e4eadccf18248f162c143b42697f52dd->leave($__internal_72fb4d6b158dcc9006e6f8dd75fd43b8e4eadccf18248f162c143b42697f52dd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9d8d31d3ae1df64ada2f9b3953174d9fd8a90968c0e9f9f2b510601aeff5a72 = $this->env->getExtension("native_profiler");
        $__internal_b9d8d31d3ae1df64ada2f9b3953174d9fd8a90968c0e9f9f2b510601aeff5a72->enter($__internal_b9d8d31d3ae1df64ada2f9b3953174d9fd8a90968c0e9f9f2b510601aeff5a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<div class=\"container well\">
\t    <div class=\"col-md-9\">
\t    <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "title", array()), "html", null, true);
        echo "</h2>
\t        <br>
\t        <dl>
\t            <dt>Descripcion</dt>
\t            <dd>
\t                ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "description", array()), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>

\t            <dt>Usuario</dt>
\t            <dd>
\t                ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>

\t            <dt>Estado</dt>
\t            <dd>
                \t";
        // line 26
        if (($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "status", array()) == 0)) {
            // line 27
            echo "                \t    <span class=\"text-danger\">Espera</span>
                \t";
        } elseif (($this->getAttribute(        // line 28
(isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "status", array()) == 1)) {
            // line 29
            echo "                \t    <span class=\"text-success\">Finalizado</span>
                \t";
        }
        // line 31
        echo "\t                &nbsp;
\t            </dd>
\t            <br>

\t            <dt>Creada</dt>
\t            <dd>
\t                ";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "createdAt", array()), "d-m-Y H:i"), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>

\t            <dt>Actualizada</dt>
\t            <dd>
\t                ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "updatedAt", array()), "d-m-Y H:i"), "html", null, true);
        echo "
\t                &nbsp;
\t            </dd>
\t            <br>
\t        </dl>
\t    </div>
\t    <div class=\"col-md-3\">
\t        <h3>Acciones:</h3>
\t        <p>
\t            <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pa_task_edit", array("id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">
\t                <span class=\"glyphicon glyphicon-edit\"></span>
\t                Edit task
\t            </a>
\t        </p>
\t        <p>
\t            ";
        // line 59
        echo twig_include($this->env, $context, "PAUserBundle:Task:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "message" => "Seguro desea eliminar ?"));
        echo "
\t        </p>
\t    </div>
\t</div>
";
        
        $__internal_b9d8d31d3ae1df64ada2f9b3953174d9fd8a90968c0e9f9f2b510601aeff5a72->leave($__internal_b9d8d31d3ae1df64ada2f9b3953174d9fd8a90968c0e9f9f2b510601aeff5a72_prof);

    }

    public function getTemplateName()
    {
        return "PAUserBundle:Task:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 59,  116 => 53,  104 => 44,  94 => 37,  86 => 31,  82 => 29,  80 => 28,  77 => 27,  75 => 26,  65 => 19,  55 => 12,  47 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
