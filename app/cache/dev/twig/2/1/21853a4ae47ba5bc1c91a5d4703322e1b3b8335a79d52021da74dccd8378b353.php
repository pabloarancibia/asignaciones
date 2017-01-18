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
        $__internal_c81a8713d67ca386f58fd155e25dc9380a6a4031f66b38b4ef2ac2adf6d1b9a7 = $this->env->getExtension("native_profiler");
        $__internal_c81a8713d67ca386f58fd155e25dc9380a6a4031f66b38b4ef2ac2adf6d1b9a7->enter($__internal_c81a8713d67ca386f58fd155e25dc9380a6a4031f66b38b4ef2ac2adf6d1b9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </body>
</html>
";
        
        $__internal_c81a8713d67ca386f58fd155e25dc9380a6a4031f66b38b4ef2ac2adf6d1b9a7->leave($__internal_c81a8713d67ca386f58fd155e25dc9380a6a4031f66b38b4ef2ac2adf6d1b9a7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d7a004426c8f0753276a38ad6f5d8cfb4f08b43e0cee418e8e9dfd295ec54b0 = $this->env->getExtension("native_profiler");
        $__internal_6d7a004426c8f0753276a38ad6f5d8cfb4f08b43e0cee418e8e9dfd295ec54b0->enter($__internal_6d7a004426c8f0753276a38ad6f5d8cfb4f08b43e0cee418e8e9dfd295ec54b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asignaciones";
        
        $__internal_6d7a004426c8f0753276a38ad6f5d8cfb4f08b43e0cee418e8e9dfd295ec54b0->leave($__internal_6d7a004426c8f0753276a38ad6f5d8cfb4f08b43e0cee418e8e9dfd295ec54b0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_34e29a63a82918768e381d2a5027eb9ad251f85f0d4ab6ec082c6e9bb2dfadb4 = $this->env->getExtension("native_profiler");
        $__internal_34e29a63a82918768e381d2a5027eb9ad251f85f0d4ab6ec082c6e9bb2dfadb4->enter($__internal_34e29a63a82918768e381d2a5027eb9ad251f85f0d4ab6ec082c6e9bb2dfadb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_34e29a63a82918768e381d2a5027eb9ad251f85f0d4ab6ec082c6e9bb2dfadb4->leave($__internal_34e29a63a82918768e381d2a5027eb9ad251f85f0d4ab6ec082c6e9bb2dfadb4_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6a894f4752650d97b998c049ae42293d917c4c21854b53a5708f864d05967ed = $this->env->getExtension("native_profiler");
        $__internal_e6a894f4752650d97b998c049ae42293d917c4c21854b53a5708f864d05967ed->enter($__internal_e6a894f4752650d97b998c049ae42293d917c4c21854b53a5708f864d05967ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 15
            echo "            ";
            echo twig_include($this->env, $context, "menu.html.twig");
            echo "
        ";
        }
        // line 17
        echo "        ";
        
        $__internal_e6a894f4752650d97b998c049ae42293d917c4c21854b53a5708f864d05967ed->leave($__internal_e6a894f4752650d97b998c049ae42293d917c4c21854b53a5708f864d05967ed_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6305e131b41adf4b9eadf0e93257a76a3bad874b30e9a387de3a959080b49952 = $this->env->getExtension("native_profiler");
        $__internal_6305e131b41adf4b9eadf0e93257a76a3bad874b30e9a387de3a959080b49952->enter($__internal_6305e131b41adf4b9eadf0e93257a76a3bad874b30e9a387de3a959080b49952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-3.1.1.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6305e131b41adf4b9eadf0e93257a76a3bad874b30e9a387de3a959080b49952->leave($__internal_6305e131b41adf4b9eadf0e93257a76a3bad874b30e9a387de3a959080b49952_prof);

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
        return array (  128 => 21,  124 => 20,  119 => 19,  113 => 18,  106 => 17,  100 => 15,  97 => 14,  91 => 13,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 23,  47 => 18,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
