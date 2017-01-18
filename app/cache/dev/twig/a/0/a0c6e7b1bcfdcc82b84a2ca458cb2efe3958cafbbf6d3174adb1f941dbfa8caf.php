<?php

/* PAUserBundle:Task:add.html.twig */
class __TwigTemplate_a0c6e7b1bcfdcc82b84a2ca458cb2efe3958cafbbf6d3174adb1f941dbfa8caf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PAUserBundle:Task:add.html.twig", 1);
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
        $__internal_35ef2b1851ed8351ef0e20e0a5f718f7e915e9aa5d6f83c4e9d4d83c92eaaa72 = $this->env->getExtension("native_profiler");
        $__internal_35ef2b1851ed8351ef0e20e0a5f718f7e915e9aa5d6f83c4e9d4d83c92eaaa72->enter($__internal_35ef2b1851ed8351ef0e20e0a5f718f7e915e9aa5d6f83c4e9d4d83c92eaaa72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PAUserBundle:Task:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35ef2b1851ed8351ef0e20e0a5f718f7e915e9aa5d6f83c4e9d4d83c92eaaa72->leave($__internal_35ef2b1851ed8351ef0e20e0a5f718f7e915e9aa5d6f83c4e9d4d83c92eaaa72_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa8abc6c88bbdb579dbf64ab1300643fd0f8018dd9c9b0933c0522ab6f655d07 = $this->env->getExtension("native_profiler");
        $__internal_fa8abc6c88bbdb579dbf64ab1300643fd0f8018dd9c9b0933c0522ab6f655d07->enter($__internal_fa8abc6c88bbdb579dbf64ab1300643fd0f8018dd9c9b0933c0522ab6f655d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<div class=\"main container\">
\t\t<div class=\"row well\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<h2>New Task</h2>
\t\t\t\t</div>
\t\t\t\t";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
\t\t\t\t\t<fieldset>
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
\t\t\t\t\t        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Task title")));
        echo "
\t\t\t\t\t    </div>

\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'label');
        echo "
\t\t\t\t\t        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t    </div>

\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
\t\t\t\t\t        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Task description")));
        echo "
\t\t\t\t\t    </div>
\t\t\t\t\t</fieldset>

\t\t\t\t    <p>
\t\t\t\t        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Create task", "attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t    </p>

\t\t\t\t";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_fa8abc6c88bbdb579dbf64ab1300643fd0f8018dd9c9b0933c0522ab6f655d07->leave($__internal_fa8abc6c88bbdb579dbf64ab1300643fd0f8018dd9c9b0933c0522ab6f655d07_prof);

    }

    public function getTemplateName()
    {
        return "PAUserBundle:Task:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 33,  91 => 30,  83 => 25,  79 => 24,  72 => 20,  68 => 19,  61 => 15,  57 => 14,  51 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
