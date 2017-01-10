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
        $__internal_facd404dd72e8160e5942f19d59753d00cf6d5a8669083c23466cdfe77dbefd5 = $this->env->getExtension("native_profiler");
        $__internal_facd404dd72e8160e5942f19d59753d00cf6d5a8669083c23466cdfe77dbefd5->enter($__internal_facd404dd72e8160e5942f19d59753d00cf6d5a8669083c23466cdfe77dbefd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_facd404dd72e8160e5942f19d59753d00cf6d5a8669083c23466cdfe77dbefd5->leave($__internal_facd404dd72e8160e5942f19d59753d00cf6d5a8669083c23466cdfe77dbefd5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e265a91673877cc49f8c7b42eb90d9e27b657297cfa19f83173e25fad5cf1e81 = $this->env->getExtension("native_profiler");
        $__internal_e265a91673877cc49f8c7b42eb90d9e27b657297cfa19f83173e25fad5cf1e81->enter($__internal_e265a91673877cc49f8c7b42eb90d9e27b657297cfa19f83173e25fad5cf1e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e265a91673877cc49f8c7b42eb90d9e27b657297cfa19f83173e25fad5cf1e81->leave($__internal_e265a91673877cc49f8c7b42eb90d9e27b657297cfa19f83173e25fad5cf1e81_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb68d0be60a0da16960c8599c5386bf7ff4510eb1dc11d9a72897cab311dbc99 = $this->env->getExtension("native_profiler");
        $__internal_eb68d0be60a0da16960c8599c5386bf7ff4510eb1dc11d9a72897cab311dbc99->enter($__internal_eb68d0be60a0da16960c8599c5386bf7ff4510eb1dc11d9a72897cab311dbc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_eb68d0be60a0da16960c8599c5386bf7ff4510eb1dc11d9a72897cab311dbc99->leave($__internal_eb68d0be60a0da16960c8599c5386bf7ff4510eb1dc11d9a72897cab311dbc99_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb874713f37ef6f8834ab0a749a8d84e30b9dd9432563bec53f9c85d3766b48f = $this->env->getExtension("native_profiler");
        $__internal_fb874713f37ef6f8834ab0a749a8d84e30b9dd9432563bec53f9c85d3766b48f->enter($__internal_fb874713f37ef6f8834ab0a749a8d84e30b9dd9432563bec53f9c85d3766b48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_fb874713f37ef6f8834ab0a749a8d84e30b9dd9432563bec53f9c85d3766b48f->leave($__internal_fb874713f37ef6f8834ab0a749a8d84e30b9dd9432563bec53f9c85d3766b48f_prof);

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
