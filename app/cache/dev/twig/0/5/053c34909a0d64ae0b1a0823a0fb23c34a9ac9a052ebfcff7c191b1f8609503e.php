<?php

/* PAUserBundle:Task:forms/form.html.twig */
class __TwigTemplate_053c34909a0d64ae0b1a0823a0fb23c34a9ac9a052ebfcff7c191b1f8609503e extends Twig_Template
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
        $__internal_39c74ab0d25905305a80594cd848d4ffca0d6a6701154edec256af4cbc1071c6 = $this->env->getExtension("native_profiler");
        $__internal_39c74ab0d25905305a80594cd848d4ffca0d6a6701154edec256af4cbc1071c6->enter($__internal_39c74ab0d25905305a80594cd848d4ffca0d6a6701154edec256af4cbc1071c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PAUserBundle:Task:forms/form.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    \t<input type=\"button\" value=\"Eliminar Tarea\" class=\"btn btn-lg btn-block btn-danger\" onclick=\"confirmDelete();\"/>
";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<script>
    var message = '";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "';
    function confirmDelete()
    {
        bootbox.confirm(message, function(result) {
          if(result == true)
          {
              document.form.submit();
          }
        });         
    }
</script>";
        
        $__internal_39c74ab0d25905305a80594cd848d4ffca0d6a6701154edec256af4cbc1071c6->leave($__internal_39c74ab0d25905305a80594cd848d4ffca0d6a6701154edec256af4cbc1071c6_prof);

    }

    public function getTemplateName()
    {
        return "PAUserBundle:Task:forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  31 => 4,  26 => 2,  22 => 1,);
    }
}
