<?php

/* PAUserBundle:User:messages/danger.html.twig */
class __TwigTemplate_33cf0e1d6e59c377d16aad0743106398eaa8a8610682833ad457bb58bd5f5e27 extends Twig_Template
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
        $__internal_83f5a675b99b087acb840336af7e8895374fd9ed4252232b0d79a72ccbdad86f = $this->env->getExtension("native_profiler");
        $__internal_83f5a675b99b087acb840336af7e8895374fd9ed4252232b0d79a72ccbdad86f->enter($__internal_83f5a675b99b087acb840336af7e8895374fd9ed4252232b0d79a72ccbdad86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PAUserBundle:User:messages/danger.html.twig"));

        // line 1
        echo " ";
        if ( !array_key_exists("flashMessage", $context)) {
            // line 2
            echo "     <div class\"alert alert-danger hidden\" id=\"message-danger\" role=\"alert\">
         <div class=\"container\">
              <span id=\"user-message-danger\"></span>
         </div>
     </div>
 ";
        }
        // line 8
        echo "
 ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "    \t<div class=\"alert alert-danger\" role=\"alert\">
    \t\t<div class=\"container\">";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
    \t</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_83f5a675b99b087acb840336af7e8895374fd9ed4252232b0d79a72ccbdad86f->leave($__internal_83f5a675b99b087acb840336af7e8895374fd9ed4252232b0d79a72ccbdad86f_prof);

    }

    public function getTemplateName()
    {
        return "PAUserBundle:User:messages/danger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  40 => 10,  36 => 9,  33 => 8,  25 => 2,  22 => 1,);
    }
}
