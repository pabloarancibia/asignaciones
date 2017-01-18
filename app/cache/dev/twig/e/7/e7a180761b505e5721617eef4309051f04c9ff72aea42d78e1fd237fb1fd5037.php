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
        $__internal_7d226cc936fa8783f77cf9951b76c98cfa042206c21060e487ad6f0f4a4e29b2 = $this->env->getExtension("native_profiler");
        $__internal_7d226cc936fa8783f77cf9951b76c98cfa042206c21060e487ad6f0f4a4e29b2->enter($__internal_7d226cc936fa8783f77cf9951b76c98cfa042206c21060e487ad6f0f4a4e29b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

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
        
        ";
        // line 18
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 19
            echo "        
        <li class=\"active\"><a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("pa_user_index");
            echo "\">Usuarios <span class=\"sr-only\">(current)</span></a></li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Usuarios <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("pa_user_index");
            echo "\">Lista Usuarios</a></li>
            <li><a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("pa_user_add");
            echo "\">Agregar Usuarios</a></li>
          </ul>
        </li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
            // line 29
            echo $this->env->getExtension('translator')->getTranslator()->trans("Task", array(), "messages");
            echo " <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("pa_task_index");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Lista Tareas", array(), "messages");
            echo "</a></li>
            <li><a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("pa_task_add");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Nueva Tarea", array(), "messages");
            echo "</a></li>
          </ul>
        </li>
        ";
        }
        // line 36
        echo "        
        ";
        // line 37
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 38
            echo "        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("pa_task_custom");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Mis Tareas", array(), "messages");
            echo "</a></li>
        ";
        }
        // line 40
        echo "        
      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
                 <li>
                     <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("pa_user_logout");
        echo "\">Salir</a>
                 </li>
      </ul>
      ";
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
        echo "      ";
        // line 59
        echo "      ";
        // line 60
        echo "      ";
        // line 61
        echo "      ";
        // line 62
        echo "      ";
        // line 63
        echo "      ";
        // line 64
        echo "      ";
        // line 65
        echo "      ";
        // line 66
        echo "    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>";
        
        $__internal_7d226cc936fa8783f77cf9951b76c98cfa042206c21060e487ad6f0f4a4e29b2->leave($__internal_7d226cc936fa8783f77cf9951b76c98cfa042206c21060e487ad6f0f4a4e29b2_prof);

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
        return array (  145 => 66,  143 => 65,  141 => 64,  139 => 63,  137 => 62,  135 => 61,  133 => 60,  131 => 59,  129 => 58,  127 => 57,  125 => 56,  123 => 55,  121 => 54,  119 => 53,  117 => 52,  115 => 51,  113 => 50,  111 => 49,  109 => 48,  103 => 44,  97 => 40,  89 => 38,  87 => 37,  84 => 36,  75 => 32,  69 => 31,  64 => 29,  57 => 25,  53 => 24,  46 => 20,  43 => 19,  41 => 18,  22 => 1,);
    }
}
