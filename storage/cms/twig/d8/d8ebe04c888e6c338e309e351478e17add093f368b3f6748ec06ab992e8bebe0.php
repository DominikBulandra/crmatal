<?php

/* C:\xampp\htdocs\crm/plugins/dominik/projects/components/projectslist/default.htm */
class __TwigTemplate_064972f6924e42eef6a44433f619c91f14fe24708d9671569cb0335cf6680b37 extends Twig_Template
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
  <button class=\"projlist\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    Wybór Inwestycji
  </button>
    <div class=\"dropdown-menu ddmenu\" aria-labelledby=\"dropdownMenuButton\">
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ev"] ?? null));
        foreach ($context['_seq'] as $context["code"] => $context["name"]) {
            // line 9
            echo "


 
   \t<form data-request=\"";
            // line 13
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::onSave\">
   \t<button type=\"submit\" data-request-confirm=\"Przełączyć inwestycję?\" class=\"dropdown-button\">";
            // line 14
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</button>
   \t<input type=\"Text\" name=\"idproj\" value=";
            // line 15
            echo twig_escape_filter($this->env, $context["code"], "html", null, true);
            echo " style=\"display: none\">
    <input type=\"Text\" name=\"projname\" value=";
            // line 16
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo " style=\"display: none\">
   </form>

    <div class=\"dropdown-divider\"></div>
  


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "<!-- eDay -->

  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\crm/plugins/dominik/projects/components/projectslist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  58 => 16,  54 => 15,  50 => 14,  46 => 13,  40 => 9,  36 => 8,  29 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% framework %}
{% framework extras %}
<div class=\"dropdown\">
  <button class=\"projlist\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    Wybór Inwestycji
  </button>
    <div class=\"dropdown-menu ddmenu\" aria-labelledby=\"dropdownMenuButton\">
\t\t{% for code,name in ev %}



 
   \t<form data-request=\"{{__SELF__}}::onSave\">
   \t<button type=\"submit\" data-request-confirm=\"Przełączyć inwestycję?\" class=\"dropdown-button\">{{name}}</button>
   \t<input type=\"Text\" name=\"idproj\" value={{code}} style=\"display: none\">
    <input type=\"Text\" name=\"projname\" value={{name}} style=\"display: none\">
   </form>

    <div class=\"dropdown-divider\"></div>
  


{% endfor %}<!-- eDay -->

  </div>
</div>

", "C:\\xampp\\htdocs\\crm/plugins/dominik/projects/components/projectslist/default.htm", "");
    }
}
