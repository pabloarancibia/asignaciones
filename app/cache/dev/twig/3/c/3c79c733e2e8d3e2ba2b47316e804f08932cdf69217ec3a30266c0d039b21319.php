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
        $__internal_b953d7f06ff3acc5b201ba526ec0d40226e5677c7cfa90d8038b039013061b65 = $this->env->getExtension("native_profiler");
        $__internal_b953d7f06ff3acc5b201ba526ec0d40226e5677c7cfa90d8038b039013061b65->enter($__internal_b953d7f06ff3acc5b201ba526ec0d40226e5677c7cfa90d8038b039013061b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PAUserBundle:Task:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b953d7f06ff3acc5b201ba526ec0d40226e5677c7cfa90d8038b039013061b65->leave($__internal_b953d7f06ff3acc5b201ba526ec0d40226e5677c7cfa90d8038b039013061b65_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_76960ad460d0301a0e6bf30753bc6c5b565a562e6ddc33b8b81eb7b9b975032e = $this->env->getExtension("native_profiler");
        $__internal_76960ad460d0301a0e6bf30753bc6c5b565a562e6ddc33b8b81eb7b9b975032e->enter($__internal_76960ad460d0301a0e6bf30753bc6c5b565a562e6ddc33b8b81eb7b9b975032e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "                \t    <span class=\"text-danger\">En Espera</span>
                \t";
        } elseif (($this->getAttribute(        // line 28
(isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "status", array()) == 1)) {
            // line 29
            echo "                \t    <span class=\"text-success\">Finalizada</span>
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
\t    
\t    ";
        // line 51
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 52
            echo "\t    <div class=\"col-md-3\">
\t        <h3>Acciones:</h3>
\t        <p>
\t            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pa_task_edit", array("id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg btn-block\">
\t                <span class=\"glyphicon glyphicon-edit\"></span>
\t                Edit task
\t            </a>
\t        </p>
\t        <p>
\t            ";
            // line 61
            echo twig_include($this->env, $context, "PAUserBundle:Task:forms/form.html.twig", array("form" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "message" => "Seguro desea eliminar ?"));
            echo "
\t        </p>
\t    </div>
\t    ";
        }
        // line 65
        echo "\t</div>
";
        
        $__internal_76960ad460d0301a0e6bf30753bc6c5b565a562e6ddc33b8b81eb7b9b975032e->leave($__internal_76960ad460d0301a0e6bf30753bc6c5b565a562e6ddc33b8b81eb7b9b975032e_prof);

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
        return array (  137 => 65,  130 => 61,  121 => 55,  116 => 52,  114 => 51,  104 => 44,  94 => 37,  86 => 31,  82 => 29,  80 => 28,  77 => 27,  75 => 26,  65 => 19,  55 => 12,  47 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
