<?php

/* PAUserBundle:User:edit.html.twig */
class __TwigTemplate_82056d73901e6900411a538a20fc3691167ee74cb245493f4013cc9ae9eba1ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PAUserBundle:User:edit.html.twig", 1);
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
        $__internal_93c4dd10aa3226c2302403d7ceaa96056df3107127e58e62aecb8196216ec209 = $this->env->getExtension("native_profiler");
        $__internal_93c4dd10aa3226c2302403d7ceaa96056df3107127e58e62aecb8196216ec209->enter($__internal_93c4dd10aa3226c2302403d7ceaa96056df3107127e58e62aecb8196216ec209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PAUserBundle:User:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93c4dd10aa3226c2302403d7ceaa96056df3107127e58e62aecb8196216ec209->leave($__internal_93c4dd10aa3226c2302403d7ceaa96056df3107127e58e62aecb8196216ec209_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4167ea59990a0f0f5ed6708cba4a130533d25805ae6a4e60b8aff659281732f8 = $this->env->getExtension("native_profiler");
        $__internal_4167ea59990a0f0f5ed6708cba4a130533d25805ae6a4e60b8aff659281732f8->enter($__internal_4167ea59990a0f0f5ed6708cba4a130533d25805ae6a4e60b8aff659281732f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<div class=\"main container\">
\t\t<div class=\"row well\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<h2>";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit User", array(), "messages");
        echo "</h2>
\t\t\t\t</div>
                ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
                
                <div class=\"form-group\">
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your username")));
        echo "
                    <span class=\"text-danger\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</span>
                </div>
                
\t\t\t    <div class=\"form-group\">
\t\t\t        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'label');
        echo "
\t\t\t        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your first name")));
        echo "
\t\t\t        <span class=\"text-danger\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'errors');
        echo "</span>
\t\t\t    </div>

\t\t\t    <div class=\"form-group\">
\t\t\t        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'label');
        echo "
\t\t\t        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your last name")));
        echo "
\t\t\t        <span class=\"text-danger\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'errors');
        echo "</span>
\t\t\t    </div>

\t\t\t    <div class=\"form-group\">
\t\t\t        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
\t\t\t        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your email")));
        echo "
\t\t\t        <span class=\"text-danger\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</span>
\t\t\t    </div>

\t\t\t    <div class=\"form-group\">
\t\t\t        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label');
        echo "
\t\t\t        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your password")));
        echo "
\t\t\t        <span class=\"text-danger\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "</span>
\t\t\t    </div>

\t\t\t    <div class=\"form-group\">
\t\t\t        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'label');
        echo "
\t\t\t        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t        <span class=\"text-danger\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'errors');
        echo "</span>
\t\t\t    </div>

\t\t\t\t<div class=\"checkbox\">
\t\t\t\t    <label>
\t\t\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'widget');
        echo "Active
\t\t\t\t\t\t<span class=\"text-danger\">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'errors');
        echo "</span>
\t\t\t\t    </label>
\t\t\t\t</div>
\t\t\t</fieldset>

\t\t    <p>
\t\t        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Update user", "attr" => array("class" => "btn btn-success")));
        echo "
\t\t    </p>                
        
                ";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_4167ea59990a0f0f5ed6708cba4a130533d25805ae6a4e60b8aff659281732f8->leave($__internal_4167ea59990a0f0f5ed6708cba4a130533d25805ae6a4e60b8aff659281732f8_prof);

    }

    public function getTemplateName()
    {
        return "PAUserBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 61,  164 => 58,  155 => 52,  151 => 51,  143 => 46,  139 => 45,  135 => 44,  128 => 40,  124 => 39,  120 => 38,  113 => 34,  109 => 33,  105 => 32,  98 => 28,  94 => 27,  90 => 26,  83 => 22,  79 => 21,  75 => 20,  68 => 16,  64 => 15,  60 => 14,  54 => 11,  49 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
