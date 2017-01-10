<?php

/* PAUserBundle:Task:edit.html.twig */
class __TwigTemplate_6060c8c435ed718cb6576e65947f2ea8a816c54f5b26b810ec1518474b4761e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PAUserBundle:Task:edit.html.twig", 1);
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
        $__internal_472deb9b668329727f44b75adefdd4d50690b1c1c2b7f8994c1f17de41dfd9e4 = $this->env->getExtension("native_profiler");
        $__internal_472deb9b668329727f44b75adefdd4d50690b1c1c2b7f8994c1f17de41dfd9e4->enter($__internal_472deb9b668329727f44b75adefdd4d50690b1c1c2b7f8994c1f17de41dfd9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PAUserBundle:Task:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_472deb9b668329727f44b75adefdd4d50690b1c1c2b7f8994c1f17de41dfd9e4->leave($__internal_472deb9b668329727f44b75adefdd4d50690b1c1c2b7f8994c1f17de41dfd9e4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4afa1468994700206ae0f209ddc9c2afb17c6a66ad2ca0b5d03b48f9ca72585a = $this->env->getExtension("native_profiler");
        $__internal_4afa1468994700206ae0f209ddc9c2afb17c6a66ad2ca0b5d03b48f9ca72585a->enter($__internal_4afa1468994700206ae0f209ddc9c2afb17c6a66ad2ca0b5d03b48f9ca72585a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "PAUserBundle:Task:messages/success.html.twig");
        echo "
\t<div class=\"main container\">
\t\t<div class=\"row well\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<h2>Editar Tarea</h2>
\t\t\t\t</div>
\t\t\t\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
\t\t\t\t    <h4 class=\"text-danger\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</h4>

\t\t\t\t\t<fieldset>
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
\t\t\t\t\t        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Título")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>

\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'label');
        echo "
\t\t\t\t\t        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>

\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
\t\t\t\t\t        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Descripción")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>
\t\t\t\t\t</fieldset>

\t\t\t\t    <p>
\t\t\t\t        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Actualizar Tarea", "attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t    </p>

\t\t\t\t";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_4afa1468994700206ae0f209ddc9c2afb17c6a66ad2ca0b5d03b48f9ca72585a->leave($__internal_4afa1468994700206ae0f209ddc9c2afb17c6a66ad2ca0b5d03b48f9ca72585a_prof);

    }

    public function getTemplateName()
    {
        return "PAUserBundle:Task:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 39,  112 => 36,  104 => 31,  100 => 30,  96 => 29,  89 => 25,  85 => 24,  81 => 23,  74 => 19,  70 => 18,  66 => 17,  59 => 13,  55 => 12,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
