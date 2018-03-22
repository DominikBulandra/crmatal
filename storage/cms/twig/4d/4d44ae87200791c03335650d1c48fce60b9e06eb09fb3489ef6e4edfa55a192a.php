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
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        // line 2
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 3
        echo "<div class=\"dropdown\">
  <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    Wybór Inwestycji
  </button>
    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ev"] ?? null));
        foreach ($context['_seq'] as $context["d"] => $context["eDay"]) {
            // line 9
            echo "

 
   \t<form data-request=\"";
            // line 12
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::onSave\">
   \t<button type=\"submit\" data-request-confirm=\"Przełączyć inwestycję?\" class=\"btn btn-default\">";
            // line 13
            echo twig_escape_filter($this->env, $context["eDay"], "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $context["d"], "html", null, true);
            echo "</button>
   \t<input type=\"Text\" name=\"idproj\" value=";
            // line 14
            echo twig_escape_filter($this->env, $context["eDay"], "html", null, true);
            echo " style=\"display: none\">
   </form>

    <div class=\"dropdown-divider\"></div>
  


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['d'], $context['eDay'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
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
        return array (  69 => 21,  55 => 14,  49 => 13,  45 => 12,  40 => 9,  36 => 8,  29 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% framework %}
{% framework extras %}
<div class=\"dropdown\">
  <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    Wybór Inwestycji
  </button>
    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
\t\t{% for d,eDay in ev %}


 
   \t<form data-request=\"{{__SELF__}}::onSave\">
   \t<button type=\"submit\" data-request-confirm=\"Przełączyć inwestycję?\" class=\"btn btn-default\">{{eDay}} {{ d }}</button>
   \t<input type=\"Text\" name=\"idproj\" value={{eDay}} style=\"display: none\">
   </form>

    <div class=\"dropdown-divider\"></div>
  


{% endfor %}<!-- eDay -->

  </div>
</div>

", "C:\\xampp2\\htdocs\\crm/plugins/dominik/projects/components/projectslist/default.htm", "");
    }
}
