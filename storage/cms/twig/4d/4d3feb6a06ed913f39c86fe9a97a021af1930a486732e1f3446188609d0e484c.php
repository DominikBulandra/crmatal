<?php

/* C:\xampp\htdocs\crm/themes/demo/pages/garages.htm */
class __TwigTemplate_52bd5263b446c6b11fa4ed0506d250dc87c7b79727926e3dab41932eed826df8 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "<h2 class=\"ui header\" style=\"margin-top:40px;\">Garaze </h2>

<table id=\"table\" class=\"display\">
    <thead>
        <tr>
            <th>Id </th>
            <th>Oznaczenie</th>
            <th>cell id</th>
        </tr>
    </thead>
    <tbody>
    \t
    \t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ev4"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
            // line 14
            echo "        <tr>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "notation", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "cell_id", array()), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        
    </tbody>
</table>
<button id=\"testbutton\">test</button>


<script type=\"text/javascript\">
\t
\$(document).ready( function () {
    var table= \$('#table').DataTable();
} );
\t
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\crm/themes/demo/pages/garages.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 20,  51 => 17,  47 => 16,  43 => 15,  40 => 14,  36 => 13,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'session' %}<h2 class=\"ui header\" style=\"margin-top:40px;\">Garaze </h2>

<table id=\"table\" class=\"display\">
    <thead>
        <tr>
            <th>Id </th>
            <th>Oznaczenie</th>
            <th>cell id</th>
        </tr>
    </thead>
    <tbody>
    \t
    \t{% for id in ev4 %}
        <tr>
            <td>{{id.id}}</td>
            <td>{{id.notation}}</td>
            <td>{{id.cell_id}}</td>
        </tr>
        {% endfor %}
        
    </tbody>
</table>
<button id=\"testbutton\">test</button>


<script type=\"text/javascript\">
\t
\$(document).ready( function () {
    var table= \$('#table').DataTable();
} );
\t
</script>", "C:\\xampp\\htdocs\\crm/themes/demo/pages/garages.htm", "");
    }
}
