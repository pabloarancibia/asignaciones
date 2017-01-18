<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_73d535b3ecb6360aa9979c28824477402a6f8fc2b68d06bc77a510dabe952553 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17b55a1d3cb5a218c805e97a1e3c44a758747811669211625f9e38ef5ae0cf2b = $this->env->getExtension("native_profiler");
        $__internal_17b55a1d3cb5a218c805e97a1e3c44a758747811669211625f9e38ef5ae0cf2b->enter($__internal_17b55a1d3cb5a218c805e97a1e3c44a758747811669211625f9e38ef5ae0cf2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17b55a1d3cb5a218c805e97a1e3c44a758747811669211625f9e38ef5ae0cf2b->leave($__internal_17b55a1d3cb5a218c805e97a1e3c44a758747811669211625f9e38ef5ae0cf2b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b108993fd15f6883532a809297fc472e18759b81f9304fec19c772d692aa3b5 = $this->env->getExtension("native_profiler");
        $__internal_9b108993fd15f6883532a809297fc472e18759b81f9304fec19c772d692aa3b5->enter($__internal_9b108993fd15f6883532a809297fc472e18759b81f9304fec19c772d692aa3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9b108993fd15f6883532a809297fc472e18759b81f9304fec19c772d692aa3b5->leave($__internal_9b108993fd15f6883532a809297fc472e18759b81f9304fec19c772d692aa3b5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_95539979ad627c58145ea56779a02f39f24482ef52f92973428c8dbc65744dc5 = $this->env->getExtension("native_profiler");
        $__internal_95539979ad627c58145ea56779a02f39f24482ef52f92973428c8dbc65744dc5->enter($__internal_95539979ad627c58145ea56779a02f39f24482ef52f92973428c8dbc65744dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_95539979ad627c58145ea56779a02f39f24482ef52f92973428c8dbc65744dc5->leave($__internal_95539979ad627c58145ea56779a02f39f24482ef52f92973428c8dbc65744dc5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd96051857f8822e5f9d8503e8afe270f55b34d1cb75b2c1b4a080893a2c336a = $this->env->getExtension("native_profiler");
        $__internal_cd96051857f8822e5f9d8503e8afe270f55b34d1cb75b2c1b4a080893a2c336a->enter($__internal_cd96051857f8822e5f9d8503e8afe270f55b34d1cb75b2c1b4a080893a2c336a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cd96051857f8822e5f9d8503e8afe270f55b34d1cb75b2c1b4a080893a2c336a->leave($__internal_cd96051857f8822e5f9d8503e8afe270f55b34d1cb75b2c1b4a080893a2c336a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
