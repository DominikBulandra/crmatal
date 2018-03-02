<?php

/* C:\xampp2\htdocs\crm/plugins/dominik/projects/components/projectslist/default.htm */
class __TwigTemplate_3842e0870d7868c13b788634d3d76a4394e612dae342a758efc59c929ea4637a extends Twig_Template
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
        // line 1
        echo "
<div class=\"dropdown\">
  <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    Wybór Inwestycji
  </button>
    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ev"] ?? null));
        foreach ($context['_seq'] as $context["d"] => $context["eDay"]) {
            // line 8
            echo "

    <a class=\"dropdown-item\" href=\"#\" onclick=\"MyFunction();\">";
            // line 10
            echo twig_escape_filter($this->env, $context["eDay"], "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $context["d"], "html", null, true);
            echo "</a>
    <div class=\"dropdown-divider\"></div>
  


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['d'], $context['eDay'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "<!-- eDay -->

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\crm/plugins/dominik/projects/components/projectslist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 15,  35 => 10,  31 => 8,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div class=\"dropdown\">
  <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    Wybór Inwestycji
  </button>
    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
\t\t{% for d,eDay in ev %}


    <a class=\"dropdown-item\" href=\"#\" onclick=\"MyFunction();\">{{eDay}} {{ d }}</a>
    <div class=\"dropdown-divider\"></div>
  


{% endfor %}<!-- eDay -->

  </div>
</div>
", "C:\\xampp2\\htdocs\\crm/plugins/dominik/projects/components/projectslist/default.htm", "");
    }
}
