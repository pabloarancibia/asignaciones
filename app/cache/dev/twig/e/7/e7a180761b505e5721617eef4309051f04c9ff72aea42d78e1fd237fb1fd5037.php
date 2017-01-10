<?php

/* menu.html.twig */
class __TwigTemplate_e7a180761b505e5721617eef4309051f04c9ff72aea42d78e1fd237fb1fd5037 extends Twig_Template
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
        $__internal_f0be6a3150360b998ee1964fbf8dd0838205e62d7bc72f3fae9c502153a33605 = $this->env->getExtension("native_profiler");
        $__internal_f0be6a3150360b998ee1964fbf8dd0838205e62d7bc72f3fae9c502153a33605->enter($__internal_f0be6a3150360b998ee1964fbf8dd0838205e62d7bc72f3fae9c502153a33605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">Menu</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("pa_user_index");
        echo "\">Usuarios <span class=\"sr-only\">(current)</span></a></li>
        ";
        // line 19
        echo "        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Usuarios <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("pa_user_index");
        echo "\">Lista</a></li>
            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("pa_user_add");
        echo "\">Agregar</a></li>
            ";
        // line 25
        echo "            ";
        // line 26
        echo "            ";
        // line 27
        echo "            ";
        // line 28
        echo "            ";
        // line 29
        echo "          </ul>
        </li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 32
        echo $this->env->getExtension('translator')->getTranslator()->trans("Task", array(), "messages");
        echo " <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("pa_task_index");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("List Tasks", array(), "messages");
        echo "</a></li>
            <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("pa_task_add");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("New Task", array(), "messages");
        echo "</a></li>
          </ul>
        </li>
      </ul>
      ";
        // line 40
        echo "      ";
        // line 41
        echo "      ";
        // line 42
        echo "      ";
        // line 43
        echo "      ";
        // line 44
        echo "      ";
        // line 45
        echo "      ";
        // line 46
        echo "      ";
        // line 47
        echo "      ";
        // line 48
        echo "      ";
        // line 49
        echo "      ";
        // line 50
        echo "      ";
        // line 51
        echo "      ";
        // line 52
        echo "      ";
        // line 53
        echo "      ";
        // line 54
        echo "      ";
        // line 55
        echo "      ";
        // line 56
        echo "      ";
        // line 57
        echo "      ";
        // line 58
        echo "    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>";
        
        $__internal_f0be6a3150360b998ee1964fbf8dd0838205e62d7bc72f3fae9c502153a33605->leave($__internal_f0be6a3150360b998ee1964fbf8dd0838205e62d7bc72f3fae9c502153a33605_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 58,  124 => 57,  122 => 56,  120 => 55,  118 => 54,  116 => 53,  114 => 52,  112 => 51,  110 => 50,  108 => 49,  106 => 48,  104 => 47,  102 => 46,  100 => 45,  98 => 44,  96 => 43,  94 => 42,  92 => 41,  90 => 40,  81 => 35,  75 => 34,  70 => 32,  65 => 29,  63 => 28,  61 => 27,  59 => 26,  57 => 25,  53 => 23,  49 => 22,  44 => 19,  40 => 17,  22 => 1,);
    }
}
