<?php

/* C:\xampp\htdocs\crm/themes/demo/pages/index_filtered.htm */
class __TwigTemplate_fa156cf3f8483aa0c45d4cfb5d3e0748c866ee8aecfd758b8d76a8d022bae9b6 extends Twig_Template
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
        echo "<h2 class=\"ui header\" style=\"margin-top:40px;\">Places ";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo " </h2>";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Projectslist"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo twig_escape_filter($this->env, ($context["siteid"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, ($context["dane"] ?? null), "html", null, true);
        echo "Tu";
        echo twig_escape_filter($this->env, ($context["dane2"] ?? null), "html", null, true);
        echo "
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
        $context['_seq'] = twig_ensure_traversable(($context["ev3"] ?? null));
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
<div class=\"row justify-content-md-center\">
\t<div class=\"col-sm-4\">
\t<div id=\"CellsFilter\" class=\"ui segment vertial\">
\t\t\t";
        // line 27
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onFilterCells", array("update" => array("places/cells" => "#partialCells"))));
        echo "
\t\t\t\t<label>Budynek</label>
\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["buildings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["building"]) {
            // line 30
            echo "\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"Filter2[buildings][]\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["building"], "id", array()), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["building"], "notation", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["building"], "id", array()), "html", null, true);
            echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['building'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t";
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "
\t\t\t</div>
\t
\t

\t\t<div id=\"PlacesFilter\" class=\"places-filter ui form\">
\t\t\ttu ";
        // line 44
        echo twig_escape_filter($this->env, ($context["dane"] ?? null), "html", null, true);
        echo "


\t\t\t
\t\t\t<div class=\"ui segment vertial\">

\t\t\t<div id=\"partialCells\">
\t\t\t
\t\t";
        // line 52
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("places/cells"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 53
        echo "\t\t
\t\t\t</div>

\t\t\t
\t\t\t</div>

\t\t</div>

\t
\t</div>

\t<div class=\"col-sm-8\">
\t<div id=\"partialPlaces\">
\t\t";
        // line 66
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("places/places"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 67
        echo "\t\t<BUTTON id=\"NextPage\" class=\"btn btn-default\">Następna strona</BUTTON>
\t</div>
\t</div>

</div>

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
        return "C:\\xampp\\htdocs\\crm/themes/demo/pages/index_filtered.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 67,  149 => 66,  134 => 53,  130 => 52,  119 => 44,  109 => 38,  97 => 34,  93 => 33,  88 => 30,  84 => 29,  79 => 27,  70 => 20,  61 => 17,  57 => 16,  53 => 15,  50 => 14,  46 => 13,  29 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'session' %}<h2 class=\"ui header\" style=\"margin-top:40px;\">Places {{value}} </h2>{% component 'Projectslist' %}
{{siteid}}{{dane}}Tu{{dane2}}
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
    \t{% for id in ev3 %}
        <tr>
            <td>{{id.id}}</td>
            <td>{{id.notation}}</td>
            <td>{{id.cell_id}}</td>
        </tr>
        {% endfor %}
        
    </tbody>
</table>
<button id=\"testbutton\">test</button>
<div class=\"row justify-content-md-center\">
\t<div class=\"col-sm-4\">
\t<div id=\"CellsFilter\" class=\"ui segment vertial\">
\t\t\t{{ form_ajax('onFilterCells',{ update: { 'places/cells': '#partialCells'}})}}
\t\t\t\t<label>Budynek</label>
\t\t\t\t{% for building in buildings %}
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"Filter2[buildings][]\" value=\"{{ building.id }}\" />
\t\t\t\t\t\t\t{{building.notation}} {{building.id}}</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t{{ form_close() }}
\t\t\t</div>
\t
\t

\t\t<div id=\"PlacesFilter\" class=\"places-filter ui form\">
\t\t\ttu {{dane}}


\t\t\t
\t\t\t<div class=\"ui segment vertial\">

\t\t\t<div id=\"partialCells\">
\t\t\t
\t\t{% partial 'places/cells' %}
\t\t
\t\t\t</div>

\t\t\t
\t\t\t</div>

\t\t</div>

\t
\t</div>

\t<div class=\"col-sm-8\">
\t<div id=\"partialPlaces\">
\t\t{% partial 'places/places' %}
\t\t<BUTTON id=\"NextPage\" class=\"btn btn-default\">Następna strona</BUTTON>
\t</div>
\t</div>

</div>

<script type=\"text/javascript\">
\t
\$(document).ready( function () {
    var table= \$('#table').DataTable();
} );
\t
</script>", "C:\\xampp\\htdocs\\crm/themes/demo/pages/index_filtered.htm", "");
    }
}
