<?php

/* C:\xampp2\htdocs\crm/themes/demo/pages/garages.htm */
class __TwigTemplate_d466166b69a853f477e3bd5b189af5e818013ad1c08a59e1319ef331e11642e9 extends Twig_Template
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
        </tr>
    </thead>
    <tbody>
    \t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ev3"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["notation"]) {
            // line 12
            echo "        <tr>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "</td>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, $context["notation"], "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['notation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
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
        return "C:\\xampp2\\htdocs\\crm/themes/demo/pages/garages.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  45 => 14,  41 => 13,  38 => 12,  34 => 11,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'session' %}<h2 class=\"ui header\" style=\"margin-top:40px;\">Garaze </h2>

<table id=\"table\" class=\"display\">
    <thead>
        <tr>
            <th>Id </th>
            <th>Oznaczenie</th>
        </tr>
    </thead>
    <tbody>
    \t{% for id, notation in ev3 %}
        <tr>
            <td>{{id}}</td>
            <td>{{notation}}</td>
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
</script>", "C:\\xampp2\\htdocs\\crm/themes/demo/pages/garages.htm", "");
    }
}
