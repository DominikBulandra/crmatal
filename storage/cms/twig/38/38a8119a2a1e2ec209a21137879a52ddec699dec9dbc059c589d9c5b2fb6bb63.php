<?php

/* C:\xampp2\htdocs\crm/themes/demo/partials/places/places.htm */
class __TwigTemplate_2d7202d8dd3cf601ec38801b369ee424d7d00eefd50159b9f4646bec398d3664 extends Twig_Template
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
        if (twig_length_filter($this->env, ($context["places"] ?? null))) {
            // line 2
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["places"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
                // line 3
                echo "\t\t<div class=\"ui segment vertical\">
\t\t\t<h3 class=\"ui header\">";
                // line 4
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["place"], "notation", array()), "html", null, true);
                echo "</h3>
\t\t\t<div class=\"ui\">";
                // line 5
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["place"], "id", array()), "html", null, true);
                echo "</div>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 9
            echo "\t<div class=\"ui massage text-center\">
\t\t<p>
\t\t\tThere are no places.
\t\t</p>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\crm/themes/demo/partials/places/places.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  33 => 5,  29 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if places|length %}
\t{% for place in places %}
\t\t<div class=\"ui segment vertical\">
\t\t\t<h3 class=\"ui header\">{{place.notation}}</h3>
\t\t\t<div class=\"ui\">{{place.id}}</div>
\t\t</div>
\t{% endfor %}
{% else %}
\t<div class=\"ui massage text-center\">
\t\t<p>
\t\t\tThere are no places.
\t\t</p>
\t</div>
{% endif %}", "C:\\xampp2\\htdocs\\crm/themes/demo/partials/places/places.htm", "");
    }
}
