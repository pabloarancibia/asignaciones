<?php

/* PAUserBundle:User:forms/form.html.twig */
class __TwigTemplate_a92b3d7f3444dd9eaaeecb5e1aa1d01aaff64c4781ff1dc7f0917f60f29419e8 extends Twig_Template
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
        $__internal_595dc882bb26e4c008ab1c7f252b8a5eae5a256a3e045bc46106852ed6bef01a = $this->env->getExtension("native_profiler");
        $__internal_595dc882bb26e4c008ab1c7f252b8a5eae5a256a3e045bc46106852ed6bef01a->enter($__internal_595dc882bb26e4c008ab1c7f252b8a5eae5a256a3e045bc46106852ed6bef01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PAUserBundle:User:forms/form.html.twig"));

        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "form")) : ("form")))));
        echo "

";
        // line 5
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "    
    
    ";
        // line 8
        echo "    ";
        if (( !array_key_exists("with_submit", $context) || ((isset($context["with_submit"]) ? $context["with_submit"] : $this->getContext($context, "with_submit")) == true))) {
            // line 9
            echo "    <input type=\"button\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete user"), "html", null, true);
            echo "\" class=\"btn btn-lg btn-block btn-danger\" onclick=\"confirmDelete()\" >
    ";
        }
        // line 11
        echo "
";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<script>
    var message = '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "';
    function confirmDelete()
    {
        bootbox.confirm(message, function(result){
            if (result==true)
            {
                document.form.submit();
            }
        });
    }
</script>";
        
        $__internal_595dc882bb26e4c008ab1c7f252b8a5eae5a256a3e045bc46106852ed6bef01a->leave($__internal_595dc882bb26e4c008ab1c7f252b8a5eae5a256a3e045bc46106852ed6bef01a_prof);

    }

    public function getTemplateName()
    {
        return "PAUserBundle:User:forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 15,  45 => 12,  42 => 11,  36 => 9,  33 => 8,  27 => 5,  22 => 2,);
    }
}
