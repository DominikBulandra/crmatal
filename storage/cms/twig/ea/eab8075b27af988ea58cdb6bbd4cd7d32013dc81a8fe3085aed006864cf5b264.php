<?php

/* C:\xampp\htdocs\crm/themes/demo/partials/places/cells.htm */
class __TwigTemplate_1801f0a4234d2bc3ee132e25c2dd52275d05aea17b32be55597e4ef4f7d37728 extends Twig_Template
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
        echo "<label>Klatka</label>
\t";
        // line 2
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onFilterPlaces", array("update" => array("places/places" => "#partialPlaces"))));
        echo "
\t\t\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cells"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
            // line 4
            echo "\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"Filter[cells][]\" value=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cell"], "id", array()), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cell"], "notation", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cell"], "id", array()), "html", null, true);
            echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t\t\t\t";
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\crm/themes/demo/partials/places/cells.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  39 => 8,  35 => 7,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<label>Klatka</label>
\t{{ form_ajax('onFilterPlaces',{ update: { 'places/places': '#partialPlaces'}})}}
\t\t\t\t{% for cell in cells %}
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"Filter[cells][]\" value=\"{{ cell.id }}\" />
\t\t\t\t\t\t\t{{cell.notation}} {{cell.id}}</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t\t{{ form_close() }}", "C:\\xampp\\htdocs\\crm/themes/demo/partials/places/cells.htm", "");
    }
}
