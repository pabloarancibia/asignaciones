<?php

/* PAUserBundle:Security:login.html.twig */
class __TwigTemplate_d7b47d5d0316d474b9cf764e51573525cf3f3e899f05666abcf1d476b025bf49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PAUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a4d3a2b792b5ec80e25829d8daba86b8437f331ceaf5e71c876770af054a34b = $this->env->getExtension("native_profiler");
        $__internal_0a4d3a2b792b5ec80e25829d8daba86b8437f331ceaf5e71c876770af054a34b->enter($__internal_0a4d3a2b792b5ec80e25829d8daba86b8437f331ceaf5e71c876770af054a34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PAUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a4d3a2b792b5ec80e25829d8daba86b8437f331ceaf5e71c876770af054a34b->leave($__internal_0a4d3a2b792b5ec80e25829d8daba86b8437f331ceaf5e71c876770af054a34b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e6457b8d22bea52a347812b39c245273fc3803744c6ba29d8250f541a1c9c366 = $this->env->getExtension("native_profiler");
        $__internal_e6457b8d22bea52a347812b39c245273fc3803744c6ba29d8250f541a1c9c366->enter($__internal_e6457b8d22bea52a347812b39c245273fc3803744c6ba29d8250f541a1c9c366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/signin.css"), "html", null, true);
        echo "\">
";
        
        $__internal_e6457b8d22bea52a347812b39c245273fc3803744c6ba29d8250f541a1c9c366->leave($__internal_e6457b8d22bea52a347812b39c245273fc3803744c6ba29d8250f541a1c9c366_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b04cabc13e739770ae9bd78ec5827f66fbef5e20a82c9e0956abd84b598858a1 = $this->env->getExtension("native_profiler");
        $__internal_b04cabc13e739770ae9bd78ec5827f66fbef5e20a82c9e0956abd84b598858a1->enter($__internal_b04cabc13e739770ae9bd78ec5827f66fbef5e20a82c9e0956abd84b598858a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"container\">
\t\t<form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("pa_user_login_check");
        echo "\" method=\"post\" class=\"form-signin\">
\t\t\t<h2 class=\"form-signin-heading\">Please sign in</h2>

            ";
        // line 15
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 16
            echo "            <div class=\"text-danger\">
                <p>
                    <strong>
                        ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), "html", null, true);
            echo "
                    </strong>
                </p>
            </div>
            ";
        }
        // line 24
        echo "
\t\t    <label for=\"username\" class=\"sr-only\">USUARIO:</label>
\t\t    <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Usuario\" required autofocus />

\t\t    <label for=\"password\" class=\"sr-only\">Password:</label>
\t\t    <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Password\" required />
\t\t    
\t\t    <input type=\"hidden\" name=\"_target_path\" value=\"pa_user_homepage\" />

\t\t    <button type=\"submit\" class=\"btn btn-lg btn-primary btn-block\">INGRESAR</button>
\t\t</form>
    </div> <!-- /container -->
";
        
        $__internal_b04cabc13e739770ae9bd78ec5827f66fbef5e20a82c9e0956abd84b598858a1->leave($__internal_b04cabc13e739770ae9bd78ec5827f66fbef5e20a82c9e0956abd84b598858a1_prof);

    }

    public function getTemplateName()
    {
        return "PAUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 26,  89 => 24,  81 => 19,  76 => 16,  74 => 15,  68 => 12,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
