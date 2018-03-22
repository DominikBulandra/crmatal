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
            echo "<table class=\"table table-bordered\">
\t\t\t<thread class=\"thead-dark\">
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">Id</th>
     \t\t\t <th scope=\"col\">Oznaczenie</th>
     \t\t</tr>
     \t</thread>
     \t <tbody>
\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["places"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
                // line 11
                echo "\t\t
    
     <tr>

\t\t<td>";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["place"], "id", array()), "html", null, true);
                echo "</td>
\t\t\t<td><BUTTON class=\"btn btn-info\">";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["place"], "notation", array()), "html", null, true);
                echo "</BUTTON></td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "</tbody>
</table>
";
        } else {
            // line 22
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
        return array (  59 => 22,  54 => 19,  45 => 16,  41 => 15,  35 => 11,  31 => 10,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if places|length %}
<table class=\"table table-bordered\">
\t\t\t<thread class=\"thead-dark\">
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">Id</th>
     \t\t\t <th scope=\"col\">Oznaczenie</th>
     \t\t</tr>
     \t</thread>
     \t <tbody>
\t{% for place in places %}
\t\t
    
     <tr>

\t\t<td>{{place.id}}</td>
\t\t\t<td><BUTTON class=\"btn btn-info\">{{place.notation}}</BUTTON></td>
\t\t</tr>
\t{% endfor %}
</tbody>
</table>
{% else %}
\t<div class=\"ui massage text-center\">
\t\t<p>
\t\t\tThere are no places.
\t\t</p>
\t</div>
{% endif %}", "C:\\xampp2\\htdocs\\crm/themes/demo/partials/places/places.htm", "");
    }
}
