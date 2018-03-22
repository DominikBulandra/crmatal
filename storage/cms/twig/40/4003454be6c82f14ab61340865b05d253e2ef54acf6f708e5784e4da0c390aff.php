<?php

/* C:\xampp2\htdocs\crm/themes/demo/pages/index_filtered.htm */
class __TwigTemplate_0884ce4518aed105873b2ed73026872eae86e73cbd0919e9398261caa14620d0 extends Twig_Template
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
<div class=\"row justify-content-md-center\">
\t<div class=\"col-sm-4\">
\t<div id=\"CellsFilter\" class=\"ui segment vertial\">
\t\t\t";
        // line 24
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onFilterCells", array("update" => array("places/cells" => "#partialCells"))));
        echo "
\t\t\t\t<label>Budynek</label>
\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["buildings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["building"]) {
            // line 27
            echo "\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"Filter2[buildings][]\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["building"], "id", array()), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t";
            // line 31
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
        // line 35
        echo "\t\t\t";
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "
\t\t\t</div>
\t
\t

\t\t<div id=\"PlacesFilter\" class=\"places-filter ui form\">
\t\t\ttu ";
        // line 41
        echo twig_escape_filter($this->env, ($context["dane"] ?? null), "html", null, true);
        echo "


\t\t\t
\t\t\t<div class=\"ui segment vertial\">

\t\t\t<div id=\"partialCells\">
\t\t\t
\t\t";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("places/cells"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 50
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
        // line 63
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("places/places"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 64
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
        return "C:\\xampp2\\htdocs\\crm/themes/demo/pages/index_filtered.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 64,  143 => 63,  128 => 50,  124 => 49,  113 => 41,  103 => 35,  91 => 31,  87 => 30,  82 => 27,  78 => 26,  73 => 24,  64 => 17,  55 => 14,  51 => 13,  48 => 12,  44 => 11,  29 => 2,  19 => 1,);
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
</script>", "C:\\xampp2\\htdocs\\crm/themes/demo/pages/index_filtered.htm", "");
    }
}
