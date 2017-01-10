<?php

/* layout.html.twig */
class __TwigTemplate_21853a4ae47ba5bc1c91a5d4703322e1b3b8335a79d52021da74dccd8378b353 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30c6154ac46e9758764fc2db900de41e15e2caaa17de5645b6b8020c0162722e = $this->env->getExtension("native_profiler");
        $__internal_30c6154ac46e9758764fc2db900de41e15e2caaa17de5645b6b8020c0162722e->enter($__internal_30c6154ac46e9758764fc2db900de41e15e2caaa17de5645b6b8020c0162722e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </body>
</html>
";
        
        $__internal_30c6154ac46e9758764fc2db900de41e15e2caaa17de5645b6b8020c0162722e->leave($__internal_30c6154ac46e9758764fc2db900de41e15e2caaa17de5645b6b8020c0162722e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_015197f0dbb83bf0944362cdba0be9de61322aa31315fece4f87ba3425e11282 = $this->env->getExtension("native_profiler");
        $__internal_015197f0dbb83bf0944362cdba0be9de61322aa31315fece4f87ba3425e11282->enter($__internal_015197f0dbb83bf0944362cdba0be9de61322aa31315fece4f87ba3425e11282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asignaciones";
        
        $__internal_015197f0dbb83bf0944362cdba0be9de61322aa31315fece4f87ba3425e11282->leave($__internal_015197f0dbb83bf0944362cdba0be9de61322aa31315fece4f87ba3425e11282_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b7598d4e3125783ec811ea3152729788cdc8fa09549d1028e7264667cc8aad1a = $this->env->getExtension("native_profiler");
        $__internal_b7598d4e3125783ec811ea3152729788cdc8fa09549d1028e7264667cc8aad1a->enter($__internal_b7598d4e3125783ec811ea3152729788cdc8fa09549d1028e7264667cc8aad1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_b7598d4e3125783ec811ea3152729788cdc8fa09549d1028e7264667cc8aad1a->leave($__internal_b7598d4e3125783ec811ea3152729788cdc8fa09549d1028e7264667cc8aad1a_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_849fa4469981d95abfbd6e423e09e1ab8ec36ce8b2dc20a77a52da85b09debf6 = $this->env->getExtension("native_profiler");
        $__internal_849fa4469981d95abfbd6e423e09e1ab8ec36ce8b2dc20a77a52da85b09debf6->enter($__internal_849fa4469981d95abfbd6e423e09e1ab8ec36ce8b2dc20a77a52da85b09debf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "        ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_849fa4469981d95abfbd6e423e09e1ab8ec36ce8b2dc20a77a52da85b09debf6->leave($__internal_849fa4469981d95abfbd6e423e09e1ab8ec36ce8b2dc20a77a52da85b09debf6_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a73e662b9db9573b9fdbf62d8d9522e206add62aca4f2f1ca901ee3e04ab8e79 = $this->env->getExtension("native_profiler");
        $__internal_a73e662b9db9573b9fdbf62d8d9522e206add62aca4f2f1ca901ee3e04ab8e79->enter($__internal_a73e662b9db9573b9fdbf62d8d9522e206add62aca4f2f1ca901ee3e04ab8e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-3.1.1.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_a73e662b9db9573b9fdbf62d8d9522e206add62aca4f2f1ca901ee3e04ab8e79->leave($__internal_a73e662b9db9573b9fdbf62d8d9522e206add62aca4f2f1ca901ee3e04ab8e79_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 19,  118 => 18,  113 => 17,  107 => 16,  97 => 14,  91 => 13,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 21,  47 => 16,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
