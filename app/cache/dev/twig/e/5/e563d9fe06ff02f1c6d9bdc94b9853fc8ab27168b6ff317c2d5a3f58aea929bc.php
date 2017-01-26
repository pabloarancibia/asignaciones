<?php

/* PAUserBundle:User:home.html.twig */
class __TwigTemplate_e563d9fe06ff02f1c6d9bdc94b9853fc8ab27168b6ff317c2d5a3f58aea929bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PAUserBundle:User:home.html.twig", 1);
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
        $__internal_e4bad75765bd9e9f08ccebba6d42aeeeba9e7cb5e8d9b7444a40ffe64d5045a2 = $this->env->getExtension("native_profiler");
        $__internal_e4bad75765bd9e9f08ccebba6d42aeeeba9e7cb5e8d9b7444a40ffe64d5045a2->enter($__internal_e4bad75765bd9e9f08ccebba6d42aeeeba9e7cb5e8d9b7444a40ffe64d5045a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PAUserBundle:User:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4bad75765bd9e9f08ccebba6d42aeeeba9e7cb5e8d9b7444a40ffe64d5045a2->leave($__internal_e4bad75765bd9e9f08ccebba6d42aeeeba9e7cb5e8d9b7444a40ffe64d5045a2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_db2c8d4f9d16f89089b5b285ca4ab22c79523201edd765f079a06035598ac243 = $this->env->getExtension("native_profiler");
        $__internal_db2c8d4f9d16f89089b5b285ca4ab22c79523201edd765f079a06035598ac243->enter($__internal_db2c8d4f9d16f89089b5b285ca4ab22c79523201edd765f079a06035598ac243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<div class=\"container\">
        <h2 class=\"text-center\">
            Bienvenido
            ";
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_ADMIN")) {
            // line 9
            echo "                Administrador
            ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 10
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_USER")) {
            // line 11
            echo "                Usuario
            ";
        }
        // line 13
        echo "            :
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
        </h2>
\t</div>
";
        
        $__internal_db2c8d4f9d16f89089b5b285ca4ab22c79523201edd765f079a06035598ac243->leave($__internal_db2c8d4f9d16f89089b5b285ca4ab22c79523201edd765f079a06035598ac243_prof);

    }

    public function getTemplateName()
    {
        return "PAUserBundle:User:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  59 => 13,  55 => 11,  53 => 10,  50 => 9,  48 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
